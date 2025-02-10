@php
    $user = Auth::user();
@endphp

<?php
use App\Models\Stockdata;

?>


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

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">

    <style>
        /* Ensure the table is scrollable on smaller screens */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on iOS devices */
        }

        /* Default logo styling */
        .styled-logo {
            width: 25px;
            /* Adjust the width for a smaller, more appropriate size */
            height: 25px;
            /* Adjust the height to match the width */
            border-radius: 50%;
            /* Make it circular */
            object-fit: cover;
            /* Ensure the image fits within the circle properly */
            border: 2px solid #4793ff;
            /* Optional: Add a border around the logo to match the theme */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .styled-logo {
                width: 15px;
                /* Smaller size for tablets and mobile */
                height: 15px;
                /* Adjust height accordingly */
            }

            .table td,
            .table th {
                padding: 8px;
                /* Reduce padding for better readability on smaller screens */
            }

            .table-responsive {
                padding: 0 15px;
                /* Add padding to prevent the content from touching the edges */
            }
        }

        @media (max-width: 480px) {
            .styled-logo {
                width: 10px;
                /* Further reduce logo size for small mobile screens */
                height: 10px;
                /* Keep aspect ratio */
            }

            .table {
                font-size: 14px;
                /* Adjust font size for smaller screens */
            }

            .table td,
            .table th {
                padding: 6px;
                /* Further reduce padding on very small screens */
            }
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
                                        <button class="nav-link" id="nav-mcx-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mcx" type="button" role="tab"
                                            aria-controls="nav-mcx" aria-selected="false">MCX</button>
                                        <button class="nav-link" id="nav-indices-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-indices" type="button" role="tab"
                                            aria-controls="nav-indices" aria-selected="false">Indices</button>
                                    </div>
                                </nav>
                            </div>
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
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('status', 'pending')->orderBy('id','DESC')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;


                                                        ?>



                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <p
                                                                        class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                                        @if ($stock->action == 'BUY')
                                                                            <span class="badge badge-success me-2">
                                                                                {{ $stock->action }}</span>
                                                                        @else
                                                                            <span class="badge badge-danger me-2">
                                                                                {{ $stock->action }}</span>
                                                                        @endif
                                                                        @if ($stock->duration == 'delivery')
                                                                            <span class="badge badge-light ml-2">
                                                                                Delivery</span>
                                                                        @else
                                                                            <span class="badge badge-dark ml-1">
                                                                                Intraday</span>
                                                                        @endif
                                                                    </p>
                                                                    <div class="d-flex align-items-center mb-4 mt-2">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25
                                                                            style="border-radius: 100%">
                                                                        <div class="ms-1">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem; font-weight: 800">
                                                                                    {{ $stock->stock_name }}


                                                                                </h4>
                                                                                <span>{{ $stock->order_type }}</span>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">

                                                                                <p class="text-muted mb-1 fs-13">
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p class="mb-0 fs-14 text-dark font-w600">
                                                                                Exit Price : ₹ 659</P>
                                                                            <span class="fs-12">Trade Price : ₹ ₹ 659
                                                                            </span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p
                                                                                class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                                                {{-- ${profitAndLoss > 0 
                                                                                    ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                                                                    : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`; --}}

                                                                                <span class="text-success">₹
                                                                                    1.2(2%)</span>
                                                                            </p>
                                                                            <span class="fs-12">Qty :
                                                                                {{ $stock->lotSize }}({{ $stock->quantity }})
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
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('tradeType','FUT')->where('status', 'pending')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;


                                                        ?>
                                                        <!-- column -->
                                                        <p style="display: none" id="isin2{{ $i }}">
                                                            {{ $foisin }}</p>
                                                        <p style="display: none" id="invest2{{ $i }}">
                                                            {{ $stock->price }}</p>
                                                        <p style="display: none" id="quantity2{{ $i }}">
                                                            {{ $stock->lotSize }}</p>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25
                                                                            style="border-radius: 100%">
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
                                                                                {{ $stock->total_cost }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change2{{ $i }}">
                                                                                Loading...
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
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('tradeType','OPT')->where('status', 'pending')->get();
                                                        // print_r($stocks);
                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;
                                                            // $price=$stock->price;


                                                        ?>
                                                        <!-- column -->
                                                        <p style="display: none" id="isin3{{ $i }}">
                                                            {{ $foisin }}</p>
                                                        <p style="display: none" id="invest3{{ $i }}">
                                                            {{ $stock->price }}</p>
                                                        <p style="display: none" id="quantity3{{ $i }}">
                                                            {{ $stock->lotSize }}</p>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="card pull-up"
                                                                style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <div class="d-flex align-items-center mb-4">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=25
                                                                            style="border-radius: 100%">
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
                                                                                {{ $stock->total_cost }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                            --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p
                                                                                class="mb-0 fs-14 text-success font-w600">
                                                                                ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change3{{ $i }}">
                                                                                Loading...
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

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>


    <!-- Dashboard 1 -->

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>
