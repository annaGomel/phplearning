<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => 'required|unique:users,nickname,'.Auth::user()->id,
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'filename' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
