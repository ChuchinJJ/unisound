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
		<form method="post" action="" id="formulario">
			@csrf
			<div class="content">
				<div class="list_products {{ old('vista', 'shop_mode_thumbs') }}" id="shop_mode">
					<nav class="woocommerce-breadcrumb"><a href="/">Inicio</a>&nbsp;&#47;&nbsp;Shop</nav>
					<header class="woocommerce-products-header"></header>
					<div class="woocommerce-notices-wrapper"></div>
					<input type="hidden" id="vista" value="{{ old('vista','shop_mode_thumbs') }}" name="vista"/>
					<div class="mode_buttons">
						<a href="#" class="woocommerce_thumbs icon-th" title="Mostrar productos como cuadrícula" onclick="cambiarModo('thumbs')"></a>
						<a href="#" class="woocommerce_list icon-th-list" title="Mostrar productos como lista" onclick="cambiarModo('list')"></a>
					</div>
					<p class="woocommerce-result-count">Mostrando {{ $productos->firstItem() }}&ndash;{{ $productos->lastItem() }} de {{ $productos->total() }} resultados</p>
					<div class="woocommerce-ordering">
						<select name="order" class="orderby" aria-label="Pedido de la tienda" onchange="ordenar()">
							<option value="default" @if(old('order') == "default") selected='selected' @endif>Orden por defecto</option>
							<option value="nombre" @if(old('order') == "nombre") selected='selected' @endif>Orden nombre: A-Z</option>
							<option value="nombre-desc" @if(old('order') == "nombre-desc") selected='selected' @endif>Ordenar nombre: Z-A</option>
							<option value="precio-desc" @if(old('order') == "precio-desc") selected='selected' @endif>Ordenar por precio: bajo a alto</option>
							<option value="precio" @if(old('order') == "precio") selected='selected' @endif>Ordenar por precio: alto a bajo</option>
							<option value="rating" @if(old('order') == "rating") selected='selected' @endif>Ordenar por calificación: alto a bajo</option>
							<option value="rating-desc" @if(old('order') == "rating-desc") selected='selected' @endif>Ordenar por calificación: bajo a alto</option>
						</select>
					</div>
					<ul class="products columns-3">
						@if(count($productos) >0)
						@foreach($productos as $producto)
						<li class="column-1_3 product type-product post-1053 status-publish instock product_cat-band-orchestra product_cat-mouthpieces product_tag-concept product_tag-creative has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
							<div class="post_item_wrap">
								<div class="post_featured">
									<div class="post_thumb">
										<a class="hover_icon hover_icon_link" href="/product/{{ $producto->id_producto }}">
											<img width="300" height="400"
												src="/storage/img/products/{{ $producto->imagen1 }}"
												class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
												loading="lazy"/> 
										</a>
									</div>
								</div>
								<div class="post_content">
									@php
										$mi_color = $colores->whereIn('id_producto', $producto->id_producto);
										$mi_valoracion = $valoraciones->whereIn('id_producto', $producto->id_producto);
									@endphp
									<h3>
										<a href="/product/{{ $producto->id_producto }}">{{ $producto->nombre }}</a>
									</h3>
									@if($mi_valoracion->first() != null)
									<div class="star-rating" role="img" aria-label="Valorado en {{$mi_valoracion->first()->valoracion}} de 5"><span
											style="width:{{$mi_valoracion->first()->valoracion*20}}%">Valorado en <strong class="rating">{{$mi_valoracion->first()->valoracion}}</strong> de 5</span>
									</div>
									@endif
									<div class="description">
										<p>{{ $producto->descripcion_general }}</p>
									</div>
									<span class="price">
										@if(count($mi_color)>1)
											@if($mi_color->first() == $mi_color->last())
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color->first()->precio}}</bdi>
											</span>
											@else
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color->first()->precio}}</bdi>
											</span>&ndash; 
											<span class="woocommerce-Price-amount amount">
												<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color->last()->precio}}</bdi>
											</span>
											@endif
										@else
										<span class="woocommerce-Price-amount amount">
											<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$mi_color->first()->precio}}</bdi>
										</span>
										@endif
									</span>
									<a href="/product/{{ $producto->id_producto }}"
										data-quantity="1" class="button product_type_variable add_to_cart_button"
										data-product_id="1053" data-product_sku=""
										aria-label="Elige las opciones para &ldquo;{{ $producto->nombre }}&rdquo;"
										rel="nofollow">Seleccionar opciones</a>
								</div>
							</div>
						</li>
						@endforeach

						@else
						<div class="vacio">
							<p>Lo sentimos no se encontraron coincidencias</p>
							<i class="fa fa-frown"></i>
						</div>
						@endif
					</ul>
					<nav id="pagination" class="pagination_wrap pagination_pages">
						@if(!$productos->onFirstPage())
							<a href="?page=1" class="pager_first "></a>
							<a href="{{ $productos->previousPageUrl() }}" class="pager_prev"></a>
							@if($productos->currentPage() == $productos->lastPage() && $productos->lastPage()>2)
								<a href="{{ $productos->url($productos->currentPage()-2) }}">{{ $productos->currentPage()-2 }}</a>
							@endif
							<a href="{{ $productos->previousPageUrl() }}">{{ $productos->currentPage()-1 }}</a>
						@endif
						<span class="pager_current active ">{{ $productos->currentPage() }}</span>
						@if($productos->currentPage() != $productos->lastPage())
							<a href="{{ $productos->nextPageUrl() }}">{{ $productos->currentPage()+1 }}</a>
							@if($productos->onFirstPage() && $productos->lastPage()>2)
								<a href="{{ $productos->url($productos->currentPage()+2) }}" >{{ $productos->currentPage()+2 }}</a>
							@endif
							<a href="{{ $productos->nextPageUrl() }}" class="pager_next "></a>
							<a href="{{ $productos->url($productos->lastPage()) }}" class="pager_last "></a>
						@endif
					</nav>
				</div>
			</div>

			<div class="sidebar widget_area scheme_original" role="complementary">
				<div class="sidebar_inner widget_area_inner">
					<aside id="woocommerce_product_search-2"
						class="widget_number_3 widget woocommerce widget_product_search">
						<div class="search_form">
							<input type="text" class="search_field" placeholder="Buscar producto" value="{{old('nombre')}}"
								name="nombre" title="Buscar producto:" />
							<button class="search_button icon-search" id="buscar-nombre"></button>
						</div>
					</aside>

					<aside id="woocommerce_price_filter-2" class="widget_number_2 widget woocommerce widget_price_filter">
						<h5 class="widget_title">Filtrar por precio</h5>
						<div class="price_slider_wrapper">
							<div class="price_slider" style="display:none;"></div>
							<div class="price_slider_amount" data-step="1">
								<input type="text" id="min_price" name="min_precio" value="{{old('min_precio', 47)}}" data-min="47"
									placeholder="Precio mínimo" />
								<input type="text" id="max_price" name="max_precio" value="{{old('max_precio', 90000)}}" data-max="90330"
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
							<p class="woocommerce-mini-cart__empty-message">No hay productos en el carrito.</p>
						</div>
					</aside>

					<aside id="woocommerce_products-4" class="widget_number_5 widget woocommerce widget_products">
						<h5 class="widget_title">Productos destacados</h5>
						<ul class="product_list_widget">
							<li>
								<a href="/product/2">
									<img width="300" height="400"
										src="/img/1-1-300x400.jpg"
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
								<a href="/product/2">
									<img width="300" height="400"
										src="/img/7_4-300x400.jpg"
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
								<a href="/product/2">
									<img width="300" height="400"
										src="/img/2-300x400.jpg"
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
		formulario.setAttribute('action', '/shop');
		formulario.submit()
	});
</script>
@endsection