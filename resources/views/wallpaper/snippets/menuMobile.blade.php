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
                    <a href="/ve-wrpfvietnam" title="Giới thiệu về wrpfvietnam">
                        <div><i class="fa-regular fa-address-card"></i>Về Wrpvietnam</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <a href="/bang-xep-hang" title="Bảng xếp hạng WrpfVietnam">
                        <div><i class="fa-solid fa-ranking-star"></i>Xếp hạng</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <a href="/cua-hang" title="Cửa hàng sản phẩm chất lượng của WrpfVietnam">
                        <div><i class="fa-solid fa-bag-shopping"></i>Cửa hàng</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <a href="/tin-tuc" title="Trang tin tức của WrpfVietnam">
                        <div><i class="fa-solid fa-square-rss"></i>Tin tức</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <a href="/giai-dau" title="Giải đấu của WrpfVietnam">
                        <div><i class="fa-solid fa-dumbbell"></i>Giải đấu</div>
                        <div class="right-icon"></div>
                    </a>
                </li>
                <li>
                    <a href="/tai-lieu-world-raw-powerlifting-federation-vietnam" title="Tài liệu của WrpfVietnam">
                        <div><i class="fa-solid fa-folder-open"></i>Tài liệu</div>
                        <div class="right-icon"></div>
                    </a>
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