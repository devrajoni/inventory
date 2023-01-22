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
                 Rule::unique(Category::class)->ignore($this->category->name ?? null),
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if ($this->hasFile('logo')) {
            $validated['logo'] = upload($this->logo, 'category/', $this->category->logo ?? null);
        }

        return $validated;
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
