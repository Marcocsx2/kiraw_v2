<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title> <!-- Custom CSS --> @section('styles_laravel')
    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}"> <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> @show @yield('mis_estilos')

</head>

<style>
    body {
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)),
        url("{{ URL::asset('assets/Imagenes/diseño_prototipos/fondo.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;

    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8 col-md-8 mb-12">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-4 mb-12 text-center">
                <br>
                <br>
                <br>
                <button class="btn btn-success"> Registrarse </button>
                <button class="btn btn-light"> Iniciar sesión </button>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-12 align-text-bottom">
                    <h1 class="text-light" style="font-family: smaller;">
                        La plataforma donde podras encontrar productos naturales con mayor facilidad ¡¡¡
                    </h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="text-light " style="font-family: smaller;">
                        Desde la comodidad de tu hogar.....
                    </h2>
                    
                </div>
            </div>
        </div>
    </div>
</body>


</html>