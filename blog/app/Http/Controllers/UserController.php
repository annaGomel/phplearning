<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserPassRequest;

use Auth;
use Validator;

class UserController extends SiteController
{
    /**
    * Instantiate a new controller instance.
    *
    * @param  \App\User  $user
    * @param  \App\Http\Services\UserService  $userService
    * @return void
    */
    public function __construct(User $user, UserService $userService)
    {
        $this->template = 'index';
        $this->model = $user;

        $this->userService = $userService;
    }

    /**
     * Display profile user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $this->title = __('site.title_profile');

        $title = $this->title;
        $auth_user = Auth::user();

        $this->content = view('auth.profile', compact('title', 'auth_user'))->render();

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the profile user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $this->title = __('site.title_edit_profile');

        $title = $this->title;
        $auth_user = Auth::user();

        $this->content = view('auth.edit_user', compact('title', 'auth_user'))->render();

        return $this->renderOutput();
    }

    /**
     * Update the user in storage.
     *
     * @param  \App\Http\Services\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        if ($this->userService->updateUser($request, Auth::user())) {
            return redirect()->route('users.profile')->with('status', __('site.inf_update'));
        }

        return back()->withInput()->with('status', __('site.warning'));
    }

    /**
     * Show the form for editing password user.
     *
     * @return \Illuminate\Http\Response
     */
    public function editPassword()
    {
        $this->title = __('site.title_edit_password');

        $title = $this->title;
        $user = Auth::user();

        $this->content = view('auth.edit_password', compact('title', 'user'))->render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Services\UserPassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(UserPassRequest $request)
    {
        if ($this->userService->updatePasswordUser($request, Auth::user())) {
            return redirect()->route('profile')->with('status', __('site.pas_change'));
        }

        return back()->withInput()->with('status', __('site.warning'));
    }

    /**
     * Get experience.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response json
     */
    public function getExperience(Request $request)
    {
        $getExprnc = $this->userService->getExperienceUser($request);

        if ($getExprnc) {
            return response()->json([
                'success'=>__('site.get_experience'),
                'user_experience' => $getExprnc
            ]);
        }

        return response()->json([
            'status' => __('site.warning')
        ]);
    }

    /**
     * Set experience.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response json
     */
    public function setExperience(Request $request)
    {
        if ($this->userService->setExperienceUser($request)) {
            return response()->json([
                'success'=>__('site.set_experience')
            ]);
        }

        return response()->json([
            'status' => __('site.warning')
        ]);
    }
}
