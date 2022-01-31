@extends('layouts.container')
@section('contenido')

<!-- breadcrumb inicio -->
<div class="top_panel_title top_panel_style_6  title_present navi_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <div class="post_navi">
                <span class="post_navi_item post_navi_prev"><a href="#" rel="prev">MicroMall(TM) Paint Gold Drop B</a></span>
                <span class="post_navi_item post_navi_next"><a href="http://localhost/wordpress/product/hercules-ds513bb-2-trumpet/" rel="next">Hercules DS513BB 2 Trumpet</a></span>
            </div>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="/shop">Tienda</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="/shop/{{ $producto->id_categoria }}">{{ $categoria }}</a>
                <span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">{{ $producto->nombre }}</span></div>
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
                            <div data-thumb="{{ $producto->imagen1 }}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="{{ $producto->imagen1 }}">
                                    <img width="600" height="777" src="{{ $producto->imagen1 }}" class="wp-post-image" alt="" loading="lazy" title="1" data-caption="" data-src="{{ $producto->imagen1 }}" data-large_image="{{ $producto->imagen1 }}" data-large_image_width="656" data-large_image_height="850" srcset="{{ $producto->imagen1 }} 600w, {{ $producto->imagen1 }} 232w, {{ $producto->imagen1 }} 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            @if($producto->imagen2)
                            <div data-thumb="{{ $producto->imagen2 }}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="{{ $producto->imagen2 }}">
                                    <img width="600" height="777" src="{{ $producto->imagen2 }}" class="" alt="" loading="lazy" title="2" data-caption="" data-src="{{ $producto->imagen2 }}" data-large_image="{{ $producto->imagen2 }}" data-large_image_width="656" data-large_image_height="850" srcset="{{ $producto->imagen2 }} 600w, {{ $producto->imagen2 }} 232w, {{ $producto->imagen2 }} 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            @endif
                            @if($producto->imagen3)
                            <div data-thumb="{{ $producto->imagen3 }}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="{{ $producto->imagen3 }}">
                                    <img width="600" height="777" src="{{ $producto->imagen3 }}" class="" alt="" loading="lazy" title="3" data-caption="" data-src="{{ $producto->imagen3 }}" data-large_image="{{ $producto->imagen3 }}" data-large_image_width="656" data-large_image_height="850" srcset="{{ $producto->imagen3 }} 600w, {{ $producto->imagen3 }} 232w, {{ $producto->imagen3 }} 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            @endif
                            @if($producto->imagen4)
                            <div data-thumb="{{ $producto->imagen4 }}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="{{ $producto->imagen4 }}">
                                    <img width="600" height="777" src="{{ $producto->imagen4 }}" class="" alt="" loading="lazy" title="4" data-caption="" data-src="{{ $producto->imagen4 }}" data-large_image="{{ $producto->imagen4 }}" data-large_image_width="656" data-large_image_height="850" srcset="{{ $producto->imagen4 }} 600w, {{ $producto->imagen4 }} 232w, {{ $producto->imagen4 }} 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            @endif
                            @if($producto->imagen5)
                            <div data-thumb="{{ $producto->imagen5 }}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                <a href="{{ $producto->imagen5 }}">
                                    <img width="600" height="777" src="{{ $producto->imagen5 }}" class="" alt="" loading="lazy" title="5" data-caption="" data-src="{{ $producto->imagen5 }}" data-large_image="{{ $producto->imagen5 }}" data-large_image_width="656" data-large_image_height="850" srcset="{{ $producto->imagen5 }} 600w, {{ $producto->imagen5 }} 232w, {{ $producto->imagen5 }} 656w" sizes="(max-width: 600px) 100vw, 600px" />
                                </a>
                            </div>
                            @endif
                        </figure>
                    </div>

                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{ $producto->nombre }}</h1>
                        <p class="price">
                            @if (count($colores) > 1)
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $colores[0]->precio }}</bdi>
                                </span> &ndash; 
                                <span class="woocommerce-Price-amount amount"><bdi>
                                    <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $colores[count($colores)-1]->precio }}</bdi>
                                </span>
                            @else
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $colores[0]->precio }}</bdi>
                                </span>
                            @endif
                        </p>
                        <div itemprop="description">
                            <p>{{ $producto->descripcion_general }}</p>
                        </div>
                        <form class="variations_form cart" action="?" method="post" enctype='multipart/form-data' data-product_id="1053" data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;red&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/D&quot;,&quot;display_price&quot;:280,&quot;display_regular_price&quot;:280,&quot;image&quot;:{&quot;title&quot;:&quot;horn&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg 600w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-232x300.jpg 232w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg 656w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;full_src_w&quot;:656,&quot;full_src_h&quot;:850,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-300x400.jpg&quot;,&quot;thumb_src_w&quot;:300,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:600,&quot;src_h&quot;:777},&quot;image_id&quot;:1069,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;bdi&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;280.00&lt;\/bdi&gt;&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1054,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/D&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;brown&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/D&quot;,&quot;display_price&quot;:280,&quot;display_regular_price&quot;:280,&quot;image&quot;:{&quot;title&quot;:&quot;horn&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg 600w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-232x300.jpg 232w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg 656w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;full_src_w&quot;:656,&quot;full_src_h&quot;:850,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-300x400.jpg&quot;,&quot;thumb_src_w&quot;:300,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:600,&quot;src_h&quot;:777},&quot;image_id&quot;:1069,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;bdi&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;280.00&lt;\/bdi&gt;&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1055,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/D&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;blue&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/D&quot;,&quot;display_price&quot;:350.75,&quot;display_regular_price&quot;:350.75,&quot;image&quot;:{&quot;title&quot;:&quot;horn&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-600x777.jpg 600w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-232x300.jpg 232w, http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg 656w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn.jpg&quot;,&quot;full_src_w&quot;:656,&quot;full_src_h&quot;:850,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/localhost\/wordpress\/wp-content\/uploads\/2016\/08\/horn-300x400.jpg&quot;,&quot;thumb_src_w&quot;:300,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:600,&quot;src_h&quot;:777},&quot;image_id&quot;:1069,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;bdi&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;350.75&lt;\/bdi&gt;&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1056,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/D&quot;}]">
                            <table class="variations" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <th class="label"><label for="pa_color">Color</label></th>
                                        <td class="value">
                                            <select id="pa_color" class="" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                <option value="" selected='selected'>Elige una opción</option>
                                                @foreach( $colores as $color )
                                                    <option value="blue">{{ $color->color }}</option>
                                                @endforeach
                                            </select>
                                            <a class="reset_variations" href="#">Limpiar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="single_variation_wrap">
                                <div class="woocommerce-variation single_variation"></div>
                                <div class="woocommerce-variation-add-to-cart variations_button">
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_61e094d825320">Barrington BR FR401 Double French Horn cantidad</label>
                                        <input type="number" id="quantity_61e094d825320" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Cantidad" size="4" placeholder="" inputmode="numeric" autocomplete="off"/>
                                    </div>
                                    <button type="submit" class="single_add_to_cart_button button alt">Añadir al carrito</button>
                                    <input type="hidden" name="add-to-cart" value="1053" />
                                    <input type="hidden" name="product_id" value="1053" />
                                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                </div>
                            </div>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categoría: <a href="/shop/{{ $producto->id_categoria }}" rel="tag">{{ $categoria }}</a></span>
                            <span class="product_id">Product ID: <span>{{ $producto->id_producto }}</span></span>
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
                                <a href="#tab-reviews">Valoraciones (0)</a>
                            </li>
                        </ul>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Descripción</h2>
                            <p>{{ $producto->descripcion_detallada }}</p>
                        </div>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                            <h2>Información adicional</h2>
                            <table class="woocommerce-product-attributes shop_attributes">
                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">
                                    <th class="woocommerce-product-attributes-item__label">Color</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                        @php
                                            $count = 1;
                                        @endphp
                                        <p>@foreach( $colores as $color )
                                            @if($count < count($colores))
                                                {{ $color->color }},
                                                @php
                                                    $count++;
                                                @endphp
                                            @else
                                                {{ $color->color }}
                                            @endif
                                        @endforeach</p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">Valoraciones</h2>
                                    <p class="woocommerce-noreviews">No hay valoraciones aún.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Sé el primero en valorar &ldquo;Barrington BR FR401 Double French Horn&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/product/barrington-br-fr401-double-french-horn/#respond" style="display:none;">Cancelar respuesta</a></small></span>
                                            <form action="#comentarios" method="post" id="commentform" class="comment-form">
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
                                                <p class="comment-form-author">
                                                    <label for="author">Nombre&nbsp;<span class="required">*</span></label>
                                                    <input id="author" name="author" type="text" value="" size="30" required />
                                                </p>
                                                <p class="comment-form-email">
                                                    <label for="email">Correo electrónico&nbsp;<span class="required">*</span></label>
                                                    <input id="email" name="email" type="email" value="" size="30" required />
                                                </p>
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                                    <label for="wp-comment-cookies-consent">Guardar mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que haga un comentario.</label>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Enviar" />
                                                    <input type='hidden' name='comment_post_ID' value='1053' id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>
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
@endsection