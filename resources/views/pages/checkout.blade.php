@extends('layouts.container')
@section('contenido')
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h5 class="page_title">Pedidos</h5>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="/shop">Tienda</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Pedidos</span>
            </div>
        </div>
    </div>
</div>

<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-792 page type-page status-publish hentry">
                <section class="post_content" itemprop="articleBody">
                    <div class="woocommerce">
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="/checkout">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2>Tu pedido</h2>
                                    <h3>Factura #{{ $venta->id_venta }}</h3>
                                    <h4 style="margin-bottom:0"><b>Fecha de factura:</b></h4>
                                    @php
                                        setlocale(LC_TIME, "spanish");
                                        $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                        $newDate = date("d-m-Y", strtotime($fecha_str));
                                        $fecha = strftime("%d de %B del %Y", strtotime($newDate));
                                    @endphp
                                    <h4>{{ $fecha }}</h4>
                                </div>
                                <div class="col-md-7" style="text-align: right;">
                                    <h5>{{ $cliente->nombre." ".$cliente->apellidos }}</h5>
                                    <h4>{{ $cliente->calle }}</h4>
                                    <h4>{{ $cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais }}</h4>
                                    <h4>{{ $cliente->email }}</h4>
                                    <h4>{{ $cliente->telefono }}</h4>
                                </div>
                            </div> 
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Producto</th>
                                            <th class="product-total">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detalles as $detalle)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $detalle->producto }}&nbsp;
                                                <strong class="product-quantity">&times;&nbsp;{{ $detalle->cantidad }}</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($detalle->cantidad*$detalle->precio,2,".",",") }}</bdi>
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->total+$venta->descuento,2,".",",") }}</bdi>
                                            </span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Descuento</th>
                                            <td><span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->descuento,2,".",",") }}</bdi>
                                            </span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->total,2,".",",") }}</bdi>
                                                </span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div style="text-align: center;">
                                    <a class="button" href="/">Continuar comprando</a>
                                </div>
                            </div>
                        </form>
                    </div>
				</section>
			</article>
            <section class="related_wrap related_wrap_empty"></section>
		</div>
	</div>
</div>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Su pedido fue realizado con éxito</h5>
      </div>
      <div class="modal-body">
	    <h4 class="mb-4">Su pedido fue procesado, nosotros nos contactaremos para finalizar su compra</h4>
        <h4 style="text-align:center">Gracias por su preferencia.</h4>
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

@endsection