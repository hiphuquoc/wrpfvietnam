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
                <a href="/ve-wrpfvietnam" title="Trang giới thiệu về wrpfvietnam">
                    <div>
                        Về Wrpfvietnam
                    </div>
                </a>                
            </li>
            <li>
                <div>
                    <div>Cửa hàng</div>
                </div>
            </li>
        </ul>
    </div>
    <div class="headerMain_item logoMain">
        <a href="/" title="Trang chủ WrpfVietnam">
            <h1 style="display:none;">Trang chủ WrpfVietnam ®WrpfVietnam</h1>
        </a>
    </div>
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
                <div>
                    <div>Tài liệu</div>
                </div>
                
            </li>

            
            
            
            <li>
                <div>
                <i class="fa-solid fa-bars" style="font-size:1.4rem;margin-top:0.25rem;"></i>
                </div>
                <div class="normalMenu" style="margin-right:1.5rem;right:0;">
                    <ul>
                        <li>
                            <a href="/lien-he-hitour" title="Liên hệ Hitour">
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