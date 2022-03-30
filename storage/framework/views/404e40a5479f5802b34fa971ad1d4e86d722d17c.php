<div class="body_wrap">
    <div class="page_wrap">
        <header class="top_panel_wrap top_panel_style_6 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_above">
                <div class="top_panel_middle" >
                    <div class="columns_wrap no_margins header">
                        <div class="contact_logo column-1_6">
                            <div class="logo">
                                <div class="logolight">
                                    <a href="/">
                                        <img src="/img/logoUnisound.png" class="logo_main " alt="Logo" width="108" height="35">
                                        <img src="/img/logoUnisound.png" class="logo_fixed " alt="Logo" width="108" height="35">
                                    </a>
                                </div>
                                <div class="logodark">
                                    <a href="/">
                                        <img src="/img/logoUnisoundDark.png" class="logo_main" alt="Logo" width="108" height="35">
                                        <img src="/img/logoUnisoundDark.png" class="logo_fixed" alt="Logo" width="108" height="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_main_wrap column-5_6">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li id="menu-item-439" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1145">
                                        <a href="/"><span>Inicio</span></a>
                                    </li>
                                    
                                    <li id="menu-item-442" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-442"><a><span>Categorias</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-505"><a><span>Instrumentos Musicales</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503"><a href="/shop/1"><span>De cuerda</span></a></li>
                                                    <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a href="/shop/2"><span>De Percusion</span></a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li id="menu-item-934" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-934"><a><span>Audio e Iluminación</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-534" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-534"><a href="/shop/3"><span>Atriles y Soporte</span></a></li>
                                                    <li id="menu-item-468" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-468"><a href="/shop/4"><span>Audio</span></a></li>
                                                    <li id="menu-item-550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-550"><a href="/shop/5"><span>Iluminación</span></a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li id="menu-item-1124" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1124"><a><span>Electr. y Componentes</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-475" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-475"><a href="/shop/6"><span>Adaptadores</span></a></li>
                                                    <li id="menu-item-1224" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1224"><a href="/shop/7"><span>Accessorios</span></a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li id="menu-item-1218" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1218"><a href="/shop"><span>Ver todos</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-1127" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1127"><a href="/proximo"><span>Ofertas</span></a>
                                    </li>

                                    <li id="menu-item-1133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1145">
                                        <a href="/about"><span>Acerca de</span></a>
                                    </li>
                                </ul>
                            </nav>

                                <div class="luna">
                                    <span><i id="bdark-luna" class="fa fa-moon"></i></span>
                                </div> 
                                <div class="sol">
                                    <span><i id="bdark-sol" class="fa fa-sun"></i></span>
                                </div> 
                            
                            <div class="top_panel_icon head-cart">
                                <a class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                                    <span class="icon-online-shopping-cart">
                                        <div class="cart-number"><?php echo e(count(Cart::getContent())); ?></div>
                                    </span>
                                    <span class="contact_label contact_cart_label">Your cart:</span>
                                    <span class="contact_cart_totals">
                                        <span class="cart_items">0 Items</span>
                                        -
                                        <span class="cart_summa">&#36;0.00</span>
                                    </span>
                                </a>
                                
                                <ul class="widget_area sidebar_cart sidebar">
                                    <li>
                                        <div  class="widget woocommerce widget_shopping_cart">
                                            <div class="hide_cart_widget_if_empty">
                                                <div class="widget_shopping_cart_content">
                                                    <?php if(count(Cart::getContent())): ?>
                                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                        <?php $__currentLoopData = Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="woocommerce-mini-cart-item mini_cart_item" style="min-height: 60px;">
                                                            <a href="/product/<?php echo e($item->id); ?>">
                                                                <img width="300" height="400" src="/storage/img/products/<?php echo e($item->attributes['urlimg']); ?>" alt="" loading="lazy" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"><?php echo e($item->name); ?>

                                                            </a>
                                                            <span class="quantity">
                                                                <?php echo e($item->quantity); ?> x 
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e($item->price); ?></bdi>
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
                                                    </p>
                                                    <?php else: ?>
                                                    No hay productos
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                </ul>
                                
                            </div>

                            <div class="menu_main_cart top_panel_icon head-user">
                                <?php if(Auth::check()): ?>
                                <div class="head-name"><?php echo e(Auth::user()->usuario); ?></div>
                                <a class="cuenta" onclick="abrirMenu()" aria-hidden="true">Mi cuenta 
                                    <i class="icon-down"></i>
                                </a>
                                <div class="menu-login" id="menu">
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <a href="/cliente"class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100">
                                            Ver perfil
                                        </a>

                                        <a type="submit" class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                Cerrar sesión
                                        </a>
                                    </form>
                                </div>
                                <?php else: ?>
                                <div class="cuentai">Iniciar sesión</div>
                                <a class="cuenta" onclick="abrirMenu()">Mi cuenta 
                                    <i class="icon-down"></i>
                                </a>
                                <div class="menu-login" id="menu">
                                    <a class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100" href="/login">
                                        Iniciar sesión
                                    </a>
                                    <a class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100" href="/registrar">
                                        Crear cuenta
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="search_wrap search_style_fullscreen top_panel_icon  search_state_open">
                                <div class="search_form_wrap">
                                    <form role="search" method="post" class="search_form" action="/shop">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="search_send icon-search-1" title="Buscar"></button>
                                        <input type="text" class="search_input" placeholder="Buscar" autocomplete="off" name="nombre"/>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- header móvil -->
        <div class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <div class="logolight-movil">
                        <a href="/">
                            <img src="/img/logoUnisound.png" class="logo_main" alt="Logo" width="216" height="79"/>
                        </a>
                    </div>
                    <div class="logodark-movil">
                        <a href="/">
                            <img src="/img/logoUnisoundDark.png" class="logo_main" alt="Logo" width="216" height="79"/>
                        </a>
                    </div>
                </div>
                <div class="menu_main_cart top_panel_icon">
                    <a href="#" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                        <span class="contact_icon icon-online-shopping-cart movil">
                            <div class="cart-number"><?php echo e(count(Cart::getContent())); ?></div>
                        </span>
                        <span class="contact_label contact_cart_label">Your cart:</span>
                        <span class="contact_cart_totals">
                            <span class="cart_items">0 Items</span>
                            -
                            <span class="cart_summa">&#36;0.00</span>
                        </span>
                    </a>
                    <ul class="widget_area sidebar_cart sidebar">
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="hide_cart_widget_if_empty">
                                    <?php if(count(Cart::getContent())): ?>
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        <?php $__currentLoopData = Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="woocommerce-mini-cart-item mini_cart_item" style="min-height: 60px;">
                                            <a href="/product/<?php echo e($item->id); ?>">
                                                <img width="300" height="400" src="/storage/img/products/<?php echo e($item->attributes['urlimg']); ?>" alt="" loading="lazy" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"><?php echo e($item->name); ?>

                                            </a>
                                            <span class="quantity">
                                                <?php echo e($item->quantity); ?> x 
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e($item->price); ?></bdi>
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
                                    </p>
                                    <?php else: ?>
                                    <div class="widget_shopping_cart_content">No hay productos</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="luna-movil">
                        <span><i id="bdark-luna2" class="fa fa-moon"></i></span>
                    </div> 
                    <div class="sol-movil">
                        <span><i id="bdark-sol2" class="fa fa-sun"></i></span>
                    </div> 
                </div>
            </div>
            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_mobile" class="menu_main_nav">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1145">
                                <a href="/"><span>Inicio</span></a>
                            </li>

                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-442">
                                <a><span>Categorias</span>
                                </a>
                                <ul class="sub-menu">
                                <li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-505"><a><span>Instrumentos Musicales</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503"><a href="/shop/1"><span>De cuerda</span></a></li>
                                        <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a href="/shop/2"><span>De Percusion</span></a></li>
                                    </ul>
                                </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-934"><a><span>Audio e Iluminación</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-534"><a href="/shop/3"><span>Atriles y Soporte</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-468"><a href="/shop/4"><span>Audio</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-550"><a href="/shop/5"><span>Iluminación</span></a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1124"><a><span>Electr. y Componentes</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-475"><a href="/shop/6"><span>Adaptadores</span></a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1224"><a href="/shop/7"><span>Accessorios</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1218"><a href="/shop"><span>Ver todos</span></a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1127"><a href="/proximo"><span>Ofertas</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1133"><a href="/about"><span>Acerca de</span></a> 
                            </li>
                        
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-442">
                                <a><span>
                                    <?php if(Auth::check()): ?><?php echo e(Auth::user()->usuario); ?>

                                    <?php else: ?> Cuenta
                                    <?php endif; ?>
                                </span></a>
                                <ul class="sub-menu">
                                    <?php if(Auth::check()): ?>
                                    <li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-505">
                                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <a href="/cliente" class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100">
                                                <span>Ver Perfil</span>
                                            </a>
                                            <a type="submit" class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <span>Cerrar sesión</span>
                                            </a>
                                        </form>
                                    </li>
                                    <?php else: ?>
                                    <li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-505"><a href="/login"><span>Iniciar Sesión</span></a></li>
                                    <li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-505"><a href="/login/registrar"><span>Registrarse</span></a></li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div class="search_wrap search_style_ search_state_fixed search_ajax">
                        <div class="search_form_wrap">
                            <form role="search" method="post" class="search_form" action="/shop">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="search_submit icon-search-1" title="Start search"></button>
                                <input type="text" class="search_field" placeholder="Search" name="nombre" />
                            </form>
                        </div>
                        <div class="search_results widget_area scheme_original">
                            <a  class="search_results_close icon-cancel"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                </div>
                <div class="panel_bottom"></div>
            </div>
            <div class="mask"></div>
        </div>
        <!-- fin de header móvil -->
    </div>
</div>

<script>
    function abrirMenu(){
        var menu = document.getElementById("menu");
        if(menu.ariaHidden == "true"){
            menu.ariaHidden = "false";
            menu.style.display = "none";
        }else{
            menu.ariaHidden = "true";
            menu.style.display = "block";
        }
    }
</script><?php /**PATH C:\xampp\htdocs\unisound\resources\views/inc/header.blade.php ENDPATH**/ ?>