<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutorRequest extends FormRequest
{

    public function authorize(){
        return true;
    }

    public function rules()
    {
        return [
            'nombres'=>'required|max:20',
            'apellidos'=>'required|min:3',
            'cedula'=>'required|min:10|max:10',
            'ruc'=>'required|min:13|max:13',
            'email'=>'required|email'
        ];
    }

    public function attributes()
    {
        return ([
            "nombres"=>"Nombres",
            "apellidos"=>"Apellidos",
            "cedula"=>"Cedula",
            "ruc"=>"RUC",
            "email"=>"Email"
        ]);
    }

    public function messages()
    {
        return ([
            "nombres.required"=>"Debe ingresar los nombres",
            "nombres.max"=>"Debe ingresar maximo 20 caracteres para el nombre",
            "apellidos.min"=>"Debe ingresar minimo 3 caracteres para el apellido"
        ]);
    }

}
