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
                                        {{-- <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-all" type="button" role="tab"
                                            aria-controls="nav-all" aria-selected="false">ALL</button> --}}
                                        <button class="nav-link active" id="nav-fut-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-fut" type="button" role="tab"
                                            aria-controls="nav-fut" aria-selected="true">OPEN</button>
                                        <button class="nav-link" id="nav-opt-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-opt" type="button" role="tab"
                                            aria-controls="nav-opt" aria-selected="false">CLOSED</button>
                                        {{-- <button class="nav-link" id="nav-mcx-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mcx" type="button" role="tab" aria-controls="nav-mcx"
                                            aria-selected="false">MCX</button>
                                        <button class="nav-link" id="nav-indices-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-indices" type="button" role="tab"
                                            aria-controls="nav-indices" aria-selected="false">Indices</button> --}}
                                    </div>
                                </nav>
                            </div>
                           




                            <div class="card-body">
                                <div class="tab-content" id="nav-tabContent1">
                                    {{-- <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                        aria-labelledby="nav-all-tab">
                                        <div class="tab-content" id="nav-tabContent2">
                                            <div class="tab-pane fade show active" id="nav-order1" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom:20px">
                                                    <h4 class="card-title">Stocks : All</h4>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">

                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->orderBy('id','DESC')->get();

                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
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
                                                                          
                                                                                <div
                                                                                    class="table-responsive dataTabletrade">
                                                                                   
                                                                                    <div class="col-xl-4"
                                                                                        style="width: 100%;">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                               


                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
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
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Margin
                                                                                                        Utilized:₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                    align-items-center px-3 py-2 bg-light">
                                                                                                        Adjusted
                                                                                                        Investment:
                                                                                                        ₹
                                                                                                        {{ number_format($stock->total_cost, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Lot Size:{{ $stock->lotSize }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Quantity:{{ number_format($stock->quantity, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                              
                                                                                                @if($stock->status=='closed' || $stock->status=='force_closed')

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    <p class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light"
                                                                                                        id="marketPrice1{{ $i }}">
                                                                                                        Exit
                                                                                                        Price:
                                                                                                        {{ number_format($stock->exit_price, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                         {{ $stock->profit_loss > 0 ? 'Net Gain' : 'Net Loss' }}:₹  {{ number_format($stock->profit_loss, 2) }}({{ $stock->profit_loss_percentage }}%)
                                                                                                    </p>
                                                                                                         
                                                                                                   
                                                                                                </div>

                                                                                                @elseif($stock->status=='processing')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    @if($stock->order_type=='limit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @elseif($stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @endif

                                                                                                    @if($stock->order_type=='stoplossMarket' || $stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Auto Close Price:{{ number_format($stock->stop_loss, 2) }}
                                                                                                    </p>
                                                                                                    @endif
                                                                                                </div>
                                                                                                @elseif($stock->status=='executed')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    
                                                                                                </div>
                                                                                                @elseif($stock->status=='cancelled')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                   
                                                                                                </div>
                                                                                                @endif


                                                                                               @if($stock->status=='processing')
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        onclick="cancelOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},1)"
                                                                                                        type="submit"
                                                                                                        class="btn btn-primary btn-sm text-uppercase btn-block">Cancel Order</button>
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






                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"  data-bs-toggle="modal"
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
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="tab-pane fade show active" id="nav-fut" role="tabpanel"
                                        aria-labelledby="nav-fut-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : OPEN</h4>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="row">

                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('status','processing')->orderBy('id','DESC')->get();

                                                        $i = 1;
                                               

                                                        foreach ($stocks as $stock){
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
                                                                          
                                                                                <div
                                                                                    class="table-responsive dataTabletrade">
                                                                                   
                                                                                    <div class="col-xl-4"
                                                                                        style="width: 100%;">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                               


                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
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
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Margin
                                                                                                        Utilized:₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                    align-items-center px-3 py-2 bg-light">
                                                                                                        Adjusted
                                                                                                        Investment:
                                                                                                        ₹
                                                                                                        {{ number_format($stock->total_cost, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Lot Size:{{ $stock->lotSize }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Quantity:{{ number_format($stock->quantity, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                              
                                                                                                @if($stock->status=='closed' || $stock->status=='force_closed')

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    <p class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light"
                                                                                                        id="marketPrice1{{ $i }}">
                                                                                                        Exit
                                                                                                        Price:
                                                                                                        {{ number_format($stock->exit_price, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                         {{ $stock->profit_loss > 0 ? 'Net Gain' : 'Net Loss' }}:₹  {{ number_format($stock->profit_loss, 2) }}({{ $stock->profit_loss_percentage }}%)
                                                                                                    </p>
                                                                                                         
                                                                                                   
                                                                                                </div>

                                                                                                @elseif($stock->status=='processing')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    @if($stock->order_type=='limit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @elseif($stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @endif

                                                                                                    @if($stock->order_type=='stoplossMarket' || $stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Auto Close Price:{{ number_format($stock->stop_loss, 2) }}
                                                                                                    </p>
                                                                                                    @endif
                                                                                                </div>
                                                                                                @elseif($stock->status=='executed')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    
                                                                                                </div>
                                                                                                @elseif($stock->status=='cancelled')
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                   
                                                                                                </div>
                                                                                                @endif


                                                                                               @if($stock->status=='processing')
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        onclick="cancelOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},1)"
                                                                                                        type="submit"
                                                                                                        class="btn btn-primary btn-sm text-uppercase btn-block">Cancel Order</button>
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






                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"  data-bs-toggle="modal"
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-opt" role="tabpanel"
                                        aria-labelledby="nav-opt-tab">
                                        <div class="tab-content" id="nav-tabContent3">
                                            <div class="tab-pane fade show active" id="nav-order2" role="tabpanel">
                                                <div class="d-flex align-items-center justify-content-between"
                                                    style="margin-bottom: 20px">
                                                    <h4 class="card-title">Stocks : Closed</h4>
                                                </div>

                                                <div class="col-xl-12">
                                                    <!-- Row -->
                                                    <div class="row">

                                                        <?php
                                                        $stocks = DB::table('trades')->where('user_id', $user->id)->where('status','closed')->orwhere('status','force_stop')->orderBy('id','DESC')->get();

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
                                                                          
                                                                                <div
                                                                                    class="table-responsive dataTabletrade">
                                                                                   
                                                                                    <div class="col-xl-4"
                                                                                        style="width: 100%;">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                               


                                                                                                <!-- Stock Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
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
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Margin
                                                                                                        Utilized:₹{{ number_format($stock->cost - $stock->total_cost, 2) }}({{ $stock->margin }}x)
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-3 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
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
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Lot Size:{{ $stock->lotSize }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Quantity:{{ number_format($stock->quantity, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                              
                                                                                                @if($stock->status=='closed' || $stock->status=='force_closed')

                                                                                                <!-- Price Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    <p class="mb-0 w-50 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light"
                                                                                                        id="marketPrice1{{ $i }}">
                                                                                                        Exit
                                                                                                        Price:
                                                                                                        {{ number_format($stock->exit_price, 2) }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-100 fs-12 text-dark font-w600 d-flex 
                                                                                                align-items-center px-3 py-2 bg-light">
                                                                                                         {{ $stock->profit_loss > 0 ? 'Net Gain' : 'Net Loss' }}:₹  {{ number_format($stock->profit_loss, 2) }}({{ $stock->profit_loss_percentage }}%)
                                                                                                    </p>
                                                                                                         
                                                                                                   
                                                                                                </div>

                                                                                                @elseif($stock->status=='processing')
                                                                                                <!-- Price Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    @if($stock->order_type=='limit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @elseif($stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Limit Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    @endif

                                                                                                    @if($stock->order_type=='stoplossMarket' || $stock->order_type=='stoplossLimit')
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Auto Close Price:{{ number_format($stock->stop_loss, 2) }}
                                                                                                    </p>
                                                                                                    @endif
                                                                                                </div>
                                                                                                @elseif($stock->status=='executed')
                                                                                                <!-- Price Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                    
                                                                                                </div>
                                                                                                @elseif($stock->status=='cancelled')
                                                                                                <!-- Price Details -->
                                                                                                <div
                                                                                                    class="d-flex gap-3 mb-4 align-items-center justify-content-between">
                                                                                                    <p
                                                                                                        class="mb-0 w-50 fs-12 text-dark font-w600 d-flex
                                                                                                        align-items-center px-3 py-2 bg-light">
                                                                                                        Entry Price:{{ number_format($stock->price, 2) }}
                                                                                                    </p>
                                                                                                   
                                                                                                </div>
                                                                                                @endif
                                                                                                <!-- Trade Type -->


                                                                                               @if($stock->status=='processing')
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        onclick="cancelOrder('{{ $foisin }}', '{{ $stock->duration }}', '{{ $stock->action }}',{{ $i }},1)"
                                                                                                        type="submit"
                                                                                                        class="btn btn-primary btn-sm text-uppercase btn-block">Cancel Order</button>
                                                                                                </div>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            {{-- </div> --}}
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

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Event trigger for the modal -->
    <script>
    
        function showOrderForm(id,index) {
            // console.log("hi");

            const offcanvasId = `orderoffcanvasBottom${id}${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }
    </script>


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
    </script>
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
