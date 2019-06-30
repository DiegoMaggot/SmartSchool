@extends('layouts.app')

@section('content')
    <div class="card s6">
        <div class="card-content">
                <h4 class=" my-5 center">Cadastrar Turma</h4>
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
                <form class="col s12" action="/salvar-turma" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="campus" type="text" class="validate" name="campus">
                            <label for="campus">Campus</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="curso" type="text" class="validate" name="curso">
                            <label for="curso">Curso</label>
                        </div>
                    </div>
                    <div class="center">
                        <button type="submit" class="waves-effect waves-light btn">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection
