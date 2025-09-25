<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUsuarioRequest extends FormRequest
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
            'Nombres' => 'required|string|max:50',
            'Apellidos' => 'required|string|max:50',
            'Documento' => 'required|string|max:20|unique:usuario,Documento,' . $this->route('usuario')->Id_Usuario . ',Id_Usuario',
            'Correo' => 'required|email|max:100|unique:usuario,Correo,' . $this->route('usuario')->Id_Usuario . ',Id_Usuario',
            'Genero' => 'required|string|max:15',
            'Telefono' => 'required|string|max:20',
            'Fecha_de_Nacimiento' => 'required|date',
            'Contraseña' => 'required|string|min:8|max:100'
        ];

    }

    public function messages()
    {
        return [
            'Nombres.required' => 'El campo Nombres es obligatorio.',
            'Nombres.string' => 'El campo Nombres debe ser una cadena de texto.',
            'Nombres.max' => 'El campo Nombres no debe exceder los 50 caracteres.',

            'Apellidos.required' => 'El campo Apellidos es obligatorio.',
            'Apellidos.string' => 'El campo Apellidos debe ser una cadena de texto.',
            'Apellidos.max' => 'El campo Apellidos no debe exceder los 50 caracteres.',

            'Documento.required' => 'El campo Documento es obligatorio.',
            'Documento.string' => 'El campo Documento debe ser una cadena de texto.',
            'Documento.max' => 'El campo Documento no debe exceder los 20 caracteres.',
            'Documento.unique' => 'El Documento ya está en uso.',

            'Correo.required' => 'El campo Correo es obligatorio.',
            'Correo.email' => 'El campo Correo debe ser una dirección de correo electrónico válida.',
            'Correo.max' => 'El campo Correo no debe exceder los 100 caracteres.',
            'Correo.unique' => 'El Correo ya está en uso.',

            'Genero.required' => 'El campo Género es obligatorio.',
            'Genero.string' => 'El campo Género debe ser una cadena de texto.',
            'Genero.max' => 'El campo Género no debe exceder los 15 caracteres.',

            'Telefono.required' => 'El campo Teléfono es obligatorio.',
            'Telefono.string' => 'El campo Teléfono debe ser una cadena de texto.',
            'Telefono.max' => 'El campo Teléfono no debe exceder los 20 caracteres.',

            'Fecha_de_Nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio.',
            'Fecha_de_Nacimiento.date' => 'El campo Fecha de Nacimiento debe ser una fecha válida.',

            'Contraseña.required' => 'El campo Contraseña es obligatorio.',
            'Contraseña.string' => 'El campo Contraseña debe ser una cadena de texto.',
            'Contraseña.min' => 'El campo Contraseña debe tener al menos 8 caracteres.',
            'Contraseña.max' => 'El campo Contraseña no debe exceder los 100 caracteres.'
        ];
    }
}
