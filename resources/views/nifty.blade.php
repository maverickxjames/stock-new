@php
$user=Auth::user();

@endphp

<?php
$url = "https://ow-scanx-analytics.dhan.co/customscan/fetchdt";

$headers = [
    'Content-Type: application/json; charset=UTF-8',
    'Accept: */*',
    'User-Agent: Mozilla/5.0'
];

$data = [
    "data" => [
        "sort" => "Mcap",
        "sorder" => "desc",
        "count" => 50,  // Reduced for testing
        "params" => [
            [
                "field" => "idxlist.Indexid",
                "op" => "",
                "val" => "13"
            ],
            [
                "field" => "Exch",
                "op" => "",
                "val" => "NSE"
            ],
            [
                "field" => "OgInst",
                "op" => "",
                "val" => "ES"
            ]
        ],
        "fields" => [
            "Isin",
            "DispSym",
            "Mcap",
            "Pe",
            "DivYeild",
            "Revenue",
            "Year1RevenueGrowth",
            "NetProfitMargin",
            "YoYLastQtlyProfitGrowth",
            "EBIDTAMargin",
            "volume",
            "PricePerchng1year",
            "PricePerchng3year",
            "PricePerchng5year",
            "Ind_Pe",
            "Pb",
            "DivYeild",
            "Eps",
            "DaySMA50CurrentCandle",
            "DaySMA200CurrentCandle",
            "DayRSI14CurrentCandle",
            "ROCE",
            "Roe",
            "Sym",
            "PricePerchng1mon",
            "PricePerchng3mon"
        ],
        "pgno" => 1  // Reduced page number for testing
    ]
];

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the request
$response = curl_exec($ch);
$marketData = ($response);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jiade.dexignlab.com/xhtml/ico-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:20 GMT -->

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

	<base href="/">

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
	<link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
	<!-- Datatable -->
	<link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">



	<!-- Style css -->
	<link class="main-css" href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

	<!-- Style css -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		body {
			font-family: Arial, sans-serif;
		}

		#chart {
			width: 100%;
			height: 400px;
		}

		#symbol-name {
			text-align: center;
			font-size: 24px;
			margin-top: 10px;
		}

		.price-info {
			text-align: center;
			font-size: 18px;
			margin-bottom: 10px;
		}

		.toolbar {
			display: flex;
			gap: 10px;
			margin-bottom: 10px;
			justify-content: center;
		}

		.button {
			padding: 5px 10px;
			border: 1px solid #ccc;
			cursor: pointer;
			background-color: #f7f7f7;
			font-size: 14px;
		}

		.button.active {
			background-color: #d1e7ff;
		}

		.stock-card {
			width: 100%;
			padding: 20px;
			border-radius: 12px;
			/* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
			background-color: #fff;
			font-family: Arial, sans-serif;
			color: #333;
		}

		.stock-header {
			display: flex;
			flex-direction: column;
		}

		.stock-header h2 {
			font-size: 1.5em;
			font-weight: 600;
			margin: 0;
		}

		.stock-change {
			display: flex;
			align-items: center;
			font-size: 1em;
		}

		.down-icon {
			color: #d9534f;
			font-size: 1.2em;
			margin-right: 5px;
		}

		.text-danger {
			color: #d9534f;
			font-weight: 600;
		}

		.text-muted {
			color: #6c757d;
			font-size: 0.9em;
			margin-left: 5px;
		}

		.stock-body {
			margin-top: 20px;
		}

		.trade-price p,
		.high p,
		.low p {
			font-size: 0.9em;
			color: #888;
			margin: 0;
		}

		.price-value {
			font-size: 1.8em;
			font-weight: 600;
			color: #007bff;
		}

		.high-low {
			display: flex;
			justify-content: space-between;
			margin-top: 15px;
		}

		.high-value {
			color: #28a745;
			font-weight: 600;
		}

		.low-value {
			color: #dc3545;
			font-weight: 600;
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
		<!--**********************************
            Nav header start
        ***********************************-->
		 <x-nav-header />
		<!--**********************************
            Nav header end
        ***********************************-->

		<x-header />

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
											<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="">
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end header-profile3 " style="">
										<a onclick="window.location.href='{{ route('profile') }}'"
											class="dropdown-item ai-icon ">
											<img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="">
											<span class="ms-2">Profile </span>
										</a>
										<a onclick="window.location.href='{{ route('portfolio') }}'"
											class="dropdown-item ai-icon ">
											<img src="https://cdn-icons-png.flaticon.com/512/943/943026.png" alt="">
											<span class="ms-2">Portfolio </span>
										</a>

										<a onclick="window.location.href='{{ route('profile') }}'"
											class="dropdown-item ai-icon ">
											<img src="https://cdn-icons-png.flaticon.com/512/2698/2698011.png" alt="">
											<span class="ms-2">Settings </span>
										</a>
										<a onclick="window.location.href='{{ route('logout') }}'"
											class="dropdown-item ai-icon">
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
				<div class="d-flex align-items-center">
					<h2 class="text-white">Nifty 50</h2>
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
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-8 col-12">
						<div class="card">
							<div class="stock-card">
								<div class="stock-header">
									<div class="d-flex align-items-center gap-3">
										<div>
											<img src="https://assets.upstox.com/content/assets/images/logos/NSE_INDEX%7CNifty%2050.png"
												width="40px" height="40px" style="border-radius:50%" alt="">
										</div>
										<h4 class="stock-name mb-0">Nifty 50 </h4>


									</div>

									<div class="stock-change">
										<span id="change-icon" class="down-icon">▼</span>
										<span id="percentage-change" class="text-danger">-0.21%</span>
										<small id="point-change" class="text-muted">(-51.15 pts)</small>
									</div>
								</div>

								<div class="stock-body">
									<div class="trade-price">
										<p>Last Trade Price:</p>
										<h3 id="last-trade-price" class="price-value">24,148.2</h3>
									</div>
									<div class="d-flex align-items-center gap-3">
										<div class="high">
											<p>1-Year High:</p>
											<h4 id="one-year-high" class="high-value">26,277.35</h4>
										</div>
										<div class="low">
											<p>1-Year Low:</p>
											<h4 id="one-year-low" class="low-value">19,329.45</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pt-0 custome-tooltip pe-3">
								<div id="chart" class="revenueMap"></div>
							</div>
						</div>


					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title mb-0">Future Trade</h4>
							</div>
							<div class="card-body pt-2">
								<!-- Available Balance -->
								<div class="d-flex align-items-center justify-content-between mt-3 mb-2">
									<span class="small text-muted">Available Balance</span>
									<span class="text-dark">₹210,800</span>
								</div>

								<!-- Buy/Sell Form -->
								<form>
									<!-- Order Type Selector -->
									<div class="mb-3">
										<label class="form-label">Order Type</label>
										<select class="form-select">
											<option value="market" selected>Market Order</option>
											<option value="limit">Limit Order</option>
											<option value="intraday">Intraday</option>
										</select>
									</div>

									<!-- Price Input -->
									<div class="input-group mb-3">
										<span class="input-group-text">Price</span>
										<input type="text" class="form-control" placeholder="Enter price">
										<span class="input-group-text">₹</span>
									</div>

									<!-- Size Input -->
									<div class="input-group mb-3">
										<span class="input-group-text">Size</span>
										<input type="text" class="form-control" placeholder="Enter size">
										<button class="btn btn-primary btn-outline-primary dropdown-toggle"
											type="button" data-bs-toggle="dropdown" aria-expanded="false">Lot</button>
										<ul class="dropdown-menu dropdown-menu-end">
											<li><a class="dropdown-item" href="#">Shares</a></li>
											<li><a class="dropdown-item" href="#">Units</a></li>
										</ul>
									</div>

									<!-- Take Profit & Stop Loss -->
									{{-- <div class="mb-3 mt-4">
										<label class="form-label">Take Profit / Stop Loss</label>
										<!-- Take Profit -->
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Take Profit (₹)">
											<button class="btn btn-primary btn-outline-primary dropdown-toggle"
												type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Mode</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Last</a></li>
												<li><a class="dropdown-item" href="#">Mark</a></li>
											</ul>
										</div>
										<!-- Stop Loss -->
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Stop Loss (₹)">
											<button class="btn btn-primary btn-outline-primary dropdown-toggle"
												type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Mode</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Last</a></li>
												<li><a class="dropdown-item" href="#">Mark</a></li>
											</ul>
										</div>
									</div> --}}

									<!-- Margin Type -->
									<div class="mb-3">
										<label class="form-label">Margin Type</label>
										<select class="form-select">
											<option value="1x" selected>1x (No Margin)</option>
											<option value="2x">2x</option>
											<option value="5x">5x</option>
											<option value="10x">10x</option>
										</select>
									</div>

									<!-- Stop Price -->
									<div class="input-group mb-3">
										<span class="input-group-text">Stop Price</span>
										<input type="text" class="form-control" placeholder="Enter stop price">
										<button class="btn btn-primary btn-outline-primary dropdown-toggle"
											type="button" data-bs-toggle="dropdown" aria-expanded="false">Mode</button>
										<ul class="dropdown-menu dropdown-menu-end">
											<li><a class="dropdown-item" href="#">Limit</a></li>
											<li><a class="dropdown-item" href="#">Market</a></li>
										</ul>
									</div>

									<!-- Cost and Max Info -->
									<div class="d-flex justify-content-between flex-wrap">
										<div class="d-flex">
											<div>Cost:</div>
											<div class="text-muted px-1"> ₹0.00</div>
										</div>
										<div class="d-flex">
											<div>Max:</div>
											<div class="text-muted px-1"> ₹6,000</div>
										</div>
									</div>

									<!-- Buy/Sell Buttons -->
									<div class="mt-3 d-flex justify-content-between">
										<button type="button"
											class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</button>
										<button type="button"
											class="btn btn-danger btn-sm light text-uppercase btn-block">SELL</button>
									</div>
								</form>
							</div>
						</div>
					</div>


					<div class="col-xl-12">

						<h1>Nifty 50 Companies List</h1>
						<!-- Row -->
						<div class="row">
							<!-- column -->
							<?php
                            $marketData = json_decode($marketData, true);
                            ?>

							@if ($marketData == null)
								
							@else
							@foreach ($marketData['data'] as $index => $item)
							<!-- print item on console -->

							<?php 
                            $Seo = $item['Seosym'];
                            $id = $item['Isin'];
                            $data = json_encode($item);
                            ?>

							<div onclick="window.location.href='{{ route('nifty-inner',['slug'=>$Seo,'id'=>$id]) }}'"
								class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">




								<div class="card pull-up" style="cursor: pointer;">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<img src="https://s3tv-symbol.dhan.co/symbols/<?= $item['Sym'] ?>.svg"
													alt="">
											</a>
											<div class="ms-3">
												<a href="javascript:void(0)">
													<h4 class="card-title mb-0">
														<?= $item['Sym'] ?>
													</h4>
												</a>
												<span>
													<?= $item['DispSym'] ?>
												</span>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<p class="mb-0 fs-14 text-dark font-w600">
													<?php echo "₹ " . number_format($item['Mcap'], 2); ?>
												</p>
												<span class="fs-12">Market Cap (Cr.)</span>
											</div>
											<div>
												<?php
                                                    if ($item['PPerchange'] >= 0) {
                                                    ?>
												<p class="mb-0 fs-14 text-success font-w600">
													<?php echo number_format($item['PPerchange'], 2) . " %" ?>
												</p>
												<?php
                                                    } else {
                                                    ?>
												<p class="mb-0 fs-14 text-danger font-w600">
													<?php echo number_format($item['PPerchange'], 2) . " %" ?>
												</p>
												<?php
                                                    }
                                                    ?>
												<span class="fs-12">Change %</span>
											</div>
										</div>
									</div>
								</div>

							</div>
							@endforeach
							@endif

							







							<div id="stock-container" class="row"></div>


						</div>
					</div>


				</div>
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->

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

	<!--**********************************
        Scripts
    ***********************************-->
	{{-- <script src="/vendor/global/global.min.js"></script> --}}
	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	{{-- jquary cdn --}}



	<script src="{{ asset('js/dashboard/future.js') }}"></script>

	<!-- Datatable -->
	<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>


	<!-- Dashboard 1 -->

	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
		document.querySelectorAll('.card.pull-up').forEach(function(card) {
            card.addEventListener('click', function() {
                this.closest('form').submit(); // Submit the closest form
            });
        });
	</script>


	<script>
		$(document).ready(function () {
		// Fetch NSE data
		$.ajax({
    url: '/api/fetchstockinfo/nse',
    type: 'GET',
    success: function (response) {
        let nsestockData = response.stock;

        $('#stock-name').text(nsestockData['DispSym']);
        $('#change-icon').text(nsestockData['PPerchange'] < 0 ? '▼' : '▲');
        $('#percentage-change').text(nsestockData['PPerchange'].toFixed(2) + '%').toggleClass('text-danger', nsestockData['PPerchange'] < 0);
        $('#point-change').text('(' + nsestockData['Pchange'].toFixed(2) + ' pts)');
        $('#last-trade-price').text('₹'+ nsestockData['Ltp'].toFixed(1));
        $('#one-year-high').text('₹'+ nsestockData['High1Yr'].toFixed(2));
        $('#one-year-low').text('₹'+ nsestockData['Low1Yr'].toFixed(2));
    },
    error: function (error) {
        console.error("Error fetching NSE stock data:", error);
    }
});

		
	});
	</script>


	<script>
		// Initialize chart
	const chartContainer = document.getElementById("chart");
	const chart = LightweightCharts.createChart(chartContainer, {
		layout: { backgroundColor: "#ffffff", textColor: "#333" },
		grid: { vertLines: { color: "#e1e1e1" }, horzLines: { color: "#e1e1e1" } },
		priceScale: { borderColor: "#cccccc" },
		timeScale: { borderColor: "#cccccc" },
	});

	// Add candlestick series
	const candleSeries = chart.addCandlestickSeries({
		upColor: "#4caf50",
		downColor: "#f44336",
		borderUpColor: "#4caf50",
		borderDownColor: "#f44336",
		wickUpColor: "#4caf50",
		wickDownColor: "#f44336",
	});

  

	// Format data function
	function formatData(data) {
		return data.map(([timestamp, open, high, low, close]) => ({
			time: Math.floor(timestamp / 1000),
			open, high, low, close,
		}));
	}

	 // Update the Last Traded Price (LTP) in the chart
	 function updateLTP(latestData) {
        const lastTradePriceElement = document.getElementById('last-trade-price');
        if (latestData && lastTradePriceElement) {
			console.log(latestData)
            lastTradePriceElement.textContent = `₹${latestData.close.toFixed(2)}`;
        }
    }

	// Fetch data
	async function fetchData() {
		try {
			const response = await fetch("/fetch-nifty50-stock-data");
			if (!response.ok) throw new Error("Network response was not ok");

			const rawData = await response.json();
			
			const formattedData = formatData(rawData);
			console.log(formattedData)

			if (formattedData.length === 0) throw new Error("No valid data available");

			candleSeries.setData(formattedData);

			 // Update LTP from the last entry in chart data
			 const latestData = formattedData[formattedData.length - 1];
			 console.log(latestData)
            updateLTP(latestData);
		} catch (error) {
			console.error("Error fetching or setting data:", error);
			// Fallback data
			 // Fallback data
			 const fallbackData = [
                [1696155600000, 25788.45, 25907.6, 25788.05, 25861.3],
                [1696155660000, 25861.3, 25873.0, 25822.35, 25824.05],
                [1696155720000, 25824.6, 25831.8, 25743.45, 25759.35],
            ];
            const formattedFallbackData = formatData(fallbackData);

            candleSeries.setData(formattedFallbackData);

            const latestFallbackData = formattedFallbackData[formattedFallbackData.length - 1];
            updateLTP(latestFallbackData);
		}
	}

	// Fetch initial data and set timeframe
	fetchData();
	function setTimeFrame(timeFrame) {
		fetchData(); // This function should ideally use `timeFrame` to adjust the API call
	}
	</script>


</body>


</html>