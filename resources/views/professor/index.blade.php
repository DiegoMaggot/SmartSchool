@extends('layouts.app')
@section('title')
Professores
@endsection
@section('content')
<div class="row justify-content-center" style="margin-top: 120px;">
    <div class="col-md-10">
            <h5 class="center" style="padding: 5px;">Professores</h5>
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
                        @foreach ($professores as $professor)
                        <tbody>
                            <tr>
                                <td class="center-align">{{$professor->nome}}</td>
                                <td class="center-align">{{$professor->matricula}}</td>
                                <td class="center-align">{{$professor->email}}</td>
                                <td class="center-align">
                                    <a href="/professores/{{$professor->id}}" class="waves-effect waves-light btn-small"><i class="material-icons">visibility</i></a>
                                    <a href="/professores/{{$professor->id}}/edit" class="waves-effect waves-light btn-small"><i class="material-icons">create</i></a>
                                    <a href="/professores/{{$professor->id}}/delete" class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></a>
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
