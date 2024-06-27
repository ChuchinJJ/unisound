@extends('layouts.container')
@section('contenido')

<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h5 class="page_title">Detalles de tu compra</h5>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="/cliente">Mi Perfil</a>
                
            </div>
        </div>
    </div>
</div>


<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-790 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article">
                <section class="post_content" itemprop="articleBody">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>

                        <div class="cliente-espacio1">
                            <h4><b>Pedido # {{ $venta->id_venta }}</b></h4>
                            <h4>
                                @php
                                    setlocale(LC_TIME, "spanish");
                                    $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                    $newDate = date("d-m-Y", strtotime($fecha_str));
                                    $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                                @endphp
                                {{ $fecha }}
                            </h4>
                            <p class="bg-status bg-{{ str_replace(' ', '',$venta->status) }} text-wrap p-2" style="font-size:15px;">{{$venta->status}}</p>
                            <h4><b>Pagado: </b>@if($venta->pagado == 1) Si @else No @endif</h4>
                        </div>
                        <form class="woocommerce-cart-form mt-4" action="/cart-edit" method="post" >
                            @csrf
                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Producto</th>
                                        <th class="product-price">Precio</th>
                                        <th class="product-quantity">Cantidad</th>
                                        <th class="product-subtotal">Subtotal</th>
                                    </tr>
                                </thead>   
                                <tbody>
                                    @foreach($detalles as $detalle)
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-thumbnail">
                                            @foreach($colores as $color)
                                                @if($color->id_color == $detalle->id_color)
                                                    @php $producto = $productos->firstWhere('id_producto', $color->id_producto); @endphp
                                                    <a href="/product/{{ $producto->id_producto}}">
                                                        <img width="300" height="400" src="/storage/img/products/{{ $producto->imagen1 }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                                    </a>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="product-name" data-title="Producto">
                                            <a href="/product/{{ $producto->id_producto}}">{{ $detalle->producto }}</a>
                                        </td>
                                        <td class="product-price" data-title="Precio">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($detalle->precio, 2, ".", ",") }}</bdi>
                                            </span>
                                        </td>
                                        <input type="hidden" name="" value="">
                                        <td class="product-quantity" data-title="Cantidad">
                                            <div class="">
                                                <label class="screen-reader-text" for="quantity_61e0972f0a471">Cantidad</label>
                                                <p>{{ $detalle->cantidad }} Unidad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span> {{ number_format($detalle->precio*$detalle->cantidad, 2, ".", ",") }} </bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h2>Total de la compra</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->total, 2, ".", ",") }}</bdi>
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout row button-seccion">
                                    <a href="/cliente" class="checkout-button button alt wc-forward col-auto">
                                        mi perfil
                                    </a>
                                    @if($venta->pagado  == 0)
                                    <a class="checkout-button button alt wc-forward col-auto" onclick="abrirPaymentModal()">
                                        Realizar pago
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>

@if(session('payment'))
<!-- Modal para mostrar datos para pagos de efectivo / transferencias -->
@php
$payment = session('payment');
if($payment->charges[0]->payment_method->object == "bank_transfer_payment"){
    $img_url = env('APP_URL')."/img/spei.png";
    $titulo = "transferencia";
    $tipo_refer = "clave";
    $refer = $payment->charges[0]->payment_method->clabe;
    $descripcion = "Utiliza exactamente esta cantidad al realizar el pago.";
    $instrucciones = "<li>Accede a tu banca en línea.</li>".
        "<li>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser STP</strong>.</li>".
        "<li>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>".
        "<li>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>";
}else{
    $titulo = "efectivo";
    $tipo_refer = "referencia";
    $refer = $payment->charges[0]->payment_method->reference;
    $img_url = "";
    $descripcion = "";
    $instrucciones = "";
}
$expiacion = \Carbon\Carbon::parse($payment->charges[0]->payment_method->expires_at)->format('d/m/Y');

if($payment->charges[0]->payment_method->type == "oxxo"){
    $img_url = env('APP_URL')."/img/oxxo.png";
    $descripcion = "OXXO cobrará una comisión adicional al momento de realizar el pago.";
    $instrucciones = "<li>Acude a la tienda OXXO más cercana. <a href='https://www.google.com.mx/maps/search/oxxo/' target='_blank'>Encuéntrala aquí</a>.</li>".
                        "<li>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>".
                        "<li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>".
                        "<li>Realiza el pago correspondiente con dinero en efectivo.</li>".
                        "<li>Al confirmar tu pago, el cajero te entregará un comprobante impreso.".
                            "<strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.".
                        "</li>";
}
@endphp
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085; z-index: 99999;" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered" role="document" style="height: 94%;">
        <div class="modal-content" style="height: 100%;">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalTitle">Pago con {{$titulo}}</h3>
                <button type="button" class="close" data-dismiss="modal" style="padding: 5px 5px 5px 8px;margin: 0px;opacity: 1;" aria-label="Close" onclick="cerrar('myModal')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body opps">
                <div class="opps-header">
                    <div class="opps-info">
                        <div class="opps-brand">
                                <img src="{{$img_url}}" alt="{{ $payment->charges[0]->payment_method->type }}" width="80%">
                        </div>
                        <div class="opps-ammount">
                            <div>
                                <h3>Monto a pagar</h3>
                                <h2>${{ number_format($payment->amount/100, 2, ".", ",") }} <sup>{{ $payment->currency }}</sup></h2>
                            </div>
                            <p>{{$descripcion}}</p>
                        </div>
                    </div>
                    <div class="opps-reference" style="line-height: 100%; text-align: justify;">
                        <h3>{{$tipo_refer}}</h3>                        
                        <h1>{{ $refer }}</h1>
                        <small>Esta referencia expirará el {{$expiacion}}, realiza tu depósito antes de esta fecha.</small>
                    </div>
                </div>
                <div class="opps-instructions">
                    <h5>Instrucciones:</h5>
                    <ol>
                        {!! $instrucciones !!}
                    </ol>
                    <div class="opps-footnote">
                        Al completar estos pasos recibirás un correo de
                        <strong>Unisound</strong> confirmando tu pago.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form method="post" target="_blank" action="/pagos/{{$venta->id_venta}}/imprimir">
                    @csrf
                    <input type="hidden" name="payment" value="{{ json_encode($payment,TRUE)}}">
                    <button type="submit" class="btna" onclick="imprimir()" data-dismiss="modal">
                        <i class="fa fa-print" aria-hidden="true" style="margin-right: 10px;"></i>
                        Imprimir
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@if(session('paymentError'))
<!-- Modal para mostrar errores -->
<div class="modal" id="error" tabindex="-1" role="dialog" aria-labelledby="payments" style="display:block;background-color: #00000085; z-index: 999999;" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Ocurrió un error</h5>
        </div>
        <div class="modal-body">
            <h4 class="mb-2 mt-2">{{ session('paymentError') }}</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btna" onclick="cerrar('error')" data-dismiss="modal">Ok</button>
        </div>
    </div>
  </div>
</div>
@endif

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