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
    <style>
        .card {
            border: none;
            color: white;
        }

        input.form-control:read-only {
            border: none;
        }

        input.form-control.bg-secondary {
            background-color: #2e2f45 !important;
        }

        .btn-primary {
            background: linear-gradient(90deg, #6255ff, #f54aff);
            border: none;
        }
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    {{-- <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    {{-- <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">

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
                <!-- row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-xl-12">
                        <div class="card rounded-4 p-4">
                            <h1 class="text-center fw-bold fs-2 mb-4">Referral System</h1>

                            <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 ">
                                <!-- Left Logo & Referrals -->
                                <div class="d-flex align-items-center py-3 px-5 rounded-2 " style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/4121/4121044.png" alt="logo" width="40" class="me-3" />
                                    <div>
                                        <h5 class="mb-1" >TOTAL REFERRALS</h5>
                                        <h3 class="text-primary fw-bold">32</h3>
                                    </div>
                                </div>

                                <!-- Earnings -->
                                <div class="d-flex align-items-center px-5 py-3 rounded-2 " style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/11257/11257660.png" alt="logo" width="40" class="me-3" />
                                    <div>
                                        <h5 class="mb-1">TOTAL EARNED</h5>
                                        <h3 class="text-info fw-bold">250.0</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Referral Link Section -->
                            <div class="mt-5">
                                <label class="mb-2 fw-semibold">YOUR REFERRAL LINK</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-controlgg"
                                        value="http://127.0.0.1:8000/{{ $user->refer_code }}" readonly>
                                    <button onclick="copy()" class="btn btn-outline-light" type="button">Copy link</button>
                                    <button onclick="share()" class="btn btn-primary ms-2" type="button">Share</button>
                                </div>
                                <p class="text-muted">Get <span class="text-info fw-bold">100.0 </span> for each
                                    invited user</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <!-- row -->
                        <div class="row">
                            <div class="card">
                                <div class="card-header justify-content-between border-0">
                                    <h2 class="card-title mb-0">Latest Sold Transaction</h2>
                                </div>
                                <div class="card-body px-3 py-0">
                                    <div class="table-responsive">
                                        <table
                                            class="table-responsive table shadow-hover tickettable display mb-4 dataTablesCard dataTable no-footer"
                                            id="example6">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom">
                                                        <input type="checkbox" class="form-check-input" id="checkAll"
                                                            required="">
                                                    </th>
                                                    <th class="border-bottom ps-0">Currency</th>
                                                    <th class="border-bottom">Date</th>
                                                    <th class="border-bottom">Email</th>
                                                    <th class="border-bottom">Price</th>
                                                    <th class="text-end">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox me-0 align-self-center">
                                                            <div class="custom-control custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="check8" required="">
                                                                <label class="custom-control-label"
                                                                    for="check8"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                        <h5 class="mb-0">BTC</h5>
                                                    </td>
                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="email-inbox.html">
                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"><a href="app-profile.html">Samanta
                                                                        William</a></h5>
                                                                <span class="fs-14 text-muted">samantha@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$75,00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-success">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox me-0 align-self-center">
                                                            <div class="custom-control custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="check81" required="">
                                                                <label class="custom-control-label"
                                                                    for="check8"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                        <h5 class="mb-0">BCTD</h5>
                                                    </td>
                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="email-inbox.html">
                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"><a href="app-profile.html">Tony
                                                                        Soap</a></h5>
                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$80,00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-success">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox me-0 align-self-center">
                                                            <div class="custom-control custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="check813" required="">
                                                                <label class="custom-control-label"
                                                                    for="check8"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                        <h5 class="mb-0">ETH</h5>
                                                    </td>
                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="email-inbox.html">
                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"><a href="app-profile.html">Nela
                                                                        Vita</a></h5>
                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$80,00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox me-0 align-self-center">
                                                            <div class="custom-control custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="check814" required="">
                                                                <label class="custom-control-label"
                                                                    for="check8"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                        <h5 class="mb-0">USD</h5>
                                                    </td>
                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="email-inbox.html">
                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"><a href="app-profile.html">Nadia
                                                                        Edja</a></h5>
                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$75,00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-danger">Unpaid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox me-0 align-self-center">
                                                            <div class="custom-control custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="check815" required="">
                                                                <label class="custom-control-label"
                                                                    for="check8"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                        <h5 class="mb-0">USD</h5>
                                                    </td>
                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="email-inbox.html">
                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"><a href="app-profile.html">Nadia
                                                                        Edja</a></h5>
                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$75,00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-danger">Unpaid</span>
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
</body>


</html>
