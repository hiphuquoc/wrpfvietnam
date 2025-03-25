@if(!empty($trainers)&&$trainers->isNotEmpty())
<div class="athleteGridBox">

    @foreach($trainers as $trainer)
        @php
            $image  = Storage::url('images/image-default-660x660.png');
            if(!empty($trainer->seo->image)){
                $image  = \App\Helpers\Image::getUrlImageSmallByUrlImage($trainer->seo->image);
            }
            $title  = $trainer->seo->title ?? '';
            $url    = $trainer->seo->slug_full ?? '';
        @endphp
        <div class="athleteGridBox_item">
            <a href="/{{ $url }}" class="athleteGridBox_item_image">
                <img src="{{ $image }}" alt="{{ $title }}" title="{{ $title }}" />
            </a>
            <div class="athleteGridBox_item_info">
                <div class="athleteGridBox_item_info_weight">
                    {{ $trainer->classWeight->name ?? '' }} kg
                </div>
                <a href="/{{ $url }}" class="athleteGridBox_item_info_title">
                    <h2 class="maxLine_1">{{ $title }}</h2>
                </a>
                <div class="athleteGridBox_item_info_list">
                    <div class="athleteGridBox_item_info_list_item">
                        <div><i class="fa-solid fa-venus-mars"></i> Giới tính:</div>
                        <div>{{ config('main_'.env('APP_NAME').'.sex.'.$trainer->sex.'.name') }}</div>
                    </div>
                    <div class="athleteGridBox_item_info_list_item">
                        <div><i class="fa-solid fa-cake-candles"></i> Năm sinh:</div>
                        <div class="maxLine_1">{{ $trainer->birth_day }}</div>
                    </div>
                    <div class="athleteGridBox_item_info_list_item">
                        <div><i class="fa-solid fa-star"></i> Team /VĐV tự do:</div>
                        <div class="maxLine_1">{{ $trainer->team }}</div>
                    </div>
                    {{-- <div class="athleteGridBox_item_info_list_item">
                        <div><i class="fa-solid fa-venus-mars"></i> Giới tính:</div>
                        <div>{{ $trainer->sex }}</div>
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach

</div>
@endif