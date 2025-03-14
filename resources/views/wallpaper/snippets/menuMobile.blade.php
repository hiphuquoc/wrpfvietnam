<div id="nav-mobile" style="display:none;">
    <div class="nav-mobile">
        <div class="nav-mobile_bg" onclick="openCloseElemt('nav-mobile');"></div>
        <div class="nav-mobile_main customScrollBar-y">
            <div class="nav-mobile_main__exit" onclick="openCloseElemt('nav-mobile');">
                <i class="fas fa-times"></i>
            </div>
            <a href="/" title="Trang chủ {{ config('company.sortname') }}">
                <div class="logoSquare"></div>
            </a>
            <ul>
                <li>
                    <a href="/" title="Trang chủ {{ config('company.sortname') }}">
                        <div><i class="fas fa-home"></i>Trang chủ</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <div onclick="showHideListMenuMobile(this);">
                        <i class="fas fa-umbrella-beach"></i>
                        <span class="nav-mobile_main__title">Tour Du Lịch</span>
                        <span class="nav-mobile_main__arrow"><i class="fas fa-chevron-right"></i></span>
                    </div>
                    <ul style="display:none;">
                        <li>
                            <div onclick="showHideListMenuMobile(this);">
                                <span class="nav-mobile_main__title">Tour Biển Đảo</span>
                            </div>
                            <ul style="display:none;">
                                <li>
                                    <a href="/#" title="">
                                        <div>Test</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="/lien-he" title="Liên hệ {{ config('company.sortname') }}">
                        <i class="fa-solid fa-phone"></i>
                        <span class="nav-mobile_main__title">Liên Hệ</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>