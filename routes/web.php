<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/professor', function () {
    return view('professor');
});

Route::get('professores', 'professorController@index');
Route::get('professores/{professor}', 'professorController@show');
Route::get('cadastroProfessor', 'professorController@create');
Route::get('professores/{professor}/edit', 'professorController@edit');
Route::get('professores/{professor}/delete', 'professorController@destroy');
Route::post('salvar-professor', 'professorController@salvar');
Route::post('professores/{professor}/editar-professor', 'professorController@update');

Route::get('alunos', 'alunoController@index');
Route::get('alunos/{aluno}', 'alunoController@show');
Route::get('cadastroAluno', 'alunoController@create');
Route::get('alunos/{aluno}/edit', 'alunoController@edit');
Route::get('alunos/{aluno}/delete', 'alunoController@destroy');
Route::post('salvar-aluno', 'alunoController@salvar');
Route::post('alunos/{aluno}/editar-aluno', 'alunoController@update');

Route::get('turmas', 'turmaController@index');
Route::get('turmas/{turma}', 'turmaController@show');
Route::get('cadastroTurma', 'turmaController@create');
Route::get('turmas/{turma}/edit', 'turmaController@edit');
Route::get('turmas/{turma}/delete', 'turmaController@destroy');
Route::post('salvar-turma', 'turmaController@salvar');
Route::post('turmas/{turma}/editar-turma', 'turmaController@update');
