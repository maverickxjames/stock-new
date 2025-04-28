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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


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

        <x-footer-menu />

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="padding-bottom: 50px">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <nav>
                                    <div class="nav nav-pills light" id="nav-tab-p2p" role="tablist">
                                        <button class="nav-link active" id="nav-open-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-open" type="button" role="tab"
                                            aria-controls="nav-open" aria-selected="true">PENDING</button>
                                        <button class="nav-link" id="nav-active-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-active" type="button" role="tab"
                                            aria-controls="nav-active" aria-selected="false">ACTIVE</button>
                                        <button class="nav-link" id="nav-close-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-close" type="button" role="tab"
                                            aria-controls="nav-close" aria-selected="false">CLOSED</button>
                                        {{-- <button class="nav-link" id="nav-mcx-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mcx" type="button" role="tab" aria-controls="nav-mcx"
                                            aria-selected="false">MCX</button>
                                        <button class="nav-link" id="nav-indices-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-indices" type="button" role="tab"
                                            aria-controls="nav-indices" aria-selected="false">Indices</button> --}}
                                    </div>
                                </nav>
                            </div>
                           

                            @php
                                 $count = DB::table('trades')->where('user_id', $user->id)->where('status', 'executed')->count();
                            @endphp 
                           
                         

                            <div style="margin: 0 14px"
                                class="alert alert-warning alert-dismissible alert-alt solid fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                                <strong>! Warning</strong> You have <span class="badge badge-pill badge-danger">{{
                                    $count }}</span> executed orders. <a href="{{ route('portfolio') }}"
                                    class="badge badge-dark">View</a>
                            </div>


                            <div class="card-body">
                                <div class="tab-content" id="nav-tabContent1">
                                    <div class="tab-pane fade show active" id="nav-open" role="tabpanel"
                                        aria-labelledby="nav-open-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : PENDING</h4>
                                                </div>

                                                @php
                                                     $stocks = DB::table('trades')->where('user_id', $user->id)->where('status','processing')->orderBy('id','DESC')->get();
                                                @endphp

                                                @if ($stocks->isEmpty())
                                                <div class="error-page" style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <div class="dz-error">
                                                            <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png" alt="error"
                                                                class="img-fluid mb-3">
                                                        </div>
                                
                                                        <h2 class="error-head mb-0">No Pending Order Found.</h2>
                                                        <p class="mb-2">You don't have any Pending trades at the moment.</p>
                                                        <a href="/quotes" class="btn btn-success mb-2">Place a New Trade</a>
                                                        <p class="text-muted mb-0">Pick a stock and place your first order!</p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-xl-12">
                                                    <div class="row">

                                                        <?php
                                                        $i = 1;
                                                        foreach ($stocks as $stock){
                                                            $foisin = $stock->instrumentKey;
                                                        ?>

                                                        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="orderoffcanvasBottom2{{ $i }}"
                                                            aria-labelledby="offcanvasBottomLabel"
                                                            style="height: fit-content">
                                                            <div class="offcanvas-header">
                                                                <div class="d-flex flex-column">
                                                                    <h5 class="offcanvas-title"
                                                                        id="offcanvasBottomLabel{{ $i }}">
                                                                        {{ $stock->stock_name }}
                                                                    </h5>
                                                                 
                                                                </div>
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
                                                                                            aria-selected="true">Order
                                                                                            Info</button>
                                                                                    </div>
                                                                                </nav>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                        <p
                                                                                            class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Initial Investment:
                                                                                            <span>₹{{ number_format($stock->cost, 2) }}</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                        <p
                                                                                            class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Margin
                                                                                            Utilized:
                                                                                            <span>₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)</span>
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                        <p
                                                                                            class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                        align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Adjusted
                                                                                            Investment:
                                                                                            <span>₹ {{ number_format($stock->total_cost, 2) }}</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                      
                                                                                        <p
                                                                                            class="mb-0 w-100 fs-12 text-dark font-w600 d-flex
                                                                                            align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Limit Price: 
                                                                                            <span>₹ {{ number_format($stock->price, 2) }}</span>
                                                                                        </p>

                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                        <p
                                                                                            class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                           Stop Loss : 
                                                                                            <span>₹ {{ $stock->stop_loss }}</span>
                                                                                        </p>
                                                                                        <p
                                                                                            class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center px-3 py-2 bg-light">
                                                                                            Target Price:
                                                                                            <span>₹ {{ number_format($stock->target_price, 2) }}</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                        <p
                                                                                            class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Lot Size: 
                                                                                            <span>{{ $stock->lotSize }}</span>
                                                                                        </p>
                                                                                        <p
                                                                                            class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                            Quantity:
                                                                                            <span>{{ number_format($stock->quantity, 2) }}</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    
                                                                                   


                                                                                    <div
                                                                                        class="mt-3 d-flex justify-content-between">
                                                                                        <button
                                                                                            onclick="cancelOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},1)"
                                                                                            type="submit"
                                                                                            class="btn btn-primary btn-sm text-uppercase btn-block">Cancel Order</button>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"  data-bs-toggle="modal" onclick="showOrderForm(2,{{ $i }})">
                                                            <div class="card pull-up" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                                <div class="card-body align-items-center flex-wrap">
                                                                    <p class="mb-0 fs-5 font-w500 d-flex align-items-center">
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
                                                                        <span class="badge badge-primary light">{{ $stock->tradeType }}</span>
                                                                    </p>
                                                                    <div class="d-flex align-items-center mb-4 mt-2">

                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/<?php echo $stock->stock_symbol; ?>.svg"
                                                                            alt="" width=30
                                                                            style="border-radius: 100%">
                                                                        <div class="ms-2">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem; font-weight: 800">
                                                                                    {{ $stock->stock_name }}


                                                                                </h4>
                                                                                <span>
                                                                                   
                                                                                </span>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">

                                                                                <p class="text-muted mb-1 fs-13">
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}</br>

                                                                                    <?php
                                                                                    if($stock->duration=='intraday'){
                                                                                        ?>
                                                                                    Valid Till :
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->addDays(1)->format('d
                                                                                                                                                                                                                                                            M, Y') }}
                                                                                    <?php
                                                                                    }else{
                                                                                        ?>
                                                                                    Valid Till : {{ $stock->expiry }}
                                                                                    <?php
                                                                                    }
                                                                                    
                                                                                    ?>
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                           
                                                                                <p
                                                                                    class="mb-0 fs-12 text-dark font-w600">
                                                                                    <span class="">Limit Price :
                                                                                        {{ $stock->price }}</span>
                                                                                </p>
                                                                          

                                                                            <span class="fs-12">Margin Used: ₹
                                                                                {{ $stock->total_cost }}</span>
                                                                          
                                                                        </div>

                                                                       

                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                                                <span class='text-info'><i class='fas fa-spinner fa-spin'></i> Pending</span>
                                                                            </p>
                                                                            <span class="fs-12">Qty:
                                                                                <?= $stock->lotSize ?>
                                                                                (<?= $stock->quantity ?>)</span>
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
                                                @endif

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-active" role="tabpanel"
                                        aria-labelledby="nav-active-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : Active</h4>
                                                </div>

                                                <div class="col-xl-12">

                                                    @php
                                                        $futureSub = DB::table('future_temp')
                                                        ->select('instrumentKey', DB::raw('MIN(ltp) as ltp'), DB::raw('MIN(cp) as cp'))
                                                        ->groupBy('instrumentKey');
        
                                                        $trades = DB::table('trades')
                                                            ->where('trades.user_id', $user->id)
                                                            ->where('trades.status', 'executed')
                                                            ->leftJoinSub($futureSub, 'future_temp', function ($join) {
                                                                $join->on('future_temp.instrumentKey', '=', 'trades.instrumentKey');
                                                            })
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
                                                                future_temp.ltp,
                                                                future_temp.cp,
                                                                MIN(trades.margin) as margin,
                                                                MIN(trades.price) as price,
                                                                MIN(trades.order_type) as order_type
                                                            ')
                                                            ->groupBy('trades.instrumentKey', 'trades.duration', 'future_temp.ltp', 'future_temp.cp')
                                                            ->get();
        
                                                            Log::info($trades); // Log the trades data
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
                                                                                   
                                                                                        <input type="text" name="id"
                                                                                            value="{{ $i }}"
                                                                                            id="id" hidden>
                                                                                        <input type="text"
                                                                                            name="instrumentKey1{{ $i }}"
                                                                                            value="{{ $foisin }}"
                                                                                            id="instrumentKey1{{ $i }}"
                                                                                            hidden>
                                                                                      
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
        
                                                                                                    <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Initial Investment:
                                                                                                        <span>₹{{ number_format($stock->cost, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Margin
                                                                                                        Utilized:
                                                                                                        <span>₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)</span>
                                                                                                    </p>
                                                                                                </div>
            
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Adjusted
                                                                                                        Investment:
                                                                                                        <span>₹ {{ number_format($stock->total_cost, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                  
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Limit Price: 
                                                                                                        <span>₹ {{ number_format($stock->price, 2) }}</span>
                                                                                                    </p>
            
                                                                                                </div>
                                                                                               
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Lot Size: 
                                                                                                        <span>{{ $stock->lotSize }}</span>
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Quantity:
                                                                                                        <span>{{ number_format($stock->quantity, 2) }}</span>
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
                                                                                <div class="d-flex justify-content-between ">
                                                                                    <p class="mb-0" style="position: absolute;top: 54px;right: 14px;">
                                                                                        LTP:
                                                                                        <span id="ltp1{{ $i }}" class="font-w600 text-primary fs-4">
                                                                                            {{ $stock->ltp }}</span>
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
                                                                        <p style="display: none" id="ch1{{ $i }}">{{ $change }}</p>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between">
                                                                            <div>
                                                                                <p id="price1{{ $i }}"
                                                                                    class="mb-0 fs-14 text-dark font-w600">
                                                                                    Current : ₹
                                                                                    {{ number_format($profitAmount, 2) }}
                                                                                </p>
                                                                                <span class="fs-12" id="marginUsed1{{ $i }}">Margin Used : ₹
                                                                                    {{ number_format($stock->total_cost, 2) }}</span>
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-close" role="tabpanel"
                                        aria-labelledby="nav-close-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : Closed</h4>
                                                </div>

                                                @php
                                                      $stocks = DB::table('trades')->where('user_id', $user->id)->where('status','closed')->orwhere('status','force_stop')->orderBy('id','DESC')->get();
                                                @endphp
                                                
                                                @if ($stocks->isEmpty())
                                                <div class="error-page" style="height: 50vh;">
                                                    <div class="error-inner text-center">
                                                        <div class="dz-error">
                                                            <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png" alt="error"
                                                                class="img-fluid mb-3">
                                                        </div>
                                
                                                        <h2 class="error-head mb-0">No Closed Order Found.</h2>
                                                        <p class="mb-2">It looks like you haven't closed any trades yet.</p>
                                                        <a href="/quotes" class="btn btn-primary mb-2">Browse Stocks</a>
                                                        <p class="text-muted mb-0">Start by adding stocks to your watchlist and placing trades.</p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">

                                                        <?php
                                                         $i = 1;
                                               

                                                        foreach ($stocks as $stock){
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
                                                                 
                                                                </div>
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
                                                                                            aria-selected="true">Order
                                                                                            Info</button>
                                                                                    </div>
                                                                                </nav>
                                                                            </div>
                                                                          
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Initial Investment:
                                                                                                        <span>₹{{ number_format($stock->cost, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Margin
                                                                                                        Utilized:
                                                                                                        <span>₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)</span>
                                                                                                    </p>
                                                                                                </div>
            
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                    align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Adjusted
                                                                                                        Investment:
                                                                                                        <span>₹ {{ number_format($stock->total_cost, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Lot Size: 
                                                                                                        <span>{{ $stock->lotSize }}</span>
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Quantity:
                                                                                                        <span>{{ number_format($stock->quantity, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                  
                                                                                                

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light">
                                                                                                        Entry Price: <span>{{ number_format($stock->price, 2) }}</span>
                                                                                                    </p>
                                                                                                    <p class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center gap-2 px-3 py-2 bg-light"
                                                                                                        id="marketPrice1{{ $i }}">
                                                                                                        Exit
                                                                                                        Price:
                                                                                                        <span>{{ number_format($stock->exit_price, 2) }}</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                              

                                                                                                 <!-- Profit/Loss -->
                                                                                            <div
                                                                                            class="d-flex flex-column">
                                                                                            <div
                                                                                                class="d-flex align-items-center">
                                                                                                <h4
                                                                                                    class="mb-0 me-2 fw-bold">
                                                                                                    {{ $stock->profit_loss > 0 ? 'Net Gain' : 'Net Loss' }}
                                                                                                   
                                                                                                </h4>

                                                                                                <span
                                                                                                    class="text-dark fs-4 fw-bolder"
                                                                                                    id="gotPrice1{{ $i }}">₹
                                                                                                     {{ number_format($stock->profit_loss, 2) }}({{ $stock->profit_loss_percentage }}%)</span>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                                
                                                                                                
                                                         
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                   
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>






                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"  data-bs-toggle="modal"
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
                                                                            alt="" width=30
                                                                            style="border-radius: 100%">
                                                                        <div class="ms-2">
                                                                            <a href="javascript:void(0)">
                                                                                <h4 class="card-title mb-0"
                                                                                    style="font-size:1rem; font-weight: 800">
                                                                                    {{ $stock->stock_name }}


                                                                                </h4>
                                                                                <span>
                                                                                    @if ($stock->order_type == 'market') Market Order
                                                                                    @elseif($stock->order_type == 'limit')
                                                                                        Limit Order
                                                                                        @elseif($stock->order_type == 'stoplossMarket')
                                                                                        Stoploss Market Order
                                                                                        @elseif($stock->order_type == 'stoplossLimit')
                                                                                        Stoploss Limit Order
                                                                                    @endif
                                                                                </span>
                                                                            </a>
                                                                            <div class="text-end"
                                                                                style="position: absolute;top: 10px;right: 14px;">

                                                                                <p class="text-muted mb-1 fs-13">
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->diffForHumans() }}</br>

                                                                                    <?php
                                                                                    if($stock->duration=='intraday'){
                                                                                        ?>
                                                                                    Valid Till :
                                                                                    {{ \Carbon\Carbon::parse($stock->created_at)->addDays(1)->format('d
                                                                                                                                                                                                                                                            M, Y') }}
                                                                                    <?php
                                                                                    }else{
                                                                                        ?>
                                                                                    Valid Till : {{ $stock->expiry }}
                                                                                    <?php
                                                                                    }
                                                                                    
                                                                                    ?>
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <?php 
                                                                            switch ($stock->status) {
                                                                                case 'closed':
                                                                                case 'force_closed':
                                                                            ?>
                                                                            <p class="mb-0 fs-12 text-dark font-w600">
                                                                                <span
                                                                                    class="<?= $stock->profit_loss > 0 ? 'text-success' : 'text-danger' ?>">
                                                                                    <?= $stock->profit_loss > 0 ? '+ ₹' . $stock->profit_loss : '- ₹' . abs($stock->profit_loss) ?>
                                                                                    (<?= abs($stock->profit_loss_percentage) ?>%)
                                                                                </span>
                                                                            </p>
                                                                            <span class="fs-12">Invest Price: ₹
                                                                                <?= $stock->cost ?></span>
                                                                            <?php 
                                                                                    break;
                                                                    
                                                                                case 'processing': 
                                                                            ?>
                                                                            @if ($stock->order_type == 'limit')
                                                                                <p
                                                                                    class="mb-0 fs-12 text-dark font-w600">
                                                                                    <span class="">Limit Price :
                                                                                        {{ $stock->price }}</span>
                                                                                </p>
                                                                            @elseif($stock->order_type == 'stoplossLimit')
                                                                                <p
                                                                                    class="mb-0 fs-12
                                                                                        text-dark font-w600">
                                                                                    <span class="">Limit Price :
                                                                                        {{ $stock->price }}</span>
                                                                                </p>
                                                                            @endif

                                                                            <span class="fs-12">Invest Price: ₹
                                                                                <?= $stock->cost ?></span>
                                                                            <?php 
                                                                                    break;
                                                                    
                                                                                case 'executed': 
                                                                            ?>
                                                                            @if ($stock->order_type == 'stoplossMarket' || $stock->order_type == 'stoplossLimit')
                                                                                <p
                                                                                    class="mb-0 fs-12 text-dark font-w600">
                                                                                    <span class="">Auto Close
                                                                                        Price :
                                                                                        {{ $stock->stop_loss }}</span>
                                                                                </p>
                                                                            @endif
                                                                            <span class="fs-12">Invest Price: ₹
                                                                                <?= $stock->cost ?></span>
                                                                            <?php 
                                                                                    break;
                                                                    
                                                                                case 'cancelled': 
                                                                                    // No display for cancelled trades
                                                                                    break;
                                                                            }
                                                                            ?>
                                                                        </div>

                                                                        <?php
                                                                        // Handling Profit/Loss display
                                                                        $profitLossDisplay = '';
                                                                        
                                                                        switch ($stock->status) {
                                                                            case 'closed':
                                                                            case 'force_closed':
                                                                                $profitLossDisplay = "<span class='text-danger'><i class='fas fa-times-circle'></i> Closed</span>";
                                                                                break;
                                                                            case 'processing':
                                                                                $profitLossDisplay = "<span class='text-warning'><i class='fas fa-spinner fa-spin'></i> Processing</span>";
                                                                                break;
                                                                            case 'executed':
                                                                                $profitLossDisplay = "<span class='text-success'><i class='fas fa-check-circle'></i> Executed</span>";
                                                                                break;
                                                                            case 'cancelled':
                                                                                $profitLossDisplay = "<span class='text-danger'><i class='fas fa-ban'></i> Cancelled</span>";
                                                                                break;
                                                                            case 'failed':
                                                                                $profitLossDisplay = "<span class='text-danger'><i class='fas fa-exclamation-circle'></i> Failed</span>";
                                                                                break;
                                                                        }
                                                                        ?>

                                                                        <div>
                                                                            <p
                                                                                class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                                                <?= $profitLossDisplay ?>
                                                                            </p>
                                                                            <span class="fs-12">Qty:
                                                                                <?= $stock->lotSize ?>
                                                                                (<?= $stock->quantity ?>)</span>
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
        </div>
  

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script src="{{ asset('js/app.js') }}"></script>

     {{-- swal fire cdn --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Event trigger for the modal -->
    <script>
    
        function showOrderForm(id,index) {
            // console.log("hi");

            const offcanvasId = `orderoffcanvasBottom${id}${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }

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




        
        Echo.channel('trades')
            .listen('Trade', (event) => {
                const feeds = event.trade.feeds;

                console.log("order", feeds);


                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    // tradeQueue.push(feeds[key]);
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        // console.log("receivedIsin", receivedIsin);


                        // console.log(feedData);
                        // console.log(document.querySelectorAll("p[id^='isin1']"));

                        // Find the <p> tag containing the matching ISIN
                        const allElement = Array.from(document.querySelectorAll("p[id^='isin1']")).filter(el => el
                            .textContent.trim() === receivedIsin.trim());





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
                                document.getElementById(`ltp1${rowId}`).textContent = `${price}`;
                                // document.getElementById(`ltp1${rowId}`).textContent = `₹ ${price}`;

                                // total_investValue += isNaN(invest) ? 0 : parseFloat(invest);
                                // total_currentValue += isNaN(price * quantity) ? 0 : parseFloat(price) *
                                //     parseFloat(quantity);

                            






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

                                document.getElementById(`ch1${ rowId }`).innerHTML =profitAndLoss;

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
                                // sumAllChangeValues();

                            });


                           



                        } 
                    }
                }
            });
    </script>


    {{-- <script>
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
    </script> --}}
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>
