@extends('layout.app5')
<!-- Default form subscription -->

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form class="text-center border border-light p-5 pull-right" action="#!" style="left: 50%">

                <p class="h4 mb-4 text-center" style="color:white">Crear cuenta nueva</p>

                <!-- Email dime donde esta el formulario ? -->
                <div>
                    <!-- Default inline 1-->
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label text-white" for="defaultInline1">Cliente</label>
                    </div>

                    <!-- Default inline 2-->
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label text-white" for="defaultInline2">Proveedor</label>
                    </div>
                </div>
                <br>
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Nombre de proveedor(es)">

                <!-- Password -->
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Numero de teléfono">
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Descripción">
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Fecha fundación">

                <input type="Email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Correo">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">
                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Confirmar contraseña">

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <br>
                            <label class="custom-control-label" for="defaultLoginFormRemember" style="color: black">Acepto terminos y condiciones</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <br>

                        <a style="color:black">¿Ya tienes cuenta?</a>

                        <a href="">Ingresa aqui </a>
                        <br>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit" style="border-radius:15px">Registrarse</button>

                <!-- Register -->

            </form>
            <div class="col-3"></div>
        </div>
    </div>
</div>
<!-- Default form subscription -->