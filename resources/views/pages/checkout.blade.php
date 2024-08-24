@extends('layouts.container')
@section('contenido')
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h5 class="page_title">Tu pedido</h5>
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
                                    <h3>Compra #{{ $venta->id_venta }}</h3>
                                    <h4 style="margin-bottom:0"><b>Fecha de Compra:</b></h4>
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
                                    <h4>
                                        {{ $cliente->calle }}
                                        <br>
                                        {{ $cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais }}
                                    </h4>
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
                                                    @if($detalle->descuento > 0)
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">&#36;</span>
                                                        {{ number_format($detalle->cantidad*$detalle->precio+$detalle->cantidad*$detalle->descuento,2,".",",") }}
                                                    </bdi>
                                                    <div class="badge badge-danger" style="padding-top: 6px;">
                                                        - ${{ number_format($detalle->cantidad*$detalle->descuento,2,".",",") }}
                                                    </div>
                                                    @else
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($detalle->cantidad*$detalle->precio,2,".",",") }}</bdi>
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        @if($venta->descuento > 0)
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
                                        @endif
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
                                <div class="row button-seccion">
                                    <a class="button col-auto" href="/">Continuar comprando</a>
                                    <a class="button col-auto" onclick="abrirPaymentModal()">Realizar pago</a>
                                </div>
                            </div>
                        </form>
                        <br>
                        <!--<center>
                            <h4>Si ya pagaste envía tu comprobante de depósito o transferencia a:
                                <br>
                                Whatsapp: <a href="https://wa.me/529191007549" style="color: #de3a3a; text-decoration: none;">9191007549</a>
                                <br>
                                Correo: <a href="mailto:unisound.com.mx@gmail.com" style="color: #de3a3a; text-decoration: none;">unisound.com.mx@gmail.com</a>
                            </h4>
                        </center>
                        <br>
                        <div>
                            <div style="text-align: left">
                                <b style="margin-bottom:10px">MEDIOS DE PAGOS UNISOUND IMUSA</b>
                            </div>
                            <table width="100%" style="border: 1px solid #dee2e685; border-collapse: collapse; margin-top: 20px">
                                <tr>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Banamex</td>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                                    Clave interbancaria: 002123700904256821
                                    <br>
                                    Suc: 7009, Cuenta: 425682
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Bancomer</td>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                                    Clave interbancaria: 012125004776140710
                                    <br>
                                    Para depositos: 0477614071
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Banco Azteca</td>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                                    Clave interbancaria: 127140001012928187
                                    <br>
                                    Número de tarjeta: 5343-8102-0367-6579
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Atrato pago</td>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Empresa: Unisound Imusa</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">PayPal</td>
                                    <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                                    <a style="color: #de3a3a; text-decoration: none;" href="https://paypal.me/unisoundimusa1?country.x=MX&locale.x=es_XC">https://paypal.me/unisoundimusa1?country.x=MX&locale.x=es_XC</a>
                                    </td>
                                </tr>
                            </table>
                            <div style="text-align: right">
                                <p style="margin-bottom:10px">Nombre: Liliana del Carmen Solorzano Sanchez</p>
                            </div>
                        </div>-->
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
        <h5 class="modal-title" id="myModalTitle">Su pedido fue realizado con éxito</h5>
      </div>
      <div class="modal-body">
	    <h4 class="mb-4">Su pedido fue procesado, finalice su compra seleccionando alguno de los métodos de pago disponibles.</h4>
        <h4 style="text-align:center">Gracias por su preferencia.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btna" onclick="cerrar('myModal')" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para metodos de pago -->
@component('components.paymentModal')
    @slot('venta', $venta)
@endcomponent

<script>
	function cerrar(id){
		var modal = document.getElementById(id);
		modal.style.display = "none";
	}
</script>

@endsection