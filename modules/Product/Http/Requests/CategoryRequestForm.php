<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Product\Entities\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestForm extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'name' => [
                'required',
                'max:255',
                Rule::unique(Category::class)->ignore($this->category->id ?? null),
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
