<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        * {
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <h5 class="display-5">Pizzas</h5>
            <button class="navbar-toggler shadow-none" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <img src="{{ asset('list.svg') }}">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/admin" class="btn btn-light">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pizzas" class="btn btn-light">Pizzas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/locales" class="btn btn-light">Locales</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-light">Salir</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>