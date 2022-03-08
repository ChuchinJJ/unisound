@extends('layouts.container')
@section('contenido')

<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h5 class="page_title">Carrito de compras</h5>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="/shop">Tienda</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Carrito de compras</span>
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
                        @if (count(Cart::getContent()))
                        <form class="woocommerce-cart-form" action="/cart-edit" method="post">
                            @csrf
                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Producto</th>
                                        <th class="product-price">Precio</th>
                                        <th class="product-quantity">Cantidad</th>
                                        <th class="product-subtotal">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::getContent() as $item)
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <a href="/cart-removeitem/{{$item->id}}" class="remove" aria-label="Borrar este artículo">&times;</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="/product/{{ $item->id }}">
                                                <img width="300" height="400" src="/storage/img/products/{{ $item->attributes['urlimg'] }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Producto">
                                            <a href="/product/{{ $item->id }}">{{ $item->name }}</a>
                                        </td>
                                        <td class="product-price" data-title="Precio">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item->price }}</bdi>
                                            </span>
                                        </td>
                                        <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                                        <td class="product-quantity" data-title="Cantidad">
                                            <div class="quantity">
                                                <label class="screen-reader-text" for="quantity_61e0972f0a471">{{ $item->name }}</label>
                                                <input type="number" id="quantity_61e0972f0a471" class="input-text qty text" step="1" min="1" max="" 
                                                    name="quantity[]" value="{{ $item->quantity }}" title="Cantidad" size="4" placeholder="" 
                                                    inputmode="numeric" autocomplete="off" onchange="activarBoton()"/>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item->price*$item->quantity }}</bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <label for="coupon_code">Cupón:</label> 
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Código de cupón" /> 
                                                <button type="submit" class="button" name="apply_coupon" value="Aplicar cupón">Aplicar cupón</button>
                                            </div>
                                            <button type="submit" class="button" name="update_cart" id="update_cart" value="Actualizar carrito" disabled>Actualizar carrito</button>
                                            <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="8fbbb3868c" />
                                            <input type="hidden" name="_wp_http_referer" value="/wordpress/cart/" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h2>Total del carrito</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ Cart::getTotal() }}</bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ Cart::getTotal() }}</bdi>
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="/checkout" class="checkout-button button alt wc-forward">
                                        Finalizar compra
                                    </a>
                                </div>
                            </div>
                        </div>
                        @else
                        <p class="cart-empty woocommerce-info">Tu carrito está vacío.</p>
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="/shop">
                                Volver a la tienda
                            </a>
                        </p>
                        @endif
                    </div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>
@if(session()->has('success'))
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Atención</h5>
      </div>
      <div class="modal-body">
	  {{ session('success') }}
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
@endif
<script>
    function activarBoton(){
        document.getElementById("update_cart").disabled=false;
    }
</script>

@endsection