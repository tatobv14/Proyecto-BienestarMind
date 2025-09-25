<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservaespacioRequest extends FormRequest
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
            'Fecha_Reserva' => 'required|date',
            'Motivo_Reserva' => 'required|string|max:255',
            'Id_ficha' => 'nullable|exists:ficha,Id_ficha',
            'Id_Usuario' => 'nullable|exists:usuario,Id_Usuario',
            'Id_Espacio' => 'nullable|exists:espacios,Id_Espacio',
            'Duracion' => 'nullable|integer'
        ];
    }

    public function messages()
    {
        return [
            'Fecha_Reserva.required' => 'La fecha de reserva es obligatoria.',
            'Fecha_Reserva.date' => 'La fecha de reserva debe ser una fecha válida.',

            'Motivo_Reserva.required' => 'La descripción de la reserva es obligatoria.',
            'Motivo_Reserva.string' => 'La descripción de la reserva debe ser una cadena de texto.',
            'Motivo_Reserva.max' => 'La descripción de la reserva no debe exceder los 255 caracteres.',
            
            'Id_ficha.exists' => 'La ficha seleccionada no existe.',
            'Id_Usuario.exists' => 'El usuario seleccionado no existe.',
            'Id_Espacio.exists' => 'El espacio seleccionado no existe.',

            'Duracion.integer' => 'La duración debe ser un número entero.'
        ];
    }
}
