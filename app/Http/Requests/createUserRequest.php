<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class createUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_code'         => 'required|max:20',
            'password'          => 'required|min:6|max:255',
            'username'          => 'required|max:255',
            'role'              => 'required',
            'id'                => 'required',
        ];
    }

    public function message() {
        return [
            'user_code.required'            => 'Mã người dùng là bắt buộc',
            'user_code.max'                 => 'mã người dùng không quá 20 ký tự',
            'password.required'             => 'password là bắt buộc',
            'password.min'                  => 'password phải từ 6 đến 255 kí tự',
            'password.max'                  => 'password phải từ 6 đến 255 kí tự',
            'username.required'             => 'Tên người dùng là bắt buộc',
            'username.max'                  => 'Tên người không dài quá 255 kí tự',
            'role'                          => 'Role là bắt buộc',
            'id'                            => 'id là bắt buộc'
        ];  
    }
}
