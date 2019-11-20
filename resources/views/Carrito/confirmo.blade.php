@extends('app')
<div class="col-lg-3 col-md-3 mb-4">

    <div class="card">

        <!-- Card image -->
        <div class="view overlay ">
            <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-header">

            <h2 class="text-center">K'iraw</h2>

        </div>
    </div>


</div>


    <form class="text-center border border-light p-5 pull-right" action="#" style="left: 50%">
       
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

    <div class="col-lg-3 col-md-3 mb-4">

        <div class="card">

            <!-- Card image -->
            <div class="view overlay ">
                <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body card-header">

                <h2 class="text-center">K'iraw</h2>

            </div>
        </div>


    </div>