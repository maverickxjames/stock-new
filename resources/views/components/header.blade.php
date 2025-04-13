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

                    {{-- <li class="nav-item dropdown notification_dropdown" title="Change Theme">
                        <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                            <svg id="icon-light" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 24 24"
                                version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </g>
                            </svg>
                            <svg id="icon-dark" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 24 24"
                                version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="32px" height="32px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
                                        fill="#fff" />
                                    <rect fill="#fff" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div id="DZ_W_Notification3" class="widget-media dlab-scroll p-3" style="height:380px;">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-info">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-success">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-danger">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-primary">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                    class="ti-arrow-end"></i></a>
                        </div>
                    </li> --}}

                    {{-- <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="32px" height="32px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                        fill="#fff" />
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
    
    <div class="stock-box page-titles" style="width: 100%;magrin-right: 0px;margin-left: 0px;">
        <!-- NIFTY -->

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


        <!-- Divider -->
        <div class="divider mx-2"></div>

        <!-- SENSEX -->

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