@extends('layout.app1')
<!-- Default form login -->

<div class="container ">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row ">
        <div class="col-lg-6 col-md-6 mb-6 ">
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
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nombre" required>

                <!-- Password -->
                <input type="email" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Correo" required>

                <input type="password" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Contraseña" required>

                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Confirmar contraseña" required>

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember" style="color: white">Acepto terminos y condiciones</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="">¿Olvido su contraseña?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit" style="border-radius:15px">Registrarse</button>

                <!-- Register -->

            </form>
        </div>

        <div class="col-lg-6 col-md-6 mb-6 d-flex justify-content-center ">

            <form class="text-center border border-light p-5 pull-right" action="#!">
                <div>
                    <p class="white-text"> ¿Ya eres parte de Kiraw?
                        <a href=""></a>
                    </p>

                    <!-- Social login -->
                    <p style="color: white">O registrate con:</p>
                    <button type="button" class="btn btn-danger" style="border-radius:15px;; width:250px"><i class="fab fa-google light-white-text"></i> Google</span>
                    </button>
                    <br><br>
                    <button type="button" class="btn btn-primary" style="border-radius:15px;width:250px"><span class="mx-2" style="color:white" role="button"> <i class="fab fa-facebook-f light-white-text"></i> Facebook</span></button>
                    <br> <br>
                    <button type="button" class="btn btn-info" style="border-radius:15px;width:250px"><span class="mx-2" style="color:white" role="button"> <i class="fab fa-twitter light-white-text"></i> Twitter</span></button>
                    <br> <br>
                </div>
            </form>
        </div>
    </div>
</div>
</body>