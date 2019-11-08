<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title> <!-- Custom CSS --> @section('styles_laravel')
    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/mdb.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> @show @yield('mis_estilos')

</head>

<body class="grey lighten-3">

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark green accent-4 scrolling-navbar fixed-top">
        <div class="container-fluid">
            <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" height="50">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                        <a class="nav-link" href="#">Inicio
                            <i class="fas fa-home"></i>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compañias
                            <i class="fas fa-building"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-flex-icons">
                        <a class="nav-link" href="#">Perfiles
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mensajes
                            <i class="fas fa-comment"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi carrito
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar">
                        <a class="nav-link p-0" href="#">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="55">
                        </a>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">Cerrar sesión</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar -->
    <br>
    <br>
    <br>
    <br>

    @yield('content')

    <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
</body>

</html>