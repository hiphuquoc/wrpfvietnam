@extends('layouts.wallpaper')
@push('cssFirstView')
    <!-- trường hợp là local thì dùng vite để chạy npm run dev lúc code -->
    @if(env('APP_ENV')=='local')
        @vite('resources/sources/main/trainer-first-view.scss')
    @else
        @php
            $manifest           = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFirstView       = $manifest['resources/sources/main/trainer-first-view.scss']['file'];
        @endphp
        <style type="text/css">
            {!! file_get_contents(asset('build/' . $cssFirstView)) !!}
        </style>
    @endif
@endpush
@push('headCustom')
<!-- ===== START:: SCHEMA ===== -->
    <!-- STRAT:: Title - Description - Social -->
    @php
        $highPrice          = 0;
        $lowPrice           = 0;
    @endphp
    @include('wallpaper.schema.social', ['item' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
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
    @include('wallpaper.schema.faq', ['data' => $item->faqs])
    <!-- END:: FAQ Schema -->
<!-- ===== END:: SCHEMA ===== -->
@endpush
@section('content')

    <div class="pagePageBox">
        <!-- breadcrumb -->
        @include('wallpaper.template.breadcrumb')
        <!-- tiêu đề -->
        <h1 class="titlePage">{{ $itemSeo->title ?? $item->seo->title ?? null }}</h1>
        <!-- Nội dung -->
        <div id="js_buildTocContentMain_element" class="contentBox">
            @include('wallpaper.teacherDetail.test')
        </div>
    </div>
@endsection
@push('modal')

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
        document.addEventListener("DOMContentLoaded", function () {
            const imageContainer = document.querySelector(".infoAthleteBox_info_image");
            const image = imageContainer.querySelector("img");
            const footer = document.querySelector("footer"); // Lấy footer

            const initialOffset = imageContainer.offsetTop; // Lưu vị trí ban đầu
            const imageWidth = image.offsetWidth; // Lưu width ban đầu
            let isFixed = false; // Trạng thái để tránh cập nhật liên tục

            window.addEventListener("scroll", function () {
                const scrollY = window.scrollY || window.pageYOffset;
                const footerOffset = footer.offsetTop; // Vị trí của footer
                const imageHeight = image.offsetHeight; // Chiều cao của ảnh
                const stopPosition = footerOffset - imageHeight - 120; // Vị trí cần dừng

                if (scrollY >= initialOffset && scrollY < stopPosition && !isFixed) {
                    // Khi cuộn đến vị trí ban đầu nhưng chưa chạm footer
                    isFixed = true;
                    image.style.position = "fixed";
                    image.style.top = "100px"; // Cố định vị trí top
                    image.style.left = imageContainer.getBoundingClientRect().left + "px"; // Giữ vị trí ngang
                    image.style.width = imageWidth + "px"; // Giữ nguyên width
                } else if ((scrollY < initialOffset || scrollY >= stopPosition) && isFixed) {
                    // Khi cuộn về trên hoặc chạm footer
                    isFixed = false;
                    image.style.position = "relative";
                    image.style.top = "0";
                    image.style.left = "0";
                }
            });
        });

    </script>
@endpush