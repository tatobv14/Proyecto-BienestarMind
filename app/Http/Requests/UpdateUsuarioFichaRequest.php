<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioFichaRequest extends FormRequest
{
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
            'Id_Usuario' => 'required|integer|exists:usuario,Id_Usuario',
            'Id_ficha' => 'required|string|max:20|exists:ficha,Id_ficha'
        ];
    }
    public function messages()
    {
        return [
            'Id_Usuario.required' => 'El usuario es obligatorio.',
            'Id_Usuario.integer' => 'El usuario debe ser un número entero.',
            'Id_Usuario.exists' => 'El usuario no existe en la tabla de usuarios.',

            'Id_ficha.required' => 'La ficha es obligatorio.',
            'Id_ficha.string' => 'La ficha debe ser una cadena de texto.',
            'Id_ficha.max' => 'La ficha no debe exceder los 20 caracteres.',
            'Id_ficha.exists' => 'La ficha no existe en la tabla de fichas.'
        ];
    }
}
