@if(!empty($related)&&$related->isNotEmpty())
    <section class="elementor-section elementor-inner-section elementor-element elementor-element-f49b916 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dc35fd1 sc_inner_width_none sc_layouts_column_icons_position_left">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-d059b83 sc_fly_static elementor-widget elementor-widget-trx_sc_title animated zoomIn">
                    <div class="elementor-widget-container">
                    <div id="trx_sc_title_1080690013" class="sc_title sc_title_default">
                        <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Sản phẩm liên quan</span>
                        <h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Có thể bạn sẽ thích</span></h1>
                    </div>
                    <!-- /.sc_title -->		
                    </div>
                </div>
                <div class="elementor-element elementor-element-8ff15ca sc_fly_static elementor-widget elementor-widget-spacer">
                    <div class="elementor-widget-container">
                    <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                    </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-fb2b381 sc_fly_static elementor-widget elementor-widget-shortcode animated slideInUp">
                    <div class="elementor-widget-container">

                        <!-- danh sách sản phẩm -->
                        <div class="elementor-shortcode">
                            <div class="productGridBox">

                                @foreach($related as $product)
                                    @include('wallpaper.product.item', compact('product'))
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif