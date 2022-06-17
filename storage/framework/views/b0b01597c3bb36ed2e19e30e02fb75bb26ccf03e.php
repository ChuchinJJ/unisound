
<?php $__env->startSection('contenido'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Sliders</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addslider">Agregar <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>

    <?php if(session()->has('success')): ?>
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Atención</h5>
                </div>
                <div class="modal-body">
                <?php echo e(session('success')); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="cerrar()" data-dismiss="modal">Ok</button>
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

    <section class="content">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="imagen-tab" data-bs-toggle="tab" data-bs-target="#imagen" type="button" role="tab" aria-controls="imagen" aria-selected="true">Imagenes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Videos</button>
                </li>
            </ul>
            <div class="tab-content tabs-slider" id="myTabContent">
                <div class="tab-pane fade show active" id="imagen" role="tabpanel" aria-labelledby="imagen-tab">
                    <div class="row gallery">
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 card-group" style="margin-bottom: 20px;">
                            <div class="card">
                                <div class="card-slider">
                                    <div class="title-card">Orientación horizontal</div>
                                    <a class="venobox" href="/storage/img/sliders/<?php echo e($slider->imagen); ?>" data-gall="myGallery" title="Sliders">
                                        <img src="/storage/img/sliders/<?php echo e($slider->imagen); ?>" alt="imagen<?php echo e($slider->id_slider); ?>" width="100%" style="max-height: 300px">
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="title-card">Orientación vertical</div>
                                            <a class="venobox" href="/storage/img/sliders/<?php echo e($slider->movil); ?>" data-gall="myGallery" title="Sliders">
                                                <img src="/storage/img/sliders/<?php echo e($slider->movil); ?>" alt="imagen<?php echo e($slider->movil); ?>" width="100%">
                                            </a>
                                        </div>
                                        <div class="col-md-5 align-self-end" style="text-align: -webkit-right;">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success switch-slider">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($slider->id_slider); ?>" onchange="cambiar(<?php echo e($slider->id_slider); ?>,this.checked)" name="<?php echo e($slider->id_slider); ?>"
                                                    <?php if($slider->status == 1): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="customSwitch<?php echo e($slider->id_slider); ?>">Activo</label>
                                            </div>
                                            <a class="btn btn-danger" onclick="confirmar(<?php echo e($slider->id_slider); ?>)"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <div class="row gallery">
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 card-group" style="margin-bottom: 20px;">
                            <div class="card">
                                <div class="card-slider">
                                    <video src="/storage/img/sliders/<?php echo e($video->movil); ?>" width="100%" controls>
                                        <p>Su navegador no soporta videos HTML5.</p>
                                    </video>
                                    <div class="video-details">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($video->id_slider); ?>" onchange="cambiar(<?php echo e($video->id_slider); ?>,this.checked)" name="<?php echo e($video->id_slider); ?>"
                                                <?php if($video->status == 1): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="customSwitch<?php echo e($video->id_slider); ?>">Activo</label>
                                        </div>
                                        <a class="btn btn-danger" onclick="confirmar(<?php echo e($video->id_slider); ?>)"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.getElementById('sliders').classList.add('active');
    function cambiar(id, checked){
        window.location.href='/admin/sliders/'+id+'/'+checked;
    }

    function confirmar(id){
        var confirmar = confirm("¿Realmente deseeas eliminar el slider?");
        if(confirmar){
            window.location.href='/admin/sliders/'+id;
        }
    }
    
    $(document).ready(function(){
        $('.venobox').venobox({
            border     : '5px',
        numeratio  : true,
        infinigall : true,
        titleBackground: '#333',
        closeBackground: '#333',
        titleColor: '#fff',
        spinColor: '#fff',
        spinner: 'three-bounce',
        numerationPosition: 'bottom'
        }); 
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/slider.blade.php ENDPATH**/ ?>