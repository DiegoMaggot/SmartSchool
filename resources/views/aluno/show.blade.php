@extends('layouts.app')

@section('title')
    aluno
@endsection
@section('content')

<div class="row">
        <ul class="collection">
                <li class="collection-item">Nome: {{$aluno->nome}}</li>
                <li class="collection-item">Email: {{$aluno->email}}</li>
                <li class="collection-item">Matricula: {{$aluno->matricula}}</li>
        </ul>
</div>
    <div class="center">
        <a href="/aluno" class="waves-effect green accent-3 btn">Voltar</a>
    </div>
@endsection
