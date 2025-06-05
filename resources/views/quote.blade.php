@php
    $user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        .stock-marquee-wrapper {
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            background: #f9f9f9;
        }

        .stock-marquee {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .stock-box {
            background-color: #ffffff;
            border-top: 3px solid #f48c06;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            width: max-content;
        }

        .divider {
            border-left: 1px solid #ccc;
            height: 2.5rem;
        }

        .stock-label {
            font-weight: bold;
            color: #343a40;
        }

        .stock-success-value {
            color: #198754;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .stock-success-change {
            color: #198754;
            font-size: 0.875rem;
        }

        .stock-danger-value {
            color: #dc3545;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .stock-danger-change {
            color: #dc3545;
            font-size: 0.875rem;
        }

        .wallet-balance {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-deposit,
        .btn-withdraw {
            width: 80%;
            margin-bottom: 10px;
        }

        @media (min-width: 992px) {

            /* Large screen (lg) breakpoint in Bootstrap */
            .pl-lg-custom {
                padding-left: 10rem !important;
            }
        }
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">

    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<style>
    #preload {
        position: fixed;
        width: 100%;
        height: 100%;
        background: black;
        /* Pure black background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }



    .blink {
        animation: blink-animation 1.5s infinite;
    }

    @keyframes blink-animation {
        50% {
            opacity: 0;
        }
    }

    /* .badge-success {
    background-color: #28a745;
    color: #fff;
}

.badge-danger {
    background-color: #dc3545;
    color: #fff;
} */

    .trade-container {
        display: flex;
        flex-direction: column;
        padding: 0;
        /* Remove padding from container */
        margin: 0;
    }

    .trade-item {
        padding: 5px 10px;
        /* Padding inside each trade item */
        border-bottom: 1px solid #ddd;
        /* Add a bottom border for separation */
        font-size: 16px;
        /* Adjust font size */
        color: #333;
        /* Set a nice text color */
        background-color: #f9f9f9;
        /* Optional: Add background color */
        transition: background-color 0.3s;
        /* Add a smooth transition effect */
        display: flex;
        justify-content: space-between;
    }

    .trade-item h2 {
        margin: 0;
        /* Remove margin for the heading */
        /* color: #565656; */
        font-family: serif;
        font-weight: 600;
    }

    .trade-item:last-child {
        border-bottom: none;
        /* Remove the border for the last item */
    }

    .trade-item:hover {
        background-color: #e9ecef;
        /* Add hover effect for better interactivity */
        cursor: pointer;
        /* Pointer cursor for better UX */
    }
</style>

<style>
    .offcanvas-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* padding: 1rem 1.5rem; */
        border-bottom: 1px solid #e9ecef;
    }

    #chart {
        width: 100%;
        height: 400px;
    }

    #symbol-name {
        text-align: center;
        font-size: 24px;
        margin-top: 10px;
    }

    .price-info {
        text-align: center;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .toolbar {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
        justify-content: center;
    }

    .button {
        padding: 5px 10px;
        border: 1px solid #ccc;
        cursor: pointer;
        background-color: #f7f7f7;
        font-size: 14px;
    }

    .button.active {
        background-color: #d1e7ff;
    }
</style>

<body>

    <!--Preloader start-->
    <div id="preload">
        <p style="color: white; font-size: 1.5rem;"></p>
    </div>

    <!--Preloader end-->




    <!--Main wrapper start-->
    <div id="main-wrapper" class="show">

        <!--Nav header start-->
        <x-nav-header />
        <!--Nav header end-->

        <!--Header start-->
        <x-header />
        <!--Header end-->


        <!--Sidebar start-->
        <x-sidebar />

        <x-footer-menu />
        <!--Sidebar end-->


        <div class="content-body" style="padding-bottom: 50px;">
            <div class="container-fluid">
                {{-- <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0"> --}}
                <!-- row -->
                <div class="row">
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="custom-tab">
                            <div class="tab-content pt-3" id="myTabContent1">
                                <div class="tab-pane fade show active" id="DefaultTab1" role="tabpanel"
                                    aria-labelledby="home-tab1">
                                    <div class="card-body pt-0">
                                        <!-- Nav tabs -->
                                        <div class="custom-tab-1">
                                            <ul class="nav nav-tabs gap-4">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#future"
                                                        role="tab">Future</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#option"
                                                        role="tab">Option</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab"
                                                        href="#mcx">Commodities</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#indcies"
                                                            onclick="changeQuote('indices')">Indices</a>
                                                    </li> --}}
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="future" role="tabpanel">
                                                    @php
                                                        $data = DB::table('future_temp')
                                                            ->where('instrumentType', 'FUT')
                                                            ->where('segment', 'NSE_FO')
                                                            ->where('is_watchlist', 1)
                                                            ->get();

                                                    @endphp
                                                    <div class="input-group mt-4 search-area-2"
                                                        onclick="showWatchlist('future',{{ $data }})"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                        aria-controls="offcanvasRight">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search & Add NSE Future ">
                                                        <span class="input-group-text"><a href="javascript:void(0)">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" class="svg-main-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24"
                                                                            height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"></path>
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a></span>
                                                    </div>


                                                    <div class="pt-4">
                                                        <div id="futureRefresh">
                                                            @include('components.future-quote', [
                                                                'fetch' => $fetch,
                                                            ])
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="option" role="tabpanel">
                                                    @php
                                                        $data1 = DB::table('future_temp')
                                                            ->where(function ($query) {
                                                                $query
                                                                    ->where('instrumentType', 'PE')
                                                                    ->orWhere('instrumentType', 'CE');
                                                            })
                                                            ->where('is_watchlist', 1)
                                                            ->get();
                                                    @endphp
                                                    <div class="input-group mt-4 search-area-2"
                                                        onclick="showWatchlist('option',{{ $data1 }})"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                        aria-controls="offcanvasRight">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search & Add Option Future ">
                                                        <span class="input-group-text"><a href="javascript:void(0)">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" class="svg-main-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24"
                                                                            height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"></path>
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a></span>
                                                    </div>


                                                    <div class="pt-4">
                                                        <div id="optionRefresh">
                                                            @include('components.option-quote', [
                                                                'fetch' => $fetch,
                                                            ])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="mcx">
                                                    @php
                                                        $data2 = DB::table('future_temp')
                                                            ->where('instrumentType', 'FUT')
                                                            ->where('segment', 'MCX_FO')
                                                            ->where('is_watchlist', 1)
                                                            ->get();
                                                    @endphp
                                                    <div class="input-group mt-4 search-area-2"
                                                        onclick="showWatchlist('mcx',{{ $data2 }})"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                        aria-controls="offcanvasRight">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search & Add MCX Future/Option">
                                                        <span class="input-group-text"><a href="javascript:void(0)">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" class="svg-main-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24"
                                                                            height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"></path>
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a></span>
                                                    </div>


                                                    <div class="pt-4">
                                                        <div id="mcxRefresh">
                                                            @include('components.mcx-quote', [
                                                                'fetch' => $fetch,
                                                            ])
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- @php
                                                    $data3=DB::table('future_temp')->where('instrumentType','INDEX')->where('is_watchlist',1)->get();


                                                    @endphp
                                                    <div class="tab-pane fade" id="indcies">
                                                        <div class="input-group mt-4 search-area-2 "
                                                            onclick="showWatchlist('indices',{{ $data3 }})"
                                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                            aria-controls="offcanvasRight">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search & Add Indice Future/Option ">
                                                            <span class="input-group-text"><a href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1" class="svg-main-icon">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24">
                                                                            </rect>
                                                                            <path
                                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3"></path>
                                                                            <path
                                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                                fill="#000000" fill-rule="nonzero">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </a></span>
                                                        </div>


                                                        <div class="pt-4">
                                                            <div id="indciesRefresh">
                                                                @include('components.indices-quote', ['fetch' =>
                                                                $fetch])
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Column  -->


                </div>
                <!-- /row -->
                {{--
                </div> --}}
            </div>
        </div>





        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel" style="width: 1200px">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Add Your Script</h5>
                <button id="clearCacheBtn3" type="button" class=" text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                    style="border: none">
                    <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png" width="24" alt=""
                        onclick="hideSearch()">
                </button>

            </div>
            <div class="offcanvas-body">

                <div class="filter cm-content-box box-primary">
                    {{-- <div class="content-title SlideToolHeader">
                        <div class="cpa">
                            <i class="fa fa-list-alt me-2"></i>Add Script
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
                        </div>
                    </div> --}}
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <div class="row align-items-center mb-3">

                                <div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0">
                                    <input type="text" class="form-control" id="searchinp"
                                        placeholder="Search Script" onkeyup="searchScript(this)" autofocus>

                                </div>




                            </div>

                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    Menus
                                </div>

                            </div>
                            <div id="scrollR" class=" cm-content-body card-body pt-4 pb-0 height800 dlab-scroll">
                                <div class="contacts-list" id="RecentActivityContent">
                                    <p id="msg" class="text-center">Enter at least 2 characters in the Search
                                        box above to see results here.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <script>
        // Trade Start

        // buy form
        $(document).on('submit', '[id^="buyform"]', function(e) {
            e.preventDefault();
            var form = $(this);

            var url = form.attr('action');
            var type = form.attr('method');

            var formData = Object.fromEntries(new URLSearchParams(form.serialize()));
            console.log(formData);



            const id = formData.id;
            const row = formData.row;


            let data = {
                instrumentKey: formData[`instrumentKey${row}1${id}`],
                orderType: formData[`orderType${row}1${id}`],
                // quantity:formData[`quantity1${id}`],
                price: formData[`realprice${row}1${id}`],
                limitPrice: formData[`limitprice${row}1${id}`],
                targetPrice: formData[`targetprice${row}1${id}`],
                stoploss: formData[`stoploss${row}1${id}`],
                lotSize: formData[`lotSize${row}1${id}`],
                // costPrice:document.getElementById(`costPrice1${id}`).textContent,
                tradeType: formData[`tradeMode${row}1${id}`],
                _token: formData._token,
                // id:formData.id,
            }

            // if (formData[`lotSize${row}1${id}`] < 1) {
            //     Toastify({
            //         text: "Lot size must be greater than 0.",
            //         duration: 3000,
            //         gravity: "top",
            //         position: "center",
            //         offset: {
            //             y: "90px" 
            //         },
            //         backgroundColor: "#FF5733",
            //     }).showToast();
            //     return;
            // }

            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1, // Keep it visible until manually closed
                gravity: "top",
                offset: {
                    y: "90px" // Moves it 60px down from the top
                },
                position: "center",
                backgroundColor: "#3498db", // Blue for loading
            }).showToast();

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    loadingToast.hideToast(); // Hide loading toast

                    response = JSON.parse(response);


                    if (response.status === 'success') {
                        Toastify({
                            text: "✅ Order Placed ",
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            position: "center",
                            backgroundColor: "#3ab67a",
                            callback: function() {
                                let offcanvas = document.getElementById(
                                    `orderoffcanvasBottom${row}${id}`
                                ); // Use ID to select offcanvas
                                let bsOffcanvas = bootstrap.Offcanvas.getInstance(
                                    offcanvas);
                                bsOffcanvas.hide(); // Close the offcanvas

                                // Remove the backdrop after hiding the offcanvas
                                setTimeout(() => {
                                    document.querySelectorAll('.offcanvas-backdrop')
                                        .forEach(backdrop => {
                                            backdrop.remove();
                                        });
                                }, 300);
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            backgroundColor: "#FF5733",
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast(); // Hide loading toast in case of error

                    Toastify({
                        text: xhr.responseJSON?.message ||
                            'An error occurred while placing the order.',
                        duration: 3000,
                        gravity: "top",
                        position: "center",
                        offset: {
                            y: "90px" // Moves it 60px down from the top
                        },
                        backgroundColor: "#FF5733",
                    }).showToast();


                }
            });




        });


        // sell form
        $(document).on('submit', '[id^="sellform"]', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var type = form.attr('method');

            var formData = Object.fromEntries(new URLSearchParams(form.serialize()));
            console.log(formData);



            const id = formData.id2;
            const row = formData.row2;


            let data = {
                instrumentKey: formData[`instrumentKey${row}2${id}`],
                orderType: formData[`orderType${row}2${id}`],
                // quantity:formData[`quantity1${id}`],
                price: formData[`realprice${row}2${id}`],
                limitPrice: formData[`limitprice${row}2${id}`],
                lotSize: formData[`lotSize${row}2${id}`],
                targetPrice: formData[`targetprice${row}2${id}`],
                stoploss: formData[`stoploss${row}2${id}`],
                // costPrice:document.getElementById(`costPrice1${id}`).textContent,
                tradeType: formData[`tradeMode${row}2${id}`],
                _token: formData._token,
                // id:formData.id,
            }

            // if (formData[`lotSize${row}2${id}`] < 1) {
            //     Toastify({
            //         text: "Lot size must be greater than 0.",
            //         duration: 3000,
            //         gravity: "top",
            //         position: "center",
            //         offset: {
            //             y: "90px" 
            //         },
            //         backgroundColor: "#FF5733",
            //     }).showToast();
            //     return;
            // }

            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1, // Keep it visible until manually closed
                gravity: "top",
                offset: {
                    y: "90px" // Moves it 60px down from the top
                },
                position: "center",
                backgroundColor: "#3498db", // Blue for loading
            }).showToast();


            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    loadingToast.hideToast();
                    console.log(response); // Log the response for debugging

                    response = JSON.parse(response);

                    if (response.status === 'success') {
                        Toastify({
                            text: "✅ Order Placed ",
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            position: "center",
                            backgroundColor: "#3ab67a",
                            callback: function() {
                                let offcanvas = document.getElementById(
                                    `orderoffcanvasBottom${row}${id}`
                                ); // Use ID to select offcanvas
                                let bsOffcanvas = bootstrap.Offcanvas.getInstance(
                                    offcanvas);
                                bsOffcanvas.hide(); // Close the offcanvas

                                // Remove the backdrop after hiding the offcanvas
                                setTimeout(() => {
                                    document.querySelectorAll('.offcanvas-backdrop')
                                        .forEach(backdrop => {
                                            backdrop.remove();
                                        });
                                }, 300);
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message ||
                                "An error occurred while placing the order.",
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            backgroundColor: "#FF5733",
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast(); // Hide loading toast in case of error

                    Toastify({
                        text: xhr.responseJSON?.message ||
                            'An error occurred while placing the order.',
                        duration: 3000,
                        gravity: "top",
                        position: "center",
                        offset: {
                            y: "90px" // Moves it 60px down from the top
                        },
                        backgroundColor: "#FF5733",
                    }).showToast();
                }
            });

        });
        // Trade End 
    </script>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="vendor/apexchart/apexchart.js"></script>
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const previousValues = {};
        Echo.channel('search-channel') // Keep the name consistent here
            .listen('SearchEvent', (event) => {
                console.log(event);
                const feeds = event.searchResult.feeds;
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        let feedData = feeds[key]?.ff?.marketFF;
                        if (!feedData) {
                            feedData = feeds[key];

                        }

                        if (!feedData) continue;
                        console.log("feedData", feedData);
                        const receivedIsin = key;

                        const ltp = Number(feedData?.ltpc?.ltp ?? 0);
                        const bid = Number(feedData?.marketLevel?.bidAskQuote?.[0]?.bp ?? 0);
                        const ask = Number(feedData?.marketLevel?.bidAskQuote?.[0]?.ap ?? 0);
                        const high = Number(feedData?.marketOHLC?.ohlc?.[0]?.high ?? 0);
                        const low = Number(feedData?.marketOHLC?.ohlc?.[0]?.low ?? 0);

                        console.log("bid", bid, "ask", ask, "ltp", ltp, "high", high, "low", low);


                        const spanElement = document.querySelector(`span#${CSS.escape(receivedIsin)}`);
                        const bidSpan = document.querySelector(`span#bid_${CSS.escape(receivedIsin)}`);
                        const askSpan = document.querySelector(`span#ask_${CSS.escape(receivedIsin)}`);
                        const highSpanElement = document.querySelector(`span#high_${CSS.escape(receivedIsin)}`);
                        const lowSpanElement = document.querySelector(`span#low_${CSS.escape(receivedIsin)}`);


                        if (spanElement) {
                            spanElement.textContent = ltp.toFixed(2);
                        }
                        // Highlight bid changes
                        if (bidSpan) {
                            const prevBid = previousValues[receivedIsin]?.bid ?? bid;
                            bidSpan.textContent = bid.toFixed(2);
                            bidSpan.classList.remove("text-success", "text-danger");
                            if (bid > prevBid) {
                                bidSpan.classList.add("text-success");
                            } else if (bid < prevBid) {
                                bidSpan.classList.add("text-danger");
                            }
                        }

                        // Highlight ask changes
                        if (askSpan) {
                            const prevAsk = previousValues[receivedIsin]?.ask ?? ask;
                            askSpan.textContent = ask.toFixed(2);
                            askSpan.classList.remove("text-success", "text-danger");
                            if (ask > prevAsk) {
                                askSpan.classList.add("text-success");
                            } else if (ask < prevAsk) {
                                askSpan.classList.add("text-danger");
                            }
                        }
                        if (highSpanElement) {
                            highSpanElement.textContent = high.toFixed(2);
                        }
                        if (lowSpanElement) {
                            lowSpanElement.textContent = low.toFixed(2);
                        }

                        // Save current values
                        previousValues[receivedIsin] = {
                            bid,
                            ask
                        };



                    }
                }
            });





        Echo.channel('watchlists')
            .listen('Watchlist', (event) => {
                // console.log(event);
                const feeds = event.watchlist.feeds;

                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        let feedData = feeds[key].ff.marketFF;
                        if (!feedData) {
                            feedData = feeds[key].ff.indexFF;
                            feedData.marketLevel = null;
                        }

                        if (!feedData) continue;


                        const receivedIsin = key;

                        const isinElement1 = Array.from(document.querySelectorAll("p[id^='isin1']")).find(el => el
                            .textContent === receivedIsin);

                        const isinElement2 = Array.from(document.querySelectorAll("p[id^='isin2']")).find(el => el
                            .textContent === receivedIsin);

                        const isinElement3 = Array.from(document.querySelectorAll("p[id^='isin3']")).find(el => el
                            .textContent === receivedIsin);

                        const isinElement4 = Array.from(document.querySelectorAll("p[id^='isin4']")).find(el => el
                            .textContent === receivedIsin);

                        if (isinElement1) {
                            const rowId = isinElement1.id.replace('isin1', '');

                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;

                            


                            document.getElementById(`ltp1${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice11${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`stockrealprice11${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`realprice12${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0';
                            document.getElementById(`stockrealprice12${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0';
                            document.getElementById(`highlow1${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .high || '0' + '/' + feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`openclose1${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open || '0' + '/' + feedData.marketOHLC.ohlc[0].close || '0';

                            const percentageChange = cp > 0 ? parseFloat((((ltp - cp) / cp) * 100).toFixed(2)) : 0;

                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change1${rowId}`).innerHTML =
                                `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc1'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc1'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc1'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc1'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                            document.getElementById(`bid1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bp || '0';
                            document.getElementById(`ask1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .ap || '0';
                        }
                        if (isinElement2) {
                            const rowId = isinElement2.id.replace('isin2', '');


                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;

                            document.getElementById(`ltp2${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice21${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`stockrealprice21${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`realprice22${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0'; 
                            document.getElementById(`stockrealprice22${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0'; 
                            document.getElementById(`highlow2${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .high || '0' + '/' + feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`openclose2${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open || '0' + '/' + feedData.marketOHLC.ohlc[0].close || '0';

                            const percentageChange = cp > 0 ? parseFloat((((ltp - cp) / cp) * 100).toFixed(2)) : 0;

                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change2${rowId}`).innerHTML =
                                `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc2'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc2'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc2'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc2'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                            // bid and ask
                            document.getElementById(`bid2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bp || '0';
                            document.getElementById(`ask2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .ap || '0';
                        }
                        if (isinElement3) {
                            const rowId = isinElement3.id.replace('isin3', '');

                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;



                            document.getElementById(`ltp3${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice31${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`stockrealprice31${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.ap || '0';
                            document.getElementById(`realprice32${rowId}`).value = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0';
                            document.getElementById(`stockrealprice32${rowId}`).textContent = feedData?.marketLevel?.bidAskQuote?.[0]?.bp || '0';
                            document.getElementById(`highlow3${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .high || '0' + '/' + feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`openclose3${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open || '0' + '/' + feedData.marketOHLC.ohlc[0].close || '0';

                            const percentageChange = cp > 0 ? parseFloat((((ltp - cp) / cp) * 100).toFixed(2)) : 0;

                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change3${rowId}`).innerHTML =
                                `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc3'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc3'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc3'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc3'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                            // bid and ask
                            document.getElementById(`bid3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bp || '0';
                            document.getElementById(`ask3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .ap || '0';
                        }
                        if (isinElement4) {
                            const rowId = isinElement4.id.replace('isin4', '');
                            // console.log(rowId);

                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;



                            document.getElementById(`ltp4${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice41${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice42${rowId}`).value = feedData.ltpc.ltp || '0';
                            // document.getElementById(`limitprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            // document.getElementById(`limitprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`highlow4${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .high ||
                                '0' +
                                '/' + feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`openclose4${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open || '0' + '/' + feedData.marketOHLC.ohlc[0].close || '0';

                            // const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';

                            const percentageChange = cp > 0 ?
                                parseFloat((((ltp - cp) / cp) * 100).toFixed(2)) :
                                0;





                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change4${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc4'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc4'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc4'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc4'+rowId+'">  ('+badgeValue+' pts)</span>'}


                                `;




                            // bid and ask
                            document.getElementById(`bid4${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bp || '0';
                            document.getElementById(`ask4${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .ap || '0';
                        }

                    }
                }
            });

        const userId = '{{ $user->id }}';
        // Echo Private Channel for User
        Echo.channel('quote-channel')
            .listen('QuoteChannel', (data) => {
                console.log("New quote received:", data);
                let sendId = getActiveFilter();
                if (sendId == 'Future') {
                    sendId = '1';
                } else if (sendId == 'Option') {
                    sendId = '2';
                } else if (sendId == 'MCX') {
                    sendId = '3';
                } else {
                    sendId = '4';
                }
                if (data.userId == userId) {

                    $.ajax({
                        url: '{{ route('quoteRefresh', ':sendId') }}'.replace(':sendId',
                            sendId), // Properly passing the sendId
                        type: 'GET',
                        success: function(response) {
                            // delete quotesRefresh old data and replace with new data
                            if (sendId == '1') {
                                $('#futureRefresh').html(response);
                            } else if (sendId == '2') {
                                $('#optionRefresh').html(response);
                            } else if (sendId == '3') {
                                $('#mcxRefresh').html(response);
                            } else {
                                $('#indciesRefresh').html(response);
                            }



                        }
                    });

                }
                // Refresh the component

            });
    </script>




    <script>
        function showOrderForm(row, index) {
            const offcanvasId = `orderoffcanvasBottom${row}${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }

        let searchTimeout;
        let page = 1;
        let isFetching = false;
        let hasMoreData = true;
        let searchValue = '';

        function searchScript(input) {
            clearTimeout(searchTimeout);

            searchTimeout = setTimeout(() => {
                searchValue = input.value.toLowerCase().trim();
                if (!searchValue) return;

                page = 1;
                hasMoreData = true;
                fetchResults(true);
            }, 500);
        }

        function getActiveFilter() {
            let activeTab = document.querySelector('.nav-tabs .nav-link.active');
            let active = activeTab.innerText.trim();
            if (active == 'Commodities') active = 'MCX';
            return active;
        }

        function hideSearch() {
            document.getElementById("searchinp").value = "";
            document.getElementById("RecentActivityContent").innerHTML = "";
            document.getElementById("msg").style.display = "block";
        }

        function fetchResults(isNewSearch = false) {
            if (isFetching || !hasMoreData) return;
            isFetching = true;
            console.log(getActiveFilter());


            let type;
            switch (getActiveFilter()) {
                case 'Future':
                    type = 'future';
                    break;
                case 'Option':
                    type = 'option';
                    break;
                case 'Indices':
                    type = 'indices';
                    break;
                default:
                    type = 'mcx';
                    break;
            }



            showLoading();

            let url = `searchScript?search=${encodeURIComponent(searchValue)}&type=${type}&page=${page}&limit=10`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (isNewSearch) {
                        updateContactsList(data);
                    } else {
                        appendContactsList(data);
                    }

                    if (data.length < 10) {
                        hasMoreData = false;
                    } else {
                        page++;
                    }
                })
                .catch(error => console.error('Error:', error))
                .finally(() => {
                    isFetching = false;
                });
        }

        // Detect scroll to bottom
        document.getElementById("scrollR").addEventListener("scroll", function() {
            let offcanvas = this;
            if (offcanvas.scrollTop + offcanvas.clientHeight >= offcanvas.scrollHeight - 20) {
                fetchResults();
            }
        });

        function updateContactsList(responseData) {
            console.log(responseData);

            const container = document.getElementById("RecentActivityContent");

            // Clear existing content
            container.innerHTML = "";

            // Loop through API response and create new elements
            responseData.forEach((item) => {


                const contentHTML = `
                                    <div onclick='addWatchlist(${JSON.stringify(item)})' class="d-flex justify-content-between align-items-center my-3 border-bottom pb-3">
                                        <!-- Left side content -->
                                       
                                            <!-- Main stock info -->
                                            <div>
                                                <!-- Title and prices -->
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <h5 class="fs-6 fw-bold mb-0 me-3" id="script_symbol">${item.tradingSymbol} |</h5>
                                                    <span class="fs-6 text-success me-2" id="bid_${item.instrumentKey}">${item.bid}</span>
                                                    <span class="fs-6 text-success" id="ask_${item.instrumentKey}">${item.ask}</span>
                                                </div>

                                                <!-- BID/ASK and HIGH/LOW -->
                                                <div class="d-flex flex-wrap gap-3 mb-1">
                                                    <span class="fs-6">HIGH : 
                                                        <span id="high_${item.instrumentKey}">${item.high}</span>
                                                    </span>
                                                    <span class="fs-6">LOW : 
                                                        <span id="low_${item.instrumentKey}">${item.low}</span>
                                                    </span>
                                                </div>

                                                <!-- Expiry and Segment -->
                                                <span class="fs-6 text-muted" id="script_description">
                                                    Expiry: ${item.expiry}, Lot: ${item.lotSize}
                                                </span>
                                            </div>

                                             <div class="me-3">
                                                <!-- Checkbox -->
                                                <div class="form-check custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="form-check-input" ${item.isWatchlist ? 'checked' : ''} id="customCheckBox${item.row}" style="height: 25px; width: 25px;">
                                                </div>
                                            </div>
                                      
                                    </div>

                                `;
                container.insertAdjacentHTML("beforeend", contentHTML);
            });
        }



        function appendContactsList(responseData) {
            const container = document.getElementById("RecentActivityContent");
            const loadingIndicator = document.getElementById("loadingIndicator");

            // Hide loading indicator before adding new data
            loadingIndicator.style.display = "none";
            //    <img src="https://s3tv-symbol.dhan.co/symbols/${item.assetSymbol}.svg" alt="" class="avatar" id="avatar">


            // Loop through API response and create new elements
            responseData.forEach((item) => {
                const contentHTML = `
                             <div onclick='addWatchlist(${JSON.stringify(item)})' class="d-flex justify-content-between align-items-center my-3 border-bottom pb-3">
                                        <!-- Left side content -->
                                       
                                            <!-- Main stock info -->
                                            <div>
                                                <!-- Title and prices -->
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <h5 class="fs-6 fw-bold mb-0 me-3" id="script_symbol">${item.tradingSymbol} |</h5>
                                                    <span class="fs-6 text-success me-2" id="ltp1_${item.row}">${item.bid}</span>
                                                    <span class="fs-6 text-success" id="ltp2_${item.row}">${item.ask}</span>
                                                </div>

                                                <!-- BID/ASK and HIGH/LOW -->
                                                <div class="d-flex flex-wrap gap-3 mb-1">
                                                    <span class="fs-6">HIGH : 
                                                        <span id="high${item.row}">${item.high}</span>
                                                    </span>
                                                    <span class="fs-6">LOW : 
                                                        <span id="low${item.row}">${item.low}</span>
                                                    </span>
                                                </div>

                                                <!-- Expiry and Segment -->
                                                <span class="fs-6 text-muted" id="script_description">
                                                    Expiry: ${item.expiry}, Lot: ${item.lotSize}
                                                </span>
                                            </div>

                                             <div class="me-3">
                                                <!-- Checkbox -->
                                                <div class="form-check custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="form-check-input" ${item.isWatchlist ? 'checked' : ''} id="customCheckBox${item.row}" style="height: 25px; width: 25px;">
                                                </div>
                                            </div>
                                      
                                    </div>
                        `;
                container.insertAdjacentHTML("beforeend", contentHTML);
            });
        }



        // Function to show loading indicator
        function showLoading() {
            const container = document.getElementById("RecentActivityContent");
            let loadingIndicator = document.getElementById("loadingIndicator");

            if (!loadingIndicator) {
                loadingIndicator = document.createElement("div");
                loadingIndicator.id = "loadingIndicator";
                loadingIndicator.innerHTML =
                    `<div class="text-center my-3"><span class="spinner-border text-primary"></span> Loading...</div>`;
                container.appendChild(loadingIndicator);
            }

            loadingIndicator.style.display = "block";
        }





        function handleOrderTypeChange(rowId, id, orderType, tradeType) {
            // Define all button IDs dynamically
            let orderT, buttons, selectedBtn;

            if (tradeType === "buy") {
                orderT = document.getElementById(`orderType${rowId}1${id}`);
                buttons = [
                    `marketBtn${rowId}1${id}`,
                    `limitBtn${rowId}1${id}`,
                    `stoplossMarketBtn${rowId}1${id}`,
                    `stoplossLimitBtn${rowId}1${id}`
                ];
            } else {
                orderT = document.getElementById(`orderType${rowId}2${id}`);
                buttons = [
                    `marketBtn${rowId}2${id}`,
                    `limitBtn${rowId}2${id}`,
                    // `stoplossMarketBtn${rowId}2${id}`,
                    // `stoplossLimitBtn${rowId}2${id}`
                ];
            }




            // Reset all buttons
            buttons.forEach(btnId => {
                const btn = document.getElementById(btnId);
                if (btn) {
                    btn.classList.remove("btn-primary", "active");
                    btn.classList.add("btn-outline-primary");
                }
            });

            // Highlight selected button
            selectedBtn = document.getElementById(`${orderType}Btn${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);
            if (selectedBtn) {
                selectedBtn.classList.remove("btn-outline-primary");
                selectedBtn.classList.add("btn-primary", "active");
            }
            if (orderT) {
                orderT.value = orderType;
            }

            // Get relevant input fields
            let priceInput = document.getElementById(`realprice${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);
            let limitprice = document.getElementById(`limitprice${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);
            let limitblock = document.getElementById(`limitblock${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);
            let targetpriceInput = document.getElementById(`targetprice${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);
            let targetpriceblock = document.getElementById(
                `targetpriceblock${rowId}${tradeType === "buy" ? "1" : "2"}${id}`);


            if (limitblock) limitblock.style.display = 'none';
            // if (targetpriceblock) targetpriceblock.style.display = 'none';

            // Handle different order types
            if (orderType === 'limit') {
                if (limitblock) limitblock.style.display = 'flex';
                if (limitprice) {
                    limitprice.setAttribute("type", "text");
                    limitprice.value = priceInput ? priceInput.value : ""; // Copy value
                    limitprice.disabled = false;
                }
                if (priceInput) priceInput.disabled = false;
            } else if (orderType === 'market') {
                if (priceInput) {
                    priceInput.setAttribute("type", "text");
                    priceInput.disabled = true;
                }
                if (limitprice) {
                    limitprice.setAttribute("type", "hidden");
                    limitprice.disabled = true;
                }
            } else if (orderType === 'stoplossMarket') {
                if (targetpriceblock) targetpriceblock.style.display = 'flex';
                if (targetpriceInput) {
                    targetpriceInput.setAttribute("type", "text");
                    targetpriceInput.disabled = false;
                }
                if (priceInput) priceInput.disabled = false;
                if (limitprice) limitprice.disabled = true;
            } else if (orderType === 'stoplossLimit') {
                if (targetpriceblock) targetpriceblock.style.display = 'flex';
                if (targetpriceInput) {
                    targetpriceInput.setAttribute("type", "text");
                    targetpriceInput.disabled = false;
                }
                if (limitblock) limitblock.style.display = 'flex';
                if (limitprice) {
                    limitprice.setAttribute("type", "text");
                    limitprice.value = priceInput ? priceInput.value : ""; // Copy value
                    limitprice.disabled = false;
                }
                if (priceInput) priceInput.disabled = false;
            }
        }

        function getMarginValue(instrumentType, selectedMode) {
            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                return 500;
            } else if (instrumentType == 'FUT' && selectedMode == 'delivery') {
                return 50;
            } else if (instrumentType == 'CE' || instrumentType == 'PE') {
                return 7;
            } else {
                return 0;
            }
        }

        function updateColors(wallet, mcp, uniqueId, tradeType) {
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const errorFund = document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId);

            if (wallet >= mcp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                marginCost.style.color = 'green';
                errorFund.style.display = 'none';
            } else {
                maxPrice.style.color = 'red';
                marginCost.style.color = 'rgba(113, 117, 121, 0.75)';
                errorFund.style.display = 'block';
            }
        }

        function handleTradeModeChange(uniqueId, selectedMode, tradeType, rowId) {
            const lotInput = document.getElementById('lotSize' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const realPrice = document.getElementById('realprice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginUsed = document.getElementById('marginUsed' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const instrumentType = document.getElementById('instrumentType' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId).value;

            let margin = getMarginValue(instrumentType, selectedMode);
            let realPriceValue = parseFloat(realPrice.value) || 0;
            let lotValue = parseInt(lotInput.value) || 1; // Default to 1 if empty
            let quantityValue = parseInt(quantity.value) || 1;

            if (lotInput && realPriceValue) {
                let cp = (realPriceValue * lotValue * quantityValue).toFixed(2);
                let mcp = ((realPriceValue * lotValue * quantityValue) / margin).toFixed(2);

                marginCost.innerHTML = `₹ ${mcp}`;
                costPrice.innerHTML = `₹ ${cp}`;
                marginUsed.innerHTML = `(${margin}x)`;
            }
        }


        function handleQuantityChange(quantityPerLot, uniqueId, wallet, tradeType, rowId) {
            const lotInput = document.getElementById('lotSize' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const selectedMode = document.querySelector(
                `input[name="tradeMode${rowId}${tradeType === 'sell' ? '2' : '1'}${uniqueId}"]:checked`)?.value;

            const marginUsed = document.getElementById('marginUsed' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);

            const instrumentType = document.getElementById('instrumentType' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId).value;

            let margin = 0;

            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                margin = 500;
            } else if (instrumentType == 'FUT' && selectedMode == 'delivery') {
                margin = 50;
            } else if (instrumentType == 'CE' || instrumentType == 'PE') {
                margin = 7;
            } else {
                margin = 0;
            }



            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            lotInput.value = quantity.value / quantityPerLot;

            let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            let mcp = ((realPriceValue * lotInput.value * quantityPerLot) / margin).toFixed(2);


            marginCost.innerHTML = `₹ ${mcp}`;
            costPrice.innerHTML = `₹ ${cp}`;
            marginUsed.innerHTML = `(${margin}x)`;

            // Update color logic
            if (wallet >= mcp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                // costPrice.style.color = 'green';
                marginCost.style.color = 'green';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'none';
            } else {
                maxPrice.style.color = 'red';
                // costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                marginCost.style.color = 'rgba(113, 117, 121, 0.75)';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'block';
            }

        }


        function incrementLot(quantityPerLot, uniqueId, wallet, tradeType, rowId) {

            const lotInput = document.getElementById('lotSize' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const selectedMode = document.querySelector(
                `input[name="tradeMode${rowId}${tradeType === 'sell' ? '2' : '1'}${uniqueId}"]:checked`)?.value;

            const marginUsed = document.getElementById('marginUsed' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);



            const instrumentType = document.getElementById('instrumentType' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId).value;

            let margin = 0;

            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                margin = 500;
            } else if (instrumentType == 'FUT' && selectedMode == 'delivery') {
                margin = 50;
            } else if (instrumentType == 'CE' || instrumentType == 'PE') {
                margin = 7;
            } else {
                margin = 0;
            }



            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Increment the lot size
            lotInput.value = currentValue + 1;

            // Update quantity and cost price
            quantity.value = lotInput.value * quantityPerLot;
            let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            let mcp = ((realPriceValue * lotInput.value * quantityPerLot) / margin).toFixed(2);


            marginCost.innerHTML = `₹ ${mcp}`;
            costPrice.innerHTML = `₹ ${cp}`;
            marginUsed.innerHTML = `(${margin}x)`;

            // Update color logic
            if (wallet >= mcp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                // costPrice.style.color = 'green';
                marginCost.style.color = 'green';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'none';
            } else {
                maxPrice.style.color = 'red';
                // costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                marginCost.style.color = 'rgba(113, 117, 121, 0.75)';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'block';
            }


        }

        function decrementLot(quantityPerLot, uniqueId, wallet, tradeType, rowId) {

            const lotInput = document.getElementById('lotSize' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + rowId + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const marginUsed = document.getElementById('marginUsed' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId);
            const selectedMode = document.querySelector(
                `input[name="tradeMode${rowId}${tradeType === 'sell' ? '2' : '1'}${uniqueId}"]:checked`)?.value;


            const instrumentType = document.getElementById('instrumentType' + rowId + (tradeType === 'sell' ? '2' : '1') +
                uniqueId).value;

            let margin = 0;

            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                margin = 500;
            } else if (instrumentType == 'FUT' && selectedMode == 'delivery') {
                margin = 50;
            } else if (instrumentType == 'CE' || instrumentType == 'PE') {
                margin = 7;
            } else {
                margin = 0;
            }

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Decrement the lot size only if it's greater than 1
            if (currentValue > 1) {
                lotInput.value = currentValue - 1;

                // Update quantity and cost price
                quantity.value = lotInput.value * quantityPerLot;
                let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
                let mcp = ((realPriceValue * lotInput.value * quantityPerLot) / margin).toFixed(2);

                marginCost.innerHTML = `₹ ${mcp}`;
                costPrice.innerHTML = `₹ ${cp}`;
                marginUsed.innerHTML = `(${margin}x)`;

                // Update color logic
                if (wallet >= mcp) {
                    maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                    costPrice.style.color = 'green';
                    document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                        'none';
                } else {
                    maxPrice.style.color = 'red';
                    costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                    document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                        'block';
                }
            } else {
                console.log("Lot size cannot be less than 1.");
            }


        }


        function addWatchlist(item) {
            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1,
                gravity: "top",
                offset: {
                    y: "90px"
                },
                position: "center",
                backgroundColor: "#3498db",
            }).showToast();


            $.ajax({
                url: "{{ route('add-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: item,

                success: function(response) {
                    loadingToast.hideToast();
                    if (response.success) {
                        console.log(response);
                        
                        Toastify({
                            text: response.message ,
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px"
                            },
                            position: "center",
                            backgroundColor: "#3ab67a",
                        }).showToast();
                    } else {

                        Toastify({
                            text: response.message || "An error occurred.",
                            duration: 1500,
                            close: true,
                            gravity: "top",
                            offset: {
                                y: "90px"
                            },
                            position: "center",
                            backgroundColor: "#dc3545"
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast();
                    Toastify({
                        text: xhr.responseJSON?.message || "An error occurred while adding the script.",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        offset: {
                            y: "90px"
                        },
                        position: "center",
                        backgroundColor: "#dc3545"
                    }).showToast();
                    console.error(xhr.responseJSON);
                }
            });


        }



        function removeWatchlist(id) {

            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1,
                gravity: "top",
                offset: {
                    y: "90px"
                },
                position: "center",
                backgroundColor: "#3498db",
            }).showToast();

            $.ajax({
                url: "{{ route('remove-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: id
                },
                success: function(response) {
                    loadingToast.hideToast();
                    if (response.success) {
                        Toastify({
                            text: "✅ Script Removed from Watchlist",
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px"
                            },
                            position: "center",
                            backgroundColor: "#3ab67a"
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message || "An error occurred.",
                            duration: 3000,
                            gravity: "top",
                            offset: {
                                y: "90px"
                            },
                            position: "center",
                            backgroundColor: "#dc3545"
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast();
                    Toastify({
                        text: xhr.responseJSON?.message ||
                            "An error occurred while removing the script.",
                        duration: 3000,
                        gravity: "top",
                        offset: {
                            y: "90px"
                        },
                        position: "center",
                        backgroundColor: "#dc3545"
                    }).showToast();
                    console.error(xhr.responseJSON);
                }
            });

        }



        function showWatchlist(type, data) {
            // console.log(type);
            // console.log(data);
            updateContactsList(data);

        }

        function handleChartClick(foisin, rowId, modalId) {
            console.log("Clicked on chart for:", foisin, modalId);

            var offcanvas = new bootstrap.Offcanvas(document.getElementById(`offcanvasBottom${rowId}${modalId}`));
            offcanvas.show();
            let chartContainer = document.getElementById(`marketOverview${rowId}${modalId}`);
            if (!chartContainer) {
                console.error("Chart container not found:", `marketOverview${modalId}`);
                return;
            }
            if (window.marketOverviewChart) {
                window.marketOverviewChart.destroy();
            }

            async function fetchData(period = "day") {
                try {
                    let url = `/fetch-stock-data/${foisin}/${period}`;
                    console.log("Fetching data from:", url);

                    const response = await fetch(url);
                    if (!response.ok) throw new Error("Network response was not ok");

                    const rawData = await response.json();
                    if (!rawData || rawData.length === 0) throw new Error("No valid data available");

                    const formattedData = rawData.map((item) => ({
                        x: new Date(item[0]),
                        y: [item[1], item[2], item[3], item[4]] // Open, High, Low, Close
                    }));

                    console.log("Formatted Data:", formattedData);

                    let options = {
                        series: [{
                            data: formattedData
                        }],
                        chart: {
                            type: "candlestick",
                            height: 350,
                            toolbar: {
                                show: true
                            }
                        },
                        xaxis: {
                            type: "datetime"
                        },
                        yaxis: {
                            opposite: true,
                            tooltip: {
                                enabled: true
                            }
                        }
                    };

                    // if (window.marketOverviewChart) {
                    //     window.marketOverviewChart.updateSeries([{
                    //         data: formattedData
                    //     }]);
                    // } else {
                    //     window.marketOverviewChart = new ApexCharts(chartContainer, options);
                    //     window.marketOverviewChart.render();
                    // }

                    if (window.marketOverviewChart) {
                        try {
                            window.marketOverviewChart.updateSeries([{
                                data: formattedData
                            }]);
                        } catch (error) {
                            console.warn("Chart update failed, reinitializing...", error);
                            window.marketOverviewChart = new ApexCharts(chartContainer, options);
                            window.marketOverviewChart.render();
                        }
                    } else {
                        window.marketOverviewChart = new ApexCharts(chartContainer, options);
                        window.marketOverviewChart.render();
                    }

                } catch (error) {
                    console.error("Error fetching or setting data:", error);
                }
            }

            fetchData("day");

            document.querySelectorAll(".market-overview .nav-link").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();

                    let period = "day"; // Default period
                    if (this.id === `Week-tab${modalId}`) {
                        period = "week";
                    } else if (this.id === `Month-tab${modalId}`) {
                        period = "month";
                    } else if (this.id === `Year-tab${modalId}`) {
                        period = "year";
                    }



                    fetchData(period);
                });
            });
        }
    </script>






    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Apex Chart -->



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    {{-- <script src="js/demo.js"></script> --}}

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.getElementById('clearCacheBtn3').addEventListener('click', function() {
  
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/clear-ltp-cache', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
            // 'Authorization': 'Bearer ' + localStorage.getItem('token') // if needed
        },
        body: JSON.stringify({ userId: userId })
    })
    .then(response => response.json())
    .then(data => {
        // alert(data.message);
    });
});
    </script>
</body>


</html>
