<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role_id' => [
                'required',
                'max:255',
            ],
            'name' => [
                'required',
                'max:255',
            ],
           'phone' => [
                'nullable',
                'max:255',
            ],
            'email' => [
                'email',
                Rule::unique(User::class)->ignore($this->user->id ?? null),
            ],
            'username' => [
                'nullable',
                'max:255',
            ],
            'password' => [
                'required',
            ],
            'status' => [
                'nullable',
            ],
            'address_line_one' => [
                'nullable',
            ],
            'address_line_two' => [
                'nullable',
            ],
            'country' => [
                'nullable',
            ],
            'state' => [
                'nullable',
            ],
            'city' => [
                'nullable',
            ],
            'postcode' => [
                'nullable',
            ],
            
        ];
    }

    public function authorize()
    {
        return true;
    }
}
