<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'Nombres'        => 'required|string|max:20',
            'Apellidos'      => 'required|string|max:25',
            'Documento'      => 'required|string|max:15|unique:usuario,Documento',
            'Correo'        => 'required|email|unique:usuario,Correo',
            'Genero'        => 'nullable|string|max:10',
            'Telefono'      => 'nullable|string|max:15',
            'Fecha_de_Nacimiento' => 'required|date',
            'Contraseña'    => 'required|string|min:8',
            'ficha_Id_ficha' => 'nullable|string|exists:ficha,Id_ficha',
            'Id_Rol'        => 'required|integer|exists:role,Id_Rol'
        ];
            
    }

    public function messages()
    {
    return [
        'Nombres.required'    => 'El nombre es obligatorio.',
        'Apellidos.required'  => 'El apellido es obligatorio.',
        'Documento.required'  => 'El documento es obligatorio.',
        'Documento.unique'    => 'Este documento ya está registrado.',
        'Documento.max'       => 'El documento no puede superar 15 caracteres.',
        'Genero.max'          => 'El género no puede superar 10 caracteres.',
        'Telefono.max'        => 'El teléfono no puede superar 15 caracteres.',
        'Contraseña.required' => 'La contraseña es obligatoria.',
        'Contraseña.min'      => 'La contraseña debe tener al menos 8 caracteres.'
        ];
    }
}
