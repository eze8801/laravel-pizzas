<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link rel="shortcut icon" href="laravel.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        * {
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-4 offset-lg-4">
                <div class="text-center mb-5">
                    <img src="{{ asset('laravel.svg') }}" width="80">
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clave</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>