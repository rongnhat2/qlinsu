<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createBonusRequest extends FormRequest
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
            'emp_id' => 'required',
            'money' => 'required',
        ];
    }

    public function message() {
        return [
            'emp_id.required' => 'Mã NV là bắt buộc',
            'money.required' => 'Tiền thưởng là bắt buộc',
        ];
    }
}
