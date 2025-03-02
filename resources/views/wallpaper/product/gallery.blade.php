@if(!empty($prices)&&$prices->isNotEmpty())

    <div class="galleryBox js_setWidth">
        <div id="js_setFullWidth" class="galleryBox_box" data-show="0">

            @foreach($prices as $price)
                @foreach($price->wallpapers as $wallpaper)
                    @if(!empty($wallpaper->infoWallpaper))
                        @php
                            /* lấy ảnh mini */
                            $imageMini      = \App\Helpers\Image::getUrlImageMiniByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                            $imageSmall     = \App\Helpers\Image::getUrlImageSmallByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                            $imageLarge     = \App\Helpers\Image::getUrlImageLargeByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                        @endphp
                        <div class="galleryBox_box_item js_setFlex">
                            <img src="{{ $imageLarge }}" alt="đang trống" />
                        </div>
                    @endif
                    
                @endforeach
            @endforeach

        </div>
        <div class="galleryBox_arrow">
            <div class="galleryBox_arrow__privious js_btnPri">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="galleryBox_arrow__next js_btnNext">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <div id="galleryBox_bar" class="galleryBox_bar">
            @foreach($prices as $price)
                @foreach($price->wallpapers as $wallpaper)
                    @if(!empty($wallpaper->infoWallpaper))
                        @php
                            /* lấy ảnh mini */
                            $imageMini      = \App\Helpers\Image::getUrlImageMiniByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                            $imageSmall     = \App\Helpers\Image::getUrlImageSmallByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                            $imageLarge     = \App\Helpers\Image::getUrlImageLargeByUrlImage($wallpaper->infoWallpaper->file_cloud_wallpaper);
                        @endphp
                        <div data-id="" class="js_clickGalleryBar">
                            <img src="{{ $imageSmall }}" alt="đang trống" />
                        </div>
                    @endif
                    
                @endforeach
            @endforeach
        </div>
    </div>
    
@endif

@pushonce('scriptCustom')

    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function() {
            const nameSetFullWidth = document.getElementById('js_setFullWidth');
            const galleryBar = document.getElementById('galleryBox_bar');

            function setImgShowGallery(keyShow = 0) {
                const pageWidth = document.querySelector('.pageProduct').offsetWidth;
                const widthS = window.innerWidth < 768 ? pageWidth : Math.floor(pageWidth * 0.55);

                const box = document.querySelector('.js_setWidth');
                const items = document.querySelectorAll('.js_setFlex');
                const countE = nameSetFullWidth.children.length;

                box.style.width = `${widthS}px`;
                nameSetFullWidth.style.width = `${widthS * countE}px`;

                items.forEach(item => {
                    item.style.flex = `0 0 ${widthS}px`;
                });

                const valueTrans = keyShow * widthS;
                nameSetFullWidth.style.transform = `translate3d(-${valueTrans}px, 0, 0)`;
            }

            function hiddenShowBtnPriviousAndNext() {
                const valueShowCur = parseInt(nameSetFullWidth.dataset.show);
                const countE = nameSetFullWidth.children.length;

                document.querySelector('.js_btnNext').style.display = (valueShowCur >= countE - 1) ? 'none' : 'block';
                document.querySelector('.js_btnPri').style.display = (valueShowCur <= 0) ? 'none' : 'block';
            }

            function selectedGalleryBar(valueShowCur = null) {
                if (valueShowCur === null) valueShowCur = parseInt(nameSetFullWidth.dataset.show);

                Array.from(galleryBar.children).forEach(child => child.classList.remove('selected'));
                const selectedItem = galleryBar.querySelector(`[data-id="${valueShowCur}"]`);
                if (selectedItem) selectedItem.classList.add('selected');

                const widthChild = galleryBar.children[0]?.offsetWidth + 15 || 0;
                galleryBar.scrollTo({
                    left: (valueShowCur * widthChild),
                    behavior: 'smooth'
                });
            }

            function changeImgShowGallery(type = 'next', valueShowNew = null) {
                let valueShowCur = parseInt(nameSetFullWidth.dataset.show);

                if (valueShowNew === null) {
                    valueShowNew = type === 'next' ? valueShowCur + 1 : valueShowCur - 1;
                }

                nameSetFullWidth.dataset.show = valueShowNew;

                setImgShowGallery(valueShowNew);
                selectedGalleryBar(valueShowNew);
                hiddenShowBtnPriviousAndNext();
            }

            document.querySelector('.js_btnPri').addEventListener('click', () => {
                changeImgShowGallery('previous');
            });

            document.querySelector('.js_btnNext').addEventListener('click', () => {
                changeImgShowGallery('next');
            });

            document.querySelectorAll('.js_clickGalleryBar').forEach((item, index) => {
                item.dataset.id = index;
                item.addEventListener('click', function() {
                    changeImgShowGallery('click', parseInt(this.dataset.id));
                });
            });

            window.addEventListener('resize', () => {
                setImgShowGallery(parseInt(nameSetFullWidth.dataset.show));
            });

            setImgShowGallery(0);
            hiddenShowBtnPriviousAndNext();
            selectedGalleryBar();


            /* zoom khi hover */
            const galleryBox = document.querySelector('.galleryBox_box');

            galleryBox.addEventListener('mousemove', function(event) {
                const img = galleryBox.querySelector('.js_setFlex:nth-child(' + (parseInt(nameSetFullWidth.dataset.show) + 1) + ') img');
                const { width, height, left, top } = img.getBoundingClientRect();

                const offsetX = event.clientX - left;
                const offsetY = event.clientY - top;

                const percentX = offsetX / width;
                const percentY = offsetY / height;

                img.style.transformOrigin = `${percentX * 100}% ${percentY * 100}%`;
                img.style.transform = 'scale(2)'; // phóng to 2 lần
            });

            galleryBox.addEventListener('mouseleave', function() {
                const img = galleryBox.querySelector('.js_setFlex:nth-child(' + (parseInt(nameSetFullWidth.dataset.show) + 1) + ') img');
                img.style.transform = '';
            });
        });



    </script>

@endpushonce