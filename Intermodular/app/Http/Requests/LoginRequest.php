<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'El campo de login es obligatorio.',
            'login.string' => 'El campo de login debe ser una cadena de texto.',

            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.string' => 'El campo de contraseña debe ser una cadena de texto.',
        ];
    }
}
