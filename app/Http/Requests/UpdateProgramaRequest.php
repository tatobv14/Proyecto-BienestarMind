<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramaRequest extends FormRequest
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
            'Nombre_programa' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100'
        ];
    }
    
    public function messages()
    {
        return [
            'Nombre_programa.required' => 'El Nombre del programa es obligatorio.',
            'Nombre_programa.string' => 'El Nombre del programa debe ser una cadena de texto.',
            'Nombre_programa.max' => 'El Nombre del programa no debe exceder los 100 caracteres.',
            
            'Descripcion.required' => 'La Descripcion es obligatoria.',
            'Descripcion.string' => 'La Descripcion debe ser una cadena de texto.',
            'Descripcion.max' => 'La Descripcion no debe exceder los 100 caracteres.'
        ];
    }
}
