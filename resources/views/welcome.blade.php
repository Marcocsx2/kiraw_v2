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
        height: 100vh;
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

                <div class="col">
                    <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="" alt="" height="80">

                </div>

                <div class="col-6">

                </div>

                <div class="col container ">
                    <button class="btn btn-success"> Iniciar sesión </button>
                </div>

            </div>
    </div>
</body>


</html>