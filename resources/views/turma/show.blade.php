@extends('layouts.app')

@section('title')
    Turma
@endsection
@section('content')

<div class="row">
        <ul class="collection">
                <li class="collection-item">Campus: {{$turma->campus}}</li>
                <li class="collection-item">Curso: {{$turma->curso}}</li>
        </ul>
</div>
    <div class="center">
        <a href="/turmas" class="waves-effect green accent-3 btn">Voltar</a>
    </div>
@endsection
