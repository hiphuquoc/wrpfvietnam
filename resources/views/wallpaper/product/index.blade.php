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
        $highPrice          = \App\Helpers\Number::getPriceOriginByCountry($item->price);
        $lowPrice           = $highPrice;
        foreach($item->prices as $price){
            $priceTmp       = \App\Helpers\Number::getPriceOriginByCountry($price->price);
            if($priceTmp<$lowPrice){
                $lowPrice   = $priceTmp;
                break;
            }
        }
    @endphp
    @include('wallpaper.schema.product', ['item' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
    <!-- END:: Product Schema -->

    <!-- STRAT:: Title - Description - Social -->
    @include('wallpaper.schema.social', ['item' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
    <!-- END:: Title - Description - Social -->

    <!-- STRAT:: Organization Schema -->
    @include('wallpaper.schema.organization')
    <!-- END:: Organization Schema -->

    <!-- STRAT:: Article Schema -->
    @include('wallpaper.schema.article', compact('item'))
    <!-- END:: Article Schema -->

    <!-- STRAT:: ImageObject Schema -->
    @php
        $dataImages = new \Illuminate\Database\Eloquent\Collection;
        $dataImages->push($item);
    @endphp
    @include('wallpaper.schema.imageObject', ['data' => $dataImages])
    <!-- END:: ImageObject Schema -->

    <!-- STRAT:: Article Schema -->
    @include('wallpaper.schema.creativeworkseries', compact('item'))
    <!-- END:: Article Schema -->

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

            <div class="distanceBetweenBox">
                <!-- Gallery và Product detail -->
                @include('wallpaper.product.body')
                
                <!-- related -->
                @include('wallpaper.product.related')
            </div>
            
        </div>
    </div>

    <!-- Loading -->
    <div class="loadingBox">
        <span class="loadingIcon"></span>
    </div>
@endsection
@push('modal')
    <!-- Message Add to Cart -->
    <div id="js_addToCart_idWrite">
        @include('wallpaper.cart.cartMessage', [
            'title'     => $item->name,
            'option'    => null,
            'quantity'  => 0,
            'price'     => 0,
            'image'     => null,
            'language'  => $language
        ])
    </div>

    {{-- @include('wallpaper.modal.viewImageFull')

    @include('wallpaper.modal.paymentMethod') --}}
@endpush
@push('bottom')
    <!-- === START:: Zalo Ring === -->
    {{-- @include('main.snippets.zaloRing') --}}
    <!-- === END:: Zalo Ring === -->
@endpush
@push('scriptCustom')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            loadProductPrice({{ $item->id }});
        });

        /* thay đổi option sản phẩm */
        function loadProductPrice(idProduct) {
            // Tạo URL với tham số truy vấn
            const url = new URL('{{ route("ajax.loadProductPrice") }}');
            const language = document.getElementById('language').value;
            url.searchParams.append('product_info_id', idProduct);
            url.searchParams.append('language', language);

            fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.content !== '') {
                    document.getElementById('js_loadProductPrice').innerHTML = data.content;
                }
                if (data.price_all_mobile !== '') {
                    document.getElementById('js_loadProductPrice_priceAllMobile').innerHTML = data.price_all_mobile;
                }
            })
            .catch(error => {
                console.error('Error fetching option product data:', error);
            });
        }


        /* thay đổi option sản phẩm */
        function setOptionProduct(element, idProduct, type) {
            // Xóa class 'selected' của tất cả anh chị em trong cùng parent
            const siblings = element.parentNode.children;
            for (let i = 0; i < siblings.length; i++) {
                siblings[i].classList.remove('selected');
            }
            element.classList.add('selected');

            // Lấy id của option vừa chọn
            const idKey = element.getAttribute('data-product_price_id');
            const elementPrice = document.getElementById(idKey);

            // Xóa class 'selected' của tất cả anh chị em trong cùng parent của giá
            const priceSiblings = elementPrice.parentNode.children;
            for (let i = 0; i < priceSiblings.length; i++) {
                priceSiblings[i].classList.remove('selected');
            }
            elementPrice.classList.add('selected');

            // Set lại sự kiện onclick cho nút Add to Cart
            document.getElementById('js_addToCart_button').setAttribute("onclick", `addToCart('${idProduct}', '${idKey}', '${type}');`);
        }

    </script>
@endpush