@php
    $user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">


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

    {{-- swel --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    {{-- csrf  token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    {{-- <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    {{-- <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">



    <!-- Include Animate.css for animation (optional but nice) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">


        <x-nav-header />

        <x-header />

        <x-sidebar />


        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="card rounded-4 p-4 shadow-lg border-0">
                                <h1 class="text-center fw-bold fs-2 mb-4 text-dark">Brokerage Details</h1>

                                <div class="row justify-content-center gy-4">

                                    <!-- Trade Count -->
                                    <div class="col-md-6">
                                        <div
                                            class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                            <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png"
                                                alt="trades" width="50" />
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">TOTAL TRADES</p>
                                                <h3 class="mb-0 text-primary fw-bold">565</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Brokerage Fixed -->
                                    <div class="col-md-6">
                                        <div
                                            class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                            <img src="https://cdn-icons-png.flaticon.com/128/1087/1087924.png"
                                                alt="brokerage" width="50" />
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">BROKERAGE</p>
                                                <h3 class="mb-0 text-success fw-bold">₹ 0.25 / Trade</h3>
                                                <small class="text-muted">Applicable on NSE, MCX</small>
                                            </div>
                                        </div>
                                    </div>
                              <div class="col-md-12">
                                    <div class="d-flex align-items-center justify-content-center text-center p-3 rounded-3 w-100 h-100">
                                        <h3 class="mb-0 fw-bold">BROKERAGE</h3>
                                    </div>
                                </div>

                                    <!-- Per Cr Example -->
                                    <div class="col-md-4">
                                        <div
                                            class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/1907/1907550.png"
                                                alt="volume" width="50" /> --}}
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">NSE , MCX</p>
                                                <h3 class="mb-0 text-dark fw-bold">₹ 500 / Cr</h3>
                                                <small class="text-muted">For high-volume trades</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Options Info -->
                                    <div class="col-md-4">
                                        <div
                                            class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/2160/2160941.png"
                                                alt="options" width="50" /> --}}
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">OPTIONS</p>
                                                <h4 class="mb-0 text-info fw-bold">₹ 40 / Lot</h4>
                                                <small class="text-muted">₹ 20 Buy + ₹ 20 Sell</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Currency Info -->
                                    <div class="col-md-4">
                                        <div
                                            class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/1171/1171376.png"
                                                alt="currency" width="50" /> --}}
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">CURRENCY</p>
                                                <h4 class="mb-0 text-info fw-bold">₹ 20 / Lot</h4>
                                                <small class="text-muted">₹ 10 Buy + ₹ 10 Sell</small>
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






        <script src="{{ asset('js/app.js') }}"></script>








        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- Datatable -->
        {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script> --}}


        <!-- Dashboard 1 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        {{-- swel --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





</body>


</html>
