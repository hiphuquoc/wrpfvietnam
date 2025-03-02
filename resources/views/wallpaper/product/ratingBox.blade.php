<div class="productDetailBox_detail_rating">
    <div class="ratingBox">
        @if(!empty($item->seo->rating_aggregate_star) && !empty($item->seo->rating_aggregate_count))
            <div class="ratingBox_star">
                <span class="ratingBox_star_on"><i class="fas fa-star"></i></span>
                <span class="ratingBox_star_on"><i class="fas fa-star"></i></span>
                <span class="ratingBox_star_on"><i class="fas fa-star"></i></span>
                <span class="ratingBox_star_on"><i class="fas fa-star"></i></span>
                <span class="ratingBox_star_on"><i class="fas fa-star-half-alt"></i></span>
            </div>
            <div class="ratingBox_text">
                <span>{{ $item->seo->rating_aggregate_star }}</span> sao / 
                <a href="#">{{ $item->seo->rating_aggregate_count }} đánh giá</a>
            </div>
        @endif
    </div>
</div>
