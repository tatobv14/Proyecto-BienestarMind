<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEspacioRequest extends FormRequest
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
            "Id_Sede" => "required|integer|exists:sede,Id_Sede",
            "Nombre_del_espacio" => "required|string|max:100"
        ];
    }
    public function messages()
    {
        return [
            'Id_Sede.required' => 'La sede es obligatoria.',
            'Id_Sede.integer' => 'La sede debe ser un número entero.',
            'Id_Sede.exists' => 'La sede no existe en la base de datos.',

            'Nombre_del_espacio.required' => 'El nombre del espacio es obligatorio.',
            'Nombre_del_espacio.string' => 'El nombre del espacio debe ser una cadena de texto.',
            'Nombre_del_espacio.max' => 'El nombre del espacio no debe exceder los 100 caracteres.'

        ];
    }
}
