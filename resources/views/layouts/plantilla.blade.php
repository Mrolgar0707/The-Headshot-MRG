<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Headshot - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
    <!-- Agrega tus estilos personalizados aquí -->
    <style>
        .auth-button {
            background-color: #b3001b;
            color: white;
            border-radius: 5px;
            padding: 5px 15px;
            margin-left: 10px;
            font-weight: bold;
            font-size: 1.1em;
        }

        .auth-button:hover {
            background-color: #fc062b;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-nav .nav-link:hover {
            color: white;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .btn-primary {
            background-color: red;
            color: white;
        }

        .btn-primary:hover {
            background-color: darkred;
        }
        body {
    background-image: url('/img/fondo.jpg');
    background-size: cover; /* Cubre completamente el área del index */
    background-position: center; /* Centra la imagen */
    /* Otras propiedades de estilo según sea necesario */
    background-repeat: no-repeat;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                    </li>
                -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link auth-button" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link auth-button" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-QFI2JfW14RijKC8pJv5ZDTj8rUYFJQqqG6xqRQ7u8nFwM1iiUjvlFGwsspey3piq"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+8p4zpx+X56SgCODXvlB2+Ku8qOewZ9BfROTOz3l+r7Jvh2Vl5uUq2tQ5q"
        crossorigin="anonymous"></script>
    <!-- Agrega tus scripts personalizados aquí -->
</body>

</html>
