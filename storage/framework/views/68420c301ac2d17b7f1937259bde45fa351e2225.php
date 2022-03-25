
<?php $__env->startSection('contenido'); ?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addproducto">Agregar <i class="fa fa-plus"></i></a>
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

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <form method="post" action="" id="formulario" class="row m-2">
                        <?php echo csrf_field(); ?>
                        <div class="search-product">
                            <div class="container-1">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input class="form-control me-2 mb-2" type="search" id="search" value="<?php echo e(old('nombre')); ?>" placeholder="Buscar..." name="nombre" />
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter mb-2">
                                <span>Categoría</span>
                                <select class="select-admin" name="categoria" onchange="enviar()">
                                    <option value="">Todas</option>
                                    <option value="1" <?php if(old('categoria') == "1"): ?> selected='selected' <?php endif; ?>>Cuerda</option>
                                    <option value="2" <?php if(old('categoria') == "2"): ?> selected='selected' <?php endif; ?>>Percusión</option>
                                    <option value="3" <?php if(old('categoria') == "3"): ?> selected='selected' <?php endif; ?>>Atriles y soporte</option>
                                    <option value="4" <?php if(old('categoria') == "4"): ?> selected='selected' <?php endif; ?>>Audio</option>
                                    <option value="5" <?php if(old('categoria') == "5"): ?> selected='selected' <?php endif; ?>>Iluminación</option>
                                    <option value="6" <?php if(old('categoria') == "6"): ?> selected='selected' <?php endif; ?>>Adaptadores</option>
                                    <option value="7" <?php if(old('categoria') == "7"): ?> selected='selected' <?php endif; ?>>Accesorios</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter">
                                <span>Ordenar</span>
                                <select class="select-admin" name="order" onchange="enviar()">
                                    <option value="defecto" <?php if(old('order') == "defecto"): ?> selected='selected' <?php endif; ?>>Defecto</option>
                                    <option value="nombre-desc" <?php if(old('order') == "nombre"): ?> selected='selected' <?php endif; ?>>Nombre: A-Z</option>
                                    <option value="nombre-desc" <?php if(old('order') == "nombre-desc"): ?> selected='selected' <?php endif; ?>>Nombre: Z-A</option>
                                    <option value="precio-desc" <?php if(old('order') == "precio-desc"): ?> selected='selected' <?php endif; ?>>Precio: bajo a alto</option>
                                    <option value="precio" <?php if(old('order') == "precio"): ?> selected='selected' <?php endif; ?>>Precio: alto a bajo</option>
                                    <option value="rating" <?php if(old('order') == "rating"): ?> selected='selected' <?php endif; ?>>Calificación: alto a bajo</option>
                                    <option value="rating-desc" <?php if(old('order') == "rating-desc"): ?> selected='selected' <?php endif; ?>>Calificación: bajo a alto</option>>
                                </select>
                            </div>
                        </div>
                    </form>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">ID</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Valoración</th>
                                    <th>Activo</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    $mis_colores = $colores->whereIn('id_producto', $producto->id_producto);
                                    $mis_valoraciones = $valoraciones->whereIn('id_producto', $producto->id_producto);
                                ?>
                                <tr>
                                    <td class="imagen-td"><img src="/storage/img/products/<?php echo e($producto->imagen1); ?>" width="50%" alt=""></td>
                                    <td data-label="Id"><?php echo e($producto->id_producto); ?></td>
                                    <td data-label="Nombre"><?php echo e($producto->nombre); ?></td>
                                    <td data-label="Categoría">
                                        <?php if($producto->id_categoria == 1): ?>
                                            Cuerda
                                        <?php elseif($producto->id_categoria == 2): ?>
                                            Percusión
                                        <?php elseif($producto->id_categoria == 3): ?>
                                            Atriles y soporte
                                        <?php elseif($producto->id_categoria == 4): ?>
                                            Audio
                                        <?php elseif($producto->id_categoria == 5): ?>
                                            Iluminación
                                        <?php elseif($producto->id_categoria == 6): ?>
                                            Adaptadores
                                        <?php elseif($producto->id_categoria == 7): ?>
                                            Accesorios
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Valoraciones" class="woocommerce star-td">
                                        <?php if($mis_valoraciones->first() != null): ?>
                                        <ul class="products">
                                            <li class="product align-star">
                                                <div class="star-rating" role="img" aria-label="Valorado en <?php echo e($mis_valoraciones->first()->valoracion); ?> de 5" style="line-height: 1rem;">
                                                    <span style="width:<?php echo e($mis_valoraciones->first()->valoracion*20); ?>%">
                                                        Valorado en <strong class="rating"><?php echo e($mis_valoraciones->first()->valoracion); ?></strong>
                                                         de 5
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php else: ?>
                                        <p>Sin valoraciones</p>
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Activo">
                                        <?php if($producto->deleted_at != null): ?>
                                        <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                        </svg>
                                        <?php else: ?>
                                        <i style="color:#31cf31b5;" class="fa fa-check"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Detalles">
                                        <i id="icono<?php echo e($producto->id_producto); ?>" class="fa fa-solid fa-angle-down icono-arrow" role="button" data-bs-toggle="collapse" href="#collapse<?php echo e($producto->id_producto); ?>" aria-controls="collapse<?php echo e($producto->id_producto); ?>" aria-expanded="false"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapse " id="collapse<?php echo e($producto->id_producto); ?>" colspan="7">
                                        <div class="row">
                                            <div class="col-md-2 mb-2 pl-1 img-collapse">
                                                <img src="/storage/img/products/<?php echo e($producto->imagen1); ?>" width="100%" alt="<?php echo e($producto->imagen1); ?>" id="imagen1-<?php echo e($producto->id_producto); ?>">
                                                <?php $count=1; ?>
                                                <?php if($producto->imagen2 != null): ?>
                                                    <img src="/storage/img/products/<?php echo e($producto->imagen2); ?>" style="display:none" width="100%" alt="<?php echo e($producto->imagen2); ?>" id="imagen2-<?php echo e($producto->id_producto); ?>">
                                                    <?php $count++; ?>
                                                <?php endif; ?>
                                                <?php if($producto->imagen3 != null): ?>
                                                    <img src="/storage/img/products/<?php echo e($producto->imagen3); ?>" style="display:none" width="100%" alt="<?php echo e($producto->imagen3); ?>" id="imagen3-<?php echo e($producto->id_producto); ?>">
                                                    <?php $count++; ?>
                                                <?php endif; ?>
                                                <?php if($producto->imagen4 != null): ?>
                                                    <img src="/storage/img/products/<?php echo e($producto->imagen4); ?>" style="display:none" width="100%" alt="<?php echo e($producto->imagen4); ?>" id="imagen4-<?php echo e($producto->id_producto); ?>">
                                                    <?php $count++; ?>
                                                <?php endif; ?>
                                                <?php if($producto->imagen5 != null): ?>
                                                    <img src="/storage/img/products/<?php echo e($producto->imagen5); ?>" style="display:none" width="100%" alt="<?php echo e($producto->imagen5); ?>" id="imagen5-<?php echo e($producto->id_producto); ?>">
                                                    <?php $count++; ?>
                                                <?php endif; ?>
                                                <input type="hidden" value="1" id="img-selected-<?php echo e($producto->id_producto); ?>">
                                                <?php if($count != 1): ?>
                                                <div class="img-product-detail">
                                                    <i class="fa fa-long-arrow-alt-left" id="left-<?php echo e($producto->id_producto); ?>"></i>
                                                    <span>
                                                        <div id="selected-text-<?php echo e($producto->id_producto); ?>" style="margin-right: 4px;">1</div>
                                                        de <?php echo e($count); ?>

                                                    </span>
                                                    <i class="fa fa-long-arrow-alt-right" id="right-<?php echo e($producto->id_producto); ?>"></i>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-10 row product-detail mb-2 pl-1">
                                                <div class="col-md-12">
                                                    <label for="desc_general">Descripción general</label>
                                                    <div class="form-control scroll"><?php echo e($producto->descripcion_general); ?></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="desc_detallada">Descripción detallada</label>
                                                    <div class="form-control scroll"><?php echo e($producto->descripcion_detallada); ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pr-3 pl-1">
                                                <div class="card p-2">
                                                    <div class="row product-detail justify-content-center">
                                                        <?php
                                                            $nofirst = false;
                                                        ?>
                                                        <?php $__currentLoopData = $mis_colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if(!$loop->first): ?>
                                                            <div class="col-md-12">
                                                                <hr>
                                                            </div>
                                                            <?php endif; ?>
                                                            <div class="col-md-4">
                                                                <label for="color" required>Color</label>
                                                                <div class="form-control"><?php echo e($color->color); ?></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="precio">Precio</label>
                                                                <div class="form-control">$<?php echo e($color->precio); ?></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="cantidad">Cantidad</label>
                                                                <div class="form-control"><?php echo e($color->cantidad); ?></div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pr-2 pl-1 product-detail-controls">
                                            <div class="">
                                                <a class="btn btn-outline-danger" href="/admin/producto/<?php echo e($producto->id_producto); ?>/delete">Eliminar<i class="fa fa-trash"></i></a>
                                            </div>
                                            <div class="">
                                                <a class="btn btn-danger" href="/admin/producto/<?php echo e($producto->id_producto); ?>/edit">Editar<i class="fa fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    $('#collapse<?php echo e($producto->id_producto); ?>').on('hidden.bs.collapse', function () {
                                        $('#icono<?php echo e($producto->id_producto); ?>').addClass('fa-angle-down');
                                        $('#icono<?php echo e($producto->id_producto); ?>').removeClass('fa-angle-up');
                                    });
                                    $('#collapse<?php echo e($producto->id_producto); ?>').on('shown.bs.collapse', function () {
                                        $('#icono<?php echo e($producto->id_producto); ?>').addClass('fa-angle-up');
                                        $('#icono<?php echo e($producto->id_producto); ?>').removeClass('fa-angle-down');
                                    });

                                    var count<?php echo e($producto->id_producto); ?> = 1;
                                    if("<?php echo e($producto->imagen2); ?>" != ""){
                                        count<?php echo e($producto->id_producto); ?> ++;
                                    }
                                    if("<?php echo e($producto->imagen3); ?>" != ""){
                                        count<?php echo e($producto->id_producto); ?> ++;
                                    }
                                    if("<?php echo e($producto->imagen4); ?>" != ""){
                                        count<?php echo e($producto->id_producto); ?> ++;
                                    }
                                    if("<?php echo e($producto->imagen5); ?>" != ""){
                                        count<?php echo e($producto->id_producto); ?> ++;
                                    }

                                    document.getElementById("left-<?php echo e($producto->id_producto); ?>").addEventListener("click", function(e) {
                                        var selected = $('#img-selected-<?php echo e($producto->id_producto); ?>').val();
                                        if(parseInt(selected) != 1){
                                            var anterior = parseInt(selected)-1;
                                        }else{
                                            var anterior = count<?php echo e($producto->id_producto); ?>;
                                        }
                                        $('#imagen'+anterior+'-<?php echo e($producto->id_producto); ?>').css('display', 'block');
                                        if(count<?php echo e($producto->id_producto); ?> != 1){
                                            $('#imagen'+selected+'-<?php echo e($producto->id_producto); ?>').css('display', 'none');
                                        }
                                        $('#img-selected-<?php echo e($producto->id_producto); ?>').val(anterior);
                                        $('#selected-text-<?php echo e($producto->id_producto); ?>').text(anterior);
                                    });
                                    document.getElementById("right-<?php echo e($producto->id_producto); ?>").addEventListener("click", function(e) {
                                        var selected = $('#img-selected-<?php echo e($producto->id_producto); ?>').val();
                                        if(parseInt(selected)<count<?php echo e($producto->id_producto); ?>){
                                            var siguiente = parseInt(selected)+1;   
                                        }else{
                                            var siguiente = 1;
                                        }
                                        $('#imagen'+siguiente+'-<?php echo e($producto->id_producto); ?>').css('display', 'block');
                                        if(count<?php echo e($producto->id_producto); ?> != 1){
                                            $('#imagen'+selected+'-<?php echo e($producto->id_producto); ?>').css('display', 'none');
                                        }
                                        $('#img-selected-<?php echo e($producto->id_producto); ?>').val(siguiente);
                                        $('#selected-text-<?php echo e($producto->id_producto); ?>').text(siguiente);
                                    });
                                </script>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="no-products">
                                            <p>Lo sentimos no se encontraron productos</p>
                                            <i class="fa fa-frown"></i>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-products">
                        <div class="title-pagination">
                            <span><?php echo e($productos->firstItem()); ?> - <?php echo e($productos->lastItem()); ?> de <?php echo e($productos->total()); ?></span>
                        </div>
                        <div class="controls-pagination">
                            <a <?php if(!$productos->onFirstPage()): ?> href="?page=1" <?php endif; ?> class="doble-arrow-left <?php if($productos->onFirstPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if(!$productos->onFirstPage()): ?> href="<?php echo e($productos->previousPageUrl()); ?>" <?php endif; ?> class="arrow-left <?php if($productos->onFirstPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if($productos->currentPage() != $productos->lastPage()): ?> href="<?php echo e($productos->nextPageUrl()); ?>" <?php endif; ?> class="arrow-right <?php if($productos->currentPage() == $productos->lastPage()): ?> no-control <?php endif; ?>"></a>
                            <a <?php if($productos->currentPage() != $productos->lastPage()): ?> href="<?php echo e($productos->url($productos->lastPage())); ?>" <?php endif; ?> class="doble-arrow-right <?php if($productos->currentPage() == $productos->lastPage()): ?> no-control <?php endif; ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('productos').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/productos.blade.php ENDPATH**/ ?>