<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlunoFormRequest;
use App\Http\Requests\AlunoUpdateFormRequest;
use App\Aluno;

class AlunoController extends Controller
{
    ///views
    public function index() {
        return view('aluno.index')->with('alunos', aluno::all());
    }

    public function show(Aluno $aluno) {
        return view('aluno.show')->with('aluno', $aluno);
    }

    public function create() {
        return view('aluno.create');
    }

    //CRUD
    public function edit(Aluno $aluno) {
        return view('aluno.edit')->with('aluno', $Aluno);
    }

    public function salvar(AlunoFormRequest $request){
        $aluno = new Aluno();
        $aluno->nome = $request['nome'];
        $aluno->matricula = $request['matricula'];
        $aluno->email = $request['email'];
        $aluno->turma_id = $request['turma_id'];
        $aluno->save();

        session()->flash('sucess', 'aluno salva com sucesso!');
        return redirect('alunos');
    }

    public function update(aluno $aluno, AlunoUpdateFormRequest $request){
        $aluno->nome = $request['nome'];
        $aluno->matricula = $request['matricula'];
        $aluno->email = $request['email'];
        $aluno->turma_id = $request['turma_id'];
        $aluno->save();

        session()->flash('sucess', 'Aluno editado com sucesso!');
        return redirect('/alunos');
    }

    public function destroy(aluno $aluno) {
        $aluno->delete();

        session()->flash('sucess', 'Aluno removido com sucesso!');
        return redirect('/alunos');
    }
}
