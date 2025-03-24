<div class="infoAthleteBox">
    <div class="infoAthleteBox_item image">
        @php
            $image = Storage::url('images/image-default-660x660.png');
        @endphp
        <img src="{{ $image }}" alt="" title="" />
    </div>

    <div class="infoAthleteBox_item detail">

        <div class="infoAthleteBox_item_title">
            <h2 style="margin-top:0 !important;">Thông tin</h2>
        </div>
        <div class="infoAthleteBox_item_box">
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa-solid fa-venus-mars"></i> Giới tính:</div>
                <div>{{ config('main_'.env('APP_NAME').'.sex.'.$item->sex.'.name') }}</div>
            </div>
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa-solid fa-cake-candles"></i> Năm sinh:</div>
                <div>{{ $item->birth_day ?? '' }}</div>
            </div>
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa fa-phone" aria-hidden="true"></i> Liên hệ:</div>
                <div>{{ $item->phone ?? '' }} - {{ !empty($item->email) ? strtolower($item->email) : '' }}</div>
            </div>
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa-solid fa-calendar-days"></i> Bắt đầu tập Pwl:</div>
                <div>{{ $item->start_pwl ?? '' }}</div>
            </div>
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa-solid fa-dumbbell"></i> Hạng cân:</div>
                <div>{{ $item->classWeight->name ?? '-' }} kg</div>
            </div>
            <div class="infoAthleteBox_item_box_item">
                <div><i class="fa-solid fa-star"></i> Team /VĐV tự do:</div>
                <div>{{ $item->team ?? '' }}</div>
            </div>
        </div>
    </div>

    <div class="infoAthleteBox_item tableRakingBox">
        <h2>Kỷ lục</h2>
        <div class="tableRanking">
            <table>
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
    </div>
    <!-- record -->
    <div class="infoAthleteBox_item tableRakingBox">
        <h2>Thành tích</h2>
        <div class="tableRanking">
            <table>
                <thead>
                    <tr>
                        <th>Place</th>
                        <th>Fed</th>
                        <th style="min-width:110px;">Competition</th>
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
                                    if($loop->index==2) $class = 'nameLifter';
                                    if($loop->index==7) $class = 'squad';
                                    if($loop->index==8) $class = 'bench';
                                    if($loop->index==9) $class = 'deadlift';
                                @endphp
                                <td class="{{ $class }}">
                                    @if($loop->index==2)
                                        <a href="/bang-xep-hang/2023-wrpf-the-american-pro-2">{{ $value }}</a>
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