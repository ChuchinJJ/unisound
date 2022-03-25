
<?php $__env->startSection('contenido'); ?>
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1 slider-horizontal">
	<!-- START Home 1 REVOLUTION SLIDER 6.3.5 -->
	<p class="rs-p-wp-fix"></p>
	<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
		<rs-module id="rev_slider_1_1" style="" data-version="6.3.5">
			<rs-slides>
				<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<rs-slide data-key="rs-<?php echo e($slider->id_slider); ?>" data-title="Slide" data-thumb="/storage/img/sliders/<?php echo e($slider->imagen); ?>" data-duration="15950" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
					<img src="/storage/img/sliders/<?php echo e($slider->imagen); ?>" title="Home <?php echo e($slider->id_slider); ?>" data-parallax="off" class="rev-slidebg" data-no-retina>			
				</rs-slide>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</rs-slides>
		</rs-module>

		<script type="text/javascript">
			setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[715,768,700,700],gw:[1170,1024,769,480],gh:[715,768,700,700],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
			var	revapi1,tpj;
			function revinit_revslider11() {
			jQuery(function() {
				tpj = jQuery;
				revapi1 = tpj("#rev_slider_1_1");
				if(revapi1==undefined || revapi1.revolution == undefined){
					revslider_showDoubleJqueryError("rev_slider_1_1");
				}else{
					revapi1.revolution({
						visibilityLevels:"1240,1024,778,480",
						gridwidth:"1170,1024,769,480",
						gridheight:"715,768,700,700",
						spinner:"spinner0",
						perspective:600,
						perspectiveType:"local",
						editorheight:"715,768,700,700",
						responsiveLevels:"1240,1024,778,480",
						progressBar:{disableProgressBar:true},
						navigation: {
							mouseScrollNavigation:false,
							wheelCallDelay:1000,
							onHoverStop:false,
							arrows: {
								enable:true,
								style:"custom",
								hide_onleave:true,
								left: {
								},
								right: {
								}
							}
						},
						parallax: {
							levels:[3,5,7,20,25,30,35,40,45,46,47,48,49,50,51,55],
							type:"mouse"
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid:true
						},
					});
				}
			});} // End of RevInitScript
			var once_revslider11 = false;
			if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
		</script>
	</rs-module-wrap>
	<!-- END REVOLUTION SLIDER -->
</section>

<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1 slider-vertical">
	<!-- START Home 1 REVOLUTION SLIDER 6.3.5 -->
	<p class="rs-p-wp-fix"></p>
	<rs-module-wrap id="rev_slider_1_2_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
		<rs-module id="rev_slider_1_2" style="" data-version="6.3.5">
			<rs-slides>
				<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<rs-slide data-key="rs-<?php echo e($slider->id_slider); ?>" data-title="Slide" data-thumb="/storage/img/sliders/<?php echo e($slider->movil); ?>" data-duration="15950" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
					<img src="/storage/img/sliders/<?php echo e($slider->movil); ?>" title="Home <?php echo e($slider->id_slider); ?>" data-parallax="off" class="rev-slidebg" data-no-retina>			
				</rs-slide>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</rs-slides>
		</rs-module>

		<script type="text/javascript">
			setREVStartSize({c: 'rev_slider_1_2',rl:[1240,1024,778,480],el:[715,768,700,700],gw:[1170,1024,769,480],gh:[715,768,700,700],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
			var	revapi2,tpj;
			function revinit_revslider12() {
			jQuery(function() {
				tpj = jQuery;
				revapi2 = tpj("#rev_slider_1_2");
				if(revapi2==undefined || revapi2.revolution == undefined){
					revslider_showDoubleJqueryError("rev_slider_1_2");
				}else{
					revapi2.revolution({
						visibilityLevels:"1240,1024,778,480",
						gridwidth:"1170,1024,769,480",
						gridheight:"715,768,700,700",
						spinner:"spinner0",
						perspective:600,
						perspectiveType:"local",
						editorheight:"715,768,700,700",
						responsiveLevels:"1240,1024,778,480",
						progressBar:{disableProgressBar:true},
						navigation: {
							mouseScrollNavigation:false,
							wheelCallDelay:1000,
							onHoverStop:false,
							arrows: {
								enable:true,
								style:"custom",
								hide_onleave:true,
								left: {
								},
								right: {
								}
							}
						},
						parallax: {
							levels:[3,5,7,20,25,30,35,40,45,46,47,48,49,50,51,55],
							type:"mouse"
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid:true
						},
					});
				}
			});} // End of RevInitScript
			var once_revslider12 = false;
			if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider12 ) { once_revslider12 = true; revinit_revslider12();}});} else {once_revslider12 = true; revinit_revslider12();}
		</script>
	</rs-module-wrap>
	<!-- END REVOLUTION SLIDER -->
</section>

<div class="page_content_wrap page_paddings_no">
	<div class="content_wrap">
		<div class="content">
			<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-450 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article">
				<section class="post_content" itemprop="articleBody">
					<div class="vc_row wpb_row vc_row-fluid column_rs">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4" style="margin-top:-3.57em;">
										<div class="column-1_4 sc_column_item sc_column_item_1 odd first">
											<div data-href="#" class="sc_intro sc_intro_position_bottom_left" data-style="1"
												style="height:253px;background: url(/img/1-3-e1469613546458.jpg);">
												<div class="sc_intro_inner  sc_intro_style_1">
													<div class="sc_intro_content">
														<h6 class="sc_intro_subtitle">Teclados & Pianos Digitales</h6>
														<h2 class="sc_intro_title">
															<span class="title">Nuevos<br />Teclados</span>
														</h2>
													</div>
												</div>
											</div>
										</div>
										<div class="column-1_4 sc_column_item sc_column_item_2 even">
											<div data-href="#" class="sc_intro"data-style="4" 
											style="height:253px;background: url(/img/2-3-e1469613586251.jpg);">
												<div class="sc_intro_inner  sc_intro_style_4">
													<div class="sc_intro_content">
														<h2 class="sc_intro_title">
															<span class="title">Musicos<br /> con estilo</span>
														</h2>
														<div class="sc_intro_descr">Comprar ahora</div>
													</div>
												</div>
											</div>
										</div>
										<div class="column-1_4 sc_column_item sc_column_item_3 odd">
											<div data-href="#" class="sc_intro"data-style="1" 
												style="height:253px;background: url(/img/3-3-e1469613668852.jpg);">
												<div class="sc_intro_inner  sc_intro_style_1">
													<div class="sc_intro_content"></div>
												</div>
											</div>
										</div>
										<div class="column-1_4 sc_column_item sc_column_item_4 even">
											<div data-href="/shop/" class="sc_intro"data-style="3" 
											style="height:253px;background: url(/img/SW_CalebMorris1.jpg);">
												<div class="sc_intro_inner  sc_intro_style_3">
													<div class="sc_intro_content">
														<h2 class="sc_intro_title"><span class="title">Mega Ventas</span></h2>
														<div class="sc_intro_descr">En todas las Marcas</div>
														<div class="sc_intro_buttons sc_item_buttons">
															<div class="sc_intro_button sc_item_button">
																<a href="/shop/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">
																	<span class="text">Comprar ahora</span><span class="icon icon-music-note-black-shape"></span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_empty_space" style="height: 4.8em">
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="sc_section sc_section_block">
										<div class="sc_section_inner">
											<h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
												<span class="title">Mas Vendidos...</span>
											</h2>

											<div class="sc_section_content_wrap">
												<style type="text/css">
												a.eg-henryharrison-element-1,a
												.eg-henryharrison-element-2{
													-webkit-transition:all .4s linear;   
													-moz-transition:all .4s linear;   
													-o-transition:all .4s linear;   
													-ms-transition:all .4s linear;   
													transition:all .4s linear}
													.eg-jimmy-carter-element-11 
													i:before{margin-left:0px; margin-right:0px}
												.eg-harding-element-17{letter-spacing:1px}
												.eg-harding-wrapper 
												.esg-entry-media{
													overflow:hidden; 
													box-sizing:border-box;   
													-webkit-box-sizing:border-box;   
													-moz-box-sizing:border-box;   
													padding:30px 30px 0px 30px}
													.eg-harding-wrapper 
													.esg-media-poster{
														overflow:hidden; border-radius:50%;   
														-webkit-border-radius:50%;   
														-moz-border-radius:50%}
														.eg-ulysses-s-grant-wrapper 
														.esg-entry-media{
															overflow:hidden; 
															box-sizing:border-box;   
															-webkit-box-sizing:border-box;   
															-moz-box-sizing:border-box;   
															padding:30px 30px 0px 30px}
												.eg-ulysses-s-grant-wrapper 
												.esg-media-poster{overflow:hidden; border-radius:50%;   
												-webkit-border-radius:50%;   
												-moz-border-radius:50%}
												.eg-richard-nixon-wrapper 
												.esg-entry-media{overflow:hidden; box-sizing:border-box;   
												-webkit-box-sizing:border-box;   
												-moz-box-sizing:border-box;   padding:30px 30px 0px 30px}
												.eg-richard-nixon-wrapper 
												.esg-media-poster{overflow:hidden; 
												border-radius:50%;   
												-webkit-border-radius:50%;   
												-moz-border-radius:50%}
												.eg-herbert-hoover-wrapper 
												.esg-media-poster{
													filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'>
													<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
													</filter>
													</svg>
													#grayscale");
													filter:gray;   
													-webkit-filter:grayscale(100%)}
												.eg-herbert-hoover-wrapper:hover 
												.esg-media-poster{
												filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
												<filter id='grayscale'>
												<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
												</filter>
												</svg>#grayscale");  
												-webkit-filter:grayscale(0%)}
												.eg-lyndon-johnson-wrapper 
												.esg-media-poster{
													filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
													<filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-media-poster{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;   transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}.eg-harding-element-17{letter-spacing:1px}.eg-harding-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-harding-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-ulysses-s-grant-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-richard-nixon-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-herbert-hoover-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-herbert-hoover-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-lyndon-johnson-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-media-poster{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-media-poster,.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-media-poster,.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}.esg-content.eg-twitterstream-element-33-a{display:inline-block}.eg-twitterstream-element-35{word-break:break-all}.esg-overlay.eg-twitterstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.esg-content.eg-facebookstream-element-33-a{display:inline-block}.eg-facebookstream-element-0{word-break:break-all}.esg-overlay.eg-flickrstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;   transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}.eg-harding-element-17{letter-spacing:1px}.eg-harding-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-harding-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-ulysses-s-grant-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-richard-nixon-wrapper .esg-media-poster{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-herbert-hoover-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-herbert-hoover-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-lyndon-johnson-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-media-poster{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-media-poster,.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-media-poster,.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}.esg-content.eg-twitterstream-element-33-a{display:inline-block}.eg-twitterstream-element-35{word-break:break-all}.esg-overlay.eg-twitterstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.esg-content.eg-facebookstream-element-33-a{display:inline-block}.eg-facebookstream-element-0{word-break:break-all}.esg-overlay.eg-flickrstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}</style>
												
												<!-- CACHE CREATED FOR: 2 -->
												<style type="text/css">.minimal-light .navigationbuttons,.minimal-light .esg-pagination,.minimal-light .esg-filters{text-align:center}.minimal-light .esg-filter-wrapper.dropdownstyle >.esg-selected-filterbutton,.minimal-light input.eg-search-input,.minimal-light .esg-filterbutton,.minimal-light .esg-navigationbutton,.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton a,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit{color:#999; margin-right:5px; cursor:pointer; padding:0px 16px; border:1px solid #e5e5e5; line-height:38px; border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px; white-space:nowrap; min-height:38px; vertical-align:middle}.minimal-light input.eg-search-input::placeholder{line-height:38px; vertical-align:middle}.minimal-light .esg-navigationbutton *{color:#999}.minimal-light .esg-navigationbutton{padding:0px 16px}.minimal-light .esg-pagination-button:last-child{margin-right:0}.minimal-light .esg-left,.minimal-light .esg-right{padding:0px 11px}.minimal-light .esg-sortbutton-wrapper,.minimal-light .esg-cartbutton-wrapper{display:inline-block}.minimal-light .esg-sortbutton-order,.minimal-light .esg-cartbutton-order{display:inline-block; vertical-align:top; border:1px solid #e5e5e5; width:40px; line-height:38px; border-radius:0px 5px 5px 0px; font-size:12px; font-weight:700; color:#999; cursor:pointer; background:#fff}.minimal-light .esg-cartbutton{color:#333; cursor:default !important}.minimal-light .esg-cartbutton .esgicon-basket{color:#333; font-size:15px; line-height:15px; margin-right:10px}.minimal-light .esg-cartbutton-wrapper{cursor:default !important}.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-right:none; border-radius:5px 0px 0px 5px}.minimal-light input.eg-search-input.hovered,.minimal-light input.eg-search-input:focus,.minimal-light .esg-navigationbutton.hovered,.minimal-light .esg-filterbutton.hovered,.minimal-light .esg-sortbutton.hovered,.minimal-light .esg-sortbutton-order.hovered,.minimal-light .esg-cartbutton.hovered a,.minimal-light .esg-filter-wrapper.dropdownstyle >.esg-selected-filterbutton.hovered,.minimal-light .esg-filterbutton.selected,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean.hovered,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit.hovered{background-color:#fff; border-color:#bbb; color:#333; box-shadow:0px 3px 5px 0px rgba(0,0,0,0.13)}.minimal-light .esg-navigationbutton.hovered *{color:#333}.minimal-light .esg-sortbutton-order.hovered .tp-desc{border-color:#bbb; color:#333; box-shadow:0px -3px 5px 0px rgba(0,0,0,0.13) !important}.minimal-light .esg-filter-checked{color:#cbcbcb; background:#cbcbcb; margin-left:10px; font-size:9px; font-weight:300; line-height:9px; vertical-align:middle}.minimal-light .esg-filter-wrapper.dropdownstyle .esg-filter-checked{margin-left:-22px; margin-right:10px}.minimal-light .esg-filterbutton.selected .esg-filter-checked,.minimal-light .esg-filterbutton.hovered .esg-filter-checked{color:#fff; background:#000}.minimal-light .esg-filter-wrapper.eg-search-wrapper{white-space:nowrap}.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit{width:40px; padding:0px; margin-left:5px; margin-right:0px}.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-input{width:auto}.minimal-light .esg-dropdown-wrapper{transform:translateZ(10px) translateX(-50%); left:50%; background:rgba(255,255,255,0.95); border-radius:5px; border:1px solid #e5e5e5}.minimal-light .esg-dropdown-wrapper .esg-filterbutton{position:relative; border:none; box-shadow:none; text-align:left; color:#999; background:transparent; line-height:25px; min-height:25px}.minimal-light .esg-dropdown-wrapper .esg-filterbutton.hovered,.minimal-light .esg-dropdown-wrapper .esg-filterbutton.selected{color:#333}.minimal-light .esg-selected-filterbutton .eg-icon-down-open{margin-right:-10px; font-size:12px}.minimal-light .esg-selected-filterbutton.hovered .eg-icon-down-open{color:#333}</style>
												<style type="text/css">.eg-jason-musicplace-element-0{font-size:14px !important; line-height:18px !important; color:#1a1c1f !important; font-weight:500 !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; z-index:2 !important; display:block; font-family:Hind !important; text-transform:capitalize !important}.eg-jason-musicplace-element-28{font-size:10px !important; line-height:36px !important; color:#ffffff !important; font-weight:700 !important; padding:0px 10px 0px 10px !important; border-radius:4px 4px 4px 4px !important; background:#e21818 !important; z-index:2 !important; display:block; font-family:Hind !important; text-transform:uppercase !important}.eg-jason-musicplace-element-32{font-size:14px !important; line-height:36px !important; color:#ffffff !important; font-weight:400 !important; padding:0px 8px 0px 8px !important; border-radius:4px 4px 4px 4px !important; background:#e21818 !important; z-index:2 !important; display:block; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-jason-musicplace-element-30{font-size:13px !important; line-height:22px !important; color:#000000 !important; font-weight:700 !important; display:inline-block !important; float:left !important; clear:both !important; margin:0px 0px 0px 0px !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; position:relative !important; z-index:2 !important; font-family:"Open Sans" !important; text-transform:uppercase !important}.eg-jason-musicplace-element-25{font-size:14px; line-height:22px; color:#e21818; font-weight:500; display:inline-block; float:right; clear:none; margin:0px 0px 0px 0px ; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:transparent; position:relative; z-index:2 !important; font-family:Hind}</style>
												<style type="text/css">.eg-jason-musicplace-element-0:hover{font-size:14px !important; line-height:18px !important; color:#e21818 !important; font-weight:500 !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; font-family:Hind !important; text-transform:capitalize !important}.eg-jason-musicplace-element-28:hover{font-size:10px !important; line-height:36px !important; color:#ffffff !important; font-weight:700 !important; border-radius:4px 4px 4px 4px !important; background:#1a1c1f !important; font-family:Hind !important; text-transform:uppercase !important}.eg-jason-musicplace-element-32:hover{font-size:14px !important; line-height:36px !important; color:#ffffff !important; font-weight:400 !important; border-radius:4px 4px 4px 4px !important; background:#1a1c1f !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
												<style type="text/css">.eg-jason-musicplace-element-0-a{display:block !important; text-align:left !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
												<style type="text/css">.eg-jason-musicplace-element-32-a{display:inline-block !important; float:right !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
												<style type="text/css">.eg-jason-musicplace-element-28-a{display:inline-block !important; float:left !important; clear:both !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
												<style type="text/css">.eg-jason-musicplace-container{background:rgba(255,255,255,0.20)}</style>
												<style type="text/css">.eg-jason-musicplace-content{background:transparent; padding:17px 0px 30px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:#e5e5e5; border-style:solid; text-align:center}</style>
												<style type="text/css">.esg-grid .mainul li.eg-jason-musicplace-wrapper{background:transparent; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:#e5e5e5; border-style:solid; overflow:hidden;-webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}</style>
												<style type="text/css">.esg-grid .mainul li.eg-jason-musicplace-wrapper .esg-media-poster{background-size:cover; background-position:center center; background-repeat:no-repeat}</style>
												<style type="text/css"></style>

												<!-- THE ESSENTIAL GRID 3.0.11 POST -->

												<article class="myportfolio-container minimal-light source_type_post" id="esg-grid-2-1-wrap">
													<div id="esg-grid-2-1" class="esg-grid" style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; display:none">
														<article class="esg-filters esg-singlefilters" style="margin-bottom: 40px; text-align: center; ">
															<div class="esg-navigationbutton esg-left  esg-fgc-2" style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
																<i class="eg-icon-left-open"></i>
															</div>
															<!-- THE FILTER BUTTONS -->
															<div class="esg-filter-wrapper  esg-fgc-2" style="margin-left: 2.5px; margin-right: 2.5px;">
																<div class="esg-mobile-filter-button">
																	<span>Filtrar Categorias</span>
																	<i class="eg-icon-down-open"></i>
																</div>
																<div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">
																	<span>Filtrar - todos</span>
																</div>
																<div class="esg-filterbutton" data-fid="37" data-filter="filter-accessories">
																	<span>Accessorios</span>
																	<span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
																</div>
																<div class="esg-filterbutton" data-fid="38" data-filter="filter-drum-kit">
																	<span>Baterias &amp; Percusión</span>
																	<span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
																</div>
																<div class="eg-clearfix"></div>
															</div>
															<div class="esg-sortbutton-wrapper  esg-fgc-2" style="margin-left: 2.5px; margin-right: 2.5px;">
																<div class="esg-sortbutton">
																	<span>Ordenar por </span>
																	<span class="sortby_data"></span>
																	<select class="esg-sorting-select">
																		<option value="title" >Titulo</option>
																		<option value="date"  selected='selected'>Fecha</option>
																	</select>
																</div>
																<div class="esg-sortbutton-order eg-icon-down-open tp-asc"></div>
															</div>
															<div class="esg-navigationbutton esg-right  esg-fgc-2" 
																style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
																<i class="eg-icon-right-open"></i>
															</div>

														</article>

														<div class="esg-clear-no-height"></div>

														<ul>
															<li id="eg-2-post-id-272" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-band-orchestra filter-orchestral-strings filter-upright-basses filter-concept filter-creative filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-272" data-date="1469195972" data-title="handcrafte">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/1.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-272 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="272" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-272 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-272 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-272 esgbox" data-thumb="/img/1.jpg" href="/img/1.jpg" data-width="987" data-height="1280">
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-272 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-272" 
																					href="/proximo" target="_self">
																					Handcrafted Wood Acoustic Violin
																				</a>
																			</div>
																			<div class="esg-content eg-post-272 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
																						<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span>
																					</div>
																			</div>
																		</div>
																		<div class="esg-content eg-post-272 eg-jason-musicplace-element-25">
																			<span class="woocommerce-Price-amount amount">
																				<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>650.75</bdi>
																			</span> 
																			&ndash; 
																			<span class="woocommerce-Price-amount amount"><bdi>
																				<span class="woocommerce-Price-currencySymbol">&#36;</span>700.75
																			</bdi></span>
																		</div>
																	</div>   
																</div>
															</li>

															<li id="eg-2-post-id-273" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-instruments filter-keyboard filter-mouthpieces filter-upright-basses filter-acoustic-kits filter-concept filter-creative filter-black filter-white eg-jason-musicplace-wrapper eg-post-id-273" data-date="1469198048" data-title="plastic-tr">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/3-e1470062679810.jpg" data-no-lazy="1" alt="" width="759" height="987">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																		</div>
																		<div class="esg-bottom eg-post-273 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a href="/proximo" rel="nofollow" data-product_id="273" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-273 button add_to_cart_button  product_type_variable">
																				Seleccionar opciones
																			</a>
																		</div>
																		<div class="esg-bottom eg-post-273 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a class="eg-jason-musicplace-element-32 eg-post-273 esgbox" data-thumb="/img/3-e1470062679810.jpg" href="/img/3-e1470062679810.jpg" data-width="759"  data-height="987" ><i class="eg-icon-resize-full-alt"></i>
																			</a>
																		</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																		<div class="esg-content eg-post-273 eg-jason-musicplace-element-0-a">
																			<a class="eg-jason-musicplace-element-0 eg-post-273" href="/proximo" target="_self">
																				Plastic Trumpet, White
																			</a>
																		</div>
																		<div class="esg-content eg-post-273 eg-jason-musicplace-element-30">
																			<div class="esg-starring">
																				<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																					<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
																				</div>
																			</div>
																		</div>
																		<div class="esg-content eg-post-273 eg-jason-musicplace-element-25">
																			<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>456.25</bdi></span>
																		</div>
																	</div>
																</div>
															</li>

															<li id="eg-2-post-id-274" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-company filter-electric-guitars filter-sale filter-black filter-red filter-white eg-jason-musicplace-wrapper eg-post-id-274" data-date="1469198072" data-title="gibson-201">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/f.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																				<div class="esg-bottom eg-post-274 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="274" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-274 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-274 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-274 esgbox" data-thumb="/img/f.jpg" href="/img/f.jpg" data-width="987"  data-height="1280" >
																						<i class="eg-icon-resize-full-alt"></i>
																					</a>
																				</div>
																		</div>

																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-274 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-274" href="/proximo" target="_self">
																					Gibson 2016 T Les Paul Studio 50's Tribute
																				</a>
																			</div>
																			<div class="esg-content eg-post-274 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
																						<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-274 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>899.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>950.99</bdi>
																				</span>
																			</div>
																		</div>
																</div>
															</li>

															<li id="eg-2-post-id-275" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-rated-4 filter-accessories filter-band-orchestra filter-drum-kit filter-keyboard filter-upright-basses filter-concept filter-creative filter-brown filter-white eg-jason-musicplace-wrapper eg-post-id-275" data-date="1469198098" data-title="meinl-cymb">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/2.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-275 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="275" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-275 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																			<div class="esg-bottom eg-post-275 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-275 esgbox" data-thumb="/img/2.jpg" href="/img/2.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>

																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-275 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-275" href="/proximo" target="_self">
																					Meinl Cymbals Arena Marching Cymbals Pair
																				</a>
																			</div>
																			<div class="esg-content eg-post-275 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																						<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
																					</div>
																				</div>
																			</div>

																			<div class="esg-content eg-post-275 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>369.99</bdi>
																				</span>
																			</div>
																		</div>
																</div>
															</li>

															<li id="eg-2-post-id-276" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-audio-workstations filter-bags-and-cases filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-keyboard filter-midi-interfaces filter-turntables filter-company filter-sale filter-blue filter-red eg-jason-musicplace-wrapper eg-post-id-276" data-date="1469198119" data-title="crosley-cr">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/7_4.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-276 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="276" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-276 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-276 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-276 esgbox" data-thumb="/img/7_4.jpg" href="/img/7_4.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>

																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-276 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-276" href="/proximo" target="_self">
																					Crosley Cruiser Portable 3-Speed Turntable
																				</a>
																			</div>
																			<div class="esg-content eg-post-276 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>449.99</bdi>
																				</span>
																			</div>
																		</div>
																	</div>

															</li>

															<li id="eg-2-post-id-277" data-skin="jason-musicplace" class="filterall filter-variable filter-accessories filter-accessories-dj-karaoke filter-dj-karaoke filter-headphones filter-mixers filter-company filter-sale filter-black filter-blue filter-white eg-jason-musicplace-wrapper eg-post-id-277" data-date="1469198147" data-title="soyuz-tube">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/4.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-277 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="277" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-277 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-277 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-277 esgbox" data-thumb="/img/4.jpg" href="/img/4.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-277 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-277" href="/proximo" target="_self">
																					Soyuz Tube Condenser Microphone
																				</a>
																			</div>
																			<div class="esg-content eg-post-277 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>848.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>948.99</bdi>
																				</span>
																			</div>
																		</div>
																</div>

															</li>

															<li id="eg-2-post-id-278" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-concept filter-creative filter-popular filter-black filter-brown eg-jason-musicplace-wrapper eg-post-id-278" data-date="1469198169" data-title="gibson-cus">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/3_4.jpg" data-no-lazy="1" alt="" width="987" height="1280"></div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																			<div class="esg-bottom eg-post-278 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="278" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-278 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-278 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-278 esgbox" data-thumb="/img/3_4.jpg" href="/img/3_4.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																	</div>
																	<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-278 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-278" href="/proximo" target="_self">Gibson Custom L5 Premier Acoustic Guitar</a></div>
																			<div class="esg-content eg-post-278 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																						<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-278 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,229.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,329.99</bdi>
																				</span>
																			</div>
																	</div>
																</div>

															</li>

															<li id="eg-2-post-id-279" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-rated-5 filter-accessories filter-accessories-dj-karaoke filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-instruments filter-keyboard filter-upright-basses filter-concept filter-creative filter-drums filter-music filter-black filter-white eg-jason-musicplace-wrapper eg-post-id-279" data-date="1469198200" data-title="tama-s-l-p">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/1-1.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-279 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="279" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-279 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-279 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-279 esgbox" data-thumb="/img/1-1.jpg" href="/img/1-1.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-279 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-279" href="/proximo" target="_self">
																					Tama S.L.P. Big Black Steel Snare Drum</a></div>
																			<div class="esg-content eg-post-279 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
																						<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-279 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</bdi>
																				</span>
																			</div>
																		</div>
																</div>
															</li>

															<li id="eg-2-post-id-361" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-accessories filter-accessories-dj-karaoke filter-dj-karaoke filter-mixers filter-concept filter-creative filter-event filter-black filter-red filter-white eg-jason-musicplace-wrapper eg-post-id-361" data-date="1469606727" data-title="mxx-v22r-l">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/4_1.jpg" data-no-lazy="1" alt="" width="987" height="1280"></div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																			<div class="esg-bottom eg-post-361 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo/" rel="nofollow" data-product_id="361" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-361 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																			<div class="esg-bottom eg-post-361 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-361 esgbox" data-thumb="/img/4_1.jpg" href="/img/4_1.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-361" href="/proximo/" target="_self">
																					MXX V22R Large  Capsule Condenser Microphone
																				</a>
																			</div>
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																						<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span>
																			</div>
																		</div>
																</div>

															</li>

															<li id="eg-2-post-id-362" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-bags-and-cases filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-concept filter-creative filter-lifestyle filter-black filter-brown eg-jason-musicplace-wrapper eg-post-id-362" data-date="1469606832" data-title="custom-zon">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/3_2.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-362 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="362" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-362 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																			<div class="esg-bottom eg-post-362 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-362 esgbox" data-thumb="/img/3_2.jpg" href="/img/3_2.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-362 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-362" href="/proximo" target="_self">
																					Custom Zone 6-String Full-Size Electric Guitar
																				</a>
																			</div>
																			<div class="esg-content eg-post-362 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 4.50 de 5">
																						<span style="width:90%">Valorado en <strong class="rating">4.50</strong> de 5</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-362 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,329.99</bdi>
																				</span>
																			</div>
																		</div>
																</div>

															</li>
															<li id="eg-2-post-id-671" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-upright-basses filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-671" data-date="1470058637" data-title="handcrafte">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/j.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-671 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="671" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-671 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-671 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-671 esgbox" data-thumb="/img/j.jpg" href="/img/j.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-671 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-671" href="/proximo" target="_self">Handcrafted Blue Acoustic Violin</a></div>
																			<div class="esg-content eg-post-671 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>850.75</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>950.75</bdi>
																				</span>
																			</div>
																		</div>
																</div>
															</li>

															<li id="eg-2-post-id-1013" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1013" data-date="1470748170" data-title="new-trumpe">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/6.jpg" data-no-lazy="1" alt="" width="656" height="850"></div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-1013 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1013" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1013 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1013 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1013 esgbox" data-thumb="/img/6.jpg" href="/img/6.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1013 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1013" href="/proximo" target="_self">
																					New Trumpet Gig Bag Case with Nylon
																				</a>
																			</div>
																			<div class="esg-content eg-post-1013 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>78.00</bdi>
																				</span>
																			</div>
																		</div>   
																</div>

															</li>

															<li id="eg-2-post-id-1017" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1017" data-date="1470749888" data-title="gator-trom">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/5.jpg" data-no-lazy="1" alt="" width="656" height="850"></div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-1017 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1017" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1017 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1017 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1017 esgbox" 
																					data-thumb="/img/5.jpg" href="/img/5.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1017 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1017" href="/proximo" target="_self">
																					Gator Trombone Case
																				</a>
																			</div>
																			<div class="esg-content eg-post-1017 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>67.00</bdi>
																				</span>
																			</div>
																		</div>   
																</div>

															</li>
															<li id="eg-2-post-id-1021" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1021" data-date="1470749895" data-title="protec-del">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/7.jpg" data-no-lazy="1" alt="" width="656" height="850">
																	</div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">

																			</div>
																			<div class="esg-bottom eg-post-1021 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1021" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1021 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1021 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1021 esgbox" 
																					data-thumb="/img/7.jpg" href="/img/7.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																	</div>

																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1021 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1021" href="/proximo" target="_self">
																					Protec Deluxe Trumpet Bag Instrument Case
																				</a>
																			</div>
																			<div class="esg-content eg-post-1021 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>47.50</bdi>
																				</span>
																			</div>
																		</div>   
																</div>

															</li>

															<li id="eg-2-post-id-1045" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1045" data-date="1470749928" data-title="tromba-pro">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/1-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																		<div class="esg-bottom eg-post-1045 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a href="/proximo" rel="nofollow" data-product_id="1045" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1045 button add_to_cart_button  product_type_variable">
																				Seleccionar opciones
																			</a>
																		</div>
																		<div class="esg-bottom eg-post-1045 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a class="eg-jason-musicplace-element-32 eg-post-1045 esgbox" 
																				data-thumb="/img/1-1.jpg" href="/img/1-1.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																			</a>
																		</div>
																	</div>
																	<div class="esg-entry-content eg-jason-musicplace-content">
																		<div class="esg-content eg-post-1045 eg-jason-musicplace-element-0-a">
																			<a class="eg-jason-musicplace-element-0 eg-post-1045" href="/proximo" target="_self">
																				Tromba Pro Professional Plastic Bb
																			</a>
																		</div>
																		<div class="esg-content eg-post-1045 eg-jason-musicplace-element-25">
																			<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi>
																			</span>
																		</div>
																	</div>
																</div>
															</li>

															<li id="eg-2-post-id-1049" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1049" data-date="1470749933" data-title="micromall">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/2-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																		<div class="esg-bottom eg-post-1049 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a href="/proximo" rel="nofollow" data-product_id="1049" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1049 button add_to_cart_button  product_type_variable">
																				Seleccionar opciones
																			</a>
																		</div>
																		<div class="esg-bottom eg-post-1049 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a class="eg-jason-musicplace-element-32 eg-post-1049 esgbox" 
																				data-thumb="/img/2-1.jpg" href="/img/2-1.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																			</a>
																		</div>
																	</div>
																	<div class="esg-entry-content eg-jason-musicplace-content">
																		<div class="esg-content eg-post-1049 eg-jason-musicplace-element-0-a">
																			<a class="eg-jason-musicplace-element-0 eg-post-1049" href="/proximo" target="_self">
																				MicroMall(TM) Paint Gold Drop B
																			</a>
																		</div>
																		<div class="esg-content eg-post-1049 eg-jason-musicplace-element-25">
																			<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>150.75</bdi>
																			</span>
																		</div>
																	</div>
																</div>
															</li>

															<li id="eg-2-post-id-1053" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1053" data-date="1470750862" data-title="barrington">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/horn.jpg" data-no-lazy="1" alt="" width="656" height="850"></div>
																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-1053 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1053" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1053 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones</a></div>
																			<div class="esg-bottom eg-post-1053 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1053 esgbox" 
																					data-thumb="/img/horn.jpg" href="/img/horn.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																	</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1053 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1053" href="/proximo" target="_self">
																					Barrington BR FR401 Double French Horn
																				</a>
																			</div>
																			<div class="esg-content eg-post-1053 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>280.00</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi>
																				</span>
																			</div>
																		</div>   
																</div>

															</li>
															<li id="eg-2-post-id-1057" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1057" data-date="1470750870" data-title="hercules-d">
																<div class="esg-media-cover-wrapper">
																	<div class="esg-entry-media">
																		<img src="/img/4-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																	</div>
																	<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																		<div class="esg-bottom eg-post-1057 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a href="/proximo" rel="nofollow" data-product_id="1057" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1057 button add_to_cart_button  product_type_variable">
																				Seleccionar opciones
																			</a>
																		</div>
																		<div class="esg-bottom eg-post-1057 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a class="eg-jason-musicplace-element-32 eg-post-1057 esgbox" 
																				data-thumb="/img/4-1.jpg" href="/img/4-1.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i>
																			</a>
																		</div>
																</div>
																	<div class="esg-entry-content eg-jason-musicplace-content">
																		<div class="esg-content eg-post-1057 eg-jason-musicplace-element-0-a">
																			<a class="eg-jason-musicplace-element-0 eg-post-1057" href="/proximo" target="_self">
																				Hercules DS513BB 2 Trumpet
																			</a>
																		</div>
																		<div class="esg-content eg-post-1057 eg-jason-musicplace-element-25">
																			<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi>
																			</span>
																		</div>
																	</div>   
																</div>
															</li>
														</ul>
													</div>
												</article>

												<div class="clear"></div>

												<script type="text/javascript">
												var essapi_2_1;
												function esginit_2_1() {
												jQuery(document).ready(function() {
													essapi_2_1 = jQuery("#esg-grid-2-1").tpessential({
														gridID:2,
														layout:"masonry",
														forceFullWidth:"off",
														lazyLoad:"off",
														row:1,
														apiName: "essapi_2_1",
														loadMoreAjaxToken:"8ddc976d55",
														loadMoreAjaxUrl:"http://localhost/wordpress/wp-admin/admin-ajax.php",
														loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
														ajaxContentTarget:"ess-grid-ajax-container-",
														ajaxScrollToOffset:"0",
														ajaxCloseButton:"off",
														ajaxContentSliding:"on",
														ajaxScrollToOnLoad:"on",
														ajaxCallbackArgument:"off",
														ajaxNavButton:"off",
														ajaxCloseType:"type1",
														ajaxCloseInner:"false",
														ajaxCloseStyle:"light",
														ajaxClosePosition:"tr",
														space:30,
														pageAnimation:"fade",
														videoPlaybackInGrid: "on",
														videoPlaybackOnHover: "off",
														videoInlineMute: "on",
														videoInlineControls: "off",
														keepLayersInline: "off",
														startAnimation: "none",
														startAnimationSpeed: 1000,
														startAnimationDelay: 100,
														startAnimationType: "item",
														animationType: "item",
														paginationScrollToTop:"off",
														paginationAutoplay:"off",
														spinner:"spinner0",
														minVisibleItems:3,
														lightBoxMode:"single",
														lightboxHash:"group",
														lightboxPostMinWid:"75%",
														lightboxPostMaxWid:"75%",
														lightboxSpinner:"off",
														lightBoxFeaturedImg:"off",
														lightBoxPostTitle:"off",
														lightBoxPostTitleTag:"h2",
														lightboxMargin : "0|0|0|0",
														lbContentPadding : "0|0|0|0",
														lbContentOverflow : "auto",
														animSpeed:1000,
														delayBasic:1,
														mainhoverdelay:1,
														filterType:"single",
														showDropFilter:"hover",
														filterGroupClass:"esg-fgc-2",
														filterNoMatch:"No Items for the Selected Filter",
														filterDeepLink:"off",
														hideMarkups: "on",
														inViewport: true,
														viewportBuffer: 20,
														youtubeNoCookie:"false",
														convertFilterMobile:false,
														paginationSwipe: "off",
														paginationDragVer: "on",
														pageSwipeThrottle: 30,
														googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
														hideBlankItemsAt: "1",
														responsiveEntries: [
																		{ width:1400,amount:4,mmheight:0},
																		{ width:1170,amount:4,mmheight:0},
																		{ width:1024,amount:4,mmheight:0},
																		{ width:960,amount:3,mmheight:0},
																		{ width:778,amount:3,mmheight:0},
																		{ width:600,amount:2,mmheight:0},
																		{ width:300,amount:1,mmheight:0}
																		]
													});

													var arrows = true,
														lightboxOptions = {
														margin : [0,0,0,0],
														buttons : ["close"],
														infobar : true,
														loop : true,
														slideShow : {"autoStart": false, "speed": 3000},
														videoAutoPlay : true,
														animationEffect : "fade",
														animationDuration : 500,
														beforeShow: function(a, c) {
														if(!arrows) {
															jQuery("body").addClass("esgbox-hidearrows");
														}
															var i = 0,
																multiple = false;
															a = a.slides;
															for(var b in a) {
																i++;
																if(i > 1) {
																	multiple = true;
																	break;
																}
															}
															if(!multiple) jQuery("body").addClass("esgbox-single");
															if(c.type === "image") jQuery(".esgbox-button--zoom").show();
														},
														beforeLoad: function(a, b) {
															jQuery("body").removeClass("esg-four-by-three");
															if(b.opts.$orig.data("ratio") === "4:3") jQuery("body").addClass("esg-four-by-three");
														},
														afterLoad: function() {jQuery(window).trigger("resize.esglb");},
														afterClose : function() {jQuery("body").removeClass("esgbox-hidearrows esgbox-single");},
														transitionEffect : "fade",
														transitionDuration : 500,
														hash : "group",
														arrows : true,
														wheel : false,
													};

													jQuery("#esg-grid-2-1").data("lightboxsettings", lightboxOptions);


												});
												}

													// End of EsgInitScript
													
														var once_2_1 = false;
														if (document.readyState === "loading") document.addEventListener('readystatechange',function() { 
															if((document.readyState === "interactive" || document.readyState === "complete") && !once_2_1 )	
																{ once_2_1 = true; esginit_2_1();}}); 
																
																else {once_2_1 = true;  esginit_2_1();}
												</script>

											</div>
										</div>
									</div>
									<div class="vc_empty_space"   style="height: 4em">
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div id="sc_clients_780989574_wrap" class="sc_clients_wrap scheme_dark">
										<div id="sc_clients_780989574" class="sc_clients sc_clients_style_clients-1 " style="margin-bottom:30px;width:100%;">
											<div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="5220" data-slides-per-view="6" data-slides-space="30" data-slides-min-width="140">
												<div class="slides swiper-wrapper">
													<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
														<div id="sc_clients_780989574_1" class="sc_clients_item sc_clients_item_1 odd first">
															<div class="sc_client_image">
																<img class="wp-post-image" width="180" height="72" alt="Client 2" src="/img/1-1.png"></div>
															</div>
														</div>
														<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
															<div id="sc_clients_780989574_2" class="sc_clients_item sc_clients_item_2 even">
																<div class="sc_client_image">
																	<img class="wp-post-image" width="180" height="72" alt="Client 3" src="/img/3-1.png">
																</div>
															</div>
														</div>
														<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
															<div id="sc_clients_780989574_3" class="sc_clients_item sc_clients_item_3 odd">
																<div class="sc_client_image">
																	<img class="wp-post-image" width="180" height="72" alt="Client 4" src="/img/5-1.png">
																</div>	
															</div>
														</div>
														<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
															<div id="sc_clients_780989574_4" class="sc_clients_item sc_clients_item_4 even">
																<div class="sc_client_image">
																	<img class="wp-post-image" width="180" height="72" alt="Client 5" src="/img/2-1.png">
																</div>
															</div>
														</div>
														<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
															<div id="sc_clients_780989574_5" class="sc_clients_item sc_clients_item_5 odd">
																<div class="sc_client_image">
																	<img class="wp-post-image" width="180" height="72" alt="Client 6" src="/img/4-1.png">
																</div>
															</div>
														</div>
														<div class="swiper-slide" data-style="width:100%;" style="width:100%;">			
															<div id="sc_clients_780989574_6" class="sc_clients_item sc_clients_item_6 even">
																<div class="sc_client_image">
																	<img class="wp-post-image" width="180" height="72" alt="Client 7" src="/img/6-1.png">
																</div>
															</div>
														</div>
													</div>
													<div class="sc_slider_controls_wrap">
														<a class="sc_slider_prev" href="#"></a>
														<a class="sc_slider_next" href="#"></a>
													</div>
													<div class="sc_slider_pagination_wrap"></div>
												</div>
											</div><!-- /.sc_clients -->
										</div><!-- /.sc_clients_wrap -->
						
										<div class="vc_empty_space"   style="height: 4.8em">
											<span class="vc_empty_space_inner"></span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="sc_section sc_section_block">
											<div class="sc_section_inner">
												<h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
													<span class="title">Articulos Destacados</span>
												</h2>
												<div class="sc_section_content_wrap">
													<style type="text/css">
														a.eg-henryharrison-element-1,a.eg-henryharrison-element-2
														{-webkit-transition:all .4s linear;   
														-moz-transition:all .4s linear;   
														-o-transition:all .4s linear;   
														-ms-transition:all .4s linear;   
														transition:all .4s linear}
														.eg-jimmy-carter-element-11
														i:before{margin-left:0px;
														margin-right:0px}
														.eg-harding-element-17
														{letter-spacing:1px}
														.eg-harding-wrapper 
														.esg-entry-media
														{overflow:hidden; box-sizing:border-box;
														-webkit-box-sizing:border-box;  
														-moz-box-sizing:border-box;   
														padding:30px 30px 0px 30px}
														.eg-harding-wrapper 
														.esg-media-poster
														{overflow:hidden; 
														border-radius:50%;   
														-webkit-border-radius:50%;   
														-moz-border-radius:50%}
														.eg-ulysses-s-grant-wrapper 
														.esg-entry-media
														{overflow:hidden; 
														box-sizing:border-box;   
														-webkit-box-sizing:border-box;   
														-moz-box-sizing:border-box;   
														padding:30px 30px 0px 30px}
														.eg-ulysses-s-grant-wrapper 
														.esg-media-poster
														{overflow:hidden; 
														border-radius:50%;   
														-webkit-border-radius:50%;   
														-moz-border-radius:50%}
														.eg-richard-nixon-wrapper 
														.esg-entry-media{overflow:hidden; 
														box-sizing:border-box;   
														-webkit-box-sizing:border-box;   
														-moz-box-sizing:border-box;   
														padding:30px 30px 0px 30px}
														.eg-richard-nixon-wrapper 
														.esg-media-poster{overflow:hidden; border-radius:50%;   
														-webkit-border-radius:50%;   -moz-border-radius:50%}
														.eg-herbert-hoover-wrapper 
														.esg-media-poster
														{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
														<filter id='grayscale'>
														<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
														</filter></svg>#grayscale");
														filter:gray;   
														-webkit-filter:grayscale(100%)}
														.eg-herbert-hoover-wrapper:hover 
														.esg-media-poster{
															filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
															<filter id='grayscale'>
															<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
															</filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}
															.eg-lyndon-johnson-wrapper .esg-media-poster{
																filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																<filter id='grayscale'>
																<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																</filter>
																</svg>
																#grayscale");   filter:gray;   
																-webkit-filter:grayscale(100%)}
																.eg-lyndon-johnson-wrapper:hover 
																.esg-media-poster{
																	filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																	<filter id='grayscale'>
																	<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  
																	-webkit-filter:grayscale(0%)}
																	.esg-overlay.eg-ronald-reagan-container{
																		background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																		background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{
																			background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																			background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																			background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																			background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																			filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																			.eg-jefferson-wrapper{
																				-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; 
																				-webkit-mask-image:url
																				(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																				background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																				background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%);
																				background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}
																				.eg-wilbert-wrapper .esg-media-poster{
																					-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  
																					filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																					<filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover 
																					.esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																					<filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																					</filter>
																					</svg>
																					#grayscale");  
																					-webkit-filter:grayscale(0%)}
																					.eg-phillie-element-3:after{content:" ";
																					width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;
																					margin-left:-5px; 
																					bottom:-5px; 
																					position:absolute}
																					.eg-howardtaft-wrapper 
																					.esg-media-poster{
																						filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																						<filter id='grayscale'>
																						<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																						</filter></svg>#grayscale");
																						-webkit-filter:grayscale(0%)}
																						.eg-howardtaft-wrapper:hover .esg-media-poster{
																							filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																							<filter id='grayscale'>
																							<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																							</filter>
																							</svg>
																							#grayscale");
																							filter:gray;   
																							-webkit-filter:grayscale(100%)}
																							.myportfolio-container .added_to_cart.wc-forward{
																								font-family:"Open Sans"; 
																								font-size:13px; color:#fff; 
																								margin-top:10px}
																								.esgbox-title.esgbox-title-outside-wrap{
																									font-size:15px; 
																									font-weight:700; 
																									text-align:center}
																									.esgbox-title.esgbox-title-inside-wrap{
																										padding-bottom:10px; font-size:15px; 
																										font-weight:700; text-align:center}
																										a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{
																											-webkit-transition:all .4s linear;   
																											-moz-transition:all .4s linear;   
																											-o-transition:all .4s linear;   
																											-ms-transition:all .4s linear;   transition:all .4s linear}
																											.eg-jimmy-carter-element-11 i:before{
																												margin-left:0px; margin-right:0px}
																												.eg-harding-element-17{letter-spacing:1px}
																												.eg-harding-wrapper .esg-entry-media{overflow:hidden; 
																												box-sizing:border-box;   
																												-webkit-box-sizing:border-box;   
																												-moz-box-sizing:border-box;   
																												padding:30px 30px 0px 30px}
																												.eg-harding-wrapper .esg-media-poster{overflow:hidden; 
																													border-radius:50%;   
																													-webkit-border-radius:50%;   
																													-moz-border-radius:50%}.eg-ulysses-s-grant-wrapper 
																													.esg-entry-media{overflow:hidden; 
																														box-sizing:border-box;   
																														-webkit-box-sizing:border-box;   
																														-moz-box-sizing:border-box;   
																														padding:30px 30px 0px 30px}
																														.eg-ulysses-s-grant-wrapper 
																														.esg-media-poster{overflow:hidden; 
																															border-radius:50%;   
																															-webkit-border-radius:50%;   
																															-moz-border-radius:50%}
																														.eg-richard-nixon-wrapper 
																														.esg-entry-media{
																																overflow:hidden; 
																																box-sizing:border-box;   -
																																webkit-box-sizing:border-box;   
																																-moz-box-sizing:border-box;  
																															padding:30px 30px 0px 30px}
																															.eg-richard-nixon-wrapper .esg-media-poster{
																																overflow:hidden; border-radius:50%;   
																																-webkit-border-radius:50%;   -moz-border-radius:50%}
																															.eg-herbert-hoover-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																<filter id='grayscale'>
																																<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																																</filter>
																																</svg>
																																#grayscale");   
																																filter:gray;   
																																-webkit-filter:grayscale(100%)}
														.eg-herbert-hoover-wrapper:hover 
														.esg-media-poster{
															filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
															<filter id='grayscale'>
															<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
															</filter></svg>#grayscale");  
															-webkit-filter:grayscale(0%)}
															.eg-lyndon-johnson-wrapper 
															.esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																<filter id='grayscale'>
																<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																</filter>
																</svg>
																#grayscale");   
																filter:gray;   
																-webkit-filter:grayscale(100%)}
																.eg-lyndon-johnson-wrapper:hover 
																.esg-media-poster{
																	filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																	<filter id='grayscale'>
																	<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																	</filter>
																	</svg>
																	#grayscale");
																-webkit-filter:grayscale(0%)}
																.esg-overlay.eg-ronald-reagan-container{
																	background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																	background:-webkit-gradient:(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																	background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																	background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																	background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																	background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																	filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																	.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																		background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																		filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																		.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; 
																			-webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}
																			.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper 
																			.esg-entry-cover{
																				background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																				background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																				background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}
																				.eg-wilbert-wrapper .esg-entry-cover{
																					background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																					background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																					background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																					background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																					background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																					background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																					filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}
																					.eg-wilbert-wrapper .esg-media-poster{
																						-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;
																					filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																					<filter id='grayscale'>
																					<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																					</filter>
																					</svg>#grayscale");   
																					filter:gray;   
																					-webkit-filter:grayscale(100%)}
																					.eg-wilbert-wrapper:hover 
																					.esg-media-poster{
																						filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																						<filter id='grayscale'>
																						<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																						</filter>
																						</svg>
																						#grayscale");  
																						-webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{
																							content:" ";width:0px;height:0px;
																							border-style:solid;
																							border-width:5px 5px 0 5px;
																							border-color:#000 transparent transparent transparent;
																							left:50%;margin-left:-5px;
																							bottom:-5px; 
																							position:absolute}
																							.eg-howardtaft-wrapper 
																							.esg-media-poster,
																							.eg-howardtaft-wrapper 
																							.esg-media-poster{
																								filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																								<filter id='grayscale'>
																								<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																								</filter></svg>#grayscale");  
																								-webkit-filter:grayscale(0%)}
																								.eg-howardtaft-wrapper:hover 
																								.esg-media-poster,
																								.eg-howardtaft-wrapper:hover 
																								.esg-media-poster{
																									filter:url("data:image/svg+xml;utf8,
																									<svg xmlns='http://www.w3.org/2000/svg'>
																									<filter id='grayscale'>
																									<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																									</filter>
																									</svg>#grayscale");   
																									filter:gray;   
																									-webkit-filter:grayscale(100%)}
																									.myportfolio-container 
																									.added_to_cart.wc-forward{
																										font-family:"Open Sans"; 
																										font-size:13px; color:#fff; margin-top:10px}
																										.esgbox-title.esgbox-title-outside-wrap{
																											font-size:15px; font-weight:700; text-align:center}
																											.esgbox-title.esgbox-title-inside-wrap{
																												padding-bottom:10px; font-size:15px; 
																												font-weight:700; 
																												text-align:center}
																												.esg-content.eg-twitterstream-element-33-a{
																													display:inline-block}
																													.eg-twitterstream-element-35{
																														word-break:break-all}
																														.esg-overlay.eg-twitterstream-container{
																															background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																															background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																															.esg-content.eg-facebookstream-element-33-a{display:inline-block}.eg-facebookstream-element-0{word-break:break-all}
																															.esg-overlay.eg-flickrstream-container{
																																background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																																background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																															filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																															a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{
																																-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;
																																transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{
																																	margin-left:0px; margin-right:0px}
																																	.eg-harding-element-17{letter-spacing:1px}
																																	.eg-harding-wrapper 
																																	.esg-entry-media{
																																		overflow:hidden; box-sizing:border-box;   
																																		-webkit-box-sizing:border-box;   
																																		-moz-box-sizing:border-box;   
																																		padding:30px 30px 0px 30px}
																																	.eg-harding-wrapper .esg-media-poster{
																																		overflow:hidden; border-radius:50%;   
																																		-webkit-border-radius:50%;   
																																		-moz-border-radius:50%}
																																	.eg-ulysses-s-grant-wrapper 
																																	.esg-entry-media{
																																		overflow:hidden; 
																																		box-sizing:border-box;   
																																		-webkit-box-sizing:border-box;   
																																		-moz-box-sizing:border-box;   
																																		padding:30px 30px 0px 30px}
																																		.eg-ulysses-s-grant-wrapper 
																																		.esg-media-poster{
																																			overflow:hidden; 
																																			border-radius:50%;   
																																			-webkit-border-radius:50%;   
																																			-moz-border-radius:50%}
																																			.eg-richard-nixon-wrapper 
																																			.esg-entry-media{
																																				overflow:hidden; 
																																				box-sizing:border-box;   
																																				-webkit-box-sizing:border-box;   
																																				-moz-box-sizing:border-box;  
																																				padding:30px 30px 0px 30px}
																																			.eg-richard-nixon-wrapper .esg-media-poster{
																																				overflow:hidden; border-radius:50%;   
																																				-webkit-border-radius:50%;   
																																				-moz-border-radius:50%}
																																			.eg-herbert-hoover-wrapper .esg-media-poster{
																																				filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																				<filter id='grayscale'>
																																				<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																																				</filter>
																																				</svg>
																																				#grayscale");
																																				filter:gray;  
																																				-webkit-filter:grayscale(100%)}
																														.eg-herbert-hoover-wrapper:hover 
																														.esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																														<filter id='grayscale'>
																														<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																														</filter>
																														</svg>
																														#grayscale");  
																														-webkit-filter:grayscale(0%)}
																														.eg-lyndon-johnson-wrapper .esg-media-poster{
																															filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																															<filter id='grayscale'>
																															<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																															</filter>
																															</svg>
																															#grayscale");   
																															filter:gray;   
																															-webkit-filter:grayscale(100%)}
																															.eg-lyndon-johnson-wrapper:hover .esg-media-poster{
																																filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																<filter id='grayscale'>
																																<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																																</filter></svg>#grayscale");  
																																-webkit-filter:grayscale(0%)}
																																.esg-overlay.eg-ronald-reagan-container{
																																	background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																	background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																																	background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																	background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																	background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																	background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																	filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																																	.eg-georgebush-wrapper .esg-entry-cover{
																																		background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																																		background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																																		.eg-jefferson-wrapper{
																																			-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; 
																																			-webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}
																																			.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}
																																			.eg-lyndon-johnson-wrapper .esg-entry-cover{
																																				background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																				background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																																				background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																				background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																				background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																				background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																				filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}
																																.eg-wilbert-wrapper .esg-entry-cover{
																																	background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																	background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); 
																																	background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																	background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																	background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																	background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); 
																																	filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}
																																	.eg-wilbert-wrapper .esg-media-poster{
																																		-webkit-transition:0.4s ease-in-out;  
																																		-moz-transition:0.4s ease-in-out;  
																																		-o-transition:0.4s ease-in-out;  
																																		transition:0.4s ease-in-out;  
																																		filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																		<filter id='grayscale'>
																																		<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																																		</filter>
																																		</svg>#grayscale");   
																																		filter:gray;   
																																		-webkit-filter:grayscale(100%)}
																																.eg-wilbert-wrapper:hover .esg-media-poster{
																																	filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																	<filter id='grayscale'>
																																	<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																																	</filter>
																																	</svg>
																																	#grayscale");  
																																	-webkit-filter:grayscale(0%)}
																																	.eg-phillie-element-3:after{
																																		content:" ";
																																		width:0px;
																																		height:0px;
																																		border-style:solid;
																																		border-width:5px 5px 0 5px
																																		;border-color:#000 transparent transparent transparent;
																																		left:50%;margin-left:-5px; bottom:-5px; position:absolute}
																																		.eg-howardtaft-wrapper .esg-media-poster,.eg-howardtaft-wrapper .esg-media-poster{
																																			filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																			<filter id='grayscale'>
																																			<feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/>
																																			</filter>
																																			</svg>
																																			#grayscale");  
																																			-webkit-filter:grayscale(0%)}
																																			.eg-howardtaft-wrapper:hover 
																																			.esg-media-poster,.eg-howardtaft-wrapper:hover .esg-media-poster{
																																				filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'>
																																				<filter id='grayscale'>
																																				<feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/>
																																				</filter>
																																				</svg>
																																				#grayscale");
																																				filter:gray;
																																				-webkit-filter:grayscale(100%)}
																																.myportfolio-container .added_to_cart.wc-forward{
																																	font-family:"Open Sans"; 
																																	font-size:13px; color:#fff;
																																	margin-top:10px}
																																.esgbox-title.esgbox-title-outside-wrap{
																																	font-size:15px; 
																																	font-weight:700; 
																																	text-align:center}
																																	.esgbox-title.esgbox-title-inside-wrap{
																																		padding-bottom:10px; 
																																		font-size:15px; 
																																		font-weight:700; 
																																		text-align:center}
																																	.esg-content.eg-twitterstream-element-33-a{
																																		display:inline-block}
																																	.eg-twitterstream-element-35{
																																		word-break:break-all}
																																	.esg-overlay.eg-twitterstream-container{
																																		background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																																		background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
																																	.esg-content.eg-facebookstream-element-33-a{
																																		display:inline-block}
																																	.eg-facebookstream-element-0{
																																		word-break:break-all}.esg-overlay.eg-flickrstream-container{
																																		background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); 
																																		background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); 
																																		filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
													</style>
														
														<!-- CACHE CREATED FOR: 3 -->

													<style type="text/css">.minimal-light .navigationbuttons,.minimal-light .esg-pagination,.minimal-light .esg-filters{
														text-align:center}.minimal-light .esg-filter-wrapper.dropdownstyle >.esg-selected-filterbutton,.minimal-light input.eg-search-input,.minimal-light .esg-filterbutton,.minimal-light .esg-navigationbutton,.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton a,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit{color:#999; margin-right:5px; cursor:pointer; padding:0px 16px; border:1px solid #e5e5e5; line-height:38px; border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px; white-space:nowrap; min-height:38px; vertical-align:middle}.minimal-light input.eg-search-input::placeholder{line-height:38px; vertical-align:middle}.minimal-light .esg-navigationbutton *{color:#999}.minimal-light .esg-navigationbutton{padding:0px 16px}.minimal-light .esg-pagination-button:last-child{margin-right:0}.minimal-light .esg-left,.minimal-light .esg-right{padding:0px 11px}.minimal-light .esg-sortbutton-wrapper,.minimal-light .esg-cartbutton-wrapper{display:inline-block}.minimal-light .esg-sortbutton-order,.minimal-light .esg-cartbutton-order{display:inline-block; vertical-align:top; border:1px solid #e5e5e5; width:40px; line-height:38px; border-radius:0px 5px 5px 0px; font-size:12px; font-weight:700; color:#999; cursor:pointer; background:#fff}.minimal-light .esg-cartbutton{color:#333; cursor:default !important}.minimal-light .esg-cartbutton .esgicon-basket{color:#333; font-size:15px; line-height:15px; margin-right:10px}.minimal-light .esg-cartbutton-wrapper{cursor:default !important}.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-right:none; border-radius:5px 0px 0px 5px}.minimal-light input.eg-search-input.hovered,.minimal-light input.eg-search-input:focus,.minimal-light .esg-navigationbutton.hovered,.minimal-light .esg-filterbutton.hovered,.minimal-light .esg-sortbutton.hovered,.minimal-light .esg-sortbutton-order.hovered,.minimal-light .esg-cartbutton.hovered a,.minimal-light .esg-filter-wrapper.dropdownstyle >.esg-selected-filterbutton.hovered,.minimal-light .esg-filterbutton.selected,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean.hovered,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit.hovered{background-color:#fff; border-color:#bbb; color:#333; box-shadow:0px 3px 5px 0px rgba(0,0,0,0.13)}.minimal-light .esg-navigationbutton.hovered *{color:#333}.minimal-light .esg-sortbutton-order.hovered .tp-desc{border-color:#bbb; color:#333; box-shadow:0px -3px 5px 0px rgba(0,0,0,0.13) !important}.minimal-light .esg-filter-checked{color:#cbcbcb; background:#cbcbcb; margin-left:10px; font-size:9px; font-weight:300; line-height:9px; vertical-align:middle}.minimal-light .esg-filter-wrapper.dropdownstyle .esg-filter-checked{margin-left:-22px; margin-right:10px}.minimal-light .esg-filterbutton.selected .esg-filter-checked,.minimal-light .esg-filterbutton.hovered .esg-filter-checked{color:#fff; background:#000}.minimal-light .esg-filter-wrapper.eg-search-wrapper{white-space:nowrap}.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-clean,.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-submit{width:40px; padding:0px; margin-left:5px; margin-right:0px}.minimal-light .esg-filter-wrapper.eg-search-wrapper .eg-search-input{width:auto}.minimal-light .esg-dropdown-wrapper{transform:translateZ(10px) translateX(-50%); left:50%; background:rgba(255,255,255,0.95); border-radius:5px; border:1px solid #e5e5e5}.minimal-light .esg-dropdown-wrapper .esg-filterbutton{position:relative; border:none; box-shadow:none; text-align:left; color:#999; background:transparent; line-height:25px; min-height:25px}.minimal-light .esg-dropdown-wrapper .esg-filterbutton.hovered,.minimal-light .esg-dropdown-wrapper .esg-filterbutton.selected{color:#333}.minimal-light .esg-selected-filterbutton .eg-icon-down-open{margin-right:-10px; font-size:12px}.minimal-light .esg-selected-filterbutton.hovered .eg-icon-down-open{color:#333}</style>
													<style type="text/css">.eg-jason-musicplace-element-0{font-size:14px !important; line-height:18px !important; color:#1a1c1f !important; font-weight:500 !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; z-index:2 !important; display:block; font-family:Hind !important; text-transform:capitalize !important}.eg-jason-musicplace-element-28{font-size:10px !important; line-height:36px !important; color:#ffffff !important; font-weight:700 !important; padding:0px 10px 0px 10px !important; border-radius:4px 4px 4px 4px !important; background:#e21818 !important; z-index:2 !important; display:block; font-family:Hind !important; text-transform:uppercase !important}.eg-jason-musicplace-element-32{font-size:14px !important; line-height:36px !important; color:#ffffff !important; font-weight:400 !important; padding:0px 8px 0px 8px !important; border-radius:4px 4px 4px 4px !important; background:#e21818 !important; z-index:2 !important; display:block; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-jason-musicplace-element-30{font-size:13px !important; line-height:22px !important; color:#000000 !important; font-weight:700 !important; display:inline-block !important; float:left !important; clear:both !important; margin:0px 0px 0px 0px !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; position:relative !important; z-index:2 !important; font-family:"Open Sans" !important; text-transform:uppercase !important}.eg-jason-musicplace-element-25{font-size:14px; line-height:22px; color:#e21818; font-weight:500; display:inline-block; float:right; clear:none; margin:0px 0px 0px 0px ; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:transparent; position:relative; z-index:2 !important; font-family:Hind}</style>
													<style type="text/css">.eg-jason-musicplace-element-0:hover{font-size:14px !important; line-height:18px !important; color:#e21818 !important; font-weight:500 !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; font-family:Hind !important; text-transform:capitalize !important}.eg-jason-musicplace-element-28:hover{font-size:10px !important; line-height:36px !important; color:#ffffff !important; font-weight:700 !important; border-radius:4px 4px 4px 4px !important; background:#1a1c1f !important; font-family:Hind !important; text-transform:uppercase !important}.eg-jason-musicplace-element-32:hover{font-size:14px !important; line-height:36px !important; color:#ffffff !important; font-weight:400 !important; border-radius:4px 4px 4px 4px !important; background:#1a1c1f !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
													<style type="text/css">.eg-jason-musicplace-element-0-a{display:block !important; text-align:left !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
													<style type="text/css">.eg-jason-musicplace-element-32-a{display:inline-block !important; float:right !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
													<style type="text/css">.eg-jason-musicplace-element-28-a{display:inline-block !important; float:left !important; clear:both !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
													<style type="text/css">.eg-jason-musicplace-container{background:rgba(255,255,255,0.20)}</style>
													<style type="text/css">.eg-jason-musicplace-content{background:transparent; padding:17px 0px 30px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:#e5e5e5; border-style:solid; text-align:center}</style>
													<style type="text/css">.esg-grid .mainul li.eg-jason-musicplace-wrapper{background:transparent; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:#e5e5e5; border-style:solid; overflow:hidden;-webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}</style>
													<style type="text/css">.esg-grid .mainul li.eg-jason-musicplace-wrapper .esg-media-poster{background-size:cover; background-position:center center; background-repeat:no-repeat}</style>
													<style type="text/css"></style>

													<!-- THE ESSENTIAL GRID 3.0.11 POST -->

													<article class="myportfolio-container minimal-light source_type_post" id="esg-grid-3-2-wrap">

														<div id="esg-grid-3-2" class="esg-grid" style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; display:none">
															<article class="esg-filters esg-singlefilters" style="margin-bottom: 40px; text-align: center; ">
																<div class="esg-navigationbutton esg-left  esg-fgc-3"  style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
																	<i class="eg-icon-left-open"></i>
																</div>

																<!-- THE FILTER BUTTONS -->

																<div class="esg-filter-wrapper  esg-fgc-3" style="margin-left: 2.5px; margin-right: 2.5px;">
																	<div class="esg-mobile-filter-button">
																		<span>Filtrar Categorias</span>
																		<i class="eg-icon-down-open"></i>
																	</div>
																	<div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">
																		<span>Filtrar - Todos</span>
																	</div>
																	<div class="esg-filterbutton" data-fid="37" data-filter="filter-accessories">
																		<span>Accesorios</span>
																		<span class="esg-filter-checked">
																			<i class="eg-icon-ok-1"></i>
																		</span>
																	</div>
																	<div class="esg-filterbutton" data-fid="38" data-filter="filter-drum-kit">
																		<span>Baterias &amp; Percusión</span>
																		<span class="esg-filter-checked">
																			<i class="eg-icon-ok-1"></i>
																		</span>
																	</div>
																	<div class="eg-clearfix"></div>
																</div>

																<div class="esg-sortbutton-wrapper  esg-fgc-3" style="margin-left: 2.5px; margin-right: 2.5px;">
																	<div class="esg-sortbutton">
																		<span>Ordenar por </span>
																		<span class="sortby_data"></span>
																		<select class="esg-sorting-select">
																			<option value="title" >Titulo</option>
																			<option value="date"  selected='selected'>Fecha</option>
																		</select>
																	</div>

																	<div class="esg-sortbutton-order eg-icon-down-open tp-asc"></div>
																</div>

																<div class="esg-navigationbutton esg-right  esg-fgc-3"  style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
																	<i class="eg-icon-right-open"></i>
																</div>
															</article>

															<div class="esg-clear-no-height"></div>

															<ul>

																<li id="eg-3-post-id-1057" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1057" 
																	data-date="1470750870" data-title="hercules-d">
																		<div class="esg-media-cover-wrapper">
																			<div class="esg-entry-media">
																				<img src="/img/4-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																			</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-1057 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="1057" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1057 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-1057 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-1057 esgbox" 
																						data-thumb="/img/4-1.jpg" href="/img/4-1.jpg" data-width="656"  data-height="850" >
																						<i class="eg-icon-resize-full-alt"></i>
																					</a>
																				</div>
																			</div>

																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-1057 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-1057" href="/proximo" target="_self">
																						Hercules DS513BB 2 Trumpet
																					</a>
																				</div>
																			<div class="esg-content eg-post-1057 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount">
																					<bdi>
																						<span class="woocommerce-Price-currencySymbol">&#36;</span>350.75
																					</bdi>
																				</span>
																			</div>
																		</div> 
																	</div>

																</li>

																<li id="eg-3-post-id-1053" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1053" data-date="1470750862" data-title="barrington">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/horn.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-1053 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1053" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1053 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1053 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1053 esgbox"
																					data-thumb="/img/horn-200x259.jpg" href="/img/horn.jpg" data-width="656"  data-height="850" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1053 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1053" href="/proximo" target="_self">
																					Barrington BR FR401 Double French Horn
																				</a>
																			</div>
																			<div class="esg-content eg-post-1053 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount">
																					<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>280.00</bdi>
																				</span> &ndash; 
																				<span class="woocommerce-Price-amount amount">
																					<bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi>
																				</span>
																			</div>
																		</div>
																	</div>
																</li>


																<li id="eg-3-post-id-1049" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1049" data-date="1470749933" data-title="micromall">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/2-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																		
																			<div class="esg-bottom eg-post-1049 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1049" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1049 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1053 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1053 esgbox" 
																					data-thumb="/img/2-1.jpg" href="/img/2-1.jpg" data-width="656"  data-height="850" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1049 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1049" href="/proximo" target="_self">
																					MicroMall(TM) Paint Gold Drop B
																				</a>
																			</div>
																			<div class="esg-content eg-post-1049 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>150.75</bdi></span>
																			</div>
																		</div>   
																	</div>
																</li>

																<li id="eg-3-post-id-1045" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-mouthpieces filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1045" data-date="1470749928" data-title="tromba-pro">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/1-1.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-1045 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1045" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1045 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones</a>
																			</div>
																			<div class="esg-bottom eg-post-1045 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1045 esgbox" 
																					data-thumb="/img/1-1.jpg" href="/img/1-1.jpg" data-width="656"  data-height="850" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1045 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1045" href="/proximo" target="_self">
																					Tromba Pro Professional Plastic Bb</a>
																			</div>
																			<div class="esg-content eg-post-1045 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi>
																					<span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi></span>
																			</div>
																		</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-1021" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1021" data-date="1470749895" data-title="protec-del">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/7.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																		<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																		</div>

																		<div class="esg-bottom eg-post-1021 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a href="/proximo" rel="nofollow" data-product_id="1021" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1021 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																		<div class="esg-bottom eg-post-1021 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																			<a class="eg-jason-musicplace-element-32 eg-post-1021 esgbox" 
																				data-thumb="/img/7.jpg" href="/img/7.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">

																			<div class="esg-content eg-post-1021 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1021" href="/proximo" target="_self">
																					Protec Deluxe Trumpet Bag Instrument Case</a>
																			</div>
																			<div class="esg-content eg-post-1021 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>47.50</bdi></span>
																			</div>
																		</div>   
																	</div>
																</li>

																<li id="eg-3-post-id-1017" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1017" data-date="1470749888" data-title="gator-trom">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/5.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																			<div class="esg-bottom eg-post-1017 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1017" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1017 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-1017 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1017 esgbox" 
																					data-thumb="/img/5.jpg" href="/img/5.jpg" data-width="656"  data-height="850" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1017 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1017" href="/proximo" target="_self">
																					Gator Trombone Case
																				</a>
																			</div>
																			<div class="esg-content eg-post-1017 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>67.00</bdi>
																				</span>
																			</div>
																		</div>
																	</div>
																</li>

																<li id="eg-3-post-id-1013" data-skin="jason-musicplace" class="filterall filter-variable filter-bags-and-cases filter-band-orchestra filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-1013" data-date="1470748170" data-title="new-trumpe">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/6.jpg" data-no-lazy="1" alt="" width="656" height="850">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-1013 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="1013" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-1013 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																			<div class="esg-bottom eg-post-1013 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-1013 esgbox" 
																					data-thumb="/img/6.jpg" href="/img/6.jpg" data-width="656"  data-height="850" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>

																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-1013 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-1013" href="/proximo" target="_self">
																					New Trumpet Gig Bag Case with Nylon
																				</a>
																			</div>

																			<div class="esg-content eg-post-1013 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>78.00</bdi></span>
																			</div>
																		</div>
																	</div>
																</li>

																<li id="eg-3-post-id-671" data-skin="jason-musicplace" class="filterall filter-variable filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-upright-basses filter-concept filter-creative filter-blue filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-671" data-date="1470058637" data-title="handcrafte">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/j.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																				</div>
																				<div class="esg-bottom eg-post-671 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="671" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-671 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																					<div class="esg-bottom eg-post-671 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																						<a class="eg-jason-musicplace-element-32 eg-post-671 esgbox" 
																							data-thumb="/img/j.jpg" href="/img/j.jpg" data-width="987"  data-height="1280" >
																							<i class="eg-icon-resize-full-alt"></i>
																						</a>
																					</div>
																			</div>

																				<div class="esg-entry-content eg-jason-musicplace-content">
																					<div class="esg-content eg-post-671 eg-jason-musicplace-element-0-a">
																						<a class="eg-jason-musicplace-element-0 eg-post-671" href="/proximo" target="_self">
																							Handcrafted Blue Acoustic Violin
																						</a>
																					</div>
																					<div class="esg-content eg-post-671 eg-jason-musicplace-element-25">
																						<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>850.75</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>950.75</bdi>
																						</span>
																					</div>
																				</div>   
																	</div>
																</li>
																
																<li id="eg-3-post-id-362" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-bags-and-cases filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-concept filter-creative filter-lifestyle filter-black filter-brown eg-jason-musicplace-wrapper eg-post-id-362" data-date="1469606832" data-title="custom-zon">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/3_2.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>
																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																				</div>
																				<div class="esg-bottom eg-post-362 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="362" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-362 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-362 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-362 esgbox" 
																						data-thumb="/img/3_2.jpg" href="/img/3_2.jpg" data-width="987"  data-height="1280" >
																						<i class="eg-icon-resize-full-alt"></i>
																					</a>
																				</div>
																			</div>

																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-362 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-362" href="/proximo" target="_self">
																						Custom Zone 6-String Full-Size Electric Guitar
																					</a>
																				</div>
																				<div class="esg-content eg-post-362 eg-jason-musicplace-element-30">
																					<div class="esg-starring">
																						<div class="star-rating" role="img" aria-label="Valorado en 4.50 de 5">
																							<span style="width:90%">Valorado en <strong class="rating">4.50</strong> de 5</span>
																						</div>
																					</div>
																				</div>

																				<div class="esg-content eg-post-362 eg-jason-musicplace-element-25">
																					<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,329.99</bdi>
																				</span>
																				</div>
																			</div>   
																	</div>
																</li>
																
																<li id="eg-3-post-id-361" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-accessories filter-accessories-dj-karaoke filter-dj-karaoke filter-mixers filter-concept filter-creative filter-event filter-black filter-red filter-white eg-jason-musicplace-wrapper eg-post-id-361" data-date="1469606727" data-title="mxx-v22r-l">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/4_1.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>

																		<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																			<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">
																			</div>
																			<div class="esg-bottom eg-post-361 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a href="/proximo" rel="nofollow" data-product_id="361" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-361 button add_to_cart_button  product_type_variable">
																					Seleccionar opciones
																				</a>
																			</div>
																			<div class="esg-bottom eg-post-361 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																				<a class="eg-jason-musicplace-element-32 eg-post-361 esgbox" 
																					data-thumb="/img/4_1.jpg" href="/img/4_1.jpg" data-width="987"  data-height="1280" >
																					<i class="eg-icon-resize-full-alt"></i>
																				</a>
																			</div>
																		</div>
																		<div class="esg-entry-content eg-jason-musicplace-content">
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-0-a">
																				<a class="eg-jason-musicplace-element-0 eg-post-361" href="/proximo" target="_self">
																					MXX V22R Large  Capsule Condenser Microphone
																				</a>
																			</div>
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-30">
																				<div class="esg-starring">
																					<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																						<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="esg-content eg-post-361 eg-jason-musicplace-element-25">
																				<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi>
																				</span>
																			</div>
																		</div>   
																	</div>
																</li>

																<li id="eg-3-post-id-279" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-rated-5 filter-accessories filter-accessories-dj-karaoke filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-instruments filter-keyboard filter-upright-basses filter-concept filter-creative filter-drums filter-music filter-black filter-white eg-jason-musicplace-wrapper eg-post-id-279" data-date="1469198200" data-title="tama-s-l-p">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/1-1.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade">

																				</div>

																				<div class="esg-bottom eg-post-279 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="279" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-279 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																				<div class="esg-bottom eg-post-279 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-279 esgbox" 
																						data-thumb="/img/1-1.jpg" href="/img/1-1.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-279 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-279" href="/proximo" target="_self">
																						Tama S.L.P. Big Black Steel Snare Drum</a>
																				</div>
																				<div class="esg-content eg-post-279 eg-jason-musicplace-element-30">
																					<div class="esg-starring">
																						<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
																							<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span>
																						</div>
																					</div>
																				</div>
																				<div class="esg-content eg-post-279 eg-jason-musicplace-element-25">
																					<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</bdi>
																					</span>
																				</div>
																			</div>
																	</div>

																</li>

																<li id="eg-3-post-id-278" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-concept filter-creative filter-popular filter-black filter-brown eg-jason-musicplace-wrapper eg-post-id-278" data-date="1469198169" data-title="gibson-cus">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/3_4.jpg" data-no-lazy="1" alt="" width="987" height="1280"></div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-278 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="278" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-278 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-278 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-278 esgbox" 
																						data-thumb="/img/3_4.jpg" href="/img/3_4.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-278 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-278" href="/proximo" target="_self">
																					Gibson Custom L5 Premier Acoustic Guitar
																					</a>
																				</div>
																				<div class="esg-content eg-post-278 eg-jason-musicplace-element-30">
																					<div class="esg-starring">
																						<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																							<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
																						</div>
																					</div>
																				</div>
																				<div class="esg-content eg-post-278 eg-jason-musicplace-element-25">
																					<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,229.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,329.99</bdi>
																					</span>
																				</div>
																			</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-277" data-skin="jason-musicplace" class="filterall filter-variable filter-accessories filter-accessories-dj-karaoke filter-dj-karaoke filter-headphones filter-mixers filter-company filter-sale filter-black filter-blue filter-white eg-jason-musicplace-wrapper eg-post-id-277" data-date="1469198147" data-title="soyuz-tube">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/4.jpg" data-no-lazy="1" alt="" width="987" height="1280"></div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-277 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="277" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-277 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-277 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-277 esgbox" 
																						data-thumb="/img/4.jpg" href="/img/4.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-277 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-277" href="/proximo" target="_self">
																						Soyuz Tube Condenser Microphone
																					</a>
																				</div>
																				<div class="esg-content eg-post-277 eg-jason-musicplace-element-25"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>848.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>948.99</bdi></span></div>
																			</div>   
																	</div>

																</li>
																<li id="eg-3-post-id-276" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-audio-workstations filter-bags-and-cases filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-keyboard filter-midi-interfaces filter-turntables filter-company filter-sale filter-blue filter-red eg-jason-musicplace-wrapper eg-post-id-276" data-date="1469198119" data-title="crosley-cr">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/7_4.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>
																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																				<div class="esg-bottom eg-post-276 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="276" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-276 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-276 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-276 esgbox" 
																						data-thumb="/img/7_4.jpg" href="/img/7_4.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																			</div>

																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-276 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-276" href="/proximo" target="_self">
																						Crosley Cruiser Portable 3-Speed Turntable
																					</a>
																				</div>
																				<div class="esg-content eg-post-276 eg-jason-musicplace-element-25"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>449.99</bdi></span></div>
																			</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-275" data-skin="jason-musicplace" class="filterall filter-variable filter-featured filter-rated-4 filter-accessories filter-band-orchestra filter-drum-kit filter-keyboard filter-upright-basses filter-concept filter-creative filter-brown filter-white eg-jason-musicplace-wrapper eg-post-id-275" data-date="1469198098" data-title="meinl-cymb">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/2.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>
																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>
																				<div class="esg-bottom eg-post-275 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="275" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-275 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-275 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-275 esgbox" 
																						data-thumb="/img/2.jpg" href="/img/2.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																		</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-275 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-275" href="/proximo" target="_self">
																						Meinl Cymbals Arena Marching Cymbals Pair
																					</a>
																				</div>
																				<div class="esg-content eg-post-275 eg-jason-musicplace-element-30">
																					<div class="esg-starring">
																						<div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5">
																							<span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span>
																						</div>
																					</div>
																				</div>
																				<div class="esg-content eg-post-275 eg-jason-musicplace-element-25"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>369.99</bdi></span></div>
																			</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-274" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-band-orchestra filter-bass-guitars filter-guitars filter-instruments filter-orchestral-strings filter-company filter-electric-guitars filter-sale filter-black filter-red filter-white eg-jason-musicplace-wrapper eg-post-id-274" data-date="1469198072" data-title="gibson-201">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/f.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-274 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="274" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-274 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-274 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-274 esgbox" 
																					data-thumb="/img/f.jpg" href="/img/f.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																			</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-274 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-274" href="/proximo" target="_self">
																						Gibson 2016 T Les Paul Studio 50's Tribute
																					</a>
																				</div>
																				<div class="esg-content eg-post-274 eg-jason-musicplace-element-30"><div class="esg-starring"><div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5"><span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span></div></div></div>
																				<div class="esg-content eg-post-274 eg-jason-musicplace-element-25"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>899.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>950.99</bdi></span></div>
																			</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-273" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-4 filter-band-orchestra filter-dj-karaoke filter-drum-kit filter-instruments filter-keyboard filter-mouthpieces filter-upright-basses filter-acoustic-kits filter-concept filter-creative filter-black filter-white eg-jason-musicplace-wrapper eg-post-id-273" data-date="1469198048" data-title="plastic-tr">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/3-e1470062679810.jpg" data-no-lazy="1" alt="" width="759" height="987">
																		</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">
																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-273 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="273" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-273 button add_to_cart_button  product_type_variable">
																						Seleccionar opciones
																					</a>
																				</div>
																				<div class="esg-bottom eg-post-273 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-273 esgbox" 
																						data-thumb="/img/3-e1470062679810.jpg" href="/img/3-e1470062679810.jpg" data-width="759"  data-height="987" ><i class="eg-icon-resize-full-alt"></i></a></div>
																			</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-273 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-273" href="/proximo" target="_self">
																						Plastic Trumpet, White
																					</a>
																				</div>
																				<div class="esg-content eg-post-273 eg-jason-musicplace-element-30"><div class="esg-starring"><div class="star-rating" role="img" aria-label="Valorado en 4.00 de 5"><span style="width:80%">Valorado en <strong class="rating">4.00</strong> de 5</span></div></div></div>
																				<div class="esg-content eg-post-273 eg-jason-musicplace-element-25"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>456.25</bdi></span></div>
																			</div>   
																	</div>

																</li>

																<li id="eg-3-post-id-272" data-skin="jason-musicplace" class="filterall filter-variable filter-rated-5 filter-band-orchestra filter-orchestral-strings filter-upright-basses filter-concept filter-creative filter-brown filter-red eg-jason-musicplace-wrapper eg-post-id-272" data-date="1469195972" data-title="handcrafte">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media">
																			<img src="/img/1.jpg" data-no-lazy="1" alt="" width="987" height="1280">
																		</div>

																			<div class="esg-entry-cover esg-transition" data-delay="0" data-duration="deafult" data-transition="esg-fade">

																				<div class="esg-overlay esg-transition eg-jason-musicplace-container" data-delay="0" data-duration="default" data-transition="esg-fade"></div>

																				<div class="esg-bottom eg-post-272 eg-jason-musicplace-element-28-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a href="/proximo" rel="nofollow" data-product_id="272" data-product_sku="" class="eg-jason-musicplace-element-28 eg-post-272 button add_to_cart_button  product_type_variable">Seleccionar opciones</a></div>
																				<div class="esg-bottom eg-post-272 eg-jason-musicplace-element-32-a esg-transition" data-delay="0.1" data-duration="default" data-transition="esg-slide">
																					<a class="eg-jason-musicplace-element-32 eg-post-272 esgbox" data-thumb="/img/1.jpg" href="/img/1.jpg" data-width="987"  data-height="1280" ><i class="eg-icon-resize-full-alt"></i></a></div>
																			</div>
																			<div class="esg-entry-content eg-jason-musicplace-content">
																				<div class="esg-content eg-post-272 eg-jason-musicplace-element-0-a">
																					<a class="eg-jason-musicplace-element-0 eg-post-272" href="/proximo" target="_self">
																						Handcrafted Wood Acoustic Violin
																					</a>
																				</div>
																				<div class="esg-content eg-post-272 eg-jason-musicplace-element-30">
																					<div class="esg-starring"><div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5"><span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span></div></div></div>
																				<div class="esg-content eg-post-272 eg-jason-musicplace-element-25">
																					<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>650.75</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>700.75</bdi></span></div>
																		</div>   
																	</div>

																</li>
															</ul>
														</div>

													</article>
													<div class="clear"></div>

													<script type="text/javascript">
															var essapi_3_2;
															function esginit_3_2() {
															jQuery(document).ready(function() {
															essapi_3_2 = jQuery("#esg-grid-3-2").tpessential({
															gridID:3,
															layout:"masonry",
															forceFullWidth:"off",
															lazyLoad:"off",
															row:1,
															apiName: "essapi_3_2",
															loadMoreAjaxToken:"8ddc976d55",
															loadMoreAjaxUrl:"http://localhost/wordpress/wp-admin/admin-ajax.php",
															loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
															ajaxContentTarget:"ess-grid-ajax-container-",
															ajaxScrollToOffset:"0",
															ajaxCloseButton:"off",
															ajaxContentSliding:"on",
															ajaxScrollToOnLoad:"on",
															ajaxCallbackArgument:"off",
															ajaxNavButton:"off",
															ajaxCloseType:"type1",
															ajaxCloseInner:"false",
															ajaxCloseStyle:"light",
															ajaxClosePosition:"tr",
															space:30,
															pageAnimation:"fade",
															videoPlaybackInGrid: "on",
															videoPlaybackOnHover: "off",
															videoInlineMute: "on",
															videoInlineControls: "off",
															keepLayersInline: "off",
															startAnimation: "none",
															startAnimationSpeed: 1000,
															startAnimationDelay: 100,
															startAnimationType: "item",
															animationType: "item",
															paginationScrollToTop:"off",
															paginationAutoplay:"off",
															spinner:"spinner0",
															minVisibleItems:3,
															lightBoxMode:"single",
															lightboxHash:"group",
															lightboxPostMinWid:"75%",
															lightboxPostMaxWid:"75%",
															lightboxSpinner:"off",
															lightBoxFeaturedImg:"off",
															lightBoxPostTitle:"off",
															lightBoxPostTitleTag:"h2",
															lightboxMargin : "0|0|0|0",
															lbContentPadding : "0|0|0|0",
															lbContentOverflow : "auto",
															animSpeed:1000,
															delayBasic:1,
															mainhoverdelay:1,
															filterType:"single",
															showDropFilter:"hover",
															filterGroupClass:"esg-fgc-3",
															filterNoMatch:"No Items for the Selected Filter",
															filterDeepLink:"off",
															hideMarkups: "on",
															inViewport: true,
															viewportBuffer: 20,
															youtubeNoCookie:"false",
															convertFilterMobile:false,
															paginationSwipe: "off",
															paginationDragVer: "on",
															pageSwipeThrottle: 30,
															googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
															hideBlankItemsAt: "1",
															responsiveEntries: [
																{ width:1400,amount:4,mmheight:0},
																{ width:1170,amount:4,mmheight:0},
																{ width:1024,amount:4,mmheight:0},
																{ width:960,amount:3,mmheight:0},
																{ width:778,amount:3,mmheight:0},
																{ width:600,amount:2,mmheight:0},
																{ width:300,amount:1,mmheight:0}
																]
															});

															var arrows = true,
															lightboxOptions = {
															margin : [0,0,0,0],
															buttons : ["close"],
															infobar : true,
															loop : true,
															slideShow : {"autoStart": false, "speed": 3000},
															videoAutoPlay : true,
															animationEffect : "fade",
															animationDuration : 500,
															beforeShow: function(a, c) {
															if(!arrows) {
																jQuery("body").addClass("esgbox-hidearrows");
															}
															var i = 0,
																multiple = false;
															a = a.slides;
															for(var b in a) {
																i++;
																if(i > 1) {
																	multiple = true;
																	break;
																}
															}

															if(!multiple) jQuery("body").addClass("esgbox-single");
															if(c.type === "image") jQuery(".esgbox-button--zoom").show();
															},
															beforeLoad: function(a, b) {
															jQuery("body").removeClass("esg-four-by-three");
															if(b.opts.$orig.data("ratio") === "4:3") jQuery("body").addClass("esg-four-by-three");
															},
															afterLoad: function() {jQuery(window).trigger("resize.esglb");},
															afterClose : function() {jQuery("body").removeClass("esgbox-hidearrows esgbox-single");},
															transitionEffect : "fade",
															transitionDuration : 500,
															hash : "group",
															arrows : true,
															wheel : false,
															};

															jQuery("#esg-grid-3-2").data("lightboxsettings", lightboxOptions);


															});
															}
															
															// End of EsgInitScript

															var once_3_2 = false;
															if
															(document.readyState === "loading") document.addEventListener('readystatechange',function() {
																if((document.readyState === "interactive" || document.readyState === "complete") && !once_3_2 )	{ once_3_2 = true; esginit_3_2();}}); 
																else {once_3_2 = true;  esginit_3_2();}
													</script>



													<script>
														(function() {
																window.mc4wp = window.mc4wp || {
																	listeners: [],
																	forms: {
																		on: function(evt, cb) {
																			window.mc4wp.listeners.push(
																				{
																					event   : evt,
																					callback: cb
																				}
																			);
																		}
																	}
																}
															})();
													</script>

													<div class="vc_row wpb_row vc_row-fluid">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="footer_wrap widget_area scheme_original">
																		<div class="footer_wrap_inner widget_area_inner">
																			<div class="content_wrap">
																				<div class="columns_wrap">
																						
																					<aside id="woocommerce_products-2" class="widget_number_1 widget  column-1_3 woocommerce widget_products">
																						<h5 class="widget_title">
																							Mas destacados
																						</h5>
																						<ul class="product_list_widget">
																							<li>
																								<a href="/proximo">
																									<img width="300" height="400" src="/img/1-1-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />		
																									<span class="product-title">Tama S.L.P. Big Black Steel Snare Drum</span>
																								</a>
																								<div class="star-rating" role="img" aria-label="Valorado en 5.00 de 5">
																									<span style="width:100%">Valorado en <strong class="rating">5.00</strong> de 5</span>
																								</div>
																								<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</bdi></span>
																							</li>

																							<li>
																								<a href="/proximo">
																									<img width="300" height="400" src="/img/7_4-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />		
																									<span class="product-title">Crosley Cruiser Portable 3-Speed Turntable</span>
																								</a>
																								<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>349.99</bdi></span> &ndash; <span class="woocommerce-Price-amount amount"><bdi>
																									<span class="woocommerce-Price-currencySymbol">&#36;</span>449.99</bdi></span>
																							</li>
																						</ul>
																					</aside>

																					<aside id="woocommerce_recent_reviews-2" class="widget_number_2 widget  column-1_3 woocommerce widget_recent_reviews">
																						<h5 class="widget_title">
																							Vistos Recientes
																						</h5>
																						<ul class="product_list_widget">
																							<li>
																								<a href="/proximo">
																									<img width="300" height="400" src="/img/3_2-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />		
																									<span class="product-title">Custom Zone 6-String Full-Size Electric Guitar</span>
																								</a>
																								<div class="star-rating" role="img" aria-label="Valorado en 4 de 5">
																									<span style="width:80%">Valorado en <strong class="rating">4</strong> de 5</span>
																								</div>
																								<span class="reviewer">por Jack Black</span>

																							</li>

																							<li>
																								<a href="/proximo#comment-18">
																									<img width="300" height="400" src="/img/3_4-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />		
																									<span class="product-title">Gibson Custom L5 Premier Acoustic Guitar</span>
																								</a>

																								<div class="star-rating" role="img" aria-label="Valorado en 4 de 5">
																									<span style="width:80%">Valorado en <strong class="rating">4</strong> de 5</span>
																								</div>
																								<span class="reviewer"> por Jack Black	</span>


																							</li>
																						</ul>
																					</aside>

																					<aside id="woocommerce_products-3" class="widget_number_3 widget  column-1_3 woocommerce widget_products">
																						<h5 class="widget_title">
																							Productos Nuevos
																						</h5>
																						<ul class="product_list_widget">
																							<li>
																								<a href="/proximo">
																									<img width="300" height="400" src="/img/20-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
																									<span class="product-title">
																										Digital Conversion Turntable
																									</span>
																								</a>
																								<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>118.00</bdi></span>
																							</li>

																							<li>
																								<a href="/proximo">
																									<img width="300" height="400" src="/img/18-300x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />		
																									<span class="product-title">
																										Crosley CR8005A-CB Cruiser Portable Turntable
																									</span>
																								</a>
																								<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>350.75</bdi></span>
																							</li>
																						</ul>
																					</aside>
																				</div>
																			</div>
																		</div>
																	</div>
	
																	<div class="vc_empty_space"   style="height: 1.6em">
																		<span class="vc_empty_space_inner"></span>
																	</div>
																</div>
															</div>
														</div>
													</div>

												</section> 
											<!-- </section> class="post_content" itemprop="articleBody"> -->
											</article>
										<!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-450 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article"> -->
										<section class="related_wrap related_wrap_empty"></section>

									</div> <!-- </div> class="content"> -->
								</div> <!-- </div> class="content_wrap"> -->
							</div>
						</div>
					</div>
				</section>
			</article>
		</div>
	</div>
</div>

<script>(function() {function maybePrefixUrlField() {
if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
	this.value = "http://" + this.value;
}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();
</script>

<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "http://localhost/wordpress/wp-admin/admin-ajax.php";
</script>
<script type="text/html" id="wpb-modifications">
</script>
<link href="https://fonts.googleapis.com/css?family=Hind:400%2C700%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

<script type="text/javascript">
(function () {
	var c = document.body.className;
	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
	document.body.className = c;
})();
</script>
<script type="text/javascript">
	if(typeof revslider_showDoubleJqueryError === "undefined") {
		function revslider_showDoubleJqueryError(sliderID) {
			var err = "<div class='rs_error_message_box'>";
			err += "<div class='rs_error_message_oops'>Oops...</div>";
			err += "<div class='rs_error_message_content'>";
			err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
			err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
			err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
			err += "</div>";
		err += "</div>";
			var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
		}
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/home.blade.php ENDPATH**/ ?>