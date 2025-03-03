<!-- Product Detail Box -->
<div class="pageProductDetailBox">
    <div class="pageProductDetailBox_left distanceBetweenBox">
        <!-- Gallery Desktop -->
        @include('wallpaper.product.gallery', ['prices' => $item->prices])
        <!-- Nội dung -->
        @php
            $xhtmlContent = '';
            foreach($itemSeo->contents as $content) $xhtmlContent .= $content->content;
        @endphp
    </div>
    <div class="pageProductDetailBox_right">
        <div class="productDetailBox">
            <div class="productDetailBox_detail distanceBetweenSubbox">
                <!-- id hidden -->
                <input type="hidden" id="product_info_id" name="product_info_id" value="{{ $item->id ?? null }}" />
                <!-- tiêu đề -->
                <h1 class="titlePage">{{ $itemSeo->title }}</h1>
                <!-- rating -->
                @include('wallpaper.product.ratingBox')
                <div class="distanceBetweenSubbox" style="gap:1.5rem;">
                    <!-- mô tả sản phẩm -->
                    <div id="js_viewMoreContent_content" class="productDetailBox_detail_description">
                        {!! $itemSeo->seo_description ?? '' !!}
                    </div>

                    <!-- option -->
                    <div class="productDetailBox_detail_option hide-991">
                        @include('wallpaper.product.optionBox', compact('item'))
                    </div>
                    <!-- giá -->
                    <div id="js_loadProductPrice" class="productDetailBox_detail_price hide-991">
                        <!-- load ajax (loadProductPrice) nên truyền collection rỗng -->
                        @include('wallpaper.product.priceBox', [
                            'item'      => new \Illuminate\Database\Eloquent\Collection,
                            'prices'    => new \Illuminate\Database\Eloquent\Collection,
                        ])
                    </div>

                    <!-- số lượng -->
                    <div class="productDetailBox_detail_quantity">
                        <div class="productDetailBox_detail_quantity_text">Số lượng</div> 
                        <div class="productDetailBox_detail_quantity_box">
                            <div class="productDetailBox_detail_quantity_box_minus"><i class="fa-solid fa-minus"></i></div>
                            <div class="productDetailBox_detail_quantity_box_number">
                                <input id="js_addToCart_quantity" type="number" name="quantity" value="1" min="1" max="999" />
                            </div>
                            <div class="productDetailBox_detail_quantity_box_plus"><i class="fa-solid fa-plus"></i></div>
                        </div>
                        <div class="productDetailBox_detail_quantity_note">6809 sản phẩm có sẵn</div>
                    </div>

                    <!-- button đặt hàng -->
                    <div class="productDetailBox_detail_checkout">
                        <div class="productDetailBox_detail_checkout_button">
                            <div class="show-991">
                                <!-- load ajax (loadProductPrice) -->
                                <div id="js_loadProductPrice_priceAllMobile" class="priceMobile">--</div>
                            </div>
                            @php
                                $buttonNameCart     = config('language.'.$language.'.data.add_to_cart');
                                $altCart            = \App\Helpers\Charactor::concatenateWords([$buttonNameCart, $itemSeo->title], $language);
                                $buttonNamePayment  = config('language.'.$language.'.data.buy_now');
                                $altPayment         = \App\Helpers\Charactor::concatenateWords([$buttonNamePayment, $itemSeo->title], $language);
                                /* chuyển array price sang key all */
                                $keyPriceAll        = [];
                                foreach($item->prices as $price) $keyPriceAll[]  = $price->id;
                                $keyPriceAll        = implode('-', $keyPriceAll);
                            @endphp
                            <button id="js_addToCart_button" type="button" class="button secondary" onClick="addToCart('{{ $item->id }}', '{{ $keyPriceAll }}', 'all');" aria-label="{{ $altCart }}">
                                <img src="{{ Storage::url('images/svg/shopping-cart.png') }}" alt="{{ $altCart }}" title="{{ $altCart }}" />
                                <div class="maxLine_1">{{ $buttonNameCart }}</div>
                            </button>
                            <button type="button" class="button" onClick="openCloseModal('modalPaymentMethod');" aria-label="{{ $altPayment }}">
                                <img src="{{ Storage::url('images/svg/money-bill-wave.png') }}" alt="{{ $altPayment }}" title="{{ $altPayment }}" />
                                <div class="maxLine_1">{{ $buttonNamePayment }}</div>
                            </button>
                        </div>
                    </div>

                    <!-- giải thích thanh toán và nhận ảnh => desktop -->
                    <div class="productDetailBox_detail_note">
                        @php
                            $htmlCatorogy   = '';
                            $tmp            = [];
                            foreach($item->categories as $category){
                                if(!empty($category->infoCategory)){
                                    $tmp[]  = '<span><a href="'.$category->infoCategory->seos[0]->infoSeo->slug_full.'">'.$category->infoCategory->seos[0]->infoSeo->title.'</a></span>';
                                }
                            }
                            $htmlCategory   = implode(', ', $tmp);
                        @endphp    
                        @if(!empty($htmlCategory))
                            <div class="productDetailBox_detail_note_item">
                                Danh mục: {!! $htmlCategory !!}.
                            </div>
                        @endif
                        @php
                            $htmlTag        = '';
                            $tmp            = [];
                            foreach($item->tags as $tag){
                                if(!empty($tag->infoTag)){
                                    $tmp[]  = '<span><a href="'.$tag->infoTag->seos[0]->infoSeo->slug_full.'">'.$tag->infoTag->seos[0]->infoSeo->title.'</a></span>';
                                }
                            }
                            $htmlTag        = implode(', ', $tmp);
                        @endphp    
                        @if(!empty($htmlTag))
                            <div class="productDetailBox_detail_note_item">
                                Tags: {!! $htmlTag !!}.
                            </div>
                        @endif
                        <div class="productDetailBox_detail_note_item">
                            Mã sản phẩm: <span>#7346355</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- một thẻ div bao bọc để tránh bị display: flex; gap... -->
<div class="contentBox">
    <h2 style="margin-top:0 !important;">Thông tin sản phẩm:</h2>
    {!! $xhtmlContent !!}
</div>

@pushonce('scriptCustom')
    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function() {
            const quantityBox = document.querySelector('.productDetailBox_detail_quantity_box');
            const input = quantityBox.querySelector('input[name="quantity"]');
            const minusBtn = quantityBox.querySelector('.productDetailBox_detail_quantity_box_minus');
            const plusBtn = quantityBox.querySelector('.productDetailBox_detail_quantity_box_plus');
            
            minusBtn.addEventListener('click', function() {
                let currentValue = parseInt(input.value, 10);
                if (currentValue > parseInt(input.min, 10)) {
                    input.value = currentValue - 1;
                }
            });

            plusBtn.addEventListener('click', function() {
                let currentValue = parseInt(input.value, 10);
                if (currentValue < parseInt(input.max, 10)) {
                    input.value = currentValue + 1;
                }
            });
        });

    </script>
@endpushonce