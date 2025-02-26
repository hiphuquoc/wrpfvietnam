@extends('layouts.categoryBlog')
@push('cssFirstView')
    <!-- trường hợp là local thì dùng vite để chạy npm run dev lúc code -->
    @if(env('APP_ENV')=='local')
        @vite('resources/sources/main/home-first-view.scss')
    @else
        @php
            $manifest           = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFirstView       = $manifest['resources/sources/main/home-first-view.scss']['file'];
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

    @if(!empty($blogs)&&$blogs->isNotEmpty())
        <div class="posts_container">

            @foreach($blogs as $blog)
                @if(!empty($blog->seos[0]->infoSeo))
                    @php
                        $class   = $loop->index==0 ? 'sticky' : '';
                        $title   = $blog->seos[0]->infoSeo->title ?? '';
                        $url     = '/'.$blog->seos[0]->infoSeo->slug_full;
                    @endphp
                    <article class="post_item post_layout_excerpt post_format_standard post-3126 post type-post status-publish format-standard has-post-thumbnail hentry category-muai-thai animated bounceInUp normal {{ $class }}">
                        <div class="post_featured with_thumb hover_dots">
                        <img loading="lazy" src="{{ \App\Helpers\Image::getUrlImageLargeByUrlImage($blog->seo->image) }}" class="attachment-rumble-thumb-big size-rumble-thumb-big wp-post-image" alt="{{ $title }}" title="{{ $title }}" decoding="async">						
                        <div class="mask"></div>
                        <!-- dots when hover -->
                        <a href="{{ $url }}" aria-hidden="true" class="icons">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        </div>
                        <div class="post_header entry-header">
                        <div class="post_meta">
                            <span class="post_meta_item post_categories">
                                <a href="/{{ $blog->categories[0]->infoCategory->seos[0]->infoSeo->slug_full ?? '' }}" rel="category tag">
                                    {{ $blog->categories[0]->infoCategory->seos[0]->infoSeo->title ?? '' }}
                                </a>
                            </span> 
                            <span class="post_meta_item post_date">
                                <span>{{ date('d \t\h\á\n\g m\, Y', strtotime($blog->seos[0]->infoSeo->created_at)) }}</span>
                            </span> 		
                        </div>
                        <!-- .post_meta -->
                        <h2 class="post_title entry-title"><a href="{{ $url }}" rel="bookmark">{{ $title }}</a></h2>
                        </div>
                        <!-- .post_header -->
                        <div class="post_content entry-content">
                        <div class="post_content_inner maxLine_3">
                            {!! !empty($blog->seos[0]->infoSeo->contents[0]->content) ? strip_tags($blog->seos[0]->infoSeo->contents[0]->content) : '' !!}
                        </div>
                        </div>
                        <!-- .entry-content -->
                    </article>
                @endif
            @endforeach

        </div>
    @endif

    <!-- button load more -->
    {{-- <div class="nav-links-more">
    <a class="nav-load-more" href="#" data-page="1" data-max-page="6"><span>Load more posts</span></a>
    </div> --}}

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
