@extends('layouts.app')
@section('title')
Turmas
@endsection
@section('content')
<div class="row justify-content-center" style="margin-top: 120px;">
    <div class="col-md-10">
            <h5 class="center" style="padding: 5px;">Turmas</h5>
        <div class="card card-default">
            <div class="card-body">
                <ul class="list-group">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" class="center-align">Campus</th>
                                <th scope="col" class="center-align">Curso</th>
                                <th scope="col"class="center-align">Opcões</th>
                                </tr>
                            </thead>
                            @foreach ($turmas as $turma)
                            <tbody>
                                <tr>
                                    <td class="center-align">{{$turma->campus}}</td>
                                    <td class="center-align">{{$turma->curso}}</td>
                                    <td class="center-align">
                                        <a href="/turmas/{{$turma->id}}" class="waves-effect waves-light btn-small"><i class="material-icons">visibility</i></a>
                                        <a href="/turmas/{{$turma->id}}/edit" class="waves-effect waves-light btn-small"><i class="material-icons">create</i></a>
                                        <a href="/turmas/{{$turma->id}}/delete" class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></a>
                                        <a class="waves-effect waves-light btn modal-trigger btn-small" href="#modal1"><i class="material-icons">add</i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- Modal Structure -->
                            <div id="#modal1" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <h4>Modal Header</h4>
                                        <p>A bunch of text</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat center">Agree</a>
                                    </div>
                                    </div>
                            @endforeach
                            </table>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
