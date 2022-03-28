
<?php $__env->startSection('contenido'); ?>
<section>
    <div class="p-4 w-100 align-self-center fondo-login">
        <div class="row justify-content-center">
            <form class="card col-md-7 card-register" method="POST" action="<?php echo e(route('completar-registro')); ?>">
                <div class="title-register">
                    <h1>Completar registro</h1>
                </div>
                <input type="hidden" name="email" value="<?php echo e(old('email')); ?>"/>
                <input type="hidden" name="name" value="<?php echo e(old('name')); ?>"/>
                <input type="hidden" name="pass" value="<?php echo e(old('password', old('pass'))); ?>"/>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <label class="require-title">Campos obligatorios</label>
                    <br>
                    <div class="col-md-6 mb-4">
                        <label for="name" class="form-label font-weight-bold letras require-label" required>Nombre(s)</label>
                        <input style="font-size:15px;" id="name" name="nombre" type="text" class="form-control" value="<?php echo e(old('nombre')); ?>" required placeholder="Escriba su(s) nombre(s)">
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <label for="subname" class="form-label font-weight-bold letras require-label" required>Apellidos</label>
                        <input style="font-size:15px;" id="subname" name="apellidos" type="text" class="form-control" value="<?php echo e(old('apellidos')); ?>" required placeholder="Escriba sus apellidos">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">RFC</label>
                        <input style="font-size:15px;" id="rfc" name="rfc" type="text" class="form-control" value="<?php echo e(old('rfc')); ?>" placeholder="Escriba su RFC">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="tel" class="form-label font-weight-bold letras require-label">Teléfono</label>
                        <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control" value="<?php echo e(old('telefono')); ?>" required placeholder="Escriba su número de teléfono">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="nac" class="form-label font-weight-bold letras">Fecha de Nacimiento</label>
                        <input style="font-size:15px;" id="nac" name="fecha_nac" type="date" class="form-control" value="<?php echo e(old('fecha_nac')); ?>">    
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="postal" class="form-label font-weight-bold letras">C. Postal</label>
                        <input style="font-size:15px;" id="postal" name="cp" type="text" class="form-control" value="<?php echo e(old('cp')); ?>" placeholder="Escriba su código postal">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="pais" class="form-label font-weight-bold letras require-label">País</label>
                        <input style="font-size:15px;" id="pais" name="pais" type="text" class="form-control" value="<?php echo e(old('pais')); ?>" required placeholder="Escriba su país">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="estado" class="form-label font-weight-bold letras require-label">Estado</label>
                        <input style="font-size:15px;" id="estado" name="estado" type="text" class="form-control" value="<?php echo e(old('estado')); ?>" required placeholder="Escriba su estado">
                    </div>

                    <div class="col-md-5 mb-4">
                        <label for="ciudad" class="form-label font-weight-bold letras require-label">Ciudad</label>
                        <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control" value="<?php echo e(old('ciudad')); ?>" required placeholder="Escriba su ciudad">
                    </div>

                    <div class="col-md-7 mb-5">
                        <label for="call" class="form-label font-weight-bold letras require-label">Calle</label>
                        <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control" value="<?php echo e(old('calle')); ?>" required placeholder="Escriba su dirección">
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn d-grid col-4 mx-auto mb-4">Enviar</button>
                    </div>
                </div>
            </form>
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
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/login/completar.blade.php ENDPATH**/ ?>