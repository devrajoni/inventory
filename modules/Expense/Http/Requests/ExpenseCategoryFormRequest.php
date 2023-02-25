<?php

namespace Modules\Expense\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Expense\Entities\ExpenseCategory;
use Illuminate\Validation\Rule;

class ExpenseCategoryFormRequest extends FormRequest
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
                Rule::unique(ExpenseCategory::class)->ignore($this->expense_category->id ?? null),
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
