@if($item->seo->level<2)
    <form class="filterRanking" method="GET">
        
        <div class="filterRanking_item">
            <select name="fed">
                <option value="">All Feds</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="equip">
                <option value="">Raw + Wrap</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="class">
                <option value="">All Classes</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="age">
                <option value="">All Ages</option>
                @for ($i = 20; $i <= 40; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="sex">
                <option value="">All Sexes</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="year">
                <option value="">All Years</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="event">
                <option value="">All Events</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="filterRanking_item">
            <select name="dot">
                <option value="">By Dots</option>
                <option value="">...</option>
            </select>
        </div>
    </form>
@endif


@if($item->seo->level<2)
    <table class="tableRanking">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Lifter</th>
                <th>Fed</th>
                <th>Date</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Equip</th>
                <th>Class</th>
                <th>Weight</th>
                <th>Squat</th>
                <th>Bench</th>
                <th>Deadlift</th>
                <th>Total</th>
                <th>Wilks</th>
            </tr>
        </thead>
        <tbody>
            @php
                $lifters = [
                    [1, 'Marianna Gasparyan', 'WRPF', '2025-03-05', 'F', 30, 'Wraps', 123, 123.4, 573.2, 292.1, 485, 1350.3, 720.67],
                    [2, 'Stefanie Cohen', 'WRPF', '2025-03-05', 'F', 27, 'Wraps', 123, 119.9, 507, 242.5, 529.1, 1278.6, 698.11],
                    [3, 'Yury Belkin', 'WRPF', '2025-03-05', 'M', 28, 'Wraps', 242, 227.9, 914.9, 507, 881.8, 2303.8, 627.89],
                    [4, 'Chleo Van Wyk', 'WRPF', '2025-03-05', 'F', 28, 'Wraps', 181, 174.8, 562.1, 352.7, 578.7, 1493.6, 622.98],
                    [5, 'Kody Blazek', 'WRPF', '2025-03-05', 'M', 32, 'Wraps', 181, 175.9, 722, 462.9, 771.6, 1956.6, 606.85],
                    [6, 'Jason Legrand', 'WRPF', '2025-03-05', 'M', 25, 'Wraps', 242, 237.2, 881.8, 490.5, 832.2, 2204.6, 592.62],
                    [7, 'Laura Tedeschi', 'WRPF', '2025-03-05', 'F', 28, 'Wraps', 132, 128.9, 462.9, 248, 429.9, 1140.9, 588.43],
                    [8, 'Ashley Garcia #1', 'WRPF', '2025-03-05', 'F', 37, 'Wraps', 165, 158.5, 501.5, 270, 551.1, 1322.7, 586.17],
                    [9, 'Chad Penson', 'WRPF', '2025-03-05', 'M', 26, 'Wraps', 181, 181.4, 733, 451.9, 738.5, 1923.5, 585.35],
                    [10, 'Cailer Woolam', 'WRPF', '2025-03-05', 'M', 24, 'Raw', 220, 214, 661.4, 474, 950.2, 2085.5, 582.79],
                    [11, 'Rostislav Petkov', 'WRPF', '2025-03-05', 'M', 30, 'Wraps', 181, 177.4, 727.5, 435.4, 705.4, 1868.4, 576.33],
                    [12, 'Erbol Nauanov', 'WRPF', '2025-03-05', 'M', 29, 'Wraps', 198, 195.7, 771.6, 474, 727.5, 1973.1, 575.33],
                ];
                for ($i = 13; $i <= 100; $i++) {
                    $lifters[] = [$i, 'Lifter '.$i, 'WRPF', '2025-03-05', ($i % 2 == 0) ? 'M' : 'F', rand(20, 40), (rand(0,1) ? 'Wraps' : 'Raw'), rand(120, 250), rand(120, 250) + (rand(0,9)/10), rand(400, 900) + (rand(0,9)/10), rand(200, 500) + (rand(0,9)/10), rand(400, 1000) + (rand(0,9)/10), rand(1200, 2300) + (rand(0,9)/10), rand(500, 750) + (rand(0,9)/10)];
                }
            @endphp
            @foreach ($lifters as $lifter)
                <tr>
                    @foreach ($lifter as $value)
                        @php
                            $class = '';
                            if($loop->index==1) $class = 'nameLifter';
                            if($loop->index==3) $class = 'event';
                            if($loop->index==7) $class = 'squad';
                            if($loop->index==8) $class = 'bench';
                            if($loop->index==9) $class = 'deadlift';
                        @endphp
                        <td class="{{ $class }}">
                            @if($loop->index==1)
                                <a href="#">{{ $value }}</a>
                            @elseif($loop->index==3)
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
@else

    <table class="tableRanking">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Lifter</th>
                <th>Sex</th>
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
                $lifters = [];
                for ($i = 1; $i <= 100; $i++) {
                    $sex = (rand(0, 1) == 0) ? 'M' : 'F';
                    $age = rand(20, 45);
                    $equip = (rand(0, 1) == 0) ? 'Raw' : 'Wraps';
                    $class = [123, 132, 165, 181, 198, 220, 242][array_rand([123, 132, 165, 181, 198, 220, 242])];
                    $weight = rand(120, 250);
                    $squat = rand(400, 900) / 10;
                    $bench = rand(300, 600) / 10;
                    $deadlift = rand(400, 900) / 10;
                    $total = $squat + $bench + $deadlift;
                    $dots = $total / ($weight / 100);
                    $lifters[] = [$i, "Lifter $i", $sex, $age, $equip, $class, $weight, $squat, $bench, $deadlift, $total, round($dots, 2)];
                }
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

@endif