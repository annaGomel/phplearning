<?php

namespace App\Http\Services;

use App\User;
use Auth;

use Hash;
use Image;
use File;

class UserService
{
    public function updateUser($request, $user)
    {
        $clearAvatar = $this->getReqClearAvatar($request);
        $avatarNew = $this->getReqAvatar($request);
        $showPhone = $this->getReqShowPhone($request);

        $data = $request->except(['_token','clear_avatar','show_phone']);

        $data['show_phone'] = $showPhone;

        if ($clearAvatar) {
            $this->clearAvatarSrv($user);
            $data['avatar'] = null;
        } else {
            if ($avatarNew) {
                $data['avatar'] = $this->addAvatarSrv($avatarNew);
            }
        }

        $user->fill($data);

        if ($user->update()) {
            return true;
        }

        return false;
    }

    public function addAvatarSrv($originalImage)
    {
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/images/portfolio/';
        $thumbnailImage->resize(150, 150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        return time().$originalImage->getClientOriginalName();
    }

    public function clearAvatarSrv($user)
    {
        if ($user->avatar) {
            $pathToImage = public_path().'/images/portfolio/'.$user->avatar;
            File::delete($pathToImage);
        }
    }

    public function getReqShowPhone($request)
    {
        if (strcmp($request->get('show_phone', 0), "on")==0) {
            return 1;
        }
        return 0;
    }

    public function getReqAvatar($request)
    {
        if ($request->hasFile('filename')) {
            return $request->file('filename');
        }
        
        return false;
    }

    public function getReqClearAvatar($request)
    {
        if (strcmp($request->get('clear_avatar', false), "on")==0) {
            return true;
        }

        return false;
    }

    public function updatePasswordUser($request, $user)
    {
        $currentPassword = $user->password;

        if (!Hash::check($request['current-password'], $currentPassword)) {
            return false;
        }

        $user->password = Hash::make($request['password']);
        ;

        if ($user->save()) {
            return true;
        }
        
        return false;
    }

    public function getExperienceUser($request)
    {
        if (empty($request)) {
            return false;
        }

        return User::find($request->user_id)->experience;
    }

    public function setExperienceUser($request)
    {
        if (empty($request)) {
            return false;
        }

        $user = User::find($request->user_id);
        $user->experience = random_int(1, 50);
        
        if ($user->update()) {
            return true;
        }

        return false;
    }
}
