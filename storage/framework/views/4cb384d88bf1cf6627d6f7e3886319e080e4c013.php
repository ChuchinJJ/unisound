
<?php $__env->startSection('contenido'); ?>
<section>
    <div class="px-lg-5 p py-lg-5 p-4 w-100 align-self-center fondo-login">
        <h1 class="letras1 text-center mb-2"> Completa todos los campos</h1>
        <div class="row justify-content-center">
            <form class="card col-md-8 card-login" action="" method="post">
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label for="name" class="form-label font-weight-bold letras ">Nombre(s)</label>
                        <input style="font-size:15px;" id="name" type="text" class="form-control" required placeholder="Escriba su(s) nombre(s)">
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <label for="subname" class="form-label font-weight-bold letras">Apellidos</label>
                        <input style="font-size:15px;" id="subname" type="text" class="form-control" required placeholder="Escriba sus apellidos">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">RFC</label>
                        <input style="font-size:15px;" id="rfc" type="text" class="form-control" required placeholder="Escriba su RFC">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="tel" class="form-label font-weight-bold letras">Teléfono</label>
                        <input style="font-size:15px;" id="tel" type="tel" class="form-control" required placeholder="Escriba su número de teléfono">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="nac" class="form-label font-weight-bold letras">Fecha de Nacimiento</label>
                        <input style="font-size:15px;" id="nac" type="date" class="form-control" required>    
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="postal" class="form-label font-weight-bold letras">C. Postal</label>
                        <input style="font-size:15px;" id="postal" type="text" class="form-control" required placeholder="Escriba su código postal">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="pais" class="form-label font-weight-bold letras">País</label>
                        <input style="font-size:15px;" id="pais" type="text" class="form-control" required placeholder="Escriba su país">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="estado" class="form-label font-weight-bold letras">Estado</label>
                        <input style="font-size:15px;" id="estado" type="text" class="form-control" required placeholder="Escriba su estado">
                    </div>

                    <div class="col-md-5 mb-4">
                        <label for="ciudad" class="form-label font-weight-bold letras">Ciudad</label>
                        <input style="font-size:15px;" id="ciudad" type="text" class="form-control" required placeholder="Escriba su ciudad">
                    </div>

                    <div class="col-md-7 mb-5">
                        <label for="call" class="form-label font-weight-bold letras">Calle</label>
                        <input style="font-size:15px;" id="calle" type="text" class="form-control" required placeholder="Escriba su dirección">
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn d-grid col-4 mx-auto mb-4">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/login/registrar2.blade.php ENDPATH**/ ?>