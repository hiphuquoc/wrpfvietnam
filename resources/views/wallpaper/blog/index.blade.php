@extends('layouts.categoryBlog')
@push('cssFirstView')
    <!-- trường hợp là local thì dùng vite để chạy npm run dev lúc code -->
    @if(env('APP_ENV')=='local')
        @vite('resources/sources/main/category-blog-first-view.scss')
    @else
        @php
            $manifest           = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFirstView       = $manifest['resources/sources/main/category-blog-first-view.scss']['file'];
        @endphp
        <style type="text/css">
            {!! file_get_contents(asset('build/' . $cssFirstView)) !!}
        </style>
    @endif
@endpush
@push('headCustom')
{{-- <!-- ===== START:: SCHEMA ===== -->
    <!-- STRAT:: Organization Schema -->
    @include('wallpaper.schema.organization')
    <!-- END:: Organization Schema -->

    <!-- STRAT:: Article Schema -->
    @include('wallpaper.schema.article', compact('item'))
    <!-- END:: Article Schema -->

    <!-- STRAT:: Article Schema -->
    @include('wallpaper.schema.creativeworkseries', compact('item'))
    <!-- END:: Article Schema -->
    
    <!-- STRAT:: FAQ Schema -->
    @include('wallpaper.schema.itemlist', ['data' => $categories])
    <!-- END:: FAQ Schema -->

    <!-- STRAT:: Title - Description - Social -->
    @include('wallpaper.schema.social', ['item' => $item, 'lowPrice' => 1, 'highPrice' => 5])
    <!-- END:: Title - Description - Social -->

    <!-- STRAT:: FAQ Schema -->
    @include('wallpaper.schema.faq', ['data' => $item->faqs])
    <!-- END:: FAQ Schema -->
<!-- ===== END:: SCHEMA ===== --> --}}
@endpush
@section('content')
    <!-- tiêu đề -->
    <h1 class="titlePage">{{ $item->seos[0]->infoSeo->title ?? '' }}</h1>
    <!-- post -->
    <article class="post_item_single post_type_post post_format_ post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-fights tag-ring tag-updates">
        <!-- thông tin bài post -->
        <div class="header_content_wrap header_align_mc">
        <div class="post_featured">
            @php
               $title   = $item->seos[0]->infoSeo->title ?? '';
            @endphp
            <img fetchpriority="high" src="{{ \App\Helpers\Image::getUrlImageLargeByUrlImage($item->seo->image) }}" class="attachment-rumble-thumb-full size-rumble-thumb-full wp-post-image" alt="{{ $title }}" title="{{ $title }}" itemprop="url" decoding="async" />
        </div>
        <!-- .post_featured -->			
        <div class="post_header post_header_single entry-header">
            <div class="post_meta post_meta_categories">
                @if(!empty($item->categories)&&$item->categories->isNotEmpty())
                    <span class="post_meta_item post_categories">
                        @foreach($item->categories as $category)
                            @php
                                $title          = '';
                                $link           = '';
                                foreach($category->infoCategory->seos as $seo){
                                    if(!empty($seo->infoSeo->language)&&$seo->infoSeo->language==$language) {
                                        $title  = $seo->infoSeo->title;
                                        $link   = '/'.$seo->infoSeo->slug_full;
                                        break;
                                    }
                                }
                            @endphp
                            <a href="{{ $link }}">{{ $title }}</a>
                        @endforeach
                    </span> 	
                @endif	
            </div>
            <!-- .post_meta -->
            <div class="post_meta post_meta_other">
                <span class="post_meta_item post_date">{{ date('d \t\h\á\n\g m\, Y', strtotime($item->seos[0]->infoSeo->created_at)) }}</span> 		
            </div>
            <!-- .post_meta -->
        </div>
        <!-- .post_header -->
        </div>
        <!-- nội dung bài post -->
        <div class="post_content post_content_single entry-content" itemprop="mainEntityOfPage">
            {!! $htmlContent !!}
            <!-- tags & share -->
            <div class="post_meta post_meta_single">
                <div class="post_meta_item post_tags">
                    {{-- <span class="post_meta_label">Tags:</span> 
                    <a href="https://rumble.ancorathemes.com/tag/fights/" rel="tag">fights</a>, <a href="https://rumble.ancorathemes.com/tag/ring/" rel="tag">ring</a>, <a href="https://rumble.ancorathemes.com/tag/updates/" rel="tag">updates</a> --}}
                </div>
                <div class="post_meta_item post_share">
                    @php
                        $fullUrlBlog = env('APP_URL').'/'.$itemSeo->slug_full;
                    @endphp
                    <div class="socials_share socials_size_tiny socials_type_block socials_dir_horizontal socials_wrap"><span class="socials_caption inited">Chia sẻ:</span>
                        <span class="social_items inited">
                        <a class="social_item social_item_popup" href="https://twitter.com/intent/tweet?url={{ $fullUrlBlog }}">
                            <span class="social_icon social_icon_twitter-1 sc_icon_type_icons">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </a>
                        <a class="social_item social_item_popup" href="https://www.facebook.com/sharer.php?u={{ $fullUrlBlog }}">
                            <span class="social_icon social_icon_facebook sc_icon_type_icons">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                        </a>
                        {{-- <a class="social_item social_item_popup" href="#">
                            <span class="social_icon social_icon_05-pinterest-social-logo sc_icon_type_icons">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                        </a> --}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- .entry-content -->
    </article>
    {{-- <!-- author -->
    <div class="author_info scheme_dark author vcard" itemprop="author" itemscope="" itemtype="//schema.org/Person">
        <div class="author_avatar" itemprop="image">
        <img alt="" src="https://secure.gravatar.com/avatar/7459ee4bc8a32037334078349d0618d9?s=120&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/7459ee4bc8a32037334078349d0618d9?s=240&amp;d=mm&amp;r=g 2x" class="avatar avatar-120 photo" height="120" width="120" decoding="async">	
        </div>
        <div class="author_description">
            <h5 class="author_title" itemprop="name">
                Chủ tịch WrpfVienam	
            </h5>
            <div class="author_bio" itemprop="description">
                <p>Pellentesque blandit ipsum eget felis volutpat commodo. Praesent sodales magna ultrices massa gravida, eu rhoncus augue volutpat vestibulum ipsum.</p>
                <a class="author_link" href="https://rumble.ancorathemes.com/author/anc_admin/" rel="author">
                Xem thông tin của <span class="author_name">Đinh Kim Loan</span>			
            </a>
            </div>
        </div>
    </div> --}}
    <!-- bài viết liên quan -->
    @if(!empty($blogRelated)&&$blogRelated->isNotEmpty())
        <section class="related_wrap related_position_below_content related_style_wide">
            <h3 class="section_title related_wrap_title">
            <div class="related_subtitle">Bài viết liên quan</div>
            Có thể bạn thích
            </h3>
            <div class="columns_wrap posts_container columns_padding_bottom">
            
            @foreach($blogRelated as $related)
                @php
                    $title   = $related->seos[0]->infoSeo->title ?? '';
                    $url     = '/'.$related->seos[0]->infoSeo->slug_full;
                @endphp
                <div class="column-1_1">
                    <div id="post-176" class="related_item post_format_standard post-176 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-articles tag-news">
                        <div class="post_featured with_thumb hover_dots">
                            <img loading="lazy" src="{{ \App\Helpers\Image::getUrlImageSmallByUrlImage($related->seo->image) }}" class="attachment-rumble-thumb-med size-rumble-thumb-med wp-post-image" alt="{{ $title }}" title="{{ $title }}" decoding="async" />						
                            <div class="mask"></div>
                            <a href="{{ $url }}" aria-hidden="true" class="icons"><span></span><span></span><span></span></a>
                            <div class="post_meta">
                            <div class="post_categories">
                                <a href="{{ $url }}">
                                    {{ $related->categories[0]->infoCategory->seos[0]->infoSeo->title ?? '' }}
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="post_header entry-header">
                            <div class="post_meta">
                            <a href="{{ $url }}" class="post_meta_item post_date">{{ date('d \t\h\á\n\g m\, Y', strtotime($related->seos[0]->infoSeo->created_at)) }}</a>
                            </div>
                            <h5 class="post_title entry-title maxLine_2"><a href="{{ $url }}">{{ $title }}</a></h5>
                            <div class="related_content maxLine_3">
                                {!! !empty($related->seos[0]->infoSeo->contents[0]->content) ? strip_tags($related->seos[0]->infoSeo->contents[0]->content) : '' !!}        
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            </div>
        </section>
    @endif
    <!-- comment -->
    {{-- <section class="comments_wrap">
        <div id="comments" class="comments_list_wrap">
        <h3 class="section_title comments_list_title">
            2			Comments
        </h3>
        <ul class="comments_list">
            <li id="comment-2" class="comment even thread-even depth-1 comment_item">
                <div id="comment_body-2" class="comment_body">
                    <div class="comment_author_avatar"><img alt="" src="https://secure.gravatar.com/avatar/6b52dabb8dbd301dc04814e312ffd807?s=90&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/6b52dabb8dbd301dc04814e312ffd807?s=180&amp;d=mm&amp;r=g 2x" class="avatar avatar-90 photo" height="90" width="90" decoding="async"></div>
                    <div class="comment_content">
                    <div class="comment_info">
                        <h6 class="comment_author">
                            Ashley Moore								
                        </h6>
                        <div class="comment_posted">
                            <span class="comment_posted_label">Posted</span>
                            <span class="comment_date">
                            January 15, 2019									</span>
                            <span class="comment_time">
                            1:34 pm									</span>
                            <span class="comment_counters"><a href="#" class="comment_counters_item comment_counters_likes trx_addons_icon-heart-empty enabled inited" title="Like" data-commentid="2" data-likes="0" data-title-like="Like" data-title-dislike="Dislike"><span class="comment_counters_number">0</span><span class="comment_counters_label">Likes</span></a></span>
                        </div>
                    </div>
                    <div class="comment_text_wrap">
                        <div class="comment_text">
                            <p>Awesome! I enjoyed reading this article a lot, and will be waiting for updates</p>
                        </div>
                    </div>
                    <div class="reply comment_reply">
                        <a rel="nofollow" class="comment-reply-link" href="https://rumble.ancorathemes.com/effective-techniques-strategies-and-tips-from-the-best/?replytocom=2#respond" data-commentid="2" data-postid="146" data-belowelement="comment_body-2" data-respondelement="respond" data-replyto="Reply to Ashley Moore" aria-label="Reply to Ashley Moore">Reply</a>								
                    </div>
                    </div>
                </div>
                <ul class="children">
                    <li id="comment-3" class="comment byuser comment-author-anc_admin bypostauthor odd alt depth-2 comment_item">
                    <div id="comment_body-3" class="comment_body">
                        <div class="comment_author_avatar"><img alt="" src="https://secure.gravatar.com/avatar/7459ee4bc8a32037334078349d0618d9?s=90&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/7459ee4bc8a32037334078349d0618d9?s=180&amp;d=mm&amp;r=g 2x" class="avatar avatar-90 photo" height="90" width="90" decoding="async"></div>
                        <div class="comment_content">
                            <div class="comment_info">
                                <h6 class="comment_author">
                                <a href="https://rumble.ancorathemes.com/author/anc_admin/">Mark Rumble</a>								
                                </h6>
                                <div class="comment_posted">
                                <span class="comment_posted_label">Posted</span>
                                <span class="comment_date">
                                January 15, 2019									</span>
                                <span class="comment_time">
                                1:35 pm									</span>
                                <span class="comment_counters"><a href="#" class="comment_counters_item comment_counters_likes trx_addons_icon-heart-empty enabled inited" title="Like" data-commentid="3" data-likes="0" data-title-like="Like" data-title-dislike="Dislike"><span class="comment_counters_number">0</span><span class="comment_counters_label">Likes</span></a></span>
                                </div>
                            </div>
                            <div class="comment_text_wrap">
                                <div class="comment_text">
                                <p>Please subscribe for the regular updates!</p>
                                </div>
                            </div>
                            <div class="reply comment_reply">
                                <a rel="nofollow" class="comment-reply-link" href="https://rumble.ancorathemes.com/effective-techniques-strategies-and-tips-from-the-best/?replytocom=3#respond" data-commentid="3" data-postid="146" data-belowelement="comment_body-3" data-respondelement="respond" data-replyto="Reply to Mark Rumble" aria-label="Reply to Mark Rumble">Reply</a>								
                            </div>
                        </div>
                    </div>
                    </li>
                    <!-- #comment-## -->
                </ul>
                <!-- .children -->
            </li>
            <!-- #comment-## -->
        </ul>
        <!-- .comments_list -->
        </div>
        <!-- .comments_list_wrap -->
        <div class="comments_form_wrap">
        <div class="comments_form">
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="section_title comments_form_title">Leave a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/effective-techniques-strategies-and-tips-from-the-best/#respond" style="display:none;">Cancel reply</a></small></h3>
                <form action="https://rumble.ancorathemes.com/wp-comments-post.php" method="post" id="commentform" class="comment-form " novalidate="" data-inited-keypress="1">
                    <div class="comments_field comments_author"><label for="author" class="required">Name</label><span class="sc_form_field_wrap"><input id="author" name="author" type="text" placeholder="Your Name *" value="" aria-required="true" class="fill_inited"></span></div>
                    <div class="comments_field comments_email"><label for="email" class="required">E-mail</label><span class="sc_form_field_wrap"><input id="email" name="email" type="text" placeholder="Your E-mail *" value="" aria-required="true" class="fill_inited"></span></div>
                    <div class="comments_field comments_comment"><label for="comment" class="required">Comment</label><span class="sc_form_field_wrap"><textarea id="comment" name="comment" placeholder="Your comment *" aria-required="true" class="fill_inited"></textarea></span></div>
                    <div class="comments_field comments_i_agree_privacy_policy"><span class="sc_form_field_wrap"><input id="i_agree_privacy_policy" name="i_agree_privacy_policy" type="checkbox" value="1" class="inited"> <label for="i_agree_privacy_policy" class="optional">I agree that my submitted data is being collected and stored. For further details on handling user data, see our <a href="https://rumble.ancorathemes.com/privacy-policy/" target="_blank">Privacy Policy</a></label></span></div>
                    <p class="form-submit"><input name="submit" type="submit" id="send_comment" class="submit" value="Leave a comment" disabled="disabled"> <input type="hidden" name="comment_post_ID" value="146" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                </form>
            </div>
            <!-- #respond -->
        </div>
        </div>
        <!-- /.comments_form_wrap -->
    </section> --}}

@endsection
@push('modal')
    {{-- <!-- Message Add to Cart -->
    <div id="js_addToCart_idWrite">
        @include('wallpaper.cart.cartMessage', [
            'title'     => '',
            'option'    => null,
            'quantity'  => 0,
            'price'     => 0,
            'image'     => null,
            'language'  => $language
        ])
    </div> --}}
@endpush
@push('bottom')
    <!-- Header bottom -->
    {{-- @include('wallpaper.snippets.headerBottom') --}}
    <!-- === START:: Zalo Ring === -->
    {{-- @include('wallpaper.snippets.zaloRing') --}}
    <!-- === END:: Zalo Ring === -->
@endpush
@push('scriptCustom')
    <script type="text/javascript">
        
    </script>
@endpush
