<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoriaElementoRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true; // Permitir la solicitud
    }

    /**
     * Reglas de validación para actualizar una categoría de elemento.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Descripcion' => 'required|string|max:50'                  
        ];
    }
    public function messages()
    {
        return [
            'Descripcion.required' => 'La descripción es obligatoria.',
            'Descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'Descripcion.max' => 'La descripción no debe exceder los 50 caracteres.'
        ];
    }
}