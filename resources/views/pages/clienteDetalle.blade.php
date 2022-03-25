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
                            <div>
                                <h4><b>Fecha Pedido: </b>
                                    @php
                                        setlocale(LC_TIME, "spanish");
                                        $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                        $newDate = date("d-m-Y", strtotime($fecha_str));
                                        $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                                    @endphp
                                    {{ $fecha }}
                                </h4>
                            </div>
                            <div>
                                <h4><b>N. Pedido:</b> °{{ $venta->id_venta }} </h4>
                                <h4><b>Estado:</b> {{$venta->status}} </h4>
                            </div>
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
                                            <a href="/product/">{{ $detalle->producto }}</a>
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
                                    @if ($venta->descuento > 1 )
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->total+$venta->descuento, 2, ".", ",") }}</bdi>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Descuento</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ number_format($venta->descuento, 2, ".", ",") }}</bdi>
                                                </span>
                                            </td>
                                        </tr>
                                    @endif
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
                                <div class="wc-proceed-to-checkout">
                                    <a href="/cliente" class="checkout-button button alt wc-forward">
                                        mi perfil
                                    </a>
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


@endsection