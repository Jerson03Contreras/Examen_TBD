<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
        return [
            'nombres' => 'required|string|max:100',
            'email' => 'required|string|email|max:35',
            'direccion' => 'required|string|max:50',
            'fono' => 'required|string|max:15',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nombres.required' => 'El nombre es requerido',
            'direccion.required' => 'La dirección es requerida',
            'email.required' => 'El correo es requerido',
            'email.max' => 'El correo electrónico no debe exceder los 35 caracteres',
            'fono.required' => 'El número de teléfono es requerido',
            'fono.max' => 'El número de teléfono no debe exceder los 15 caracteres',

        ];
    }
}
