@if(!empty($products)&&$products->isNotEmpty())
   <section class="elementor-section elementor-inner-section elementor-element elementor-element-f49b916 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
      <div class="elementor-container elementor-column-gap-extended">
         <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dc35fd1 sc_inner_width_none sc_layouts_column_icons_position_left">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-d059b83 sc_fly_static elementor-widget elementor-widget-trx_sc_title animated zoomIn">
                  <div class="elementor-widget-container">
                     <div id="trx_sc_title_1080690013" class="sc_title sc_title_default">
                        <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Cửa hàng</span>
                        <h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Sản phẩm chất lượng</span></h1>
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

                           @foreach($products as $product)
                              @include('wallpaper.product.item', compact('product'))
                           @endforeach

                        </div>
                     </div>

                  </div>
               </div>

               <div class="elementor-element elementor-element-75a3608 sc_fly_static elementor-widget elementor-widget-trx_sc_button">
                  <div class="elementor-widget-container">
                     <div id="trx_sc_button_162523968" class="sc_item_button sc_button_wrap sc_align_center">
                        <a href="/cua-hang" class="sc_button sc_button_default sc_button_size_large sc_button_icon_left color_style_link2">
                           <span class="sc_button_text"><span class="sc_button_title">Xem thêm</span></span><!-- /.sc_button_text -->
                        </a>
                        <!-- /.sc_button -->
                     </div>
                     <!-- /.sc_item_button -->		
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endif