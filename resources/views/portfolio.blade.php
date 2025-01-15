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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">

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
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="27.5px" height="36.5px">
                    <path fill-rule="evenodd" stroke="var(--primary)" stroke-width="1px" stroke-linecap="butt"
                        stroke-linejoin="miter" fill="var(--primary)"
                        d="M24.253,5.072 L24.253,16.207 C24.253,17.311 24.210,17.744 24.253,18.412 L24.253,20.016 L24.253,25.458 C24.253,26.562 24.344,32.102 24.253,33.103 L22.202,33.103 C22.202,32.102 22.202,27.277 22.202,25.459 L22.202,5.076 C21.972,4.819 21.837,4.484 21.837,4.137 C21.837,3.770 21.987,3.414 22.242,3.154 C22.504,2.893 22.865,2.749 23.226,2.749 C23.593,2.749 23.954,2.893 24.210,3.154 C24.711,3.656 24.725,4.543 24.253,5.072 ZM18.243,16.511 C18.243,17.615 18.199,18.047 18.243,18.715 L18.243,20.319 L18.243,25.762 C18.243,26.866 18.334,32.405 18.243,33.407 L16.192,33.407 C16.192,32.405 16.192,27.580 16.192,25.762 L16.192,5.379 C15.962,5.123 15.826,4.787 15.826,4.441 C15.826,4.073 15.977,3.718 16.232,3.457 C16.493,3.197 16.855,3.052 17.215,3.052 C17.583,3.052 17.943,3.196 18.199,3.457 C18.701,3.959 18.714,4.846 18.243,5.375 L18.243,16.511 ZM12.735,25.098 C12.735,26.915 12.134,28.000 10.592,28.964 L7.575,30.848 C7.601,31.001 7.616,31.157 7.616,31.316 C7.616,31.883 7.156,32.342 6.590,32.342 C6.023,32.342 5.564,31.883 5.564,31.316 C5.564,31.189 5.530,31.071 5.471,30.968 C5.469,30.964 5.466,30.961 5.464,30.957 C5.458,30.948 5.453,30.938 5.448,30.929 C5.321,30.736 5.103,30.609 4.855,30.609 C4.465,30.609 4.146,30.926 4.146,31.316 C4.146,31.707 4.465,32.026 4.855,32.026 C5.422,32.026 5.881,32.485 5.881,33.052 C5.881,33.618 5.421,34.077 4.855,34.077 C3.333,34.077 2.095,32.839 2.095,31.316 C2.095,29.795 3.333,28.557 4.855,28.557 C5.470,28.557 6.040,28.760 6.499,29.102 L9.505,27.224 C10.441,26.639 10.683,26.201 10.683,25.098 L10.683,19.655 C10.653,19.674 10.623,19.694 10.592,19.713 L7.575,21.598 C7.601,21.750 7.616,21.906 7.616,22.066 C7.616,22.633 7.156,23.092 6.590,23.092 C6.023,23.092 5.564,22.633 5.564,22.066 C5.564,21.940 5.531,21.822 5.473,21.719 C5.470,21.715 5.466,21.711 5.464,21.707 C5.457,21.697 5.452,21.686 5.446,21.676 C5.319,21.485 5.102,21.358 4.855,21.358 C4.465,21.358 4.146,21.675 4.146,22.066 C4.146,22.456 4.465,22.775 4.855,22.775 C5.422,22.775 5.881,23.234 5.881,23.801 C5.881,24.368 5.421,24.827 4.855,24.827 C3.333,24.827 2.095,23.588 2.095,22.066 C2.095,20.544 3.333,19.306 4.855,19.306 C5.470,19.306 6.040,19.509 6.499,19.851 L9.505,17.973 C10.441,17.388 10.683,16.951 10.683,15.847 L10.683,4.709 C10.451,4.457 10.322,4.118 10.322,3.773 C10.322,3.407 10.466,3.051 10.728,2.790 C10.984,2.534 11.344,2.384 11.711,2.384 C12.072,2.384 12.434,2.534 12.689,2.790 C13.190,3.296 13.204,4.181 12.735,4.706 L12.735,25.098 Z" />
                </svg>

                <div class="brand-title">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="91px"
                        height="29px">
                        <path fill-rule="evenodd" fill="var(--primary)"
                            d="M90.219,18.825 C89.722,19.295 89.031,19.595 88.143,19.726 L78.472,21.174 C78.759,22.035 79.347,22.688 80.234,23.131 C81.121,23.549 82.140,23.757 83.288,23.757 C84.358,23.757 85.363,23.627 86.303,23.366 C87.269,23.079 88.052,22.753 88.652,22.387 C89.070,22.648 89.422,23.014 89.709,23.483 C89.997,23.953 90.140,24.449 90.140,24.971 C90.140,26.145 89.592,27.019 88.496,27.594 C87.661,28.037 86.721,28.337 85.676,28.494 C84.632,28.650 83.654,28.729 82.740,28.729 C81.200,28.729 79.764,28.520 78.433,28.102 C77.128,27.659 75.979,27.006 74.987,26.145 C74.022,25.284 73.251,24.201 72.677,22.896 C72.129,21.591 71.855,20.065 71.855,18.316 C71.855,16.594 72.129,15.120 72.677,13.893 C73.251,12.641 73.995,11.623 74.909,10.840 C75.822,10.031 76.867,9.444 78.041,9.079 C79.216,8.687 80.417,8.491 81.643,8.491 C83.027,8.491 84.280,8.700 85.402,9.118 C86.551,9.535 87.530,10.109 88.339,10.840 C89.174,11.571 89.814,12.445 90.258,13.463 C90.727,14.480 90.963,15.589 90.963,16.790 C90.963,17.677 90.714,18.356 90.219,18.825 ZM83.837,14.128 C83.340,13.606 82.609,13.345 81.643,13.345 C81.017,13.345 80.469,13.450 79.999,13.658 C79.555,13.867 79.190,14.141 78.903,14.480 C78.616,14.793 78.394,15.159 78.237,15.576 C78.107,15.968 78.028,16.372 78.002,16.790 L84.698,15.694 C84.619,15.172 84.332,14.650 83.837,14.128 ZM63.870,28.142 C62.669,28.533 61.285,28.729 59.720,28.729 C58.023,28.729 56.496,28.494 55.139,28.024 C53.807,27.554 52.672,26.876 51.732,25.989 C50.818,25.101 50.114,24.045 49.618,22.818 C49.148,21.565 48.913,20.156 48.913,18.590 C48.913,16.868 49.174,15.381 49.696,14.128 C50.218,12.849 50.936,11.792 51.850,10.957 C52.789,10.122 53.873,9.509 55.099,9.118 C56.352,8.700 57.697,8.491 59.132,8.491 C59.654,8.491 60.163,8.543 60.659,8.648 C61.155,8.726 61.560,8.831 61.873,8.961 L61.873,2.620 C62.134,2.541 62.552,2.463 63.126,2.385 C63.700,2.280 64.288,2.228 64.888,2.228 C65.462,2.228 65.971,2.267 66.415,2.346 C66.885,2.424 67.276,2.581 67.589,2.815 C67.903,3.050 68.138,3.376 68.294,3.794 C68.451,4.185 68.529,4.707 68.529,5.360 L68.529,23.914 C68.529,25.141 67.955,26.119 66.806,26.850 C66.049,27.346 65.071,27.776 63.870,28.142 ZM61.912,14.167 C61.390,13.854 60.764,13.697 60.033,13.697 C58.623,13.697 57.540,14.102 56.783,14.911 C56.026,15.720 55.647,16.946 55.647,18.590 C55.647,20.208 56.000,21.435 56.705,22.270 C57.409,23.079 58.428,23.483 59.759,23.483 C60.228,23.483 60.646,23.418 61.011,23.288 C61.403,23.131 61.703,22.961 61.912,22.779 L61.912,14.167 ZM43.746,27.202 C42.050,28.220 39.661,28.729 36.581,28.729 C35.198,28.729 33.945,28.598 32.822,28.337 C31.726,28.076 30.773,27.685 29.964,27.163 C29.181,26.641 28.568,25.976 28.124,25.167 C27.706,24.358 27.497,23.418 27.497,22.348 C27.497,20.548 28.032,19.164 29.103,18.199 C30.173,17.233 31.831,16.633 34.075,16.398 L39.205,15.850 L39.205,15.576 C39.205,14.820 38.865,14.285 38.186,13.971 C37.534,13.632 36.581,13.463 35.329,13.463 C34.336,13.463 33.371,13.567 32.431,13.776 C31.491,13.985 30.643,14.245 29.886,14.559 C29.547,14.324 29.259,13.971 29.025,13.502 C28.789,13.006 28.672,12.497 28.672,11.975 C28.672,11.297 28.829,10.762 29.142,10.370 C29.481,9.953 29.990,9.600 30.669,9.313 C31.426,9.026 32.314,8.817 33.332,8.687 C34.376,8.556 35.354,8.491 36.268,8.491 C37.678,8.491 38.957,8.635 40.105,8.922 C41.280,9.209 42.272,9.653 43.081,10.253 C43.916,10.827 44.556,11.571 45.000,12.484 C45.443,13.371 45.665,14.428 45.665,15.655 L45.665,24.423 C45.665,25.101 45.469,25.662 45.078,26.106 C44.712,26.524 44.269,26.889 43.746,27.202 ZM39.244,20.234 L36.425,20.469 C35.694,20.522 35.093,20.678 34.623,20.939 C34.153,21.200 33.919,21.591 33.919,22.113 C33.919,22.635 34.115,23.066 34.506,23.405 C34.924,23.718 35.616,23.875 36.581,23.875 C37.025,23.875 37.508,23.836 38.030,23.757 C38.578,23.653 38.983,23.523 39.244,23.366 L39.244,20.234 ZM20.871,7.317 C19.775,7.317 18.888,6.978 18.209,6.299 C17.556,5.621 17.230,4.786 17.230,3.794 C17.230,2.802 17.556,1.967 18.209,1.289 C18.888,0.610 19.775,0.271 20.871,0.271 C21.968,0.271 22.842,0.610 23.495,1.289 C24.174,1.967 24.513,2.802 24.513,3.794 C24.513,4.786 24.174,5.621 23.495,6.299 C22.842,6.978 21.968,7.317 20.871,7.317 ZM5.049,28.729 C3.691,28.729 2.595,28.520 1.760,28.102 C1.159,27.815 0.716,27.424 0.429,26.928 C0.167,26.432 0.037,25.871 0.037,25.245 C0.037,24.723 0.102,24.266 0.233,23.875 C0.389,23.483 0.572,23.170 0.781,22.935 C1.277,23.040 1.694,23.118 2.034,23.170 C2.399,23.196 2.791,23.209 3.208,23.209 C4.226,23.209 4.957,22.961 5.401,22.466 C5.845,21.944 6.067,21.187 6.067,20.195 L6.067,4.381 C6.354,4.329 6.811,4.264 7.437,4.185 C8.064,4.081 8.664,4.029 9.238,4.029 C9.839,4.029 10.361,4.081 10.804,4.185 C11.274,4.264 11.666,4.420 11.979,4.655 C12.292,4.890 12.527,5.216 12.684,5.634 C12.841,6.051 12.919,6.599 12.919,7.278 L12.919,21.761 C12.919,24.084 12.253,25.832 10.922,27.006 C9.590,28.155 7.633,28.729 5.049,28.729 ZM20.519,9.000 C21.093,9.000 21.602,9.039 22.046,9.118 C22.516,9.196 22.908,9.353 23.221,9.587 C23.534,9.822 23.769,10.148 23.926,10.566 C24.108,10.957 24.200,11.479 24.200,12.132 L24.200,28.063 C23.913,28.115 23.482,28.181 22.908,28.259 C22.359,28.363 21.798,28.416 21.224,28.416 C20.649,28.416 20.127,28.376 19.658,28.298 C19.214,28.220 18.835,28.063 18.522,27.828 C18.209,27.594 17.961,27.280 17.778,26.889 C17.622,26.471 17.543,25.936 17.543,25.284 L17.543,9.353 C17.830,9.300 18.248,9.235 18.796,9.157 C19.370,9.052 19.945,9.000 20.519,9.000 Z" />
                    </svg>
                </div>

            </a>
            <div class="nav-control">
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
                                            <rect fill="#000000" x="4" y="11" width="16" height="2"
                                                rx="1" />
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
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="">
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
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
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
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="">
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
                                            <rect fill="#000000" x="4" y="11" width="16" height="2"
                                                rx="1" />
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
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="32px" height="32px" viewBox="0 0 24 24" version="1.1"
                                        class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
                                                fill="#fff" />
                                            <rect fill="#fff" opacity="0.3" x="10" y="16" width="4"
                                                height="4" rx="2" />
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
                            </li>

                            <li class="nav-item dropdown notification_dropdown">
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

                            </li>
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
                                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header-profile3 " style="">
                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item ai-icon ">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png"
                                                alt="">
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a onclick="window.location.href='{{ route('portfolio') }}'"
                                            class="dropdown-item ai-icon ">
                                            <img src="https://cdn-icons-png.flaticon.com/512/943/943026.png"
                                                alt="">
                                            <span class="ms-2">Portfolio </span>
                                        </a>

                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item ai-icon ">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2698/2698011.png"
                                                alt="">
                                            <span class="ms-2">Settings </span>
                                        </a>
                                        <a onclick="window.location.href='{{ route('logout') }}'"
                                            class="dropdown-item ai-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/15181/15181112.png"
                                                alt="">
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
                <div class="d-flex align-items-center">
                    <h2 class="text-white">Portfolio</h2>
                    {{-- <p class="text-warning ms-2">Welcome {{ $user['name'] }} !</p> --}}
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
                    <div class="col-xl-3 col-xxl-4 col-12">
                        <div class="card portofolio">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">My Profile</h4>
                                <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                    <div class="btn sharp tp-btn" data-bs-toggle="dropdown" aria-expanded="false"
                                        role="button">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a onclick="window.location.href='{{ route('profile') }}'"
                                            class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center my-profile">
                                    <div class="media d-block">
                                        <div class="media-img">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9131/9131529.png"
                                                alt="">
                                            <a onclick="window.location.href='{{ route('profile') }}'"
                                                href="javascript:void(0);"><i class="fas fa-pencil-alt"
                                                    aria-hidden="true"></i></a>
                                        </div>

                                        <h3 class="mt-3 font-w800 text-dark">{{ $user['name'] }}</h3>
                                        <span>{{ $user['email'] }}</span>
                                    </div>
                                    <div class="media-content">
                                        <h4 class="mt-3 font-w400 fs-16 text-dark mb-0">Join on
                                            {{ date('d F Y', strtotime($user['created_at'])) }}</h4>
                                        <button onclick="window.location.href='{{ route('order') }}'"
                                            class="my-3 btn btn-success">View Orders </button>
                                    </div>
                                    <ul class="portofolio-social mb-3">
                                        <li><a href="javascript:void(0);"><i class="fa fa-phone"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <div class="card">
                            <div class="card-header border-0 flex-wrap">
                                <h4 class="card-title">Coin Holding
                                </h4>
                                <div class="d-flex align-items-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        + Add New
                                    </button>

                                    <div class="dropdown custom-dropdown mb-0 ms-3">
                                        <div class="btn sharp tp-btn" data-bs-toggle="dropdown" aria-expanded="false"
                                            role="button">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                    stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="coin-holding">
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <svg class="coin-svg" width="45" height="45"
                                                    viewBox="0 0 60 60" fill="none"
                                                    xmlns=	"http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M30.5231 0.00501884C13.9586 -0.294993 0.304824 12.893 0.00501544 29.4562C-0.294794 46.0194 12.8843 59.695 29.4363 59.995C45.9882 60.295 59.6545 47.107 59.9543 30.5313C60.2541 13.9681 47.075 0.292531 30.5231 0.00501884ZM29.5362 54.3698C16.1073 54.1197 5.37659 42.9943 5.62644 29.5562C5.86378 16.1182 16.9817 5.38024 30.4107 5.61775C43.8521 5.86776 54.5703 16.9932 54.3329 30.4313C54.0956 43.8693 42.9652 54.6073 29.5362 54.3698Z"
                                                        fill="#FF6803" />
                                                    <path
                                                        d="M30.3732 8.11785C18.3184 7.90534 8.33721 17.5432 8.12484 29.6062C8.05364 33.4014 8.96431 36.9903 10.6158 40.1354H17.4876V18.602C17.4876 17.2857 19.2752 16.867 19.8561 18.0483L29.9797 38.5629L40.1032 18.0495C40.6841 16.867 42.4717 17.2857 42.4717 18.602V40.1354H49.3224C50.8589 37.2128 51.7733 33.9127 51.8345 30.3938C52.0469 18.3308 42.428 8.34286 30.3732 8.11785Z"
                                                        fill="#FF6803" />
                                                    <path
                                                        d="M39.9733 41.3855V23.9573L31.099 41.9392C30.6792 42.793 29.2789 42.793 28.8591 41.9392L19.986 23.9573V41.3855C19.986 42.0755 19.4276 42.6355 18.7368 42.6355H12.1773C16.0635 48.0995 22.382 51.7346 29.5862 51.8696C37.0777 52.0022 43.7634 48.327 47.8071 42.6355H41.2225C40.5317 42.6355 39.9733 42.0755 39.9733 41.3855Z"
                                                        fill="#FF6803" />
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h4 class="font-w600 mb-0">Monero</h4>
                                                <p class="mb-0">XMR</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg width="33" height="35" viewBox="0 0 33 35"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="4.71425" height="34.5712" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 33 0)" fill="#13B440" />
                                                    <rect width="4.71425" height="25.1427" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 23.5713 9.42853)" fill="#13B440" />
                                                    <rect width="4.71425" height="10.9999" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 14.1436 23.5713)" fill="#13B440" />
                                                    <rect width="5.31864" height="21.2746" rx="2.65932"
                                                        transform="matrix(-1 0 0 1 5.31836 13.2966)" fill="#13B440" />
                                                </svg>
                                            </span>
                                            <div class="ms-4">
                                                <h4 class=" font-w600 mb-1">$18,783.33</h4>
                                                <div class="d-flex align-items-center">
                                                    <svg class="me-2" width="21" height="14"
                                                        viewBox="0 0 21 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.3291 13C2.24645 11.9157 5.22374 8.72772 6.82538 7L12.8213 10L19.8166 1"
                                                            stroke="#13B440" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <p class="mb-0"><span class="text-success">45%</span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <span class="peity-line" data-width="100%"
                                            style="display: none;">8,7,8,6,9,2,5,7,5,3,8,6,8,7,8,6</span>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="justify-content-end d-flex">
                                            <a href="javascript:void(0);">
                                                <svg width="20" height="20" viewBox="0 0 24 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0002 16.3C5.85019 16.3 1.1252 9.40001 0.900195 9.10001C0.675195 8.80001 0.675195 8.35001 0.900195 8.05001C1.1252 7.75001 5.85019 0.700012 12.0002 0.700012C18.1502 0.700012 22.8752 7.75001 23.1002 8.05001C23.3252 8.35001 23.3252 8.80001 23.1002 9.10001C22.8752 9.40001 18.1502 16.3 12.0002 16.3ZM2.9252 8.57501C4.1252 10.075 7.80019 14.35 12.0002 14.35C16.2002 14.35 19.9502 10.075 21.0752 8.57501C19.8752 7.00001 16.2002 2.57501 12.0002 2.57501C7.80019 2.57501 4.0502 7.00001 2.9252 8.57501Z"
                                                        fill="#717579" />
                                                    <path
                                                        d="M12.0004 13.225C9.37539 13.225 7.27539 11.125 7.27539 8.50003C7.27539 5.87503 9.37539 3.77502 12.0004 3.77502C14.6254 3.77502 16.7254 5.87503 16.7254 8.50003C16.7254 11.125 14.6254 13.225 12.0004 13.225ZM12.0004 5.65003C10.4254 5.65003 9.15039 6.92503 9.15039 8.50003C9.15039 10.075 10.4254 11.35 12.0004 11.35C13.5754 11.35 14.8504 10.075 14.8504 8.50003C14.8504 6.92503 13.5754 5.65003 12.0004 5.65003Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <svg width="16" height="16" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.883 6.53C15.958 6.67 16 6.83 16 7V16C16 18.209 14.21 20 12 20H1C0.448 20 0 19.552 0 19V1C0 0.448 0.448 0 1 0H9C9.17 0 9.33 0.0420006 9.47 0.117001L9.47299 0.118999C9.55099 0.159999 9.624 0.213001 9.69 0.276001L9.707 0.292999L15.707 6.293L15.724 6.31C15.788 6.377 15.84 6.45 15.882 6.527L15.883 6.53ZM8 2H2V18H12C13.105 18 14 17.105 14 16V8H9C8.448 8 8 7.552 8 7V2ZM6 16H10C10.552 16 11 15.552 11 15C11 14.448 10.552 14 10 14H6C5.448 14 5 14.448 5 15C5 15.552 5.448 16 6 16ZM5 12H11C11.552 12 12 11.552 12 11C12 10.448 11.552 10 11 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM12.586 6L10 3.414V6H12.586Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="coin-holding">
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg class="coin-svg" width="45" height="45" viewBox="0 0 60 60"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M29.9797 0C13.4222 0 0 13.4312 0 30C0 46.5688 13.4222 60 29.9797 60C46.5372 60 59.9594 46.5688 59.9594 30C59.9594 13.4312 46.5372 0 29.9797 0ZM29.9797 54.375C16.5475 54.375 5.62119 43.44 5.62119 30C5.62119 16.56 16.5475 5.625 29.9797 5.625C43.4118 5.625 54.3382 16.5588 54.3382 30C54.3382 43.4412 43.4106 54.375 29.9797 54.375Z"
                                                    fill="#F7931A" />
                                                <path
                                                    d="M31.5274 30.9737H27.5913V36.825H31.5274C32.3218 36.825 33.0588 36.5025 33.576 35.9612C34.1169 35.4425 34.4392 34.7062 34.4392 33.8875C34.4404 32.2862 33.1276 30.9737 31.5274 30.9737Z"
                                                    fill="#F7931A" />
                                                <path
                                                    d="M29.9797 8.12496C17.9253 8.12496 8.11949 17.9375 8.11949 30C8.11949 42.0625 17.9253 51.875 29.9797 51.875C42.034 51.875 51.8399 42.0612 51.8399 30C51.8399 17.9387 42.0328 8.12496 29.9797 8.12496ZM34.4279 40.13H31.8497V44.185H29.1452V40.13H27.66V44.185H24.9431V40.13H20.1663V37.585H22.802V22.335H20.1663V19.79H24.9431V15.8162H27.66V19.79H29.1452V15.8162H31.8497V19.79H34.1981C35.5097 19.79 36.7189 20.3312 37.582 21.195C38.4452 22.0587 38.9861 23.2687 38.9861 24.5812C38.9861 27.15 36.9599 29.2462 34.4279 29.3612C37.3971 29.3612 39.7918 31.78 39.7918 34.7512C39.7918 37.7112 37.3984 40.13 34.4279 40.13Z"
                                                    fill="#F7931A" />
                                                <path
                                                    d="M33.2662 27.38C33.7384 26.9075 34.0257 26.2737 34.0257 25.56C34.0257 24.1437 32.8752 22.9912 31.4587 22.9912H27.5913V28.14H31.4587C32.1607 28.14 32.8053 27.84 33.2662 27.38Z"
                                                    fill="#F7931A" />
                                            </svg>
                                            <div class="ms-3">
                                                <h4 class="font-w600 mb-0">BitCoin</h4>
                                                <p class="mb-0">XMR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg width="33" height="35" viewBox="0 0 33 35" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="4.71425" height="34.5712" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 33 0)" fill="#13B440" />
                                                <rect width="4.71425" height="25.1427" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 23.5713 9.42853)" fill="#13B440" />
                                                <rect width="4.71425" height="10.9999" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 14.1436 23.5713)" fill="#13B440" />
                                                <rect width="5.31864" height="21.2746" rx="2.65932"
                                                    transform="matrix(-1 0 0 1 5.31836 13.2966)" fill="#13B440" />
                                            </svg>
                                            <div class="ms-4">
                                                <h4 class=" font-w600 mb-1">$18,783.33</h4>
                                                <div class="d-flex align-items-center">
                                                    <svg class="me-2" width="21" height="14"
                                                        viewBox="0 0 21 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.3291 13C2.24645 11.9157 5.22374 8.72772 6.82538 7L12.8213 10L19.8166 1"
                                                            stroke="#13B440" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <p class="mb-0"><span class="text-success">45%</span> This
                                                        week</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <span class="peity-line" data-width="100%"
                                            style="display: none;">6,7,6,2,7,2,5,7,5,3,8,6,8,7,8,6</span>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="justify-content-end d-flex">
                                            <a href="javascript:void(0);">
                                                <svg width="20" height="20" viewBox="0 0 24 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0002 16.3C5.85019 16.3 1.1252 9.40001 0.900195 9.10001C0.675195 8.80001 0.675195 8.35001 0.900195 8.05001C1.1252 7.75001 5.85019 0.700012 12.0002 0.700012C18.1502 0.700012 22.8752 7.75001 23.1002 8.05001C23.3252 8.35001 23.3252 8.80001 23.1002 9.10001C22.8752 9.40001 18.1502 16.3 12.0002 16.3ZM2.9252 8.57501C4.1252 10.075 7.80019 14.35 12.0002 14.35C16.2002 14.35 19.9502 10.075 21.0752 8.57501C19.8752 7.00001 16.2002 2.57501 12.0002 2.57501C7.80019 2.57501 4.0502 7.00001 2.9252 8.57501Z"
                                                        fill="#717579" />
                                                    <path
                                                        d="M12.0004 13.225C9.37539 13.225 7.27539 11.125 7.27539 8.50003C7.27539 5.87503 9.37539 3.77502 12.0004 3.77502C14.6254 3.77502 16.7254 5.87503 16.7254 8.50003C16.7254 11.125 14.6254 13.225 12.0004 13.225ZM12.0004 5.65003C10.4254 5.65003 9.15039 6.92503 9.15039 8.50003C9.15039 10.075 10.4254 11.35 12.0004 11.35C13.5754 11.35 14.8504 10.075 14.8504 8.50003C14.8504 6.92503 13.5754 5.65003 12.0004 5.65003Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <svg width="16" height="16" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.883 6.53C15.958 6.67 16 6.83 16 7V16C16 18.209 14.21 20 12 20H1C0.448 20 0 19.552 0 19V1C0 0.448 0.448 0 1 0H9C9.17 0 9.33 0.0420006 9.47 0.117001L9.47299 0.118999C9.55099 0.159999 9.624 0.213001 9.69 0.276001L9.707 0.292999L15.707 6.293L15.724 6.31C15.788 6.377 15.84 6.45 15.882 6.527L15.883 6.53ZM8 2H2V18H12C13.105 18 14 17.105 14 16V8H9C8.448 8 8 7.552 8 7V2ZM6 16H10C10.552 16 11 15.552 11 15C11 14.448 10.552 14 10 14H6C5.448 14 5 14.448 5 15C5 15.552 5.448 16 6 16ZM5 12H11C11.552 12 12 11.552 12 11C12 10.448 11.552 10 11 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM12.586 6L10 3.414V6H12.586Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="coin-holding">
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg class="coin-svg" width="45" height="45"
                                                viewBox="0 0 60 60" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M30.5231 0.00501883C13.9586 -0.294993 0.304824 12.893 0.00501543 29.4562C-0.294793 46.0194 12.8843 59.6949 29.4362 59.9949C45.9882 60.2949 59.6545 47.1069 59.9543 30.5312C60.2541 13.9681 47.075 0.29253 30.5231 0.00501883ZM29.5362 54.3697C16.1072 54.1197 5.37659 42.9942 5.62643 29.5562C5.86378 16.1182 16.9817 5.38023 30.4106 5.61774C43.8521 5.86775 54.5702 16.9932 54.3329 30.4312C54.0955 43.8693 42.9651 54.6072 29.5362 54.3697Z"
                                                    fill="#345D9D" />
                                                <path
                                                    d="M30.3756 8.12284C18.3208 7.91034 8.3397 17.5482 8.12734 29.6112C7.90248 41.6617 17.5338 51.6496 29.5886 51.8746C41.6435 52.0871 51.6246 42.4492 51.837 30.3987C52.0493 18.3358 42.4305 8.34785 30.3756 8.12284ZM39.3824 42.6992H19.4951L21.931 29.2112L19.1078 29.7987V27.4986L22.3558 26.8111L24.4669 15.2106H32.3994L30.6005 25.086L33.3737 24.4985V26.7986L30.1758 27.4611L28.327 37.6615H40.8565L39.3824 42.6992Z"
                                                    fill="#345D9D" />
                                            </svg>
                                            <div class="ms-3">
                                                <h4 class="font-w600 mb-0">LiteCoin</h4>
                                                <p class="mb-0">LTC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg width="33" height="35" viewBox="0 0 33 35"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="4.71425" height="34.5712" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 33 0)" fill="#FD5353" />
                                                <rect width="4.71425" height="25.1427" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 23.5713 9.42853)" fill="#FD5353" />
                                                <rect width="4.71425" height="10.9999" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 14.1436 23.5713)" fill="#FD5353" />
                                                <rect width="5.31864" height="21.2746" rx="2.65932"
                                                    transform="matrix(-1 0 0 1 5.31836 13.2966)" fill="#FD5353" />
                                            </svg>
                                            <div class="ms-4">
                                                <h4 class=" font-w600 mb-1">$18,783.33</h4>
                                                <div class="d-flex align-items-center">
                                                    <svg class="me-2" width="21" height="14"
                                                        viewBox="0 0 21 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.3291 13C2.24645 11.9157 5.22374 8.72772 6.82538 7L12.8213 10L19.8166 1"
                                                            stroke="#FD5353" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <p class="mb-0"><span class="text-danger">45%</span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <span class="peity-line2" data-width="100%"
                                            style="display: none;">8,7,8,6,4,2,5,2,5,3,6,6,8,7,6,4</span>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="justify-content-end d-flex">
                                            <a href="javascript:void(0);">
                                                <svg width="20" height="20" viewBox="0 0 24 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0002 16.3C5.85019 16.3 1.1252 9.40001 0.900195 9.10001C0.675195 8.80001 0.675195 8.35001 0.900195 8.05001C1.1252 7.75001 5.85019 0.700012 12.0002 0.700012C18.1502 0.700012 22.8752 7.75001 23.1002 8.05001C23.3252 8.35001 23.3252 8.80001 23.1002 9.10001C22.8752 9.40001 18.1502 16.3 12.0002 16.3ZM2.9252 8.57501C4.1252 10.075 7.80019 14.35 12.0002 14.35C16.2002 14.35 19.9502 10.075 21.0752 8.57501C19.8752 7.00001 16.2002 2.57501 12.0002 2.57501C7.80019 2.57501 4.0502 7.00001 2.9252 8.57501Z"
                                                        fill="#717579" />
                                                    <path
                                                        d="M12.0004 13.225C9.37539 13.225 7.27539 11.125 7.27539 8.50003C7.27539 5.87503 9.37539 3.77502 12.0004 3.77502C14.6254 3.77502 16.7254 5.87503 16.7254 8.50003C16.7254 11.125 14.6254 13.225 12.0004 13.225ZM12.0004 5.65003C10.4254 5.65003 9.15039 6.92503 9.15039 8.50003C9.15039 10.075 10.4254 11.35 12.0004 11.35C13.5754 11.35 14.8504 10.075 14.8504 8.50003C14.8504 6.92503 13.5754 5.65003 12.0004 5.65003Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <svg width="16" height="16" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.883 6.53C15.958 6.67 16 6.83 16 7V16C16 18.209 14.21 20 12 20H1C0.448 20 0 19.552 0 19V1C0 0.448 0.448 0 1 0H9C9.17 0 9.33 0.0420006 9.47 0.117001L9.47299 0.118999C9.55099 0.159999 9.624 0.213001 9.69 0.276001L9.707 0.292999L15.707 6.293L15.724 6.31C15.788 6.377 15.84 6.45 15.882 6.527L15.883 6.53ZM8 2H2V18H12C13.105 18 14 17.105 14 16V8H9C8.448 8 8 7.552 8 7V2ZM6 16H10C10.552 16 11 15.552 11 15C11 14.448 10.552 14 10 14H6C5.448 14 5 14.448 5 15C5 15.552 5.448 16 6 16ZM5 12H11C11.552 12 12 11.552 12 11C12 10.448 11.552 10 11 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM12.586 6L10 3.414V6H12.586Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="coin-holding">
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <svg class="coin-svg" width="45" height="45"
                                                    viewBox="0 0 60 60" fill="none"
                                                    xmlns=	"http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M30.5231 0.00501884C13.9586 -0.294993 0.304824 12.893 0.00501544 29.4562C-0.294794 46.0194 12.8843 59.695 29.4363 59.995C45.9882 60.295 59.6545 47.107 59.9543 30.5313C60.2541 13.9681 47.075 0.292531 30.5231 0.00501884ZM29.5362 54.3698C16.1073 54.1197 5.37659 42.9943 5.62644 29.5562C5.86378 16.1182 16.9817 5.38024 30.4107 5.61775C43.8521 5.86776 54.5703 16.9932 54.3329 30.4313C54.0956 43.8693 42.9652 54.6073 29.5362 54.3698Z"
                                                        fill="#FF6803" />
                                                    <path
                                                        d="M30.3732 8.11785C18.3184 7.90534 8.33721 17.5432 8.12484 29.6062C8.05364 33.4014 8.96431 36.9903 10.6158 40.1354H17.4876V18.602C17.4876 17.2857 19.2752 16.867 19.8561 18.0483L29.9797 38.5629L40.1032 18.0495C40.6841 16.867 42.4717 17.2857 42.4717 18.602V40.1354H49.3224C50.8589 37.2128 51.7733 33.9127 51.8345 30.3938C52.0469 18.3308 42.428 8.34286 30.3732 8.11785Z"
                                                        fill="#FF6803" />
                                                    <path
                                                        d="M39.9733 41.3855V23.9573L31.099 41.9392C30.6792 42.793 29.2789 42.793 28.8591 41.9392L19.986 23.9573V41.3855C19.986 42.0755 19.4276 42.6355 18.7368 42.6355H12.1773C16.0635 48.0995 22.382 51.7346 29.5862 51.8696C37.0777 52.0022 43.7634 48.327 47.8071 42.6355H41.2225C40.5317 42.6355 39.9733 42.0755 39.9733 41.3855Z"
                                                        fill="#FF6803" />
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h4 class="font-w600 mb-0">Monero</h4>
                                                <p class="mb-0">XMR</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg width="33" height="35" viewBox="0 0 33 35"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="4.71425" height="34.5712" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 33 0)" fill="#13B440" />
                                                    <rect width="4.71425" height="25.1427" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 23.5713 9.42853)"
                                                        fill="#13B440" />
                                                    <rect width="4.71425" height="10.9999" rx="2.35713"
                                                        transform="matrix(-1 0 0 1 14.1436 23.5713)"
                                                        fill="#13B440" />
                                                    <rect width="5.31864" height="21.2746" rx="2.65932"
                                                        transform="matrix(-1 0 0 1 5.31836 13.2966)"
                                                        fill="#13B440" />
                                                </svg>
                                            </span>
                                            <div class="ms-4">
                                                <h4 class=" font-w600 mb-1">$18,783.33</h4>
                                                <div class="d-flex align-items-center">
                                                    <svg class="me-2" width="21" height="14"
                                                        viewBox="0 0 21 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.3291 13C2.24645 11.9157 5.22374 8.72772 6.82538 7L12.8213 10L19.8166 1"
                                                            stroke="#13B440" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <p class="mb-0"><span class="text-success">45%</span> This
                                                        week</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <span class="peity-line" data-width="100%"
                                            style="display: none;">8,7,8,6,9,2,5,7,5,3,8,6,8,7,8,6</span>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="justify-content-end d-flex">
                                            <a href="javascript:void(0);">
                                                <svg width="20" height="20" viewBox="0 0 24 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0002 16.3C5.85019 16.3 1.1252 9.40001 0.900195 9.10001C0.675195 8.80001 0.675195 8.35001 0.900195 8.05001C1.1252 7.75001 5.85019 0.700012 12.0002 0.700012C18.1502 0.700012 22.8752 7.75001 23.1002 8.05001C23.3252 8.35001 23.3252 8.80001 23.1002 9.10001C22.8752 9.40001 18.1502 16.3 12.0002 16.3ZM2.9252 8.57501C4.1252 10.075 7.80019 14.35 12.0002 14.35C16.2002 14.35 19.9502 10.075 21.0752 8.57501C19.8752 7.00001 16.2002 2.57501 12.0002 2.57501C7.80019 2.57501 4.0502 7.00001 2.9252 8.57501Z"
                                                        fill="#717579" />
                                                    <path
                                                        d="M12.0004 13.225C9.37539 13.225 7.27539 11.125 7.27539 8.50003C7.27539 5.87503 9.37539 3.77502 12.0004 3.77502C14.6254 3.77502 16.7254 5.87503 16.7254 8.50003C16.7254 11.125 14.6254 13.225 12.0004 13.225ZM12.0004 5.65003C10.4254 5.65003 9.15039 6.92503 9.15039 8.50003C9.15039 10.075 10.4254 11.35 12.0004 11.35C13.5754 11.35 14.8504 10.075 14.8504 8.50003C14.8504 6.92503 13.5754 5.65003 12.0004 5.65003Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <svg width="16" height="16" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.883 6.53C15.958 6.67 16 6.83 16 7V16C16 18.209 14.21 20 12 20H1C0.448 20 0 19.552 0 19V1C0 0.448 0.448 0 1 0H9C9.17 0 9.33 0.0420006 9.47 0.117001L9.47299 0.118999C9.55099 0.159999 9.624 0.213001 9.69 0.276001L9.707 0.292999L15.707 6.293L15.724 6.31C15.788 6.377 15.84 6.45 15.882 6.527L15.883 6.53ZM8 2H2V18H12C13.105 18 14 17.105 14 16V8H9C8.448 8 8 7.552 8 7V2ZM6 16H10C10.552 16 11 15.552 11 15C11 14.448 10.552 14 10 14H6C5.448 14 5 14.448 5 15C5 15.552 5.448 16 6 16ZM5 12H11C11.552 12 12 11.552 12 11C12 10.448 11.552 10 11 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM12.586 6L10 3.414V6H12.586Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="coin-holding">
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg class="coin-svg" width="45" height="45"
                                                viewBox="0 0 60 60" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M30.5231 0.00501883C13.9586 -0.294993 0.304824 12.893 0.00501543 29.4562C-0.294793 46.0194 12.8843 59.6949 29.4362 59.9949C45.9882 60.2949 59.6545 47.1069 59.9543 30.5312C60.2541 13.9681 47.075 0.29253 30.5231 0.00501883ZM29.5362 54.3697C16.1072 54.1197 5.37659 42.9942 5.62643 29.5562C5.86378 16.1182 16.9817 5.38023 30.4106 5.61774C43.8521 5.86775 54.5702 16.9932 54.3329 30.4312C54.0955 43.8693 42.9651 54.6072 29.5362 54.3697Z"
                                                    fill="#627EEA" />
                                                <path
                                                    d="M30.3756 8.12284C18.3208 7.91034 8.3397 17.5482 8.12734 29.6112C7.90248 41.6617 17.5338 51.6496 29.5886 51.8746C41.6435 52.0871 51.6246 42.4492 51.837 30.3987C52.0493 18.3358 42.4305 8.34785 30.3756 8.12284ZM29.9821 14.3581L36.929 26.7598L30.5893 23.2297C30.2108 23.0197 29.7523 23.0197 29.3738 23.2297L23.0341 26.7598L29.9821 14.3581ZM29.9821 45.6381L23.0341 33.2364L29.3738 36.7665C29.5624 36.8715 29.7723 36.924 29.9809 36.924C30.1895 36.924 30.3994 36.8715 30.588 36.7665L36.9277 33.2364L29.9821 45.6381ZM29.9821 34.2426L22.357 29.9975L29.9821 25.7523L37.606 29.9975L29.9821 34.2426Z"
                                                    fill="#627EEA" />
                                            </svg>
                                            <div class="ms-3">
                                                <h4 class="font-w600 mb-0">Ethereum</h4>
                                                <p class="mb-0">ETH</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="d-flex align-items-center">
                                            <svg width="33" height="35" viewBox="0 0 33 35"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="4.71425" height="34.5712" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 33 0)" fill="#13B440" />
                                                <rect width="4.71425" height="25.1427" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 23.5713 9.42853)" fill="#13B440" />
                                                <rect width="4.71425" height="10.9999" rx="2.35713"
                                                    transform="matrix(-1 0 0 1 14.1436 23.5713)" fill="#13B440" />
                                                <rect width="5.31864" height="21.2746" rx="2.65932"
                                                    transform="matrix(-1 0 0 1 5.31836 13.2966)" fill="#13B440" />
                                            </svg>
                                            <div class="ms-4">
                                                <h4 class=" font-w600 mb-1">$18,783.33</h4>
                                                <div class="d-flex align-items-center">
                                                    <svg class="me-2" width="21" height="14"
                                                        viewBox="0 0 21 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.3291 13C2.24645 11.9157 5.22374 8.72772 6.82538 7L12.8213 10L19.8166 1"
                                                            stroke="#13B440" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <p class="mb-0"><span class="text-success">45%</span> This
                                                        week</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coin-box-warper">
                                        <span class="peity-line" data-width="100%"
                                            style="display: none;">8,7,8,6,8,2,5,7,5,3,9,6,8,6,8,6</span>
                                    </div>
                                    <div class="coin-box-warper">
                                        <div class="justify-content-end d-flex">
                                            <a href="javascript:void(0);">
                                                <svg width="20" height="20" viewBox="0 0 24 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0002 16.3C5.85019 16.3 1.1252 9.40001 0.900195 9.10001C0.675195 8.80001 0.675195 8.35001 0.900195 8.05001C1.1252 7.75001 5.85019 0.700012 12.0002 0.700012C18.1502 0.700012 22.8752 7.75001 23.1002 8.05001C23.3252 8.35001 23.3252 8.80001 23.1002 9.10001C22.8752 9.40001 18.1502 16.3 12.0002 16.3ZM2.9252 8.57501C4.1252 10.075 7.80019 14.35 12.0002 14.35C16.2002 14.35 19.9502 10.075 21.0752 8.57501C19.8752 7.00001 16.2002 2.57501 12.0002 2.57501C7.80019 2.57501 4.0502 7.00001 2.9252 8.57501Z"
                                                        fill="#717579" />
                                                    <path
                                                        d="M12.0004 13.225C9.37539 13.225 7.27539 11.125 7.27539 8.50003C7.27539 5.87503 9.37539 3.77502 12.0004 3.77502C14.6254 3.77502 16.7254 5.87503 16.7254 8.50003C16.7254 11.125 14.6254 13.225 12.0004 13.225ZM12.0004 5.65003C10.4254 5.65003 9.15039 6.92503 9.15039 8.50003C9.15039 10.075 10.4254 11.35 12.0004 11.35C13.5754 11.35 14.8504 10.075 14.8504 8.50003C14.8504 6.92503 13.5754 5.65003 12.0004 5.65003Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <svg width="16" height="16" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.883 6.53C15.958 6.67 16 6.83 16 7V16C16 18.209 14.21 20 12 20H1C0.448 20 0 19.552 0 19V1C0 0.448 0.448 0 1 0H9C9.17 0 9.33 0.0420006 9.47 0.117001L9.47299 0.118999C9.55099 0.159999 9.624 0.213001 9.69 0.276001L9.707 0.292999L15.707 6.293L15.724 6.31C15.788 6.377 15.84 6.45 15.882 6.527L15.883 6.53ZM8 2H2V18H12C13.105 18 14 17.105 14 16V8H9C8.448 8 8 7.552 8 7V2ZM6 16H10C10.552 16 11 15.552 11 15C11 14.448 10.552 14 10 14H6C5.448 14 5 14.448 5 15C5 15.552 5.448 16 6 16ZM5 12H11C11.552 12 12 11.552 12 11C12 10.448 11.552 10 11 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM12.586 6L10 3.414V6H12.586Z"
                                                        fill="#717579" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card h-auto">
                            <div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
                                <div class="mb-3">
                                    <h4 class="card-title">Recent Activity</h4>
                                    <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-yesterday-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-Yesterday" type="button"
                                            role="tab" aria-controls="pills-Yesterday"
                                            aria-selected="true">Yesterday</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-today-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-today" type="button" role="tab"
                                            aria-controls="pills-today" aria-selected="false">Today</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content pt-0 pb-sm-0 pb-3 ">

                                <div class="tab-pane fade show active" id="pills-Yesterday" role="tabpanel"
                                    aria-labelledby="pills-yesterday-tab">
                                    <div class="table-responsive">
                                        <table class="table portfolio-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end"><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="pills-today" role="tabpanel"
                                    aria-labelledby="pills-today-tab">
                                    <div class="table-responsive">
                                        <table class="table portfolio-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end"><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#13B440" />
                                                            <path
                                                                d="M25.4811 24.6342L25.4811 24.6342L30.3542 19.7375C30.3568 19.7348 30.3594 19.7323 30.3617 19.73M25.4811 24.6342L30.7114 20.0874L30.3584 19.7333C30.3677 19.724 30.3754 19.7171 30.3786 19.7143L30.3797 19.7133C30.3773 19.7154 30.3706 19.7213 30.3625 19.7292C30.3622 19.7295 30.362 19.7297 30.3617 19.73M25.4811 24.6342C24.9211 25.1969 24.9232 26.107 25.486 26.6671C26.0487 27.2272 26.9588 27.225 27.5189 26.6623L27.5189 26.6623L29.9375 24.2319M25.4811 24.6342L29.9375 24.2319M30.3617 19.73C30.921 19.1741 31.8276 19.1723 32.3887 19.7304C32.3899 19.7316 32.3912 19.7328 32.3924 19.7341L32.3939 19.7355L32.406 19.7477L37.2689 24.6341L36.9145 24.9868L37.2689 24.6342C37.8288 25.1968 37.8269 26.107 37.264 26.6671C36.7013 27.2271 35.7911 27.225 35.2311 26.6623L35.2311 26.6623L32.8125 24.232L32.8125 42.875C32.8125 43.6689 32.1689 44.3125 31.375 44.3125C30.5811 44.3125 29.9375 43.6689 29.9375 42.875L29.9375 24.2319M30.3617 19.73C30.3603 19.7314 30.3589 19.7328 30.3574 19.7343L29.9375 24.2319M32.3925 19.7342C32.393 19.7346 32.3934 19.7351 32.3939 19.7355L32.3925 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="63" height="63" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect y="-6.10352e-05" width="63" height="63"
                                                                rx="31.5" fill="#FD5353" />
                                                            <path
                                                                d="M37.2694 38.9907L37.2694 38.9907L32.3963 43.8874C32.3936 43.8901 32.3911 43.8926 32.3888 43.8949M37.2694 38.9907L32.0391 43.5375L32.3921 43.8916C32.3828 43.9009 32.3751 43.9078 32.3719 43.9106L32.3707 43.9116C32.3732 43.9095 32.3799 43.9036 32.388 43.8957C32.3883 43.8954 32.3885 43.8952 32.3888 43.8949M37.2694 38.9907C37.8294 38.428 37.8273 37.5179 37.2645 36.9578C36.7018 36.3977 35.7917 36.3999 35.2316 36.9626L35.2316 36.9626L32.813 39.393M37.2694 38.9907L32.813 39.393M32.3888 43.8949C31.8295 44.4508 30.9229 44.4526 30.3618 43.8945C30.3606 43.8933 30.3593 43.8921 30.358 43.8908L30.3566 43.8894L30.3445 43.8772L25.4816 38.9907L25.836 38.638L25.4816 38.9907C24.9217 38.4281 24.9236 37.5179 25.4865 36.9578C26.0492 36.3978 26.9593 36.3999 27.5194 36.9626L27.5194 36.9626L29.938 39.3929L29.938 20.7499C29.938 19.956 30.5816 19.3124 31.3755 19.3124C32.1694 19.3124 32.813 19.956 32.813 20.7499L32.813 39.393M32.3888 43.8949C32.3902 43.8935 32.3916 43.8921 32.393 43.8906L32.813 39.393M30.358 43.8907C30.3575 43.8903 30.3571 43.8898 30.3566 43.8893L30.358 43.8907Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Today">
                                    <div class="table-responsive">
                                        <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td><a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-dark"
                                                            href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link  text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$7,762</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success"
                                                            href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <svg width="50" height="50" viewBox="0 0 63 63"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="63" height="63" rx="14"
                                                                fill="#625794" />
                                                            <path
                                                                d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                fill="white" stroke="white" />
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-dark">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-danger"
                                                            href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card overflow-hidden h-auto">
                                    <div class="card-body pb-4">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-5">
                                                <h4 class="card-title mb-0">Weekly Summary</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex mb-3 align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#2BC155" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">30%</span>
                                                    <span class="fs-14">Succesfull Market</span>
                                                </div>
                                                <div class="d-flex mb-3 align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#FD5353" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">46%</span>
                                                    <span class="fs-14">Appllication Answered</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <svg width="23" height="16" viewBox="0 0 23 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="-3.05176e-05" width="22.2609" height="16"
                                                            rx="8" fill="#D7D7D7" />
                                                    </svg>
                                                    <span class="fs-16 text-dark mx-2 font-w600">10%</span>
                                                    <span class="fs-14">Pending</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-7 align-self-center"
                                                style="position: relative;">
                                                <div id="columnChart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="align-items-center d-flex justify-content-between">
                                                    <div class="c-heading">
                                                        <span
                                                            class="text-dark font-w600 mb-2 d-block text-nowrap ">345</span>
                                                        <p class="mb-0 font-w500 text-nowrap">Transactions</p>
                                                    </div>
                                                    <div
                                                        class="d-inline-block position-relative donut-chart-sale mb-0">
                                                        <span class="donut1"
                                                            data-peity='{ "fill": ["rgb(9, 60, 189)", "rgba(245, 245, 245, 1)"],   "innerRadius": 40, "radius": 10}'>5/8</span>
                                                        <small class="text-dark">62%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12   col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="align-items-center d-flex justify-content-between">
                                                    <div class="c-heading">
                                                        <span class="text-dark font-w600 mb-2 d-block">4,563</span>
                                                        <p class="mb-0 font-w500">Income</p>
                                                    </div>
                                                    <div
                                                        class="d-inline-block position-relative donut-chart-sale mb-0">
                                                        <span class="donut1"
                                                            data-peity='{ "fill": ["rgba(255, 97, 117, 1)", "rgba(245, 245, 245, 1)"],   "innerRadius": 40, "radius": 10}'>3/8</span>
                                                        <small class="text-dark">38%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Current Graph</h4>
                                        <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                            <div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button"
                                                aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="var(--text-dark)" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <div id="pieChart" class="d-inline-block"></div>
                                        <div class="chart-items">
                                            <div class=" col-xl-12 col-sm-12">
                                                <div class="row text-dark text-start fs-13 mt-4">
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#3C8AFF" />
                                                        </svg>
                                                        Food
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#FF5166" />
                                                        </svg>
                                                        Rent
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#ED3DD1" />
                                                        </svg>
                                                        Transport
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#2BC844" />
                                                        </svg>
                                                        Installment
                                                    </span>
                                                    <span class="mb-3 col-6 pe-0">
                                                        <svg class="me-2" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                fill="#FFEE54" />
                                                        </svg>
                                                        Investment
                                                    </span>
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
    <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="js/dashboard/portfolio.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/portofolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:17 GMT -->

</html>
