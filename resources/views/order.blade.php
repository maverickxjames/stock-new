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
        <x-header/>
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
                            <div class="card-header flex-wrap">
                                <!-- <div class="d-flex"> -->
                                <h4 class="card-title">Trade History</h4>
                                <nav>
                                    <div class="nav nav-pills light" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-order" type="button" role="tab"
                                            aria-selected="true">Active Order</button>
                                        <button class="nav-link" id="nav-histroy-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-history" type="button" role="tab"
                                            aria-selected="false">Order Log</button>
                                        <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-trade" type="button" role="tab"
                                            aria-selected="false">Executed Trades</button>
                                    </div>
                                </nav>
                                <!-- </div> -->
                            </div>
                            <div class="card-body pt-2">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-order" role="tabpanel"
                                        aria-labelledby="nav-order-tab">
                                        <div class="table-responsive dataTabletrade">
                                            <table id="example-history"
                                                class="table shadow-hover display  orderbookTable"
                                                style="min-width:845px">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Time</th>
                                                        <th>Script</th>
                                                        <th>Order Type</th>
                                                        <th>Order Action</th>
                                                        <th>Lot</th>
                                                        <th>Quantity</th>
                                                        <th>Order Price</th>
                                                        <th>Expiry</th>
                                                        {{-- <th>Status</th> --}}
                                                        <th class="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- fetch order detail  --}}
                                                    <?php
                                                    // Fetch authenticated user's orders
                                                    $orders = DB::table('trades')
                                                        ->where('user_id', Auth::user()->id)
                                                        ->get();
                                                    ?>
                                                    @foreach ($orders as $order)
                                                   @if($order->status == 'pending')
                                                      <tr>
                                                            <td>{{ $loop->iteration }}</td> <!-- S.No. -->
                                                            {{-- <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}</td>  --}}
                                                            <td>{{ $order->created_at }}</td> <!-- Time -->
                                                            <td>
                                                                <a class="market-title d-flex align-items-center"
                                                                    href="javascript:void(0);">
                                                                    <div class="market-icon me-2">
                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/{{ $order->stock_symbol }}.svg" alt="icon"
                                                                            class="styled-logo">
                                                                    </div>
                                                                    {{ $order->stock_symbol }}
                                                                </a>
                                                            </td>
                                                            <td>{{ $order->order_type }}</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-sm {{ $order->action == 'BUY' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ ucfirst($order->action) }}
                                                                </span>
                                                            </td>
                                                           
                                                            <!-- Adjust based on order type -->
                                                            <td>{{ $order->lotSize }}</td> <!-- Price per stock -->
                                                            <td>{{ $order->quantity }}</td> <!-- Price per stock -->
                                                            <td><span
                                                                    class="badge badge-sm badge-light">₹{{ number_format($order->price, 2) }}</span>
                                                            </td> <!-- Total value -->
                                                            <td>{{ $order->expiry }}</td>
                                                            {{-- <td>{{ $order->status }}</td> --}}
                                                            <!-- Quantity -->
                                                            <td>
                                                                <div class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-danger shadow btn-xs sharp">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                   @endif
                                                      
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-history" role="tabpanel">
                                        <div class="table-responsive dataTabletrade">
                                            <table id="example-history-1"
                                                class="table shadow-hover display  orderbookTable"
                                                style="min-width:845px">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Time</th>
                                                        <th>Script</th>
                                                        <th>Order Type</th>
                                                        <th>Order Action</th>
                                                        <th>Lot</th>
                                                        <th>Quantity</th>
                                                        <th>Order Price</th>
                                                        <th>Expiry</th>
                                                        {{-- <th>Status</th> --}}
                                                        <th class="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $orders = DB::table('trades')
                                                        ->where('user_id', Auth::user()->id)
                                                        ->get();
                                                    ?>
                                                    @foreach ($orders as $order)
                                                   @if($order->status == 'completed' || $order->status == 'cancelled')
                                                      <tr>
                                                            <td>{{ $loop->iteration }}</td> 
                                                            {{-- <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}</td>  --}}
                                                            <td>{{ $order->created_at }}</td> <!-- Time -->
                                                            <td>
                                                                <a class="market-title d-flex align-items-center"
                                                                    href="javascript:void(0);">
                                                                    <div class="market-icon me-2">
                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/{{ $order->stock_symbol }}.svg" alt="icon"
                                                                            class="styled-logo">
                                                                    </div>
                                                                    {{ $order->stock_symbol }}
                                                                </a>
                                                            </td>
                                                            <td>{{ $order->order_type }}</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-sm {{ $order->action == 'BUY' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ ucfirst($order->action) }}
                                                                </span>
                                                            </td>
                                                           
                                                            <!-- Adjust based on order type -->
                                                            <td>{{ $order->lotSize }}</td> <!-- Price per stock -->
                                                            <td>{{ $order->quantity }}</td> <!-- Price per stock -->
                                                            <td><span
                                                                    class="badge badge-sm badge-light">₹{{ number_format($order->price, 2) }}</span>
                                                            </td> <!-- Total value -->
                                                            <td>{{ $order->expiry }}</td>
                                                            {{-- <td>{{ $order->status }}</td> --}}
                                                            <!-- Quantity -->
                                                            <td>
                                                                <div class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-danger shadow btn-xs sharp">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                   @endif
                                                      
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-trade" role="tabpanel"
                                        aria-labelledby="nav-trade-tab">
                                        <div class="table-responsive dataTabletrade">
                                            <table id="example-history-2"
                                                class="table shadow-hover display  orderbookTable"
                                                style="min-width:845px">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Time</th>
                                                        <th>Script</th>
                                                        <th>Order Type</th>
                                                        <th>Order Action</th>
                                                        <th>Lot</th>
                                                        <th>Quantity</th>
                                                        <th>Order Price</th>
                                                        <th>Expiry</th>
                                                        {{-- <th>Status</th> --}}
                                                        <th class="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- fetch order detail  --}}
                                                    <?php
                                                    // Fetch authenticated user's orders
                                                    $orders = DB::table('trades')
                                                        ->where('user_id', Auth::user()->id)
                                                        ->get();
                                                    ?>
                                                    @foreach ($orders as $order)
                                                   @if($order->status == 'completed')
                                                      <tr>
                                                            <td>{{ $loop->iteration }}</td> <!-- S.No. -->
                                                            {{-- <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}</td>  --}}
                                                            <td>{{ $order->created_at }}</td> <!-- Time -->
                                                            <td>
                                                                <a class="market-title d-flex align-items-center"
                                                                    href="javascript:void(0);">
                                                                    <div class="market-icon me-2">
                                                                        <img src="https://s3tv-symbol.dhan.co/symbols/{{ $order->stock_symbol }}.svg" alt="icon"
                                                                            class="styled-logo">
                                                                    </div>
                                                                    {{ $order->stock_symbol }}
                                                                </a>
                                                            </td>
                                                            <td>{{ $order->order_type }}</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-sm {{ $order->action == 'BUY' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ ucfirst($order->action) }}
                                                                </span>
                                                            </td>
                                                           
                                                            <!-- Adjust based on order type -->
                                                            <td>{{ $order->lotSize }}</td> <!-- Price per stock -->
                                                            <td>{{ $order->quantity }}</td> <!-- Price per stock -->
                                                            <td><span
                                                                    class="badge badge-sm badge-light">₹{{ number_format($order->price, 2) }}</span>
                                                            </td> <!-- Total value -->
                                                            <td>{{ $order->expiry }}</td>
                                                            {{-- <td>{{ $order->status }}</td> --}}
                                                            <!-- Quantity -->
                                                            <td>
                                                                <div class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-danger shadow btn-xs sharp">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                   @endif
                                                      
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" style="display: none">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35"
                                                        src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                                                </td>
                                                <td><a
                                                        href="javascript:void(0);"><strong>info@example.com</strong></a>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="#"
                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35"
                                                        src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                                                </td>
                                                <td><a
                                                        href="javascript:void(0);"><strong>info@example.com</strong></a>
                                                </td>
                                                <td>2011/07/25</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="#"
                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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
