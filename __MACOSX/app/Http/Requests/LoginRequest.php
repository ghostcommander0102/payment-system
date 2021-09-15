<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'email.required' => __("Email address can not empty"),
            'password.required' => __("Password can not empty"),
            'email.email' => __('Invalid email address.'),
            'email.exists' => __("Email address does not exist.")
        ];
    }
}
