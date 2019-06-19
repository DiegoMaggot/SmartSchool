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
Route::get('create', 'professorController@create');
Route::get('professores/{professor}/edit', 'professorController@edit');
Route::get('professores/{professor}/delete', 'professorController@destroy');
Route::post('salvar-professor', 'professorController@salvar');
Route::post('professores/{professor}/editar-professor', 'professorController@update');
