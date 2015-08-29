<?php

namespace psl\Http\Requests;

use psl\Http\Requests\Request;

class PsmForm extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
                "nombre"    =>    "required|min:5|max:45",
                "publicacion"       =>      "required|min:100|max:400"
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es requerido!',
            'nombre.min' => 'El campo nombre no puede tener menos de 5 carácteres',
            'nombre.min' => 'El campo nombre no puede tener más de 45 carácteres',
            'publicacion.required' => 'El campo body es requerido!',
            'publicacion.min' => 'El campo publicacion no puede tener menos de 100 carácteres',
            'publicacion.min' => 'El campo publicacion no puede tener más de 400 carácteres',
        ];
    }
}
