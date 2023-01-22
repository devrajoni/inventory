<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendor_id' => [
                'nullable',
            ],
            'supplier_id' => [
                'nullable',
            ],
            'category_id' => [
                'nullable',
            ],
            'brand_id' => [
                'nullable',
            ],
            'unit_id' => [
                'nullable',
            ],
            'name' => [
                'required',
            ],
            'sku' => [
                'nullable',
            ],
            'description' => [
                'nullable',
            ],
            'buying_price' => [
                'required',
            ],
            'selling_price' => [
                'required',
            ],
            'discount' => [
                'nullable',
            ],
            'price' => [
                'required',
            ],
            'in_stock' => [
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
