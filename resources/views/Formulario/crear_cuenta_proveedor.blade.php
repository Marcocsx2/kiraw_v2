@extends('layout.app5')
<!-- Default form subscription -->

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-1 mb-1"></div>
        <div class="col-lg-6 col-md-10 mb-10" style="top:100px;">

            <form class="text-center border border-light p-5 pull-right" action="#!" style="left: 50%">

                <p class="h4 mb-4 text-center" style="color:white">Crear cuenta nueva</p>

                <!-- Email dime donde esta el formulario ? -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                    <label class="custom-control-label text-white" for="defaultLoginFormRemember">Acepto terminos y condiciones</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                <br>

                                <a class="text-white">¿Ya tienes cuenta?</a>

                                <a href="">Ingresa aqui </a>
                                <br>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4" type="submit" style="border-radius:15px">Registrarse</button>

                        <!-- Register -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                        locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                        blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                        Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
                        PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                        salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                        sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                        stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
                </div>
                <br>
            </form>
            <div class="col-3"></div>
        </div>
        <div class="col-lg-3 col-md-1 mb-1">
        </div>
    </div>
</div>
<!-- Default form subscription -->