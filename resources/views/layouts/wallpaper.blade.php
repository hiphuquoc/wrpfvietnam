<!DOCTYPE html>
<html lang="{{ $language ?? 'vi' }}" dir="{{ config('language.'.$language.'.dir') }}">

<!-- === START:: Head === -->
<head>
    @include('wallpaper.snippets.head')
</head>
<!-- === END:: Head === -->

<!-- === START:: Body === -->
<body  class="page-template-default page page-id-2904 wp-custom-logo theme-rumble ua_chrome woocommerce-no-js tribe-no-js page-template-rumble body_tag scheme_default blog_mode_page body_style_fullwide is_single sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-3219 header_position_over menu_style_top no_layout elementor-default elementor-kit-3991 elementor-page elementor-page-2904">
    
    <!-- input hidden -->
   <input type="hidden" id="language" name="language" value="{{ $language ?? '' }}" />
    
    <div class="body_wrap" id="js_openCloseModal_blur">
        
        <div class="page_wrap">
            <!-- menu header -->
            @include('wallpaper.snippets.headerTop')

            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content" style="border: none !important;background: none !important;">
                        <article class="post_item_single post_type_page post-2904 page type-page status-publish hentry">
                            <div class="post_content entry-content">
                                <div data-elementor-type="wp-page" class="elementor elementor-2904">

                                    @yield('content')

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            
            @include('wallpaper.snippets.footer')
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