<?php

namespace prototipo\Http\Requests;

use prototipo\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
        'nombre' => 'required|min:7|regex:/^[\pL\s\-]+$/u|max:45|unique:Usuario',
        'correo' => 'required|email|unique:Usuario',
        'usuario'=> 'required|min:4|alpha|max:12|unique:Usuario', 
        'contrasena'=> 'required|min:8|max:18',
        //'rol_id' => 'required',
        ];
    }
}
