@extends('layouts.app')

@section('title')
    Professor
@endsection
@section('content')

<div class="row">
        <ul class="collection">
                <li class="collection-item">Nome: {{$professor->nome}}</li>
                <li class="collection-item">Email: {{$professor->email}}</li>
                <li class="collection-item">Matricula: {{$professor->matricula}}</li>
        </ul>
</div>
    <div class="center">
        <a href="/professores" class="waves-effect green accent-3 btn">Voltar</a>
    </div>
@endsection
