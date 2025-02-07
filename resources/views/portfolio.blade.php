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
        <x-header />
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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card trad-card wallet-wrapper overflow-hidden">
                                    <div class="card-header border-0 pb-0 card-bx">
                                        <div class="me-auto " style="z-index: 1;">
                                            <h2 class="text-dark mb-2 font-w600">₹ 65,123</h2>
                                            <div
                                                class="d-flex col-xl-12 align-items-center justify-content-between gap-2">
                                                <h6 class="text-dark mb-1 fs-13">Overall Gain</h6>
                                                <p class="mb-0 fs-13 ">4%(30 days)</p>
                                            </div>
                                        </div>
                                        {{-- <img src="images/svg/bitcoin-1.svg" alt="">	 --}}
                                    </div>
                                    <div class="card-body col-xl-12 p-0" style="z-index: 1;">
                                        <div
                                            class="d-flex justify-content-between align-items-center gap-5 p-3 p-md-4 p-lg-5">
                                            <div>
                                                <h5 class="text-dark mb-1">Invested Value</h5>
                                                <p class="mb-0 fs-14">₹ 65,123</p>
                                            </div>

                                            <div>
                                                <h5 class="text-dark mb-1">Today's Gain</h5>
                                                <p class="mb-0 fs-14">4%(30 days)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                {{-- <h4 class="card-title">Buy & Sell Bitcoin</h4> --}}
                                <nav>
                                    <div class="nav nav-pills light" id="nav-tab-p2p" role="tablist">
                                        <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-all" type="button" role="tab"
                                            aria-controls="nav-all" aria-selected="true">All</button>
                                        <button class="nav-link" id="nav-fut-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-fut" type="button" role="tab"
                                            aria-controls="nav-fut" aria-selected="false">Future</button>
                                        <button class="nav-link" id="nav-opt-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-opt" type="button" role="tab"
                                            aria-controls="nav-opt" aria-selected="false">Option</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-wrap">
                                    <div class="input-group width-300 mb-2">
                                        <input type="text" class="form-control amount"
                                            placeholder="Search for a company" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    {{-- <select class="default-select p2p-select width-100 mb-2" aria-label="Default"
                                        tabindex="0">
                                        <option>INR</option>
                                        <option value="1">JPY</option>
                                        <option value="2">KES</option>
                                        <option value="3">KHR</option>
                                        <option value="4">KWD</option>
                                        <option value="5">KZT</option>
                                        <option value="6">LAK</option>
                                        <option value="7">LBP</option>
                                        <option value="8">LKR</option>
                                    </select>
                                    <select class="default-select width-200" aria-label="Default" tabindex="0">
                                        <option>All Payments</option>
                                        <option value="1">UPI</option>
                                        <option value="2">IMPS</option>
                                        <option value="3">RTGS</option>
                                        <option value="4">Gpay</option>
                                        <option value="5">Paytm</option>
                                        <option value="6">Phonepay</option>
                                        <option value="7">Mokwikbi</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="nav-tabContent1">
                                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                        aria-labelledby="nav-all-tab">
                                        <div class="tab-content" id="nav-tabContent2">
                                            <div class="tab-pane fade show active" id="nav-order1" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom:20px">
                                                    <h4 class="card-title">Stocks : All</h4>
                                                </div>
                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">

                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('status', 'processing')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                                        ?>

                                                        @foreach ($stocks as $stock)
                                                            <!-- column -->
                                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                                <div class="card pull-up"
                                                                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                    <div
                                                                        class="card-body align-items-center flex-wrap">
                                                                        <div class="d-flex align-items-center mb-4">

                                                                            <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                                alt="" width=20
                                                                                style="border-radius: 20px"
                                                                                class="avatar">
                                                                            <div class="ms-1">
                                                                                <a href="javascript:void(0)">
                                                                                    <h4 class="card-title mb-0">
                                                                                        {{ $stock->stock_name }}
                                                                                        {{-- <span>Finance</span> --}}

                                                                                    </h4>
                                                                                </a>
                                                                                <div class="text-end"
                                                                                    style="position: absolute;top: 10px;right: 14px;">
                                                                                    <p class="text-muted mb-1 fs-13">
                                                                                        {{ $stock->action }}</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between">
                                                                            <div>
                                                                                <p
                                                                                    class="mb-0 fs-14 text-dark font-w600">
                                                                                    Current : ₹ 65,123</P>
                                                                                <span class="fs-12">Invest : ₹
                                                                                    {{ $stock->price }}</span>
                                                                                {{-- <span class="fs-12">Delivery</span> --}}
                                                                            </div>
                                                                            <div>
                                                                                <p
                                                                                    class="mb-0 fs-14 text-success font-w600">
                                                                                    ₹ 65/10%</P>
                                                                                <span class="fs-12">Qty :
                                                                                    {{ $stock->lotSize }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /column -->
                                                            <?php $i++; ?>
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-fut" role="tabpanel"
                                        aria-labelledby="nav-fut-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : Future</h4>
                                                </div>

                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">
                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/btc1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Bitcoin
                                                                                </h4>
                                                                            </a>
                                                                            <span>Finance</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/90</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                50%</P>
                                                                            <span class="fs-12">Ended 12 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Litecoin
                                                                                </h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/lit3.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Etherium
                                                                                </h4>
                                                                            </a>
                                                                            <span>Construction</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $30/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                50%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Monero</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 16 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ripple-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Cardano
                                                                                </h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/82</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                20%</P>
                                                                            <span class="fs-12">15 Day Left</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/eth2.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Ardor</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">9 Day Left</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">

                                                                            <img src="images/svg/lit3.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">OmiGO</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $85/90</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                70%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Tether</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ripple-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Komodo</h4>
                                                                            </a>
                                                                            <span>Devolopment</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 23 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Arc</h4>
                                                                            </a>
                                                                            <span>Technology</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $82/100</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                70%</P>
                                                                            <span class="fs-12">Ended 27 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/btc1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Quantom
                                                                                </h4>
                                                                            </a>
                                                                            <span>Future</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $75/100</P>
                                                                            <span class="fs-12">Science</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/dash-pink.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Nem</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Augur</h4>
                                                                            </a>
                                                                            <span>Manufacturing</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $90/100</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                85%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/litecoin-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Atoms</h4>
                                                                            </a>
                                                                            <span>Technology</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Startis
                                                                                </h4>
                                                                            </a>
                                                                            <span>Trading</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ltc.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Sango</h4>
                                                                            </a>
                                                                            <span>Curruncy</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $65/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                99%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-opt" role="tabpanel"
                                        aria-labelledby="nav-opt-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : Option</h4>
                                                </div>
                                                {{-- <div class="table-responsive dataTabletrade">
                                                    <table id="example-history-1"
                                                        class="table shadow-hover display  orderbookTable"
                                                        style="min-width:845px">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Pair</th>
                                                                <th>Side</th>
                                                                <th>Order</th>
                                                                <th>Filled</th>
                                                                <th>Price</th>
                                                                <th>Total</th>
                                                                <th class="text-end">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0);">
                                                                        <div class="market-icon me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#4793ff" r="256" />
                                                                                    <path
                                                                                        d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z"
                                                                                        fill="#5e69e2" />
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#2ebeef" r="191.733" />
                                                                                    <path
                                                                                        d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z"
                                                                                        fill="#4793ff" />
                                                                                    <g>
                                                                                        <path
                                                                                            d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z"
                                                                                            fill="#76e5f6" />
                                                                                        <path
                                                                                            d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z"
                                                                                            fill="#2ebeef" />
                                                                                        <path
                                                                                            d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z"
                                                                                            fill="#c2f4fb" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>

                                                                        BTC/USDT
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-sm badge-success">Buy</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span
                                                                        class="badge badge-sm badge-light">$100.00</span>
                                                                </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0)">
                                                                        <div class="market-icon me-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="512pt" version="1.1"
                                                                                viewBox="0 0 512 512" width="512pt">
                                                                                <g>
                                                                                    <path
                                                                                        d="M 512 256 C 512 324.378906 485.371094 388.671875 437.019531 437.019531 C 388.671875 485.371094 324.378906 512 256 512 C 187.621094 512 123.328125 485.371094 74.980469 437.019531 C 26.628906 388.671875 0 324.378906 0 256 C 0 187.621094 26.628906 123.328125 74.980469 74.980469 C 123.328125 26.628906 187.621094 0 256 0 C 324.378906 0 388.671875 26.628906 437.019531 74.980469 C 485.371094 123.328125 512 187.621094 512 256 Z M 512 256 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,66.666667%,12.54902%);fill-opacity:1;" />
                                                                                    <path
                                                                                        d="M 512 256 C 512 324.378906 485.371094 388.671875 437.019531 437.019531 C 388.671875 485.371094 324.378906 512 256 512 L 256 0 C 324.378906 0 388.671875 26.628906 437.019531 74.980469 C 485.371094 123.328125 512 187.621094 512 256 Z M 512 256 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,53.72549%,0%);fill-opacity:1;" />
                                                                                    <path
                                                                                        d="M 458 256 C 458 278.53125 454.289062 300.210938 447.449219 320.46875 C 443.941406 330.871094 439.601562 340.898438 434.511719 350.46875 C 400.558594 414.378906 333.269531 458 256 458 C 178.730469 458 111.441406 414.378906 77.488281 350.46875 C 72.398438 340.898438 68.058594 330.871094 64.550781 320.46875 C 57.710938 300.210938 54 278.53125 54 256 C 54 144.621094 144.621094 54 256 54 C 367.378906 54 458 144.621094 458 256 Z M 458 256 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,92.54902%,59.215686%);fill-opacity:1;" />
                                                                                    <path
                                                                                        d="M 458 256 C 458 367.378906 367.378906 458 256 458 L 256 54 C 367.378906 54 458 144.621094 458 256 Z M 458 256 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,85.882353%,17.647059%);fill-opacity:1;" />
                                                                                    <path
                                                                                        d="M 447.449219 320.46875 C 447.070312 321.601562 446.679688 322.730469 446.269531 323.851562 C 446.148438 324.210938 446.011719 324.578125 445.878906 324.941406 C 445.828125 325.089844 445.769531 325.238281 445.71875 325.378906 C 445.378906 326.320312 445.019531 327.261719 444.660156 328.199219 C 444.359375 329 444.050781 329.789062 443.71875 330.578125 C 443.5 331.148438 443.28125 331.71875 443.039062 332.28125 C 442.941406 332.550781 442.828125 332.808594 442.710938 333.078125 C 442.339844 333.988281 441.960938 334.890625 441.570312 335.78125 C 441.101562 336.878906 440.621094 337.96875 440.128906 339.050781 C 439.988281 339.351562 439.859375 339.648438 439.71875 339.941406 C 439.300781 340.859375 438.871094 341.78125 438.441406 342.691406 C 438.308594 342.960938 438.179688 343.230469 438.050781 343.5 C 437.5 344.628906 436.949219 345.75 436.378906 346.859375 C 435.769531 348.070312 435.148438 349.269531 434.511719 350.46875 L 329.21875 350.46875 L 329.21875 235.171875 L 256 321.460938 L 255.988281 321.46875 L 182.761719 235.171875 L 182.761719 350.46875 L 77.488281 350.46875 C 72.398438 340.898438 68.058594 330.871094 64.550781 320.46875 L 152.761719 320.46875 L 152.761719 153.449219 L 255.988281 275.109375 L 256 275.101562 L 359.21875 153.449219 L 359.21875 320.46875 Z M 447.449219 320.46875 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,86.666667%,75.686275%);fill-opacity:1;" />
                                                                                    <path
                                                                                        d="M 447.449219 320.46875 C 447.070312 321.601562 446.679688 322.730469 446.269531 323.851562 C 446.148438 324.210938 446.011719 324.578125 445.878906 324.941406 C 445.828125 325.089844 445.769531 325.238281 445.71875 325.378906 C 445.378906 326.320312 445.019531 327.261719 444.660156 328.199219 C 444.359375 329 444.050781 329.789062 443.71875 330.578125 C 443.5 331.148438 443.28125 331.71875 443.039062 332.28125 C 442.941406 332.550781 442.828125 332.808594 442.710938 333.078125 C 442.339844 333.988281 441.960938 334.890625 441.570312 335.78125 C 441.101562 336.878906 440.621094 337.96875 440.128906 339.050781 C 439.988281 339.351562 439.859375 339.648438 439.71875 339.941406 C 439.300781 340.859375 438.871094 341.78125 438.441406 342.691406 C 438.308594 342.960938 438.179688 343.230469 438.050781 343.5 C 437.5 344.628906 436.949219 345.75 436.378906 346.859375 C 435.769531 348.070312 435.148438 349.269531 434.511719 350.46875 L 329.21875 350.46875 L 329.21875 235.171875 L 256 321.460938 L 256 275.101562 L 359.21875 153.449219 L 359.21875 320.46875 Z M 447.449219 320.46875 "
                                                                                        style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,67.058824%,58.039216%);fill-opacity:1;" />
                                                                                </g>
                                                                            </svg>
                                                                        </div>

                                                                        BTC/USDT
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-sm badge-danger">Sell</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span class="badge badge-sm badge-light">-
                                                                        $100.00</span> </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0)">
                                                                        <div class="market-icon bg-warning me-2">
                                                                            <svg height="512" viewBox="0 0 48 48"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <path
                                                                                        d="m28.121 17.793c-2.171 2.254-6.071 2.254-8.242 0 0 0-3.293-3.293-3.293-3.293h-2.172l5.172 5.172c2.325 2.421 6.503 2.421 8.828 0 0 0 5.172-5.172 5.172-5.172h-2.172z" />
                                                                                    <path
                                                                                        d="m24 2c-12.131 0-22 9.869-22 22 1.208 29.186 42.796 29.178 44 0 0-12.131-9.869-22-22-22zm12.924 32.883c-.154.373-.52.617-.924.617h-5c-.266 0-.52-.105-.707-.293l-3.586-3.586c-1.427-1.48-3.988-1.48-5.414 0 0 0-3.586 3.586-3.586 3.586-.187.188-.441.293-.707.293h-5c-.861.028-1.341-1.116-.707-1.707 0 0 6.879-6.879 6.879-6.879 3.07-3.197 8.587-3.198 11.656 0 0 0 6.879 6.879 6.879 6.879.286.286.372.716.217 1.09zm-.217-20.676-6.879 6.879c-3.07 3.197-8.587 3.198-11.656 0 0 0-6.879-6.879-6.879-6.879-.629-.59-.16-1.736.707-1.707h5c.266 0 .52.105.707.293l3.586 3.586c.713.712 1.699 1.121 2.707 1.121s1.994-.409 2.707-1.121l3.586-3.586c.187-.188.441-.293.707-.293h5c.861-.028 1.341 1.116.707 1.707z" />
                                                                                    <path
                                                                                        d="m24 26.5c-1.667 0-3.234.649-4.414 1.828l-5.172 5.172h2.172l3.293-3.293c1.085-1.085 2.587-1.707 4.121-1.707s3.036.622 4.121 1.707l3.293 3.293h2.172l-5.172-5.172c-1.18-1.179-2.747-1.828-4.414-1.828z" />
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT

                                                                    </a>
                                                                </td>
                                                                <td><span
                                                                        class="badge badge-success badge-sm">Buy</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span
                                                                        class="badge badge-sm badge-light">$100.00</span>
                                                                </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0)">
                                                                        <div class="market-icon bg-warning me-2">
                                                                            <svg height="512" viewBox="0 0 70 70"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 2">
                                                                                <path
                                                                                    d="m42.8 44.76h-13.64l14.45-19.93a1 1 0 0 0 -.81-1.59h-6.8v-3a1 1 0 0 0 -2 0v3h-6.8a1 1 0 0 0 0 2h13.64l-14.45 19.93a1 1 0 0 0 .81 1.59h6.8v3a1 1 0 0 0 2 0v-3h6.8a1 1 0 0 0 0-2z" />
                                                                                <path
                                                                                    d="m35 .5a34.5 34.5 0 1 0 34.5 34.5 34.54 34.54 0 0 0 -34.5-34.5zm0 67a32.5 32.5 0 1 1 32.5-32.5 32.54 32.54 0 0 1 -32.5 32.5z" />
                                                                                <path
                                                                                    d="m35 8.5a26.5 26.5 0 1 0 26.5 26.5 26.53 26.53 0 0 0 -26.5-26.5zm0 51a24.5 24.5 0 1 1 24.5-24.5 24.53 24.53 0 0 1 -24.5 24.5z" />
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>
                                                                <td><span
                                                                        class="badge badge-sm badge-success">Buy</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span
                                                                        class="badge badge-sm badge-light">$100.00</span>
                                                                </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0)">
                                                                        <div class="market-icon bg-success me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <path
                                                                                        d="m437.019 74.98c-48.352-48.352-112.639-74.98-181.019-74.98s-132.667 26.628-181.019 74.98c-48.352 48.354-74.981 112.641-74.981 181.02s26.629 132.666 74.981 181.02c48.352 48.352 112.64 74.98 181.019 74.98 22.775 0 45.34-2.97 67.067-8.83 3.97-1.07 6.321-5.157 5.25-9.127-1.071-3.969-5.158-6.324-9.127-5.25-20.464 5.518-41.724 8.316-63.19 8.316-64.402 0-124.95-25.08-170.49-70.619-45.54-45.54-70.619-106.089-70.619-170.49s25.079-124.95 70.619-170.49 106.087-70.619 170.49-70.619 124.951 25.08 170.49 70.619 70.619 106.089 70.619 170.49-25.079 124.95-70.619 170.49c-22.021 22.02-47.5 39.301-75.73 51.364-3.781 1.615-5.537 5.99-3.921 9.772 1.616 3.78 5.99 5.538 9.772 3.921 29.985-12.812 57.038-31.158 80.409-54.526 48.351-48.355 74.98-112.642 74.98-181.021s-26.629-132.666-74.981-181.02z" />
                                                                                    <path
                                                                                        d="m93.173 125.146c-3.293-2.466-7.958-1.793-10.422 1.499-28.158 37.62-43.042 82.35-43.042 129.355 0 119.263 97.028 216.291 216.291 216.291s216.291-97.028 216.291-216.291-97.028-216.291-216.291-216.291c-55.922 0-109.014 21.349-149.496 60.115-2.969 2.844-3.072 7.557-.228 10.527 2.844 2.968 7.556 3.072 10.527.228 37.697-36.098 87.131-55.979 139.197-55.979 111.052 0 201.4 90.348 201.4 201.4s-90.348 201.4-201.4 201.4-201.4-90.348-201.4-201.4c0-43.763 13.857-85.408 40.072-120.432 2.464-3.293 1.793-7.959-1.499-10.422z" />
                                                                                    <path
                                                                                        d="m141.186 346.889c3.883 4.853 9.675 7.636 15.89 7.636h139.271c18.446 0 36.538-6.347 50.941-17.872s24.563-27.784 28.609-45.781l12.858-57.2c4.965-22.086-.3-44.893-14.444-62.57s-35.24-27.815-57.879-27.815h-121.021c-9.588 0-17.752 6.533-19.855 15.888l-13.861 61.664h-32.581c-7.529 0-14.064 5.101-15.89 12.404l-7.025 28.081c-1.035 4.139-.123 8.44 2.502 11.802 2.624 3.362 6.576 5.29 10.841 5.29h29.21l-11.531 51.294c-1.364 6.065.081 12.326 3.965 17.179zm-13.517-110.032c.166-.664.76-1.127 1.445-1.127h136.733l-6.672 26.669c-.166.664-.76 1.128-1.444 1.128h-136.734zm80.097 41.56h49.964c7.528 0 14.063-5.1 15.89-12.404l7.025-28.081c1.035-4.139.123-8.44-2.502-11.802-2.624-3.362-6.576-5.29-10.841-5.29h-46.594l4.49-19.973h90.692c5.298 0 10.144 2.188 13.295 6.004 3.286 3.98 4.523 9.146 3.392 14.175l-12.858 57.199c-2.476 11.012-12.087 18.703-23.374 18.703h-92.746zm-15.262 0-4.929 21.923c-.631 2.81.039 5.711 1.839 7.959 1.8 2.249 4.484 3.539 7.364 3.539h99.57c18.302 0 33.888-12.471 37.902-30.328l12.858-57.199c2.148-9.554-.199-19.367-6.438-26.923-5.99-7.254-15.021-11.413-24.778-11.413h-95.062c-4.444 0-8.228 3.029-9.201 7.363l-6.182 27.501h-28.491l13.128-58.398c.564-2.509 2.755-4.262 5.327-4.262h121.021c18.091 0 34.95 8.102 46.253 22.227 11.303 14.127 15.51 32.352 11.542 50.002l-12.858 57.2c-3.307 14.71-11.611 27.999-23.384 37.419s-26.56 14.608-41.638 14.608h-139.271c-2.283 0-3.651-1.284-4.263-2.048-.613-.766-1.565-2.382-1.064-4.61l12.265-54.559h28.49z" />
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>

                                                                <td><span
                                                                        class="badge badge-sm badge-danger">Sell</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span class="badge badge-sm badge-light">-
                                                                        $100.00</span> </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class="text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0);">
                                                                        <div class="market-icon me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#4793ff" r="256" />
                                                                                    <path
                                                                                        d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z"
                                                                                        fill="#5e69e2" />
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#2ebeef" r="191.733" />
                                                                                    <path
                                                                                        d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z"
                                                                                        fill="#4793ff" />
                                                                                    <g>
                                                                                        <path
                                                                                            d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z"
                                                                                            fill="#76e5f6" />
                                                                                        <path
                                                                                            d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z"
                                                                                            fill="#2ebeef" />
                                                                                        <path
                                                                                            d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z"
                                                                                            fill="#c2f4fb" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>

                                                                <td><span
                                                                        class="badge badge-sm badge-success">Buy</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span
                                                                        class="badge badge-sm badge-light">$100.00</span>
                                                                </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0);">
                                                                        <div class="market-icon me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#4793ff" r="256" />
                                                                                    <path
                                                                                        d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z"
                                                                                        fill="#5e69e2" />
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#2ebeef" r="191.733" />
                                                                                    <path
                                                                                        d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z"
                                                                                        fill="#4793ff" />
                                                                                    <g>
                                                                                        <path
                                                                                            d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z"
                                                                                            fill="#76e5f6" />
                                                                                        <path
                                                                                            d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z"
                                                                                            fill="#2ebeef" />
                                                                                        <path
                                                                                            d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z"
                                                                                            fill="#c2f4fb" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>
                                                                <td><span
                                                                        class="badge badge-danger badge-sm">Sell</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span class="badge badge-sm badge-light">-
                                                                        $100.00</span> </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0);">
                                                                        <div class="market-icon me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#4793ff" r="256" />
                                                                                    <path
                                                                                        d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z"
                                                                                        fill="#5e69e2" />
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#2ebeef" r="191.733" />
                                                                                    <path
                                                                                        d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z"
                                                                                        fill="#4793ff" />
                                                                                    <g>
                                                                                        <path
                                                                                            d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z"
                                                                                            fill="#76e5f6" />
                                                                                        <path
                                                                                            d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z"
                                                                                            fill="#2ebeef" />
                                                                                        <path
                                                                                            d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z"
                                                                                            fill="#c2f4fb" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>

                                                                <td><span
                                                                        class="badge badge-sm badge-success">Buy</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span
                                                                        class="badge badge-sm badge-light">$100.00</span>
                                                                </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2022-10-03 16:24</td>
                                                                <td>
                                                                    <a class="market-title d-flex align-items-center"
                                                                        href="javascript:void(0);">
                                                                        <div class="market-icon me-2">
                                                                            <svg enable-background="new 0 0 512 512"
                                                                                height="512" viewBox="0 0 512 512"
                                                                                width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#4793ff" r="256" />
                                                                                    <path
                                                                                        d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z"
                                                                                        fill="#5e69e2" />
                                                                                    <circle cx="256" cy="256"
                                                                                        fill="#2ebeef" r="191.733" />
                                                                                    <path
                                                                                        d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z"
                                                                                        fill="#4793ff" />
                                                                                    <g>
                                                                                        <path
                                                                                            d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z"
                                                                                            fill="#76e5f6" />
                                                                                        <path
                                                                                            d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z"
                                                                                            fill="#2ebeef" />
                                                                                        <path
                                                                                            d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z"
                                                                                            fill="#c2f4fb" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        BTC/USDT
                                                                    </a>
                                                                </td>
                                                                <td><span
                                                                        class="badge badge-danger badge-sm">Sell</span>
                                                                </td>
                                                                <td>Limit</td>
                                                                <td>-</td>
                                                                <td><span class="badge badge-sm badge-light">-
                                                                        $100.00</span> </td>
                                                                <td>576.76</td>
                                                                <td>
                                                                    <div class=" text-end">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div> --}}
                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">
                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/btc1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Bitcoin
                                                                                </h4>
                                                                            </a>
                                                                            <span>Finance</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/90</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                50%</P>
                                                                            <span class="fs-12">Ended 12 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Litecoin
                                                                                </h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/lit3.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Etherium
                                                                                </h4>
                                                                            </a>
                                                                            <span>Construction</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $30/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                50%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Monero</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 16 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ripple-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Cardano
                                                                                </h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/82</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                20%</P>
                                                                            <span class="fs-12">15 Day Left</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/eth2.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Ardor</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">9 Day Left</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">

                                                                            <img src="images/svg/lit3.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">OmiGO</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $85/90</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                70%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Tether</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ripple-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Komodo</h4>
                                                                            </a>
                                                                            <span>Devolopment</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 23 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Arc</h4>
                                                                            </a>
                                                                            <span>Technology</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $82/100</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                70%</P>
                                                                            <span class="fs-12">Ended 27 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/btc1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Quantom
                                                                                </h4>
                                                                            </a>
                                                                            <span>Future</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $75/100</P>
                                                                            <span class="fs-12">Science</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 25 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/dash-pink.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Nem</h4>
                                                                            </a>
                                                                            <span>Infrastructure</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100.00</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ethereum-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Augur</h4>
                                                                            </a>
                                                                            <span>Manufacturing</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $90/100</P>
                                                                            <span class="fs-12">Not Rated</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                85%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/litecoin-1.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Atoms</h4>
                                                                            </a>
                                                                            <span>Technology</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/monero.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Startis
                                                                                </h4>
                                                                            </a>
                                                                            <span>Trading</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $72/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                80%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->

                                                        <!-- column -->
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">
                                                                        <a href="javascript:void(0)" class="ico-icon">
                                                                            <img src="images/svg/ltc.svg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ms-3">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0">Sango</h4>
                                                                            </a>
                                                                            <span>Curruncy</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                $65/100</P>
                                                                            <span class="fs-12">Neutral</span>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                99%</P>
                                                                            <span class="fs-12">Ended 20 Oct</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->
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
