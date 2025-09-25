<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSedeRequest extends FormRequest
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
            'Nombre_sede' => 'required|string|max:100',
            'Telefono_sede' => 'required|string|max:20',
            'Direccion_sede' => 'required|string|max:150'
        ];
    }
    public function messages()
    {
        return [
            'Nombre_sede.required' => 'El nombre de la sede es obligatorio.',
            'Nombre_sede.string' => 'El nombre de la sede debe ser una cadena de texto.',
            'Nombre_sede.max' => 'El nombre de la sede no debe exceder los 100 caracteres.',

            'Telefono_sede.required' => 'El teléfono de la sede es obligatorio.',
            'Telefono_sede.string' => 'El teléfono de la sede debe ser una cadena de texto.',
            'Telefono_sede.max' => 'El teléfono de la sede no debe exceder los 20 caracteres.',

            'Direccion_sede.required' => 'La dirección de la sede es obligatoria.',
            'Direccion_sede.string' => 'La dirección de la sede debe ser una cadena de texto.',
            'Direccion_sede.max' => 'La dirección de la sede no debe exceder los 150 caracteres.'
        ];
    }
}
