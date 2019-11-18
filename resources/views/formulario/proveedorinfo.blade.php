@extends('layout.app3')

<!-- Default form login -->
<div class="container">
  <div class="row">
    <div class="col-3 lime accent-1" style="right:110px">
      <div style="margin-left:30px">
        <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" height="">
      </div>
    </div>

    <div class="col-7">
      <div class="classic-tabs mx-2">

        <div>
          <ul class="stepper stepper-horizontal" style="margin:4px;padding:5px">

            <!-- First Step -->
            <li class="completed" style="margin:4px;padding:5px">
              <a href="#!" style="padding:5px">
                <span class="circle" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow" role="tab" aria-controls="profile-classic-shadow" aria-selected="true" style="color:white">1</span>
                <span class="label" style="color:white">Acerca de ti</span>
              </a>
            </li>

            <!-- Second Step -->
            <li class="completed" style="margin:4px">
              <a href="#!" style="padding:5px">
                <span class="circle" id="" data-toggle="tab" href="#follow-classic-shadow" role="tab" aria-controls="follow-classic-shadow" aria-selected="false" style="color:white">2</span>
                <span class="label" style="color:white">Galería</span>
              </a>
            </li>
            <!-- third Step -->
            <li class="completed" style="margin:4px">
              <a href="#!">
                <span class="circle" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color:white;background-color:#4285f4">3</span>
                <span class="label" style="color:white">Seguridad</span>
              </a>
            </li>



          </ul>
        </div>

        <div class="tab-content card" id="myClassicTabContentShadow">
          <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">


            <div col-6>
              <form class="text-center  border border-light p-5 pull-right" action="#!" style="left: 50%">


                <div class=row>
                  <div class="col-4 p-4"><img src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" class="rounded-circle z-depth-3" alt="avatar image" height="70"></div>
                  <div class="form-group col-8">
                    <label for="exampleFormControlTextarea2" style="color:white">Descripción</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                  </div>
                </div>
                <!-- Email -->


                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Nombre">

                <!-- Password -->
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Apellido">

                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Fecha de nacimiento">

                <!-- Password -->
                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Proveedor">

                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Telefono">

                <input type="text" id="defaultLoginFormText" class="form-control mb-4" placeholder="Trabajo">

                <a style="color:white">Sexo:</a>
                <div>
                  <!-- Default inline 1-->
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline1" style="color: black">Varon</label>
                  </div>
                  <!-- Default inline 2-->
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline2" style="color: black">Mujer</label>
                  </div>
                  <!-- Default inline 1-->
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline3" style="color: black">Otros</label>
                  </div>
                </div>



                <!-- Sign in button -->

                <!-- Register -->

              </form>

            </div>



          </div>
          <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
            <p class="1">
              <div class="col-md-3 ">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                </div>
                </div>
              </div>

            </p>

            <p class="2">
              <div class="col-md-3 ">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
              </div>
            </p>
            <p class="3">
              <div class="col-md-3 ">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
              </div>
            </p>
            <p class="4">
              <div class="col-md-3 ">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
            </p>
            <p class="5">
              <div class="col-md-3 " style="left:300px;bottom:825px">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
              </div>

            </p>

            <p class="6">
              <div class="col-md-3 " style="left:300px;bottom:825px">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
              </div>
            </p>
            <p class="7">
              <div class="col-md-3 " style="left:300px;bottom:825px">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
              </div>
            </p>
            <p class="8">
              <div class="col-md-3 " style="left:300px;bottom:825px">
                <!-- Card -->
                <div class="card" style="width: 16rem;">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->

                </div>
            </p>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <p>Consejos de Seguridad<br>
            1)protege tu contraseña<br>
            2)Usa nuestras funciones de Seguridad<br>
            3)Asegurate que tus cuentas de correo esten corregidas<br>
            4)Cierra sesion en facebook por precaucion<br>
            5)Piensa dos veces antes de hacer clik en tu contenido o descargarlo<br>
            6)Ejecuta un software o antivirus de tu computadora<br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <button class="btn btn-info btn-block my-4" type="submit" style="border-radius:15px;left:1000px;width:230px;bottom:90px">Siguiente</button>


</div>
</div>
<!-- Classic tabs -->


</body>