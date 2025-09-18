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
            'Tipo_Documento' => 'required|string|max:20',
            'Numero_Documento' => [
                'required',
                'string',
                'max:20',
                Rule::unique('usuario', 'Numero_Documento')->ignore($Id_Usuario, 'Id_Usuario'),
            ],
            'Correo_Electronico' => [
                'required',
                'email',
                'max:100',
                Rule::unique('usuario', 'Correo_Electronico')->ignore($Id_Usuario, 'Id_Usuario'),
            ],
            'Telefono'       => 'nullable|string|max:15',
            'Direccion'      => 'nullable|string|max:100',
            'Fecha_Nacimiento' => 'nullable|date',
            'Genero'         => 'nullable|string|max:10',
            'Rol'            => 'required|string|max:20',
            'Estado'         => 'required|boolean'
        ];
            
    }
}
