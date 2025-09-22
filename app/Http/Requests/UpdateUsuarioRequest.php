<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUsuarioRequest extends FormRequest
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
    $Id_Usuario = $this->route('usuario')->Id_Usuario; 
        return [
            'Nombres'        => 'required|string|max:50',
            'Apellidos'      => 'required|string|max:50',
            'Documento' => [
                'required',
                'string',
                'max:20',
                Rule::unique('usuario', 'Documento')->ignore($Id_Usuario, 'Id_Usuario'),
            ],
            'Correo' => [
                'required',
                'email',
                'max:100',
                Rule::unique('usuario', 'Correo')->ignore($Id_Usuario, 'Id_Usuario'),
            ],
            'Telefono'       => 'nullable|string|max:15',                        
            'Fecha_de_Nacimiento' => 'required|date',
            'Contraseña'    => 'required|string|min:8'                 
        ];
            
    }

     public function messages()
    {
    return [
        'Nombres.required'    => 'El nombre es obligatorio.',
        'Apellidos.required'  => 'El apellido es obligatorio.',
        'Documento.required'  => 'El documento es obligatorio.',
        'Documento.unique'    => 'Este documento ya está registrado.',
        'Correo.unique'       => 'Este correo ya está registrado.',
        'Documento.max'       => 'El documento no puede superar 15 caracteres.',
        'Genero.max'          => 'El género no puede superar 10 caracteres.',
        'Telefono.max'        => 'El teléfono no puede superar 15 caracteres.',
        'Contraseña.required' => 'La contraseña es obligatoria.',
        'Contraseña.min'      => 'La contraseña debe tener al menos 8 caracteres.'
        ];
    }
}
