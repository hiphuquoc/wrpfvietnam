<script>
	window.RS_MODULES = window.RS_MODULES || {};
	window.RS_MODULES.modules = window.RS_MODULES.modules || {};
	window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
	window.RS_MODULES.defered = false;
	window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
	window.RS_MODULES.type = 'compiled';
</script>

<script>var ajaxRevslider;function rsCustomAjaxContentLoadingFunction(){ajaxRevslider=function(obj){var content='',data={action:'revslider_ajax_call_front',client_action:'get_slider_html',token:'de9f156580',type:obj.type,id:obj.id,aspectratio:obj.aspectratio};jQuery.ajax({type:'post',url:'',dataType:'json',data:data,async:false,success:function(ret,textStatus,XMLHttpRequest){if(ret.success==true)content=ret.data;},error:function(e){console.log(e);}});return content;};var ajaxRemoveRevslider=function(obj){return jQuery(obj.selector+' .rev_slider').revkill();};if(jQuery.fn.tpessential!==undefined)if(typeof(jQuery.fn.tpessential.defaults)!=='undefined')jQuery.fn.tpessential.defaults.ajaxTypes.push({type:'revslider',func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});}var rsCustomAjaxContent_Once=false;if(document.readyState==="loading")document.addEventListener('readystatechange',function(){if((document.readyState==="interactive"||document.readyState==="complete")&&!rsCustomAjaxContent_Once){rsCustomAjaxContent_Once=true;rsCustomAjaxContentLoadingFunction();}});else{rsCustomAjaxContent_Once=true;rsCustomAjaxContentLoadingFunction();}</script>		<script>
	( function ( body ) {
		'use strict';
		body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
	} )( document.body );
</script>

<script type='text/javascript'>
	const lazyloadRunObserver = () => {
		const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
		const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
			entries.forEach( ( entry ) => {
				if ( entry.isIntersecting ) {
					let lazyloadBackground = entry.target;
					if( lazyloadBackground ) {
						lazyloadBackground.classList.add( 'e-lazyloaded' );
					}
					lazyloadBackgroundObserver.unobserve( entry.target );
				}
			});
		}, { rootMargin: '200px 0px 200px 0px' } );
		lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
			lazyloadBackgroundObserver.observe( lazyloadBackground );
		} );
	};
	const events = [
		'DOMContentLoaded',
		'elementor/lazyload/observe',
	];
	events.forEach( ( event ) => {
		document.addEventListener( event, lazyloadRunObserver );
	} );
</script>

<style id='rs-plugin-settings-inline-css' type='text/css'>
	#rev_slider_8_1_wrapper .custom.tparrows{cursor:pointer;background:#000;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;z-index:1000}#rev_slider_8_1_wrapper .custom.tparrows.rs-touchhover{background:#000}#rev_slider_8_1_wrapper .custom.tparrows:before{font-family:'revicons';font-size:15px;color:#fff;display:block;line-height:40px;text-align:center}#rev_slider_8_1_wrapper .custom.tparrows.tp-leftarrow:before{content:'\e81f'}#rev_slider_8_1_wrapper .custom.tparrows.tp-rightarrow:before{content:'\e81e'}
	.overley_wrapper rs-slide:before{content:'';  position:absolute;  top:0;  bottom:0;  left:0;  right:0;  background:rgba(22,15,15,0.75);  display:block;  z-index:15;  visibility:visible;  transition:background 1s cubic-bezier(0.4,0,1,1)}.overley_wrapper rs-slide[data-isactiveslide="true"]:before{background:rgba(50,62,69,0);  z-index:1}
	#rev_slider_9_2_wrapper .hesperiden.tparrows{cursor:pointer;background:215,35,35;width:40px;height:40px;position:absolute;display:block;z-index:1000;  border-radius:50%}#rev_slider_9_2_wrapper .hesperiden.tparrows.rs-touchhover{background:#000000}#rev_slider_9_2_wrapper .hesperiden.tparrows:before{font-family:'revicons';font-size:16px;color:#ffffff;display:block;line-height:40px;text-align:center}#rev_slider_9_2_wrapper .hesperiden.tparrows.tp-leftarrow:before{content:'\e82c';  margin-left:-3px}#rev_slider_9_2_wrapper .hesperiden.tparrows.tp-rightarrow:before{content:'\e82d';  margin-right:-3px}#rev_slider_9_2_wrapper .hesperiden .tp-tab{opacity:1; padding:10px; box-sizing:border-box; font-family:'Alatsi',sans-serif; border-bottom:0px solid rgba(229,229,229,0)}#rev_slider_9_2_wrapper .hesperiden .tp-tab-image{width:60px; height:60px; max-height:100%; max-width:100%; position:relative; display:inline-block; float:left}#rev_slider_9_2_wrapper .hesperiden .tp-tab-content{background:rgba(255,255,255,0);   position:relative;  padding:15px 15px 15px 85px; left:0px; overflow:hidden; margin-top:-15px;  box-sizing:border-box;  color:#333333;  display:inline-block;  width:100%;  height:100%; position:absolute}#rev_slider_9_2_wrapper .hesperiden .tp-tab-date{display:block; color:rgba(22,27,45,0.5); font-weight:500; font-size:14px; margin-bottom:0px}#rev_slider_9_2_wrapper .hesperiden .tp-tab-title{display:block;  text-align:left;  color:#24211c;  font-size:18px;  font-weight:500;  text-transform:none;  line-height:17px}#rev_slider_9_2_wrapper .hesperiden .tp-tab.rs-touchhover,#rev_slider_9_2_wrapper .hesperiden .tp-tab.selected{background:rgba(255,255,255,0)}#rev_slider_9_2_wrapper .hesperiden .tp-tab-mask{}@media only screen and (max-width:960px){}@media only screen and (max-width:768px){}
	#rev_slider_9_2_wrapper rs-loader.spinner2{background-color:#FFFFFF !important}
</style>

<script type="text/javascript" src="//rumble.ancorathemes.com/wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js?ver=6.7.20" async id="tp-tools-js"></script>
<script type="text/javascript" src="//rumble.ancorathemes.com/wp-content/plugins/revslider/sr6/assets/js/rs6.min.js?ver=6.7.20" async id="revmin-js"></script>
<script type="text/javascript" src="https://rumble.ancorathemes.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.24.6" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://rumble.ancorathemes.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.24.6" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
	/* <![CDATA[ */
	var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.24.6","is_static":false,"experimentalFeatures":{"e_nested_atomic_repeaters":true,"e_onboarding":true,"home_screen":true,"link-in-bio":true,"floating-buttons":true},"urls":{"assets":"https:\/\/rumble.ancorathemes.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"","uploadUrl":"https:\/\/rumble.ancorathemes.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"7a79f24e76"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"stretched_section_container":".page_wrap","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2904,"title":"Home%20Karate%20%E2%80%93%20Rumble","excerpt":"","featuredImage":false}};
	/* ]]> */
</script>

<script type="text/javascript" src="https://rumble.ancorathemes.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.6" id="elementor-frontend-js"></script>

<script id="rs-initialisation-scripts">
	var	tpj = jQuery;
	
	var	revapi8,revapi9;
	
	if(window.RS_MODULES === undefined) window.RS_MODULES = {};
	if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
	RS_MODULES.modules["revslider81"] = {once: RS_MODULES.modules["revslider81"]!==undefined ? RS_MODULES.modules["revslider81"].once : undefined, init:function() {
		window.revapi8 = window.revapi8===undefined || window.revapi8===null || window.revapi8.length===0  ? document.getElementById("rev_slider_8_1") : window.revapi8;
		if(window.revapi8 === null || window.revapi8 === undefined || window.revapi8.length==0) { window.revapi8initTry = window.revapi8initTry ===undefined ? 0 : window.revapi8initTry+1; if (window.revapi8initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider81"].init()}); return;}
		window.revapi8 = jQuery(window.revapi8);
		if(window.revapi8.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_8_1"); return;}
		revapi8.revolutionInit({
				revapi:"revapi8",
				DPR:"dpr",
				sliderLayout:"fullwidth",
				duration:"13000ms",
				visibilityLevels:"1240,1024,778,480",
				gridwidth:"1920,1024,778,480",
				gridheight:"1000,550,430,430",
				hideLayerAtLimit:769,
				lazyType:"all",
				spinner:"spinner0",
				perspective:600,
				perspectiveType:"local",
				keepBPHeight:true,
				editorheight:"1000,550,430,430",
				responsiveLevels:"1240,1024,778,480",
				ajaxUrl:"",
				progressBar:{disableProgressBar:true},
				navigation: {
					wheelCallDelay:1000,
					onHoverStop:false,
					touch: {
						touchenabled:true,
						touchOnDesktop:true
					},
					arrows: {
						enable:true,
						style:"custom",
						left: {
							v_align:"bottom",
							h_offset:65,
							v_offset:50
						},
						right: {
							h_align:"left",
							v_align:"bottom",
							h_offset:120,
							v_offset:50
						}
					},
					// arrows: {
					// 	enable:true,
					// 	style:"custom",
					// 	tmp:'<i class="fa-solid fa-arrow-left-long"></i>',
					// 	left: {
					// 		v_align:"bottom",
					// 		h_offset:65,
					// 		v_offset:50
					// 	},
					// 	right: {
					// 		h_align:"left",
					// 		v_align:"bottom",
					// 		h_offset:120,
					// 		v_offset:50,
					// 		tmp:'<i class="fa-solid fa-arrow-right-long"></i>'
					// 	}
					// },
				},
				viewPort: {
					global:true,
					globalDist:"-200px",
					enable:false
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
		});
		
	}} // End of RevInitScript
	
	if(window.RS_MODULES === undefined) window.RS_MODULES = {};
	if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
	RS_MODULES.modules["revslider92"] = {once: RS_MODULES.modules["revslider92"]!==undefined ? RS_MODULES.modules["revslider92"].once : undefined, init:function() {
		window.revapi9 = window.revapi9===undefined || window.revapi9===null || window.revapi9.length===0  ? document.getElementById("rev_slider_9_2") : window.revapi9;
		if(window.revapi9 === null || window.revapi9 === undefined || window.revapi9.length==0) { window.revapi9initTry = window.revapi9initTry ===undefined ? 0 : window.revapi9initTry+1; if (window.revapi9initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider92"].init()}); return;}
		window.revapi9 = jQuery(window.revapi9);
		if(window.revapi9.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_9_2"); return;}
		revapi9.revolutionInit({
				revapi:"revapi9",
				sliderType:"carousel",
				DPR:"dpr",
				duration:15000,
				visibilityLevels:"1240,1024,778,480",
				gridwidth:870,
				gridheight:480,
				lazyType:"smart",
				spinner:"spinner2",
				perspective:600,
				perspectiveType:"local",
				editorheight:"480,768,960,720",
				responsiveLevels:"1240,1024,778,480",
				stopAtSlide:1,
				stopAfterLoops:0,
				shuffle:true,
				stopLoop:true,
				carousel: {
					infinity:true,
					space:28
				},
				progressBar:{disableProgressBar:true},
				navigation: {
					mouseScrollNavigation:false,
					wheelCallDelay:1000,
					arrows: {
						enable:true,
						style:"hesperiden",
						left: {
							h_offset:30
						},
						right: {
							h_offset:30
						}
					},
					// arrows: {
					// 	enable:true,
					// 	style:"custom",
					// 	tmp:'<i class="fa-solid fa-arrow-left-long"></i>',
					// 	left: {
					// 		h_offset:30
					// 	},
					// 	right: {
					// 		h_offset:30,
					// 		tmp:'<i class="fa-solid fa-arrow-right-long"></i>'
					// 	}
					// },
					tabs: {
						enable:true,
						tmp:"<div class=\"tp-tab-content\">  <span class=\"tp-tab-date\">param1</span>  <span class=\"tp-tab-title\">title</span></div><div class=\"tp-tab-image\"></div>",
						style:"hesperiden",
						hide_onmobile:true,
						hide_under:"901px",
						v_offset:0,
						space:5,
						width:300,
						height:114,
						min_width:0,
						wrapper_padding:20,
						wrapper_color:"rgb(241,237,225)",
						visibleAmount:4,
						span:true,
						position:"outer-horizontal"
					}
				},
				viewPort: {
					global:true,
					globalDist:"-200px",
					enable:true,
					outof:"pause",
					visible_area:"20%"
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
		});
		
	}} // End of RevInitScript
	
	if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>

{{-- <div id="14" class="sc_layouts sc_layouts_popup sc_layouts_3081">
	<div data-elementor-type="cpt_layouts" data-elementor-id="3081" class="elementor elementor-3081">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-b13ae74 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b13ae74" data-element_type="section">
		<div class="elementor-container elementor-column-gap-extended">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e59d1e2 sc_inner_width_none sc_layouts_column_icons_position_left" data-id="e59d1e2" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-5296700 sc_fly_static elementor-widget elementor-widget-trx_widget_video" data-id="5296700" data-element_type="widget" data-widget_type="trx_widget_video.default">
					<div class="elementor-widget-container">
						<div id="trx_widget_video_378729508" class="widget_area sc_widget_video">
							<aside id="trx_widget_video_378729508_widget" class="widget widget_video">
							<div id="sc_video_1809059005" class="trx_addons_video_player without_cover">
								<div class="video_embed video_frame"><iframe title="Karate Academy Sydney Promo" src="https://player.vimeo.com/video/433493121?dnt=1&amp;app_id=122963" width="1278" height="719"  allow="autoplay; fullscreen" allowfullscreen></iframe></div>
							</div>
							</aside>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</div> --}}