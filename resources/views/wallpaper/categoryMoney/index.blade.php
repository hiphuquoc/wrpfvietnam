@extends('layouts.wallpaper')
@push('cssFirstView')
    <!-- trường hợp là local thì dùng vite để chạy npm run dev lúc code -->
    @if(env('APP_ENV')=='local')
        @vite('resources/sources/main/product-first-view.scss')
    @else
        @php
            $manifest           = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFirstView       = $manifest['resources/sources/main/product-first-view.scss']['file'];
        @endphp
        <style type="text/css">
            {!! file_get_contents(asset('build/' . $cssFirstView)) !!}
        </style>
    @endif
@endpush
@push('headCustom')
<!-- ===== START:: SCHEMA ===== -->
    <!-- STRAT:: Product Schema -->
    @php
        $highPrice          = 0;
        foreach($products as $wallpaper){
            if($wallpaper->price>$highPrice) $highPrice = $wallpaper->price;
        }
        $lowPrice           = $highPrice;
        foreach($products as $wallpaper){
            $priceTmp       = \App\Helpers\Number::getPriceOriginByCountry($wallpaper->price);
            if($priceTmp<$lowPrice) $lowPrice = $priceTmp;
        }
    @endphp
    @include('wallpaper.schema.product', ['item' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
    <!-- END:: Product Schema -->

    <!-- STRAT:: Title - Description - Social -->
    @include('wallpaper.schema.social', ['item' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
    <!-- END:: Title - Description - Social -->

    <!-- STRAT:: Title - Description - Social -->
    @include('wallpaper.schema.breadcrumb', compact('breadcrumb'))
    <!-- END:: Title - Description - Social -->

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
    @include('wallpaper.schema.itemlist', ['data' => $products])
    <!-- END:: FAQ Schema -->

    <!-- STRAT:: ImageObject Schema -->
    @include('wallpaper.schema.imageObject', ['data' => $products])
    <!-- END:: ImageObject Schema -->

    <!-- STRAT:: FAQ Schema -->
    @include('wallpaper.schema.faq', ['data' => $item->faqs])
    <!-- END:: FAQ Schema -->
<!-- ===== END:: SCHEMA ===== -->
@endpush
@section('content')
    <div class="pageProduct">
        
        <!-- content -->
        <div class="articleBox maxContent-1200">

            <!-- breadcrumb -->
            @include('wallpaper.template.breadcrumb')

            <!-- tiêu đề -->
            <h1 class="titlePage">{{ $itemSeo->title ?? $item->seo->title ?? null }}</h1>

            <div class="distanceBetweenBox">
                <div class="productGridBox">
                    @if(!empty($products)&&$products->isNotEmpty())

                        @foreach($products as $product)
                        @include('wallpaper.product.item', compact('product'))
                        @endforeach
                    @else 

                        <div>Hiện không có sản phảm nào trong danh mục này!</div>
                    @endif

                 </div>

                <!-- Nội dung -->
                @if(!empty($itemSeo->contents))
                    <div id="js_buildTocContentMain_element" class="distanceBetween contentElement maxContent-1200">
                        <div class="contentBox">
                            <div id="tocContentMain">{!! $dataContent['toc_content'] !!}</div>
                            {!! Blade::render($dataContent['content']) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('modal')
    {{-- <!-- Message Add to Cart -->
    <div id="js_addToCart_idWrite">
        @include('wallpaper.cart.cartMessage', [
            'title'     => null,
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
    {{-- @include('main.snippets.zaloRing') --}}
    <!-- === END:: Zalo Ring === -->
@endpush
@push('scriptCustom')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            /* build tocContent khi scroll gần tới */
            const elementBuildTocContent = $('#js_buildTocContentMain_element');
            /* build toc content */
            if(elementBuildTocContent.length){
                if (!elementBuildTocContent.hasClass('loaded')) {
                    buildTocContentMain('js_buildTocContentMain_element');
                }
            }    
        });
    </script>
@endpush