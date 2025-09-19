<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsesoriumRequest extends FormRequest
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
            'Id_Asesoria' => 'nullable|integer|exists:roles,Id_Rol',
            'Motivo_asesoria' => 'required|string|max:15|unique:usuario,Documento',
            'Fecha' => 'required|email|unique:usuario,Correo',
            'Id_Usuario_Recibe' => 'nullable|string|max:10',
            'Id_Usuario_Asesor' => 'nullable|string|max:15',
            'ficha_Id_ficha' => 'required|date',
        ];

    }

    public function messages()
    {
        return [
            'Nombres.required' => 'El nombre es obligatorio.',
            'Apellidos.required' => 'El apellido es obligatorio.',
            'Documento.required' => 'El documento es obligatorio.',
            'Documento.unique' => 'Este documento ya está registrado.',
            'Correo.unique' => 'Este correo ya está registrado.',
            'Documento.max' => 'El documento no puede superar 15 caracteres.',
            'Genero.max' => 'El género no puede superar 10 caracteres.',
            'Telefono.max' => 'El teléfono no puede superar 15 caracteres.',
            'Contraseña.required' => 'La contraseña es obligatoria.',
            'Contraseña.min' => 'La contraseña debe tener al menos 8 caracteres.'
        ];
    }
}
