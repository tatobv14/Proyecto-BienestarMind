<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservaelementoRequest extends FormRequest
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
            'Descripcion_Reserva' => 'required|string|max:255',
            'Id_ficha' => 'nullable|exists:ficha,Id_ficha',
            'Id_Usuario' => 'nullable|exists:usuario,Id_Usuario',
            'Id_Elemento' => 'nullable|exists:elementos,Id_Elemento'
            
        ];
    }

    public function messages()
    {
        return [
            'Fecha_Reserva.required' => 'La fecha de reserva es obligatoria.',
            'Fecha_Reserva.date' => 'La fecha de reserva debe ser una fecha válida.',

            'Descripcion_Reserva.required' => 'La descripción de la reserva es obligatoria.',
            'Descripcion_Reserva.string' => 'La descripción de la reserva debe ser una cadena de texto.',
            'Descripcion_Reserva.max' => 'La descripción de la reserva no debe exceder los 255 caracteres.',

            'Id_ficha.exists' => 'La ficha seleccionada no existe.',
            'Id_Usuario.exists' => 'El usuario seleccionado no existe.',
            'Id_Elemento.exists' => 'El elemento seleccionado no existe.'
        ];
    }
}
