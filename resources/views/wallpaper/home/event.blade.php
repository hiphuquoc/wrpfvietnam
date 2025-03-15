<section class="boxHomeItem" data-id="5d3e7e4" data-element_type="section">
   <div class="elementor-container elementor-column-gap-extended">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a77ad28 sc_inner_width_none sc_layouts_column_icons_position_left" data-id="a77ad28" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-fb29680 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="fb29680" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="trx_sc_title.default">
               <div class="elementor-widget-container">
                  <div id="trx_sc_title_957819429"
                     class="sc_title sc_title_default">
                     <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Sự kiện</span>
                     <h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                        <span class="sc_item_title_text">Các giải đấu<br> Sắp được tổ chức</span>
                     </h1>
                  </div>
                  <!-- /.sc_title -->		
               </div>
            </div>
            <div class="elementor-element elementor-element-38bb30c sc_fly_static elementor-widget elementor-widget-spacer" data-id="38bb30c" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-0217818 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="0217818" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="trx_sc_blogger.default">
               <div class="elementor-widget-container">
                  <div  id="trx_sc_blogger_196872966"		class="sc_blogger sc_blogger_default sc_blogger_default_over_bottom">
                     <div class="sc_blogger_columns_wrap sc_item_columns sc_item_posts_container trx_addons_columns_wrap columns_padding_bottom">
                        @foreach($events as $event)
                           @php
                              $title      = $event->seos[0]->infoSeo->title ?? '';
                              $url        = '/'.$event->seos[0]->infoSeo->slug_full;

                              // Dùng regex để tách tiêu đề và thời gian
                              preg_match('/^(.*?)\s*\((\d{2}[-\/]\d{2}[-\/]\d{4})\s*-\s*(\d{2}[-\/]\d{2}[-\/]\d{4})\)$/', $title, $matches);

                              $title      = !empty($matches[1]) ? trim($matches[1]) : $title;
                              $timeEvent  = (!empty($matches[2]) && !empty($matches[3])) ? $matches[2] . ' - ' . $matches[3] : '';

                              $htmlTimeEvent = '';
                              if (!empty($timeEvent)) {
                                 $htmlTimeEvent = '<span class="tribe-event-date-start">'.trim($matches[2]).'</span> - ';
                                 $htmlTimeEvent .= '<span class="tribe-event-date-end">'.trim($matches[3]).'</span>';
                              }
                           @endphp
                           <div class="trx_addons_column-1_3">
                              <div class="sc_blogger_item sc_blogger_item_default sc_blogger_item_default_over_bottom sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_on_plate sc_blogger_item_image_position_top post-4548 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-wrestling cat_wrestling" data-item-number="1">
                                 <div class="sc_blogger_item_body">
                                    <div class="post_featured with_thumb hover_dots sc_item_featured sc_blogger_item_featured post_featured_bg" data-ratio="3:4" style="background-image:url('{{ \App\Helpers\Image::getUrlImageLargeByUrlImage($event->seo->image) }}');">
                                       <div class="mask"></div>
                                       <a href={{ $url }}  aria-hidden="true" class="icons">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                       </a>
                                       <div class="post_info_bc">
                                          <h5 class="sc_blogger_item_title entry-title"  data-item-number="1">
                                             <a href={{ $url }} rel="bookmark">{{ $title }}</a>
                                          </h5>
                                          <div class="post_meta sc_blogger_item_meta post_meta">
                                             <span class="post_meta_item post_date">
                                                {!! $htmlTimeEvent !!}
                                             </span> 		
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-c75f47f sc_fly_static elementor-widget elementor-widget-spacer" data-id="c75f47f" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-d50ce42 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_button" data-id="d50ce42" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="trx_sc_button.default">
               <div class="elementor-widget-container">
                  <div id="trx_sc_button_657178319"	class="sc_item_button sc_button_wrap sc_align_center">
                     <a href="/giai-dau" class="sc_button sc_button_default sc_button_size_large sc_button_icon_left color_style_link2">
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