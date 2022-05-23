<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreColaboradorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'area_id' => 'required',
            'tipoDocumento' => 'required',
            'numeroDocumento' => 'required',
            'nombres' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'correo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'area_id.required' => 'El área es requerida.',
            'tipoDocumento.required' => 'El tipo de documento es requerido',
            'numeroDocumento.required' => 'el numero de documento es requerido',
            'nombres.required' => 'Los nombres son requeridos',
            'apellidoPaterno.required' => 'El apellido paterno es requerido.',
            'apellidoMaterno.required' => 'El apellido materno es requerido',
            'correo.required' => 'El correo es requerido.'
        ];
    }

}
