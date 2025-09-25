<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateElementoRequest extends FormRequest
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
    public function rules()
    {
        return [
            'Id_Categoria' => 'required|integer|exists:categoria_elementos,Id_Categoria',
            'Nombre_Elemento' => 'required|string|max:100',
            'Estado_Elemento' => 'required|string|max:100'
        ];
    }
    public function messages()
    {
        return [
            'Id_Categoria.required' => 'La categoría es obligatorio.',
            'Id_Categoria.integer' => 'La categoría debe ser un número entero.',
            'Id_Categoria.exists' => 'La categoría no existe en la base de datos.',

            'Nombre_Elemento.required' => 'El nombre del elemento es obligatorio.',
            'Nombre_Elemento.string' => 'El nombre del elemento debe ser una cadena de texto.',
            'Nombre_Elemento.max' => 'El nombre del elemento no debe exceder los 100 caracteres.',

            'Estado_Elemento.required' => 'El estado del elemento es obligatorio.',
            'Estado_Elemento.string' => 'El estado del elemento debe ser una cadena de texto.',
            'Estado_Elemento.max' => 'El estado del elemento no debe exceder los 100 caracteres.'
        ];
    }


}
