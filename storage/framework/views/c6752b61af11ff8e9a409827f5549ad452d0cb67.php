
<?php $__env->startSection('contenido'); ?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
            <h1 class="m-0">Detalle de venta</h1>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card-deck">
                <div class="card">
                    <div class="card-slider">
                        <h4>Detalles de venta #<?php echo e($venta->id_venta); ?></h4>
                        <?php
                            setlocale(LC_TIME, "spanish");
                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                            $newDate = date("d-m-Y", strtotime($fecha_str));
                            $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                        ?>
                        <p><b>Fecha de venta:</b> <?php echo e($fecha); ?></p>
                        <p><b>Pagado:</b> <?php if($venta->pagado == 0): ?> No <?php else: ?> Si <?php endif; ?></p>
                        <p class="bg-status bg-<?php echo e($venta->status); ?>"><?php echo e($venta->status); ?></p>
                        <?php if($venta->detalles != null): ?>
                            <p><?php echo e($venta->detalles); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider card-cliente">
                        <h4>Detalles de cliente</h4>
                        <p><i class="fa fa-user"></i><?php echo e($cliente->nombre." ".$cliente->apellidos); ?></p>
                        <p><i class="fa fa-phone"></i><b>Teléfono: </b><?php echo e($cliente->telefono); ?></p>
                        <p><i class="fa fa-envelope"></i><b>Email: </b><?php echo e($cliente->email); ?></p>
                        <p><i class="fa fa-location-arrow"></i><b>Dirección:</b>
                            <?php echo e($cliente->calle.", ".$cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais); ?>

                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-slider">
                    <h4>Venta #<?php echo e($venta->id_venta); ?></h4>
                    <br>
                    <table class="table table-detail-sale" width="100%">
                        <thead>
                            <tr>
                                <th colspan="2">Producto</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td data-label="Producto" class="detalle-venta-imagen" style="text-align: right">
                                <?php $__currentLoopData = $colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($color->id_color == $detalle->id_color): ?>
                                        <?php $producto = $productos->firstWhere('id_producto', $color->id_producto); ?>
                                        <img  width="40%" src="/storage/img/products/<?php echo e($producto->imagen1); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="detalle-venta-producto"><?php echo e($detalle->producto); ?></td>
                                <td data-label="Cantidad"><?php echo e($detalle->cantidad); ?><?php if($detalle->cantidad >1): ?> unidades <?php else: ?> unidad <?php endif; ?></td>
                                <td data-label="Precio unitario">$<?php echo e(number_format($detalle->precio, 2, ".", ",")); ?></td>
                                <td data-label="Subtotal">$<?php echo e(number_format($detalle->precio*$detalle->cantidad, 2, ".", ",")); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <?php if($venta->descuento > 0 ): ?>
                            <tr>
                                <th colspan="4">Subtotal</th>
                                <td>
                                    <bdi>$<?php echo e(number_format($venta->total+$venta->descuento,2,".",",")); ?></bdi>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4">Descuento</th>
                                <td>$<?php echo e(number_format($venta->descuento,2,".",",")); ?></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <th colspan="4">Total</th>
                                <td>
                                    <strong>$<?php echo e(number_format($venta->total,2,".",",")); ?></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('ventas').classList.add('active');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/detalleVentas.blade.php ENDPATH**/ ?>