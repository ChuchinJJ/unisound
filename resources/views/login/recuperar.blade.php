@extends('layouts.container')
@section('contenido')
<section>
    <div class="row g-0 fondo-login">
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
                @if(session()->has('status'))
                <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModal">Atención</h5>
                            </div>
                            <div class="modal-body">
                            {{ session('status') }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" onclick="cerrar()" data-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="myModal">Error</h5>
                          </div>
                          <div class="modal-body">
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btna" onclick="cerrar()" data-dismiss="modal">Ok</button>
                          </div>
                      </div>
                  </div>
                </div>
                @endif
                <h1 class="letras1 mb-5 pt-lg-5">Recupera tu contraseña</h1>
                <form method="POST" action="{{ route('password.email') }}">
                  @csrf
                  <p style="font-size:17px; text-align: justify;">Ingrese su correo registrado para enviar un enlace de restablecimiento de contraseña</p>
                  <div class="mb-4 pt-lg-3">
                      <label for="email" class="form-label font-weight-bold letras">Email</label>
                      <input name="email" style="font-size:15px;" type="email" class="form-control bg-dark-x border-0" id="email" required placeholder="Ingrese su correo electrónico">
                  </div>
                  <div class="pt-lg-3">
                    <button style="padding: 5px;" type="submit" class="btn w-100 mb-4">Enviar</button>
                  </div>
                </form>

                <div class="text-center w-100 m-0">
                  <p class="d-inline-block mb-0 text-p">Ir a</p> <a class="font-weight-bold text-decoration-none text-a" href="/login">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  function cerrar(){
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
</script>
@endsection