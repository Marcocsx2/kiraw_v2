@extends('layout.app3')

<!-- Default form login -->
<div class="container">
  <div class="row">
    <div class="col-5">
      <div style="background-color:white"></div>
    </div>
    <div class="col-5">
      <div class="classic-tabs mx-2">

        <div>
          <ul class="nav tabs-cyan" id="myClassicTabShadow" role="tablist">
            <li class="nav-item">
              <a class="nav-link  waves-light active show" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow" role="tab" aria-controls="profile-classic-shadow" aria-selected="true" style="color:white">Acerca de ti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow" role="tab" aria-controls="follow-classic-shadow" aria-selected="false" style="color:white">Seguridad</a>
            </li>

          </ul>
        </div>

        <div class="tab-content card" id="myClassicTabContentShadow">
          <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
            <div class="container" style="background-color:black">
              <div>
                <div col-6>
                  <form class="text-center pull-right" action="#!" style="left: 50%">

                    <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" height="60">
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
                    <button class="btn btn-info btn-block my-4" type="submit">Siguiente</button>

                    <!-- Register -->

                  </form>
                </div>

              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
              quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </div>


        </div>
      </div>
    </div>
    <div class="col-2">
    </div>
  </div>
</div>
<!-- Classic tabs -->


</body>