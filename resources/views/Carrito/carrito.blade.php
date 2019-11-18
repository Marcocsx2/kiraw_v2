@extends('app')
@section('content')

<div class="container-fluid">
    <div class="col-lg-2 col-md-6 mb-4">

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

    <div class="col-8">

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">

                <h4 class="py-4 text-center">Wider</h4>

                <!--Card-->
                <div class="card card-cascade wider mb-4">

                    <!--Card image-->
                    <div class="view view-cascade">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20%283%29.jpg" class="card-img-top">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Title-->
                        <h4 class="card-title"><strong>Alice Mayer</strong></h4>
                        <h5 class="indigo-text"><strong>Photographer</strong></h5>

                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                            laudantium, totam
                            rem aperiam.
                        </p>


                        <!--Linkedin-->
                        <a class="icons-sm li-ic"><i class="fab fa-linkedin-in"> </i></a>
                        <!--Twitter-->
                        <a class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a>
                        <!--Dribbble-->
                        <a class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a>

                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->

            </div>

        </div>

        <div class="col-2">

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    @stop