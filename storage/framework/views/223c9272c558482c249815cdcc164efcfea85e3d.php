
<?php $__env->startSection('contenido'); ?>
<div class="top_panel_title top_panel_style_6  breadcrumbs_present title_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap">
			<h5 class="page_title">Tienda</h5>
			<?php if(isset($categoria)): ?>
				<div class="breadcrumbs">
					<span class="breadcrumbs_item current"><?php echo e($categoria); ?></span>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap woocommerce sidebar_right sidebar_show">
		<form method="post" action="/shop" id="formulario">
			<?php echo csrf_field(); ?>
			<div class="content">
				<div class="list_products <?php echo e(old('vista', 'shop_mode_thumbs')); ?>" id="shop_mode">
					<nav class="woocommerce-breadcrumb"><a href="/">Inicio</a>&nbsp;&#47;&nbsp;Shop</nav>
					<header class="woocommerce-products-header"></header>
					<div class="woocommerce-notices-wrapper"></div>
					<input type="hidden" id="vista" value="<?php echo e(old('vista','shop_mode_thumbs')); ?>" name="vista"/>
					<div class="mode_buttons">
						<a href="#" class="woocommerce_thumbs icon-th" title="Mostrar productos como cuadrícula" onclick="cambiarModo('thumbs')"></a>
						<a href="#" class="woocommerce_list icon-th-list" title="Mostrar productos como lista" onclick="cambiarModo('list')"></a>
					</div>
					<p class="woocommerce-result-count">Mostrando <?php echo e($productos->firstItem()); ?>&ndash;<?php echo e($productos->lastItem()); ?> de <?php echo e($productos->total()); ?> resultados</p>
					<div class="woocommerce-ordering">
						<select name="order" class="orderby" aria-label="Pedido de la tienda" onchange="ordenar()">
							<option value="default" <?php if(old('order') == "default"): ?> selected='selected' <?php endif; ?>>Orden por defecto</option>
							<option value="nombre" <?php if(old('order') == "nombre"): ?> selected='selected' <?php endif; ?>>Orden nombre: A-Z</option>
							<option value="nombre-desc" <?php if(old('order') == "nombre-desc"): ?> selected='selected' <?php endif; ?>>Ordenar nombre: Z-A</option>
							<option value="precio-desc" <?php if(old('order') == "precio-desc"): ?> selected='selected' <?php endif; ?>>Ordenar por precio: bajo a alto</option>
							<option value="precio" <?php if(old('order') == "precio"): ?> selected='selected' <?php endif; ?>>Ordenar por precio: alto a bajo</option>
							<option value="rating" <?php if(old('order') == "rating"): ?> selected='selected' <?php endif; ?>>Ordenar por calificación: alto a bajo</option>
							<option value="rating-desc" <?php if(old('order') == "rating-desc"): ?> selected='selected' <?php endif; ?>>Ordenar por calificación: bajo a alto</option>
						</select>
					</div>
					<ul class="products columns-3">
						<?php if(count($productos) >0): ?>
						<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="column-1_3 product type-product post-1053 status-publish instock product_cat-band-orchestra product_cat-mouthpieces product_tag-concept product_tag-creative has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
							<div class="post_item_wrap">
								<div class="post_featured">
									<?php
									$mi_color = $colores->whereIn('id_producto', $producto->id_producto);
									$mi_valoracion = $valoraciones->whereIn('id_producto', $producto->id_producto);
									$cant_colores = $mi_color->filter(function ($value, $key) {
										return $value->cantidad > 0;
									});
									?>
									<?php if($cant_colores->isEmpty()): ?>
									<div class="ribbon-wrapper ribbon-lg">
										<div class="ribbon bg-danger">Agotado</div>
									</div>
									<?php endif; ?>
									<div class="post_thumb">
										<a class="hover_icon hover_icon_link" href="/product/<?php echo e($producto->id_producto); ?>">
											<img width="300" height="400"
												src="/storage/img/products/<?php echo e($producto->imagen1); ?>"
												class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
												loading="lazy"/>
											<?php if(count($mi_color)>1): ?>
											<div class="container-color-shop">
												<?php $__currentLoopData = $mi_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<i class="square-color" style="background-color: <?php echo e($color->rgb); ?>"></i>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</div>
											<?php endif; ?>
										</a>
									</div>
								</div>
								<div class="post_content">
									<h3>
										<a href="/product/<?php echo e($producto->id_producto); ?>"><?php echo e($producto->nombre); ?></a>
									</h3>
									<?php if($mi_valoracion->first() != null): ?>
									<div class="star-rating" role="img" aria-label="Valorado en <?php echo e($mi_valoracion->first()->valoracion); ?> de 5"><span
											style="width:<?php echo e($mi_valoracion->first()->valoracion*20); ?>%">Valorado en <strong class="rating"><?php echo e($mi_valoracion->first()->valoracion); ?></strong> de 5</span>
									</div>
									<?php endif; ?>
									<div class="description">
										<p><?php echo e($producto->descripcion_general); ?></p>
									</div>
									<span class="price">
										<?php if(count($mi_color)>1): ?>
											<?php if($mi_color->first()->precio == $mi_color->last()->precio): ?>
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($mi_color->first()->precio); ?></bdi>
											</span>
											<?php else: ?>
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($mi_color->first()->precio); ?></bdi>
											</span>&ndash; 
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($mi_color->last()->precio); ?></bdi>
											</span>
											<?php endif; ?>
										<?php else: ?>
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($mi_color->first()->precio); ?></bdi>
										</span>
										<?php endif; ?>
									</span>
									<a href="/product/<?php echo e($producto->id_producto); ?>"
										data-quantity="1" class="button product_type_variable add_to_cart_button"
										data-product_id="1053" data-product_sku=""
										aria-label="Elige las opciones para &ldquo;<?php echo e($producto->nombre); ?>&rdquo;"
										rel="nofollow">Seleccionar opciones</a>
								</div>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php else: ?>
						<div class="vacio">
							<p>Lo sentimos no se encontraron coincidencias</p>
							<i class="fa fa-frown"></i>
						</div>
						<?php endif; ?>
					</ul>
					<nav id="pagination" class="pagination_wrap pagination_pages">
						<?php if(!$productos->onFirstPage()): ?>
							<a href="?page=1" class="pager_first "></a>
							<a href="<?php echo e($productos->previousPageUrl()); ?>" class="pager_prev"></a>
							<?php if($productos->currentPage() == $productos->lastPage() && $productos->lastPage()>2): ?>
								<a href="<?php echo e($productos->url($productos->currentPage()-2)); ?>"><?php echo e($productos->currentPage()-2); ?></a>
							<?php endif; ?>
							<a href="<?php echo e($productos->previousPageUrl()); ?>"><?php echo e($productos->currentPage()-1); ?></a>
						<?php endif; ?>
						<span class="pager_current active "><?php echo e($productos->currentPage()); ?></span>
						<?php if($productos->currentPage() != $productos->lastPage()): ?>
							<a href="<?php echo e($productos->nextPageUrl()); ?>"><?php echo e($productos->currentPage()+1); ?></a>
							<?php if($productos->onFirstPage() && $productos->lastPage()>2): ?>
								<a href="<?php echo e($productos->url($productos->currentPage()+2)); ?>" ><?php echo e($productos->currentPage()+2); ?></a>
							<?php endif; ?>
							<a href="<?php echo e($productos->nextPageUrl()); ?>" class="pager_next "></a>
							<a href="<?php echo e($productos->url($productos->lastPage())); ?>" class="pager_last "></a>
						<?php endif; ?>
					</nav>
				</div>
			</div>

			<div class="sidebar widget_area scheme_original" role="complementary">
				<div class="sidebar_inner widget_area_inner">
					<aside id="woocommerce_product_search-2"
						class="widget_number_3 widget woocommerce widget_product_search">
						<div class="search_form">
							<input type="text" class="search_field" placeholder="Buscar producto" value="<?php echo e(old('nombre')); ?>"
								name="nombre" title="Buscar producto:" id="search" />
							<button class="search_button icon-search" id="buscar-nombre"></button>
						</div>
					</aside>

					<aside id="woocommerce_price_filter-2" class="widget_number_2 widget woocommerce widget_price_filter">
						<h5 class="widget_title">Filtrar por precio</h5>
						<div class="price_slider_wrapper">
							<div class="price_slider" style="display:none;"></div>
							<div class="price_slider_amount" data-step="1">
								<input type="text" id="min_price" name="min_precio" value="<?php echo e(old('min_precio', $colores->min('precio'))); ?>" data-min="<?php echo e($colores->min('precio')); ?>"
									placeholder="Precio mínimo" />
								<input type="text" id="max_price" name="max_precio" value="<?php echo e(old('max_precio', $colores->max('precio'))); ?>" data-max="<?php echo e($colores->max('precio')); ?>"
									placeholder="Precio máximo" />
								<button type="submit" class="button">Filtrar</button>
								<div class="price_label" style="display:none;">
									Precio: <span class="from"></span> &mdash; <span class="to"></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</aside>

					<aside id="woocommerce_widget_cart-2" class="widget_number_1 widget woocommerce widget_shopping_cart">
						<h5 class="widget_title">Carrito de compras</h5>
						<div class="widget_shopping_cart_content">
							<?php if(count(Cart::getContent())): ?>
							<ul class="woocommerce-mini-cart cart_list product_list_widget">
								<?php $__currentLoopData = Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="woocommerce-mini-cart-item mini_cart_item" style="min-height: 80px;">
									<a href="/cart-removeitem/<?php echo e($item->id); ?>" class="remove remove_from_cart_button" aria-label="Borrar este artículo">×</a>
									<a href="/product/<?php echo e($item->id); ?>">
										<img width="300" height="400" src="/storage/img/products/<?php echo e($item->attributes['urlimg']); ?>" alt="" loading="lazy" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"><?php echo e($item->name); ?>

									</a>
									<span class="quantity">
										<?php echo e($item->quantity); ?> x 
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e($item->getPriceWithConditions()); ?></bdi>
										</span>
									</span>				
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
							<p class="woocommerce-mini-cart__total total">
								<strong>Subtotal:</strong>
								<span class="woocommerce-Price-amount amount">
									<bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e(Cart::getTotal()); ?></bdi>
								</span>
							</p>
							<p class="woocommerce-mini-cart__buttons buttons">
								<a href="/cart/" class="button wc-forward">Ver carrito</a>
								<a href="/checkout/" class="button checkout wc-forward">Finalizar compra</a>
							</p>
							<?php else: ?>
							<p class="woocommerce-mini-cart__empty-message">No hay productos en el carrito.</p>
							<?php endif; ?>
						</div>
					</aside>

					<aside id="woocommerce_products-4" class="widget_number_5 widget woocommerce widget_products">
						<h5 class="widget_title">Productos destacados</h5>
						<ul class="product_list_widget">
							<?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
									$color_destacado = $colores->whereIn('id_producto', $destacado->id_producto);
									$valoracion_destacado = $valoraciones->whereIn('id_producto', $destacado->id_producto);
								?>
								<li>
									<a href="/product/<?php echo e($destacado->id_producto); ?>">
										<img width="300" height="400"
											src="/storage/img/products/<?php echo e($destacado->imagen1); ?>"
											class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
											loading="lazy" /> 
										<span class="product-title"><?php echo e($destacado->nombre); ?></span>
									</a>
									<?php if($valoracion_destacado->first() != null): ?>
									<div class="star-rating" role="img" aria-label="Valorado en <?php echo e($valoracion_destacado->first()->valoracion); ?> de 5">
										<span style="width:<?php echo e($valoracion_destacado->first()->valoracion*20); ?>%">Valorado en <strong class="rating"><?php echo e($valoracion_destacado->first()->valoracion); ?></strong> de 5</span>
									</div>
									<?php endif; ?>
									<?php if(count($color_destacado)>1): ?>
										<?php if($color_destacado->first() == $color_destacado->last()): ?>
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($color_destacado->first()->precio); ?></bdi>
										</span>
										<?php else: ?>
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($color_destacado->first()->precio); ?></bdi>
										</span>&ndash; 
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($color_destacado->last()->precio); ?></bdi>
										</span>
										<?php endif; ?>
									<?php else: ?>
									<span class="woocommerce-Price-amount amount">
										<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($color_destacado->first()->precio); ?></bdi>
									</span>
									<?php endif; ?>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</aside>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	function ordenar(){
		document.getElementById("formulario").submit();
	}

	function cambiarModo(modo){
		var shop_mode = document.getElementById("shop_mode");
		var vista = document.getElementById("vista");
		var descripcion = document.getElementsByClassName("description");
		if(modo == "list"){
			shop_mode.classList.remove('shop_mode_thumbs');
			vista.value='shop_mode_list';
			shop_mode.classList.add('shop_mode_list');
		}else{
			shop_mode.classList.remove('shop_mode_list');
			vista.value='shop_mode_thumbs';
			shop_mode.classList.add('shop_mode_thumbs');
		}
	}
	
	document.getElementById('buscar-nombre').addEventListener('click', (e) => {
		e.preventDefault();
		var formulario = document.getElementById("formulario");
		document.getElementById("min_price").value = "<?php echo e($colores->min('precio')); ?>";
		document.getElementById("max_price").value = "<?php echo e($colores->max('precio')); ?>";
		formulario.setAttribute('action', '/shop');
		formulario.submit()
	});

    document.getElementById("search").addEventListener("keypress", function onEvent(event) {
        if (event.key === "Enter") {
            e.preventDefault();
			var formulario = document.getElementById("formulario");
			document.getElementById("min_price").value = "<?php echo e($colores->min('precio')); ?>";
			document.getElementById("max_price").value = "<?php echo e($colores->max('precio')); ?>";
			formulario.setAttribute('action', '/shop');
			formulario.submit()
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/pages/shop.blade.php ENDPATH**/ ?>