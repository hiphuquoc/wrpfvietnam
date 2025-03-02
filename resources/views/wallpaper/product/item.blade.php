@foreach($product->seos as $seo)
    @if(!empty($seo->infoSeo->language)&&$seo->infoSeo->language==$language)
        @php
            $title   = $seo->infoSeo->title;
            $url     = '/'.$seo->infoSeo->slug_full;
            /* hình ảnh */
            $image   = config('image.default');
            foreach($product->prices as $price){
                foreach($price->wallpapers as $wallpaper){
                    if(!empty($wallpaper->infoWallpaper)){
                    $image = \App\Helpers\Image::getUrlImageSmallByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                    break 2;
                    }
                }
            }
            /* giá */
            $min           = $product->price;
            foreach($product->prices as $price){
                if(!empty($price->price)&&$price->price<$min) $min = $price->price;
            }
            $priceMin      = \App\Helpers\Number::getPriceOriginByCountry($min);
            $arrayPriceMin = \App\Helpers\Number::getPriceByLanguage($priceMin, $language);
            $priceMin      = number_format($arrayPriceMin['number']) . ' ' . $arrayPriceMin['currency'];
            $priceMax      = \App\Helpers\Number::getPriceOriginByCountry($product->price);
            $arrayPriceMax = \App\Helpers\Number::getPriceByLanguage($priceMax, $language);
            $priceMax      = number_format($arrayPriceMax['number']) . ' ' . $arrayPriceMax['currency'];
        @endphp
        <div class="productGridBox_item">
            <a href="{{ $url }}" class="productGridBox_item_image">
                <img src="{{ $image }}" alt="{{ $title }}" title="{{ $title }}" loading="lazy" />
            </a>
            <div class="productGridBox_item_content">

                <a href="{{ $url }}" class="productGridBox_item_content_title">
                    <h3 class="maxLine_2">{{ $title }}</h3>
                </a>

                <div class="productGridBox_item_content_price">
                    {!! $priceMin !!} – {!! $priceMax !!}
                </div>

            </div>
        </div>
        @break
    @endif
@endforeach