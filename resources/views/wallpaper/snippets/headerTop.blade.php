<div class="headerMain">
    <div class="container">
        <div class="headerMain_item hide-1023">
            <ul>
                <li>
                    <a href="/" title="Trang chủ wrpfvietnam">
                        <div><i class="fa-solid fa-house"></i></div>
                    </a>
                </li>
                <li>
                    <a href="/ve-wrpfvietnam" title="Giới thiệu về wrpfvietnam">
                        <div>
                            Về Wrpfvietnam
                        </div>
                    </a>                
                </li>
                <li class="hide-1023">
                    <a href="/van-dong-vien" title="Vận động viên WrpfVietnam">
                        <div>Vận động viên</div>
                    </a>      
                </li>
                <li class="hide-1023">
                    <a href="/bang-xep-hang" title="Bảng xếp hạng WrpfVietnam">
                        <div>Xếp hạng</div>
                    </a>      
                </li>
            </ul>
        </div>
        <a href="/" title="Trang chủ WrpfVietnam" class="headerMain_item logoMain">
            @if(!empty($item->type->code)&&$item->type->code=='home')
                <h1 style="display:none;">{{ $item->seos[0]->infoSeo->title }}</h1>
            @endif
        </a>
        <div class="headerMain_item">
            <ul style="justify-content:flex-end;">
                <li class="hide-1023">
                    <a href="/giai-dau" title="Trang tin tức wrpfvietnam">
                        <div>
                            Giải đấu
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
                @if(!empty($categoriesBlog))
                    <li class="hide-1023">
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
                
                @if(empty($item->type->code)||$item->type->code!='cart')
                    <li>
                        <div id="js_viewSortCart_idWrite">
                            @include('wallpaper.cart.cartSort', ['products' => null])
                        </div>
                    </li>
                @endif
                {{-- <li>
                    <div>
                        <div class="languageBox">
                            <i class="fa-solid fa-globe"></i>
                            <div>VI</div>
                        </div>
                    </div>
                </li> --}}
                <li class="hide-1023">
                    <div class="viewMoreMenu">
                        <i class="fa-solid fa-bars"></i>
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
                <!-- icon menu mobile -->
                <li class="show-1023" onclick="openCloseElemt('nav-mobile');">
                    <div>
                        <div>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>