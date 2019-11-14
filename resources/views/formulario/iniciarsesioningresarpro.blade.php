@extends('layout.app4')
<!-- Default form subscription -->

<div class="container">
    <div class="row">
        <div class="col-4">


        </div>
        <div class="col-4">
            <form class="text-center border border-light p-5" action="#!">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" height="60">
                <p class="h4 mb-4" style="color: white">Ingresar</p>

                <p style="color: white">Unete a nosotros</p>



                <!-- Name -->
                <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Correo">

                <!-- Email -->
                <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Contraseña">

                <!-- Sign in button -->
                <button class="btn btn-info btn-block" type="submit" style="border-radius:15px">Ingresar</button>
                <button type="submit" class="btn btn-danger btn-block" style="border-radius:15px">Cancelar</button>
                <p>
                    <a style="color: white">¿Olvidaste tu contraseña?</a>
                    <a href="" target="_blank">Recuperar contraseña</a>
                </p>

            </form>

        </div>
        <div class="col-4"></div>
    </div>
</div>
<!-- Default form subscription -->