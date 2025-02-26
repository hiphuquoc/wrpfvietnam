<section class="elementor-section elementor-top-section elementor-element elementor-element-6e6ccb7 elementor-section-stretched scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e6ccb7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-extended">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3453daf sc_inner_width_none sc_layouts_column_icons_position_left" data-id="3453daf" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-ba502bc sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="ba502bc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;rotateInDownLeft&quot;}" data-widget_type="trx_sc_title.default">
               <div class="elementor-widget-container">
                  <div id="trx_sc_title_1927942155"
                     class="sc_title sc_title_default">
                     <span class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Cập nhật</span>
                     <h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Tin tức mới nhất</span></h1>
                  </div>
                  <!-- /.sc_title -->		
               </div>
            </div>
            <div class="elementor-element elementor-element-4ed8098 sc_fly_static elementor-widget elementor-widget-spacer" data-id="4ed8098" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-dbb9345 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="dbb9345" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}" data-widget_type="trx_sc_blogger.default">
               <div class="elementor-widget-container">
                  <div id="trx_sc_blogger_1190476022" class="sc_blogger sc_blogger_default sc_blogger_default_classic">
                     <div class="sc_blogger_content sc_item_content sc_item_posts_container">

                        @foreach($blogs as $blog)
                           @php
                              $title   = $blog->seos[0]->infoSeo->title ?? '';
                              $url     = '/'.$blog->seos[0]->infoSeo->slug_full;
                           @endphp
                           <div class="sc_blogger_item sc_blogger_item_default sc_blogger_item_default_classic sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_image_position_left post-3050 post type-post status-publish format-standard has-post-thumbnail hentry category-karate tag-fights tag-ring tag-updates">
                              <div class="sc_blogger_item_body">
                                 <div class="post_featured with_thumb hover_dots sc_item_featured sc_blogger_item_featured trx_addons_inline_1177190236 post_featured_bg rumble_inline_1880539680" style="background-image: url('{{ \App\Helpers\Image::getUrlImageSmallByUrlImage($blog->seo->image) }}');">
                                    <div class="mask"></div>
                                    <a href="{{ $url }}" aria-hidden="true" class="icons">
                                       <span></span>
                                       <span></span>
                                       <span></span>
                                    </a>
                                 </div>
                                 <div class="sc_blogger_item_content entry-content trx_addons_inline_649601282">
                                    <h5 class="sc_blogger_item_title entry-title maxLine_2">
                                       <a href="{{ $url }}" rel="bookmark">
                                          {{ $title }}
                                       </a>
                                    </h5>
                                    <div class="post_meta sc_blogger_item_meta post_meta">
                                       <span class="post_meta_item post_date">{{ date('d \t\h\á\n\g m\, Y', strtotime($blog->seos[0]->infoSeo->created_at)) }}</span> 		
                                    </div>
                                    <div class="sc_blogger_item_excerpt maxLine_2">
                                       {!! !empty($blog->seos[0]->infoSeo->contents[0]->content) ? strip_tags($blog->seos[0]->infoSeo->contents[0]->content) : '' !!}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a508946 sc_inner_width_none sc_layouts_column_icons_position_left" data-id="a508946" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-c050517 sc_fly_static elementor-widget elementor-widget-spacer" data-id="c050517" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>