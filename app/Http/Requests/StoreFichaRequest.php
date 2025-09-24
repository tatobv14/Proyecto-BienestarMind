<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFichaRequest extends FormRequest
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
            'Id_ficha' => 'required|integer',
            'descripcion' => 'nullable|string|max:15',
            'jornada_ficha' => 'required|string|max:50',
            'Id_Programa' => 'required|string|max:100',

        ];
    }
    public function messages()
    {
        return [
        'Id_ficha.required' => 'El campo ID de la ficha es obligatorio.',
        'Id_ficha.integer' => 'El ID de la ficha debe ser un número entero.',
        
        'descripcion.string' => 'La descripción debe ser texto.',
        'descripcion.max' => 'La descripción no puede exceder los 15 caracteres.',

        'jornada_ficha.required' => 'La jornada es obligatoria.',
        'jornada_ficha.string' => 'La jornada debe ser texto.',
        'jornada_ficha.max' => 'La jornada no puede exceder los 50 caracteres.',

        'Id_Programa.required' => 'El ID del programa es obligatorio.',
        'Id_Programa.integer' => 'El ID del programa debe ser un número entero.',
    ];
    }
}
