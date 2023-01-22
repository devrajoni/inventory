<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Product\Entities\Brand;

class BrandRequestForm extends FormRequest
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
                 Rule::unique(Brand::class)->ignore($this->brand->name ?? null),
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if ($this->hasFile('logo')) {
            $validated['logo'] = upload($this->logo, 'brands/', $this->brand->logo ?? null);
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
