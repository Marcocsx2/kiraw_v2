@extends('layout.app2')
<!-- Default form subscription -->

<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-1 mb-1">


        </div>
        <div class="col-lg-8 col-md-10 mb-10" style="top:100px;">
            <form class="text-center border border-light p-5" action="#!">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" width="40%">
                <p class="h4 mb-4" style="color: white">Iniciar Sesión</p>

                <!-- Name -->
                <input type="email" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Correo" required>

                <!-- Email -->
                <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Contraseña" required>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block" type="submit" style="border-radius:15px">Ingresar</button>
                <p>
                    <a style="color: white">¿Olvidaste tu contraseña?</a>
                    <a href="" target="_blank">Recuperar contraseña</a>
                </p>

            </form>

        </div>
        <div class="col-lg-2 col-md-1 mb-1"></div>
    </div>
</div>
<!-- Default form subscription -->