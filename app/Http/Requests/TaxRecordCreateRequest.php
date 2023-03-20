<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRecordCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'money' => 'required|numeric',
            'tax_type' => 'required|integer',
            'industry' => 'required|integer',
            'name' => 'required|max:128',
            'phone' => 'required|max:11',
        ];
    }

    public function messages(): array
    {
        return [
            'money.required' => '年收入不能为空',
            'money.numeric' => '年收入格式错误',
            'tax_type.required' => '税种不能为空',
            'industry.required' => '行业不能为空',
            'name.required' => '姓名不能为空',
            'phone.required' => '电话不能为空',
            'phone.max' => '电话格式不正确',
            'name.max' => '姓名不正确',
            'tax_type.integer' => '税种不正确',
            'industry.integer' => '行业不正确',
        ];
    }
}
