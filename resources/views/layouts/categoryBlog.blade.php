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

   <!-- input hidden -->
   <input type="hidden" id="language" name="language" value="{{ $language ?? '' }}" />

   <!-- body -->
   <div class="body_wrap" id="js_openCloseModal_blur">
      <div class="page_wrap">
            <!-- menu header -->
            @include('wallpaper.snippets.headerTop')

            <div class="page_content_wrap">
               <div class="content_wrap">
            
                  <!-- breadcrumb -->
                  @include('wallpaper.template.breadcrumb')

                  <!-- box nội dung -->
                  <div class="content">
                        
                     @yield('content')
                        
                  </div>
            
                  <!-- sider bar -->
                  <div class="sidebar widget_area right sidebar_below scheme_" role="complementary">
                     <div class="sidebar_inner">
                        <!-- tìm kiếm -->
                        @include('wallpaper.categoryBlog.search')
            
                        <!-- bài viết mới nhất -->
                        @include('wallpaper.categoryBlog.newBlogs')
            
                        <!-- danh sách categories -->
                        @include('wallpaper.categoryBlog.categoryList')
            
                        <!-- comments -->
                        {{-- <aside id="recent-comments-3" class="widget widget_recent_comments">
                           <h5 class="widget_title">Comments</h5>
                           <ul id="recentcomments">
                              <li class="recentcomments"><span class="comment-author-link">Charles Martinez</span> on <a href="https://rumble.ancorathemes.com/the-best-boxers-in-their-weight-categories/#comment-4">The Best Boxers in Their Weight Categories</a></li>
                              <li class="recentcomments"><span class="comment-author-link">Mark Rumble</span> on <a href="https://rumble.ancorathemes.com/effective-techniques-strategies-and-tips-from-the-best/#comment-3">Effective Strategies and Tips from the Best</a></li>
                              <li class="recentcomments"><span class="comment-author-link">Ashley Moore</span> on <a href="https://rumble.ancorathemes.com/effective-techniques-strategies-and-tips-from-the-best/#comment-2">Effective Strategies and Tips from the Best</a></li>
                           </ul>
                        </aside> --}}
            
                        <!-- lịch -->
                        {{-- <aside id="trx_addons_widget_calendar-3" class="widget widget_calendar">
                           <h5 class="widget_title">Calendar</h5>
                           <table id="wp-calendar" class="wp-calendar-table">
                              <caption>January 2025</caption>
                              <thead>
                                 <tr>
                                    <th scope="col" title="Monday">Mon</th>
                                    <th scope="col" title="Tuesday">Tue</th>
                                    <th scope="col" title="Wednesday">Wed</th>
                                    <th scope="col" title="Thursday">Thu</th>
                                    <th scope="col" title="Friday">Fri</th>
                                    <th scope="col" title="Saturday">Sat</th>
                                    <th scope="col" title="Sunday">Sun</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td colspan="2" class="pad">&nbsp;</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                 </tr>
                                 <tr>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td id="today">18</td>
                                    <td>19</td>
                                 </tr>
                                 <tr>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                 </tr>
                                 <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td class="pad" colspan="2">&nbsp;</td>
                                 </tr>
                              </tbody>
                           </table>
                           <nav aria-label="Previous and next months" class="wp-calendar-nav">
                              <span class="wp-calendar-nav-prev"><a href="https://rumble.ancorathemes.com/2020/10/">« Oct</a></span>
                              <span class="pad">&nbsp;</span>
                              <span class="wp-calendar-nav-next">&nbsp;</span>
                           </nav>
                        </aside> --}}
            
                        <!-- danh sách tags -->
                        {{-- @include('wallpaper.categoryBlog.tagList') --}}
            
                        <!-- banner quảng cáo -->
                        @include('wallpaper.categoryBlog.banner')
            
                        <!-- đăng ký bản tin -->
                        @include('wallpaper.categoryBlog.newLetter')
                        
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>

            {{-- <div class="page_content_wrap">
               <div class="content_wrap">
                  <div class="content">
                        <article class="post_item_single post_type_page post-2904 page type-page status-publish hentry">
                           <div class="post_content entry-content">
                              <div data-elementor-type="wp-page" class="elementor elementor-2904">

                                    

                              </div>
                           </div>
                        </article>
                  </div>
               </div>
            </div> --}}

            
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