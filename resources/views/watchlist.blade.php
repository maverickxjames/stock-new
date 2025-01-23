@php
$user = Auth::user();
use App\Models\Script;
use App\Models\Equity;
use App\Models\Watchlist;
use App\Providers\Helper;
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
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />


    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="vendor/datatables/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <style>
        table.dataTable tbody tr,
        table.dataTable tbody td {
            background: transparent;
            text-align: center;
            font-size: 1.2rem;
        }

        table.dataTable tbody th,
        table.dataTable tbody td {
            background: transparent;
            text-align: center;
            font-size: 1.2rem;
        }

        #bid {
            background-color: #007b17;
            color: #ffffff;
        }

        #ask {
            background-color: #db1b1b;
            color: #ffffff;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .image-button {

            border-radius: 50%;
            /* Make it circular */
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s ease;
            /* Add a hover effect */
        }

        .image-button img {
            width: 40px;
            /* Increase the image size */
            height: 40px;
            /* Increase the image size */
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blink {
            animation: blink 1s infinite;
        }
    </style>

    <style>
        /* Positive values */
        .badge-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Negative values */
        .badge-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Neutral values */
        .badge-neutral {
            background-color: #e2e3e5;
            color: #6c757d;
            border: 1px solid #d6d8db;
        }

        /* Bid and Ask Rates */
        .bid-rate {
            color: #007bff;
            /* Blue */
        }

        .ask-rate {
            color: #fd7e14;
            /* Orange */
        }

        /* Hover effect */
        table tbody tr:hover {
            background-color: #f8f9fa;
            /* Subtle gray */
            transition: background-color 0.3s ease;
        }

        .offcanvas.offcanvas-bottom {
            max-height: 80%;
            /* Adjust this value to your desired height */
            height: 60%;
            /* Ensures it adapts to content */
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
        <div class="nav-header" style="z-index: 1000;">
            <div onclick="window.location.href='{{ route('watchlist') }}'" class="brand-logo cursor-pointer px-3 px-lg-2">
                <img src="images/logo-white.png" alt="" width="80" style="cursor:pointer;">
        
                {{-- <div class="brand-title"> --}}
                    {{-- <img src="images/logo-white1.png" alt="" width="100"> --}}
                    <h1 class="brand-title" style="font-size: small;color:#fff">STOCK-MANTRA</h1>
                {{-- </div> --}}
        
            </div>
            <div class="nav-control ms-5" >
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dlab-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dlab-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                            btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
        
                        </div>
                        <ul class="navbar-nav header-right">
        
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                                    <svg id="icon-light" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"
                                        viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <svg id="icon-dark" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"
                                        viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="32px" height="32px" viewBox="0 0 24 24" version="1.1"
                                        class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
                                                fill="#fff" />
                                            <rect fill="#fff" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification3" class="widget-media dlab-scroll p-3"
                                        style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                            class="ti-arrow-end"></i></a>
                                </div>
                            </li> --}}
        
                            {{-- <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="32px" height="32px" viewBox="0 0 24 24" version="1.1"
                                        class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                fill="#fff" />
                                        </g>
                                    </svg>
                                </a>
        
                            </li> --}}
                            <li>
                                <div class="dropdown header-profile2">
                                    <a class="nav-link" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="header-info2 d-flex align-items-center">
                                            <div class="d-flex align-items-center sidebar-info">
                                                <div>
                                                    <h4 class="text-white mb-1">{{ $user['name'] }}</h4>
                                                    <span class="d-block text-end">{{ $user['email'] }}</span>
                                                </div>
                                            </div>
                                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header-profile3 " style="">
                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item ai-icon " style="cursor: pointer;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="">
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a onclick="window.location.href='{{ route('portfolio') }}'"
                                            class="dropdown-item ai-icon " style="cursor: pointer;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/943/943026.png" alt="">
                                            <span class="ms-2">Portfolio </span>
                                        </a>
        
                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item ai-icon " style="cursor: pointer;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2698/2698011.png" alt="">
                                            <span class="ms-2">Settings </span>
                                        </a>
                                        <a onclick="window.location.href='{{ route('logout') }}'"
                                            class="dropdown-item ai-icon" style="cursor: pointer;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/15181/15181112.png" alt="">
                                            <span class="ms-2 text-danger">Logout </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="page-titles">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-white">Nifty 50 </h2>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-white">Sensex </h2>
                </div>
                <div>
                    <button onclick="history.back()" type="button" class="btn btn-rounded btn-dark">Back</button>
                </div>
        
            </div>
        </div>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label mb-2">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label mb-2">User Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                placeholder="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-2">Joining Date</label>
                            <div class="input-hasicon mb-sm-0 mb-3">
                                <input name="datepicker" class="form-control bt-datepicker">
                                <div class="icon"><i class="far fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">



                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 flex-wrap">
                                <h4 class="card-title font-sans font-bold">Add Your Watchlist</h4>
                                <div class="d-flex align-items-center">
                                    <!-- Button trigger modal -->


                                    <div class="search-container mb-0 ms-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search..."
                                                aria-label="Search">
                                            <button class="btn btn-secondary" type="button">
                                                <img src="https://cdn-icons-png.flaticon.com/512/151/151773.png"
                                                    width="20px" height="20px" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                @csrf
                                <div class="card-body pt-0">
                                    <div class="coin-holding">

                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">SEGMENT</label>
                                                <select onchange="segment()" id="searchable"
                                                    class="form-control segment default-select h-auto wide"
                                                    aria-label="Default select example" data-role="segment-select">
                                                    <?php
                                                    Script::all()->each(function ($script) {
                                                        echo "<option value='$script->id'>$script->script_symbol</option>";
                                                    });
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">Script</label>
                                                <select onchange="script()" id="searchable2"
                                                    class="form-control script default-select h-auto wide"
                                                    aria-label="Default select example">
                                                    <?php
                                                    Equity::orderBy('symbol', 'ASC')
                                                        ->get()
                                                        ->each(function ($equity) {
                                                            echo "<option value='$equity->id'>$equity->symbol</option>";
                                                        });
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">Expiry</label>
                                                <select id="expiry" class="form-control default-select h-auto wide"
                                                    aria-label="Default select example">
                                                    <option value="2024-12-10">10-12-2024</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">CALL / PUT</label>
                                                <select id="callPutSelect"
                                                    class="form-control default-select h-auto wide"
                                                    aria-label="Default select example" disabled>
                                                    <option selected>Select</option>
                                                    <option value="CE">CE</option>
                                                    <option value="PE">PE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="coin-box-warper">
                                            <div class="">
                                                <label class="form-label">STRIKE</label>
                                                <select id="searchable3"
                                                    class="form-control strike default-select h-auto wide"
                                                    aria-label="Default select example" disabled>
                                                    <option selected>Select Status</option>
                                                    <option value="1">Published</option>
                                                    <option value="2">Draft</option>
                                                    <option value="3">Trash</option>
                                                    <option value="4">Private</option>
                                                    <option value="5">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-container d-flex justify-content-center mt-3">
                                            <button onclick="addWatchlist()"
                                                class="image-button border-0 d-flex align-items-center justify-content-center"
                                                type="button">
                                                <img src="https://cdn-icons-png.flaticon.com/512/8371/8371357.png"
                                                    alt="Add Icon">
                                            </button>

                                        </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>



            <?php
            $watchlists = Watchlist::where('userid', Auth::user()->id)->get();
            if ($watchlists->count() > 0) {
                $mergedData = $watchlists;
                // print_r($mergedData);
            } else {
                $mergedData = [];
            }

            ?>


            <?php
            if($mergedData == []) {
                $i = 0;

            }else{
                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">NSEFUT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                        $i = 1;
                                                            foreach($mergedData as $watchlist){
                                                                // print_r($watchlist);
                                                                if($watchlist['segment'] == 'NSE_FO'){
                                                                    $iii = DB::select('SELECT * FROM future_temp WHERE exchangeToken = ? LIMIT 1', [$watchlist['exchangeToken']]);
                                                                    $foisin = $iii[0]->instrumentKey;
                                                                    $tradingSymbol = $iii[0]->tradingSymbol;
                                                                    $quantity = $iii[0]->lotSize;
                                                                    ?>
                                    <p style="display: none" id="isin1{{ $i }}">{{ $foisin }}</p>
                                    <div id="orderForm{{ $i }}">
                                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle
                                            bottom offcanvas</button> --}}

                                        <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                            id="offcanvasBottom{{ $i }}" aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasBottomLabel{{ $i }}">Offcanvas
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
                                                                <!-- <div class="d-flex"> -->

                                                                <nav class="" style="width: 100%;">
                                                                    <div class="nav nav-pills light " id="nav-tab"
                                                                        role="tablist">
                                                                        <button class="nav-link active "
                                                                            style="width: 50%;" id="nav-order-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-order" type="button"
                                                                            role="tab" aria-selected="true">Buy</button>
                                                                        <button class="nav-link" style="width: 50%"
                                                                            id="nav-histroy-tab" data-bs-toggle="tab"
                                                                            data-bs-target="#nav-history" type="button"
                                                                            role="tab" aria-selected="false">Sell
                                                                        </button>

                                                                    </div>
                                                                </nav>
                                                                <!-- </div> -->
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active"
                                                                        id="nav-order" role="tabpanel"
                                                                        aria-labelledby="nav-order-tab">
                                                                        <div class="table-responsive dataTabletrade">
                                                                            <form>

                                                                                <div class="col-xl-4" style="
                                                                                        width: 100%;
                                                                                    ">
                                                                                    <div class="card">

                                                                                        <div class="card-body pt-2">
                                                                                            <!-- Available Balance -->
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

                                                                                            <!-- Buy/Sell Form -->
                                                                                            <form>
                                                                                                <!-- Order Type Selector -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Order
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        onchange="handleOrderTypeChange('nsefut', {{ $i }}, this.value)"
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="market"
                                                                                                            selected="">
                                                                                                            Market Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="limit">
                                                                                                            Limit Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="stoploss">
                                                                                                            Stop Loss
                                                                                                            Order
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Price Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Price</span>
                                                                                                    <input
                                                                                                        id="realprice1{{ $i }}"
                                                                                                        disabled
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter price">
                                                                                                    <input
                                                                                                        id="limitprice1{{ $i }}"
                                                                                                        disabled
                                                                                                        type="hidden"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter price">
                                                                                                    <span
                                                                                                        class="input-group-text">₹</span>
                                                                                                </div>

                                                                                                <!-- Size Input -->
                                                                                                {{-- <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Size</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter size">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Lot</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Shares</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Units</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div> --}}

                                                                                                <div class=""
                                                                                                    style="display: flex; justify-content:space-between; gap:20px;">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text">Lot</span>
                                                                                                        <button
                                                                                                            onclick="decrementLot({{ $quantity }}, {{ $i }}, 1,{{ $user->real_wallet }})"
                                                                                                            class="btn btn-outline-secondary"
                                                                                                            type="button"
                                                                                                            id="decrement">-</button>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control text-center"
                                                                                                            placeholder="Enter size"
                                                                                                            id="lotSize1{{ $i }}"
                                                                                                            value="1" disabled>
                                                                                                        <button
                                                                                                            onclick="incrementLot( {{ $quantity }}, {{ $i }}, 1, {{ $user->real_wallet }})"
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
                                                                                                            value={{
                                                                                                            $quantity }}
                                                                                                            readonly>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Take Profit & Stop Loss -->


                                                                                                <!-- Margin Type -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Margin
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="1x"
                                                                                                            selected="">
                                                                                                            1x (No
                                                                                                            Margin)
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2x">
                                                                                                            2x</option>
                                                                                                        <option
                                                                                                            value="5x">
                                                                                                            5x</option>
                                                                                                        <option
                                                                                                            value="10x">
                                                                                                            10x</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Stop Price -->
                                                                                                {{-- <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Stop
                                                                                                        Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter stop price">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Mode</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Limit</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Market</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div> --}}

                                                                                                <!-- Cost and Max Info -->
                                                                                                <div
                                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                                    <div class="d-flex">
                                                                                                        <div>Cost:</div>
                                                                                                        <div
                                                                                                            id="costPrice1{{ $i }}"
                                                                                                            class="px-1">
                                                                                                            ₹0.00</div>
                                                                                                    </div>
                                                                                                    <div class="d-flex">
                                                                                                        <div>Max:</div>
                                                                                                        <div
                                                                                                            id="maxPrice1{{ $i }}"
                                                                                                            class=" px-1">
                                                                                                            ₹ {{ $user->real_wallet }}</div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Buy/Sell Buttons -->
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</button>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-history"
                                                                        role="tabpanel">
                                                                        <div class="table-responsive dataTabletrade">
                                                                            <form>
                                                                                <div class="col-xl-4" style="
                                                                                width: 100%;
                                                                            ">
                                                                                    <div class="card">

                                                                                        <div class="card-body pt-2">
                                                                                            <!-- Available Balance -->
                                                                                            <div
                                                                                                class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                                                <span
                                                                                                    class="small text-muted">Available
                                                                                                    Balance</span>
                                                                                                <span
                                                                                                    class="text-dark">₹210,800</span>
                                                                                            </div>

                                                                                            <!-- Buy/Sell Form -->
                                                                                            <form>
                                                                                                <!-- Order Type Selector -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Order
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="market"
                                                                                                            selected="">
                                                                                                            Market Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="limit">
                                                                                                            Limit Order
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="intraday">
                                                                                                            Intraday
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Price Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter price">
                                                                                                    <span
                                                                                                        class="input-group-text">₹</span>
                                                                                                </div>

                                                                                                <!-- Size Input -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Size</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter size">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Lot</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Shares</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Units</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Take Profit & Stop Loss -->


                                                                                                <!-- Margin Type -->
                                                                                                <div class="mb-3">
                                                                                                    <label
                                                                                                        class="form-label">Margin
                                                                                                        Type</label>
                                                                                                    <select
                                                                                                        class="form-select">
                                                                                                        <option
                                                                                                            value="1x"
                                                                                                            selected="">
                                                                                                            1x (No
                                                                                                            Margin)
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2x">
                                                                                                            2x</option>
                                                                                                        <option
                                                                                                            value="5x">
                                                                                                            5x</option>
                                                                                                        <option
                                                                                                            value="10x">
                                                                                                            10x</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                                <!-- Stop Price -->
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text">Stop
                                                                                                        Price</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter stop price">
                                                                                                    <button
                                                                                                        class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">Mode</button>
                                                                                                    <ul
                                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Limit</a>
                                                                                                        </li>
                                                                                                        <li><a class="dropdown-item"
                                                                                                                href="#">Market</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <!-- Cost and Max Info -->
                                                                                                <div
                                                                                                    class="d-flex justify-content-between flex-wrap">
                                                                                                    <div class="d-flex">
                                                                                                        <div>Cost:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹0.00</div>
                                                                                                    </div>
                                                                                                    <div class="d-flex">
                                                                                                        <div>Max:</div>
                                                                                                        <div
                                                                                                            class="text-muted px-1">
                                                                                                            ₹6,000</div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Buy/Sell Buttons -->
                                                                                                <div
                                                                                                    class="mt-3 d-flex justify-content-between">

                                                                                                    <button
                                                                                                        type="button"
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
                                    </div>

                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td onclick="showOrderForm({{ $i }})" id="symbol1{{ $i }}">{{ $tradingSymbol }}
                                        </td>
                                        <td onclick="showOrderForm({{ $i }})" id="bid1{{ $i }}">0</td>
                                        <td onclick="showOrderForm({{ $i }})" id="ask1{{ $i }}">0</td>
                                        <td onclick="showOrderForm({{ $i }})" id="ltp1{{ $i }}">0</td>
                                        <td id="ch1{{ $i }}">0</td>
                                        <td id="badge1{{ $i }}">
                                            {{-- <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i> --}}
                                                0
                                                {{-- </span> --}}
                                        </td>
                                        <td id="high1{{ $i }}">0</td>
                                        <td id="low1{{ $i }}">0</td>
                                        <td id="open1{{ $i }}">0</td>
                                        <td id="close1{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['id'] }})" style="cursor: pointer"
                                                class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                                    $i++;
                                                                }

                                                            }
                                                            ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            }




            if($mergedData == []) {
                $i = 0;

            }else{
                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">NSEOPT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                $i = 1;
                                                    foreach($mergedData as $watchlist){
                                                        if($watchlist['script_symbol'] == 'NSEOPT'){
                                                            ?>
                                    <p style="display: none" id="isin2{{ $i }}">
                                        {{ $watchlist['Isin'] }}
                                    </p>
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td id="symbol2{{ $i }}">{{ $watchlist['symbol'] }}</td>


                                        <td id="bid2{{ $i }}">0</td>
                                        <td id="ask2{{ $i }}">0</td>
                                        <td id="ltp2{{ $i }}">0</td>
                                        <td id="ch2{{ $i }}">0</td>
                                        <td id="badge2{{ $i }}">
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                0
                                            </span>
                                        </td>
                                        <td id="high2{{ $i }}">0</td>
                                        <td id="low2{{ $i }}">0</td>
                                        <td id="open2{{ $i }}">0</td>
                                        <td id="close2{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['id'] }})" style="cursor: pointer"
                                                class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                            $i++;
                                                        }

                                                    }
                                                    ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            if($mergedData == []) {
                $i = 0;

            }else{

                ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">MCXFUT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>NSE FUTURE Sym</th>
                                        <th>BID RATE</th>
                                        <th>ASK RATE</th>
                                        <th>LTP</th>
                                        <th>CHANGE %</th>
                                        <th>NET CHANGE</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                        <th>OPEN</th>
                                        <th>CLOSE</th>
                                        <th class="text-end">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                $i = 1;
                                                    foreach($mergedData as $watchlist){
                                                        if($watchlist['segment'] == 'MCX_FO'){
                                                            $iii = DB::select('SELECT * FROM future_temp WHERE exchangeToken = ? LIMIT 1', [$watchlist['exchangeToken']]);
                                                                    $foisin = $iii[0]->instrumentKey;
                                                                    $tradingSymbol = $iii[0]->tradingSymbol;
                                                            ?>
                                    <p style="display: none" id="isin3{{ $i }}">{{ $foisin }}
                                    </p>
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td id="symbol3{{ $i }}">{{ $tradingSymbol }}</td>


                                        <td id="bid3{{ $i }}">0</td>
                                        <td id="ask3{{ $i }}">0</td>
                                        <td id="ltp3{{ $i }}">0</td>
                                        <td id="ch3{{ $i }}">0</td>
                                        <td id="badge3{{ $i }}">
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                0
                                            </span>
                                        </td>
                                        <td id="high3{{ $i }}">0</td>
                                        <td id="low3{{ $i }}">0</td>
                                        <td id="open3{{ $i }}">0</td>
                                        <td id="close3{{ $i }}">0</td>
                                        <td>

                                            <i onclick="removeWatchlist({{ $watchlist['id'] }})" style="cursor: pointer"
                                                class="bi bi-x-square-fill text-danger"></i>
                                            &nbsp;
                                            <!-- <i style="cursor: pointer"
                                                class="bi bi-bar-chart-line-fill text-success"></i> -->
                                        </td>

                                    </tr>
                                    <?php
                                                            $i++;
                                                        }

                                                    }
                                                    ?>


                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }

            ?>

        </div>





    </div>


    </div>
    </div>
    <!--**********************************
            Content body end
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



    {{-- swel fire cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        function showOrderForm(index) {
            const offcanvasId = `offcanvasBottom${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }

        function handleOrderTypeChange(segment, id, orderType) {
    if (segment === 'nsefut') {
        const priceInput = document.getElementById("realprice1" + id);
        const limitprice = document.getElementById("limitprice1" + id);
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
}
    }

    // You can add additional logic for other segments (nseopt, mcxfut) here if needed
}

    </script>



    <script>
        Echo.channel('watchlists')
            .listen('Watchlist', (event) => {
                const feeds = event.watchlist.feeds;

                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        // console.log(feedData);

                        // Find the <p> tag containing the matching ISIN
                        const isinElement = Array.from(document.querySelectorAll("p[id^='isin1']")).find(el => el
                            .textContent === receivedIsin);
                        const optisinElement = Array.from(document.querySelectorAll("p[id^='isin2']")).find(el => el
                            .textContent === receivedIsin);
                        // const mcxisinElement = Array.from(document.querySelectorAll("p[id^='isin3']")).find(el => el.textContent === receivedIsin);

                        const elements = Array.from(document.querySelectorAll("p[id^='isin3']"));
                        const mcxisinElement = elements.find(el => el.textContent.trim() === receivedIsin.trim());
                        if (isinElement) {
                            // Extract the numeric part from the id, e.g., "isin1" → "1"
                            const rowId = isinElement.id.replace('isin1', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp1${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high ||
                                '0';
                            document.getElementById(`low1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low ||
                            '0';
                            document.getElementById(`open1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open ||
                                '0';
                            document.getElementById(`close1${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close ||
                                '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch1${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge1${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bidQ || '0';
                            document.getElementById(`ask1${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .askQ || '0';



                            // Optionally update the badge color or value
                            // const badgeElement = document.getElementById(`badge${rowId}`);
                            // if (badgeElement) {
                            //     const badgeClass = parseFloat(feedData.ch || 0) > 0 ? 'badge-success' : 'badge-danger';
                            //     badgeElement.innerHTML = `
                        //         <span class="badge light ${badgeClass}">
                        //             <i class="fa fa-circle text-${badgeClass === 'badge-success' ? 'success' : 'danger'} me-1"></i>
                        //             ${feedData.ch || '0'}
                        //         </span>`;
                            // }
                        } else if (optisinElement) {

                            const rowId = optisinElement.id.replace('isin2', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp2${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            // document.getElementById(`realprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high ||
                                '0';
                            document.getElementById(`low2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low ||
                            '0';
                            document.getElementById(`open2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open ||
                                '0';
                            document.getElementById(`close2${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close ||
                                '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch2${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge2${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bidQ || '0';
                            document.getElementById(`ask2${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .askQ || '0';

                        } else if (mcxisinElement) {
                            const rowId = mcxisinElement.id.replace('isin3', '');

                            const ltp = feedData?.ltpc?.ltp || 1; // Default to 1 to avoid division by zero
                            const cp = feedData?.ltpc?.cp || 0;

                            // Update the table cells using the extracted rowId
                            document.getElementById(`ltp3${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            // document.getElementById(`realprice3${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`high3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high ||
                                '0';
                            document.getElementById(`low3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].low ||
                            '0';
                            document.getElementById(`open3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].open ||
                                '0';
                            document.getElementById(`close3${rowId}`).textContent = feedData.marketOHLC.ohlc[0].close ||
                                '0';
                            // document.getElementById(`ch${rowId}`).textContent = percentageChange || '0';
                            const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageClass = percentageChange > 0 ? 'badge-success' : 'badge-danger';
                            const percentageIcon = percentageChange > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            document.getElementById(`ch3${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${percentageClass}">
                                    <img src="${percentageIcon}" width="12" class="blink"/> ${percentageChange}
                                </span>`;

                            // badge
                            const badgeClass = (ltp - cp) > 0 ? 'badge-success' : 'badge-danger';
                            const badgeIcon = (ltp - cp) > 0 ?
                                'https://cdn-icons-png.flaticon.com/128/9035/9035722.png' :
                                'https://cdn-icons-png.flaticon.com/128/5548/5548156.png';
                            const badgeValue = (ltp - cp).toFixed(2) || '0';
                            document.getElementById(`badge3${rowId}`).innerHTML = `
                                <span style="display: inline;margin: auto;" class="badge light ${badgeClass}">
                                    <img src="${badgeIcon}" width="12" class="blink" /> ${badgeValue}
                                </span>`;

                            // bid and ask
                            document.getElementById(`bid3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bidQ || '0';
                            document.getElementById(`ask3${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .askQ || '0';
                        }
                    }
                }
            });
    </script>




    <script>
        function segment() {
            var segment = document.querySelector('.segment').value;
            var script = document.getElementById('searchable2').value;
            var callPutSelect = document.getElementById('callPutSelect');
            var strike = document.querySelector('.strike');
            // 1 = future
            // 2 = option
            // 3 = mcx future
            if (segment == 1) {
                const url = `/get-expiry/future/${script}`;
                const url2 = `/get-stock/future/${segment}`;

                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url2, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing script
                        $('#searchable2').empty();

                        // Append new options
                        // data -> 0 -> expiry
                        data.forEach(function(item) {
                            $('#searchable2').append(
                                `<option value="${item.id}">${item.symbol}</option>`);
                        });


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });

                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing options
                        $('#expiry').empty();



                        // Append new options
                        // data -> 0 -> expiry

                        data.forEach(function(item) {
                            $('#expiry').append(
                                `<option value="${item.expiry}">${item.expiry}</option>`);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });




                callPutSelect.disabled = true;
                strike.disabled = true;
            } else if (segment == 2) {
                callPutSelect.disabled = false;
                strike.disabled = false;
            } else if (segment == 3) {

                const url = `/get-stock/mcx/${segment}`;

                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing script
                        $('#searchable2').empty();

                        // Append new options
                        // data -> 0 -> expiry
                        data.forEach(function(item) {
                            $('#searchable2').append(
                                `<option value="${item.id}">${item.symbol}</option>`);
                        });


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });

                const url2 = `/get-expiry/mcx/${script}`;
                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url2, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing options
                        $('#expiry').empty();



                        // Append new options
                        // data -> 0 -> expiry

                        data.forEach(function(item) {
                            $('#expiry').append(
                                `<option value="${item.expiry}">${item.expiry}</option>`);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });

                callPutSelect.disabled = true;
                strike.disabled = true;

            } else {
                callPutSelect.disabled = true;
                strike.disabled = true;
            }
        }

        segment();

        function script() {
            var segment = document.querySelector('.segment').value;
            var script = document.getElementById('searchable2').value;
            var callPutSelect = document.getElementById('callPutSelect');
            var strike = document.querySelector('.strike');
            // 1 = future
            // 2 = option
            // 3 = mcx future
            if (segment == 1) {
                const url = `/get-expiry/future/${script}`;
                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing options
                        $('#expiry').empty();



                        // Append new options
                        // data -> 0 -> expiry

                        data.forEach(function(item) {
                            $('#expiry').append(
                                `<option value="${item.expiry}">${item.expiry}</option>`);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });


                callPutSelect.disabled = true;
                strike.disabled = true;
            } else if (segment == 2) {

                const url = `/get-expiry/${script}`;
                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing options
                        $('#expiry').empty();



                        // Append new options
                        // data -> 0 -> expiry

                        data.forEach(function(item) {
                            $('#expiry').append(
                                `<option value="${item.expiry}">${item.expiry}</option>`);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });

                callPutSelect.disabled = false;
                strike.disabled = false;
            } else if (segment == 3) {

                const url = `/get-expiry/mcx/${script}`;
                // Use jQuery's $.ajax method to make the request
                $.ajax({
                    url: url, // The endpoint to fetch data from
                    method: 'GET', // HTTP method
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        // Handle successful response
                        console.log('Expiry dates:', data);

                        // Clear existing options
                        $('#expiry').empty();



                        // Append new options
                        // data -> 0 -> expiry

                        data.forEach(function(item) {
                            $('#expiry').append(
                                `<option value="${item.expiry}">${item.expiry}</option>`);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors
                        console.error('Error fetching expiry dates:', textStatus, errorThrown);
                    }
                });

                callPutSelect.disabled = true;
                strike.disabled = true;

            } else {
                callPutSelect.disabled = true;
                strike.disabled = true;
            }
        }

        function addWatchlist() {
            var segment = document.querySelector('.segment').value;
            var script = document.querySelector('.script').value;
            var expiry = document.querySelector('#expiry').value;
            var callPut = document.querySelector('#callPutSelect').value;
            var strike = document.querySelector('.strike').value;
            console.log(script)

            data = {
                segment: segment,
                script: script,
                expiry: expiry,
                callPut: callPut,
                strike: strike
            }


            var data = {};
            if (segment == 2) {
                data = {
                    segment: segment,
                    script: script,
                    expiry: expiry,
                    callPut: callPut,
                    strike: strike
                }


            } else {
                data = {
                    segment: segment,
                    script: script,
                    expiry: expiry,
                    callPut: null,
                    strike: null
                }
            }


            console.log(data);



            //use ajax and swel fire to add watchlist  using of post method
            $.ajax({
                url: "{{ route('add-watchlist') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                data: data,
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
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Okay'
                        })
                        // .then(() => {
                        //     location.reload();
                        // });
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
                            'An error occurred while adding the watchlist.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });






        }

        function removeWatchlist(id) {

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
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Okay'
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
                            'An error occurred while removing the watchlist.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    console.error(xhr.responseJSON);
                }
            });
        }
    </script>




    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    {{-- <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}
    {{-- <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script> --}}
    <!-- Chart piety plugin files -->


    <!-- Apex Chart -->
    {{-- <script src="vendor/apexchart/apexchart.js"></script> --}}

    <!-- Dashboard 1 -->
    {{-- <script src="js/dashboard/portfolio.js"></script> --}}
    {{-- <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script> --}}
    {{-- <script src="js/demo.js"></script> --}}

    <!-- Required vendors -->
    <!-- Datatable -->
    {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/responsive/responsive.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script> --}}

    {{-- <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/peity/jquery.peity.min.js"></script>


    {{-- <script src="/vendor/global/global.min.js"></script> --}}
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    {{-- jquary cdn --}}



    {{-- <script src="{{ asset('js/dashboard/future.js') }}"></script> --}}

    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>


    <!-- Dashboard 1 -->

    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#searchable').select2({
                placeholder: "Search and select a state"
            });
            $('#searchable2').select2({
                placeholder: "Search and select a state"
            });
            $('#searchable3').select2({
                placeholder: "Search and select a state"
            });
            $('#callPutSelect').select2({
                placeholder: "Search and select a state"
            });
            $('#expiry').select2({
                placeholder: "Search and select a state"
            });

            // example2 datatable
            // $('#example2').DataTable({
            //     "pagingType": "full_numbers",
            //     "searching": false,
            //     "lengthChange": false,
            //     "ordering": false,
            //     "info": false,
            //     "autoWidth": false,
            //     "responsive": true,
            //     "scrollX": true
            // });


        });

      
      

    function incrementLot(quantityPerLot, uniqueId, segment,wallet) {

        if(segment == 1){
            const lotInput = document.getElementById('lotSize1' + uniqueId);
            const quantity = document.getElementById('quantity1' + uniqueId);
            const costPrice = document.getElementById('costPrice1' + uniqueId);
            const maxPrice = document.getElementById('maxPrice1' + uniqueId);
            const realPrice = document.getElementById('realprice1' + uniqueId);

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            lotInput.value = currentValue + 1;
           
            quantity.value =lotInput.value * quantityPerLot;
           
            let cp=(realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            costPrice.innerHTML ="₹ "+ cp;


            if(wallet > cp){
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                costPrice.style.color = 'green';
            }else{
                maxPrice.style.color = 'red';
                costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            }
            
           

            
        }else{

        }
    }

    function decrementLot(quantityPerLot, uniqueId, segment,wallet) {
        if(segment == 1){
            const lotInput = document.getElementById('lotSize1' + uniqueId);
            const quantity = document.getElementById('quantity1' + uniqueId);
            const costPrice = document.getElementById('costPrice1' + uniqueId);
            const maxPrice = document.getElementById('maxPrice1' + uniqueId);
            const realPrice = document.getElementById('realprice1' + uniqueId);

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            if (currentValue > 1) {
                lotInput.value = currentValue - 1;
                quantity.value =lotInput.value * quantityPerLot;
                let cp=(realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
                costPrice.innerHTML ="₹ "+ cp;
                if(wallet > cp){
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                costPrice.style.color = 'green';
            }else{
                maxPrice.style.color = 'red';
                costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
            }
            }
        }else{

        }

        
        
    }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>

</body>


</html>