<div class="headerMain">
    <div class="container">
    <div class="headerMain_item">
        <ul>
            <li>
                <a href="/" title="Trang chủ wrpfvietnam">
                    <div>Trang chủ</div>
                </a>
            </li>
            <li>
                <a href="/ve-wrpfvietnam" title="Giới thiệu về wrpfvietnam">
                    <div>
                        Về Wrpfvietnam
                    </div>
                </a>                
            </li>
            @if(!empty($categoriesLv2)&&$categoriesLv2->isNotEmpty())
                <li>
                    <a href="/cua-hang" title="CỬa hàng của wrpfvietnam">
                        <div>
                            Cửa hàng
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </a>   
                    <div class="normalMenu">      
                        <ul>
                            @foreach($categoriesLv2 as $categoryMenu)
                                @if($categoryMenu->seo->level==2)
                                    @php
                                        $categoryMenuName = $categoryMenu->seos[0]->infoSeo->title ?? '';
                                    @endphp
                                    @if(!empty($categoryMenuName))
                                        <li>
                                            <a class="max-line_1" href="/{{ $categoryMenu->seos[0]->infoSeo->slug_full }}" title="{{ $categoryMenuName }}">
                                                {{ $categoryMenuName }}
                                            </a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endif
        </ul>
    </div>
    <a href="/" title="Trang chủ WrpfVietnam" class="headerMain_item logoMain">
        @if(!empty($item->type->code)&&$item->type->code=='home')
            <h1 style="display:none;">{{ $item->seos[0]->infoSeo->title }}</h1>
        @endif
    </a>
    <div class="headerMain_item">
        <ul style="justify-content:flex-end;">
            @if(!empty($categoriesBlog))
                <li>
                    <a href="/tin-tuc" title="Trang tin tức wrpfvietnam">
                        <div>
                            Tin tức
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </a>
                    <div class="normalMenu">      
                        <ul>
                            @foreach($categoriesBlog as $categoryMenu)
                                @if($categoryMenu->seo->level==2)
                                    @php
                                        $categoryMenuName = $categoryMenu->seos[0]->infoSeo->title ?? '';
                                    @endphp
                                    @if(!empty($categoryMenuName))
                                        <li>
                                            <a class="max-line_1" href="/{{ $categoryMenu->seos[0]->infoSeo->slug_full }}" title="{{ $categoryMenuName }}">
                                                {{ $categoryMenuName }}
                                            </a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endif
            {{-- <li>
                <div>
                    <div>
                        Thủ tục
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div class="normalMenu">
                    <ul>
                        <li>
                            <a class="max-line_1" href="/" title="Tàu cao tốc Phú Quốc">Thủ tục ...</a>
                        </li>
                        <li>
                            <a class="max-line_1" href="/" title="Tàu cao tốc Phú Quốc">Thủ tục ...</a>
                        </li>
                    </ul>
                </div>
                
            </li> --}}
            <li>
                <a href="/giai-dau" title="Trang tin tức wrpfvietnam">
                    <div>
                        Giải đấu
                    </div>
                </a>
            </li>
            <li>
                <a href="/bang-xep-hang" title="Liên hệWrpfVietnam">
                    <div>Xếp hạng</div>
                </a>      
            </li>
            @if(empty($item->type->code)||$item->type->code!='cart')
                <li>
                    <div id="js_viewSortCart_idWrite">
                        @include('wallpaper.cart.cartSort', ['products' => null])
                    </div>
                </li>
            @endif
            <li>
                <div>
                    <i class="fa-solid fa-bars" style="font-size:1.4rem;margin-top:0.25rem;"></i>
                </div>
                <div class="normalMenu" style="margin-right:1.5rem;right:0;">
                    <ul>
                        <li>
                            
                            <a href="/tai-lieu-world-raw-powerlifting-federation-vietnam" title="Trang tin tức wrpfvietnam">
                                <div>
                                    Tài liệu
                                </div>
                            </a>    
                        </li>
                        <li>
                            <a href="/lien-he" title="Liên hệWrpfVietnam">
                                <div>Liên hệ</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    </div>
</div>