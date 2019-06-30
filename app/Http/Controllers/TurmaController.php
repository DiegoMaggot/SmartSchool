<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TurmaFormRequest;
use App\Http\Requests\TurmaUpdateFormRequest;
use App\Turma;

class TurmaController extends Controller
{
    //views
    public function index() {
        return view('turma.index')->with('turmas', turma::all());
    }

    public function show(Turma $turma) {
        return view('turma.show')->with('turma', $turma);
    }

    public function create() {
        return view('turma.create');
    }

    //CRUD
    public function edit(Turma $turma) {
        return view('turma.edit')->with('turma', $turma);
    }

    public function salvar(TurmaFormRequest $request){
        $turma = new turma();
        $turma->campus = $request['campus'];
        $turma->curso = $request['curso'];
        $turma->save();

        session()->flash('sucess', 'turma salva com sucesso!');
        return redirect('turmas');
    }

    public function update(Turma $turma, TurmaUpdateFormRequest $request){
        $turma->campus = $request['campus'];
        $turma->curso = $request['curso'];
        $turma->save();

        session()->flash('sucess', 'turma editada com sucesso!');
        return redirect('/turmas');
    }

    public function destroy(Turma $turma) {
        $turma->delete();

        session()->flash('sucess', 'turma removida com sucesso!');
        return redirect('/turmas');
    }
}
