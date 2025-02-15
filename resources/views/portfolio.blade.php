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


    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    {{--
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Style css -->
    {{--
    <link class="main-css" href="css/style.css" rel="stylesheet"> --}}
    <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Datatable -->
    {{--
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

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


        .swal2-actions {
            gap: 10px;
        }

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
    <div id="preload">
        <p style="color: white; font-size: 1.5rem;"></p>
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
                                                       $trades = DB::table('trades')
                                                        ->where('trades.user_id', $user->id)
                                                        ->where('trades.status', 'executed')
                                                        ->leftJoin('future_temp', 'future_temp.instrumentKey', '=', 'trades.instrumentKey') // Join future_temp table
                                                        ->selectRaw('
                                                            trades.instrumentKey,
                                                            SUM(trades.quantity) as quantity,
                                                            AVG(trades.price) as avg_price,
                                                            MIN(trades.stock_name) as stock_name,
                                                            MIN(trades.stock_symbol) as stock_symbol,
                                                            MIN(trades.action) as action,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(trades.duration) as duration,
                                                            SUM(trades.total_cost) as total_cost,
                                                            SUM(trades.cost) as cost,
                                                            SUM(trades.lotSize) as lotSize,
                                                            MIN(trades.created_at) as created_at,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(future_temp.ltp) as ltp,
                                                            MIN(future_temp.cp) as cp,
                                                            MIN(trades.margin) as margin,
                                                            MIN(trades.price) as price

                                                        ')
                                                        ->groupBy('trades.instrumentKey', 'trades.duration')
                                                        ->get();
                                                        // print_r($trades);
                                                        $i = 1;
                                               

                                                        foreach ($trades as $stock){
                                                            $foisin = $stock->instrumentKey;
                                                        ?>
                                                        <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                            id="orderoffcanvasBottom{{ $i }}"
                                                            aria-labelledby="offcanvasBottomLabel"
                                                            style="height: fit-content">
                                                            <div class="offcanvas-header">
                                                                <div class="d-flex flex-column">
                                                                    <h5 class="offcanvas-title"
                                                                        id="offcanvasBottomLabel{{ $i }}">
                                                                        {{ $stock->stock_name }}
                                                                    </h5>
                                                                    <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                        id="change{{ $i }}">
                                                                        <?php
                                                                        $change = $stock->ltp - $stock->cp;
                                                                        $percentage = $stock->cp != 0 ? ($change / $stock->cp) * 100 : 0;
                                                                        $formattedPercentage = number_format($percentage, 2);
                                                                        $formattedChange = number_format($change, 2);
                                                                        
                                                                        if ($change > 0) {
                                                                            $badgeClass = 'text-success';
                                                                            $textClass = 'text-success';
                                                                            $icon = '▲';
                                                                        } elseif ($change < 0) {
                                                                            $badgeClass = 'text-danger';
                                                                            $textClass = 'text-danger';
                                                                            $icon = '▼';
                                                                        } else {
                                                                            $badgeClass = 'badge-warning';
                                                                            $textClass = 'text-warning';
                                                                            $icon = '-';
                                                                        }
                                                                        ?>
                                                                        <span
                                                                            class="badge {{ $badgeClass }} me-1">{{ $icon }}</span>
                                                                        <span class="{{ $textClass }}"
                                                                            id="perc{{ $i }}">{{ $formattedPercentage }}%
                                                                            &nbsp;</span>
                                                                        <span class="{{ $textClass }}"
                                                                            id="perc{{ $i }}">({{ $formattedChange }}
                                                                            pts)</span>
                                                                    </p>
                                                                </div>


                                                                <button type="button" class="btn-close text-reset"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>

                                                            <div class="offcanvas-body small">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="card">
                                                                            <div class="card-header flex-wrap">
                                                                                <nav class=""
                                                                                    style="width: 100%;">
                                                                                    <div class="nav nav-pills light "
                                                                                        id="nav-tab" role="tablist">
                                                                                        <button
                                                                                            class="nav-link active "
                                                                                            style="width: 100%;"
                                                                                            id="nav-order-tab"
                                                                                            data-bs-toggle="tab"
                                                                                            data-bs-target="#nav-order"
                                                                                            type="button"
                                                                                            role="tab"
                                                                                            aria-selected="true">Close
                                                                                            Order</button>
                                                                                    </div>
                                                                                </nav>
                                                                                <!-- </div> -->
                                                                            </div>
                                                                            <div class="card-body pt-2">
                                                                                <div
                                                                                    class="table-responsive dataTabletrade">
                                                                                    <input type="text"
                                                                                        name="id"
                                                                                        value="{{ $i }}"
                                                                                        id="id" hidden>
                                                                                    <input type="text"
                                                                                        name="instrumentKey1{{ $i }}"
                                                                                        value="{{ $foisin }}"
                                                                                        id="instrumentKey1{{ $i }}"
                                                                                        hidden>
                                                                                    <div class="col-xl-4"
                                                                                        style="width: 100%;">
                                                                                        <div class="card">
                                                                                            <div
                                                                                                class="card-body pt-2">
                                                                                                <?php
                                                                                                // Determine margin based on trade type
                                                                                                $margin = match ($stock->tradeType) {
                                                                                                    'FUT' => 500,
                                                                                                    'CE', 'PE' => 7,
                                                                                                    default => 1,
                                                                                                };
                                                                                                
                                                                                                // Calculate values
                                                                                                $currentValue = $stock->ltp * $stock->quantity;
                                                                                                $investedValue = $stock->cost;
                                                                                                
                                                                                                $change = $currentValue - $investedValue;
                                                                                                
                                                                                                // Reverse change for SELL action
                                                                                                if ($stock->action == 'SELL') {
                                                                                                    $change *= -1;
                                                                                                }
                                                                                                
                                                                                                // Prevent division by zero when calculating percentage
                                                                                                $changePercentage = $investedValue > 0 ? ($change / $investedValue) * 100 : 0;
                                                                                                $profitAmount = $investedValue + $change;
                                                                                                
                                                                                                // Determine profit/loss status
                                                                                                if ($change > 0) {
                                                                                                    $statusClass = 'badge-success';
                                                                                                    $textClass = 'text-success';
                                                                                                    $icon = '▲';
                                                                                                    $statusText = 'Net Gain';
                                                                                                } elseif ($change < 0) {
                                                                                                    $statusClass = 'badge-danger';
                                                                                                    $textClass = 'text-danger';
                                                                                                    $icon = '▼';
                                                                                                    $statusText = 'Net Loss';
                                                                                                } else {
                                                                                                    $statusClass = 'badge-warning';
                                                                                                    $textClass = 'text-warning';
                                                                                                    $icon = '-';
                                                                                                    $statusText = 'No Change';
                                                                                                }
                                                                                                ?>

                                                                                                <div
                                                                                                    class="d-flex align-items-center mt-3 mb-2">
                                                                                                    <span
                                                                                                        class="badge {{ $statusClass }} me-2">{{ $icon }}</span>
                                                                                                    <div
                                                                                                        class="d-flex flex-column">
                                                                                                        <h4 class="card-title mb-0"
                                                                                                            style="font-size:1rem; font-weight:900">
                                                                                                            {{ $statusText }}
                                                                                                        </h4>
                                                                                                        <div
                                                                                                            class="d-flex">
                                                                                                            <?php if ($change >= 0) { ?>
                                                                                                            <span
                                                                                                                class="text-success">+
                                                                                                                ₹
                                                                                                                {{ number_format($change, 2) }}
                                                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                                                            <?php } elseif ($change < 0) { ?>
                                                                                                            <span
                                                                                                                class="text-danger">-
                                                                                                                ₹
                                                                                                                {{ number_format(abs($change), 2) }}
                                                                                                                ({{ number_format(abs($changePercentage), 2) }}%)</span>
                                                                                                            <?php } else { ?>
                                                                                                            <span
                                                                                                                class="text-warning">
                                                                                                                ₹
                                                                                                                {{ number_format($change, 2) }}
                                                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                                                            <?php } ?>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>



                                                                                                <!-- Stock Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Initial
                                                                                                        Investment:
                                                                                                        ₹{{ $stock->cost }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Margin Utilized:
                                                                                                        ₹{{ $stock->cost - $stock->total_cost }}
                                                                                                        ({{ $margin }}x)
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                        Adjusted
                                                                                                        Investment:
                                                                                                        ₹{{ $stock->total_cost }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!-- Lot & Quantity -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Lot Size:
                                                                                                        {{ $stock->lotSize }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Quantity:
                                                                                                        {{ $stock->quantity }}
                                                                                                    </p>
                                                                                                </div>


                                                                                                <!-- Price Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-5 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:
                                                                                                        {{ $stock->price }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Market Price:
                                                                                                        {{ $stock->ltp }}
                                                                                                    </p>
                                                                                                </div>


                                                                                                <!-- Profit/Loss -->
                                                                                                <div
                                                                                                    class="d-flex flex-column">
                                                                                                    @if ($change > 0)
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">
                                                                                                            <h4
                                                                                                                class="mb-0 me-2">
                                                                                                                Net
                                                                                                                Gain:
                                                                                                            </h4>
                                                                                                            <span
                                                                                                                class="text-success">₹{{ number_format($change, 2) }}</span>
                                                                                                        </div>
                                                                                                    @elseif($change < 0)
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">
                                                                                                            <h4
                                                                                                                class="mb-0 me-2">
                                                                                                                Net
                                                                                                                Loss:
                                                                                                            </h4>
                                                                                                            <span
                                                                                                                class="text-danger">₹{{ number_format($change, 2) }}</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="text-center">
                                                                                                            <span
                                                                                                                class="text-warning">No
                                                                                                                Change</span>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>







                                                                                                <!-- Buy/Sell Buttons -->
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }})"
                                                                                                        type="submit"
                                                                                                        class="btn btn-primary btn-sm text-uppercase btn-block">CLOSE</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                            {{--
                                                                        </div> --}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- column -->
                                                        <p style="display: none" id="isin1{{ $i }}">
                                                            {{ $foisin }}</p>
                                                        <p style="display: none" id="invest1{{ $i }}">
                                                            {{ $stock->total_cost }}</p>
                                                        <p style="display: none" id="lotSize1{{ $i }}">
                                                            {{ $stock->lotSize }}</p>
                                                        <p style="display: none" id="quantity1{{ $i }}">
                                                            {{ $stock->quantity }}</p>
                                                        <p style="display: none" id="tradeType1{{ $i }}">
                                                            {{ $stock->tradeType }}</p>
                                                        <p style="display: none" id="action1{{ $i }}">
                                                            {{ $stock->action }}</p>

                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                            data-bs-toggle="modal"
                                                            onclick="showOrderForm({{ $i }})">
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
                                                                                    style="font-size:1rem; font-weight:900">
                                                                                    {{ $stock->stock_name }}


                                                                                </h4>
                                                                                <span
                                                                                    id="stockChange1{{ $i }}">
                                                                                    <?php 
                                                                                    $change = $stock->ltp - $stock->cp;
                                                                                    if($change > 0){
                                                                                        ?>
                                                                                    <span
                                                                                        class="text-success me-1">▲</span>
                                                                                    <span class="text-success"
                                                                                        id="perc{{ $i }}">
                                                                                        <?php echo number_format(($change / $stock->cp) * 100, 2); ?>%
                                                                                        &nbsp;
                                                                                    </span>
                                                                                    <span class="text-success"
                                                                                        id="perc{{ $i }}">(
                                                                                        <?php echo number_format($change, 2); ?>
                                                                                        pts)
                                                                                    </span>


                                                                                    <?php 
                                                                                    }elseif($change < 0){
                                                                                        ?>
                                                                                    <span
                                                                                        class="text-danger me-1">▼</span>
                                                                                    <span class="text-danger"
                                                                                        id="perc{{ $i }}">{{ number_format(($change / $stock->cp) * 100, 2) }}%
                                                                                        &nbsp;</span>
                                                                                    <span class="text-danger"
                                                                                        id="perc{{ $i }}">(
                                                                                        <?php echo number_format($change, 2); ?>
                                                                                        pts)
                                                                                    </span>

                                                                                    <?php
                                                                                    }else{
                                                                                        ?>
                                                                                    <span
                                                                                        class="text-warning me-1">-</span>
                                                                                    <span class="text-warning"
                                                                                        id="perc{{ $i }}">0.00%
                                                                                        &nbsp;</span>
                                                                                    <span class="text-warning"
                                                                                        id="perc{{ $i }}">(0.00
                                                                                        pts) </span>
                                                                                    <?php 
                                                                                    }    
                                                                                    ?>
                                                                                </span>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">
                                                                                <p class="text-muted mb-1 fs-13">
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    $margin = 1;
                                                                    if ($stock->tradeType == 'FUT') {
                                                                        $margin = 500;
                                                                    } elseif ($stock->tradeType == 'CE' || $stock->tradeType == 'PE') {
                                                                        $margin = 7;
                                                                    } else {
                                                                        $margin = 1;
                                                                    }
                                                                    
                                                                    $currentValue = $stock->ltp * $stock->quantity;
                                                                    // $currentValue = ($stock->ltp * $stock->quantity) / $margin;
                                                                    
                                                                    $investedValue = $stock->cost;
                                                                    // $investedValue = $stock->total_cost;
                                                                    $change = $currentValue - $investedValue;
                                                                    
                                                                    if ($stock->action == 'SELL') {
                                                                        $change *= -1;
                                                                    }
                                                                    
                                                                    // Prevent division by zero when calculating percentage
                                                                    $changePercentage = $investedValue > 0 ? ($change / $investedValue) * 100 : 0;
                                                                    $profitAmount = $investedValue + $change;
                                                                    
                                                                    ?>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <p id="price1{{ $i }}"
                                                                                class="mb-0 fs-14 text-dark font-w600">
                                                                                Current : ₹
                                                                                {{ number_format($profitAmount, 2) }}
                                                                            </p>
                                                                            <span class="fs-12">Invest : ₹
                                                                                {{ number_format($investedValue, 2) }}</span>
                                                                            {{-- <span class="fs-12">Delivery</span>
                                                                    --}}
                                                                        </div>
                                                                        <div>
                                                                            {{-- <p class="mb-0 fs-14 text-success font-w600">
                                                                        ₹ 65/10%</P> --}}
                                                                            <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                                id="change1{{ $i }}">
                                                                                <?php if ($change >= 0) { ?>
                                                                                <span class="text-success">+ ₹
                                                                                    {{ number_format($change, 2) }}
                                                                                    ({{ number_format($changePercentage, 2) }}%)</span>
                                                                                <?php } elseif ($change < 0) { ?>
                                                                                <span class="text-danger">- ₹
                                                                                    {{ number_format(abs($change), 2) }}
                                                                                    ({{ number_format(abs($changePercentage), 2) }}%)</span>
                                                                                <?php } else { ?>
                                                                                <span class="text-warning"> ₹
                                                                                    {{ number_format($change, 2) }}
                                                                                    ({{ number_format($changePercentage, 2) }}%)</span>
                                                                                <?php } ?>
                                                                            </p>
                                                                            <span class="fs-12">Lot :
                                                                                {{ $stock->lotSize }} [ Qty
                                                                                {{ $stock->quantity }}]
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
                                                       $trades = DB::table('trades')
                                                        ->where('trades.user_id', $user->id)
                                                        ->where('tradeType','FUT')
                                                        ->where('trades.status', 'processing')
                                                        ->leftJoin('future_temp', 'future_temp.instrumentKey', '=', 'trades.instrumentKey') // Join future_temp table
                                                        ->selectRaw('
                                                            trades.instrumentKey,
                                                            SUM(trades.quantity) as quantity,
                                                            AVG(trades.price) as avg_price,
                                                            MIN(trades.stock_name) as stock_name,
                                                            MIN(trades.stock_symbol) as stock_symbol,
                                                            MIN(trades.action) as action,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(trades.duration) as duration,
                                                            SUM(trades.total_cost) as total_cost,
                                                            SUM(trades.lotSize) as lotSize,
                                                            MIN(trades.created_at) as created_at,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(future_temp.ltp) as ltp,
                                                            MIN(future_temp.cp) as cp
                                                        ')
                                                        ->groupBy('trades.instrumentKey','trades.duration')
                                                        ->get();



                                                        // print_r($trades);
                                                        $i = 1;
                                               

                                                        foreach ($trades as $stock){
                                                            $foisin = $stock->instrumentKey;

                                                         
                                                            

                                                        ?>

                                                    <!--Top up Modal start-->
                                                    <div class="modal fade"
                                                        id="exampleModalCenter2{{ $i }}">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="padding-right: 1.875rem;padding-left: 10px;">
                                                                    <h2 class="modal-title">
                                                                        {{ $stock->stock_name }} </h2>
                                                                    <button type="button" data-bs-dismiss="modal"
                                                                        style="border: none">
                                                                        <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                            width="20" alt="">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body p-0">
                                                                    <div class="trade-container">
                                                                        <div data-bs-dismiss="modal"
                                                                            class="trade-item">
                                                                            <h2>Exit Position</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="trade-item"
                                                                            data-bs-dismiss="modal">
                                                                            <h2>Details</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="trade-item"
                                                                            data-bs-dismiss="modal">
                                                                            <h2>Remove</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-danger light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Top up Modal end-->
                                                    <!-- column -->
                                                    <p style="display: none" id="isin2{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest2{{ $i }}">
                                                        {{ $stock->total_cost }}</p>
                                                    <p style="display: none" id="lotSize2{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity2{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType2{{ $i }}">
                                                        {{ $stock->tradeType }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter2{{ $i }}">
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
                                                                                style="font-size:1rem; font-weight:900">
                                                                                {{ $stock->stock_name }}


                                                                            </h4>
                                                                            <span
                                                                                id="stockChange2{{ $i }}">
                                                                                <?php 
                                                                                    $change = $stock->ltp - $stock->cp;
                                                                                    if($change > 0){
                                                                                        ?>
                                                                                <span
                                                                                    class="text-success me-1">▲</span>
                                                                                <span class="text-success"
                                                                                    id="perc{{ $i }}">
                                                                                    <?php echo number_format(($change / $stock->cp) * 100, 2); ?>%
                                                                                    &nbsp;
                                                                                </span>
                                                                                <span class="text-success"
                                                                                    id="perc{{ $i }}">(
                                                                                    <?php echo number_format($change, 2); ?>
                                                                                    pts)
                                                                                </span>


                                                                                <?php 
                                                                                    }elseif($change < 0){
                                                                                        ?>
                                                                                <span class="text-danger me-1">▼</span>
                                                                                <span class="text-danger"
                                                                                    id="perc{{ $i }}">{{ number_format(($change / $stock->cp) * 100, 2) }}%
                                                                                    &nbsp;</span>
                                                                                <span class="text-danger"
                                                                                    id="perc{{ $i }}">(
                                                                                    <?php echo number_format($change, 2); ?>
                                                                                    pts)
                                                                                </span>

                                                                                <?php
                                                                                    }else{
                                                                                        ?>
                                                                                <span
                                                                                    class="text-warning me-1">-</span>
                                                                                <span class="text-warning"
                                                                                    id="perc{{ $i }}">0.00%
                                                                                    &nbsp;</span>
                                                                                <span class="text-warning"
                                                                                    id="perc{{ $i }}">(0.00
                                                                                    pts) </span>
                                                                                <?php 
                                                                                    }    
                                                                                    ?>
                                                                            </span>
                                                                        </a>
                                                                        <div class="text-end"
                                                                            style="position: absolute;top: 10px;right: 14px;">
                                                                            <p class="text-muted mb-1 fs-13">
                                                                                {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $margin = 0;
                                                                if ($stock->tradeType == 'FUT') {
                                                                    $margin = 500;
                                                                } elseif ($stock->tradeType == 'CE' || $stock->tradeType == 'PE') {
                                                                    $margin = 7;
                                                                } else {
                                                                    $margin = 0;
                                                                }
                                                                
                                                                if ($margin > 0) {
                                                                    $currentValue = ($stock->ltp * $stock->quantity) / $margin;
                                                                } else {
                                                                    $currentValue = 0; // Prevent division by zero
                                                                }
                                                                
                                                                $investedValue = $stock->total_cost;
                                                                $change = $currentValue - $investedValue;
                                                                
                                                                // Prevent division by zero when calculating percentage
                                                                $changePercentage = $investedValue > 0 ? ($change / $investedValue) * 100 : 0;
                                                                $profitAmount = $investedValue + $change;
                                                                
                                                                ?>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <p id="price2{{ $i }}"
                                                                            class="mb-0 fs-14 text-dark font-w600">
                                                                            Current : ₹
                                                                            {{ number_format($profitAmount, 2) }}
                                                                        </p>
                                                                        <span class="fs-12">Invest : ₹
                                                                            {{ $stock->total_cost }}</span>
                                                                        {{-- <span class="fs-12">Delivery</span>
                                                                    --}}
                                                                    </div>
                                                                    <div>
                                                                        {{-- <p class="mb-0 fs-14 text-success font-w600">
                                                                        ₹ 65/10%</P> --}}
                                                                        <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                            id="change2{{ $i }}">
                                                                            <?php if ($change >= 0) { ?>
                                                                            <span class="text-success">+ ₹
                                                                                {{ number_format($change, 2) }}
                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                            <?php } elseif ($change < 0) { ?>
                                                                            <span class="text-danger">- ₹
                                                                                {{ number_format(abs($change), 2) }}
                                                                                ({{ number_format(abs($changePercentage), 2) }}%)</span>
                                                                            <?php } else { ?>
                                                                            <span class="text-warning"> ₹
                                                                                {{ number_format($change, 2) }}
                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                            <?php } ?>
                                                                        </p>
                                                                        <span class="fs-12">Lot :
                                                                            {{ $stock->lotSize }} [ Qty
                                                                            {{ $stock->quantity }}]
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
                                                       $trades = DB::table('trades')
                                                        ->where('trades.user_id', $user->id)
                                                        ->where('tradeType','CE')
                                                        ->orWhere('tradeType','PE')
                                                        ->where('trades.status', 'processing')
                                                        ->leftJoin('future_temp', 'future_temp.instrumentKey', '=', 'trades.instrumentKey') // Join future_temp table
                                                        ->selectRaw('
                                                            trades.instrumentKey,
                                                            SUM(trades.quantity) as quantity,
                                                            AVG(trades.price) as avg_price,
                                                            MIN(trades.stock_name) as stock_name,
                                                            MIN(trades.stock_symbol) as stock_symbol,
                                                            MIN(trades.action) as action,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(trades.duration) as duration,
                                                            SUM(trades.total_cost) as total_cost,
                                                            SUM(trades.lotSize) as lotSize,
                                                            MIN(trades.created_at) as created_at,
                                                            MIN(trades.tradeType) as tradeType,
                                                            MIN(future_temp.ltp) as ltp,
                                                            MIN(future_temp.cp) as cp
                                                        ')
                                                        ->groupBy('trades.instrumentKey','trades.duration')
                                                        ->get();



                                                        // print_r($trades);
                                                        $i = 1;
                                               

                                                        foreach ($trades as $stock){
                                                            $foisin = $stock->instrumentKey;

                                                         
                                                            

                                                        ?>

                                                    <!--Top up Modal start-->
                                                    <div class="modal fade"
                                                        id="exampleModalCenter3{{ $i }}">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="padding-right: 1.875rem;padding-left: 10px;">
                                                                    <h2 class="modal-title">
                                                                        {{ $stock->stock_name }} </h2>
                                                                    <button type="button" data-bs-dismiss="modal"
                                                                        style="border: none">
                                                                        <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                            width="20" alt="">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body p-0">
                                                                    <div class="trade-container">
                                                                        <div data-bs-dismiss="modal"
                                                                            onclick="showOrderForm({{ $i }})"
                                                                            class="trade-item">
                                                                            <h2>Exit Position</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="trade-item"
                                                                            data-bs-dismiss="modal">
                                                                            <h2>Details</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="trade-item"
                                                                            data-bs-dismiss="modal">
                                                                            <h2>Remove</h2>
                                                                            <div
                                                                                class="icon-box icon-box-sm bgl-primary">
                                                                                <a href="javascript:void(0)"
                                                                                    id="add_script">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                                        width="20" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-danger light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!--Top up Modal end-->


                                                    {{-- <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                    id="orderoffcanvasBottom{{ $i }}"
                                                    aria-labelledby="offcanvasBottomLabel" style="height: fit-content">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel{{ $i }}">
                                                            Offcanvas
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

                                                                        <nav class="" style="width: 100%;">
                                                                            <div class="nav nav-pills light "
                                                                                id="nav-tab" role="tablist">
                                                                                <button class="nav-link active "
                                                                                    style="width: 50%;"
                                                                                    id="nav-order-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#nav-order{{ $i }}"
                                                                                    type="button" role="tab"
                                                                                    aria-selected="true">Buy</button>
                                                                                <button class="nav-link"
                                                                                    style="width: 50%"
                                                                                    id="nav-histroy-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#nav-history{{ $i }}"
                                                                                    type="button" role="tab"
                                                                                    aria-selected="false">Sell
                                                                                </button>

                                                                            </div>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="card-body pt-2">
                                                                        <div class="tab-content" id="nav-tabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="nav-order{{ $i }}" role="tabpanel"
                                                                                aria-labelledby="nav-order-tab">
                                                                                <div
                                                                                    class="table-responsive dataTabletrade">
                                                                                    <form id="buyform{{ $i }}"
                                                                                        name="buyform{{ $i }}"
                                                                                        method="POST"
                                                                                        action="{{ route('placeBuyOrder') }}">
                                                                                        @csrf
                                                                                        <input type="text" name="id"
                                                                                            value="{{ $i }}" id="id"
                                                                                            hidden>
                                                                                        <input type="text"
                                                                                            name="instrumentKey1{{ $i }}"
                                                                                            value="{{ $foisin }}"
                                                                                            id="instrumentKey1{{ $i }}"
                                                                                            hidden>
                                                                                        <input type="text"
                                                                                            name="instrumentType{{ $i }}"
                                                                                            value="{{ $instrumentType }}"
                                                                                            id="instrumentType{{ $i }}"
                                                                                            hidden>
                                                                                        <div class="col-xl-4"
                                                                                            style="width: 100%;">
                                                                                            <div class="card">
                                                                                                <div
                                                                                                    class="card-body pt-2">
                                                                                                    <div
                                                                                                        class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                                        <span
                                                                                                            class="small text-muted">Available
                                                                                                            Balance</span>
                                                                                                        <span
                                                                                                            class="text-dark">{{
                                                                                                            $user->real_wallet
                                                                                                            }}</span>
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <label
                                                                                                            class="form-label">Order
                                                                                                            Type</label>
                                                                                                        <select
                                                                                                            id="orderType1{{ $i }}"
                                                                                                            name="orderType1{{ $i }}"
                                                                                                            onchange="handleOrderTypeChange({{ $i }}, this.value,'buy')"
                                                                                                            class="form-select">
                                                                                                            <option
                                                                                                                value="market"
                                                                                                                selected="">
                                                                                                                Market
                                                                                                                Order
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="limit">
                                                                                                                Limit
                                                                                                                Order
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="stoploss">
                                                                                                                Stop
                                                                                                                Loss
                                                                                                                Order
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text">Market
                                                                                                            Price</span>
                                                                                                        <input
                                                                                                            id="realprice1{{ $i }}"
                                                                                                            name="realprice1{{ $i }}"
                                                                                                            readonly
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Enter price"
                                                                                                            value="{{ $stock->ltp }}">
                                                                                                        >

                                                                                                        <span
                                                                                                            class="input-group-text">₹</span>
                                                                                                    </div>
                                                                                                    <div id="limitblock1{{ $i }}"
                                                                                                        style="display: none"
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text">Limit
                                                                                                            Price</span>
                                                                                                        <input
                                                                                                            id="limitprice1{{ $i }}"
                                                                                                            name="limitprice1{{ $i }}"
                                                                                                            disabled
                                                                                                            type="hidden"
                                                                                                            class="form-control"
                                                                                                            placeholder="Enter price"
                                                                                                            value="0.00">

                                                                                                        <span
                                                                                                            class="input-group-text">₹</span>
                                                                                                    </div>

                                                                                                    <div class=""
                                                                                                        style="display: flex; justify-content:space-between; gap:20px;">
                                                                                                        <div
                                                                                                            class="input-group mb-3">
                                                                                                            <span
                                                                                                                class="input-group-text">Lot</span>
                                                                                                            <button
                                                                                                                onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }}, 'buy')"
                                                                                                                class="btn btn-outline-secondary"
                                                                                                                type="button"
                                                                                                                id="decrement">-</button>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control text-center"
                                                                                                                placeholder="Enter size"
                                                                                                                id="lotSize1{{ $i }}"
                                                                                                                name="lotSize1{{ $i }}"
                                                                                                                value="0"
                                                                                                                readonly>
                                                                                                            <button
                                                                                                                onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'buy')"
                                                                                                                class="btn btn-outline-secondary"
                                                                                                                type="button"
                                                                                                                id="increment">+</button>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="input-group mb-3">
                                                                                                            <span
                                                                                                                class="input-group-text">Quantity</span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Enter size"
                                                                                                                id="quantity1{{ $i }}"
                                                                                                                name="quantity1{{ $i }}"
                                                                                                                value={{
                                                                                                                $quantity
                                                                                                                }}
                                                                                                                readonly>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="mb-3">
                                                                                                        <label
                                                                                                            class="form-label">Mode</label>
                                                                                                        <div
                                                                                                            class="d-flex align-items-center gap-3">
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="tradeMode1{{ $i }}"
                                                                                                                    id="deliveryMode1{{ $i }}"
                                                                                                                    value="delivery"
                                                                                                                    onchange="handleTradeModeChange({{ $i }}, 'delivery')"
                                                                                                                    checked>
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="deliveryMode1{{ $i }}">
                                                                                                                    Delivery
                                                                                                                    Mode
                                                                                                                </label>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="tradeMode1{{ $i }}"
                                                                                                                    id="intradayMode1{{ $i }}"
                                                                                                                    value="intraday"
                                                                                                                    onchange="handleTradeModeChange({{ $i }}, 'intraday')">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="intradayMode1{{ $i }}">
                                                                                                                    Intraday
                                                                                                                    Mode
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div
                                                                                                        class="d-flex justify-content-between flex-wrap">

                                                                                                        <div
                                                                                                            class="d-flex justify-content-between flex-wrap align-items-center">
                                                                                                            <div
                                                                                                                class="d-flex flex-column">
                                                                                                                <span>
                                                                                                                    Cost:
                                                                                                                    <s id="costPrice1{{ $i }}"
                                                                                                                        name="costPrice1{{ $i }}"
                                                                                                                        class="px-1">₹0.00</s>
                                                                                                                </span>
                                                                                                                <span>
                                                                                                                    After
                                                                                                                    Margin:
                                                                                                                    <span
                                                                                                                        id="marginCost1{{ $i }}"
                                                                                                                        class="text-success">₹0.00</span>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="d-flex">
                                                                                                            <div>
                                                                                                                Max:
                                                                                                            </div>
                                                                                                            <div id="maxPrice1{{ $i }}"
                                                                                                                name="maxPrice1{{ $i }}"
                                                                                                                class=" px-1">
                                                                                                                ₹{{
                                                                                                                $user->real_wallet
                                                                                                                }}
                                                                                                            </div>


                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <p id="error-fund1{{ $i }}"
                                                                                                            style="display: none;color:red">
                                                                                                            Insuffient
                                                                                                            Fund
                                                                                                        </p>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="mt-3 d-flex justify-content-between">
                                                                                                        <button
                                                                                                            type="subit"
                                                                                                            class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
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
                                                </div> --}}
                                                    <!-- column -->
                                                    <p style="display: none" id="isin3{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest3{{ $i }}">
                                                        {{ $stock->total_cost }}</p>
                                                    <p style="display: none" id="lotSize3{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity3{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType3{{ $i }}">
                                                        {{ $stock->tradeType }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter3{{ $i }}">
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
                                                                                style="font-size:1rem; font-weight:900">
                                                                                {{ $stock->stock_name }}


                                                                            </h4>
                                                                            <span
                                                                                id="stockChange3{{ $i }}">
                                                                                <?php 
                                                                                    $change = $stock->ltp - $stock->cp;
                                                                                    if($change > 0){
                                                                                        ?>
                                                                                <span
                                                                                    class="text-success me-1">▲</span>
                                                                                <span class="text-success"
                                                                                    id="perc{{ $i }}">
                                                                                    <?php echo number_format(($change / $stock->cp) * 100, 2); ?>%
                                                                                    &nbsp;
                                                                                </span>
                                                                                <span class="text-success"
                                                                                    id="perc{{ $i }}">(
                                                                                    <?php echo number_format($change, 2); ?>
                                                                                    pts)
                                                                                </span>


                                                                                <?php 
                                                                                    }elseif($change < 0){
                                                                                        ?>
                                                                                <span class="text-danger me-1">▼</span>
                                                                                <span class="text-danger"
                                                                                    id="perc{{ $i }}">{{ number_format(($change / $stock->cp) * 100, 2) }}%
                                                                                    &nbsp;</span>
                                                                                <span class="text-danger"
                                                                                    id="perc{{ $i }}">(
                                                                                    <?php echo number_format($change, 2); ?>
                                                                                    pts)
                                                                                </span>

                                                                                <?php
                                                                                    }else{
                                                                                        ?>
                                                                                <span
                                                                                    class="text-warning me-1">-</span>
                                                                                <span class="text-warning"
                                                                                    id="perc{{ $i }}">0.00%
                                                                                    &nbsp;</span>
                                                                                <span class="text-warning"
                                                                                    id="perc{{ $i }}">(0.00
                                                                                    pts) </span>
                                                                                <?php 
                                                                                    }    
                                                                                    ?>
                                                                            </span>
                                                                        </a>
                                                                        <div class="text-end"
                                                                            style="position: absolute;top: 10px;right: 14px;">
                                                                            <p class="text-muted mb-1 fs-13">
                                                                                {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $margin = 0;
                                                                if ($stock->tradeType == 'FUT') {
                                                                    $margin = 500;
                                                                } elseif ($stock->tradeType == 'CE' || $stock->tradeType == 'PE') {
                                                                    $margin = 7;
                                                                } else {
                                                                    $margin = 0;
                                                                }
                                                                
                                                                if ($margin > 0) {
                                                                    $currentValue = ($stock->ltp * $stock->quantity) / $margin;
                                                                } else {
                                                                    $currentValue = 0; // Prevent division by zero
                                                                }
                                                                
                                                                $investedValue = $stock->total_cost;
                                                                $change = $currentValue - $investedValue;
                                                                
                                                                // Prevent division by zero when calculating percentage
                                                                $changePercentage = $investedValue > 0 ? ($change / $investedValue) * 100 : 0;
                                                                $profitAmount = $investedValue + $change;
                                                                
                                                                ?>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <p id="price3{{ $i }}"
                                                                            class="mb-0 fs-14 text-dark font-w600">
                                                                            Current : ₹
                                                                            {{ number_format($profitAmount, 2) }}
                                                                        </p>
                                                                        <span class="fs-12">Invest : ₹
                                                                            {{ $stock->total_cost }}</span>
                                                                        {{-- <span class="fs-12">Delivery</span>
                                                                    --}}
                                                                    </div>
                                                                    <div>
                                                                        {{-- <p class="mb-0 fs-14 text-success font-w600">
                                                                        ₹ 65/10%</P> --}}
                                                                        <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                            id="change2{{ $i }}">
                                                                            <?php if ($change >= 0) { ?>
                                                                            <span class="text-success">+ ₹
                                                                                {{ number_format($change, 2) }}
                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                            <?php } elseif ($change < 0) { ?>
                                                                            <span class="text-danger">- ₹
                                                                                {{ number_format(abs($change), 2) }}
                                                                                ({{ number_format(abs($changePercentage), 2) }}%)</span>
                                                                            <?php } else { ?>
                                                                            <span class="text-warning"> ₹
                                                                                {{ number_format($change, 2) }}
                                                                                ({{ number_format($changePercentage, 2) }}%)</span>
                                                                            <?php } ?>
                                                                        </p>
                                                                        <span class="fs-12">Lot :
                                                                            {{ $stock->lotSize }} [ Qty
                                                                            {{ $stock->quantity }}]
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
            <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a>
                <span class="current-year">2024</span>
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

                // console.log(feeds);


                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        // console.log("receivedIsin", receivedIsin);


                        // console.log(feedData);
                        // console.log(document.querySelectorAll("p[id^='isin1']"));

                        // Find the <p> tag containing the matching ISIN
                        const allElement = Array.from(document.querySelectorAll("p[id^='isin1']")).filter(el => el
                            .textContent.trim() === receivedIsin.trim());




                        // console.log("allElement", allElement);
                        const futureElement = Array.from(document.querySelectorAll("p[id^='isin2']")).filter(el => el
                            .textContent === receivedIsin);
                        // console.log("futureElement", futureElement);

                        const optionElement = Array.from(document.querySelectorAll("p[id^='isin3']")).filter(el =>
                            el.textContent.trim() === receivedIsin.trim()
                        );
                        // console.log("optionElement", optionElement);

                        if (allElement) {

                            allElement.forEach(el => {
                                const rowId = el.id.replace('isin1', '');

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price

                                const invest = parseFloat(document.getElementById(`invest1${rowId}`)
                                    .textContent) || 0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity1${rowId}`)
                                    .textContent) || 0; // Quantity
                                const tradeType = document.getElementById(`tradeType1${rowId}`).innerText
                                    .trim(); // Trade type
                                const action = document.getElementById(`action1${rowId}`).innerText
                                    .trim(); // Trade type

                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(quantity)) /
                                    margin); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                document.getElementById(`price1${rowId}`).textContent =
                                    `Current : ₹${pandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';


                                document.getElementById(`stockChange1${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change1${rowId}`).innerHTML =
                                    `
                            ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;
                            });





                        } else if (futureElement) {

                            futureElement.forEach(el => {
                                const rowId = futureElement.id.replace('isin2', '');

                                // console.log("rowId2", rowId);

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price
                                const invest = parseFloat(document.getElementById(`invest2${rowId}`)
                                        .textContent) ||
                                    0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity2${rowId}`)
                                        .textContent) ||
                                    0; // Quantity

                                document.getElementById(`price1${rowId}`).textContent = "Current : ₹" + (
                                    feedData.ltpc
                                    .ltp || '0');

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';

                                const profitAndLoss = ((price - invest) * quantity).toFixed(2);
                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';

                                const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                                const percentageIcon = percentageChange > 0 ?
                                    'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                    'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                                // class bage for profit an dloss
                                const profitAndLossClass = profitAndLoss > 0 ? 'badge-success' : 'badge-danger';
                                const profitAndLossIcon = profitAndLoss > 0 ?
                                    'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                    'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                                document.getElementById(`stockChange2${rowId}`).innerHTML =
                                    `
                                            ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                            ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                            ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change2${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                    ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                    : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;
                            });





                        } else if (optionElement) {

                            optionElement.forEach(el => {
                                const rowId = optionElement.id.replace('isin3', '');

                                // console.log("rowId3", rowId);

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price
                                const invest = parseFloat(document.getElementById(`invest3${rowId}`)
                                        .textContent) ||
                                    0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity3${rowId}`)
                                        .textContent) ||
                                    0; // Quantity

                                document.getElementById(`price1${rowId}`).textContent = "Current : ₹" + (
                                    feedData.ltpc
                                    .ltp || '0');

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';

                                const profitAndLoss = ((price - invest) * quantity).toFixed(2);
                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';

                                const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                                const percentageIcon = percentageChange > 0 ?
                                    'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                    'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                                // class bage for profit an dloss
                                const profitAndLossClass = profitAndLoss > 0 ? 'badge-success' : 'badge-danger';
                                const profitAndLossIcon = profitAndLoss > 0 ?
                                    'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                    'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';


                                document.getElementById(`stockChange3${rowId}`).innerHTML =
                                    `
                                            ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                            ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                            ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change3${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                    ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + profitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                    : '<span class="text-danger" id="perc' + rowId + '">- ₹' + Math.abs(profitAndLoss) + ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;
                            });


                        }
                    }
                }
            });

        function showOrderForm(index) {
            // console.log("hi");

            const offcanvasId = `orderoffcanvasBottom${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }
    </script>


    <!-- Event trigger for the modal -->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    {{-- <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script> --}}
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    {{-- <script src="vendor/apexchart/apexchart.js"></script> --}}

    <!-- Datatable -->
    {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="js/plugins-init/datatables.init.js"></script> --}}

    <!-- Dashboard 1 -->
    {{-- <script src="js/dashboard/portfolio.js"></script> --}}
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    {{-- <script src="js/demo.js"></script> --}}

    {{-- swal fire cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function closeOrder(instrumentKey, duration, tradeType, id) {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Close it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

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
                        url: "{{ route('closeOrder') }}",
                        type: "POST",
                        data: {
                            instrumentKey: instrumentKey,
                            duration: duration,
                            tradeType: tradeType,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            loadingToast.hideToast();
                            // response = JSON.parse(response);

                            if (response.status == 'success') {
                                Toastify({
                                    text: "✅ Order Closed ",
                                    duration: 1500,
                                    gravity: "top",
                                    offset: {
                                        y: "90px" // Moves it 60px down from the top
                                    },
                                    position: "center",
                                    backgroundColor: "#3ab67a",
                                    callback: function() {
                                        let offcanvas = document.getElementById(
                                            `orderoffcanvasBottom${id}`
                                        ); // Use ID to select offcanvas
                                        let bsOffcanvas = bootstrap.Offcanvas.getInstance(
                                            offcanvas);
                                        bsOffcanvas.hide(); // Close the offcanvas

                                        // Remove the backdrop after hiding the offcanvas
                                        setTimeout(() => {
                                            document.querySelectorAll(
                                                    '.offcanvas-backdrop')
                                                .forEach(backdrop => {
                                                    backdrop.remove();
                                                });
                                        }, 300);
                                    }
                                }).showToast();
                            }


                        }
                    });




                }
            });
            // close using ajax 

        }
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/portofolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:17 GMT -->

</html>
