<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;   

class createEmployeeRequest extends FormRequest
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
            'emp_code' => 'required|max:10',
            'fullname' => 'required|max:255',
            'birthday' => 'required',
            'gender' => 'required',
            'dep_id' => 'required',
            'hometown' => 'required|max:255',
            'address' => 'required|max:255',
            'level' => 'required',
            'possition' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required',
            'tax_code' => 'required',

        ]; 
    }

    public function message() {
        return [
            'emp_code.required'             => 'Mã NV là bắt buộc',
            'emp_code.max'                  => 'Mã NV có tối đa 20 ký tự',
            'fullname.required'             => 'Tên NV là bắt buộc',
            'fullname.max'                  => 'Tên NV có tối đa 255 ký tự',
            'birthday.required'             => 'Ngày sinh là bắt buộc',
            'gender.required'               => ' Giới tính là bắt buộc',
            'address.required'              => 'Địa chỉ là bắt buộc',
            'address.max'                   => 'Địa chỉ không quá 255 kí tự',
            'phone.required'                => 'SĐT là bắt buộc',
            'dep_id.required'               => 'Mã phòng là bắt buộc',
            'email.required'                => 'email là bắt buộc',
            'tax_code.required'             => 'tax_code là bắt buộc',
            'hometown.required'             => 'Quê quán là bắt buộc',
            'hometown.max'                  => 'Quê quán không quá 255 ký tự',
            'possition.required'            => 'Chức vụ là bắt buộc',
            'possition.max'                 => 'Chức vụ không quá 255 ký tự',
            'level.required'                => 'Trình độ là bắt buộc',
        ];
    }  
}
