<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:100|unique:products,name,' . $this->id,
            'description' => 'required|string',
            'price' => 'required|string',
            'status' => 'required|string',
            'photo' => 'nullable|mimes:png,jpg,jpeg,svg',
        ];
    }
//
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على احرف',
            'max' => 'هذا الحقل اكبر من اللازم',
        ];
    }
}
