@extends('app')
<div class="row">
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


    <div class="col-lg-6 col-md-6 mb-4">
        <form class="text-center border border-light p-5 pull-right" action="#" style="left: 50%">

            <p class="h4 mb-4 text-center" style="color:white">Crear cuenta nueva</p>

            <!-- Email dime donde esta el formulario ? -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Confirmar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pagar</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                    <div class='recuadro' id="uno" >
                        <div style="text-align:left">
                        <img width="35%" height="35%" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" frameborder="0" allowfullscreen>
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-trash-alt" style="position:absolute;padding: 5%;left: 20%;bottom:10%;font-size: 34px"></i>
                            </div>
                        </div>
                        </div>
                        <div style="text-align:right">
                        <img width="35%" height="35%" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" frameborder="0" allowfullscreen>
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-trash-alt" style="position:absolute;padding: 5%;left: 20%;bottom:10%;font-size: 34px"></i>
                            </div>
                        </div>
                        </div>
                        
                    </div>

                    <br>
                    <div class='recuadro' id="tres" style="text-align:right;bottom:30%">
                        <img width="25%" height="25%" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" frameborder="0" allowfullscreen>
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-trash-alt" style="position:absolute;padding: 5%;left: 20%;bottom:10%;font-size: 34px"></i>
                            </div>
                        </div>
                    </div>
                    <div class='recuadro' id="tres" style="text-align:right">
                        <img width="25%" height="25%" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" frameborder="0" allowfullscreen>
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-trash-alt" style="position:absolute;padding: 5%;left: 20%;bottom:10%;font-size: 34px"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Sign in button -->
                    <a href="http://localhost/kiraw_v2/public/"><button class="btn btn-info  my-4" type="button" style="border-radius:15px">Seguir</button></a>

                    <!-- Register -->
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <p style="text-align:left">Pagar con tarjeta</p>
                    <div class="text-align-left:50%">
                        <div class="iconCheck" style="position: relative">
                            <i class="fab fa-cc-visa" style="position:absolute;padding: 5%;left: 80%;bottom:10%;font-size: 34px"></i>
                        </div>
                    </div>
                    <div class="text-align-left:50%">
                        <div class="iconCheck" style="position: relative">
                            <i class="fab fa-cc-paypal" style="position:absolute;padding: 5%;left: 90%;bottom:10%;font-size: 34px"></i>
                        </div>
                    </div>


                    <input type="text" id="cli_nombre" class="form-control mb-4" placeholder="Nombre de titular" required>

                    <input type="number" id="cli_apellido" class="form-control mb-4" placeholder="Ingrese numero de tarjeta" required>

                    <input type="number" id="cli_correo" class="form-control mb-4" placeholder="MM/AA" required>

                    <input type="number" id="cli_contraseña" class="form-control mb-4" placeholder="CVC" required>



                    <div class="d-flex justify-content-around">

                    </div>

                    <a href="http://localhost/kiraw_v2/public/"><button class="btn btn-success btn-block my-4" type="button" style="border-radius:15px">Pagar</button></a>

                </div>

            </div>

            <br>

        </form>

    </div>


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
</div>