<div class="formBox">
    <div class="formBox_full">
        <!-- One Row -->
        <div class="formBox_column2_item_row">
            <div class="inputWithNumberChacractor">
                <span data-toggle="tooltip" data-placement="top" title="
                    Họ tên đầy đủ của Vận Động Viên
                ">
                    <i class="explainInput" data-feather='alert-circle'></i>
                    <label class="form-label inputRequired" for="title">Họ và tên</label>
                </span>
            </div>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $itemSeo->title ?? null }}" required>
            <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
        </div>
        @if($language=='vi')
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là giới tính của Vận Động Viên hiển thị trên website
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="sex">Giới tính</label>
                    </span>
                </div>
                <select class="select2 form-select select2-hidden-accessible" name="sex">
                    @foreach(config('main_'.env('APP_NAME').'.sex') as $key => $sex)
                        @php
                            $selected   = null;
                            if(old('sex') == $key || (!empty($item->sex)&&$item->sex == $key)) {
                                $selected = 'selected';
                            }
                        @endphp
                        <option value="{{ $key }}" {{ $selected }}>{{ $sex['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là ngày tháng năm sinh của Vận Động Viên hiển thị trên website ví dụ 11/11/1995 hoặc 1995
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="birth_day">Năm sinh</label>
                    </span>
                </div>
                <input type="text" class="form-control" id="birth_day" name="birth_day" value="{{ old('birth_day') ?? $item->birth_day ?? null }}" required>
                <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là Số điện thoại của Vận Động Viên hiển thị trên website
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="phone">Số điện thoại</label>
                    </span>
                </div>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $item->phone ?? null }}" required>
                <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là Email của Vận Động Viên hiển thị trên website
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="email">Email</label>
                    </span>
                </div>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ?? $item->email ?? null }}" required>
                <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là ngày bắt đầu tập Pwl của Vận Động Viên hiển thị trên website ví dụ 11/11/1995 hoặc 1995
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="start_pwl">Bắt đầu tập Pwl</label>
                    </span>
                </div>
                <input type="text" class="form-control" id="start_pwl" name="start_pwl" value="{{ old('start_pwl') ?? $item->start_pwl ?? null }}" required>
                <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là hạng cân của Vận Động Viên hiển thị trên website
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="class_id">Hạng cân</label>
                    </span>
                </div>
                <select class="select2 form-select select2-hidden-accessible" name="class_id">
                    <option value="">- Lựa chọn -</option>
                    @foreach($classObject as $class)
                        @php
                            $selected   = null;
                            if(old('sex') == $class->id || (!empty($item->class_id)&&$item->class_id == $class->id)) {
                                $selected = 'selected';
                            }
                        @endphp
                        <option value="{{ $class->id }}" {{ $selected }}>{{ $class->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- One Row -->
            <div class="formBox_column2_item_row">
                <div class="inputWithNumberChacractor">
                    <span data-toggle="tooltip" data-placement="top" title="
                        Đây là thông tin team của Vận Động Viên hiển thị trên website
                    ">
                        <i class="explainInput" data-feather='alert-circle'></i>
                        <label class="form-label inputRequired" for="team">Team /Tự do</label>
                    </span>
                </div>
                <input type="text" class="form-control" id="team" name="team" value="{{ old('team') ?? $item->team ?? null }}" required>
                <div class="invalid-feedback">{{ config('admin.massage_validate.not_empty') }}</div>
            </div>
        @endif
        
    </div>
</div>