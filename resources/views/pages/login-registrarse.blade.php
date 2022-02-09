@extends('layouts.container')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Arvo&family=Candal&family=Fjalla+One&family=IBM+Plex+Sans:wght@500&family=Kanit&family=Open+Sans:wght@600&family=Roboto+Mono:wght@300&family=Spartan:wght@300;600&family=Suez+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3bc4a52a4d.js" crossorigin="anonymous"></script>



    <title>Unisound</title>
  </head>
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
                          <h5 class="font-weight-bold">Las mejores Marcas</h5>
                          <a style="font-size: 15px; color: white;" href="#" class=" text-decoration-none">Ven y conoce los mejores instrumentos.</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Descubre nuevos productos.</h5>
                          <a style="font-size: 15px; color: white;" href="#" class="text-decoration-none" >Te esperamos con nuevos productos de alta calidad</a>
                        </div>
                      </div>
                     
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

            <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pd-lg-3 p-4 w-100 mb-auto">
                    <img width="38%" src="/img/LOGO-PAGINA1.png" class="img-fluid">
                </div>
                <div class="px-lg-5 p py-lg-4 p-4 w-100 align-self-center">
                    <h1 class="letras ">Registrate.</h1>
                    <form class="">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold letras ">Email </label>
                            <input style="padding: 3px;" type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail1" required=""  placeholder="Ingresa un correo electronico" aria-describedby="emailHelp">
                        
                        </div>
                        <div class="mb-3">
                            <label  class="form-label font-weight-bold letras ">Nombre </label>
                            <input style="color: rgb(122, 132, 139);" type="text" class="form-control bg-dark-x  border-0" required="" placeholder="Escribe un nombre o usuario">
                        
                        </div>

                        <div class="mb-3 ">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold letras">Contraseña</label>
                            <input style="padding: 3px;" type="password" class="form-control bg-dark-x border-0 mb-2" required="" placeholder="Ingresa una contraseña" id="exampleInputPassword1">
                        
                        </div>
                        
                        <button style="padding: 4px;" type="submit" class="btn btn-primary w-100 m-3 ">Registrarse</button>

                    </form>
                        
                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 m-0">
                        <p class="d-inline-block mb-0 text-p">¿Ya tienes una cuenta?</p> <a class="text-light font-weight-bold text-decoration-none" href="/login">Inicia Sesión!!!</a>
                    </div>

                    <div class="d-flex justify-content-around">
                    <button style="padding: 7px;" type="submit" class="btn btn-outline-light flex-grow-1 mr-2 letra-boton"><i class="fab fa-google lead  mr-2"></i>  Google</button>
                    <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2 letra-boton"><i class="fab fa-facebook-f lead  mr-2"></i>  facebook</button>
                    </div>

                      
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>