<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'product_name'  => 'required',
            'product_price'  => 'required|numeric',
            'product_description'  => 'required',
            'category_id'  => 'required'

        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => 'Product name is required',
            'product_price.required' => 'Product price is required'
        ];
    }
}
