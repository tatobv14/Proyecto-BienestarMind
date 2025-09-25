<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRolesPermisoRequest extends FormRequest
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
            'Id_Rol' => 'exists:roles,Id_Rol',
            'Id_Permiso' => 'exists:permisos,Id_Permiso'
        ];
    }

    public function messages()
    {
        return [ 
            'Id_Rol.exists' => 'El rol no existe en la tabla de roles.',

            'Id_Permiso.exists' => 'El permiso no existe en la tabla de permisos.'
        ];
    }
}
