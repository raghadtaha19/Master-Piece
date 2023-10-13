<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    protected $input_type;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required_without:user_name', 'string', 'email','exists:users,email'],
            'user_name' => ['required_without:email', 'string','exists:users,user_name'],
            'password' => [
                'required',
                'string',
                'regex:/(.*[A-Z].*)/',
                'regex:/(.*[a-z].*)/',
                'regex:/(.*\d.)/',
                'regex:/(.*[@$!%#?&].*)/',
            ],
        ];
    }
    public function messages()
    {
        return [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
{
    $this->ensureIsNotRateLimited();

    $credentials = [$this->input_type => $this->input($this->input_type), 'password' => $this->input('password')];

    if (! Auth::attempt($credentials, $this->boolean('remember'))) {
        RateLimiter::hit($this->throttleKey());

        throw ValidationException::withMessages([
            $this->input_type => trans('auth.failed'),
        ]);
    }

    RateLimiter::clear($this->throttleKey());
}


    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
    protected function prepareForValidation()
{
    $inputType = $this->input('input_type');

    if (filter_var($inputType, FILTER_VALIDATE_EMAIL)) {
        $this->input_type = 'email'; // Set the input_type to 'email'
        $this->merge(['email' => $inputType]);
    } else {
        $this->input_type = 'user_name'; // Set the input_type to 'user_name'
        $this->merge(['user_name' => $inputType]);
    }
}


}
