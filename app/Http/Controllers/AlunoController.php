<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function salvar(){
        $this->validar();
        $data = request()->all();

        $aluno = new Aluno();
        $aluno->nome = $data['nome'];
        $aluno->matricula = $data['matricula'];
        $aluno->email = $data['email'];
        $aluno->turma_id = $data['turma_id'];
        $aluno->save();

        session()->flash('sucess', 'aluno salva com sucesso!');
        return redirect('alunos');
    }

    public function update(aluno $aluno){
        $this->validar();
        $data = request()->all();

        $aluno->nome = $data['nome'];
        $aluno->matricula = $data['matricula'];
        $aluno->email = $data['email'];
        $aluno->turma_id = $data['turma_id'];
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
