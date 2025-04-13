<?php
$user = auth()->user();
?>


<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>
                <ul class="navbar-nav header-right">

                    {{-- <li class="nav-item dropdown add_item_dropdown" title="Add Script">
                        <a class="nav-link add-icon " href="javascript:void(0);" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <!-- Light Theme Add Icon -->
                            <svg id="icon-light-add" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="50" height="24" />
                                    <path
                                        d="M12,5 C12.5522847,5 13,5.44771525 13,6 L13,11 L18,11 C18.5522847,11 19,11.4477153 19,12 C19,12.5522847 18.5522847,13 18,13 L13,13 L13,18 C13,18.5522847 12.5522847,19 12,19 C11.4477153,19 11,18.5522847 11,18 L11,13 L6,13 C5.44771525,13 5,12.5522847 5,12 C5,11.4477153 5.44771525,11 6,11 L11,11 L11,6 C11,5.44771525 11.4477153,5 12,5 Z"
                                        fill="#FFFFFF" />
                                </g>
                            </svg>

                        </a>
                    </li> --}}

                    <li>
                        <div class="dropdown header-profile2">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="header-info2 d-flex align-items-center">
                                    <div class="d-flex align-items-center sidebar-info">
                                        <div>
                                            <h4 class="text-white mb-1">{{ $user['name'] }}</h4>
                                            <span class="d-block text-end">{{ $user['email'] }}</span>
                                        </div>
                                    </div>
                                    <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end header-profile3 " style="">
                                <a onclick="window.location.href='{{ route('profile') }}'"
                                    class="dropdown-item ai-icon " style="cursor: pointer;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1077/1077012.png" alt="">
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a onclick="window.location.href='{{ route('portfolio') }}'"
                                    class="dropdown-item ai-icon " style="cursor: pointer;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/943/943026.png" alt="">
                                    <span class="ms-2">Portfolio </span>
                                </a>

                                <a onclick="window.location.href='{{ route('profile') }}'"
                                    class="dropdown-item ai-icon " style="cursor: pointer;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2698/2698011.png" alt="">
                                    <span class="ms-2">Settings </span>
                                </a>
                                <a onclick="window.location.href='{{ route('logoutt') }}'" class="dropdown-item ai-icon"
                                    style="cursor: pointer;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/12795/12795397.png" alt="">
                                    <span class="ms-2 text-danger">Logout </span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @php
    $indices = [
        ['label' => 'NIFTY', 'key' => 'NSE_INDEX|Nifty 50'],
        ['label' => 'SENSEX', 'key' => 'BSE_INDEX|SENSEX'],
        ['label' => 'BANKNIFTY', 'key' => 'NSE_INDEX|Nifty Bank'],
        ['label' => 'NIFTY NEXT 50', 'key' => 'NSE_INDEX|Nifty Next 50'],
        ['label' => 'MIDCAP SELECT', 'key' => 'NSE_INDEX|NIFTY MID SELECT'],
        ['label' => 'FINNIFTY', 'key' => 'NSE_INDEX|Nifty Fin Service'],
        ['label' => 'SENSEX50', 'key' => 'BSE_INDEX|SENSEX50'],
        ['label' => 'BANKEX', 'key' => 'BSE_INDEX|BANKEX'],
    ];

    $indexData = [];

    foreach ($indices as $index) {
        $data = DB::table('future_temp')->where('instrumentKey', $index['key'])->first();
        if ($data) {
            $change = $data->ltp - $data->cp;
            $changePercent = $data->cp != 0 ? ($change / $data->cp) * 100 : 0;

            $indexData[] = [
                'label' => $index['label'],
                'ltp' => number_format($data->ltp, 2),
                'change' => number_format($change, 2),
                'percent' => number_format($changePercent, 2),
                'positive' => $change >= 0,
                'ltp_id' => strtolower(str_replace(' ', '', $index['label'])) . 'Ltp',
                'change_id' => strtolower(str_replace(' ', '', $index['label'])) . 'Change',
            ];
        }
    }
@endphp
<div class="stock-box page-titles stock-marquee-wrapper overflow-hidden" style="width: 100%;magrin-right: 0px;margin-left: 0px;">
    <div class="stock-marquee d-flex align-items-center">

        @foreach($indexData as $data)
            <div class="d-flex justify-content-between align-items-center gap-5">
                <div class="d-flex flex-column">
                    <div class="stock-label">{{ $data['label'] }}</div>
                    <div class="{{ $data['positive'] ? 'stock-success-value' : 'stock-danger-value' }}"
                         id="{{ $data['ltp_id'] }}">
                        {{ $data['ltp'] }}
                    </div>
                </div>
                <div class="d-flex flex-column {{ $data['positive'] ? 'stock-success-change' : 'stock-danger-value' }}"
                     id="{{ $data['change_id'] }}">
                    <div>{{ $data['positive'] ? '+' : '-' }}{{ ltrim($data['percent'], '-') }}%</div>
                    <div>{{ $data['positive'] ? '+' : '-' }}{{ ltrim($data['change'], '-') }}</div>
                </div>
            </div>

            @if (!$loop->last)
                <div class="divider mx-2"></div>
            @endif
        @endforeach

    </div>
</div>

    {{-- @php
    $datas=DB::table('future_temp')->where('instrumentType','INDEX')->get();

    $sensexData=DB::table('future_temp')->where('instrumentKey','BSE_INDEX|SENSEX')->first();
    $niftyData=DB::table('future_temp')->where('instrumentKey','NSE_INDEX|Nifty 50')->first();

    // print_r($sensexData);
    // print_r($niftyData);

    $sensexChange=$sensexData->ltp-$sensexData->cp;
    $niftyChange=$niftyData->ltp-$niftyData->cp;

    $sensexChangePercentage=($sensexChange/$sensexData->cp)*100;
    $niftyChangePercentage=($niftyChange/$niftyData->cp)*100;

    $sensexChangePercentage=number_format($sensexChangePercentage,2);
    $niftyChangePercentage=number_format($niftyChangePercentage,2);
    $sensexChange=number_format($sensexChange,2);
    $niftyChange=number_format($niftyChange,2);
    $sensexLtp=number_format($sensexData->ltp,2);
    $niftyLtp=number_format($niftyData->ltp,2);

    @endphp

    <div class="stock-box page-titles stock-marquee-wrapper overflow-hidden"
        style="width: 100%;magrin-right: 0px;margin-left: 0px;">
        <div class="stock-marquee d-flex align-items-center">

        
        <!-- NIFTY -->
        <div class=" d-flex justify-content-between align-items-center gap-5">
            <div class="d-flex flex-column">
                <div class="stock-label">NIFTY</div>
                <div class="{{ $niftyChange >= 0 ? 'stock-success-value' : 'stock-danger-value' }}" id="niftyLtp">
                    {{ $niftyLtp }}
                </div>
            </div>
            <div class="d-flex flex-column {{ $niftyChange >= 0 ? 'stock-success-change' : 'stock-danger-value' }}"
                id="niftyChange">
                <div>{{ $niftyChange >= 0 ? '+' : '' }}{{ $niftyChangePercentage }}%</div>
                <div>{{ $niftyChange >= 0 ? '+' : '' }}{{ $niftyChange }}</div>
            </div>
        </div>


        <!-- Divider -->
        <div class="divider mx-2"></div>

        <!-- SENSEX -->
        <div class="d-flex justify-content-between align-items-center gap-5">
            <div class="d-flex flex-column">
                <div class="stock-label">SENSEX</div>
                <div class="{{ $sensexChange >= 0 ? 'stock-success-value' : 'stock-danger-value' }}" id="sensexLtp">
                    {{ $sensexLtp }}
                </div>
            </div>
            <div class="d-flex flex-column {{ $sensexChange >= 0 ? 'stock-success-change' : 'stock-danger-value' }}"
                id="sensexChange">
                <div>{{ $sensexChange >= 0 ? '+' : '' }}{{ $sensexChangePercentage }}%</div>
                <div>{{ $sensexChange >= 0 ? '+' : '' }}{{ $sensexChange }}</div>
            </div>
        </div>

    </div>


</div> --}}


</div>