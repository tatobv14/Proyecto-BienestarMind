<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUsuarioRoleRequest extends FormRequest
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
            'Id_Rol' => 'required|integer|exists:roles,Id_Rol',
            'Id_Usuario' => 'required|integer|exists:usuario,Id_Usuario'
        ];
    }

    public function messages()
    {
        return [
            'Id_Rol.required' => 'El rol es obligatorio.',
            'Id_Rol.integer' => 'El rol debe ser un número entero.',
            'Id_Rol.exists' => 'El rol no existe en la tabla de roles.',

            'Id_Usuario.required' => 'El usuario es obligatorio.',
            'Id_Usuario.integer' => 'El usuario debe ser un número entero.',
            'Id_Usuario.exists' => 'El usuario no existe en la tabla de usuarios.'
        ];
    }
}
