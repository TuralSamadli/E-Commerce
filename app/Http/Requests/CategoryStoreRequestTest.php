<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequestTest extends FormRequest
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
            'category_name'     => 'required|min:3',
            'category_icon'     => 'required|mimes:jpeg,png,jpg|max:1024'
        ];
    }
    public function messages()
    {
        return [
            'category_name.required' => 'Category name is required',
            'category_name.min'      => 'Minimum 3 simvol olmalidir',
            'category_icon.max'     => '1 kb-dan artiq ola bilmez'
        ];
    }
}
