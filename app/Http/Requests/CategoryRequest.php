<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'cat_name' => 'required|string|unique:categories,cat_name,'.$this -> id,
'cat_desc' => 'required|string|max:100',
        ];
    }
    public function messages()
    {
        return [
        'required' => 'هذا الحقل مطلوب',
        'string' => 'هذا الحقل يجب ان يحتوي على احرف',
        'max' => 'هذا الحقل اكبر من اللازم',
        ];
    }
}
