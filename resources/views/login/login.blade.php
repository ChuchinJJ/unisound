@extends('layouts.container')
@section('contenido')
  <body class="bg-dark">

    <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold letra-slider">Las mejores Marcas.</h5>
                          <a style="font-size: 15px; color: white;" href="#" class=" text-decoration-none">Ven y conoce los mejores instrumentos.</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold letra-slider">Descubre nuevos productos.</h5>
                          <a style="font-size: 15px; color: white;" href="#" class="text-decoration-none" >Te esperamos con nuevos productos de alta calidad.</a>
                        </div>
                      </div>
                     
                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>

            <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 p py-lg-4 p-4 w-100 align-self-center ">
                    <h1 class="letras1 mb-4">Inicio de Sesión</h1>
                    <form class="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1"  class="form-label font-weight-bold letras ">Correo </label>
                            <input style="font-size:15px;" type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail" placeholder="Ingresa tu correo" required="">
                          
                        </div>
                        
                        <div class="mb-4 ">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold letras">Contraseña</label>
                            <input style="font-size:15px;" type="password" class="form-control bg-dark-x border-0 mb-3" required="" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-4 m-1">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label style="font-size: 15px;" class="form-check-label letras" for="exampleCheck1">Recordarme
                          </div>
                          <div class="col-md-5 mb-auto">
                            <a style="font-size: 15px; color:white;" href="/login/recuperar" id="emailHelp" class="form-text   font-weight-bold"> ¡Recuperar contraseña!</a>
                          </div>
                        </div>
                        
                        
                        <div class="m-3">
                        <button style="padding: 5px;" type="submit" class="btn w-100 mb-4 ">Iniciar Sesión</button>
                        </div>
                    </form>
                        
                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 m-0">
                        <p class="d-inline-block mb-0 text-p">¿Todavia no tienes una cuenta?</p> <a class="text-light font-weight-bold text-decoration-none text-p" href="/login/registrar">Crea una ahora!!!</a>
                    </div>

                    <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-outline-light flex-grow-1 mr-2 letra-boton"><i class="fab fa-google  mr-2"></i>  Google</button>
                    <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2 letra-boton"><i class="fab fa-facebook-f mr-2"></i>  facebook</button>
                    </div>

                      
                </div>
            </div>
        </div>
    </section>
  </body>
  @endsection


