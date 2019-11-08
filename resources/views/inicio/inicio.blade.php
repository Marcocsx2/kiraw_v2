@extends('app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

        </div>
    </div>

    <div class="row">
        <div class="col-3 green">

        </div>
        <div class="col-6">
            <h2 class="teal-text">
                Categorias
            </h2>

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active " id="home-tab" data-toggle="tab" href="#Alimentos" role="tab" aria-controls="home" aria-selected="true">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " id="profile-tab" data-toggle="tab" href="#Vestimentas" role="tab" aria-controls="profile" aria-selected="false">Vestimentas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="contact-tab" data-toggle="tab" href="#Ceramicas" role="tab" aria-controls="contact" aria-selected="false">Ceramicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="contact-tab" data-toggle="tab" href="#Souvenirs" role="tab" aria-controls="contact" aria-selected="false">Souvenirs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="contact-tab" data-toggle="tab" href="#Medicinales" role="tab" aria-controls="contact" aria-selected="false">Medicinales</a>
                </li>
            </ul>
            <br>
            <br>


            <div class="tab-content" id="myTabContent">
                <!-- TAB ALIMENTOS -->
                <div class="tab-pane fade show active" id="Alimentos" role="tabpanel" aria-labelledby="home-tab">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">lorempixel</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    lorempixel
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/food" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
                                </div>
                            </div>

                        </div>



                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"><i class="fas fa-eye grey-text"></i> Vistas 101</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- TAB VESTIMENTAS -->
                <div class="tab-pane fade" id="Vestimentas" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/2" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Rodrigo Ugarte</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/fashion" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
                                </div>
                            </div>

                        </div>



                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"><i class="fas fa-eye grey-text"></i> Vistas 101</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TAB CERAMICAS -->
                <div class="tab-pane fade" id="Ceramicas" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/3" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Maria Antonieta</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/abstract/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
                                </div>
                            </div>

                        </div>



                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"><i class="fas fa-eye grey-text"></i> Vistas 101</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TAB SOUVENIRS -->
                <div class="tab-pane fade" id="Souvenirs" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/400/200/people/" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Maria Antonieta</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/technics/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
                                </div>
                            </div>

                        </div>



                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"><i class="fas fa-eye grey-text"></i> Vistas 101</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TAB MEDICINALES -->
                <div class="tab-pane fade" id="Mediciales" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/4" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Maria Antonieta</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/nightlife/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
                                </div>
                            </div>

                        </div>



                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="black-text"><i class="fas fa-eye grey-text"></i> Vistas 101</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 green">

        </div>

    </div>
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

@stop