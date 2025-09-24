<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFichaRequest extends FormRequest
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
        $Id_ficha = $this->route('ficha')->Id_ficha ?? null;
        return [
             // El ID de la ficha no debe ser editable, por lo que se omite de las reglas.
            // Opcionalmente, puedes validar que el ID recibido sea un entero.
            // 'Id_ficha' => ['required', 'integer'],

            'descripcion' => ['nullable', 'string', 'max:15'],
            'jornada_ficha' => ['required', 'string', 'max:50'],
            'Id_Programa' => ['required', 'integer'],
        ];
    }
    /**
     * Obtiene los mensajes de error personalizados para las reglas de validación.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
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
