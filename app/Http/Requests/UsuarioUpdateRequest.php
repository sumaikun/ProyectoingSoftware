<?php

namespace prototipo\Http\Requests;

use prototipo\Http\Requests\Request;

class UsuarioUpdateRequest extends Request
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

        'nombre' => 'required|min:7|regex:/^[\pL\s\-]+$/u|max:45',
        'correo'=>'required|email',
        
             
       
        ];
    }
}
