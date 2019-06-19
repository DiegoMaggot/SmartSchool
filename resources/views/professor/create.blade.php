@extends('layouts.app')

@section('content')
    <h4 class=" my-5 center">Cadastrar professor</h4>
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
        <form class="col s12" action="/salvar-professor" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input id="nome" type="text" class="validate" name="nome">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="Email inválido" data-success="Email válido"></span>
                </div>
                <div class="input-field col s6">
                    <input id="matricula" type="text" class="validate" name="matricula">
                    <label for="matricula">Matricula</label>
                </div>
            </div>
            <div class="center">
                <button type="submit" class="waves-effect waves-light btn">Salvar</button>
            </div>
        </form>
    </div>
@endsection
