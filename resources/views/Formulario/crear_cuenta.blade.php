@extends('layout.app5')
<!-- Default form subscription -->

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-1 mb-1">

        </div>

        <div class="col-lg-6 col-md-10 mb-10">

            <form class="text-center border border-light p-5 pull-right" action="#" style="left: 50%">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" width="25%">
                <p class="h4 mb-4 text-center" style="color:white">Crear cuenta nueva</p>

                <!-- Email dime donde esta el formulario ? -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Proveedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cliente</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <input type="text" id="pro_nombre" class="form-control mb-4" placeholder="Nombre de proveedor(es)" required>

                        <input type="number" id="pro_telefono" class="form-control mb-4" placeholder="Numero de teléfono">

                        <input type="number" id="pro_trabajadores" class="form-control mb-4" placeholder="Numero de trabajadores">

                        <input type="text" id="pro_descripcion" class="form-control mb-4" placeholder="Descripción" required>

                        <input type="date" id="pro_fundacion" class="form-control mb-4" placeholder="Fecha fundación">

                        <input type="Email" id="pro_correo" class="form-control mb-4" placeholder="Correo" required>

                        <input type="password" id="pro_contraseña" class="form-control mb-4" placeholder="Contraseña" required>

                        <input type="password" id="pro_confirmar_contraseña" class="form-control mb-4" placeholder="Confirmar contraseña" required>

                        <div class="d-flex justify-content-around">

                            <div>
                                <!-- Forgot password -->
                                <a class="text-white">¿Ya tienes cuenta?</a>
                                <a href="">Ingresa aqui </a>
                            </div>

                        </div>

                        <!-- Sign in button -->
                        <a href="http://localhost/kiraw_v2/public/Inicio"><button class="btn btn-info btn-block my-4" type="button" style="border-radius:15px">Registrarse</button></a>

                        <!-- Register -->
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <br>
                        <input type="" id="cli_nombre" class="form-control mb-4" placeholder="Nombre" required>

                        <input type="" id="cli_apellido" class="form-control mb-4" placeholder="Apellido" required>

                        <input type="email" id="cli_correo" class="form-control mb-4" placeholder="Correo" required>

                        <input type="password" id="cli_contraseña" class="form-control mb-4" placeholder="Contraseña" required>

                        <input type="password" id="cli_confirmar_contraseña" class="form-control mb-4" placeholder="Confirmar contraseña" required>

                        <div class="d-flex justify-content-around">
                            <div>
                                <a class="text-white">¿Ya tienes cuenta?</a>

                                <a href="">Ingresa aqui </a>
                            </div>
                        </div>

                        <a href="http://localhost/kiraw_v2/public/Inicio"><button class="btn btn-info btn-block my-4" type="button" style="border-radius:15px">Registrarse</button></a>

                    </div>

                </div>

                <br>

            </form>

            <div class="col-3">

            </div>
        </div>
        <div class="col-lg-3 col-md-1 mb-1">

        </div>
    </div>
</div>
<!-- Default form subscription -->