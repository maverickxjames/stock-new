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

   <style>
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
                                        {{-- <img src="images/svg/bitcoin-1.svg" alt=""> --}}
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
                                            data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                            aria-selected="true">All</button>
                                        <button class="nav-link" id="nav-fut-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-fut" type="button" role="tab" aria-controls="nav-fut"
                                            aria-selected="false">Future</button>
                                        <button class="nav-link" id="nav-opt-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-opt" type="button" role="tab" aria-controls="nav-opt"
                                            aria-selected="false">Option</button>
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
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;


                                                        ?>

                                                          <!--Top up Modal start-->
                                                        <div class="modal fade" id="exampleModalCenter1{{ $i }}">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="padding-right: 1.875rem;padding-left: 10px;">
                                                                        <h2 class="modal-title">{{ $stock->stock_name }} </h2>
                                                                        <button type="button" data-bs-dismiss="modal" style="border: none">
                                                                            <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                                width="20" alt="">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body p-0">
                                                                        <div class="trade-container">
                                                                            <div data-bs-dismiss="modal" 
                                                                                class="trade-item">
                                                                                <h2>Exit Position</h2>
                                                                                <div class="icon-box icon-box-sm bgl-primary">
                                                                                    <a href="javascript:void(0)" id="add_script">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                            width="20" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="trade-item" data-bs-dismiss="modal">
                                                                                <h2>Details</h2>
                                                                                <div class="icon-box icon-box-sm bgl-primary">
                                                                                    <a href="javascript:void(0)" id="add_script">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                            width="20" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="trade-item" 
                                                                                data-bs-dismiss="modal">
                                                                                <h2>Remove</h2>
                                                                                <div class="icon-box icon-box-sm bgl-primary">
                                                                                    <a href="javascript:void(0)" id="add_script">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                            width="20" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Top up Modal end-->
                                                        <!-- column -->
                                                        <p style="display: none" id="isin1{{ $i }}">{{ $foisin }}</p>
                                                        <p style="display: none" id="invest1{{ $i }}">{{ $stock->price
                                                            }}</p>
                                                        <p style="display: none" id="quantity1{{ $i }}">{{
                                                            $stock->lotSize }}</p>

                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1{{ $i }}">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25 style="border-radius: 100%">
                                                                        <div class="ms-1">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem">
                                                                                    {{ $stock->stock_name }}


                                                                                </h4>
                                                                                <span
                                                                                    id="stockChange1{{ $i }}">Finance</span>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">
                                                                                @if ($stock->action == 'BUY')
                                                                                <span class="badge badge-success">
                                                                                    {{ $stock->action }}</span>
                                                                                @else
                                                                                <span class="badge badge-danger">
                                                                                    {{ $stock->action }}</span>
                                                                                @endif
                                                                                {{-- <p class="text-muted mb-1 fs-13">
                                                                                    {{ $stock->action }}</p> --}}
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p id="price1{{ $i }}"
                                                                                class="mb-0 fs-14 text-dark font-w600">
                                                                                Current : ₹ 65,123</P>
                                                                            <span class="fs-12">Invest : ₹
                                                                                {{ $stock->price }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change1{{ $i }}">Loading...
                                                                            </p>
                                                                            <span class="fs-12">Qty :
                                                                                {{ $stock->lotSize }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->
                                                        <?php 
                                                            $i++; 
                                                        }
                                                            
                                                            ?>



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
                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('tradeType','FUT')->where('status', 'processing')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;


                                                        ?>
                                                        <!-- column -->
                                                        <p style="display: none" id="isin2{{ $i }}">{{ $foisin }}</p>
                                                        <p style="display: none" id="invest2{{ $i }}">{{ $stock->price
                                                            }}</p>
                                                        <p style="display: none" id="quantity2{{ $i }}">{{
                                                            $stock->lotSize }}</p>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25 style="border-radius: 100%">
                                                                        <div class="ms-1">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem">
                                                                                    {{ $stock->stock_name }}
                                                                                    <span
                                                                                        id="stockChange2{{ $i }}">Finance</span>

                                                                                </h4>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">
                                                                                @if ($stock->action == 'BUY')
                                                                                <span class="badge badge-success">
                                                                                    {{ $stock->action }}</span>
                                                                                @else
                                                                                <span class="badge badge-danger">
                                                                                    {{ $stock->action }}</span>
                                                                                @endif
                                                                                {{-- <p class="text-muted mb-1 fs-13">
                                                                                    {{ $stock->action }}</p> --}}
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p id="price2{{ $i }}"
                                                                                class="mb-0 fs-14 text-dark font-w600">
                                                                                Current : ₹ 65,123</P>
                                                                            <span class="fs-12">Invest : ₹
                                                                                {{ $stock->price }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change2{{ $i }}">Loading...
                                                                            </p>
                                                                            <span class="fs-12">Qty :
                                                                                {{ $stock->lotSize }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->
                                                        <?php 
                                                            $i++; 
                                                        }
                                                            
                                                            ?>



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

                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">
                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('tradeType','OPT')->where('status', 'processing')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;
                                                            // $price=$stock->price;


                                                        ?>
                                                        <!-- column -->
                                                        <p style="display: none" id="isin3{{ $i }}">{{ $foisin }}</p>
                                                        <p style="display: none" id="invest3{{ $i }}">{{ $stock->price
                                                            }}</p>
                                                        <p style="display: none" id="quantity3{{ $i }}">{{
                                                            $stock->lotSize }}</p>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25 style="border-radius: 100%">
                                                                        <div class="ms-1">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem">
                                                                                    {{ $stock->stock_name }}
                                                                                    <span
                                                                                        id="stockChange3{{ $i }}">Finance</span>

                                                                                </h4>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">
                                                                                @if ($stock->action == 'BUY')
                                                                                <span class="badge badge-success">
                                                                                    {{ $stock->action }}</span>
                                                                                @else
                                                                                <span class="badge badge-danger">
                                                                                    {{ $stock->action }}</span>
                                                                                @endif
                                                                                {{-- <p class="text-muted mb-1 fs-13">
                                                                                    {{ $stock->action }}</p> --}}
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p id="price3{{ $i }}"
                                                                                class="mb-0 fs-14 text-dark font-w600">
                                                                                Current : ₹ 65,123</P>
                                                                            <span class="fs-12">Invest : ₹
                                                                                {{ $stock->price }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change3{{ $i }}">Loading...
                                                                            </p>
                                                                            <span class="fs-12">Qty :
                                                                                {{ $stock->lotSize }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /column -->
                                                        <?php 
                                                            $i++; 
                                                        }
                                                            
                                                            ?>





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


    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Event trigger for the modal -->
    <script>
        Echo.channel('trades')
            .listen('Trade', (event) => {
                const feeds = event.trade.feeds;

                console.log(feeds);
                

                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        console.log("receivedIsin",receivedIsin);
                        

                        // console.log(feedData);
                        // console.log(document.querySelectorAll("p[id^='isin1']"));

                        // Find the <p> tag containing the matching ISIN
                        const allElement = Array.from(document.querySelectorAll("p[id^='isin1']")).find(el => el.textContent.trim() === receivedIsin.trim());
                  

                            console.log("allElement",allElement);
                        const futureElement = Array.from(document.querySelectorAll("p[id^='isin2']")).find(el => el
                            .textContent === receivedIsin);
                            console.log("futureElement",futureElement); 
                            
                            const optionElement = Array.from(document.querySelectorAll("p[id^='isin3']")).find(el => 
    el.textContent.trim() === receivedIsin.trim()
);
                            console.log("optionElement",optionElement);
                        
                        if (allElement) {
                            // console.log("allElement",allElement.id);
                            // Extract the numeric part from the id, e.g., "isin1" → "1"
                            const rowId = allElement.id.replace('isin1','');

                            // console.log("rowId1",rowId);

                            const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                            const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price
                            const invest = parseFloat(document.getElementById(`invest1${rowId}`).textContent) || 0; // Investment amount
                            const quantity = parseFloat(document.getElementById(`quantity1${rowId}`).textContent) || 0; // Quantity

                            document.getElementById(`price1${rowId}`).textContent = "Current : ₹" + (feedData.ltpc.ltp || '0');
                         
                            const badgeValue = (price - cp).toFixed(2) || '0';
                            const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) : '0';

                            const profitAndLoss = ((price - invest) * quantity).toFixed(2); 
                            const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100).toFixed(2) : '0';

                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                           

                            // class bage for profit an dloss
                            const profitAndLossClass = profitAndLoss > 0 ? 'badge-success' : 'badge-danger';
                            const profitAndLossIcon = profitAndLoss > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                            document.getElementById(`stockChange1${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                            document.getElementById(`change1${rowId}`).innerHTML = `
                            ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                        } else if (futureElement) {

                            const rowId = futureElement.id.replace('isin2','');

                            console.log("rowId2",rowId);

                            const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                            const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price
                            const invest = parseFloat(document.getElementById(`invest2${rowId}`).textContent) || 0; // Investment amount
                            const quantity = parseFloat(document.getElementById(`quantity2${rowId}`).textContent) || 0; // Quantity

                            document.getElementById(`price1${rowId}`).textContent = "Current : ₹" + (feedData.ltpc.ltp || '0');

                            const badgeValue = (price - cp).toFixed(2) || '0';
                            const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) : '0';

                            const profitAndLoss = ((price - invest) * quantity).toFixed(2); 
                            const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100).toFixed(2) : '0';

                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                            // class bage for profit an dloss
                            const profitAndLossClass = profitAndLoss > 0 ? 'badge-success' : 'badge-danger';
                            const profitAndLossIcon = profitAndLoss > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                                document.getElementById(`stockChange2${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                            document.getElementById(`change2${rowId}`).innerHTML = `
                            ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;
                            

                           
                        } else if (optionElement) {
                            const rowId = optionElement.id.replace('isin3', '');

                            console.log("rowId3",rowId);
                            
                            const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                            const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price
                            const invest = parseFloat(document.getElementById(`invest3${rowId}`).textContent) || 0; // Investment amount
                            const quantity = parseFloat(document.getElementById(`quantity3${rowId}`).textContent) || 0; // Quantity

                            document.getElementById(`price1${rowId}`).textContent = "Current : ₹" + (feedData.ltpc.ltp || '0');
                         
                            const badgeValue = (price - cp).toFixed(2) || '0';
                            const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) : '0';

                            const profitAndLoss = ((price - invest) * quantity).toFixed(2); 
                            const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100).toFixed(2) : '0';

                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                           

                            // class bage for profit an dloss
                            const profitAndLossClass = profitAndLoss > 0 ? 'badge-success' : 'badge-danger';
                            const profitAndLossIcon = profitAndLoss > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                            document.getElementById(`stockChange3${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                            document.getElementById(`change3${rowId}`).innerHTML = `
                            ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;
                        }
                    }
                }
            });
    </script>


    <!-- Event trigger for the modal -->

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