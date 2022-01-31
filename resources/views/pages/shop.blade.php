@extends('layouts.container')
@section('contenido')
<div class="top_panel_title top_panel_style_6  title_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner">
		<div class="content_wrap">
			<h5 class="page_title">Tienda</h5>
		</div>
	</div>
</div>

<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap woocommerce sidebar_right sidebar_show">
		<div class="content">
			<div class="list_products shop_mode_thumbs">
				<nav class="woocommerce-breadcrumb"><a href="/">Inicio</a>&nbsp;&#47;&nbsp;Shop
				</nav>
				<header class="woocommerce-products-header">
				</header>
				<div class="woocommerce-notices-wrapper"></div>
				<div class="mode_buttons">
					<form action="shop" method="post">
						<input type="hidden" name="musicplace_shop_mode" value="thumbs" />
						<a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
						<a href="#" class="woocommerce_list icon-th-list" title="Show products as list"></a>
					</form>
				</div>
				<p class="woocommerce-result-count">Mostrando 1&ndash;12 de 33 resultados</p>
				<form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby" aria-label="Pedido de la tienda">
						<option value="menu_order" selected='selected'>Orden por defecto</option>
						<option value="popularity">Ordenar por popularidad</option>
						<option value="rating">Ordenar por calificación media</option>
						<option value="date">Ordenar por las últimas</option>
						<option value="price">Ordenar por precio: bajo a alto</option>
						<option value="price-desc">Ordenar por precio: alto a bajo</option>
					</select>
					<input type="hidden" name="paged" value="1" />
				</form>
				<ul class="products columns-3">
					@foreach($productos as $producto)
					<li class=" column-1_3 product type-product post-1053 status-publish instock product_cat-band-orchestra product_cat-mouthpieces product_tag-concept product_tag-creative has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
						<div class="post_item_wrap">
							<div class="post_featured">
								<div class="post_thumb">
									<a class="hover_icon hover_icon_link" href="/product/{{ $producto->id_producto }}">
										<img width="300" height="400"
											src="{{ $producto->imagen1 }}"
											class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
											loading="lazy"/> 
									</a>
								</div>
							</div>
							<div class="post_content">
								<h3>
									<a href="/product/{{ $producto->id_producto }}">{{ $producto->nombre }}</a>
								</h3>
								<div class="star-rating" role="img" aria-label="Valorado en 4.50 de 5"><span
										style="width:90%">Valorado en <strong class="rating">4.50</strong> de 5</span>
								</div>
								<span class="price">
									@php
										$mi_color = array();
									@endphp

									@foreach($colores as $color)
										@if($color->id_producto == $producto->id_producto)
											@php
												$mi_color[] = $color->precio;
											@endphp
										@endif
									@endforeach

									@if(count($mi_color)>1)
										@if($mi_color[0] == $mi_color[count($mi_color)-1])
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color[0]}}</bdi>
										</span>
										@else
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color[0]}}</bdi>
										</span>&ndash; 
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color[count($mi_color)-1]}}</bdi>
										</span>
										@endif
									@else
									<span class="woocommerce-Price-amount amount">
										<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color[0]}}</bdi>
									</span>
									@endif
								</span>
								<a href="/product/{{ $producto->id_producto }}"
									data-quantity="1" class="button product_type_variable add_to_cart_button"
									data-product_id="1053" data-product_sku=""
									aria-label="Elige las opciones para &ldquo;Barrington BR FR401 Double French Horn&rdquo;"
									rel="nofollow">Seleccionar opciones</a>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
				<nav id="pagination" class="pagination_wrap pagination_pages">
					<span class="pager_current active ">1</span>
					<a href="http://localhost/wordpress/shop/page/2/" class="">2</a>
					<a href="http://localhost/wordpress/shop/page/3/" class="">3</a>
					<a href="http://localhost/wordpress/shop/page/2/" class="pager_next "></a>
					<a href="http://localhost/wordpress/shop/page/3/" class="pager_last "></a>
				</nav>
			</div>
		</div>

		<div class="sidebar widget_area scheme_original" role="complementary">
			<div class="sidebar_inner widget_area_inner">
				<aside id="woocommerce_widget_cart-2" class="widget_number_1 widget woocommerce widget_shopping_cart">
					<h5 class="widget_title">Carrito de compras</h5>
					<div class="widget_shopping_cart_content">
						<p class="woocommerce-mini-cart__empty-message">No hay productos en el carrito.</p>
					</div>
				</aside>

				<aside id="woocommerce_price_filter-2" class="widget_number_2 widget woocommerce widget_price_filter">
					<h5 class="widget_title">Filtrar por precio</h5>
					<form method="get" action="/shop">
						<div class="price_slider_wrapper">
							<div class="price_slider" style="display:none;"></div>
							<div class="price_slider_amount" data-step="1">
								<input type="text" id="min_price" name="min_price" value="47" data-min="47"
									placeholder="Precio mínimo" />
								<input type="text" id="max_price" name="max_price" value="1330" data-max="1330"
									placeholder="Precio máximo" />
								<button type="submit" class="button">Filtrar</button>
								<div class="price_label" style="display:none;">
									Precio: <span class="from"></span> &mdash; <span class="to"></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</form>
				</aside>

				<aside id="woocommerce_product_search-2"
					class="widget_number_3 widget woocommerce widget_product_search">
					<form role="search" method="get" class="search_form" action="/shop">
						<input type="text" class="search_field" placeholder="Search for products &hellip;" value=""
							name="s" title="Search for products:" />
						<button class="search_button icon-search" type="submit"></button>
						<input type="hidden" name="post_type" value="product" />
					</form>
				</aside>

				<aside id="woocommerce_products-4" class="widget_number_5 widget woocommerce widget_products">
					<h5 class="widget_title">Featured Products</h5>
					<ul class="product_list_widget">
						<li>
							<a href="http://localhost/wordpress/product/tama-s-l-p-big-black-steel-snare-drum/">
								<img width="300" height="400"
									src="http://localhost/wordpress/wp-content/uploads/2016/07/1-1-300x400.jpg"
									class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
									loading="lazy" /> 
								<span class="product-title">Tama S.L.P. Big Black Steel Snare Drum</span>
							</a>
							<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
								<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span>
							</div>
							<span class="woocommerce-Price-amount amount">
								<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</bdi>
							</span>
						</li>
						<li>
							<a href="http://localhost/wordpress/product/crosley-cruiser-portable-3-speed-turntable/">
								<img width="300" height="400"
									src="http://localhost/wordpress/wp-content/uploads/2016/07/7_4-300x400.jpg"
									class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
									loading="lazy" />
								<span class="product-title">Crosley Cruiser Portable 3-Speed Turntable</span>
							</a>
							<span class="woocommerce-Price-amount amount">
								<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi>
							</span> &ndash;
							<span class="woocommerce-Price-amount amount">
								<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>449.99</bdi>
							</span>
						</li>
						<li>
							<a href="http://localhost/wordpress/product/meinl-cymbals-arena-marching-cymbals-pair/">
								<img width="300" height="400"
									src="http://localhost/wordpress/wp-content/uploads/2016/07/2-300x400.jpg"
									class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
									loading="lazy" />
								<span class="product-title">Meinl Cymbals Arena Marching Cymbals Pair</span>
							</a>
							<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
								<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
							</div>
							<span class="woocommerce-Price-amount amount">
								<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi>
							</span> &ndash;
							<span class="woocommerce-Price-amount amount">
								<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>369.99</bdi>
							</span>
						</li>
					</ul>
				</aside>
			</div>
		</div>
	</div>
</div>
@endsection