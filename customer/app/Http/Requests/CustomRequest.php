<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'age' => 'required|numeric|min:18'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tối thiểu 2 ký tự',
            'name.max' => 'Tối đa 30 ký tự',
            'age.required' => 'Tuổi không được để trống',
            'age.numeric' => 'Mời nhập số',
            'age.min' => 'Tuổi không được dưới 18'
        ];
    }
}
