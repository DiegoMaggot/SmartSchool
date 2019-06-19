<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\ProfessorFormRequest;
use App\Http\Requests\ProfessorUpdateFormRequest;
use App\Professor;
use Illuminate\Validation\Rule;

class ProfessorController extends Controller
{
    // views
    public function index() {
        return view('professor.index')->with('professores', professor::all());
    }

    public function show(Professor $professor) {
        return view('professor.show')->with('professor', $professor);
    }

    public function create() {
        return view('professor.create');
    }

    public function edit(Professor $professor) {
        return view('professor.edit')->with('professor', $professor);
    }

    //CRUD
    public function salvar(ProfessorFormRequest $request){
        $professor  = new professor();
        $professor->nome = $request['nome'];
        $professor->matricula = $request['matricula'];
        $professor->email = $request['email'];
        $professor->save();

        session()->flash('sucess', 'professor salvo com sucesso!');
        return redirect('professores');
    }

    public function update(Professor $professor, ProfessorUpdateFormRequest $request){
        $professor->nome = $request['nome'];
        $professor->matricula = $request['matricula'];
        $professor->email = $request['email'];
        $professor->save();

        session()->flash('sucess', 'professor editado com sucesso!');
        return redirect('/professores');
    }

    public function destroy(Professor $professor) {
        $professor->delete();

        session()->flash('sucess', 'professor removido com sucesso!');
        return redirect('/professores');
    }
}
