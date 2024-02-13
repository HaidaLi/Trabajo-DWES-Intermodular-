<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'login' => 'required|string|max:255',
            'dni' => 'required|unique:usuarios,dni',
            'nombre' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Este campo es obligatorio.',
            'login.string' => 'Este campo debe de ser una cadena de texto.',
            'login.max' => 'Este campo no puede tener más de 255 caracteres.',

            'dni.required' => 'El campo de DNI es obligatorio.',
            'dni.unique' => 'El DNI ya se encuantra registrado.',

            'nombre.required' => 'El campo de nombre es obligatorio.',
            'nombre.string' => 'El campo de nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo de nombre no puede tener más de 255 caracteres.',

            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.string' => 'El campo de contraseña debe ser una cadena de texto.',
            'password.min' => 'El campo de contraseña debe tener al menos 8 caracteres.',
        ];
    }

}
