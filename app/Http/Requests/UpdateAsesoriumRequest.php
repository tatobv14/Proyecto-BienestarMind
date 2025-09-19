<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAsesoriumRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para actualizar una asesoría.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $Id_Asesoria = $this->route('asesorium')->Id_Asesoria ?? null;

        return [
            'Motivo_asesoria' => [
                'required',
                'string',
                'max:100',
                Rule::unique('asesorias', 'Motivo_asesoria')->ignore($Id_Asesoria, 'Id_Asesoria'),
            ],
            'Fecha' => 'required|date',
            'Id_Usuario_Recibe' => 'nullable|string|max:10',
            'Id_Usuario_Asesor' => 'nullable|string|max:15',
            'ficha_Id_ficha' => [
                'required',
                'integer',
                Rule::exists('fichas', 'Id_ficha'),
            ],
            'Estado' => 'required|boolean',
        ];
    }

    /**
     * Mensajes personalizados para errores de validación.
     */
    public function messages(): array
    {
        return [
            'Motivo_asesoria.required' => 'El motivo de la asesoría es obligatorio.',
            'Motivo_asesoria.max' => 'El motivo no puede superar 100 caracteres.',
            'Motivo_asesoria.unique' => 'Este motivo ya está registrado para otra asesoría.',
            'Fecha.required' => 'La fecha es obligatoria.',
            'Fecha.date' => 'La fecha debe tener un formato válido.',
            'Id_Usuario_Recibe.max' => 'El ID del usuario que recibe no puede superar 10 caracteres.',
            'Id_Usuario_Asesor.max' => 'El ID del asesor no puede superar 15 caracteres.',
            'ficha_Id_ficha.required' => 'La ficha es obligatoria.',
            'ficha_Id_ficha.exists' => 'La ficha seleccionada no existe.',
            'Estado.required' => 'El estado es obligatorio.',
            'Estado.boolean' => 'El estado debe ser verdadero o falso.',
        ];
    }
}