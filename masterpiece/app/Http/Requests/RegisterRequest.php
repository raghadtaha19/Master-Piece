<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can set this to true if you want the request to be authorized.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => ['required_without:user_name', 'string', 'email', 'exists:users,email'],
            'user_name' => ['required_without:email', 'string', 'exists:users,user_name'],
            'password' => [
                'required',
                'string',
                'regex:/.*[A-Z].*/', // Uppercase letter
                'regex:/.*[a-z].*/', // Lowercase letter
                'regex:/.*\d.*/',    // Digit
                'regex:/.*[@$!%#?&].*/', // Special character
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ];
    }
}
