
<?php $__env->startSection('contenido'); ?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Ventas</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <?php echo e($venta); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/detalleVentas.blade.php ENDPATH**/ ?>