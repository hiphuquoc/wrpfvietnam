<div id="js_toggleModalLogin_idWrite" class="formModalBox" style="display:flex;">
    
    <div class="formModalBox_bg js_toggleModalLogin"></div>
    <div class="formModalBox_box" style="max-width:500px;">
        <form id="formLogin" method="get" style="width:100%;">
            <div class="formModalBox_box_body">
                <!-- Form Login -->
                <div class="formLogin">
                    <div class="formLogin_logo">
                        <img src="https://websitekiengiang.com/storage/images/logo-color-full.png" alt="logo website kiên giang" title="logo website kiên giang" />
                    </div>
                    <div class="formLogin_text">
                        <div class="formLogin_text_title">Chào mừng bạn! 👋</div>
                        <div class="formLogin_text_description">Bạn đang truy cập hệ thống dành cho thành viên quản trị. Vui lòng đăng nhập trước khi thao tác!</div>
                    </div>
                    <div class="formLogin_form">
                        <div class="formLogin_form_item">
                            <label class="required">Email</label>
                            <input type="text" name="email" tabindex="1" required />
                        </div>
                        <div class="formLogin_form_item">
                            <label class="required">Mật khẩu</label>
                            <div class="inputWithIcon" >
                                <input type="password" name="password"  tabindex="2" required />
                            </div>
                        </div>
                        <div id="js_noticeLogin" class="formLogin_form_item" style="display:none;color:red;">
                            <!-- thông báo lỗi -->
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="formModalBox_box_footer">
                <div class="formModalBox_box_footer_item button" tabindex="3" onClick="submitFormLogin('formLogin')" style="width:100%;border-radius:7px;text-align:center;">
                    Đăng nhập
                </div>
            </div>
        </form>
    </div>

</div>
@push('scriptCustom')
    <script type="text/javascript">

        function submitFormLogin(idForm) {
            const error = validateFormLogin(idForm);
            if (error.length === 0) {
                // lấy dữ liệu form
                const formElement = document.getElementById(idForm);
                const formData = new FormData(formElement);

                // Chuyển FormData thành dạng object để gửi đi
                let dataObject = {};
                formData.forEach((value, key) => {
                    if (!dataObject[key]) {
                        dataObject[key] = value;
                    } else {
                        // Trường hợp input có mảng (name[])
                        if (!Array.isArray(dataObject[key])) {
                            dataObject[key] = [dataObject[key]];
                        }
                        dataObject[key].push(value);
                    }
                });

                // Gửi fetch request
                fetch('{{ route("admin.loginAdmin") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Thêm CSRF token vào header
                    },
                    body: JSON.stringify({
                        data: dataObject
                    })
                })
                .then(response => response.json())
                .then(response => {
                    if (response.flag === true) {
                        window.location.href = "{{ route('admin.product.list') }}";
                    } else {
                        const noticeElement = document.getElementById('js_noticeLogin');
                        noticeElement.innerHTML = response.message;
                        noticeElement.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                });
            } else {
                error.forEach(function(item) {
                    const input = document.querySelector(`#${idForm} [name="${item.name}"]`);
                    if (input) {
                        input.setAttribute('placeholder', item.notice);
                        input.style.border = '1px solid red';
                    }
                });
            }
        }

        function validateFormLogin(idForm) {
            let error = [];
            const form = document.getElementById(idForm);
            const inputs = form.querySelectorAll('input[required]');

            inputs.forEach(function(input) {
                if (input.value.trim() === '') {
                    error.push({
                        name: input.name,
                        notice: 'Không được để trống trường này'
                    });
                }
            });

            return error;
        }


    </script>
@endpush