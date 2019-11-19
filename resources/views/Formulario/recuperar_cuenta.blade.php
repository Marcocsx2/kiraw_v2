@extends('layout.app2')
<!-- Default form subscription -->


<div class="container">
    <div class="row">
        <div class='col-lg-2  mb-1'></div>
        <div class='col-lg-8 col-md-12 mb-12' style="top:100px;">
            <form class="text-center border border-light p-5" action="#!">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" width="40%">
                <p class="h4 mb-4" style="color: white">Recuperar Cuenta</p>

                <p style="color: white">Estamos para ayudarte</p>



                <!-- Name -->
                <input type="Email" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Correo" required>

                <!-- Email -->


                <!-- Sign in button -->
                <button class="btn btn-info btn-block" type="submit" style="border-radius:15px">Ingresar</button>
                <p>
                    <a class="text-white">¿Ingresar con otra cuenta?</a>
                    <a href="" target="_blank">Click aqui</a>
                </p>
            </form>
        </div>
        <div class="col-lg-2  mb-1"></div>
    </div>
</div>

<!-- Def