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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--Preloader end-->




    <!--Main wrapper start-->
    <div id="main-wrapper">

        <!--Nav header start-->
        <x-nav-header />
        <!--Nav header end-->

        <!--Header start-->
        <x-header />
        <!--Header end-->


        <!--Sidebar start-->
        <x-sidebar />
        <!--Sidebar end-->


        <!--chart offcanvas start -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
            aria-labelledby="offcanvasBottomLabel" style="height: 80%;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chart</h5>
                <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="border: none"><img
                        src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png" width="20"
                        alt=""></button>
            </div>
            <div class="offcanvas-body small p-0">
                <div class="card-body p-0 custome-tooltip">
                    <div id="chart" class="revenueMap"></div>
                </div>
                <div class='d-flex justify-content-between p-3 items-center w-100'>
                    <div class="p-2 w-50" style="background-color: red; color:#fff">Ask : 1265</div>
                    <div class="p-3 w-50" style="background-color: green;color:#fff">Bid : 2938</div>
                </div>
                <div class=' text-center'>
                    <button class="btn btn-primary w-80">Trade</button>
                </div>


            </div>
        </div>
        <!--chart offcanvas end -->

        <!--content body start-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <?php 
                                $fetch = DB::table('watchlist')->where('userid', $user->id)->get();
                                $i = 1;
                                foreach($fetch as $key){
                                    $foisin = $key->instrumentKey;
                                    $isin=$key->isIn;
                                    $id=$key->id;
                                    $stock=DB::table('future_temp')->where('isin', $isin)->first();
                                    $quantity=$stock->lotSize;

                                    ?>

                            <!--Top up Modal start-->
                            <div class="modal fade" id="exampleModalCenter{{ $i }}">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="padding-right: 1.875rem;padding-left: 10px;">
                                            <h2 class="modal-title">{{ $key->tradingSymbol }} </h2>
                                            <button type="button" data-bs-dismiss="modal" style="border: none">
                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                    width="20" alt="">
                                            </button>
                                        </div>
                                        <div class="modal-body p-0">
                                            <div class="trade-container">
                                                <div data-bs-dismiss="modal"
                                                    onclick="showOrderForm({{ $i }})" class="trade-item">
                                                    <h2>Trade</h2>
                                                    <div class="icon-box icon-box-sm bgl-primary">
                                                        <a href="javascript:void(0)" id="add_script">
                                                            <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                width="20" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="trade-item"
                                                    onclick="fetchData('{{ $foisin }}','exampleModalCenter{{ $i }}');"
                                                    data-bs-dismiss="modal">
                                                    <h2 data-bs-dismiss="modal">Chart</h2>
                                                    <div class="icon-box icon-box-sm bgl-primary">
                                                        <a href="javascript:void(0)" id="add_script"
                                                            data-bs-dismiss="modal">
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
                                                <div class="trade-item" onclick="removeWatchlist({{ $id }})"
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


                            <!-- Trade offcanvas model -->

                            <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                id="orderoffcanvasBottom{{ $i }}" aria-labelledby="offcanvasBottomLabel"
                                style="height: 70%">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel{{ $i }}">Offcanvas
                                        bottom
                                    </h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
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
                                                            <button class="nav-link active " style="width: 50%;"
                                                                id="nav-order-tab" data-bs-toggle="tab"
                                                                data-bs-target="#nav-order{{ $i }}"
                                                                type="button" role="tab"
                                                                aria-selected="true">Buy</button>
                                                            <button class="nav-link" style="width: 50%"
                                                                id="nav-histroy-tab" data-bs-toggle="tab"
                                                                data-bs-target="#nav-history{{ $i }}"
                                                                type="button" role="tab"
                                                                aria-selected="false">Sell
                                                            </button>

                                                        </div>
                                                    </nav>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="card-body pt-2">
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="nav-order{{ $i }}" role="tabpanel"
                                                            aria-labelledby="nav-order-tab">
                                                            <div class="table-responsive dataTabletrade">
                                                                <form>
                                                                    <div class="col-xl-4" style="width: 100%;">
                                                                        <div class="card">
                                                                            <div class="card-body pt-2">
                                                                                <!-- Available Balance -->
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                    <span
                                                                                        class="small text-muted">Available
                                                                                        Balance</span>
                                                                                    <span
                                                                                        class="text-dark">{{ $user->real_wallet }}</span>
                                                                                </div>
                                                                                <!-- Order Type Selector -->
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Order
                                                                                        Type</label>
                                                                                    <select
                                                                                        onchange="handleOrderTypeChange({{ $i }}, this.value,'buy')"
                                                                                        class="form-select">
                                                                                        <option value="market"
                                                                                            selected=""> Market
                                                                                            Order</option>
                                                                                        <option value="limit">Limit
                                                                                            Order</option>
                                                                                        <option value="stoploss">Stop
                                                                                            Loss Order</option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Price Input -->
                                                                                <div class="input-group mb-3">
                                                                                    <span
                                                                                        class="input-group-text">Price</span>
                                                                                    <input
                                                                                        id="realprice1{{ $i }}"
                                                                                        disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Enter price">
                                                                                    <input
                                                                                        id="limitprice1{{ $i }}"
                                                                                        disabled type="hidden"
                                                                                        class="form-control"
                                                                                        placeholder="Enter price">
                                                                                    <span
                                                                                        class="input-group-text">₹</span>
                                                                                </div>

                                                                                <div class=""
                                                                                    style="display: flex; justify-content:space-between; gap:20px;">
                                                                                    <div class="input-group mb-3">
                                                                                        <span
                                                                                            class="input-group-text">Lot</span>
                                                                                        <button
                                                                                            onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }}, 'buy')"
                                                                                            class="btn btn-outline-secondary"
                                                                                            type="button"
                                                                                            id="decrement">-</button>
                                                                                        <input type="text"
                                                                                            class="form-control text-center"
                                                                                            placeholder="Enter size"
                                                                                            id="lotSize1{{ $i }}"
                                                                                            value="1" disabled>
                                                                                        <button
                                                                                            onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'buy')"
                                                                                            class="btn btn-outline-secondary"
                                                                                            type="button"
                                                                                            id="increment">+</button>
                                                                                    </div>
                                                                                    <div class="input-group mb-3">
                                                                                        <span
                                                                                            class="input-group-text">Quantity</span>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Enter size"
                                                                                            id="quantity1{{ $i }}"
                                                                                            value={{ $quantity }}
                                                                                            readonly>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Take Profit & Stop Loss -->
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label">Mode</label>
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-3">
                                                                                        <!-- Delivery Mode Radio Button -->
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="radio"
                                                                                                name="tradeMode{{ $i }}"
                                                                                                id="deliveryMode{{ $i }}"
                                                                                                value="delivery"
                                                                                                onchange="handleTradeModeChange({{ $i }}, 'delivery')"
                                                                                                checked>
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="deliveryMode{{ $i }}">
                                                                                                Delivery Mode
                                                                                            </label>
                                                                                        </div>

                                                                                        <!-- Intraday Mode Radio Button -->
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="radio"
                                                                                                name="tradeMode{{ $i }}"
                                                                                                id="intradayMode{{ $i }}"
                                                                                                value="intraday"
                                                                                                onchange="handleTradeModeChange({{ $i }}, 'intraday')">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="intradayMode{{ $i }}">
                                                                                                Intraday Mode
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                                <!-- Cost and Max Info -->
                                                                                <div
                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                    <div class="d-flex">
                                                                                        <div>Cost:</div>
                                                                                        <div id="costPrice1{{ $i }}"
                                                                                            class="px-1">₹0.00</div>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <div>Max:</div>
                                                                                        <div id="maxPrice1{{ $i }}"
                                                                                            class=" px-1">
                                                                                            ₹{{ $user->real_wallet }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Buy/Sell Buttons -->
                                                                                <div
                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                    <button type="button"
                                                                                        class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="nav-history{{ $i }}" role="tabpanel">
                                                            <div class="table-responsive dataTabletrade">
                                                                <form>
                                                                    <div class="col-xl-4"style="width: 100%;">
                                                                        <div class="card">
                                                                            <div class="card-body pt-2">
                                                                                <!-- Available Balance -->
                                                                                <!-- Available Balance -->
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                    <span
                                                                                        class="small text-muted">Available
                                                                                        Balance</span>
                                                                                    <span
                                                                                        class="text-dark">{{ $user->real_wallet }}</span>
                                                                                </div>

                                                                                <!-- Order Type Selector -->
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Order
                                                                                        Type</label>
                                                                                    <select
                                                                                        onchange="handleOrderTypeChange({{ $i }}, this.value,'sell')"
                                                                                        class="form-select">
                                                                                        <option value="market"
                                                                                            selected=""> Market
                                                                                            Order</option>
                                                                                        <option value="limit">Limit
                                                                                            Order</option>
                                                                                        <option value="stoploss">Stop
                                                                                            Loss Order</option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Price Input -->
                                                                                <div class="input-group mb-3">
                                                                                    <span
                                                                                        class="input-group-text">Price</span>
                                                                                    <input
                                                                                        id="realprice2{{ $i }}"
                                                                                        disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Enter price">
                                                                                    <input
                                                                                        id="limitprice2{{ $i }}"
                                                                                        disabled type="hidden"
                                                                                        class="form-control"
                                                                                        placeholder="Enter price">
                                                                                    <span
                                                                                        class="input-group-text">₹</span>
                                                                                </div>

                                                                                <div class=""
                                                                                    style="display: flex; justify-content:space-between; gap:20px;">
                                                                                    <div class="input-group mb-3">
                                                                                        <span
                                                                                            class="input-group-text">Lot</span>
                                                                                        <button
                                                                                            onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }},'sell')"
                                                                                            class="btn btn-outline-secondary"
                                                                                            type="button"
                                                                                            id="decrement">-</button>
                                                                                        <input type="text"
                                                                                            class="form-control text-center"
                                                                                            placeholder="Enter size"
                                                                                            id="lotSize2{{ $i }}"
                                                                                            value="1" disabled>
                                                                                        <button
                                                                                            onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'sell')"
                                                                                            class="btn btn-outline-secondary"
                                                                                            type="button"
                                                                                            id="increment">+</button>
                                                                                    </div>
                                                                                    <div class="input-group mb-3">
                                                                                        <span
                                                                                            class="input-group-text">Quantity</span>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Enter size"
                                                                                            id="quantity2{{ $i }}"
                                                                                            value={{ $quantity }}
                                                                                            readonly>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Take Profit & Stop Loss -->
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label">Mode</label>
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-3">
                                                                                        <!-- Delivery Mode Radio Button -->
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="radio"
                                                                                                name="tradeMode{{ $i }}"
                                                                                                id="deliveryMode{{ $i }}"
                                                                                                value="delivery"
                                                                                                onchange="handleTradeModeChange({{ $i }}, 'delivery')"
                                                                                                checked>
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="deliveryMode{{ $i }}">
                                                                                                Delivery Mode
                                                                                            </label>
                                                                                        </div>

                                                                                        <!-- Intraday Mode Radio Button -->
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="radio"
                                                                                                name="tradeMode{{ $i }}"
                                                                                                id="intradayMode{{ $i }}"
                                                                                                value="intraday"
                                                                                                onchange="handleTradeModeChange({{ $i }}, 'intraday')">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="intradayMode{{ $i }}">
                                                                                                Intraday Mode
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Cost and Max Info -->
                                                                                <div
                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                    <div class="d-flex">
                                                                                        <div>Cost:</div>
                                                                                        <div id="costPrice2{{ $i }}"
                                                                                            class="px-1">₹0.00</div>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <div>Max:</div>
                                                                                        <div id="maxPrice2{{ $i }}"
                                                                                            class=" px-1">
                                                                                            ₹{{ $user->real_wallet }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <!-- Buy/Sell Buttons -->
                                                                                <div
                                                                                    class="mt-3 d-flex justify-content-between">

                                                                                    <button type="button"
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
                <!-- Trade offcanvas model end -->





                <p style="display: none" id="isin{{ $i }}">{{ $foisin }}</p>
                <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6 col-12" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter{{ $i }}">
                    <div class="card trad-card overflow-hidden shadow-lg border-0 rounded-lg">
                        <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                            <div>
                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                    id="change{{ $i }}">Loading...</p>

                                </p>
                                {{-- <h4 class="text-dark mb-0 font-w600">{{ $key->assetSymbol }} {{
                                                $key->instrumentType }} <span class="text-muted">({{ $key->expiry
                                                    }})</span></h4> --}}
                                <h4 class="text-dark mb-0 font-w600">{{ $key->tradingSymbol }} </h4>
                                <div class="d-flex justify-content-between ">
                                    <p class="mb-0" style="position: absolute;top: 54px;right: 14px;">
                                        LTP:
                                        <span id="ltp{{ $i }}" class="font-w600 text-primary fs-4">
                                            123.8</span>
                                    </p>
                                </div>
                            </div>
                            <div class="text-end" style="position: absolute;top: 10px;right: 14px;">
                                <p class="text-muted mb-1 fs-13">{{ $key->exchange }}</p>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="me-3">
                                    <p class="mb-0">Bid : <span class="text-dark mb-0 font-w600"
                                            id="bid{{ $i }}">123.8</span></p>
                                </div>
                                <div class="me-3">
                                    <p class="mb-0">Ask : <span class="text-dark mb-0 font-w600"
                                            id="ask{{ $i }}">123.8</span></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between" style="font-size: xx-small">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <p class="mb-0">Open/Close</p>
                                        <p class="text-dark mb-0 font-w600" id="openclose{{ $i }}">
                                            123.8/123.8</p>
                                    </div>
                                </div>
                                <div class="me-3">
                                    <p class="mb-0">High/Low</p>
                                    <p class="text-dark mb-0 font-w600" id="highlow{{ $i }}">
                                        123.8/128.8</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                    $i++;
                                }
                                ?>



            </div>
        </div>







    </div>
    </div>
    </div>


    {{-- main body --}}






    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
        style="width: 1200px">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class=" text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                style="border: none">
                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png" width="24" alt="">
            </button>

        </div>
        <div class="offcanvas-body">

            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa">
                        <i class="fa fa-list-alt me-2"></i>Add Script
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <div class="row align-items-center mb-3">

                            <div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3">
                                <input type="text" class="form-control" id="searchinp"
                                    placeholder="Search Script" onkeyup="searchScript(this)">

                            </div>


                            <div class="col-xl-6 col-xxl-4 col-lg-4 align-self-end">
                                <button class="btn btn-primary me-2 active-filter filter" type="button"
                                    onclick="setActiveFilter(this, 'ALL')">ALL</button>
                                <button class="btn btn-primary light filter" type="button"
                                    onclick="setActiveFilter(this, 'Future')">Future</button>
                                <button class="btn btn-primary light me-2 filter" type="button"
                                    onclick="setActiveFilter(this, 'Option')">Option</button>
                                <button class="btn btn-primary light filter" type="button"
                                    onclick="setActiveFilter(this, 'Indicies')">Indicies</button>
                            </div>

                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3 " id="expiry-date" hidden>
                                <label class="me-sm-2 form-label">Expiry Date</label>
                                <select class="me-sm-2  form-control wide" id="inlineFormCustomSelect">
                                    <option selected>All...</option>
                                    <option value="1">30 Jan 2025</option>
                                    <option value="2">27 Feb 2025</option>
                                    <option value="3">27 Mar 2025</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-lg-4 align-self-end" id="Order-type" hidden>
                                <label class="me-sm-2 form-label">Order Type</label>
                                <div>
                                    <button class="btn btn-warning me-2 filterCP filterCP" type="button"
                                        onclick="setActiveFilterCP(this, 'ALL')">ALL</button>
                                    <button class="btn btn-warning light filterCP" type="button"
                                        onclick="setActiveFilterCP(this, 'CE')">CE</button>
                                    <button class="btn btn-warning light me-2 filterCP" type="button"
                                        onclick="setActiveFilterCP(this, 'PE')">PE</button>
                                </div>

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
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class=" cm-content-body card-body pt-4 pb-0 height800 dlab-scroll">
                            <div class="contacts-list" id="RecentActivityContent">
                                <p id="msg" class="text-center">Enter at least 2 characters in the Search
                                    box above to see results here.</p>

                                {{-- @foreach ($scripts as $script) --}}
                                {{-- <div class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://cdn-icons-png.flaticon.com/128/14906/14906254.png" alt=""
                                                class="avatar" id="avatar">
                                            <div class="ms-3">
                                                <h5 class="mb-1"><a href="" id="script_symbol">Loading...</a>
                                                </h5>
                                                <span class="fs-14 text-muted" id="script_description">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-sm bgl-primary">
                                            <a href="javascript:void(0)" id="add_script">
                                                <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                    width="24" alt="">
                                            </a>
                                        </div>
                                    </div> --}}
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>








    <script>
        let activeFilter = 'ALL';
        let activeFilterCP = 'ALL';
        let mode = 'delivery';

        function setActiveFilter(selectedButton, filterName) {
            const buttons = document.querySelectorAll('.filter');

            buttons.forEach(button => {
                button.classList.remove('active-filter');
                button.classList.add('light');
            });

            selectedButton.classList.remove('light');
            selectedButton.classList.add('active-filter');

            if (filterName === 'Option') {
                document.getElementById('expiry-date').hidden = false;
                document.getElementById('Order-type').hidden = false;
            } else if (filterName === 'Future') {
                document.getElementById('expiry-date').hidden = false;
                document.getElementById('Order-type').hidden = true;
            } else {
                document.getElementById('expiry-date').hidden = true;
                document.getElementById('Order-type').hidden = true;
            }

            // if(getActiveFilter() === 'Future' || getActiveFilter() === 'Option' || getActiveFilter() === 'Indicies') {
            //     const serachinput = document.getElementById('searchinp');
            //     console.log(serachinput.value);

            //     searchScript(serachinput);
            // }

            activeFilter = filterName;

            console.log('Active Filter:', activeFilter);
        }

        function setActiveFilterCP(selectedButton, filterName) {
            const buttons = document.querySelectorAll('.filterCP');

            buttons.forEach(button => {
                button.classList.remove('filterCP');
                button.classList.add('light');
            });

            selectedButton.classList.remove('light');
            selectedButton.classList.add('filterCP');

            activeFilterCP = filterName;

            console.log('Active FilterCP:', activeFilterCP);
        }



        function getActiveFilter() {
            return activeFilter;
        }

        function getActiveFilterCP() {
            return activeFilterCP;
        }

        function handleTradeModeChange(id, tradeMode) {
            mode = tradeMode;
            console.log('Mode:', mode);
        }

        function getTradeMode() {
            return mode;
        }



        console.log('Active Filter:', activeFilter);
        console.log('Active FilterCP:', activeFilterCP);
        console.log('Mode:', mode);

        function showOrderForm(index) {
            const offcanvasId = `orderoffcanvasBottom${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }
    </script>
    <script>
        //fetch all scripts from the server


        //implement search script using of $scripts variable thgen filter the scripts their we serach tradingSymbol
        function searchScript(input) {

            const searchValue = input.value.toLowerCase();


            if (getActiveFilter() == 'Future') {
                // get api call for future
                let url = 'searchScript?search=' + searchValue + '&type=future';
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // api response 
                        updateContactsList(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else if (getActiveFilter() == 'Option') {

                let url = 'searchScript?search=' + searchValue + '&type=option';
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        updateContactsList(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });

            } else if (getActiveFilter() == 'Indicies') {
                let url = 'searchScript?search=' + searchValue + '&type=indices';
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        updateContactsList(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else {
                let url = 'searchScript?search=' + searchValue + '&type=all';
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        updateContactsList(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }


        }

        function updateContactsList(responseData) {
            const container = document.getElementById("RecentActivityContent");

            // Clear existing content
            container.innerHTML = "";

            // Loop through API response and create new elements
            responseData.forEach((item) => {
                // console.log(item);

                const contentHTML = `
                        <div onclick='addWatchlist(${JSON.stringify(item)})' class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
                            <div class="d-flex align-items-center">
                                <img src="https://s3tv-symbol.dhan.co/symbols/${item.assetSymbol}.svg" alt="" class="avatar" id="avatar">
                                <div class="ms-3">
                                    <h5 class="mb-1"><a href="#" id="script_symbol">${item.tradingSymbol}</a></h5>
                                    <span class="fs-14 text-muted" id="script_description">Expiry: ${item.expiry}, Segment: ${item.segment}</span>
                                </div>
                            </div>
                            <div class="icon-box icon-box-sm bgl-primary">
                                <a href="javascript:void(0)" id="add_script">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png" width="24" alt="">
                                </a>
                            </div>
                        </div>
                    `;
                container.insertAdjacentHTML("beforeend", contentHTML);
            });
        }

        function updateScript(script) {
            const scriptSymbol = document.getElementById('script_symbol');
            const scriptDescription = document.getElementById('script_description');
            const avatar = document.getElementById('avatar');
            const addScript = document.getElementById('add_script');
            let logo = `https://s3tv-symbol.dhan.co/symbols/${script.assetSymbol}.svg`;

            scriptSymbol.innerText = script.tradingSymbol;
            scriptDescription.innerText = script.expiry;
            avatar.src = logo;

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        function handleOrderTypeChange(id, orderType, tradeType) {

            if (tradeType === 'sell') {
                const priceInput = document.getElementById("realprice" + id);
                const limitprice = document.getElementById("limitprice" + id);
                if (orderType === 'limit') {
                    // Change `priceInput` type to 'hidden' and `limitprice` type to 'text'
                    priceInput.setAttribute("type", "hidden");
                    limitprice.setAttribute("type", "text");
                    limitprice.value = priceInput.value; // Copy the value
                    priceInput.disabled = false; // Enable input
                    limitprice.disabled = false; // Enable input
                } else if (orderType === 'market') {
                    // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
                    priceInput.setAttribute("type", "text");
                    limitprice.setAttribute("type", "hidden");
                    priceInput.disabled = true; // Disable input
                    limitprice.disabled = true; // Disable input
                } else if (orderType === 'stoploss') {
                    // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
                    priceInput.setAttribute("type", "text");
                    limitprice.setAttribute("type", "hidden");
                    priceInput.disabled = false; // Enable input
                    limitprice.disabled = true; // Disable input
                }
            } else {
                const priceInput = document.getElementById("realprice" + id);
                const limitprice = document.getElementById("limitprice" + id);
                if (orderType === 'limit') {
                    // Change `priceInput` type to 'hidden' and `limitprice` type to 'text'
                    priceInput.setAttribute("type", "hidden");
                    limitprice.setAttribute("type", "text");
                    limitprice.value = priceInput.value; // Copy the value
                    priceInput.disabled = false; // Enable input
                    limitprice.disabled = false; // Enable input
                } else if (orderType === 'market') {
                    // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
                    priceInput.setAttribute("type", "text");
                    limitprice.setAttribute("type", "hidden");
                    priceInput.disabled = true; // Disable input
                    limitprice.disabled = true; // Disable input
                } else if (orderType === 'stoploss') {
                    // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
                    priceInput.setAttribute("type", "text");
                    limitprice.setAttribute("type", "hidden");
                    priceInput.disabled = false; // Enable input
                    limitprice.disabled = true; // Disable input
                }
            }


            // const priceInput = document.getElementById("realprice" + id);
            // const limitprice = document.getElementById("limitprice" + id);
            // if (orderType === 'limit') {
            //     // Change `priceInput` type to 'hidden' and `limitprice` type to 'text'
            //     priceInput.setAttribute("type", "hidden");
            //     limitprice.setAttribute("type", "text");
            //     limitprice.value = priceInput.value; // Copy the value
            //     priceInput.disabled = false; // Enable input
            //     limitprice.disabled = false; // Enable input
            // } else if (orderType === 'market') {
            //     // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
            //     priceInput.setAttribute("type", "text");
            //     limitprice.setAttribute("type", "hidden");
            //     priceInput.disabled = true; // Disable input
            //     limitprice.disabled = true; // Disable input
            // } else if (orderType === 'stoploss') {
            //     // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
            //     priceInput.setAttribute("type", "text");
            //     limitprice.setAttribute("type", "hidden");
            //     priceInput.disabled = false; // Enable input
            //     limitprice.disabled = true; // Disable input
            // }


            // You can add additional logic for other segments (nseopt, mcxfut) here if needed
        }

        function incrementLot(quantityPerLot, uniqueId, wallet, tradeType) {

            const lotInput = document.getElementById('lotSize' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Increment the lot size
            lotInput.value = currentValue + 1;

            // Update quantity and cost price
            quantity.value = lotInput.value * quantityPerLot;
            let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            console.log('Cost Price:', cp);

            costPrice.innerHTML = "₹ " + cp;

            // Update color logic
            if (wallet >= cp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                costPrice.style.color = 'green';
            } else {
                maxPrice.style.color = 'red';
                costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            }



            // const lotInput = document.getElementById('lotSize' + uniqueId);
            // const quantity = document.getElementById('quantity' + uniqueId);
            // const costPrice = document.getElementById('costPrice' + uniqueId);
            // const maxPrice = document.getElementById('maxPrice' + uniqueId);
            // const realPrice = document.getElementById('realprice' + uniqueId);

            // let currentValue = parseInt(lotInput.value) || 0;
            // let realPriceValue = parseFloat(realPrice.value) || 0;

            // lotInput.value = currentValue + 1;

            // quantity.value = lotInput.value * quantityPerLot;

            // let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            // costPrice.innerHTML = "₹ " + cp;


            // if (wallet > cp) {
            //     maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            //     costPrice.style.color = 'green';
            // } else {
            //     maxPrice.style.color = 'red';
            //     costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            // }

        }

        function decrementLot(quantityPerLot, uniqueId, wallet, tradeType) {

            const lotInput = document.getElementById('lotSize' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Decrement the lot size only if it's greater than 1
            if (currentValue > 1) {
                lotInput.value = currentValue - 1;

                // Update quantity and cost price
                quantity.value = lotInput.value * quantityPerLot;
                let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
                console.log(cp);

                costPrice.innerHTML = "₹ " + cp;

                // Update color logic
                if (wallet >= cp) {
                    maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                    costPrice.style.color = 'green';
                } else {
                    maxPrice.style.color = 'red';
                    costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                }
            } else {
                console.log("Lot size cannot be less than 1.");
            }

            // const lotInput = document.getElementById('lotSize' + uniqueId);
            // const quantity = document.getElementById('quantity' + uniqueId);
            // const costPrice = document.getElementById('costPrice' + uniqueId);
            // const maxPrice = document.getElementById('maxPrice' + uniqueId);
            // const realPrice = document.getElementById('realprice' + uniqueId);

            // let currentValue = parseInt(lotInput.value) || 0;
            // let realPriceValue = parseFloat(realPrice.value) || 0;

            // if (currentValue > 1) {
            //     lotInput.value = currentValue - 1;
            //     quantity.value = lotInput.value * quantityPerLot;
            //     let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            //     costPrice.innerHTML = "₹ " + cp;
            //     if (wallet > cp) {
            //         maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            //         costPrice.style.color = 'green';
            //     } else {
            //         maxPrice.style.color = 'red';
            //         costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            //     }
            // }



        }
    </script>

    <script>
        Echo.channel('watchlists')
            .listen('Watchlist', (event) => {
                const feeds = event.watchlist.feeds;
                console.log(feeds);

                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        const isinElement = Array.from(document.querySelectorAll("p[id^='isin']")).find(el => el
                            .textContent === receivedIsin);
                            
                        // const isinElement = Array.from(document.querySelectorAll("p[id^='isin']")).find(el => el.textContent === receivedIsin);
                        if (isinElement) {
                            const rowId = isinElement.id.replace('isin', '');
                            console.log(rowId);

                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;

                            document.getElementById(`ltp${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`limitprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`limitprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`highlow${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high +
                                '/' + feedData.marketOHLC.ohlc[0].low || '0' + '/' + '0';
                            document.getElementById(`openclose${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open + '/' + feedData.marketOHLC.ohlc[0].close || '0' + '/' + '0';

                            // const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageChange = ltp && cp ? (((ltp - cp) / cp) * 100).toFixed(2) : '0';

                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}

                                     
                                `;




                            // bid and ask
                            document.getElementById(`bid${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bidQ || '0';
                            document.getElementById(`ask${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .askQ || '0';
                        } else{
                            console.log('ISIN not found:', receivedIsin);
                        }

                    }
                }
            });

        function closeModal() {
            let modal = document.getElementById('exampleModalCenter{{ $i }}');
            let bootstrapModal = bootstrap.Modal.getInstance(modal);
            bootstrapModal.hide();
        }
    </script>


    <script>
        function addWatchlist(item) {

            console.log(item);





            //use ajax and swel fire to add watchlist  using of post method
            $.ajax({
                url: "{{ route('add-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                data: item,
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
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        })

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
                            'An error occurred while adding the script.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });






        }

        function removeWatchlist(id) {
            console.log(id);

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
                            icon: 'success',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
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
                            'An error occurred while removing the script.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });
        }
    </script>

    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    {{-- <script src="{{ asset('js/dashboard/future.js') }}"></script> --}}




    <!-- Dashboard 1 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>


    <script>
        // Initialize chart
        const chartContainer = document.getElementById("chart");
        const chart = LightweightCharts.createChart(chartContainer, {
            layout: {
                backgroundColor: "#ffffff",
                textColor: "#333"
            },
            grid: {
                vertLines: {
                    color: "#e1e1e1"
                },
                horzLines: {
                    color: "#e1e1e1"
                }
            },
            priceScale: {
                borderColor: "#cccccc"
            },
            timeScale: {
                borderColor: "#cccccc"
            },
        });

        // Add candlestick series
        const candleSeries = chart.addCandlestickSeries({
            upColor: "#4caf50",
            downColor: "#f44336",
            borderUpColor: "#4caf50",
            borderDownColor: "#f44336",
            wickUpColor: "#4caf50",
            wickDownColor: "#f44336",
        });



        // Format data function
        function formatData(data) {
            return data.map(([timestamp, open, high, low, close]) => ({
                time: Math.floor(timestamp / 1000),
                open,
                high,
                low,
                close,
            }));
        }

        // Fetch data
        async function fetchData(isin, model) {

            var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasBottom'));
            offcanvas.show();

            try {

                // Show a loading popup
                Swal.fire({
                    title: 'Loading',
                    text: 'Fetching stock data...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                const response = await fetch("/fetch-stock-data/" + isin);
                if (!response.ok) throw new Error("Network response was not ok");

                const rawData = await response.json();
                const formattedData = formatData(rawData);

                if (formattedData.length === 0) throw new Error("No valid data available");

                Swal.close();


                candleSeries.setData(formattedData);
            } catch (error) {

                Swal.close();

                // Show an error message
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.message || "Something went wrong!",
                });
                console.error("Error fetching or setting data:", error);
                // Fallback data
                candleSeries.setData(formatData([
                    [1696155600000, 25788.45, 25907.6, 25788.05, 25861.3],
                    [1696155660000, 25861.3, 25873, 25822.35, 25824.05],
                    [1696155720000, 25824.6, 25831.8, 25743.45, 25759.35],
                ]));
            }
        }

        function setTimeFrame(timeFrame) {
            fetchData(); // This function should ideally use `timeFrame` to adjust the API call
        }
    </script>



</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>
