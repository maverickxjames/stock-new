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
                            <div class="card-header flex-wrap">

                                <h4 class="card-title">Transaction History</h4>
                                <nav>
                                    <div class="nav nav-pills light" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-order" type="button" role="tab"
                                            aria-selected="true">Deposit</button>
                                        <button class="nav-link" id="nav-histroy-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-history" type="button" role="tab"
                                            aria-selected="false">Withdraw</button>
                                        {{-- <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-trade" type="button" role="tab"
                                            aria-selected="false">Trade Histroy</button> --}}
                                    </div>
                                </nav>

                            </div>
                            <div class="card-body pt-2">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-order" role="tabpanel"
                                        aria-labelledby="nav-order-tab">
                                        <div class="row">
                                            {{-- make a simpel card their we show some detail like order_id(tranaction
                                            id),amount ,status,remark,utr,created-at --}}
                                            @if(empty($deposits))
                                            <div class="alert alert-danger" role="alert">
                                                No Deposit Found
                                            </div>
                                            @else
                                            @foreach ($deposits as $deposit)
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="card pull-up"
                                                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                    <div class="card-body align-items-center flex-wrap">
                                                        <p class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                            @if ($deposit->status == 1)
                                                            <span class="badge badge-success me-2">Success</span>
                                                            @elseif($deposit->status == 0)
                                                            <span class="badge badge-warning me-2">Pending</span>
                                                            @else
                                                            <span class="badge badge-danger me-2">Failed</span>
                                                            @endif
                                                        </p>
                                                        <div class="d-flex align-items-center mb-4 mt-2">
                                                            <p>#{{ $loop->iteration }}</p>
                                                            <div class="ms-2">
                                                                <a href="javascript:void(0)">
                                                                    <h4 class="card-title mb-0"
                                                                        style="font-size:1rem; ">
                                                                        {{ $deposit->order_id }}
                                                                    </h4>
                                                                    <span>UTR: {{ ucfirst($deposit->utr) }}</span>
                                                                </a>
                                                                <div class="text-end"
                                                                    style="position: absolute; top: 10px; right: 14px;">
                                                                    <p class="text-muted mb-1 fs-13">
                                                                        {{
                                                                        \Carbon\Carbon::parse($deposit->created_at)->diffForHumans()
                                                                        }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p
                                                                    class="mb-0 fs-8 font-w500 d-flex align-items-center">
                                                                    Amount : ₹{{ $deposit->amount }}
                                                                </p>
                                                                <p
                                                                    class="mb-0 fs-8 font-w500 d-flex align-items-center">
                                                                    Remark : {{ $deposit->remark }}
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-history" role="tabpanel">
                                        <div class="row">
                                            {{-- make a simpel card their we show some detail like order_id(tranaction
                                            id),amount ,status,remark,utr,created-at --}}
                                            @if(empty($withdraws))
                                            <div class="alert alert-danger" role="alert">
                                                No Deposit Found
                                            </div>
                                            @else
                                            @foreach ($withdraws as $withdraw)
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="card pull-up"
                                                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                                    <div class="card-body align-items-center flex-wrap">
                                                        <p class="mb-0 fs-5 font-w500 d-flex align-items-center">
                                                            @if ($withdraw->status == 1)
                                                            <span class="badge badge-success me-2">Success</span>
                                                            @elseif($withdraw->status == 0)
                                                            <span class="badge badge-warning me-2">Pending</span>
                                                            @else
                                                            <span class="badge badge-danger me-2">Failed</span>
                                                            @endif
                                                            @if ($withdraw->type == 'upi')
                                                            <span class="badge badge-primary me-2">UPI</span>
                                                            @elseif($withdraw->status == 'bank')
                                                            <span class="badge badge-secondary me-2">BANK</span>
                                                            @endif
                                                         

                                                            
                                                        </p>
                                                        <div class="d-flex align-items-center mb-4 mt-2">
                                                            <p class="mb-0">#{{ $loop->iteration }}</p>
                                                            <div class="ms-2">
                                                            
                                                                    <h4 class="card-title mb-0"
                                                                        style="font-size:1rem; ">
                                                                        {{ $withdraw->txnid }}
                                                                    </h4>
                                                                    <span></span>
                                                
                                                                <div class="text-end"
                                                                    style="position: absolute; top: 10px; right: 14px;">
                                                                    <p class="text-muted mb-1 fs-13">
                                                                        {{
                                                                        \Carbon\Carbon::parse($withdraw->created_at)->diffForHumans()
                                                                        }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p
                                                                    class="mb-0 fs-8 font-w500 d-flex align-items-center">
                                                                    Amount : ₹{{ $withdraw->amount }}
                                                                </p>
                                                                <p
                                                                    class="mb-0 fs-8 font-w500 d-flex align-items-center">
                                                                    Remark : {{ $withdraw->remark }}
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-trade" role="tabpanel"
                                        aria-labelledby="nav-trade-tab">
                                        <div class="table-responsive dataTabletrade">
                                            {{-- --}}

                                            {{-- <table
                                                class="table table-responsive table-responsive-lg table-responsive-md table-responsive-sm table-responsive-xl table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Remark</th>
                                                        <th>UTR</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($trades as $trade)
                                                    <tr>
                                                        <td>{{ $trade->order_id }}</td>
                                                        <td>{{ $trade->amount }}</td>
                                                        <td>{{ $trade->status }}</td>
                                                        <td>{{ $trade->remark }}</td>
                                                        <td>{{ $trade->utr }}</td>
                                                        <td>{{ $trade->created_at }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table> --}}
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
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>