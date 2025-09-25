<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFichaRequest extends FormRequest
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
            'Id_ficha' => 'required|string|max:20|unique:ficha,Id_ficha',
            'descripcion' => 'required|string|max:255',
            'jornada_ficha' => 'required|string|max:50',
            'Id_Programa' => 'required|integer|exists:programas,Id_Programa'
        ];
    }
    public function messages()
    {
        return [
            'Id_ficha.required' => 'El ID de la ficha es obligatorio.',
            'Id_ficha.string' => 'El ID de la ficha debe ser una cadena de texto.',
            'Id_ficha.max' => 'El ID de la ficha no debe exceder los 20 caracteres.',
            'Id_ficha.unique' => 'El ID de la ficha ya existe.',

            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'descripcion.max' => 'La descripción no debe exceder los 255 caracteres.',

            'jornada_ficha.required' => 'La jornada de la ficha es obligatoria.',
            'jornada_ficha.string' => 'La jornada de la ficha debe ser una cadena de texto.',
            'jornada_ficha.max' => 'La jornada de la ficha no debe exceder los 50 caracteres.',

            'Id_Programa.required' => 'El programa es obligatorio.',
            'Id_Programa.integer' => 'El programa debe ser un número entero.',
            'Id_Programa.exists' => 'El programa no existe en la tabla de programas.'
        ];
    }
}
