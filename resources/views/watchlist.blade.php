@php
$user = Auth::user();
use App\Models\Script;
use App\Models\Equity;
use App\Models\Watchlist;
use App\Providers\Helper;
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
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />


    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="vendor/datatables/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <style>
        table.dataTable tbody tr,
        table.dataTable tbody td {
            background: transparent;
            text-align: center;
            font-size: 1.2rem;
        }

        table.dataTable tbody th,
        table.dataTable tbody td {
            background: transparent;
            text-align: center;
            font-size: 1.2rem;
        }

        #bid {
            background-color: #007b17;
            color: #ffffff;
        }

        #ask {
            background-color: #db1b1b;
            color: #ffffff;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .image-button {

            border-radius: 50%;
            /* Make it circular */
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s ease;
            /* Add a hover effect */
        }

        .image-button img {
            width: 40px;
            /* Increase the image size */
            height: 40px;
            /* Increase the image size */
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blink {
            animation: blink 1s infinite;
        }
    </style>

    <style>
        /* Positive values */
        .badge-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Negative values */
        .badge-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Neutral values */
        .badge-neutral {
            background-color: #e2e3e5;
            color: #6c757d;
            border: 1px solid #d6d8db;
        }

        /* Bid and Ask Rates */
        .bid-rate {
            color: #007bff;
            /* Blue */
        }

        .ask-rate {
            color: #fd7e14;
            /* Orange */
        }

        /* Hover effect */
        table tbody tr:hover {
            background-color: #f8f9fa;
            /* Subtle gray */
            transition: background-color 0.3s ease;
        }

        .offcanvas.offcanvas-bottom {
            max-height: 80%;
            /* Adjust this value to your desired height */
            height: 60%;
            /* Ensures it adapts to content */
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

       

        <div class="content-body" >
            <!-- row -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 flex-wrap">
                                <h4 class="card-title font-sans font-bold">Add Your Watchlist</h4>
                                <div class="d-flex align-items-center">
                                    <!-- Button trigger modal -->


                                    {{-- <div class="search-container mb-0 ms-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search..."
                                                aria-label="Search">
                                            <button class="btn btn-secondary" type="button">
                                                <img src="https://cdn-icons-png.flaticon.com/512/151/151773.png"
                                                    width="20px" height="20px" alt="">
                                            </button>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <form>
                                @csrf
                                <div class="card-body pt-0">
                                    <div class="coin-holding">

                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">SEGMENT</label>
                                                <select onchange="segment()" id="searchable"
                                                    class="form-control segment default-select h-auto wide"
                                                    aria-label="Default select example" data-role="segment-select">
                                                    <?php
                                                    Script::all()->each(function ($script) {
                                                        echo "<option value='$script->id'>$script->script_symbol</option>";
                                                    });
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">Script</label>
                                                <select onchange="script()" id="searchable2"
                                                    class="form-control script default-select h-auto wide"
                                                    aria-label="Default select example">
                                                    <?php
                                                    Equity::orderBy('symbol', 'ASC')
                                                        ->get()
                                                        ->each(function ($equity) {
                                                            echo "<option value='$equity->id'>$equity->symbol</option>";
                                                        });
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">Expiry</label>
                                                <select id="expiry" class="form-control default-select h-auto wide"
                                                    aria-label="Default select example">
                                                    <option value="2024-12-10">10-12-2024</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">CALL / PUT</label>
                                                <select id="callPutSelect"
                                                    class="form-control default-select h-auto wide"
                                                    aria-label="Default select example" disabled>
                                                    <option selected>Select</option>
                                                    <option value="CE">CE</option>
                                                    <option value="PE">PE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">STRIKE</label>
                                                <select id="searchable3"
                                                    class="form-control strike default-select h-auto wide"
                                                    aria-label="Default select example" disabled>
                                                    <option selected>Select Status</option>
                                                    <option value="1">Published</option>
                                                    <option value="2">Draft</option>
                                                    <option value="3">Trash</option>
                                                    <option value="4">Private</option>
                                                    <option value="5">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-container d-flex justify-content-center mt-3">
                                            <button onclick="addWatchlist()"
                                                class="image-button border-0 d-flex align-items-center justify-content-center"
                                                type="button">
                                                <img src="https://cdn-icons-png.flaticon.com/512/8371/8371357.png"
                                                    alt="Add Icon">
                                            </button>

                                        </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>



            <?php
            $watchlists = Watchlist::where('userid', Auth::user()->id)->get();
            if($watchlists->count() > 0){
                $mergedData = $watchlists;
                // print_r($mergedData);
            }else{
            $mergedData = [];
            }

            ?>


            <?php
            if($mergedData == []) {
                $i = 0;

            }else{
                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">NSEFUT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                        $i = 1;
                                                            foreach($mergedData as $watchlist){
                                                                // print_r($watchlist);
                                                                if($watchlist['segment'] == 'NSE_FO'){
                                                                    $iii = DB::select('SELECT * FROM future_temp WHERE exchangeToken = ? LIMIT 1', [$watchlist['exchangeToken']]);
                                                                    $foisin = $iii[0]->instrumentKey;
                                                                    $tradingSymbol = $iii[0]->tradingSymbol;
                                                                    ?>
                                    <p style="display: none" id="isin1{{ $i }}">{{ $foisin }}</p>
                                    <div id="orderForm{{ $i }}">
                                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle
                                            bottom offcanvas</button> --}}

                                        <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                            id="offcanvasBottom{{ $i }}" aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasBottomLabel{{ $i }}">Offcanvas
                                                    bottom
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>

                                            <div class="offcanvas-body small">



                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-header flex-wrap">
                                                                <!-- <div class="d-flex"> -->

                                                                <nav class="" style="width: 100%;">
                                                                    <div class="nav nav-pills light " id="nav-tab"
                                                                        role="tablist">
                                                                        <button class="nav-link active "
                                                                            style="width: 50%;" id="nav-order-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-order" type="button"
                                                                            role="tab" aria-selected="true">Buy</button>
                                                                        <button class="nav-link" style="width: 50%"
                                                                            id="nav-histroy-tab" data-bs-toggle="tab"
                                                                            data-bs-target="#nav-history" type="button"
                                                                            role="tab" aria-selected="false">Sell
                                                                        </button>

                                                                    </div>
                                                                </nav>
                                                                <!-- </div> -->
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active"
                                                                        id="nav-order" role="tabpanel"
                                                                        aria-labelledby="nav-order-tab">
                                                                        <div class="table-responsive dataTabletrade">
                                                                            <form>

                                                                                <div class="col-xl-4" style="
                                                                                        width: 100%;
                                                                                    ">
                                                                                    <div class="card">

                                                                                        <div class="card-body pt-2">
                                                                                            <!-- Available Balance -->
                                                                                            <div
                                                                                                class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                                <span
                                                                                                    class="small text-muted">Available
                                                                                                    Balance</span>
                                                                                                <span
                                                                                                    class="text-dark">₹210,800</span>
                                                                                            </div>

                                                                                            <!-- Buy/Sell Form -->
                                                                                            <form>
                                                                                                <!-- Order Type Selector -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Order
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="market"
                                                                                                            selected="">
                                                                                                            Market Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="limit">
                                                                                                            Limit Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="intraday">
                                                                                                            Intraday
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Price Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Price</span>
                                                                                                    <input id="realprice1{{ $i }}" type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter price">
                                                                                                    <span
                                                                                                        class="input-group-text">₹</span>
                                                                                                </div>

                                                                                                <!-- Size Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Size</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter size">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Lot</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Shares</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Units</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Take Profit & Stop Loss -->


                                                                                                <!-- Margin Type -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Margin
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="1x"
                                                                                                            selected="">
                                                                                                            1x (No
                                                                                                            Margin)
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2x">
                                                                                                            2x</option>
                                                                                                        <option
                                                                                                            value="5x">
                                                                                                            5x</option>
                                                                                                        <option
                                                                                                            value="10x">
                                                                                                            10x</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Stop Price -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Stop
                                                                                                        Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter stop price">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Mode</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Limit</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Market</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Cost and Max Info -->
                                                                                                <div
                                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                                    <div class="d-flex">
                                                                                                        <div>Cost:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹0.00</div>
                                                                                                    </div>
                                                                                                    <div class="d-flex">
                                                                                                        <div>Max:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹6,000</div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Buy/Sell Buttons -->
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</button>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-history"
                                                                        role="tabpanel">
                                                                        <div class="table-responsive dataTabletrade">
                                                                            <form>
                                                                                <div class="col-xl-4" style="
                                                                                width: 100%;
                                                                            ">
                                                                                    <div class="card">

                                                                                        <div class="card-body pt-2">
                                                                                            <!-- Available Balance -->
                                                                                            <div
                                                                                                class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                                <span
                                                                                                    class="small text-muted">Available
                                                                                                    Balance</span>
                                                                                                <span
                                                                                                    class="text-dark">₹210,800</span>
                                                                                            </div>

                                                                                            <!-- Buy/Sell Form -->
                                                                                            <form>
                                                                                                <!-- Order Type Selector -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Order
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="market"
                                                                                                            selected="">
                                                                                                            Market Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="limit">
                                                                                                            Limit Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="intraday">
                                                                                                            Intraday
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Price Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter price">
                                                                                                    <span
                                                                                                        class="input-group-text">₹</span>
                                                                                                </div>

                                                                                                <!-- Size Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Size</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter size">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Lot</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Shares</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Units</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Take Profit & Stop Loss -->


                                                                                                <!-- Margin Type -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Margin
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="1x"
                                                                                                            selected="">
                                                                                                            1x (No
                                                                                                            Margin)
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2x">
                                                                                                            2x</option>
                                                                                                        <option
                                                                                                            value="5x">
                                                                                                            5x</option>
                                                                                                        <option
                                                                                                            value="10x">
                                                                                                            10x</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Stop Price -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Stop
                                                                                                        Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter stop price">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Mode</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Limit</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Market</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Cost and Max Info -->
                                                                                                <div
                                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                                    <div class="d-flex">
                                                                                                        <div>Cost:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹0.00</div>
                                                                                                    </div>
                                                                                                    <div class="d-flex">
                                                                                                        <div>Max:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹6,000</div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Buy/Sell Buttons -->
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">

                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger btn-sm light text-uppercase btn-block">SELL</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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

                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td onclick="showOrderForm({{ $i }})" id="symbol1{{ $i }}">{{
                                            $tradingSymbol }}</td>
                                        <td onclick="showOrderForm({{ $i }})" id="bid1{{ $i }}">0</td>
                                        <td onclick="showOrderForm({{ $i }})" id="ask1{{ $i }}">0</td>
                                        <td onclick="showOrderForm({{ $i }})" id="ltp1{{ $i }}">0</td>
                                        <td id="ch1{{ $i }}">0</td>
                                        <td id="badge1{{ $i }}">
                                            {{-- <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i> --}}
                                                0
                                                {{-- </span> --}}
                                        </td>
                                        <td id="high1{{ $i }}">0</td>
                                        <td id="low1{{ $i }}">0</td>
                                        <td id="open1{{ $i }}">0</td>
                                        <td id="close1{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['watchlist_id'] }})"
                                                style="cursor: pointer" class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                                    $i++;
                                                                }

                                                            }
                                                            ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            }




            if($mergedData == []) {
                $i = 0;

            }else{
                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">NSEOPT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                $i = 1;
                                                    foreach($mergedData as $watchlist){
                                                        if($watchlist['script_symbol'] == 'NSEOPT'){
                                                            ?>
                                    <p style="display: none" id="isin2{{ $i }}">{{ $watchlist['Isin'] }}
                                    </p>
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td id="symbol2{{ $i }}">{{ $watchlist['symbol'] }}</td>


                                        <td id="bid2{{ $i }}">0</td>
                                        <td id="ask2{{ $i }}">0</td>
                                        <td id="ltp2{{ $i }}">0</td>
                                        <td id="ch2{{ $i }}">0</td>
                                        <td id="badge2{{ $i }}">
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                0
                                            </span>
                                        </td>
                                        <td id="high2{{ $i }}">0</td>
                                        <td id="low2{{ $i }}">0</td>
                                        <td id="open2{{ $i }}">0</td>
                                        <td id="close2{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['watchlist_id'] }})"
                                                style="cursor: pointer" class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                            $i++;
                                                        }

                                                    }
                                                    ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            if($mergedData == []) {
                $i = 0;

            }else{

                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">MCXFUT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                $i = 1;
                                                    foreach($mergedData as $watchlist){
                                                        if($watchlist['segment'] == 'MCX_FO'){
                                                            $iii = DB::select('SELECT * FROM future_temp WHERE exchangeToken = ? LIMIT 1', [$watchlist['exchangeToken']]);
                                                                    $foisin = $iii[0]->instrumentKey;
                                                                    $tradingSymbol = $iii[0]->tradingSymbol;
                                                            ?>
                                    <p style="display: none" id="isin3{{ $i }}">{{ $foisin }}
                                    </p>
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td id="symbol3{{ $i }}">{{
                                            $tradingSymbol }}</td>


                                        <td id="bid3{{ $i }}">0</td>
                                        <td id="ask3{{ $i }}">0</td>
                                        <td id="ltp3{{ $i }}">0</td>
                                        <td id="ch3{{ $i }}">0</td>
                                        <td id="badge3{{ $i }}">
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                0
                                            </span>
                                        </td>
                                        <td id="high3{{ $i }}">0</td>
                                        <td id="low3{{ $i }}">0</td>
                                        <td id="open3{{ $i }}">0</td>
                                        <td id="close3{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['watchlist_id'] }})"
                                                style="cursor: pointer" class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                            $i++;
                                                        }

                                                    }
                                                    ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }

            ?>

        </div>





    </div>


    </div>
    </div>
    <!--**********************************
            Content body end
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



    {{-- swel fire cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        function showOrderForm(index){
    const offcanvasId = `offcanvasBottom${index}`;
        const offcanvasElement = document.getElementById(offcanvasId);
        const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
        offcanvas.show();

        }




    </script>



    <script>
        Echo.channel('watchlists')
            .listen('Watchlist', (event) => {
                const feeds = event.watchlist.feeds;

                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        console.log(feedData);

                        // Find the <p> tag containing the matching ISIN
                        const isinElement = Array.from(document.querySelectorAll("p[id^='isin1']")).find(el => el.textContent === receivedIsin);
                        const optisinElement = Array.from(document.querySelectorAll("p[id^='isin2']")).find(el => el.textContent === receivedIsin);
                        // const mcxisinElement = Array.from(document.querySelectorAll("p[id^='isin3']")).find(el => el.textContent === receivedIsin);
                     
                        const elements = Array.from(document.querySelectorAll("p[id^='isin3']"));
                        const mcxisinElement = elements.find(el => el.textContent.trim() === receivedIsin.trim());
                        if (isinElement) {
                            // Extract the numeric part from the id, e.g., "isin1" → "1"
                            const rowId = isinElement.id.replace('isin1', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp1${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high || '0';
                            document.getElementById(`low1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`open1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open || '0';
                            document.getElementById(`close1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close || '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch1${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge1${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].bidQ || '0';
                            document.getElementById(`ask1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].askQ || '0';



                            // Optionally update the badge color or value
                            // const badgeElement = document.getElementById(`badge${rowId}`);
                            // if (badgeElement) {
                            //     const badgeClass = parseFloat(feedData.ch || 0) > 0 ? 'badge-success' : 'badge-danger';
                            //     badgeElement.innerHTML = `
                            //         <span class="badge light ${badgeClass}">
                            //             <i class="fa fa-circle text-${badgeClass === 'badge-success' ? 'success' : 'danger'} me-1"></i>
                            //             ${feedData.ch || '0'}
                            //         </span>`;
                            // }
                        }else if(optisinElement){

                            const rowId = optisinElement.id.replace('isin2', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp2${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            // document.getElementById(`realprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high || '0';
                            document.getElementById(`low2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`open2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open || '0';
                            document.getElementById(`close2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close || '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch2${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge2${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].bidQ || '0';
                            document.getElementById(`ask2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].askQ || '0';

                        }else if(mcxisinElement){
                            const rowId = mcxisinElement.id.replace('isin3', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp3${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            // document.getElementById(`realprice3${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high || '0';
                            document.getElementById(`low3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`open3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open || '0';
                            document.getElementById(`close3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close || '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch3${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ? 'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' : 'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge3${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].bidQ || '0';
                            document.getElementById(`ask3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0].askQ || '0';
                        }
                    }
                }
            });
    </script>




    <script>
        function segment() {
            var segment = document.querySelector('.segment').value;
            var script = document.getElementById('searchable2').value;
            var callPutSelect = document.getElementById('callPutSelect');
            var strike = document.querySelector('.strike');
            // 1 = future
            // 2 = option
            // 3 = mcx future
            if(segment == 1){
                const url = `/get-expiry/${script}`;
                const url2 = `/get-stock/${segment}`;

            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url2, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing script
                    $('#searchable2').empty();

                    // Append new options
                    // data -> 0 -> expiry
                    data.forEach(function (item) {
                        $('#searchable2').append(`<option value="${item.id}">${item.symbol}</option>`);
                    });


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });

            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing options
                    $('#expiry').empty();



                    // Append new options
                    // data -> 0 -> expiry

                    data.forEach(function (item) {
                        $('#expiry').append(`<option value="${item.expiry}">${item.expiry}</option>`);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });




                callPutSelect.disabled = true;
                strike.disabled = true;
            } else if (segment == 2) {
                callPutSelect.disabled = false;
                strike.disabled = false;
            }else if(segment == 3){

                const url = `/get-stock/${segment}`;

            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing script
                    $('#searchable2').empty();

                    // Append new options
                    // data -> 0 -> expiry
                    data.forEach(function (item) {
                        $('#searchable2').append(`<option value="${item.id}">${item.symbol}</option>`);
                    });


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });

            const url2 = `/get-expiry/${script}`;
            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url2, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing options
                    $('#expiry').empty();



                    // Append new options
                    // data -> 0 -> expiry

                    data.forEach(function (item) {
                        $('#expiry').append(`<option value="${item.expiry}">${item.expiry}</option>`);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });

                callPutSelect.disabled = true;
                strike.disabled = true;

            } else {
                callPutSelect.disabled = true;
                strike.disabled = true;
            }
        }

        segment();
        function script() {
            var segment = document.querySelector('.segment').value;
            var script = document.getElementById('searchable2').value;
            var callPutSelect = document.getElementById('callPutSelect');
            var strike = document.querySelector('.strike');
            // 1 = future
            // 2 = option
            // 3 = mcx future
            if(segment == 1){
                const url = `/get-expiry/${script}`;
            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing options
                    $('#expiry').empty();



                    // Append new options
                    // data -> 0 -> expiry

                    data.forEach(function (item) {
                        $('#expiry').append(`<option value="${item.expiry}">${item.expiry}</option>`);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });


                callPutSelect.disabled = true;
                strike.disabled = true;
            } else if (segment == 2) {

                const url = `/get-expiry/${script}`;
            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing options
                    $('#expiry').empty();



                    // Append new options
                    // data -> 0 -> expiry

                    data.forEach(function (item) {
                        $('#expiry').append(`<option value="${item.expiry}">${item.expiry}</option>`);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });

                callPutSelect.disabled = false;
                strike.disabled = false;
            }else if(segment == 3){

                const url = `/get-expiry/${script}`;
            // Use jQuery's $.ajax method to make the request
            $.ajax({
                url: url, // The endpoint to fetch data from
                method: 'GET', // HTTP method
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    // Handle successful response
                    console.log('Expiry dates:', data);

                    // Clear existing options
                    $('#expiry').empty();



                    // Append new options
                    // data -> 0 -> expiry

                    data.forEach(function (item) {
                        $('#expiry').append(`<option value="${item.expiry}">${item.expiry}</option>`);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    console.error('Error fetching expiry dates:', textStatus, errorThrown);
                }
            });

                callPutSelect.disabled = true;
                strike.disabled = true;

            } else {
                callPutSelect.disabled = true;
                strike.disabled = true;
            }
        }

        function addWatchlist() {
            var segment = document.querySelector('.segment').value;
            var script = document.querySelector('.script').value;
            var expiry = document.querySelector('#expiry').value;
            var callPut = document.querySelector('#callPutSelect').value;
            var strike = document.querySelector('.strike').value;
            console.log(script)

            data = {
                segment: segment,
                script: script,
                expiry: expiry,
                callPut: callPut,
                strike: strike
            }


            var data = {};
            if (segment == 2) {
                data = {
                    segment: segment,
                    script: script,
                    expiry: expiry,
                    callPut: callPut,
                    strike: strike
                }


            } else {
                data = {
                    segment: segment,
                    script: script,
                    expiry: expiry,
                    callPut: null,
                    strike: null
                }
            }


            console.log(data);



            //use ajax and swel fire to add watchlist  using of post method
            $.ajax({
                url: "{{ route('add-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                data: data,
                beforeSend: function() {
                    Swal.fire({
                        title: 'Adding Watchlist',
                        html: 'Please wait...',
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    Swal.close();
                    if (response.success) {
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Okay'
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response.message || 'An error occurred.',
                            icon: 'error',
                            confirmButtonText: 'Okay'
                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    Swal.fire({
                        title: 'Error',
                        text: xhr.responseJSON?.message ||
                            'An error occurred while adding the watchlist.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });






        }

        function removeWatchlist(id) {

            $.ajax({
                url: "{{ route('remove-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                data: {
                    id: id
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Removing Watchlist',
                        html: 'Please wait...',
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    Swal.close();
                    if (response.success) {
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Okay'
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response.message || 'An error occurred.',
                            icon: 'error',
                            confirmButtonText: 'Okay'
                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    Swal.fire({
                        title: 'Error',
                        text: xhr.responseJSON?.message ||
                            'An error occurred while removing the watchlist.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });
        }
    </script>




    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    {{-- <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}
    {{-- <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script> --}}
    <!-- Chart piety plugin files -->


    <!-- Apex Chart -->
    {{-- <script src="vendor/apexchart/apexchart.js"></script> --}}

    <!-- Dashboard 1 -->
    {{-- <script src="js/dashboard/portfolio.js"></script> --}}
    {{-- <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script> --}}
    {{-- <script src="js/demo.js"></script> --}}

    <!-- Required vendors -->
    <!-- Datatable -->
    {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/responsive/responsive.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script> --}}

    {{-- <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/peity/jquery.peity.min.js"></script>


    {{-- <script src="/vendor/global/global.min.js"></script> --}}
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    {{-- jquary cdn --}}



    {{-- <script src="{{ asset('js/dashboard/future.js') }}"></script> --}}

    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>


    <!-- Dashboard 1 -->

    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#searchable').select2({
                placeholder: "Search and select a state"
            });
            $('#searchable2').select2({
                placeholder: "Search and select a state"
            });
            $('#searchable3').select2({
                placeholder: "Search and select a state"
            });
            $('#callPutSelect').select2({
                placeholder: "Search and select a state"
            });
            $('#expiry').select2({
                placeholder: "Search and select a state"
            });

            // example2 datatable
            // $('#example2').DataTable({
            //     "pagingType": "full_numbers",
            //     "searching": false,
            //     "lengthChange": false,
            //     "ordering": false,
            //     "info": false,
            //     "autoWidth": false,
            //     "responsive": true,
            //     "scrollX": true
            // });


        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>

</body>


</html>
