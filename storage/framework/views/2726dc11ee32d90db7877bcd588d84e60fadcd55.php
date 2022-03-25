<section style="background-color: #f1f5f9; line-height: var(--bs-body-line-height);">
    <style>
        .im{
            margin-left: auto;
        }
    </style>
    <div style="text-align: -webkit-center; padding-top:20px; margin-right: 0px; padding-bottom:20px;">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="https://www.unisound.com.mx/wp-content/uploads/2022/02/icono-unisound-133x133.png" width="8%"/>
            <h1 style="font-size: calc(0.6rem + 1.5vw); color:black; margin-bottom: 0; margin-top: 0;">¡Gracias por su compra!</h1>
        </div>
        <div style="flex: 0 0 auto; width: 58.33333333%;">
            <div style="padding: 8%; margin-bottom:20px; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0,0,0,.125); border-radius: 0.25rem;">
                <h3 style="text-align:center; font-size: calc(0.8rem + .6vw); margin-top:0; color:black"><b>¡Hola <?php echo e($cliente->nombre); ?>! Tu pedido ha sido enviado:</b></h3>
                <br>
                <div style="text-align: left;">
                    <b style="color:black;">INFORMACIÓN SOBRE TU PEDIDO:</b>
                </div>
                <hr style="margin-top: 5px; color:black; border-color: white;">
                <div style="display: flex;">
                    <div style="text-align: left;">
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0;"><b>Id pedido:</b></h5>
                        <h5 style="font-size: 1rem; margin-top: 0;"># <?php echo e($venta->id_venta); ?></h5>
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Fecha del pedido:</b></h5>
                        <?php
                            setlocale(LC_TIME, "spanish");
                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                            $newDate = date("d-m-Y", strtotime($fecha_str));
                            $fecha = strftime("%d de %B del %Y", strtotime($newDate));
                        ?>
                        <p style="font-size: 1rem; margin-top: 0; color:black"><?php echo e($fecha); ?></p>
                    </div>
                    <div style="text-align: right; margin-left: auto;">
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Facturado a:</b></h5>
                        <h5 style="font-size: 1rem; margin-top: 0; color:black"><?php echo e($cliente->nombre); ?></h5>
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Dirección:</b></h5>
                        <p style="margin-bottom:0; margin-top: 0; color:black; font-size: 15px;"><?php echo e($cliente->calle); ?></p>
                        <p style="margin-top:0; color:black; font-size: 15px;"><?php echo e($cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais); ?></p>
                    </div>
                </div>
                <br>
                <div style="text-align: left;">
                    <b style="margin-bottom:10px">ESTE ES TU PEDIDO:</b>
                </div>
                <div>
                    <table width="100%" style="color: #212529; vertical-align: top; border-color: #dee2e6; border-collapse: collapse;">
                        <thead style="text-align: center; color: #fff; border-color: #373b3e; background-color: #212529;">
                            <tr>
                                <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Producto</th>
                                <th  style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                                <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                    <?php echo e($detalle->producto); ?>&nbsp;
                                    <strong>&times;&nbsp;<?php echo e($detalle->cantidad); ?></strong>
                                </td>
                                <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                    <span>
                                        <bdi><span>&#36;</span><?php echo e(number_format($detalle->cantidad*$detalle->precio,2,".",",")); ?></bdi>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot style="border-top: 2px solid currentColor;">
                            <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                                <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Subtotal: </th>
                                <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                    <bdi><span>&#36;</span><?php echo e(number_format($venta->total+$venta->descuento,2,".",",")); ?></bdi>
                                </span></td>
                            </tr>
                            <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                                <th style="text-align: right; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Descuento: </th>
                                <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                    <bdi><span>&#36;</span><?php echo e(number_format($venta->descuento,2,".",",")); ?></bdi>
                                </span></td>
                            </tr>
                            <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                                <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Total: </th>
                                <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                    <strong><span>
                                        <bdi><span>&#36;</span><?php echo e(number_format($venta->total,2,".",",")); ?></bdi>
                                    </span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <center><p style="color:black">Si tienes un problema estamos para ayudarte, <a href="http://unisound.apparte.com.mx/contact" style="color: #de3a3a; text-decoration: none;">Contáctanos</a>.</p></center>
            <center><strong style="color:black">Saludos, equipo de Unisound.</strong></center>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\unisound\resources\views/emails/checkout.blade.php ENDPATH**/ ?>