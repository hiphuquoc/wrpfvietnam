{{-- <!-- BEGIN: Google Analytics -->
@if(env('APP_ENV')=='production')
    <script defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
    
        function loadGoogleAnalytics() {
            var script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}';
            document.head.appendChild(script);
    
            gtag('js', new Date());
            gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}');
        }
    
        window.addEventListener('scroll', loadGoogleAnalytics, { once: true });
    </script>
@endif
<!-- END: Google Analytics --> --}}

<!-- BEGIN: Jquery -->
{{-- <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<!-- END: Jquery -->
<script defer type="text/javascript">

    document.addEventListener('DOMContentLoaded', function() {
        /* check để xem có cookie csrf chưa (do lần đầu truy cập trang không có lỗi google login) */
        // checkToSetCsrfFirstTime();
        
        // /* lazyload ảnh lần đầu */
        // lazyload();
        // /* lazyload ảnh khi scroll */
        // $(window).on('scroll', function() {
        //     lazyload();
        // });
        
        // /* tải lại view sort cart */
        // viewSortCart();

        // /* check login để hiện thị button */
        // checkLoginAndSetShow();

        buildTocContentMain('js_buildTocContentMain_element');

    });
    
    function lazyload(){
        /* đối với ảnh */
        $('img.lazyload').each(function() {
            if (!$(this).hasClass('loaded')) {
                var distance = $(window).scrollTop() - $(this).offset().top + 900;
                if (distance > 0) {
                    $(this).attr('src', $(this).attr('data-src'));
                    $(this).addClass('loaded').removeClass('loading_1').css('opacity', 1);
                }
            }
        });
        /* đối với div dùng background */
        $('div.lazyload').each(function() {
            if (!$(this).hasClass('loaded')) {
                var distance = $(window).scrollTop() - $(this).offset().top + 900;
                if (distance > 0) {
                    $(this).css({
                        background  : 'url("'+$(this).attr('data-src')+'") no-repeat center center / cover',
                        filter      : 'unset'
                    });
                    $(this).addClass('loaded');
                }
            }
        });
    }

    /* đang xây dựng */
    function noticeContrustion(){
        alert('Tính năng thanh toán online đang được xây dựng. Vui lòng quay lại sau hoặc liên hệ Zalo 0968617168');
    }

    function openCloseElemt(idElemt){
        let displayE    = $('#' + idElemt).css('display');
        if(displayE=='none'){
            $('#' + idElemt).css('display', 'block');
            $('body').css('overflow', 'hidden');
        }else {
            $('#' + idElemt).css('display', 'none');
            $('body').css('overflow', 'unset');
        }
    }
    
    /* Go to top */
    mybutton 					    = document.getElementById("smoothScrollToTop");
    mybutton.style.display 	        = "none";
    window.onscroll                 = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display 	= "block";
        } else {
            mybutton.style.display 	= "none";
        }
    }
    function smoothScrollToTop() {
        // const currentScroll = document.documentElement.scrollTop;
        // if (currentScroll > 0) {
        //     window.requestAnimationFrame(smoothScrollToTop);
        //     window.scrollTo(0, currentScroll - currentScroll / 8);
        // }
        document.documentElement.scrollTop          = 0;
    }
    /* link to a href #id smooth */
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
        a.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href');
            let element = document.querySelector(id);
            if (!element) {
                console.error(`Element with ID ${id} not found`);
                return;
            }
            let offsetTop = element.offsetTop;
            window.scrollTo({
                top: offsetTop + 200,
                behavior: 'smooth'
            });
        });
    });
    // /* toggle menu mobile */
    // function toggleMenuMobile(idElement){
    //     const element   = $('#'+idElement);
    //     const displayE  = element.css('display');
    //     if(displayE=='none'){
    //         /* hiển thị */
    //         element.css('display', 'flex');
    //         $('body').css('overflow', 'hidden');
    //         $('#js_blurBackground').addClass('blurBackground');
    //         $('.menuTopBackground').addClass('blurBackground');
    //         $('.backgroundBlurMobileMenu').css('display', 'block');
    //     }else {
    //         element.css('display', 'none');
    //         $('body').css('overflow', 'unset');
    //         $('#js_blurBackground').removeClass('blurBackground');
    //         $('.menuTopBackground').removeClass('blurBackground');
    //         $('.backgroundBlurMobileMenu').css('display', 'none');
    //     }
    // }
    /* thay đổi option của product phần hiển thị ngoài */
    function changeOption(idShow){
        const elemtShow     = $('#'+idShow);
        const parent        = elemtShow.parent();
        /* ẩn tất cả phần tử con */
        parent.children().each(function(){
            $(this).removeClass('show').addClass('hide');
        })
        /* bật lại phần tử được chọn */
        elemtShow.removeClass('hide').addClass('show');
        /* lazy load cho ảnh trong phần tử */
        elemtShow.find('img.lazyloadAfter').each(function(){
            $(this).addClass('lazyload');
            lazyload();
        })
    }
    /* hiện thông báo cho sản phẩm vào giỏ hàng thành công */
    function openCloseModal(idModal, action = null){
        const elementModal  = $('#'+idModal);
        const flag          = elementModal.css('display');
        /* tooggle */
        if(action==null){
            if(flag=='none'){
                elementModal.css('display', 'flex');
                $('#js_openCloseModal_blur').addClass('blurBackground');
                $('body').css('overflow', 'hidden');
            }else {
                elementModal.css('display', 'none');
                $('#js_openCloseModal_blur').removeClass('blurBackground');
                $('body').css('overflow', 'unset');
            }
        }
        /* đóng */
        if(action=='close'){
            elementModal.css('display', 'none');
            $('#js_openCloseModal_blur').removeClass('blurBackground');
            $('body').css('overflow', 'unset');
        }
        /* mở */
        if(action=='open'){
            elementModal.css('display', 'flex');
            $('#js_openCloseModal_blur').addClass('blurBackground');
            $('body').css('overflow', 'hidden');
        }
    }
    // /* tăng giảm số lượng input quantity */
    // function plusMinusQuantity(idInput, action){
    //     const elementInput  = $('#'+idInput);
    //     const valueInput    = elementInput.val();
    //     if(action=='minus'){
    //         if(valueInput>1) elementInput.val(parseInt(valueInput)-1);
    //     }else {
    //         elementInput.val(parseInt(valueInput)+1);
    //     }
    // }
    /* thêm sản phẩm vào giỏ hàng */
    function addToCart(idProduct, idPrice, type) {
        let dataForm = {};
        dataForm.product_info_id = idProduct;
        dataForm.product_price_id = idPrice;
        dataForm.type = type;
        dataForm.language = $('#language').val();
        const queryString = new URLSearchParams(dataForm).toString();

        fetch("/addToCart?" + queryString, {
            method: 'GET',
            mode: 'cors',
            // headers: {
            //     'Content-Type': 'application/json',
            //     'X-CSRF-TOKEN': '{{ csrf_token() }}'
            // }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            /* reset lại value số lượng */
            $('#js_addToCart_quantity').val(1);
            /* hiện thông báo trong 5s */
            $('#js_addToCart_idWrite').html(data);
            openCloseModal('cartMessage');
            /* cập nhật lại thông tin giỏ hàng */ 
            viewSortCart();
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }
    /* tải lại thông tin icon giỏ hàng */
    function viewSortCart() {
        let dataForm = {};
        dataForm.language = $('#language').val();            
        const queryString = new URLSearchParams(dataForm).toString();
        fetch('/viewSortCart?' + queryString, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            $('#js_viewSortCart_idWrite').html(data); // Sử dụng dữ liệu nhận được từ phản hồi để cập nhật HTML
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
        });
    }
    /* xóa sản phẩm khỏi cart */ 
    function removeProductCart(idProduct, idProductPrice, idRow, idTotal, idCount) {
        /* tải loading */ 
        loadLoading(idRow);
        const language = $('#language').val();
        fetch("/removeProductCart?product_info_id=" + idProduct + "&product_price_id=" + idProductPrice + "&language=" + language, {
            method: 'GET',
            mode: 'cors'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(response => {
            /* cart trống */
            if (response.empty_cart !== '') $('#js_checkEmptyCart_idWrite').html(response.empty_cart);
            $('#' + idTotal).html(response.total);
            $('#' + idCount).html(response.count);
            setTimeout(() => {
                $('#' + idRow).remove();
            }, 300);
            /* trong page giỏ hàng => tải lại thành tiền */
            if (typeof loadTotalCart === 'function') {
                loadTotalCart($('#payment_method_info_id').val());
            }
            /* trường hợp xóa không còn sản phẩm */
            if (response.isEmpty !== '') {
                $('#js_checkEmptyCart_idWrite').html(response.isEmpty);
                $('#js_scrollMenu').remove();
            }
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }
    /* add loading icon */
    function loadLoading(action = 'show') {
        if(action == 'show'){
            $('.loadingBox').addClass('show');
        }else if(action == 'hide'){
            $('.loadingBox').removeClass('show');
        }else {
            $('.loadingBox').toggleClass('show');
        }
    }
    /* tính năng registry email ở footer */
    function submitFormRegistryEmail(idForm) {
        event.preventDefault();
        const inputEmail = $('#' + idForm).find('[name*=registry_email]');
        const valueEmail = inputEmail.val();
        if (isValidEmail(valueEmail)) {
            fetch("/registryEmail?registry_email=" + encodeURIComponent(valueEmail), {
                method: 'GET',
                mode: 'cors'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(response => {
                /* bật thông báo */
                setMessageModal(response.title, response.content);
            })
            .catch(error => {
                console.error("Fetch request failed:", error);
            });
        } else {
            inputEmail.val('');
            inputEmail.attr('placeholder', 'Email không hợp lệ!');
        }
    }
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    /* validate form khi nhập */
    function validateWhenType(elementInput, type = 'empty'){
        const idElement         = $(elementInput).attr('id');
        const parent            = $(document).find('[for*="'+idElement+'"]').parent();
        /* validate empty */
        if(type=='empty'){
            const valueElement  = $.trim($(elementInput).val());
            if(valueElement!=''&&valueElement!='0'){
                parent.removeClass('validateErrorEmpty');
                parent.addClass('validateSuccess');
            }else {
                parent.removeClass('validateSuccess');
                parent.addClass('validateErrorEmpty');
            }
        }
        /* validate phone */ 
        if(type=='phone'){
            const valueElement = $.trim($(elementInput).val());
            if(valueElement.length>=10&&/^\d+$/.test(valueElement)){
                parent.removeClass('validateErrorPhone');
                parent.addClass('validateSuccess');
            }else {
                parent.removeClass('validateSuccess');
                parent.addClass('validateErrorPhone');
            }
        }
        /* validate email */ 
        if(type=='email'){
            const valueElement = $.trim($(elementInput).val());
            /* check empty (nếu required) */
            if($(elementInput).prop('required')){
                if(valueElement==''){
                    parent.removeClass('validateSuccess');
                    parent.removeClass('validateErrorEmail');
                    parent.addClass('validateErrorEmpty');
                    return false;
                }
                /* check email hợp lệ */
                if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valueElement)){
                    parent.removeClass('validateErrorEmail');
                    parent.removeClass('validateErrorEmpty');
                    parent.addClass('validateSuccess');
                }else {
                    parent.removeClass('validateSuccess');
                    parent.removeClass('validateErrorEmpty');
                    parent.addClass('validateErrorEmail');
                }
            }else {
                /* check email hợp lệ */
                if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valueElement)){
                    parent.removeClass('validateErrorEmail');
                    parent.removeClass('validateErrorEmpty');
                    parent.addClass('validateSuccess');
                }
            }
        }
    }
    /* load quận/huyện */
    function loadDistrictByIdProvince(elementProvince, idWrite){
        const valueProvince = $(elementProvince).val();
        fetch('/loadDistrictByIdProvince?province_info_id='+valueProvince, {
            method  : 'GET',
            mode    : 'cors',
        })
        .then(response => {
            if (!response.ok){
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(response => {
            $('#'+idWrite).html(response);
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }
    /* validate form */
    function validateForm(idForm){
        let error       = [];
        /* input required không được bỏ trống */
        $('#'+idForm).find('input[required]').each(function(){
            /* đưa vào mảng */
            if($(this).val()==''){
                error.push($(this).attr('name'));
            }
        })
        /* select */
        $('#'+idForm).find('select[required]').each(function(){
            if($(this).val()==0) error.push($(this).attr('name'));
        })
        return error;
    }
    /* check đăng nhập */
    function checkLoginAndSetShow(){
        let dataForm = {};
        dataForm.language = $('#language').val();            
        const queryString = new URLSearchParams(dataForm).toString();
        fetch('/checkLoginAndSetShow?' + queryString, {
            method  : 'GET',
            mode    : 'cors',
        })
        .then(response => {
            if (!response.ok){
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(response => {
            /* button desktop */
            $('#js_checkLoginAndSetShow_button').html(response.button);
            $('#js_checkLoginAndSetShow_button').css('display', 'flex');
            /* button mobile */
            $('#js_checkLoginAndSetShow_buttonMobile').html(response.button_mobile);
            /* modal chung */
            $('#js_checkLoginAndSetShow_modal').html(response.modal);
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }
    /* toc content */
    function buildTocContentMain(idElement) {
        fixedTocContentIcon();
        setHeightTocFixed();

        window.addEventListener('resize', function() {
            fixedTocContentIcon();
            setHeightTocFixed();
        });

        document.querySelectorAll('.tocFixedIcon, .tocContentMain.tocFixed .tocContentMain_close').forEach(function(element) {
            element.addEventListener('click', function() {
                let elementMenu = document.querySelector('.tocContentMain.tocFixed');
                if (elementMenu.style.display === 'none' || elementMenu.style.display === '') {
                    elementMenu.style.display = 'block';
                } else {
                    elementMenu.style.display = 'none';
                }
            });
        });

        document.querySelectorAll('.tocContentMain_title, .tocContentMain_close').forEach(function(element) {
            element.addEventListener('click', function() {
                let elemtMenu = document.querySelector('.tocContentMain .tocContentMain_list');
                let closeBtn = document.querySelector('.tocContentMain_close');
                if (elemtMenu.style.display === 'none' || elemtMenu.style.display === '') {
                    elemtMenu.style.display = 'block';
                    closeBtn.classList.remove('hidden');
                } else {
                    elemtMenu.style.display = 'none';
                    closeBtn.classList.add('hidden');
                }
            });
        });

        function fixedTocContentIcon() {
            const elemtBox = document.getElementById('js_buildTocContentMain_element');
            if (!elemtBox) return;
            const isRTL = document.documentElement.getAttribute('dir') === 'rtl';
            const positionBox = isRTL 
                ? window.innerWidth - elemtBox.getBoundingClientRect().left - elemtBox.offsetWidth
                : elemtBox.getBoundingClientRect().left;

            let tocFixedIcon = document.querySelector('.tocFixedIcon');
            if (tocFixedIcon) {
                if (isRTL) {
                    tocFixedIcon.style.right = (positionBox - 50) + 'px';
                } else {
                    tocFixedIcon.style.left = (positionBox - 50) + 'px';
                }
            }
        }

        function setHeightTocFixed() {
            let heightToc = window.innerHeight - 210;
            let tocList = document.querySelector('.tocContentMain.tocFixed .tocContentMain_list');
            if (tocList) {
                tocList.style.height = heightToc + 'px';
                tocList.style.maxHeight = 'unset';
            }
        }

        let element = document.getElementById('tocContentMain');
        if (element) {
            let boxContent = document.getElementById(idElement);
            if (!boxContent) return;
            let heightB = boxContent.offsetHeight;
            window.addEventListener('scroll', function() {
                let positionB = boxContent.getBoundingClientRect().top + window.scrollY;
                let heightFooter = document.querySelector('.copyright')?.offsetHeight || 0;
                let positionE = element.getBoundingClientRect().top + window.scrollY;
                let heightE = element.offsetHeight;
                let scrollNow = document.documentElement.scrollTop || document.body.scrollTop;
                let minScroll = heightE + positionE;
                let maxScroll = heightB + positionB - heightFooter;
                let tocFixedIcon = document.querySelector('.tocFixedIcon');
                let tocFixed = document.querySelector('.tocFixed');

                if (scrollNow > minScroll && scrollNow < maxScroll) {
                    if (tocFixedIcon) tocFixedIcon.style.display = 'block';
                    let width = document.querySelector('.layoutHeaderSide_header')?.offsetWidth || 0;
                    if (tocFixed) tocFixed.style.width = width + 'px';
                } else {
                    if (tocFixedIcon) tocFixedIcon.style.display = 'none';
                }
            });
        }
    }

</script>