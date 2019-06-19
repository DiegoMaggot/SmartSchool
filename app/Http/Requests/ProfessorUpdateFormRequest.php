<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class ProfessorUpdateFormRequest extends FormRequest
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
        $id = Request::segment(2);

        return [
            'nome'      => 'required|min:6|max:60',
            'matricula' => "required|min:10|max:20|unique:professores,matricula,{$id},id",
            'email'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'         => 'O campo de nome é obrigatório',
            'nome.min'              => 'O nome deve conter no minímo 6 caracteres',
            'nome.max'              => 'O nome deve conter no máximo 60 caracteres',
            'matricula.required'    => 'O campo de matricula é obrigatório',
            'matricula.unique'      => 'A matricula informada já está em uso',
            'matricula.min'         => 'A matricula deve conter no minímo 6 caracteres',
            'matricula.max'         => 'A matricula deve conter no máximo 20 caracteres',
            'email.required'        => 'O campo de email é obrigatório',
        ];
    }
}
