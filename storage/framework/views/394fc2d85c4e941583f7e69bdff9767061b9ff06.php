
<?php $__env->startSection('contenido'); ?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
            <h1 class="m-0">Ventas</h1>
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

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <form method="post" action="" id="formulario" class="row" style="margin-right: 1px;">
                        <?php echo csrf_field(); ?>
                        <div class="filter-select">
                            <div class="product-filter mb-2">
                                <span>Fecha</span>
                                <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                    <input type="text" name="fechas" class="form-control datetimepicker-input" value="<?php echo e(old('fechas', date('d/m/Y').' - '.date('d/m/Y'))); ?>"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter mb-2" style="margin-left: 30px;">
                                <span>Estado</span>
                                <select class="select-admin" name="status" id="status" onchange="enviar()">
                                    <option value="">Todas</option>
                                    <option value="Pedido" <?php if(old('status') == "Pedido"): ?> selected='selected' <?php endif; ?>>Pedido</option>
                                    <option value="Entregado" <?php if(old('status') == "Entregado"): ?> selected='selected' <?php endif; ?>>Entregado</option>
                                    <option value="Cancelado" <?php if(old('status') == "Cancelado"): ?> selected='selected' <?php endif; ?>>Cancelado</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-venta">
                            <p><b>Total </b><?php echo e(number_format($ventas->sum('total'),2,".",",")); ?></p>
                        </div>
                        <div class="total-venta">
                            <p><b>Total pagado </b><?php echo e(number_format($ventas->where('pagado', 1)->sum('total'),2,".",",")); ?></p>
                        </div>
                        <div class="pdf-button">
                            <a onclick="enviarPDF()" class="btn btn-danger">PDF <i class="fa fa-file-pdf"></i></a>
                        </div>
                    </form>
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table table-sale" width="100%">
                            <thead>
                                <tr>
                                    <th># pedido</th>
                                    <th>Cliente</th>
                                    <th>Estado</th>
                                    <th>Total</th>
                                    <th>Pagado</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="Id"><?php echo e($venta->id_venta); ?></td>
                                    <td data-label="Cliente">
                                        <?php
                                            $cliente = $clientes->firstWhere('email', $venta->id_cliente);
                                            $nombre = $cliente->nombre;
                                            $apellidos = $cliente->apellidos;
                                        ?>
                                        <?php echo e($nombre." ".$apellidos); ?>

                                    </td>
                                    <td data-label="Estado"><div class="bg-status bg-<?php echo e($venta->status); ?>"><?php echo e($venta->status); ?></div></td>
                                    <td data-label="Total">$<?php echo e(number_format($venta->total,2,".",",")); ?></td>
                                    <td data-label="Pagado" class="pagado">
                                        <?php if($venta->pagado == 0): ?>
                                            <i class="circle-pagado venta-no-pagado">
                                                <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffff">
                                                    <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                                </svg>
                                            </i>
                                        <?php else: ?>
                                            <i class="fa fa-check circle-pagado venta-pagado"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Fecha">
                                        <?php
                                            setlocale(LC_TIME, "spanish");
                                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                            $newDate = date("d-m-Y", strtotime($fecha_str));
                                            $fecha = strftime("%d de %B, %Y", strtotime($newDate));
                                        ?>
                                        <?php echo e($fecha); ?>

                                    </td>
                                    <td data-label="Acciones">
                                        <a href="/admin/ventas/<?php echo e($venta->id_venta); ?>/detalle" title="Ver" class="btn btn-danger"><i class="fa fa-bars" style="font-size:19px;"></i></a>
                                        <a href="/admin/ventas/<?php echo e($venta->id_venta); ?>/update" title="Atender" class="btn btn-danger"><i class="fa fa-truck"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="no-products">
                                            <p>No hubo transacciones en este periodo</p>
                                            <i class="fa fa-calendar-times"></i>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if(count($ventas) > 0): ?>
                    <div class="pagination-products">
                        <div class="title-pagination">
                            <span><?php echo e($ventas->firstItem()); ?> - <?php echo e($ventas->lastItem()); ?> de <?php echo e($ventas->total()); ?></span>
                        </div>
                        <div class="controls-pagination">
                            <a <?php if(!$ventas->onFirstPage()): ?> onclick="enviarPagina('/admin/ventas?page=1')" href="#" <?php endif; ?> class="doble-arrow-left <?php if($ventas->onFirstPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if(!$ventas->onFirstPage()): ?> onclick="enviarPagina('<?php echo e($ventas->previousPageUrl()); ?>')" href="#" <?php endif; ?> class="arrow-left <?php if($ventas->onFirstPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if($ventas->currentPage() != $ventas->lastPage()): ?> onclick="enviarPagina('<?php echo e($ventas->nextPageUrl()); ?>')" href="#" <?php endif; ?> class="arrow-right <?php if($ventas->currentPage() == $ventas->lastPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if($ventas->currentPage() != $ventas->lastPage()): ?> onclick="enviarPagina('<?php echo e($ventas->url($ventas->lastPage())); ?>')" href="#" <?php endif; ?> class="doble-arrow-right <?php if($ventas->currentPage() == $ventas->lastPage()): ?> no-control <?php endif; ?>"></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('ventas').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}

    function enviarPagina(valor){
        var formulario = document.getElementById("formulario");
		formulario.setAttribute('action', valor);
        formulario.submit();
    }

    function enviarPDF(){
        var formulario = document.getElementById("formulario");
		formulario.setAttribute('action', '/admin/ventas/pdf');
        formulario.submit();
    }
    
    $(function () {
        $('#datetimepicker').daterangepicker({}, function(start, end, label) {
            $('#datetimepicker input').val(start.format('D/MM/YYYY') + ' - ' + end.format('D/MM/YYYY'));
            $('#status').val('');
            enviar();
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/ventas.blade.php ENDPATH**/ ?>