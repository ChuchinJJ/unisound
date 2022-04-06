
<?php $__env->startSection('contenido'); ?>

<!-- breadcrumb inicio -->
<div class="top_panel_title top_panel_style_6  title_present navi_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <div class="breadcrumbs" style="text-align: left;">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="/shop">Tienda</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="/shop/<?php echo e($producto->id_categoria); ?>"><?php echo e($categoria); ?></a>
                <span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php echo e($producto->nombre); ?></span></div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb fin -->
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_item_product woocommerce single-product">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Inicio</a>&nbsp;&#47;&nbsp;
                    <a href="#">Band &amp; Orchestra</a>&nbsp;&#47;&nbsp;
                    <a href="#">Mouthpieces</a>&nbsp;&#47;&nbsp;Barrington BR FR401 Double French Horn
                </nav>
                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-1053" class="product type-product post-1053 status-publish first instock product_cat-band-orchestra product_cat-mouthpieces product_tag-concept product_tag-creative has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <div data-thumb="/storage/img/products/<?php echo e($producto->imagen1); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="<?php echo e($producto->imagen1); ?>">
                                    <img width="600" height="777" src="/storage/img/products/<?php echo e($producto->imagen1); ?>" class="wp-post-image" alt="" loading="lazy" title="1" data-caption="" data-src="/storage/img/products/<?php echo e($producto->imagen1); ?>" data-large_image="/storage/img/products/<?php echo e($producto->imagen1); ?>" data-large_image_width="656" data-large_image_height="850" srcset="/storage/img/products/<?php echo e($producto->imagen1); ?> 600w, /storage/img/products/<?php echo e($producto->imagen1); ?> 232w, /storage/img/products/<?php echo e($producto->imagen1); ?> 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            <?php if($producto->imagen2): ?>
                            <div data-thumb="/storage/img/products/<?php echo e($producto->imagen2); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="<?php echo e($producto->imagen2); ?>">
                                    <img width="600" height="777" src="/storage/img/products/<?php echo e($producto->imagen2); ?>" class="" alt="" loading="lazy" title="2" data-caption="" data-src="/storage/img/products/<?php echo e($producto->imagen2); ?>" data-large_image="/storage/img/products/<?php echo e($producto->imagen2); ?>" data-large_image_width="656" data-large_image_height="850" srcset="/storage/img/products/<?php echo e($producto->imagen2); ?> 600w, /storage/img/products/<?php echo e($producto->imagen2); ?> 232w, /storage/img/products/<?php echo e($producto->imagen2); ?> 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if($producto->imagen3): ?>
                            <div data-thumb="/storage/img/products/<?php echo e($producto->imagen3); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="<?php echo e($producto->imagen3); ?>">
                                    <img width="600" height="777" src="/storage/img/products/<?php echo e($producto->imagen3); ?>" class="" alt="" loading="lazy" title="3" data-caption="" data-src="/storage/img/products/<?php echo e($producto->imagen3); ?>" data-large_image="/storage/img/products/<?php echo e($producto->imagen3); ?>" data-large_image_width="656" data-large_image_height="850" srcset="/storage/img/products/<?php echo e($producto->imagen3); ?> 600w, /storage/img/products/<?php echo e($producto->imagen3); ?> 232w, /storage/img/products/<?php echo e($producto->imagen3); ?> 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if($producto->imagen4): ?>
                            <div data-thumb="/storage/img/products/<?php echo e($producto->imagen4); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="<?php echo e($producto->imagen4); ?>">
                                    <img width="600" height="777" src="/storage/img/products/<?php echo e($producto->imagen4); ?>" class="" alt="" loading="lazy" title="4" data-caption="" data-src="/storage/img/products/<?php echo e($producto->imagen4); ?>" data-large_image="/storage/img/products/<?php echo e($producto->imagen4); ?>" data-large_image_width="656" data-large_image_height="850" srcset="/storage/img/products/<?php echo e($producto->imagen4); ?> 600w, /storage/img/products/<?php echo e($producto->imagen4); ?> 232w, /storage/img/products/<?php echo e($producto->imagen4); ?> 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if($producto->imagen5): ?>
                            <div data-thumb="/storage/img/products/<?php echo e($producto->imagen5); ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="<?php echo e($producto->imagen5); ?>">
                                    <img width="600" height="777" src="/storage/img/products/<?php echo e($producto->imagen5); ?>" class="" alt="" loading="lazy" title="5" data-caption="" data-src="/storage/img/products/<?php echo e($producto->imagen5); ?>" data-large_image="/storage/img/products/<?php echo e($producto->imagen5); ?>" data-large_image_width="656" data-large_image_height="850" srcset="/storage/img/products/<?php echo e($producto->imagen5); ?> 600w, /storage/img/products/<?php echo e($producto->imagen5); ?> 232w, /storage/img/products/<?php echo e($producto->imagen5); ?> 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            <?php endif; ?>
                        </figure>
                    </div>

                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?php echo e($producto->nombre); ?></h1>
                        <?php if($valoraciones->first() != null): ?>
                        <div class="woocommerce-product-rating">
		                    <div class="star-rating" role="img" aria-label="Valorado en <?php echo e($valoraciones->avg('puntuacion')); ?> de 5">
                                <span style="width:<?php echo e($valoraciones->avg('puntuacion')*20); ?>%">
                                    Valorado 
                                    <strong class="rating"><?php echo e($valoraciones->avg('puntuacion')); ?></strong> 
                                    sobre 5 basado en <span class="rating"><?php echo e($valoraciones->count()); ?></span> 
                                    puntuaciones de clientes
                                </span>
                            </div>
						</div>
                        <?php endif; ?>
                        <p class="price">
                            <?php if(count($colores) > 1 && $colores[0]->precio != $colores[count($colores)-1]->precio): ?>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($colores[0]->precio); ?></bdi>
                                </span> &ndash; 
                                <span class="woocommerce-Price-amount amount"><bdi>
                                    <span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($colores[count($colores)-1]->precio); ?></bdi>
                                </span>
                            <?php else: ?>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($colores[0]->precio); ?></bdi>
                                </span>
                            <?php endif; ?>
                        </p>
                        <div itemprop="description">
                            <p><?php echo e($producto->descripcion_general); ?></p>
                        </div>
                        <?php if(count($colores) > 1): ?>
                        <!-- <div class="container-color-product">
                            <?php $__currentLoopData = $colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <i class="square-color" style="background-color: <?php echo e($color->rgb); ?>"></i>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>-->
                        <?php endif; ?>  
                        <form action="<?php echo e(route('cart.add')); ?>" method="post" class="variations_form cart">
                            <?php echo csrf_field(); ?>
                            <?php
                                $cant_colores = $colores->filter(function ($value, $key) {
                                    return $value->cantidad > 0;
                                });
                            ?>
                            <?php if($cant_colores->isNotEmpty()): ?>
                                <?php if(count($colores) > 1): ?>
                                    <table class="variations" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <th class="label"><label for="pa_color">Color</label></th>
                                                <td class="value">
                                                    <select id="pa_color" style="border-style: none;" name="color" data-attribute_name="color" data-show_option_none="yes" required onchange="cambiarColor(this.value)">
                                                        <option value="" selected='selected'>Elige una opción</option>
                                                        <?php $__currentLoopData = $colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($color->cantidad > 0): ?>
                                                                <option value="<?php echo e($color->id_color); ?>"><?php echo e($color->color); ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <a class="reset_variations" href="#">Limpiar</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php $__currentLoopData = $colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="hidden" id="precio-<?php echo e($color->id_color); ?>" value="<?php echo e($color->precio); ?>" />
                                            <input type="hidden" id="cantidad-<?php echo e($color->id_color); ?>" value="<?php echo e($color->cantidad); ?>" />
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                    <?php if($colores[0]->precio != $colores[count($colores)-1]->precio): ?>
                                    <div class="single_variation_wrap">
                                        <div class="woocommerce-variation single_variation">
                                            <div class="woocommerce-variation-description"></div>
                                            <div class="woocommerce-variation-price">
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi id="priceByColor"></bdi>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <label class="cantidad-disponible" id="cantidad-disponible"></label>
                                <?php else: ?>
                                    <input type="hidden" id="pa_color" name="color" value="<?php echo e($colores[0]->id_color); ?>" />
                                    <label class="cantidad-disponible" id="cantidad-disponible">
                                        <?php if($colores[0]->cantidad > 0): ?>
                                        <small>
                                            <?php echo e($colores[0]->cantidad); ?>

                                            <?php if($colores[0]->cantidad > 1): ?>
                                                unidades disponibles
                                            <?php else: ?>
                                                unidad disponible
                                            <?php endif; ?>
                                        </small>
                                        <?php endif; ?>
                                    </label>
                                <?php endif; ?>
                                <div class="single_variation_wrap">
                                    <div class="woocommerce-variation single_variation"></div>
                                    <div class="woocommerce-variation-add-to-cart variations_button">
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_61e094d825320"><?php echo e($producto->nombre); ?> cantidad</label>
                                            <input type="number" id="quantity_61e094d825320" class="input-text qty text" step="1" min="1" 
                                                max="<?php if(count($colores) == 1): ?><?php echo e($colores[0]->cantidad); ?><?php endif; ?>" name="quantity" value="1" title="Cantidad" 
                                                size="4" placeholder="" inputmode="numeric" autocomplete="off"/>
                                        </div>
                                        <button type="submit" class="single_add_to_cart_button button alt">Añadir al carrito</button>
                                        <input type="hidden" name="product_id" value="<?php echo e($producto->id_producto); ?>" />
                                    </div>
                                </div>
                            <?php else: ?>
                                <span class="badge bg-danger agotado">Producto agotado</span>
                            <?php endif; ?>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categoría: <a href="/shop/<?php echo e($producto->id_categoria); ?>" rel="tag"><?php echo e($categoria); ?></a></span>
                            <span class="product_id">Product ID: <span><?php echo e($producto->id_producto); ?></span></span>
                        </div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Descripción</a>
                            </li>
                            <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Información adicional</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Valoraciones (<?php echo e(count($valoraciones)); ?>)</a>
                            </li>
                        </ul>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Descripción</h2>
                            <p><?php echo e($producto->descripcion_detallada); ?></p>
                        </div>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                            <h2>Información adicional</h2>
                            <table class="woocommerce-product-attributes shop_attributes">
                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">
                                    <th class="woocommerce-product-attributes-item__label">Color</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                        <?php
                                            $count = 1;
                                        ?>
                                        <p><?php $__currentLoopData = $colores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($count < count($colores)): ?>
                                                <?php echo e($color->color); ?>,
                                                <?php
                                                    $count++;
                                                ?>
                                            <?php else: ?>
                                                <?php echo e($color->color); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <?php if(count($valoraciones)>0): ?>
                                    <h2 class="woocommerce-Reviews-title">
                                        <?php echo e(count($valoraciones)); ?> valoración en <span><?php echo e($producto->nombre); ?></span>
                                    </h2>
                                    <ol class="commentlist">
                                        <?php $__currentLoopData = $valoraciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valoracion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="review byuser bypostauthor even thread-even depth-1" id="li-comment-17">
                                            <div id="comment-17" class="comment_container">
                                                <img alt="" src="http://2.gravatar.com/avatar/5cd0b6012e5c0b81a9a70035543643a3?s=60&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/5cd0b6012e5c0b81a9a70035543643a3?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60" loading="lazy">
                                                <div class="comment-text">
                                                    <div class="star-rating" role="img" aria-label="Valorado en <?php echo e($valoracion->puntuacion); ?> de 5"><span style="width:<?php echo e($valoracion->puntuacion*20); ?>%">Valorado en <strong class="rating"><?php echo e($valoracion->puntuacion); ?></strong> de 5</span></div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author"><?php echo e($valoracion->email); ?> </strong>
                                                            <span class="woocommerce-review__dash">-</span>
                                                                <time class="woocommerce-review__published-date" datetime="<?php echo e($valoracion->fecha); ?>">
                                                                <?php
                                                                    setlocale(LC_TIME, "spanish");
                                                                    $fecha_str = str_replace("/", "-", $valoracion->fecha);
                                                                    $newDate = date("d-m-Y", strtotime($fecha_str));
                                                                    $fecha = strftime("%d de %B, %Y", strtotime($newDate));
                                                                ?>
                                                                <?php echo e($fecha); ?>

                                                                </time>
                                                        </p>
                                                    <div class="description"><p><?php echo e($valoracion->comentario); ?></p></div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                        </ol>
                                    <?php else: ?>
                                    <h2 class="woocommerce-Reviews-title">Valoraciones</h2>
                                    <p class="woocommerce-noreviews">No hay valoraciones aún.</p>
                                    <?php endif; ?>
                                </div>

                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <?php if(count($valoraciones)>0): ?>
                                            <span id="reply-title" class="comment-reply-title">Añadir una valoración</span>
                                            <?php else: ?>
                                            <span id="reply-title" class="comment-reply-title">Sé el primero en valorar &ldquo;<?php echo e($producto->nombre); ?>&rdquo;</span>
                                            <?php endif; ?>

                                            <?php if(Auth::check()): ?>

                                            <form action="/valoracion/product" method="post" id="commentform" class="comment-form">
                                                <?php echo csrf_field(); ?>
                                                <p class="comment-notes"><span id="email-notes">Tu dirección de correo electrónico no será publicada.</span> Los campos obligatorios están marcados con <span class="required">*</span></p>
                                                <div class="comment-form-rating">
                                                    <label for="rating">Tu puntuación&nbsp;<span class="required">*</span></label>
                                                    <select name="rating" id="rating" required>
                                                        <option value="">Puntuar&hellip;</option>
                                                        <option value="5">Perfecto</option>
                                                        <option value="4">Bueno</option>
                                                        <option value="3">Normal</option>
                                                        <option value="2">No está tan mal</option>
                                                        <option value="1">Muy pobre</option>
                                                    </select>
                                                </div>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Tu valoración&nbsp;<span class="required">*</span></label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Enviar" />
                                                    <input type='hidden' name='id_producto' value='<?php echo e($producto->id_producto); ?>' />
                                                </p>
                                                <?php else: ?>
                                                <p class="mt-4">Para hacer una valoración deberas iniciar sesión</p> <button onclick="window.location.href= '/login'" class="btn button" style="padding:9px 18px;">Iniciar Sesión</button>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </article>
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

<script>
    function cambiarColor(val){
        if(val != ""){
            var precio = document.getElementById("precio-"+val).value;
            var cantidad = document.getElementById("cantidad-"+val).value;
            document.getElementById("priceByColor").innerHTML = '<span class="woocommerce-Price-currencySymbol">$</span>'+precio;
            var unidad = " unidad disponible";
            if(parseInt(cantidad)>1){
                unidad = " unidades disponibles";
            }
            document.getElementById("cantidad-disponible").innerHTML = '<small>'+cantidad+unidad+'</small>';
            document.getElementById("quantity_61e094d825320").max=cantidad;
        }else{
            document.getElementById("priceByColor").innerHTML = '';
            document.getElementById("cantidad-disponible").innerHTML = '';
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/pages/product.blade.php ENDPATH**/ ?>