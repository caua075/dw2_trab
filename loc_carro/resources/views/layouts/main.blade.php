<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Aluguel de Carros">

        <title>@yield('title')</title>

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Application CSS -->
        <link rel="stylesheet" href="/css/style.css">


    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" id="logo" href="/">
                            <img src="/img/logo_alugacar.png" alt="Logo"><span class="nav-item">Super Tech</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Página Inicial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/cars/create">Cadastrar Carros</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="/cars/sample">Carros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/dashboard">Meus Carros</a>
                                    </li>
                                    <li class="nav-item">
                                        <form action="/logout" method="POST">
                                            @csrf
                                                <a class="nav-link" href="/logout" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                                        </form>
                                    </li>
                                @endauth
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Entrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Cadastrar</a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                </div>
                <div class="transparent-box">
                    @yield('content')
                </div>
            </main>

            <footer class="mt-auto">
                <div class="container">
                    <p class="text-center">&copy; {{ date('Y') }} Aluguel de Carros. Todos os direitos reservados.</p>
                </div>
            </footer>
        </div>
    </body>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <script src="https://cdn.jsdelivr.net/npm/ionicons/dist/ionicons/ionicons.js"></script> 
</html>
