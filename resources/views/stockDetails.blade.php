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

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .wallet-balance {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-deposit,
        .btn-withdraw {
            width: 80%;
            margin-bottom: 10px;
        }
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    {{--
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> --}}



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
        <div class="nav-header" style="z-index: 1000;">
            <div class="brand-logo cursor-pointer px-3 px-lg-2">
                <img src="{{ asset('images/logo-white.png') }}" alt="" width="80" style="cursor:pointer;">

                {{-- <div class="brand-title"> --}}
                    {{-- <img src="images/logo-white1.png" alt="" width="100"> --}}
                    <h1 class="brand-title" style="font-size: small;color:#fff">STOCK-MANTRA</h1>
                    {{--
                </div> --}}

            </div>
            <div class="nav-control ms-5">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
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
        Main wrapper end
    ***********************************-->

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-3 col-sm-12">
                        <div class="card  digital-cash">
                            <div class="card-header border-0">
                                <h4 class="card-title">About</h4>

                            </div>
                            <div class="card-body py-0">
                                <div class="text-center">
                                    <div class="media d-block">
                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->assetSymbol; ?>.svg"
                                            alt="" width=80 style="border-radius: 100%">
                                        <div class="media-content">
                                            <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">{{
                                                $stock->assetSymbol }}</h4>
                                            <span class="font-w600 text-dark">{{ $stock->tradingSymbol }}</span>
                                            <span class="my-4 fs-16 font-w600 d-block">Last Trade Price(LTP) = ₹ {{
                                                $stock->ltp }}</span>
                                            <p class="text-start">

                                                <span class="font-w600">Open Price = ₹ {{ $stock->open }}</span><br>
                                                <span class="font-w600">High Price = ₹ {{ $stock->high }}</span><br>
                                                <span class="font-w600">Low Price = ₹ {{ $stock->low }}</span><br>
                                                <span class="font-w600">Close Price = ₹ {{ $stock->close }}</span><br>
                                                {{-- <span class="font-w600">Volume = {{ $stock->volume }}</span><br>
                                                <span class="font-w600">Turnover = ₹ {{ $stock->turnover }}</span><br>
                                                <span class="font-w600">Total Traded Quantity = {{
                                                    $stock->totalTradedQuantity }}</span><br>
                                                <span class="font-w600">Total Traded Value = ₹ {{
                                                    $stock->totalTradedValue }}</span><br>
                                                <span class="font-w600">Total Market Capitalization = ₹ {{
                                                    $stock->totalMarketCapitalization }}</span><br>
                                                <span class="font-w600">Fifty Two Week High = ₹ {{
                                                    $stock->fiftyTwoWeekHigh }}</span><br>
                                                <span class="font-w600">Fifty Two Week Low = ₹ {{
                                                    $stock->fiftyTwoWeekLow }}</span><br>
                                                <span class="font-w600">Last Updated = {{ $stock->lastUpdated
                                                    }}</span><br> --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-0 border-0 text-center"
                                onclick="window.location.href='{{ route('order') }}'">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block">View Orders</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    $buyOrders = DB::table('trades')
                        ->where('user_id', $user->id)
                        ->where('instrumentKey', $stock->instrumentKey)
                        ->where('action', 'buy')
                        ->get();

                    $sellOrders = DB::table('trades')
                        ->where('user_id', $user->id)
                        ->where('instrumentKey', $stock->instrumentKey)
                        ->where('action', 'sell')
                        ->get();
                    ?>

                        <!-- Buy Orders Section (Only if there are buy orders) -->
                        <?php if (!$buyOrders->isEmpty()): ?>
                        <div class="col-xl-3 col-sm-12">
                            <div class="card price-list">
                                <div class="card-header border-0 p-3">
                                    <h4 class="text-success card-title">Buy Orders</h4>
                                </div>
                                <div class="card-body px-3 py-0">
                                    <div class="table-responsive">
                                        <table class="table text-center bg-success-hover tr-rounded order-tbl mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Invest</th>
                                                    <th class="text-start">Quantity</th>
                                                    <?php if ($buyOrders->contains('status', 'completed')) : ?>
                                                    <th class="text-end">Profit/Loss</th>
                                                    <?php else : ?>
                                                    <th class="text-end">Status</th>
                                                    <?php endif; ?>
                                                    <th class="text-end">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($buyOrders as $order) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $order->total_cost; ?>
                                                    </td>
                                                    <td class="text-start">
                                                        <?= $order->lotSize; ?> (
                                                        <?= $order->quantity; ?>)
                                                    </td>
                                                    <?php if ($order->status == 'completed') : ?>
                                                    <td class="text-end">
                                                        <?= $order->profit_loss; ?>
                                                    </td>
                                                    <?php else : ?>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge <?= $order->status == 'pending' ? 'bg-warning' : 'bg-info'; ?>">
                                                            <?= ucfirst($order->status); ?>
                                                        </span>
                                                    </td>
                                                    <?php endif; ?>
                                                    <td class="text-end">
                                                        <?= date('d M Y', strtotime($order->created_at)); ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="card-footer text-center py-3 border-0">
                                    <a href="coin-details.html" class="btn-link text-success">
                                        Show more <i class="fa fa-caret-right text-success"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Sell Orders Section (Only if there are sell orders) -->
                        <?php if (!$sellOrders->isEmpty()): ?>
                        <div class="col-xl-3 col-sm-12">
                            <div class="card price-list">
                                <div class="card-header border-0 p-3">
                                    <h4 class="text-danger card-title">Sell Orders</h4>
                                </div>
                                <div class="card-body px-3 py-0">
                                    <div class="table-responsive">
                                        <table class="table text-center bg-danger-hover tr-rounded order-tbl mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Invest</th>
                                                    <th class="text-start">Quantity</th>
                                                    <?php if ($sellOrders->contains('status', 'completed')) : ?>
                                                    <th class="text-end">Profit/Loss</th>
                                                    <?php else : ?>
                                                    <th class="text-end">Status</th>
                                                    <?php endif; ?>
                                                    <th class="text-end">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sellOrders as $order) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $order->total_cost; ?>
                                                    </td>
                                                    <td class="text-start">
                                                        <?= $order->lotSize; ?> (
                                                        <?= $order->quantity; ?>)
                                                    </td>
                                                    <?php if ($order->status == 'completed') : ?>
                                                    <td class="text-end">
                                                        <?= $order->profit_loss; ?>
                                                    </td>
                                                    <?php else : ?>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge <?= $order->status == 'pending' ? 'bg-warning' : 'bg-info'; ?>">
                                                            <?= ucfirst($order->status); ?>
                                                        </span>
                                                    </td>
                                                    <?php endif; ?>
                                                    <td class="text-end">
                                                        <?= date('d M Y', strtotime($order->created_at)); ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="card-footer text-center py-3 border-0">
                                    <a href="coin-details.html" class="btn-link text-danger">
                                        Show more <i class="fa fa-caret-right text-danger"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

            </div>
        </div>

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="{{ asset('vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}


        <!-- Datatable -->
        {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script> --}}


        <!-- Dashboard 1 -->

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


        <script src="{{ asset('js/custom.min.js') }}"></script>
        <script src="{{ asset('js/dlabnav-init.js') }}"></script>
        {{-- <script src="js/demo.js"></script> --}}

</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>