@extends('layouts.app')

@section('content')
    <h4 class=" my-5 center">{{$professor->nome}}</h4>
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
        <form action="/professores/{{$professor->id}}/editar-professor" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input id="nome" type="text" class="validate" name="nome" value="{{$professor->nome}}">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" type="email" class="validate" name="email" value="{{$professor->email}}">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="Email inválido" data-success="Email válido"></span>
                </div>
                <div class="input-field col s6">
                    <input id="matricula" type="text" class="validate" name="matricula" value="{{$professor->matricula}}">
                    <label for="matricula">Matricula</label>
                </div>
            </div>
            <div class="center col s2">
                    <a href="/professores" class="waves-effect green accent-3 btn">Voltar</a>
            </div>
            <div class="center col s1">
                <button type="submit" class="waves-effect waves-light btn">Editar</button>
            </div>
        </form>
    </div>
@endsection
