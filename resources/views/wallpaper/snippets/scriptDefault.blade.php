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
        // Lazyload ảnh lần đầu
        lazyload();

        // Lazyload ảnh khi scroll
        window.addEventListener('scroll', function() {
            lazyload();
        });

        // Tải lại view sort cart
        viewSortCart();

        // Build TOC content main
        buildTocContentMain('js_buildTocContentMain_element');
    });
    
    function lazyload() {
        // Đối với ảnh
        document.querySelectorAll('img.lazyload').forEach(function(img) {
            if (!img.classList.contains('loaded')) {
                var distance = window.scrollY - img.getBoundingClientRect().top - document.documentElement.scrollTop + 900;
                if (distance > 0) {
                    img.src = img.getAttribute('data-src');
                    img.classList.add('loaded');
                    img.classList.remove('loading_1');
                    img.style.opacity = '1';
                }
            }
        });

        // Đối với div dùng background
        document.querySelectorAll('div.lazyload').forEach(function(div) {
            if (!div.classList.contains('loaded')) {
                var distance = window.scrollY - div.getBoundingClientRect().top - document.documentElement.scrollTop + 900;
                if (distance > 0) {
                    div.style.background = 'url("' + div.getAttribute('data-src') + '") no-repeat center center / cover';
                    div.style.filter = 'unset';
                    div.classList.add('loaded');
                }
            }
        });
    }

    /* Đang xây dựng */
    function noticeContrustion() {
        alert('Tính năng thanh toán online đang được xây dựng. Vui lòng quay lại sau hoặc liên hệ Zalo 0968617168');
    }

    function openCloseElemt(idElemt) {
        var element = document.getElementById(idElemt);
        if (element.style.display === 'none' || element.style.display === '') {
            element.style.display = 'block';
            document.body.style.overflow = 'hidden';
        } else {
            element.style.display = 'none';
            document.body.style.overflow = 'unset';
        }
    }
 
    /* Go to top */
    const mybutton = document.getElementById("smoothScrollToTop");
    mybutton.style.display = "none";

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function smoothScrollToTop() {
        document.documentElement.scrollTop = 0;
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

    /* toggle menu mobile */
    function toggleMenuMobile(idElement) {
        const element = document.getElementById(idElement);
        const jsBlurBackground = document.getElementById('js_blurBackground');
        const menuTopBackground = document.querySelector('.menuTopBackground');
        const backgroundBlurMobileMenu = document.querySelector('.backgroundBlurMobileMenu');

        if (getComputedStyle(element).display === 'none') {
            // Hiển thị
            element.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            jsBlurBackground.classList.add('blurBackground');
            menuTopBackground.classList.add('blurBackground');
            backgroundBlurMobileMenu.style.display = 'block';
        } else {
            // Ẩn
            element.style.display = 'none';
            document.body.style.overflow = 'unset';

            jsBlurBackground.classList.remove('blurBackground');
            menuTopBackground.classList.remove('blurBackground');
            backgroundBlurMobileMenu.style.display = 'none';
        }
    }

    /* thay đổi option của product phần hiển thị ngoài */
    function changeOption(idShow) {
        const elemtShow = document.getElementById(idShow);
        const parent = elemtShow.parentElement;

        // Ẩn tất cả phần tử con
        Array.from(parent.children).forEach(function(child) {
            child.classList.remove('show');
            child.classList.add('hide');
        });

        // Hiển thị phần tử được chọn
        elemtShow.classList.remove('hide');
        elemtShow.classList.add('show');

        // Lazy load cho ảnh trong phần tử
        elemtShow.querySelectorAll('img.lazyloadAfter').forEach(function(img) {
            img.classList.add('lazyload');
        });

        lazyload(); // Gọi lại hàm lazyload đã chuyển sang JS thuần
    }

    /* hiện thông báo cho sản phẩm vào giỏ hàng thành công */
    function openCloseModal(idModal, action = null) {
        const elementModal = document.getElementById(idModal);
        const blurBackground = document.getElementById('js_openCloseModal_blur');

        const isHidden = getComputedStyle(elementModal).display === 'none';

        if (action === null) {
            if (isHidden) {
                elementModal.style.display = 'flex';
                blurBackground.classList.add('blurBackground');
                document.body.style.overflow = 'hidden';
            } else {
                elementModal.style.display = 'none';
                blurBackground.classList.remove('blurBackground');
                document.body.style.overflow = 'unset';
            }
        }

        if (action === 'close') {
            elementModal.style.display = 'none';
            blurBackground.classList.remove('blurBackground');
            document.body.style.overflow = 'unset';
        }

        if (action === 'open') {
            elementModal.style.display = 'flex';
            blurBackground.classList.add('blurBackground');
            document.body.style.overflow = 'hidden';
        }
    }

    /* tăng giảm số lượng input quantity */
    function plusMinusQuantity(idInput, action) {
        const elementInput = document.getElementById(idInput);
        let valueInput = parseInt(elementInput.value) || 0;

        if (action === 'minus') {
            if (valueInput > 1) {
                elementInput.value = valueInput - 1;
            }
        } else {
            elementInput.value = valueInput + 1;
        }
    }

    /* thêm sản phẩm vào giỏ hàng */
    function addToCart(idProduct, idPrice, type) {
        const language = document.getElementById('language').value;

        const queryString = new URLSearchParams({
            product_info_id: idProduct,
            product_price_id: idPrice,
            type: type,
            language: language
        }).toString();

        fetch("/addToCart?" + queryString, {
            method: 'GET',
            mode: 'cors'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            // Reset lại số lượng
            document.getElementById('js_addToCart_quantity').value = 1;

            // Hiển thị thông báo
            document.getElementById('js_addToCart_idWrite').innerHTML = data;
            openCloseModal('cartMessage');

            // Cập nhật lại icon giỏ hàng
            viewSortCart();
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }

    /* tải lại thông tin icon giỏ hàng */
    function viewSortCart() {
        const language = document.getElementById('language').value;

        const queryString = new URLSearchParams({ language: language }).toString();

        fetch('/viewSortCart?' + queryString, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            document.getElementById('js_viewSortCart_idWrite').innerHTML = data;
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
        });
    }

    /* xóa sản phẩm khỏi cart */
    function removeProductCart(idProduct, idProductPrice, idRow, idTotal, idCount) {
        loadLoading(idRow); // giả sử hàm này bạn đã viết sẵn
        const language = document.getElementById('language').value;

        const queryString = new URLSearchParams({
            product_info_id: idProduct,
            product_price_id: idProductPrice,
            language: language
        }).toString();

        fetch("/removeProductCart?" + queryString, {
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
            // Nếu giỏ hàng trống, cập nhật giao diện
            if (response.empty_cart) {
                document.getElementById('js_checkEmptyCart_idWrite').innerHTML = response.empty_cart;
            }

            document.getElementById(idTotal).innerHTML = response.total;
            document.getElementById(idCount).innerHTML = response.count;

            setTimeout(() => {
                const rowElement = document.getElementById(idRow);
                if (rowElement) rowElement.remove();
            }, 300);

            // Nếu đang ở trang giỏ hàng => cập nhật lại tổng tiền
            if (typeof loadTotalCart === 'function') {
                const paymentMethod = document.getElementById('payment_method_info_id');
                loadTotalCart(paymentMethod ? paymentMethod.value : '');
            }

            // Nếu xóa hết sản phẩm
            if (response.isEmpty) {
                document.getElementById('js_checkEmptyCart_idWrite').innerHTML = response.isEmpty;
                const scrollMenu = document.getElementById('js_scrollMenu');
                if (scrollMenu) scrollMenu.remove();
            }
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }

    function loadLoading(action = 'show') {
        const loadingBox = document.querySelector('.loadingBox');

        if (action === 'show') {
            loadingBox.classList.add('show');
        } else if (action === 'hide') {
            loadingBox.classList.remove('show');
        } else {
            loadingBox.classList.toggle('show');
        }
    }

    function submitFormRegistryEmail(idForm, event) {
        event.preventDefault();

        const form = document.getElementById(idForm);
        const inputEmail = form.querySelector('[name*=registry_email]');
        const valueEmail = inputEmail.value;

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
                // bật thông báo
                setMessageModal(response.title, response.content);
            })
            .catch(error => {
                console.error("Fetch request failed:", error);
            });
        } else {
            inputEmail.value = '';
            inputEmail.placeholder = 'Email không hợp lệ!';
        }
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validateWhenType(elementInput, type = 'empty') {
        const idElement = elementInput.id;
        const parent = document.querySelector('[for*="' + idElement + '"]')?.parentElement;

        if (!parent) return; // không tìm thấy thì thoát luôn

        const valueElement = elementInput.value.trim();

        // validate empty
        if (type === 'empty') {
            if (valueElement !== '' && valueElement !== '0') {
                parent.classList.remove('validateErrorEmpty');
                parent.classList.add('validateSuccess');
            } else {
                parent.classList.remove('validateSuccess');
                parent.classList.add('validateErrorEmpty');
            }
        }

        // validate phone
        if (type === 'phone') {
            if (valueElement.length >= 10 && /^\d+$/.test(valueElement)) {
                parent.classList.remove('validateErrorPhone');
                parent.classList.add('validateSuccess');
            } else {
                parent.classList.remove('validateSuccess');
                parent.classList.add('validateErrorPhone');
            }
        }

        // validate email
        if (type === 'email') {
            if (elementInput.required && valueElement === '') {
                parent.classList.remove('validateSuccess', 'validateErrorEmail');
                parent.classList.add('validateErrorEmpty');
                return false;
            }
            if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valueElement)) {
                parent.classList.remove('validateErrorEmail', 'validateErrorEmpty');
                parent.classList.add('validateSuccess');
            } else if (valueElement !== '') {
                parent.classList.remove('validateSuccess', 'validateErrorEmpty');
                parent.classList.add('validateErrorEmail');
            }
        }
    }

    function loadDistrictByIdProvince(elementProvince, idWrite) {
        const valueProvince = elementProvince.value;

        fetch('/loadDistrictByIdProvince?province_info_id=' + encodeURIComponent(valueProvince), {
            method: 'GET',
            mode: 'cors',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(response => {
            document.getElementById(idWrite).innerHTML = response;
        })
        .catch(error => {
            console.error("Fetch request failed:", error);
        });
    }

    function validateForm(idForm) {
        const error = [];
        const form = document.getElementById(idForm);

        // validate input required
        form.querySelectorAll('input[required]').forEach(function(input) {
            if (input.value.trim() === '') {
                error.push(input.name);
            }
        });

        // validate select required
        form.querySelectorAll('select[required]').forEach(function(select) {
            if (select.value == 0) {
                error.push(select.name);
            }
        });

        return error;
    }

    function checkLoginAndSetShow() {
        const dataForm = {
            language: document.getElementById('language').value
        };

        const queryString = new URLSearchParams(dataForm).toString();

        fetch('/checkLoginAndSetShow?' + queryString, {
            method: 'GET',
            mode: 'cors',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(response => {
            // button desktop
            const buttonDesktop = document.getElementById('js_checkLoginAndSetShow_button');
            buttonDesktop.innerHTML = response.button;
            buttonDesktop.style.display = 'flex';

            // button mobile
            const buttonMobile = document.getElementById('js_checkLoginAndSetShow_buttonMobile');
            buttonMobile.innerHTML = response.button_mobile;

            // modal chung
            const modal = document.getElementById('js_checkLoginAndSetShow_modal');
            modal.innerHTML = response.modal;
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