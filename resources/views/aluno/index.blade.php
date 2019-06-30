@extends('layouts.app')
@section('title')
alunos
@endsection
@section('content')
<div class="row justify-content-center" style="margin-top: 120px;">
    <div class="col-md-10">
            <h5 class="center" style="padding: 5px;">alunos</h5>
        <div class="card card-default">
            <div class="card-body">
                <ul class="list-group">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" class="center-align">Nome</th>
                                <th scope="col" class="center-align">Matricula</th>
                                <th scope="col"class="center-align">Email</th>
                                <th scope="col"class="center-align">Opcões</th>
                                </tr>
                            </thead>
                            @foreach ($alunos as $aluno)
                            <tbody>
                                <tr>
                                    <td class="center-align">{{$aluno->nome}}</td>
                                    <td class="center-align">{{$aluno->matricula}}</td>
                                    <td class="center-align">{{$aluno->email}}</td>
                                    <td class="center-align">
                                        <a href="/alunos/{{$aluno->id}}" class="waves-effect waves-light btn">Detalhes</a>
                                        <a href="/alunos/{{$aluno->id}}/edit" class="waves-effect waves-light btn">Editar</a>
                                        <a href="/alunos/{{$aluno->id}}/delete" class="waves-effect waves-light btn">Apagar</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            </table>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
