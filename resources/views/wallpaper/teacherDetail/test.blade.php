<div class="infoAthleteBox">
    <div class="infoAthleteBox_info">
        <div class="infoAthleteBox_info_image">
            <img src="https://liendoancutathehinhhcm.storage.googleapis.com/storage/images/luu-manh-cuong-small.webp" alt="" title="" />
        </div>
        <div class="infoAthleteBox_info_box">
            <div class="infoAthleteBox_info_box_detail">

                <div class="infoAthleteBox_info_box_detail_title">
                    <h2>Thông tin</h2>
                </div>
                <div class="infoAthleteBox_info_box_detail_box">
                    <div class="infoAthleteBox_info_box_detail_box_item">
                        <div><i class="fa-solid fa-venus-mars"></i> Giới tính:</div>
                        <div>Nam</div>
                    </div>
                    <div class="infoAthleteBox_info_box_detail_box_item">
                        <div><i class="fa fa-phone" aria-hidden="true"></i> Liên hệ:</div>
                        <div>0927621636 - vandongvien1@gmail.com</div>
                    </div>
                    <div class="infoAthleteBox_info_box_detail_box_item">
                        <div><i class="fa-solid fa-dumbbell"></i> Hạng cân:</div>
                        <div>80 kg</div>
                    </div>
                    <div class="infoAthleteBox_info_box_detail_box_item">
                        <div><i class="fa-solid fa-star"></i> Tổ chức /CLB:</div>
                        <div>Liên đoàn WrpfVietnam</div>
                    </div>
                </div>
            </div>

            <div class="infoAthleteBox_info_box_introduce">
                <h2>Giới thiệu</h2>
                <p>Nguyễn Văn A là một huấn luyện viên cá nhân chuyên nghiệp, luôn đặt tâm huyết vào từng buổi tập với phương châm “Vui Vẻ - Hòa Đồng - Nhiệt Tình”. Anh không chỉ giúp học viên đạt được mục tiêu thể hình mà còn chú trọng cải thiện sức khỏe tổng thể, xây dựng nền tảng thể lực vững chắc. Với kinh nghiệm nhiều năm trong ngành thể hình, anh đã đồng hành cùng nhiều khách hàng, từ những người mới bắt đầu đến các vận động viên chuyên nghiệp, giúp họ nâng cao sức mạnh, tăng cường sức bền và phát triển lối sống lành mạnh.</p>

                <p>Không chỉ dừng lại ở việc hướng dẫn tập luyện, Nguyễn Văn A còn tận tâm trong việc tư vấn chế độ dinh dưỡng, điều chỉnh thói quen sinh hoạt để đảm bảo học viên đạt được kết quả tối ưu và duy trì phong độ lâu dài. Bằng phương pháp huấn luyện khoa học, kết hợp giữa kỹ thuật chuyên môn và sự thấu hiểu cá nhân, anh đã giúp nhiều học viên thay đổi cơ thể một cách bền vững, cải thiện các vấn đề sức khỏe như đau lưng, thừa cân hay suy giảm thể lực. Chính sự tận tâm và cách tiếp cận toàn diện đã giúp anh trở thành một người thầy, một người bạn đồng hành đáng tin cậy trên hành trình chinh phục sức khỏe và vóc dáng lý tưởng của mỗi học viên.</p>
            </div>

            <div class="infoAthleteBox_info_box_best">
                <h2>Kỷ lục</h2>
                <table class="tableRanking">
                    <thead>
                        <tr>
                            <th>Equip</th>
                            <th>Squat</th>
                            <th>Bench</th>
                            <th>Deadlift</th>
                            <th>Total</th>
                            <th>Dots</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $lifters = [
                                ['Raw', 507, 292.1, 485, 1278.6, 659.24],
                                ['Wraps', 573.2, '-', '-', 1350.3, 709.96],
                                ['Single', 440.9, 198.4, 330.7, 970, 505.56],
                            ];
                        @endphp
                        @foreach ($lifters as $lifter)
                            <tr>
                                @foreach ($lifter as $value)
                                    @php
                                        $class = '';
                                        if($loop->index==1) $class = 'nameLifter';
                                        if($loop->index==7) $class = 'squad';
                                        if($loop->index==8) $class = 'bench';
                                        if($loop->index==9) $class = 'deadlift';
                                    @endphp
                                    <td class="{{ $class }}">
                                        @if($loop->index==1)
                                            <a href="#">{{ $value }}</a>
                                        @else 
                                            {{ $value }}
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>
            <!-- record -->
            <div class="infoAthleteBox_info_box_best">
                <h2>Thành tích</h2>
                <table class="tableRanking">
                    <thead>
                        <tr>
                            <th>Place</th>
                            <th>Fed</th>
                            <th>Competition</th>
                            <th>Age</th>
                            <th>Equip</th>
                            <th>Class</th>
                            <th>Weight</th>
                            <th>Squat</th>
                            <th>Bench</th>
                            <th>Deadlift</th>
                            <th>Total</th>
                            <th>Dots</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $lifters = [
                                [1, 'WRPF', 'The American Pro 2', 43, 'Wraps', 165, 163.1, 628.3, 336.2, 578.7, 1598.3, 711.19],
                                [1, 'WRPF', 'PPC Finals', 42, 'Raw', 165, 162.2, 556.6, 330.7, 600.7, 1515.6, 676.36],
                                [1, 'WRPF', 'American Pro', 41, 'Wraps', 165, 163.8, 606.2, 336.2, 611.7, 1587.3, 704.76],
                            ];
                        @endphp
                        @foreach ($lifters as $lifter)
                            <tr>
                                @foreach ($lifter as $value)
                                    @php
                                        $class = '';
                                        if($loop->index==1) $class = 'nameLifter';
                                        if($loop->index==7) $class = 'squad';
                                        if($loop->index==8) $class = 'bench';
                                        if($loop->index==9) $class = 'deadlift';
                                    @endphp
                                    <td class="{{ $class }}">
                                        @if($loop->index==1)
                                            <a href="#">{{ $value }}</a>
                                        @else 
                                            {{ $value }}
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>
            
        </div>
    </div>

</div>