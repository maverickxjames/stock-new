@php
    $user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jiade.dexignlab.com/xhtml/portofolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:16 GMT -->

<head>
    <!--Title-->
    <title>Jiade : Crypto Trading UI Admin Bootstrap 5 Template | Dexignlabs</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Dexignlabs">
    <meta name="robots" content="index, follow">

    <meta name="keywords"
        content="Admin Dashboard, Bootstrap Template, FrontEnd, Web Application, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Bootstrap 5, HTML5, CSS3, JavaScript, Admin Template, UI Kit, SASS, SCSS, Analytics, Responsive Dashboard, responsive admin dashboard, ui kit, web app, Admin Dashboard, Template, Admin, Authentication, FrontEnd Integration, Web Application UI, Bootstrap Framework, User Interface Kit, SASS Integration, Customizable Template, HTML5/CSS3, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Modern Web Technologies, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Trend Analysis, User-Friendly Interface, Crypto Trading UI, Cryptocurrency Dashboard, Trading Platform Interface, Responsive Crypto Admin, Financial Dashboard, UI Components for Crypto, Cryptocurrency Exchange, Blockchain , Crypto Portfolio Template, Crypto Market Analytics">

    <meta name="description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:title" content="Jiade : Crypto Trading UI Admin  Bootstrap 5 Template | Dexignlabs">
    <meta property="og:description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:image" content="social-image.png">

    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Jiade : Crypto Trading UI Admin  Bootstrap 5 Template | Dexignlabs">
    <meta name="twitter:description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">
      <!-- Datatable -->
      <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <x-nav-header />
        <!--**********************************
            Nav header end
        ***********************************-->

     
        <!--**********************************
            Header start
        ***********************************-->
        <x-header/>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->



        <!--**********************************
            Sidebar start
        ***********************************-->
        <x-sidebar />
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

  


        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-12">
                        <div class="card portofolio">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">My Profile</h4>
                                <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                    <div class="btn sharp tp-btn" data-bs-toggle="dropdown" aria-expanded="false"
                                        role="button">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center my-profile">
                                    <div class="media d-block">
                                        <div class="media-img">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9131/9131529.png"
                                                alt="">
                                            <a onclick="window.location.href='{{ route('profile') }}'"
                                                href="javascript:void(0);"><i class="fas fa-pencil-alt"
                                                    aria-hidden="true"></i></a>
                                        </div>

                                        <h3 class="mt-3 font-w800 text-dark">{{ $user['name'] }}</h3>
                                        <span>{{ $user['email'] }}</span>
                                    </div>
                                    <div class="media-content">
                                        <h4 class="mt-3 font-w400 fs-16 text-dark mb-0">Join on
                                            {{ date('d F Y', strtotime($user['created_at'])) }}</h4>
                                        <button onclick="window.location.href='{{ route('order') }}'"
                                            class="my-3 btn btn-success">View Orders </button>
                                    </div>
                                    <ul class="portofolio-social mb-3">
                                        <li><a href="javascript:void(0);"><i class="fa fa-phone"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <div class="card">
                            <div class="card-header border-0 flex-wrap">
                                <h4 class="card-title">Coin Holding
                                </h4>
                                <div class="d-flex align-items-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        + Add New
                                    </button>

                                    <div class="dropdown custom-dropdown mb-0 ms-3">
                                        <div class="btn sharp tp-btn" data-bs-toggle="dropdown" aria-expanded="false"
                                            role="button">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive dataTabletrade">
                                    <table id="example-history-2"
                                        class="table shadow-hover display  orderbookTable"
                                        style="min-width:845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Time</th>
                                                <th>Script</th>
                                                <th>Order Type</th>
                                                <th>Order Action</th>
                                                <th>Lot</th>
                                                <th>Quantity</th>
                                                <th>Order Price</th>
                                                <th>Expiry</th>
                                                {{-- <th>Status</th> --}}
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- fetch order detail  --}}
                                            <?php
                                            // Fetch authenticated user's orders
                                            $orders = DB::table('trades')
                                                ->where('user_id', Auth::user()->id)
                                                ->get();
                                            ?>
                                            @foreach ($orders as $order)
                                           @if($order->status == 'completed')
                                              <tr>
                                                    <td>{{ $loop->iteration }}</td> <!-- S.No. -->
                                                    {{-- <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}</td>  --}}
                                                    <td>{{ $order->created_at }}</td> <!-- Time -->
                                                    <td>
                                                        <a class="market-title d-flex align-items-center"
                                                            href="javascript:void(0);">
                                                            <div class="market-icon me-2">
                                                                <img src="https://s3tv-symbol.dhan.co/symbols/{{ $order->stock_symbol }}.svg" alt="icon"
                                                                    class="styled-logo">
                                                            </div>
                                                            {{ $order->stock_symbol }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $order->order_type }}</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-sm {{ $order->action == 'BUY' ? 'badge-success' : 'badge-danger' }}">
                                                            {{ ucfirst($order->action) }}
                                                        </span>
                                                    </td>
                                                   
                                                    <!-- Adjust based on order type -->
                                                    <td>{{ $order->lotSize }}</td> <!-- Price per stock -->
                                                    <td>{{ $order->quantity }}</td> <!-- Price per stock -->
                                                    <td><span
                                                            class="badge badge-sm badge-light">₹{{ number_format($order->price, 2) }}</span>
                                                    </td> <!-- Total value -->
                                                    <td>{{ $order->expiry }}</td>
                                                    {{-- <td>{{ $order->status }}</td> --}}
                                                    <!-- Quantity -->
                                                    <td>
                                                        <div class="text-end">
                                                            <a href="#"
                                                                class="btn btn-primary shadow btn-xs sharp me-3">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-danger shadow btn-xs sharp">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                           @endif
                                              
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card h-auto">
                            <div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
                                <div class="mb-3">
                                    <h4 class="card-title">Recent Activity</h4>
                                    <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-yesterday-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-Yesterday" type="button"
                                            role="tab" aria-controls="pills-Yesterday"
                                            aria-selected="true">Yesterday</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-today-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-today" type="button" role="tab"
                                            aria-controls="pills-today" aria-selected="false">Today</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content pt-0 pb-sm-0 pb-3 ">

                                <div class="tab-pane fade show active" id="pills-Yesterday" role="tabpanel"
                                    aria-labelledby="pills-yesterday-tab">
                                    <div class="table-responsive">
                                        <table class="table portfolio-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end"><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="pills-today" role="tabpanel"
                                    aria-labelledby="pills-today-tab">
                                    <div class="table-responsive">
                                        <table class="table portfolio-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end"><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Today">
                                    <div class="table-responsive">
                                        <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card overflow-hidden h-auto">
                                    <div class="card-body pb-4">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-5">
                                                <h4 class="card-title mb-0">Weekly Summary</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex mb-3 align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#2BC155" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">30%</span>
                                                    <span class="fs-14">Succesfull Market</span>
                                                </div>
                                                <div class="d-flex mb-3 align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#FD5353" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">46%</span>
                                                    <span class="fs-14">Appllication Answered</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#D7D7D7" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">10%</span>
                                                    <span class="fs-14">Pending</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-7 align-self-center"
                                                style="position: relative;">
                                                <div id="columnChart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="align-items-center d-flex justify-content-between">
                                                    <div class="c-heading">
                                                        <span
                                                            class="text-dark font-w600 mb-2 d-block text-nowrap ">345</span>
                                                        <p class="mb-0 font-w500 text-nowrap">Transactions</p>
                                                    </div>
                                                    <div
                                                        class="d-inline-block position-relative donut-chart-sale mb-0">
                                                        <span class="donut1"
                                                            data-peity='{ "fill": ["rgb(9, 60, 189)", "rgba(245, 245, 245, 1)"],   "innerRadius": 40, "radius": 10}'>5/8</span>
                                                        <small class="text-dark">62%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12   col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="align-items-center d-flex justify-content-between">
                                                    <div class="c-heading">
                                                        <span class="text-dark font-w600 mb-2 d-block">4,563</span>
                                                        <p class="mb-0 font-w500">Income</p>
                                                    </div>
                                                    <div
                                                        class="d-inline-block position-relative donut-chart-sale mb-0">
                                                        <span class="donut1"
                                                            data-peity='{ "fill": ["rgba(255, 97, 117, 1)", "rgba(245, 245, 245, 1)"],   "innerRadius": 40, "radius": 10}'>3/8</span>
                                                        <small class="text-dark">38%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Current Graph</h4>
                                        <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                            <div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button"
                                                aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <div id="pieChart" class="d-inline-block"></div>
                                        <div class="chart-items">
                                            <div class=" col-xl-12 col-sm-12">
                                                <div class="row text-dark text-start fs-13 mt-4">
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#3C8AFF" />
                                                        </svg>
                                                        Food
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#FF5166" />
                                                        </svg>
                                                        Rent
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#ED3DD1" />
                                                        </svg>
                                                        Transport
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#2BC844" />
                                                        </svg>
                                                        Installment
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#FFEE54" />
                                                        </svg>
                                                        Investment
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a> <span class="current-year">2024</span>
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <!-- Dashboard 1 -->
    <script src="js/dashboard/portfolio.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/portofolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:17 GMT -->

</html>
