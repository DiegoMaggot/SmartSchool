<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'campus'     => 'required|min:6|max:60',
            'curso'      => "required|max:100|unique:turmas,curso"
        ];
    }

    public function messages()
    {
        return [
            'campus.required'   => 'O campo de campus é obrigatório',
            'campus.min'        => 'O nome do campus deve conter no minímo 6 caracteres',
            'campus.max'        => 'O nome do campus deve conter no máximo 60 caracteres',
            'curso.required'    => 'O nome do curso é obrigatório',
            'curso.unique'      => 'O curso informado já existe',
            'curso.max'         => 'O nome do curso deve conter no máximo 100 caracteres',
        ];
    }
}
