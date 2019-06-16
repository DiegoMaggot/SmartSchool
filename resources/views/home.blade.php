@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')
<div class="slider fullscreen" style="z-index: -1;">
        <ul class="slides">
            <li>
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Gerador de Avaliações</h3>
                    <h5 class="light grey-text text-lighten-3">escolha o tipo das questões e nós fazemos o resto.</h5>
                </div>
            </li>
            <li>
                <img src="https://c.pxhere.com/photos/29/64/university_student_graduation_jump_joke_by_happy_examination_throwing_hats-1217517.jpg!d"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Acompanhe de perto o desenvolvimento de seus alunos</h3>
                    <h5 class="light grey-text text-lighten-3">Ajude-os a ir mais longe.</h5>
                </div>
            </li>
        </ul>
        </div>
        <script>
            $(document).ready(function(){
                $('.slider').slider({
                    indicators: false
                });
                });
        </script>
@endsection

