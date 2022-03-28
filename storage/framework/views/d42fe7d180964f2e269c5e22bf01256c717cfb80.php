
<?php $__env->startSection('contenido'); ?>
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
        <?php if(count($errors) > 0): ?>
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myModal">Error</h5>
                  </div>
                  <div class="modal-body">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btna" onclick="cerrar()" data-dismiss="modal">Ok</button>
                  </div>
              </div>
          </div>
        </div>
        <script>
          function cerrar(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
          }
        </script>
        <?php endif; ?>
        <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
            <div class="px-lg-5 p py-lg-4 p-4 w-100 align-self-center">
                <h1 class="letras1 mb-2">Registrarse</h1>
                <form method="POST" action="<?php echo e(route('registrar')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label font-weight-bold letras ">Email</label>
                        <input name="email" style="font-size:15px;" type="email" class="form-control bg-dark-x border-0" value="<?php echo e(old('email')); ?>" id="email" required placeholder="Ingrese un correo electrónico">
                    </div>

                    <div class="mb-3">
                        <label for="user" class="form-label font-weight-bold letras ">Nombre de usuario</label>
                        <input name="name" style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" value="<?php echo e(old('name')); ?>" id="user" required placeholder="Ingrese un nombre de usuario">
                    </div>

                    <div class="mb-3 ">
                        <label for="pass" class="form-label font-weight-bold letras">Contraseña</label>
                        <input name="password" style="font-size:15px;" type="password" class="form-control bg-dark-x border-0 mb-4" required placeholder="Ingrese una contraseña" id="pass">
                    </div>

                    <div class="mb-3 ">
                        <label for="password_confirmation" class="form-label font-weight-bold letras">Confirmar contraseña</label>
                        <input name="password_confirmation" style="font-size:15px;" type="password" class="form-control bg-dark-x border-0 mb-4" required placeholder="Confirme su contraseña" id="password_confirmation">
                    </div>
                    
                    <div class="m-3">
                      <button style="font-size:15px;" type="submit" class="btn w-100 mb-4">Registrarse</button>
                    </div>
                </form>
                    
                <div class="text-center px-lg-5 pb-lg-4 w-100 m-0">
                    <p class="d-inline-block mb-0 text-p">¿Ya tienes una cuenta?</p> <a class="font-weight-bold text-decoration-none" href="/login">Inicia Sesión</a>
                </div>

                <div class="d-flex justify-content-around">
                  <button type="submit" class="btn btn-outline-light flex-grow-1 mr-2 letra-boton"><i class="fab fa-google lead  mr-2"></i>Google</button>
                  <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2 letra-boton"><i class="fab fa-facebook-f lead  mr-2"></i>Facebook</button>
                </div>  
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/login/registrar.blade.php ENDPATH**/ ?>