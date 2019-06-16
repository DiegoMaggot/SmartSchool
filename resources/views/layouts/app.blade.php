<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! MaterializeCSS::include_full() !!}
    <title>
        @yield('title')
    </title>
</head>
<body>

    <ul id="professores" class="dropdown-content">
        <li><a href="/create">Cadastrar</a></li>
        <li><a href="/professores">Listar</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="/" class="brand-logo center">SmartSchool</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Turmas</a></li>
            <li><a href="badges.html">Avaliações</a></li>
            <li><a class="dropdown-trigger" href="/professores" data-target="professores">Professores<i class="material-icons right">arrow_drop_down</i></a></li>
            </i>
        </div>
    </nav>
    @if (session()->has('sucess'))
        <script>
                M.toast({html: "<?php echo session()->get('sucess') ?>"})
        </script>
    @endif
    <script>
            $(".dropdown-trigger").dropdown();
    </script>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>
