@extends('layout.app2')
<!-- Default form subscription -->

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-1 mb-1">

        </div>

        <div class="col-lg-6 col-md-10 mb-10" style="top: 100px">

            <div class="text-center">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" width="25%">
            </div>

            <p class="h4 mb-4 text-center" style="color:white">Iniciar Sesion con:</p>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="proveedor-tab" data-toggle="tab" href="#proveedor" role="tab" aria-controls="home" aria-selected="true">Proveedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cliente-tab" data-toggle="tab" href="#cliente" role="tab" aria-controls="profile" aria-selected="false">Cliente</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="proveedor" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <form class="border border-ligth p-5 rounded mb-0" method="POST" action="{{ route('login')}}">

                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">

                            <label for="email" style="color:white">Correo</label>
                            <input type="email" name="email" class="form-control" placeholder="Correo" required>

                            {!! $errors->first('email', '<span class="help-block">:message</span>')!!}

                        </div>

                        <div class="form-group is-invalid  {{ $errors->has('password') ? 'has-error' :'' }}">

                            <label for="email" style="color:white">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>

                            {!! $errors->first('password', '<span class="help-block">:message</span>')!!}

                        </div>

                        <button class="btn btn-info btn-block" type="submit" style="border-radius:15px">Ingresar</button>

                    </form>
                </div>

                <div class="tab-pane fade" id="cliente" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <form class="border border-light p-5 rounded mb-0 " method="POST" action="{{ route('login')}}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">

                            <label for="email" style="color:white">Correo</label>
                            <input type="email" name="email" class="form-control" placeholder="Correo" required>

                            {!! $errors->first('email', '<span class="help-block">:message</span>')!!}

                        </div>

                        <div class="form-group is-invalid  {{ $errors->has('password') ? 'has' :'' }}">
                            <label for="email" style="color:white">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>

                            {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                        </div>

                        <button class="btn btn-info btn-block" type="submit" style="border-radius:15px">Ingresar</button>

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