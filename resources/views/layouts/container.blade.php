<!DOCTYPE html>
<html lang="es-MX" class="scheme_original">
<head>
	<title>Unisound</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="img/cropped-favicon-100x100.png" sizes="32x32" />
	<link rel="icon" href="img/cropped-favicon-300x300.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="img/cropped-favicon-300x300.png" />
	<link rel='stylesheet' id='photoswipe-default-skin-css'  href='css/default-skin.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce-layout-css'  href='css/woocommerce-layout.css' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' id='woocommerce-general-css'  href='css/woocommerce.css' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
	    .woocommerce form .form-row .required { visibility: visible; }
	</style>
	<link rel='stylesheet' id='musicplace-font-google-fonts-style-css'  href='//fonts.googleapis.com/css?family=Hind:300,300italic,400,400italic,700,700italic|Lato:300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext' type='text/css' media='all' />
	<link rel='stylesheet' id='fontello-style-css'  href='css/fontello.css' type='text/css' media='all' />
	<link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-main-style-css'  href='css/musicplace-style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-animation-style-css'  href='css/core.animation.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-shortcodes-style-css'  href='css/theme.shortcodes.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-theme-style-css'  href='css/theme.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-plugin-woocommerce-style-css'  href='css/plugin.woocommerce.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-responsive-style-css'  href='css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' id='musicplace-responsive-megamenu-css'  href='css/responsive-megamenu.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.min.js' id='jquery-core-js'></script>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='css/rs6.css' type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='swiperslider-style-css'  href='css/swiper.css' type='text/css' media='all' />
	<script type='text/javascript' src='js/rbtools.min.js' id='tp-tools-js'></script>
	<script type='text/javascript' src='js/rs6.min.js' id='revmin-js'></script>
	<script type="text/javascript">function setREVStartSize(e){
    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,newh;
        pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
        if(e.layout==="fullscreen" || e.l==="fullscreen")
            newh = Math.max(e.mh,window.RSIH);
        else{
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
            e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

            var nl = new Array(e.rl.length),
                ix = 0,
                sl;
            e.tabw = e.tabhide>=pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
            e.tabh = e.tabhide>=pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
            var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
            newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
        document.getElementById(e.c).height = newh+"px";
        window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
    } catch(e){
        console.log("Failure at Presize of Slider:" + e)
    }
};</script>
</head>

<body>
	@include('inc.header')
	@yield('contenido')
	@include('inc.footer')
	<script type="text/template" id="tmpl-variation-template">
		<div class="woocommerce-variation-description"></div>
		<div class="woocommerce-variation-price"></div>
		<div class="woocommerce-variation-availability"></div>
	</script>
	<script type="text/template" id="tmpl-unavailable-variation-template">
		<p>Lo sentimos, este producto no está disponible. Por favor elige otra combinación.</p>
	</script>
	<script type='text/javascript' src='js/jquery.zoom.min.js' id='zoom-js'></script>
	<script type='text/javascript' src='js/jquery.flexslider-min.js' id='flexslider-js'></script>
	<script type='text/javascript' src='js/photoswipe.min.js' id='photoswipe-js'></script>
	<script type='text/javascript' id='wc-single-product-js-extra'>
		/* <![CDATA[ */
		var wc_single_product_params = {"i18n_required_rating_text":"Por favor elige una puntuaci\u00f3n","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='js/single-product.min.js' id='wc-single-product-js'></script>
	<script type='text/javascript' id='wc-cart-fragments-js-extra'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = {"ajax_url":"\/wordpress\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wordpress\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b2b5efd1ec77dc2fb845866c2c2f927d","fragment_name":"wc_fragments_b2b5efd1ec77dc2fb845866c2c2f927d","request_timeout":"5000"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='js/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
	<script type='text/javascript' src='js/superfish.js' id='superfish-js'></script>
	<script type='text/javascript' src='js/core.utils.js' id='musicplace-core-utils-script-js'></script>
	<script type='text/javascript' id='musicplace-core-init-script-js-extra'>
		/* <![CDATA[ */
		var MUSICPLACE_STORAGE = {"system_message":{"message":"","status":"","header":""},"theme_font":"Hind","theme_color":"#141618","theme_bg_color":"#ffffff","strings":{"ajax_error":"Invalid server answer","bookmark_add":"Add the bookmark","bookmark_added":"Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;","bookmark_del":"Delete this bookmark","bookmark_title":"Enter bookmark title","bookmark_exists":"Current page already exists in the bookmarks list","search_error":"Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.","email_confirm":"On the e-mail address &quot;%s&quot; we sent a confirmation email. Please, open it and click on the link.","reviews_vote":"Thanks for your vote! New average rating is:","reviews_error":"Error saving your vote! Please, try again later.","error_like":"Error saving your like! Please, try again later.","error_global":"Global error text","name_empty":"The name can&#039;t be empty","name_long":"Too long name","email_empty":"Too short (or empty) email address","email_long":"Too long email address","email_not_valid":"Invalid email address","subject_empty":"The subject can&#039;t be empty","subject_long":"Too long subject","text_empty":"The message text can&#039;t be empty","text_long":"Too long message text","send_complete":"Send message complete!","send_error":"Transmit failed!","not_agree":"Please, check &#039;I agree with Terms and Conditions&#039;","login_empty":"The Login field can&#039;t be empty","login_long":"Too long login field","login_success":"Login success! The page will be reloaded in 3 sec.","login_failed":"Login failed!","password_empty":"The password can&#039;t be empty and shorter then 4 characters","password_long":"Too long password","password_not_equal":"The passwords in both fields are not equal","registration_success":"Registration success! Please log in!","registration_failed":"Registration failed!","geocode_error":"Geocode was not successful for the following reason:","googlemap_not_avail":"Google map API not available!","editor_save_success":"Post content saved!","editor_save_error":"Error saving post data!","editor_delete_post":"You really want to delete the current post?","editor_delete_post_header":"Delete post","editor_delete_success":"Post deleted!","editor_delete_error":"Error deleting post!","editor_caption_cancel":"Cancel","editor_caption_close":"Close"},"ajax_url":"http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php","ajax_nonce":"5d6ba3821f","site_url":"http:\/\/localhost\/wordpress","site_protocol":"http","vc_edit_mode":"","accent1_color":"#141618","accent1_hover":"#E21818","slider_height":"100","user_logged_in":"","toc_menu":"float","toc_menu_home":"1","toc_menu_top":"1","menu_fixed":"1","menu_mobile":"1024","menu_hover":"fade","button_hover":"","input_hover":"default","demo_time":"0","media_elements_enabled":"1","ajax_search_enabled":"1","ajax_search_min_length":"3","ajax_search_delay":"200","css_animation":"1","menu_animation_in":"fadeInUp","menu_animation_out":"fadeOutDown","popup_engine":"magnific","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","contacts_maxlength":"1000","comments_maxlength":"1000","remember_visitors_settings":"","admin_mode":"","isotope_resize_delta":"0.3","error_message_box":null,"viewmore_busy":"","video_resize_inited":"","top_panel_height":"0"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='js/core.init.js' id='musicplace-core-init-script-js'></script>
	<script type='text/javascript' src='js/theme.init.js' id='musicplace-theme-init-script-js'></script>
	<script type='text/javascript' src='js/underscore.min.js' id='underscore-js'></script>
	<script type='text/javascript' src='js/wp-util.min.js' id='wp-util-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_variation_params = {"wc_ajax_url":"localhost\/wordpress\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Lo sentimos, no hay productos que igualen tu selecci\u00f3n. Por favor escoge una combinaci\u00f3n diferente.","i18n_make_a_selection_text":"Elige las opciones del producto antes de a\u00f1adir este producto a tu carrito.","i18n_unavailable_text":"Lo sentimos, este producto no est\u00e1 disponible. Por favor elige otra combinaci\u00f3n."};
		/* ]]> */
	</script>
	<script type='text/javascript' src='js/add-to-cart-variation.min.js' id='wc-add-to-cart-variation-js'></script>

	<script type='text/javascript' src='js/theme.shortcodes.js' id='musicplace-shortcodes-script-js'></script>
	<script type='text/javascript' src='js/esg.min.js' id='essential-grid-essential-grid-script-js'></script>
	<script type='text/javascript' src='js/swiper.js' id='swiperslider-script-js'></script>
	<script type='text/javascript' src='js/core.min.js' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='js/mouse.min.js' id='jquery-ui-mouse-js'></script>
	<script type='text/javascript' src='js/slider.min.js' id='jquery-ui-slider-js'></script>
	<script type='text/javascript' src='js/accounting.min.js' id='accounting-js'></script>
	<script type='text/javascript' id='wc-price-slider-js-extra'>
	/* <![CDATA[ */
	var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
	/* ]]> */
	</script>
	<script type='text/javascript' src='js/price-slider.min.js' id='wc-price-slider-js'></script>
</body>
</html>