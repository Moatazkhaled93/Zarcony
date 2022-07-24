<?php

namespace App\Http\Requests\Product;

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
            'image' => 'required|image',
            'title' => 'required|string',
            'skd' => 'required|unique:products,skd,NULL,id,deleted_at,NULL',
            'brand_id' => 'required|string|exists:brands,id',
            'details'=> 'required',
            'price' =>'required'
        ];
    }
}
