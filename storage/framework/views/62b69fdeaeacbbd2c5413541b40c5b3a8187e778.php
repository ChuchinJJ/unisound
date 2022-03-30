
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
                        <select style="font-size:15px; line-height:1 !important;" id="pais" name="pais" type="text" class="form-control" value="<?php echo e(old('pais')); ?>" required placeholder="Escriba su país">
                            <option value="">Seleccione Pa&iacute;s
                            <option value="3">Colombia
                            <option value="4">Argentina
                            <option value="5">Brasil
                            <option value="6">Chile
                            <option value="7">Bolivia
                            <option value="8">Cuba
                            <option value="9">Republica Dominicana
                            <option value="10">Ecuador
                            <option value="11">Guatemala
                            <option value="12" selected="selected">Mexico
                            <option value="13">Uruguay
                            <option value="14">Panama
                            <option value="15">Nicaragua
                            <option value="16">Honduras
                            <option value="17">El Salvador
                            <option value="18">Paraguay
                            <option value="19">Peru
                            <option value="20">Puerto Rico
                            <option value="21">Estados Unidos
                            <option value="22">Venezuela
                            <option value="23">Costa Rica
                        </select>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="estado" class="form-label font-weight-bold letras require-label">Estado</label>
                        <select style="font-size:15px; line-height:1 !important;" id="estado" name="estado" type="text" class="form-control" value="<?php echo e(old('estado')); ?>" required placeholder="Escriba su estado">
                            <option value="no">Seleccione uno...</option>
                            <option value="1">Aguascalientes</option>
                            <option value="2">Baja California</option>
                            <option value="3">Baja California Sur</option>
                            <option value="4">Campeche</option>
                            <option value="5" selected="selected" >Chiapas</option>
                            <option value="6">Chihuahua</option>
                            <option value="7">Ciudad de México</option>
                            <option value="8">Coahuila</option>
                            <option value="9">Colima</option>
                            <option value="10">Durango</option>
                            <option value="11 ">Estado de México</option>
                            <option value="12">Guanajuato</option>
                            <option value="13">Guerrero</option>
                            <option value="14">Hidalgo</option>
                            <option value="15">Jalisco</option>
                            <option value="16">Michoacán</option>
                            <option value="17">Morelos</option>
                            <option value="18">Nayarit</option>
                            <option value="19">Nuevo León</option>
                            <option value="20">Oaxaca</option>
                            <option value="21">Puebla</option>
                            <option value="22">Querétaro</option>
                            <option value="23">Quintana Roo</option>
                            <option value="24">San Luis Potosí</option>
                            <option value="25">Sinaloa</option>
                            <option value="26">Sonora</option>
                            <option value="27">Tabasco</option>
                            <option value="28">Tamaulipas</option>
                            <option value="29">Tlaxcala</option>
                            <option value="30">Veracruz</option>
                            <option value="31">Yucatán</option>
                            <option value="32">Zacatecas</option>
                        </select>
                            
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