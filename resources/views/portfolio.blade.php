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

        /* .wallet-wrapper {
            position: relative;
            background: linear-gradient(45deg, #6d80fe 0%, #23d2fd 100%);
            border-radius: 10px;
            padding: 1.2rem;
            overflow: hidden;
            color: white;
        }

        .wallet-wrapper:after {
            content: "";
            position: absolute;
            top: -2rem;
            right: -6rem;
            height: 16rem;
            width: 16rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
        } */

        .wallet-wrapper {
    position: relative;
    background: linear-gradient(45deg, #6d80fe 0%, #23d2fd 100%);
    border-radius: 10px;
    padding: 1.2rem;
    overflow: hidden;
    color: white;
    z-index: 0;
}

.wallet-wrapper::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.3); /* dark overlay */
    border-radius: 10px;
    z-index: 1;
    pointer-events: none;
}
.wallet-wrapper * {
    position: relative;
    z-index: 2;
}


        .shadow-lg {
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .fs-16 {
            font-size: 16px;
        }

        .fs-14 {
            font-size: 14px;
        }

        .fas {
            margin-right: 5px;
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
        <x-footer-menu />



        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            @php
                                $gain_loss = 0;
                                $total_investment = 0;
                                $total_current_value = 0;
                                $change_percentage = 0;

                                $trades = DB::table('trades')
                                    ->where('trades.user_id', $user->id)
                                    ->where('trades.status', 'executed')
                                    ->leftJoin('future_temp', 'future_temp.instrumentKey', '=', 'trades.instrumentKey') // Join future_temp
                                    ->selectRaw(
                                        '
                                    trades.instrumentKey as instrumentKey,
                                    SUM(trades.quantity) as quantity,
                                    AVG(trades.price) as avg_price,
                                    SUM(trades.cost) as total_cost,
                                    COALESCE(future_temp.ltp, 0) as ltp
                                ',
                                    )
                                    ->groupBy('trades.instrumentKey', 'future_temp.ltp') // Group by instrumentKey and ltp
                                    ->get();

                                foreach ($trades as $trade) {
                                    $total_investment += $trade->total_cost;
                                    $total_current_value += $trade->quantity * $trade->ltp;
                                }

                                $gain_loss = $total_current_value - $total_investment;
                                $change_percentage = $total_investment > 0 ? ($gain_loss / $total_investment) * 100 : 0;
                            @endphp
                            <div class="col-xl-12">
                                <div class="card trad-card wallet-wrapper shadow-lg">
                                    <div class="card-header border-0 pb-0 card-bx">
                                        <div class="me-auto">
                                            <h2 class="text-light mb-2 font-w600" id="profitAndLoss">
                                                ₹ {{ number_format($gain_loss, 2) }}
                                            </h2>
                                            <div class="d-flex align-items-center justify-content-between gap-2">
                                                <h6 class="text-light mb-1 fs-14">Overall Gain</h6>
                                                <span class="font-w600 mb-0 fs-14 {{ $change_percentage>=0?'text-success':'text-danger' }}" id="profitAndLossPercentage">
                                                    ({{ number_format($change_percentage, 2) }}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body w-100 col-xl-12 p-0">
                                        {{-- <div class="d-flex justify-content-between align-items-center gap-5 p-4">
                                            <div>
                                                <h5 class="text-dark mb-1">
                                                    Invested Price
                                                </h5>
                                                <p class="mb-0 fs-16 text-white" id="investValue">
                                                    ₹ {{ number_format($total_investment, 2) }}
                                                </p>
                                            </div>
                                            <div>
                                                <h5 class="text-dark mb-1">
                                                    Current Price
                                                </h5>
                                                <p class="mb-0 fs-16 text-white" id="currentValue">
                                                    ₹ {{ number_format($total_current_value, 2) }}
                                                </p>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="p-4 pt-0"> --}}
                                            <hr class="border-white opacity-25 mb-3">
                                            <div class="d-flex justify-content-between mb-4">
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="text-light fs-4 font-w600">₹ 30,000</span>
                                                    <span class="text-light fw-medium font-w300">Margin Used</span>
                                                    {{-- <span class="text-white">₹ {{ number_format($margin_used, 2) }}</span> --}}
                                                </div>
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="text-light fs-4 font-w600">₹ 20,000</span>
                                                    <span class="text-light fw-medium font-w300">Margin Available</span>
                                                    {{-- <span class="text-white">₹ {{ number_format($margin_available, 2) }}</span> --}}
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="text-light fs-4 font-w600">₹ 50000</span>
                                                    <span class="text-light fw-medium font-w300">Total Investment:</span>
                                                {{-- <span class="text-white">₹ {{ number_format($total_investment, 2) }}</span> --}}
                                                </div>
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="text-light fs-4 font-w600">₹ 55000</span>
                                                    <span class="text-light fw-medium font-w300"> Current Portfolio Value:</span>
                                                    {{-- <span class="text-white">₹ {{ number_format($total_current_value, 2) }}</span> --}}
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-12">
                                                <div style="margin: 0 14px"
                                                class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="btn-close">
                                                </button>
                                                <strong>⚠️ You are close to a margin call! Add funds or reduce your margin usage.</strong> 
                                            </div> --}}
                                            {{-- <a href="{{ route('deposit') }}" class="badge badge-dark">Add Funds</a> --}}
                                            {{-- ⚠️ Warning if Margin Used > 80% --}}
                                            {{-- @if(($margin_used / ($margin_used + $margin_available)) > 0.8) --}}
                                            {{-- <div class="alert alert-warning bg-warning text-dark rounded py-2 px-3">
                                                ⚠️ You are close to a margin call! Add funds or reduce your margin usage.
                                            </div> --}}
                                            {{-- @endif --}}
                                        {{-- </div> --}}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
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
                            @php
                                $count = DB::table('trades')
                                    ->where('user_id', $user->id)
                                    ->where('status', 'processing')
                                    ->count();
                            @endphp

                            <div style="margin: 0 14px"
                                class="alert alert-warning alert-dismissible alert-alt solid fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="btn-close">
                                </button>
                                <strong>! Warning</strong> You have <span
                                    class="badge badge-pill badge-danger">{{ $count }}</span> pending orders. <a
                                    href="{{ route('order') }}" class="badge badge-dark">View</a>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="nav-tabContent1">
                                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                        aria-labelledby="nav-all-tab">
                                        <div class="d-flex align-items-center justify-content-between"
                                            style="margin-bottom:20px">
                                            <h4 class="card-title">Stocks : All</h4>
                                        </div>
                                        <div class="col-xl-12">

                                            @php
                                                $trades = DB::table('trades')
                                                    ->where('trades.user_id', $user->id)
                                                    ->where('trades.status', 'executed')
                                                    ->leftJoin(
                                                        'future_temp',
                                                        'future_temp.instrumentKey',
                                                        '=',
                                                        'trades.instrumentKey',
                                                    ) // Join future_temp table
                                                    ->selectRaw(
                                                        '
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
                                                            MIN(trades.price) as price,
                                                            MIN(trades.order_type) as order_type

                                                        ',
                                                    )
                                                    ->groupBy('trades.instrumentKey', 'trades.duration')
                                                    ->get();
                                            @endphp

                                            @if ($trades->isEmpty())
                                                <div class="error-page d-flex align-items-center justify-content-center"
                                                    style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png"
                                                            alt="No Active Trades" class="img-fluid mb-3"
                                                            width="100">
                                                        <h4 class="mb-2">No Active Trades</h4>
                                                        <p class="mb-2">You currently have no ongoing trades.</p>
                                                        <a href="/quotes" class="btn btn-info mb-2">Start Trading</a>
                                                        <p class="text-muted mb-0">Place trades to start your
                                                            investment journey.</p>
                                                    </div>
                                                </div>
                                            @else
                                                <!-- Row -->
                                                <div class="row">
                                                    <?php
                                                        $i = 1;
                                               

                                                        foreach ($trades as $stock){
                                                            $foisin = $stock->instrumentKey;
                                                        ?>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="orderoffcanvasBottom1{{ $i }}"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height: fit-content">
                                                        <div class="offcanvas-header">
                                                            <div class="d-flex flex-column">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasBottomLabel{{ $i }}">
                                                                    {{ $stock->stock_name }}
                                                                </h5>
                                                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                    id="tradeStockChange1{{ $i }}">
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


                                                            {{-- <button type="button" class="btn-close text-reset"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button> --}}

                                                            <button type="button" class=" text-reset"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"
                                                                style="border: none">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                    width="24" alt="">
                                                            </button>
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
                                                                                        style="width: 100%;"
                                                                                        id="nav-order-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-order"
                                                                                        type="button" role="tab"
                                                                                        aria-selected="true">Close
                                                                                        Order</button>
                                                                                </div>
                                                                            </nav>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="card-body pt-2">
                                                                            <div
                                                                                class="table-responsive dataTabletrade">
                                                                                <input type="text" name="id"
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
                                                                                        <div class="card-body pt-2">
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

                                                                                            <div id="changeStatus1{{ $i }}"
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost, 2) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                    Margin Utilized:
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost - $stock->total_cost, 2) }}
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->total_cost, 2) }}
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
                                                                                                    {{ number_format($stock->quantity, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Price Details -->
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                    Entry Price:
                                                                                                    {{ number_format($stock->price, 2) }}
                                                                                                </p>
                                                                                                <p class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                        align-items-center px-3 py-2 bg-light"
                                                                                                    id="marketPrice1{{ $i }}">
                                                                                                    Market Price:
                                                                                                    {{ number_format($stock->ltp, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Profit/Loss -->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <div
                                                                                                    class="d-flex align-items-center">
                                                                                                    <h4
                                                                                                        class="mb-0 me-2 fw-bold">
                                                                                                        You
                                                                                                        Got:
                                                                                                    </h4>

                                                                                                    <span
                                                                                                        class="text-dark fs-4 fw-bolder"
                                                                                                        id="gotPrice1{{ $i }}">₹
                                                                                                        {{ number_format($stock->cost + $change, 2) }}</span>
                                                                                                    {{-- @if ($change > 0)
                                                                                                    <span class="text-dark fs-4">₹ {{ number_format(($change+$stock->cost), 2) }}</span>
                                                                                                    @elseif($change <= 0)
                                                                                                    <span class="text-dark fs-4">₹ {{ number_format(($stock->cost+$change), 2) }}</span>
                                                                                                    @else
                                                                                                    <span class="text-warning fs-4">No Change</span>
                                                                                                    @endif --}}
                                                                                                </div>
                                                                                            </div>







                                                                                            <!-- Buy/Sell Buttons -->
                                                                                            <div
                                                                                                class="mt-3 d-flex justify-content-between">
                                                                                                <button
                                                                                                    onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},1)"
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
                                                        {{ $stock->cost }}</p>
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
                                                        onclick="showOrderForm(1,{{ $i }})">
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
                                                                    @if ($stock->order_type == 'market')
                                                                        <span class="badge badge-primary ml-1 light">
                                                                            Market</span>
                                                                    @elseif($stock->order_type == 'limit')
                                                                        <span class="badge badge-warning ml-1 light">
                                                                            Limit</span>
                                                                    @elseif($stock->order_type == 'stoplossMarket')
                                                                        <span class="badge badge-danger ml-1 light">
                                                                            SL Market</span>
                                                                    @elseif($stock->order_type == 'stoplossLimit')
                                                                        <span class="badge badge-info ml-1 light">
                                                                            SL Limit</span>
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
                                            @endif
                                        </div>
                                        {{-- </div>
                                        </div> --}}
                                    </div>
                                    <div class="tab-pane fade show" id="nav-fut" role="tabpanel"
                                        aria-labelledby="nav-fut-tab">

                                        <div class="d-flex align-items-center justify-content-between"
                                            style="margin-bottom: 20px">
                                            <h4 class="card-title">Stocks : Future</h4>
                                        </div>
                                        <div class="col-xl-12">
                                            @php
                                                $trades = DB::table('trades')
                                                    ->where('trades.user_id', $user->id)
                                                    ->where('trades.tradeType', 'FUT')
                                                    ->where('trades.status', 'executed')
                                                    ->leftJoin(
                                                        'future_temp',
                                                        'future_temp.instrumentKey',
                                                        '=',
                                                        'trades.instrumentKey',
                                                    ) // Join future_temp table
                                                    ->selectRaw(
                                                        '
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
                                                                ',
                                                    )
                                                    ->groupBy('trades.instrumentKey', 'trades.duration')
                                                    ->get();
                                            @endphp

                                            @if ($trades->isEmpty())
                                                <div class="error-page d-flex align-items-center justify-content-center"
                                                    style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png"
                                                            alt="No Future Trades" class="img-fluid mb-3"
                                                            width="100">
                                                        <h4 class="mb-2">No Future Trades</h4>
                                                        <p class="mb-2">You currently have no active futures
                                                            positions.</p>
                                                        <a href="/quotes" class="btn btn-info mb-2">Explore
                                                            Futures</a>
                                                        <p class="text-muted mb-0">Check future contracts to place
                                                            trades.</p>
                                                    </div>
                                                </div>
                                            @else
                                                <!-- Row -->
                                                <div class="row">

                                                    <?php
                                                                // print_r($trades);
                                                                $i = 1;
                                                                foreach ($trades as $stock){
                                                                    $foisin = $stock->instrumentKey;
                                                                ?>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="orderoffcanvasBottom2{{ $i }}"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height: fit-content">
                                                        <div class="offcanvas-header">
                                                            <div class="d-flex flex-column">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasBottomLabel{{ $i }}">
                                                                    {{ $stock->stock_name }}
                                                                </h5>
                                                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                    id="tradeStockChange2{{ $i }}">
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


                                                            {{-- <button type="button" class="btn-close text-reset"
                                                                        data-bs-dismiss="offcanvas"
                                                                        aria-label="Close"></button> --}}

                                                            <button type="button" class=" text-reset"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"
                                                                style="border: none">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                    width="24" alt="">
                                                            </button>
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
                                                                                        style="width: 100%;"
                                                                                        id="nav-order-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-order"
                                                                                        type="button" role="tab"
                                                                                        aria-selected="true">Close
                                                                                        Order</button>
                                                                                </div>
                                                                            </nav>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="card-body pt-2">
                                                                            <div
                                                                                class="table-responsive dataTabletrade">
                                                                                <input type="text" name="id"
                                                                                    value="{{ $i }}"
                                                                                    id="id" hidden>
                                                                                <input type="text"
                                                                                    name="instrumentKey2{{ $i }}"
                                                                                    value="{{ $foisin }}"
                                                                                    id="instrumentKey2{{ $i }}"
                                                                                    hidden>
                                                                                <div class="col-xl-4"
                                                                                    style="width: 100%;">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-2">
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

                                                                                            <div id="changeStatus2{{ $i }}"
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost, 2) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Margin Utilized:
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost - $stock->total_cost, 2) }}
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->total_cost, 2) }}
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
                                                                                                    {{ number_format($stock->quantity, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Price Details -->
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Entry Price:
                                                                                                    {{ number_format($stock->price, 2) }}
                                                                                                </p>
                                                                                                <p class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light"
                                                                                                    id="marketPrice1{{ $i }}">
                                                                                                    Market Price:
                                                                                                    {{ number_format($stock->ltp, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Profit/Loss -->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <div
                                                                                                    class="d-flex align-items-center">
                                                                                                    <h4
                                                                                                        class="mb-0 me-2 fw-bold">
                                                                                                        You
                                                                                                        Got:
                                                                                                    </h4>

                                                                                                    <span
                                                                                                        class="text-dark fs-4 fw-bolder"
                                                                                                        id="gotPrice2{{ $i }}">₹
                                                                                                        {{ number_format($stock->cost + $change, 2) }}</span>
                                                                                                    {{-- @if ($change > 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($change+$stock->cost), 2) }}</span>
                                                                                                        @elseif($change <= 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($stock->cost+$change), 2) }}</span>
                                                                                                        @else
                                                                                                        <span class="text-warning fs-4">No Change</span>
                                                                                                        @endif --}}
                                                                                                </div>
                                                                                            </div>







                                                                                            <!-- Buy/Sell Buttons -->
                                                                                            <div
                                                                                                class="mt-3 d-flex justify-content-between">
                                                                                                <button
                                                                                                    onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},2)"
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
                                                    <p style="display: none" id="isin2{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest2{{ $i }}">
                                                        {{ $stock->cost }}</p>
                                                    <p style="display: none" id="lotSize2{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity2{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType2{{ $i }}">
                                                        {{ $stock->tradeType }}</p>
                                                    <p style="display: none" id="action2{{ $i }}">
                                                        {{ $stock->action }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        onclick="showOrderForm(2,{{ $i }})">
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
                                                                    <span
                                                                        class="badge badge-primary light">{{ $stock->tradeType }}</span>
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
                                                                        <p id="price2{{ $i }}"
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
                                                    <?php 
                                                                    $i++; 
                                                                }
                                                                    
                                                                    ?>
                                                </div>
                                            @endif
                                        </div>
                                        <!-- /Row -->


                                    </div>
                                    <div class="tab-pane fade show" id="nav-opt" role="tabpanel"
                                        aria-labelledby="nav-opt-tab">
                                        <div class="d-flex align-items-center justify-content-between"
                                            style="margin-bottom: 20px">
                                            <h4 class="card-title">Stocks : Option</h4>
                                        </div>
                                        <div class="col-xl-12">
                                            @php
                                                $trades = DB::table('trades')
                                                    ->where('trades.user_id', $user->id)
                                                    ->where('trades.tradeType', 'CE')
                                                    ->orWhere('trades.tradeType', 'PE')
                                                    ->where('trades.status', 'executed')
                                                    ->leftJoin(
                                                        'future_temp',
                                                        'future_temp.instrumentKey',
                                                        '=',
                                                        'trades.instrumentKey',
                                                    ) // Join future_temp table
                                                    ->selectRaw(
                                                        '
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
                                                                ',
                                                    )
                                                    ->groupBy('trades.instrumentKey', 'trades.duration')
                                                    ->get();
                                            @endphp

                                            @if ($trades->isEmpty())
                                                <div class="error-page d-flex align-items-center justify-content-center"
                                                    style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png"
                                                            alt="No Option Trades" class="img-fluid mb-3"
                                                            width="100">
                                                        <h4 class="mb-2">No Option Trades</h4>
                                                        <p class="mb-2">You currently have no active options
                                                            trades.</p>
                                                        <a href="/quotes?segment=option"
                                                            class="btn btn-info mb-2">Explore
                                                            Options</a>
                                                        <p class="text-muted mb-0">Find options contracts to get
                                                            started.
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                                <!-- Row -->
                                                <div class="row">

                                                    <?php
                                                                // print_r($trades);
                                                                $i = 1;
                                                                foreach ($trades as $stock){
                                                                    $foisin = $stock->instrumentKey;
                                                                ?>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="orderoffcanvasBottom3{{ $i }}"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height: fit-content">
                                                        <div class="offcanvas-header">
                                                            <div class="d-flex flex-column">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasBottomLabel{{ $i }}">
                                                                    {{ $stock->stock_name }}
                                                                </h5>
                                                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                    id="tradeStockChange3{{ $i }}">
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


                                                            {{-- <button type="button" class="btn-close text-reset"
                                                                        data-bs-dismiss="offcanvas"
                                                                        aria-label="Close"></button> --}}

                                                            <button type="button" class=" text-reset"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"
                                                                style="border: none">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                    width="24" alt="">
                                                            </button>
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
                                                                                        style="width: 100%;"
                                                                                        id="nav-order-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-order"
                                                                                        type="button" role="tab"
                                                                                        aria-selected="true">Close
                                                                                        Order</button>
                                                                                </div>
                                                                            </nav>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="card-body pt-2">
                                                                            <div
                                                                                class="table-responsive dataTabletrade">
                                                                                <input type="text" name="id"
                                                                                    value="{{ $i }}"
                                                                                    id="id" hidden>
                                                                                <input type="text"
                                                                                    name="instrumentKey3{{ $i }}"
                                                                                    value="{{ $foisin }}"
                                                                                    id="instrumentKey3{{ $i }}"
                                                                                    hidden>
                                                                                <div class="col-xl-4"
                                                                                    style="width: 100%;">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-2">
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

                                                                                            <div id="changeStatus3{{ $i }}"
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost, 2) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Margin Utilized:
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost - $stock->total_cost, 2) }}
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->total_cost, 2) }}
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
                                                                                                    {{ number_format($stock->quantity, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Price Details -->
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Entry Price:
                                                                                                    {{ number_format($stock->price, 2) }}
                                                                                                </p>
                                                                                                <p class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light"
                                                                                                    id="marketPrice1{{ $i }}">
                                                                                                    Market Price:
                                                                                                    {{ number_format($stock->ltp, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Profit/Loss -->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <div
                                                                                                    class="d-flex align-items-center">
                                                                                                    <h4
                                                                                                        class="mb-0 me-2 fw-bold">
                                                                                                        You
                                                                                                        Got:
                                                                                                    </h4>

                                                                                                    <span
                                                                                                        class="text-dark fs-4 fw-bolder"
                                                                                                        id="gotPrice3{{ $i }}">₹
                                                                                                        {{ number_format($stock->cost + $change, 2) }}</span>
                                                                                                    {{-- @if ($change > 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($change+$stock->cost), 2) }}</span>
                                                                                                        @elseif($change <= 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($stock->cost+$change), 2) }}</span>
                                                                                                        @else
                                                                                                        <span class="text-warning fs-4">No Change</span>
                                                                                                        @endif --}}
                                                                                                </div>
                                                                                            </div>







                                                                                            <!-- Buy/Sell Buttons -->
                                                                                            <div
                                                                                                class="mt-3 d-flex justify-content-between">
                                                                                                <button
                                                                                                    onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},3)"
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
                                                    <p style="display: none" id="isin3{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest3{{ $i }}">
                                                        {{ $stock->cost }}</p>
                                                    <p style="display: none" id="lotSize3{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity3{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType3{{ $i }}">
                                                        {{ $stock->tradeType }}</p>
                                                    <p style="display: none" id="action3{{ $i }}">
                                                        {{ $stock->action }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        onclick="showOrderForm(3,{{ $i }})">
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
                                                                    <span
                                                                        class="badge badge-primary light">{{ $stock->tradeType }}</span>
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
                                                                        <p id="price3{{ $i }}"
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
                                                                            id="change3{{ $i }}">
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
                                                    <?php 
                                                                    $i++; 
                                                                }
                                                                    
                                                                    ?>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-mcx" role="tabpanel"
                                        aria-labelledby="nav-mcx-tab">
                                        <div class="d-flex align-items-center justify-content-between"
                                            style="margin-bottom: 20px">
                                            <h4 class="card-title">Stocks : MCX</h4>
                                        </div>
                                        <div class="col-xl-12">
                                            @php
                                                $trades = DB::table('trades')
                                                    ->where('trades.user_id', $user->id)
                                                    ->where('trades.segment', 'MCX_FO')
                                                    // ->orWhere('trades.tradeType', 'PE')
                                                    ->where('trades.status', 'executed')
                                                    ->leftJoin(
                                                        'future_temp',
                                                        'future_temp.instrumentKey',
                                                        '=',
                                                        'trades.instrumentKey',
                                                    ) // Join future_temp table
                                                    ->selectRaw(
                                                        '
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
                                                                ',
                                                    )
                                                    ->groupBy('trades.instrumentKey', 'trades.duration')
                                                    ->get();
                                            @endphp

                                            @if ($trades->isEmpty())
                                                <div class="error-page d-flex align-items-center justify-content-center"
                                                    style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png"
                                                            alt="No MCX Trades" class="img-fluid mb-3"
                                                            width="100">
                                                        <h4 class="mb-2">No MCX Trades</h4>
                                                        <p class="mb-2">You currently have no MCX trades running.</p>
                                                        <a href="/quotes" class="btn btn-info mb-2">Trade
                                                            Commodities</a>
                                                        <p class="text-muted mb-0">MCX is waiting — explore gold,
                                                            silver, and more.</p>
                                                    </div>
                                                </div>
                                            @else
                                                <!-- Row -->
                                                <div class="row">

                                                    <?php
                                                                // print_r($trades);
                                                                $i = 1;
                                                                foreach ($trades as $stock){
                                                                    $foisin = $stock->instrumentKey;
                                                                ?>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="orderoffcanvasBottom4{{ $i }}"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height: fit-content">
                                                        <div class="offcanvas-header">
                                                            <div class="d-flex flex-column">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasBottomLabel{{ $i }}">
                                                                    {{ $stock->stock_name }}
                                                                </h5>
                                                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                    id="tradeStockChange4{{ $i }}">
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


                                                            {{-- <button type="button" class="btn-close text-reset"
                                                                        data-bs-dismiss="offcanvas"
                                                                        aria-label="Close"></button> --}}

                                                            <button type="button" class=" text-reset"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"
                                                                style="border: none">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                    width="24" alt="">
                                                            </button>
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
                                                                                        style="width: 100%;"
                                                                                        id="nav-order-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-order"
                                                                                        type="button" role="tab"
                                                                                        aria-selected="true">Close
                                                                                        Order</button>
                                                                                </div>
                                                                            </nav>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="card-body pt-2">
                                                                            <div
                                                                                class="table-responsive dataTabletrade">
                                                                                <input type="text" name="id"
                                                                                    value="{{ $i }}"
                                                                                    id="id" hidden>
                                                                                <input type="text"
                                                                                    name="instrumentKey4{{ $i }}"
                                                                                    value="{{ $foisin }}"
                                                                                    id="instrumentKey4{{ $i }}"
                                                                                    hidden>
                                                                                <div class="col-xl-4"
                                                                                    style="width: 100%;">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-2">
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

                                                                                            <div id="changeStatus4{{ $i }}"
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost, 2) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Margin Utilized:
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost - $stock->total_cost, 2) }}
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->total_cost, 2) }}
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
                                                                                                    {{ number_format($stock->quantity, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Price Details -->
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Entry Price:
                                                                                                    {{ number_format($stock->price, 2) }}
                                                                                                </p>
                                                                                                <p class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light"
                                                                                                    id="marketPrice1{{ $i }}">
                                                                                                    Market Price:
                                                                                                    {{ number_format($stock->ltp, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Profit/Loss -->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <div
                                                                                                    class="d-flex align-items-center">
                                                                                                    <h4
                                                                                                        class="mb-0 me-2 fw-bold">
                                                                                                        You
                                                                                                        Got:
                                                                                                    </h4>

                                                                                                    <span
                                                                                                        class="text-dark fs-4 fw-bolder"
                                                                                                        id="gotPrice4{{ $i }}">₹
                                                                                                        {{ number_format($stock->cost + $change, 2) }}</span>
                                                                                                    {{-- @if ($change > 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($change+$stock->cost), 2) }}</span>
                                                                                                        @elseif($change <= 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($stock->cost+$change), 2) }}</span>
                                                                                                        @else
                                                                                                        <span class="text-warning fs-4">No Change</span>
                                                                                                        @endif --}}
                                                                                                </div>
                                                                                            </div>







                                                                                            <!-- Buy/Sell Buttons -->
                                                                                            <div
                                                                                                class="mt-3 d-flex justify-content-between">
                                                                                                <button
                                                                                                    onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},4)"
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
                                                    <p style="display: none" id="isin4{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest4{{ $i }}">
                                                        {{ $stock->cost }}</p>
                                                    <p style="display: none" id="lotSize4{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity4{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType4{{ $i }}">
                                                        {{ $stock->tradeType }}</p>
                                                    <p style="display: none" id="action4{{ $i }}">
                                                        {{ $stock->action }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        onclick="showOrderForm(4,{{ $i }})">
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
                                                                    <span
                                                                        class="badge badge-primary light">{{ $stock->tradeType }}</span>
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
                                                                                id="stockChange4{{ $i }}">
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
                                                                        <p id="price4{{ $i }}"
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
                                                                            id="change4{{ $i }}">
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
                                                    <?php 
                                                                    $i++; 
                                                                }
                                                                    
                                                                    ?>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-indices" role="tabpanel"
                                        aria-labelledby="nav-indices-tab">
                                        <div class="d-flex align-items-center justify-content-between"
                                            style="margin-bottom: 20px">
                                            <h4 class="card-title">Stocks : Indcies</h4>
                                        </div>
                                        <div class="col-xl-12">
                                            @php
                                                $trades = DB::table('trades')
                                                    ->where('trades.user_id', $user->id)
                                                    ->where('trades.tradeType', 'FUT')
                                                    ->where('trades.status', 'executed')
                                                    ->leftJoin(
                                                        'future_temp',
                                                        'future_temp.instrumentKey',
                                                        '=',
                                                        'trades.instrumentKey',
                                                    ) // Join future_temp table
                                                    ->selectRaw(
                                                        '
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
                                                                ',
                                                    )
                                                    ->groupBy('trades.instrumentKey', 'trades.duration')
                                                    ->get();
                                            @endphp

                                            @if ($trades->isEmpty())
                                                <div class="error-page d-flex align-items-center justify-content-center"
                                                    style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png"
                                                            alt="No Indices Trades" class="img-fluid mb-3"
                                                            width="100">
                                                        <h4 class="mb-2">No Indices Trades</h4>
                                                        <p class="mb-2">No active trades on indices right now.</p>
                                                        <a href="/quotes?segment=indices"
                                                            class="btn btn-info mb-2">Trade Indices</a>
                                                        <p class="text-muted mb-0">Try Nifty, Bank Nifty, or other
                                                            index-based trades.</p>
                                                    </div>
                                                </div>
                                            @else
                                                <!-- Row -->
                                                <div class="row">

                                                    <?php
                                                                // print_r($trades);
                                                                $i = 1;
                                                                foreach ($trades as $stock){
                                                                    $foisin = $stock->instrumentKey;
                                                                ?>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="orderoffcanvasBottom5{{ $i }}"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height: fit-content">
                                                        <div class="offcanvas-header">
                                                            <div class="d-flex flex-column">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasBottomLabel{{ $i }}">
                                                                    {{ $stock->stock_name }}
                                                                </h5>
                                                                <p class="mb-0 fs-5 font-w500 d-flex align-items-center"
                                                                    id="tradeStockChange5{{ $i }}">
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


                                                            {{-- <button type="button" class="btn-close text-reset"
                                                                        data-bs-dismiss="offcanvas"
                                                                        aria-label="Close"></button> --}}

                                                            <button type="button" class=" text-reset"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"
                                                                style="border: none">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                                                    width="24" alt="">
                                                            </button>
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
                                                                                        style="width: 100%;"
                                                                                        id="nav-order-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-order"
                                                                                        type="button" role="tab"
                                                                                        aria-selected="true">Close
                                                                                        Order</button>
                                                                                </div>
                                                                            </nav>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="card-body pt-2">
                                                                            <div
                                                                                class="table-responsive dataTabletrade">
                                                                                <input type="text" name="id"
                                                                                    value="{{ $i }}"
                                                                                    id="id" hidden>
                                                                                <input type="text"
                                                                                    name="instrumentKey5{{ $i }}"
                                                                                    value="{{ $foisin }}"
                                                                                    id="instrumentKey5{{ $i }}"
                                                                                    hidden>
                                                                                <div class="col-xl-4"
                                                                                    style="width: 100%;">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-2">
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

                                                                                            <div id="changeStatus5{{ $i }}"
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost, 2) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-100 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Margin Utilized:
                                                                                                    ₹
                                                                                                    {{ number_format($stock->cost - $stock->total_cost, 2) }}
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
                                                                                                    ₹
                                                                                                    {{ number_format($stock->total_cost, 2) }}
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
                                                                                                    {{ number_format($stock->quantity, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Price Details -->
                                                                                            <div
                                                                                                class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                <p
                                                                                                    class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light">
                                                                                                    Entry Price:
                                                                                                    {{ number_format($stock->price, 2) }}
                                                                                                </p>
                                                                                                <p class="mb-0 w-50 fs-14 text-dark font-w600 d-flex 
                                                                                                            align-items-center px-3 py-2 bg-light"
                                                                                                    id="marketPrice1{{ $i }}">
                                                                                                    Market Price:
                                                                                                    {{ number_format($stock->ltp, 2) }}
                                                                                                </p>
                                                                                            </div>


                                                                                            <!-- Profit/Loss -->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <div
                                                                                                    class="d-flex align-items-center">
                                                                                                    <h4
                                                                                                        class="mb-0 me-2 fw-bold">
                                                                                                        You
                                                                                                        Got:
                                                                                                    </h4>

                                                                                                    <span
                                                                                                        class="text-dark fs-4 fw-bolder"
                                                                                                        id="gotPrice5{{ $i }}">₹
                                                                                                        {{ number_format($stock->cost + $change, 2) }}</span>
                                                                                                    {{-- @if ($change > 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($change+$stock->cost), 2) }}</span>
                                                                                                        @elseif($change <= 0)
                                                                                                        <span class="text-dark fs-4">₹ {{ number_format(($stock->cost+$change), 2) }}</span>
                                                                                                        @else
                                                                                                        <span class="text-warning fs-4">No Change</span>
                                                                                                        @endif --}}
                                                                                                </div>
                                                                                            </div>







                                                                                            <!-- Buy/Sell Buttons -->
                                                                                            <div
                                                                                                class="mt-3 d-flex justify-content-between">
                                                                                                <button
                                                                                                    onclick="closeOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},5)"
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
                                                    <p style="display: none" id="isin5{{ $i }}">
                                                        {{ $foisin }}</p>
                                                    <p style="display: none" id="invest5{{ $i }}">
                                                        {{ $stock->cost }}</p>
                                                    <p style="display: none" id="lotSize5{{ $i }}">
                                                        {{ $stock->lotSize }}</p>
                                                    <p style="display: none" id="quantity5{{ $i }}">
                                                        {{ $stock->quantity }}</p>
                                                    <p style="display: none" id="tradeType5{{ $i }}">
                                                        {{ $stock->tradeType }}</p>
                                                    <p style="display: none" id="action5{{ $i }}">
                                                        {{ $stock->action }}</p>

                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"
                                                        data-bs-toggle="modal"
                                                        onclick="showOrderForm(5,{{ $i }})">
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
                                                                    <span
                                                                        class="badge badge-primary light">{{ $stock->tradeType }}</span>
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
                                                                                id="stockChange5{{ $i }}">
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
                                                                        <p id="price5{{ $i }}"
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
                                                                            id="change5{{ $i }}">
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
                                                    <?php 
                                                                    $i++; 
                                                                }
                                                                    
                                                                    ?>
                                                </div>
                                            @endif
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
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a>
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
        function updateCard(investValue, currentValue) {
            console.log(investValue, currentValue);

            let profitLoss = currentValue - investValue;
            let profitLossPercentage = ((profitLoss / investValue) * 100).toFixed(2);

            document.getElementById('investValue').textContent = investValue.toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            document.getElementById('currentValue').textContent = currentValue.toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            document.getElementById('profitAndLoss').textContent = profitLoss.toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            document.getElementById('profitAndLossPercentage').textContent = profitLossPercentage + '%';
        }

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

                        const mcxElement = Array.from(document.querySelectorAll("p[id^='isin4']")).filter(el =>
                            el.textContent.trim() === receivedIsin.trim()
                        );

                        const indicesElement = Array.from(document.querySelectorAll("p[id^='isin5']")).filter(el =>
                            el.textContent.trim() === receivedIsin.trim()
                        );


                        // console.log("optionElement", optionElement);

                        if (allElement) {
                            let total_investValue = 0;
                            let total_currentValue = 0;



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

                                total_investValue += isNaN(invest) ? 0 : parseFloat(invest);
                                total_currentValue += isNaN(price * quantity) ? 0 : parseFloat(price) *
                                    parseFloat(quantity);

                                console.log(total_investValue, total_currentValue);






                                // console.log("price", price, "invest", invest+100, "quanrity", quantity, "tradeType", tradeType, "action", action);



                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(
                                    quantity))); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                const formattedPandloss = Number(pandloss).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                const positiveProfitAndLoss = Math.abs(profitAndLoss);
                                const formatprofitAndLoss = Number(positiveProfitAndLoss).toLocaleString(
                                    'en-IN', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                const gotPrice = parseFloat(invest) + parseFloat(profitAndLoss);
                                const formattedGotPrice = Number(gotPrice).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                document.getElementById(`price1${rowId}`).textContent =
                                    `Current : ₹${formattedPandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';



                                document.getElementById(`marketPrice1${rowId}`).textContent =
                                    `Market Price : ₹ ${price || '0'}`;
                                document.getElementById(`gotPrice1${rowId}`).textContent =
                                    `₹ ${formattedGotPrice || '0'}`;
                                document.getElementById(`stockChange1${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                                document.getElementById(`tradeStockChange1${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change1${rowId}`).innerHTML =
                                    `
                               ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + formatprofitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + formatprofitAndLoss+ ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                                // Determine status (Net Gain, Net Loss, or No Change)
                                let statusClass = "";
                                let textClass = "";
                                let icon = "";
                                let statusText = "";

                                if (profitAndLoss > 0) {
                                    statusClass = "badge-success";
                                    textClass = "text-success";
                                    icon = "▲";
                                    statusText = "Net Gain";
                                } else if (profitAndLoss < 0) {
                                    statusClass = "badge-danger";
                                    textClass = "text-danger";
                                    icon = "▼";
                                    statusText = "Net Loss";
                                } else {
                                    statusClass = "badge-warning";
                                    textClass = "text-warning";
                                    icon = "-";
                                    statusText = "No Change";
                                }

                                // Update UI dynamically
                                document.getElementById(`changeStatus1${rowId}`).innerHTML = `
                                    <div class="d-flex align-items-center mt-3 mb-2">
                                        <span class="badge ${statusClass} me-2">${icon}</span>
                                        <div class="d-flex flex-column">
                                            <h4 class="card-title mb-0" style="font-size:1rem; font-weight:900">${statusText}</h4>
                                            <div class="d-flex">
                                                <span class="${textClass}">
                                                ₹ ${formatprofitAndLoss} (${Math.abs(profitAndLossPercentage)}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                `;


                            });


                            updateCard(total_investValue, total_currentValue);



                        } else if (futureElement) {
                            futureElement.forEach(el => {
                                const rowId = el.id.replace('isin2', '');

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price

                                const invest = parseFloat(document.getElementById(`invest2${rowId}`)
                                    .textContent) || 0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity2${rowId}`)
                                    .textContent) || 0; // Quantity
                                const tradeType = document.getElementById(`tradeType2${rowId}`).innerText
                                    .trim(); // Trade type
                                const action = document.getElementById(`action2${rowId}`).innerText
                                    .trim(); // Trade type


                                console.log("price", price, "invest", invest, "quanrity", quantity, "tradeType",
                                    tradeType, "action", action);



                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(
                                    quantity))); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                const formattedPandloss = Number(pandloss).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                const positiveProfitAndLoss = Math.abs(profitAndLoss);
                                const formatprofitAndLoss = Number(positiveProfitAndLoss).toLocaleString(
                                    'en-IN', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                const gotPrice = parseFloat(invest) + parseFloat(profitAndLoss);
                                const formattedGotPrice = Number(gotPrice).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                document.getElementById(`price2${rowId}`).textContent =
                                    `Current : ₹${formattedPandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';



                                document.getElementById(`marketPrice2${rowId}`).textContent =
                                    `Market Price : ₹ ${price || '0'}`;
                                document.getElementById(`gotPrice2${rowId}`).textContent =
                                    `₹ ${formattedGotPrice || '0'}`;
                                document.getElementById(`stockChange2${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                                document.getElementById(`tradeStockChange2${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change2${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + formatprofitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + formatprofitAndLoss+ ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                                // Determine status (Net Gain, Net Loss, or No Change)
                                let statusClass = "";
                                let textClass = "";
                                let icon = "";
                                let statusText = "";

                                if (profitAndLoss > 0) {
                                    statusClass = "badge-success";
                                    textClass = "text-success";
                                    icon = "▲";
                                    statusText = "Net Gain";
                                } else if (profitAndLoss < 0) {
                                    statusClass = "badge-danger";
                                    textClass = "text-danger";
                                    icon = "▼";
                                    statusText = "Net Loss";
                                } else {
                                    statusClass = "badge-warning";
                                    textClass = "text-warning";
                                    icon = "-";
                                    statusText = "No Change";
                                }

                                // Update UI dynamically
                                document.getElementById(`changeStatus2${rowId}`).innerHTML = `
                                    <div class="d-flex align-items-center mt-3 mb-2">
                                        <span class="badge ${statusClass} me-2">${icon}</span>
                                        <div class="d-flex flex-column">
                                            <h4 class="card-title mb-0" style="font-size:1rem; font-weight:900">${statusText}</h4>
                                            <div class="d-flex">
                                                <span class="${textClass}">
                                                ₹ ${formatprofitAndLoss} (${Math.abs(profitAndLossPercentage)}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                `;


                            });
                        } else if (optionElement) {
                            optionElement.forEach(el => {
                                const rowId = el.id.replace('isin3', '');

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price

                                const invest = parseFloat(document.getElementById(`invest3${rowId}`)
                                    .textContent) || 0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity3${rowId}`)
                                    .textContent) || 0; // Quantity
                                const tradeType = document.getElementById(`tradeType3${rowId}`).innerText
                                    .trim(); // Trade type
                                const action = document.getElementById(`action3${rowId}`).innerText
                                    .trim(); // Trade type


                                // console.log("price", price, "invest", invest, "quanrity", quantity, "tradeType",
                                //     tradeType, "action", action);



                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(
                                    quantity))); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                const formattedPandloss = Number(pandloss).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                const positiveProfitAndLoss = Math.abs(profitAndLoss);
                                const formatprofitAndLoss = Number(positiveProfitAndLoss).toLocaleString(
                                    'en-IN', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                const gotPrice = parseFloat(invest) + parseFloat(profitAndLoss);
                                const formattedGotPrice = Number(gotPrice).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                document.getElementById(`price2${rowId}`).textContent =
                                    `Current : ₹${formattedPandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';



                                document.getElementById(`marketPrice3${rowId}`).textContent =
                                    `Market Price : ₹ ${price || '0'}`;
                                document.getElementById(`gotPrice3${rowId}`).textContent =
                                    `₹ ${formattedGotPrice || '0'}`;
                                document.getElementById(`stockChange3${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                                document.getElementById(`tradeStockChange3${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change3${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + formatprofitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + formatprofitAndLoss+ ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                                // Determine status (Net Gain, Net Loss, or No Change)
                                let statusClass = "";
                                let textClass = "";
                                let icon = "";
                                let statusText = "";

                                if (profitAndLoss > 0) {
                                    statusClass = "badge-success";
                                    textClass = "text-success";
                                    icon = "▲";
                                    statusText = "Net Gain";
                                } else if (profitAndLoss < 0) {
                                    statusClass = "badge-danger";
                                    textClass = "text-danger";
                                    icon = "▼";
                                    statusText = "Net Loss";
                                } else {
                                    statusClass = "badge-warning";
                                    textClass = "text-warning";
                                    icon = "-";
                                    statusText = "No Change";
                                }

                                // Update UI dynamically
                                document.getElementById(`changeStatus3${rowId}`).innerHTML = `
                                    <div class="d-flex align-items-center mt-3 mb-2">
                                        <span class="badge ${statusClass} me-2">${icon}</span>
                                        <div class="d-flex flex-column">
                                            <h4 class="card-title mb-0" style="font-size:1rem; font-weight:900">${statusText}</h4>
                                            <div class="d-flex">
                                                <span class="${textClass}">
                                                ₹ ${formatprofitAndLoss} (${Math.abs(profitAndLossPercentage)}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                `;


                            });
                        } else if (mcxElement) {
                            mcxElement.forEach(el => {
                                const rowId = el.id.replace('isin4', '');

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price

                                const invest = parseFloat(document.getElementById(`invest4${rowId}`)
                                    .textContent) || 0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity4${rowId}`)
                                    .textContent) || 0; // Quantity
                                const tradeType = document.getElementById(`tradeType4${rowId}`).innerText
                                    .trim(); // Trade type
                                const action = document.getElementById(`action4${rowId}`).innerText
                                    .trim(); // Trade type


                                // console.log("price", price, "invest", invest, "quanrity", quantity, "tradeType",
                                //     tradeType, "action", action);



                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(
                                    quantity))); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                const formattedPandloss = Number(pandloss).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                const positiveProfitAndLoss = Math.abs(profitAndLoss);
                                const formatprofitAndLoss = Number(positiveProfitAndLoss).toLocaleString(
                                    'en-IN', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                const gotPrice = parseFloat(invest) + parseFloat(profitAndLoss);
                                const formattedGotPrice = Number(gotPrice).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                document.getElementById(`price4${rowId}`).textContent =
                                    `Current : ₹${formattedPandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';



                                document.getElementById(`marketPrice4${rowId}`).textContent =
                                    `Market Price : ₹ ${price || '0'}`;
                                document.getElementById(`gotPrice4${rowId}`).textContent =
                                    `₹ ${formattedGotPrice || '0'}`;
                                document.getElementById(`stockChange4${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                                document.getElementById(`tradeStockChange4${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change4${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + formatprofitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + formatprofitAndLoss+ ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                                // Determine status (Net Gain, Net Loss, or No Change)
                                let statusClass = "";
                                let textClass = "";
                                let icon = "";
                                let statusText = "";

                                if (profitAndLoss > 0) {
                                    statusClass = "badge-success";
                                    textClass = "text-success";
                                    icon = "▲";
                                    statusText = "Net Gain";
                                } else if (profitAndLoss < 0) {
                                    statusClass = "badge-danger";
                                    textClass = "text-danger";
                                    icon = "▼";
                                    statusText = "Net Loss";
                                } else {
                                    statusClass = "badge-warning";
                                    textClass = "text-warning";
                                    icon = "-";
                                    statusText = "No Change";
                                }

                                // Update UI dynamically
                                document.getElementById(`changeStatus4${rowId}`).innerHTML = `
                                    <div class="d-flex align-items-center mt-3 mb-2">
                                        <span class="badge ${statusClass} me-2">${icon}</span>
                                        <div class="d-flex flex-column">
                                            <h4 class="card-title mb-0" style="font-size:1rem; font-weight:900">${statusText}</h4>
                                            <div class="d-flex">
                                                <span class="${textClass}">
                                                ₹ ${formatprofitAndLoss} (${Math.abs(profitAndLossPercentage)}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                `;


                            });
                        } else if (indicesElement) {
                            futureElement.forEach(el => {
                                const rowId = el.id.replace('isin5', '');

                                const price = parseFloat(feedData?.ltpc?.ltp) || 0; // Last traded price
                                const cp = parseFloat(feedData?.ltpc?.cp) || 0; // Cost price

                                const invest = parseFloat(document.getElementById(`invest5${rowId}`)
                                    .textContent) || 0; // Investment amount
                                const quantity = parseFloat(document.getElementById(`quantity5${rowId}`)
                                    .textContent) || 0; // Quantity
                                const tradeType = document.getElementById(`tradeType5${rowId}`).innerText
                                    .trim(); // Trade type
                                const action = document.getElementById(`action5${rowId}`).innerText
                                    .trim(); // Trade type


                                // console.log("price", price, "invest", invest, "quanrity", quantity, "tradeType",
                                //     tradeType, "action", action);



                                let margin = 1;
                                if (tradeType == 'FUT') {
                                    margin = 500;
                                } else if (tradeType == 'CE' || tradeType == 'PE') {
                                    margin = 7;
                                } else {
                                    margin = 1;
                                }

                                const currentValue = ((price * parseFloat(
                                    quantity))); // Actual investment amount

                                let profitAndLoss = (currentValue - invest).toFixed(2);

                                if (action == 'SELL') {
                                    profitAndLoss *= -1;
                                }

                                const profitAndLossPercentage = invest ? ((profitAndLoss / invest) * 100)
                                    .toFixed(2) : '0';


                                const pandloss = (parseFloat(invest) + parseFloat(profitAndLoss)).toFixed(2);

                                // console.log(rowId,"->price", price,"invest", invest,"quanrity", quantity,"currentValue", currentValue,"tradeType", tradeType,"action", action,"profitAndLoss", profitAndLoss,"profitAndLossPercentage", profitAndLossPercentage,"pandloss", pandloss);


                                const formattedPandloss = Number(pandloss).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                const positiveProfitAndLoss = Math.abs(profitAndLoss);
                                const formatprofitAndLoss = Number(positiveProfitAndLoss).toLocaleString(
                                    'en-IN', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                const gotPrice = parseFloat(invest) + parseFloat(profitAndLoss);
                                const formattedGotPrice = Number(gotPrice).toLocaleString('en-IN', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });

                                document.getElementById(`price5${rowId}`).textContent =
                                    `Current : ₹${formattedPandloss || '0'}`;

                                const badgeValue = (price - cp).toFixed(2) || '0';
                                const percentageChange = price && cp ? (((price - cp) / cp) * 100).toFixed(2) :
                                    '0';



                                document.getElementById(`marketPrice5${rowId}`).textContent =
                                    `Market Price : ₹ ${price || '0'}`;
                                document.getElementById(`gotPrice5${rowId}`).textContent =
                                    `₹ ${formattedGotPrice || '0'}`;
                                document.getElementById(`stockChange5${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;

                                document.getElementById(`tradeStockChange5${rowId}`).innerHTML =
                                    `
                                        ${percentageChange > 0 ? '<span class="text-success">▲</span>' : '<span class="text-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-muted" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-muted" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}`;


                                document.getElementById(`change5${rowId}`).innerHTML =
                                    `
                                ${profitAndLoss > 0 
                                ? '<span class="text-success" id="perc' + rowId + '">+ ₹' + formatprofitAndLoss + ' (' + profitAndLossPercentage + '%)</span>' 
                                : '<span class="text-danger" id="perc' + rowId + '">- ₹' + formatprofitAndLoss+ ' (' + Math.abs(profitAndLossPercentage) + '%)</span>'}`;

                                // Determine status (Net Gain, Net Loss, or No Change)
                                let statusClass = "";
                                let textClass = "";
                                let icon = "";
                                let statusText = "";

                                if (profitAndLoss > 0) {
                                    statusClass = "badge-success";
                                    textClass = "text-success";
                                    icon = "▲";
                                    statusText = "Net Gain";
                                } else if (profitAndLoss < 0) {
                                    statusClass = "badge-danger";
                                    textClass = "text-danger";
                                    icon = "▼";
                                    statusText = "Net Loss";
                                } else {
                                    statusClass = "badge-warning";
                                    textClass = "text-warning";
                                    icon = "-";
                                    statusText = "No Change";
                                }

                                // Update UI dynamically
                                document.getElementById(`changeStatus5${rowId}`).innerHTML = `
                                    <div class="d-flex align-items-center mt-3 mb-2">
                                        <span class="badge ${statusClass} me-2">${icon}</span>
                                        <div class="d-flex flex-column">
                                            <h4 class="card-title mb-0" style="font-size:1rem; font-weight:900">${statusText}</h4>
                                            <div class="d-flex">
                                                <span class="${textClass}">
                                                ₹ ${formatprofitAndLoss} (${Math.abs(profitAndLossPercentage)}%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                `;


                            });
                        }
                    }
                }
            });

        function showOrderForm(id, index) {
            // console.log("hi");

            const offcanvasId = `orderoffcanvasBottom${id}${index}`;
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
        window.Echo.channel('stocks')
            .listen('Stock', (e) => {
                console.log("Stock event received:", e);

                // Extracting stock data from the event
                let sensexData = e.stocks?.feeds?.["BSE_INDEX|SENSEX"]?.ff?.indexFF;
                let niftyData = e.stocks?.feeds?.["NSE_INDEX|NIFTY 50"]?.ff?.marketFF;



                if (sensexData) {
                    let sensexLtp = sensexData.ltpc.ltp;
                    let sensexCP = sensexData.ltpc.cp;
                    let sensexChange = sensexLtp - sensexCP;

                    let sensexChangePercent = ((sensexChange / sensexCP) * 100).toFixed(2);

                    document.getElementById('sensexLtp').textContent = sensexLtp.toFixed(2);
                    document.getElementById('sensexChange').innerHTML = `
                        <p class="${sensexChange >= 0 ? 'text-success' : 'text-danger'} fw-bold mb-1">
                            ${sensexChangePercent}%
                        </p>
                        <p class="${sensexChange >= 0 ? 'text-success' : 'text-danger'} fs-5 fw-semibold">
                            ${sensexChange.toFixed(2)}
                        </p>
                    `;
                }

                if (niftyData && niftyData.ltpc.length > 0) {
                    let niftyLtp = niftyData.ltpc[0].ltp;
                    let niftyPrevClose = niftyData.ltpc[0].cp;
                    let niftyChange = niftyLtp - niftyPrevClose;
                    let niftyChangePercent = ((niftyChange / niftyPrevClose) * 100).toFixed(2);

                    document.getElementById('niftyLtp').textContent = niftyLtp.toFixed(2);
                    document.getElementById('niftyChange').innerHTML = `
                        <p class="${niftyChange >= 0 ? 'text-success' : 'text-danger'} fw-bold mb-1">
                            ${niftyChangePercent}%
                        </p>
                        <p class="${niftyChange >= 0 ? 'text-success' : 'text-danger'} fs-5 fw-semibold">
                            ${niftyChange.toFixed(2)}
                        </p>
                    `;
                }
            });

        function closeOrder(instrumentKey, duration, tradeType, id, rowId) {

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
                                            `orderoffcanvasBottom${rowId}${id}`
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
