
<?php $__env->startSection('contenido'); ?>

    <div style="overflow: hidden !important;" class="content-wrapper" >
        <div class="content-header">
            <div class="container-fluid" >
                    <h2>¡BIENVENIDO!  </h2>
            </div>
        </div>

        <section class="panel bienvenido" >
            <secrion class="panel_titulo">
                <h2> Administra tu tienda Unisound desde aqui!!! </h2>
            </secrion>

            <div class="panel_img">
                <img src="/img/panel4.png" alt="">
            </div>
        </section>

        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </div>
<script>
    document.getElementById('dashboard').classList.add('active');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>