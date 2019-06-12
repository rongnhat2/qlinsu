<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createDepartmentRequest extends FormRequest
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
            'dep_code'              => 'required',
            'dep_name'              => 'required|max:255',
            'dep_manager'           => 'required|max:255',
            'dep_emp_total'         => 'required',
        ];
    }

    public function message() {
        return [
            'dep_code'                          => 'Mã phòng là bắt buộc',
            'dep_name.required'                 => 'Tên phòng là bắt buộc',
            'dep_name.max'                      => 'Tên phòng không quá 100 ký tự',
            'dep_manager.required'              => 'Tên trưởng phòng là bắt buộc',
            'dep_manager.max'                   => 'Tên trưởng phòng không quá 255 ký tự',
            'dep_emp_total'                     => 'Tổng nhân viên là bắt buộc',
        ];  
    }
}
