
@if(!empty($blogFeatured)&&$blogFeatured->isNotEmpty())

   <aside id="trx_addons_widget_recent_posts-2" class="widget widget_recent_posts">
      <h5 class="widget_title">Bài viết nổi bật</h5>
      
      @foreach($blogFeatured as $featured)
         @if(!empty($featured->seos[0]->infoSeo))
            @php
               $class   = $loop->index==0 ? 'sticky' : '';
               $title   = $featured->seos[0]->infoSeo->title ?? '';
               $url     = '/'.$featured->seos[0]->infoSeo->slug_full;
            @endphp
            <article class="post_item with_thumb">
               <div class="post_thumb">
                  <a href="{{ $url }}">
                     <img loading="lazy" src="{{ \App\Helpers\Image::getUrlImageSmallByUrlImage($featured->seo->image) }}" class="attachment-rumble-thumb-tiny size-rumble-thumb-tiny wp-post-image" alt="{{ $title }}" title="{{ $title }}" decoding="async" />
                  </a>
               </div>
               <div class="post_content">
                  <h6 class="post_title maxLine_2"><a href="{{ $url }}">{{ $title }}</a></h6>
                  <div class="post_info">
                     <span class="post_info_item post_info_posted" style="color: #d72323;">
                        {{ date('d \t\h\á\n\g m\, Y', strtotime($featured->seos[0]->infoSeo->created_at)) }}
                     </span>
                  </div>
               </div>
            </article>
         @endif
      @endforeach
      
   </aside>

@endif