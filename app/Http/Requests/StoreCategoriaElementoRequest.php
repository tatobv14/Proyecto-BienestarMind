<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaElementoRequest extends FormRequest
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
