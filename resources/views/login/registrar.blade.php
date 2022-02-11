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
                          <h5 class="font-weight-bold letra-slider">Las mejores Marcas</h5>
                          <a style="font-size: 15px; color: white;" href="#" class=" text-decoration-none">Ven y conoce los mejores instrumentos.</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold letra-slider">Descubre nuevos productos.</h5>
                          <a style="font-size: 15px; color: white;" href="#" class="text-decoration-none" >Te esperamos con nuevos productos de alta calidad</a>
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
                <div class="px-lg-5 p py-lg-4 p-4 w-100 align-self-center">
                    <h1 class="letras1 mb-4 ">Registrarse</h1>
                    <form class="" method="" action="/login/registrar2">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold letras ">Email </label>
                            <input style="font-size:15px;" type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail1" required=""  placeholder="Ingresa un correo electronico" aria-describedby="emailHelp">
                        
                        </div>
                        <div class="mb-3">
                            <label  class="form-label font-weight-bold letras ">Usuario </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x  border-0" required="" placeholder="Escribe un nombre o usuario">
                        
                        </div>

                        <div class="mb-3 ">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold letras">Contraseña</label>
                            <input style="font-size:15px;" style="padding: 3px;" type="password" class="form-control bg-dark-x border-0 mb-4" required="" placeholder="Ingresa una contraseña" id="exampleInputPassword1">
                        
                        </div>
                        
                        <div class="m-3">
                          <button style="font-size:15px;" type="submit" class="btn w-100 mb-4 ">Registrarse</button>
                        </div>

                    </form>
                        
                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 m-0">
                        <p class="d-inline-block mb-0 text-p">¿Ya tienes una cuenta?</p> <a class="text-light font-weight-bold text-decoration-none text-p" href="/login">Inicia Sesión!!!</a>
                    </div>

                    <div class="d-flex justify-content-around">
                    <button style="padding: 7px;" type="submit" class="btn btn-outline-light flex-grow-1 mr-2 letra-boton"><i class="fab fa-google lead  mr-2"></i>  Google</button>
                    <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2 letra-boton"><i class="fab fa-facebook-f lead  mr-2"></i>  facebook</button>
                    </div>

                      
                </div>
            </div>
        </div>
    </section>

@endsection