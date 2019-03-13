<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<title>Template Padrão</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    {{-- icon, se tirar os icones não iram aparecar --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/Estoque">Estoque</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/Pedidos">Pedidos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Vender</a>
                </li>
        </div>
    </nav>

    {{-- hasSection caso exista ele mostra --}}
    {{-- @hasSection ('titulo')
        
        <div class="jumbotron">
            @yield('titulo')
        </div>
        
    @endif
    --}}

    <main role="main" class="container" style="margin-top: 30px;">
        
            @yield('Conteudo')
        

    </main>
</body>
</html>
