<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createDisciplineRequest extends FormRequest
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
            'emp_id'            => 'required|max:20',
            'cause_discipline'  => 'required|max:255',
            'money'             => 'required',
            
        ];
    }

    public function message() {
        return [
            'emp_id.required'               => 'Mã NV là bắt buộc',
            'emp_id.max'                    => 'Mã NV không quá 20 ký tự',
            'cause_discipline.required'     => 'Lý do là bắt buộc', 
            'cause_discipline.max'          => 'Lý do không quá 255 ký tự',
            'money'                         => 'tiền phạt là bắt buộc',
        ];
    }
}
