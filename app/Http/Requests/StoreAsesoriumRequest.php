<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsesoriumRequest extends FormRequest
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
            'Motivo_asesoria' => 'required|string|max:255',
            'Fecha' => 'required|date',
            'Id_Usuario_Recibe' => 'required|integer|exists:usuario,Id_Usuario',
            'Id_Usuario_Asesor' => 'required|integer|exists:usuario,Id_Usuario',
            'ficha_Id_ficha' => 'required|string|exists:ficha,Id_ficha',
        ];

    }

    public function messages()
    {
        return [
            'Motivo_asesoria.required' => 'El motivo de la asesoría es obligatorio.',
            'Motivo_asesoria.string' => 'El motivo de la asesoría debe ser una cadena de texto.',
            'Motivo_asesoria.max' => 'El motivo de la asesoría no debe exceder los 255 caracteres.',

            'Fecha.required' => 'La fecha es obligatoria.',
            'Fecha.date' => 'La fecha debe ser una fecha válida.',

            'Id_Usuario_Recibe.required' => 'El usuario que recibe asesoria es obligatorio.',
            'Id_Usuario_Recibe.integer' => 'El usuario que recibe asesoria debe ser un número entero.',
            'Id_Usuario_Recibe.exists' => 'El usuario que recibe asesoria no existe en la base de datos.',

            'Id_Usuario_Asesor.required' => 'El usuario asesor es obligatorio.',
            'Id_Usuario_Asesor.integer' => 'El usuario asesor debe ser un número entero.',
            'Id_Usuario_Asesor.exists' => 'El usuario asesor no existe en la base de datos.',

            'ficha_Id_ficha.required' => 'La ficha es obligatorio.',
            'ficha_Id_ficha.string' => 'La ficha debe ser una cadena de texto.',
            'ficha_Id_ficha.exists' => 'La ficha no existe en la base de datos.'
        ];
    }
}
