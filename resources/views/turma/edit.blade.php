@extends('layouts.app')

@section('content')
    <h4 class=" my-5 center">{{$turma->nome}}</h4>
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <script>
                                M.toast({html: '<?php echo $error ?>'})
                        </script>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/turmas/{{$turma->id}}/editar-turma" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="campus" type="text" class="validate" name="campus" value="{{$turma->campus}}">
                    <label for="campus">campus</label>
                </div>
                <div class="input-field col s6">
                    <input id="campus" type="text" class="validate" name="campus" value="{{$turma->campus}}">
                    <label for="campus">Matricula</label>
                </div>
            </div>
            <div class="center col s2">
                    <a href="/turmas" class="waves-effect green accent-3 btn">Voltar</a>
            </div>
            <div class="center col s1">
                <button type="submit" class="waves-effect waves-light btn">Editar</button>
            </div>
        </form>
    </div>
@endsection
