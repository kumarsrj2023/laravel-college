<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegister extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
            // 'terms'     => 'required|boolean'
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }

    public function attributes(){
        return [
            'name'  => 'User Name',
            'email' => 'User email',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password',
            'terms' => 'Terms',
        ];
    }

    protected function prepareForValidation(): void
{
    $this->merge([
        'slug' => strtoupper($this->name),
    ]);
}
}
