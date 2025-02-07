<!DOCTYPE html>
<html lang="{{ $language ?? 'vi' }}" dir="{{ config('language.'.$language.'.dir') }}">

<!-- === START:: Head === -->
<head>
    @include('wallpaper.snippets.head')
</head>
<!-- === END:: Head === -->

{{-- @include('wallpaper.categoryBlog.test') --}}

<!-- === START:: Body === -->

<body class="post-template-default single single-post postid-146 single-format-standard wp-custom-logo theme-rumble ua_chrome woocommerce-js tribe-js page-template-rumble body_tag scheme_default blog_mode_post body_style_wide is_single sidebar_show sidebar_right sidebar_small_screen_below trx_addons_present header_type_custom header_style_header-custom-809 header_position_default menu_style_top thumbnail_type_default post_header_position_under elementor-default elementor-kit-3991 desktop_layout e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
    <div class="body_wrap" id="js_openCloseModal_blur">
       <div class="page_wrap">
            <!-- menu header -->
            @include('wallpaper.categoryBlog.header')

            @include('wallpaper.categoryBlog.test')
            
            @include('wallpaper.home.footer')
       </div>
       
        <div class="bottom">
            <div id="smoothScrollToTop" class="gotoTop" onclick="javascript:smoothScrollToTop();" style="display: block;">
                <i class="fas fa-chevron-up"></i>
            </div>
            @stack('bottom')
        </div>

    </div>
    
    <!-- Modal -->
    @stack('modal')

    <!-- login form modal -->
    <div id="js_checkLoginAndSetShow_modal">
        <!-- tải ajaax checkLoginAndSetShow() -->
    </div>

    <!-- === START:: Scripts Default === -->
    @include('wallpaper.home.script')
    <!-- === END:: Scripts Default === -->

    <!-- === START:: Scripts Default === -->
    @include('wallpaper.snippets.scriptDefault')
    <!-- === END:: Scripts Default === -->

    <!-- === START:: Scripts Custom === -->
    @stack('scriptCustom')
    <!-- === END:: Scripts Custom === -->
    
</body>
<!-- === END:: Body === -->

</html>