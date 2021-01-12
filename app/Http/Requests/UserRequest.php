<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
        ];
    }

    /**
     *  Get the error messages for the defined validation rules.
     *
     * @return string[]
     */

    public function messages(): array
    {
        return [
            'email.required' => 'A email address is required!',
            'password.required' => 'A password is required!',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {

    }
}
