@php
$user=Auth::user();
@endphp

<?php
use App\Models\Stockdata;

?>

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
// $curl_close($ch);
$marketDataArray = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    return response()->json(['error' => 'Invalid JSON response'], 400);
}
$filteredData = [];
if (isset($marketDataArray['data']) && is_array($marketDataArray['data'])) {
    // Define the ISIN to filter
    // $targetIsin = "INE090A01021"; // Example ISIN
	$targetIsin = $id;

    // Filter the array using array_filter
    $filteredData = array_filter($marketDataArray['data'], function ($item) use ($targetIsin) {
        return isset($item['Isin']) && $item['Isin'] === $targetIsin;
    });

    // Reset the array keys
    $filteredData = array_values($filteredData);
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TradingView Chart with Data</title>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
	</style>
</head>

<body>




	<div id="main-wrapper">
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

		<?php
				$data = Stockdata::where('isin', $id)->get();
				foreach ($data as $datas) {

				
					$stockname = $datas->companyName;
					$img = $datas->logo;
				}
		?>
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-8 col-12">
						@php
						$filteredData=json_encode($filteredData[0]);
						echo "<script>
							console.log(" . $filteredData . ");
						</script>";
						@endphp
					</div>



					<div class="col-xl-8 col-12">
						@php
						$decodedData = json_decode($filteredData, true); // Decode JSON to array
						echo "<script>
							console.log(" . $decodedData['Ltp'] . ");
						</script>";
						@endphp
						<div class="card">
							@if(!empty($decodedData) && is_array($decodedData))

							<div class="card-header border-0 d-block pb-0">
								<!-- Stock Info Header -->
								<div class="d-flex align-items-center gap-3 mb-3">
									<img src="{{ $img }}" width="40px" height="40px" alt="Stock Logo"
										class="rounded-circle">
									<h2 class="card-title">{{ $stockname }}</h2>
								</div><!-- Stock Market Data -->
								<div class="d-flex flex-wrap ">
									<!-- Last Trade Price -->
									<div class="income data col-lg-3 col-md-6 col-12 mb-3">
										<span>Last Trade Price</span>
										<h4>₹ {{ number_format($decodedData['Ltp'], 2) }}</h4>
									</div>

									<!-- Change (Price & Percentage) -->
									<div class="price data col-lg-3 col-md-6 col-12 text-lg-center mb-3">
										<span>Change</span>
										<h4 class="d-flex align-items-center justify-content-lg-center">


											@if($decodedData['PPerchange'] > 0)
											<span class="ms-2 text-success">
												<img src="https://cdn-icons-png.flaticon.com/512/8563/8563470.png"
													alt="Up" width="16" height="16">
												{{ number_format($decodedData['PPerchange'], 2) }}%
											</span>
											@else
											<span class="ms-2 text-danger">
												<img src="https://cdn-icons-png.flaticon.com/512/10009/10009225.png"
													alt="Down" width="10" height="10">
												{{ number_format($decodedData['PPerchange'], 2) }}%
											</span>
											@endif

											@if($decodedData['Pchange'] > 0)
											<span class="ms-2 text-success">
												{{ number_format($decodedData['Pchange'], 2) }}
											</span>
											@else
											<span class="ms-2 text-danger">
												{{ number_format($decodedData['Pchange'], 2) }}
											</span>
											@endif
										</h4>
									</div>

									<!-- PE Ratio -->
									<div class="pe-ratio data col-lg-3 col-md-6 col-12 mb-3">
										<span>PE Ratio</span>
										<h4>{{ number_format($decodedData['Pe'], 2) }}</h4>
									</div>

									<!-- Market Cap -->
									<div class="market-cap data col-lg-3 col-md-6 col-12 mb-3">
										<span>Market Cap</span>
										<h4>₹ {{ number_format($decodedData['Mcap'] / 100000, 2) }} Lakh Cr</h4>
									</div>
								</div>



								<!-- Stock Market Data -->
								<div class="d-flex justify-content-between">
									<div class="market-data">


										<!-- Dividend Yield -->
										<div class="div-yield data">
											<span>Dividend Yield</span>
											<h4>{{ number_format($decodedData['DivYeild'], 2) }}%</h4>
										</div>

										<!-- SMA50 and SMA200 -->
										<div class="moving-averages data">
											<span>50-Day SMA</span>
											<h4>₹ {{ number_format($decodedData['DaySMA50CurrentCandle'], 2) }}</h4>

										</div>
										<div class="moving-averages data">

											<span>200-Day SMA</span>
											<h4>₹ {{ number_format($decodedData['DaySMA200CurrentCandle'], 2) }}</h4>
										</div>
									</div>

									<!-- Dropdown for Time Range -->
									<div class="d-flex align-items-center">
										<div class="dropdown bootstrap-select">
											<select class="default-select form-control w-100" aria-label="Default"
												tabindex="0">
												<option selected="">This Month</option>
												<option value="1">Weeks</option>
												<option value="2">Today</option>
											</select>
										</div>
									</div>
								</div>
							</div>



							@else
							<p>No data available.</p>
							@endif



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
								<div class="d-flex align-items-center justify-content-between mt-3 mb-2">
									<span class="small text-muted">Avbl Balance</span>
									<span class="text-dark">210.800 USDT</span>
								</div>
								<form>
									<div class="input-group mb-3">
										<span class="input-group-text">Price</span>
										<input type="text" class="form-control">
										<span class="input-group-text">USDT</span>
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text">Size</span>
										<input type="text" class="form-control">
										<button class="btn btn-primary btn-outline-primary dropdown-toggle"
											type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT
										</button>
										<ul class="dropdown-menu dropdown-menu-end">
											<li><a class="dropdown-item" href="#">USDT</a></li>
											<li><a class="dropdown-item" href="#">BTC</a></li>
										</ul>
									</div>
									<div class="mb-3 mt-4">
										<label class="form-label">TP/SL</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Take Profit">
											<button
												class="btn btn-primary btn-primary btn-outline-primary dropdown-toggle"
												type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Mark</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Last</a></li>
												<li><a class="dropdown-item" href="#">Mark</a></li>
											</ul>
										</div>
										<div class="input-group mb-3"><input type="text" class="form-control"
												placeholder="Stop Loss">
											<button class="btn btn-primary btn-outline-primary dropdown-toggle"
												type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Mark</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Last</a></li>
												<li><a class="dropdown-item" href="#">Mark</a></li>
											</ul>
										</div>
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text">Stop Price</span>
										<input type="text" class="form-control">
										<button class="btn btn-primary btn-outline-primary dropdown-toggle"
											type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
										<ul class="dropdown-menu dropdown-menu-end">
											<li><a class="dropdown-item" href="#">Limit</a></li>
											<li><a class="dropdown-item" href="#">Mark</a></li>
										</ul>
									</div>
									<div class="d-flex justify-content-between flex-wrap">
										<div class="d-flex">
											<div class="">Cost</div>
											<div class="text-muted px-1"> 0.00 USDT</div>
										</div>
										<div class="d-flex">
											<div class="">Max</div>
											<div class="text-muted px-1"> 6.00 USDT </div>
										</div>
									</div>
									<div class="mt-3 d-flex justify-content-between">
										<a href="javascript:void(0)"
											class="btn btn-success btn-sm light text-uppercase me-3 btn-block">BUY</a>
										<a href="javascript:void(0)"
											class="btn btn-danger btn-sm light text-uppercase btn-block">Sell</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title mb-2">Order Book</h4>
							</div>
							<div class="card-body pt-2 dlab-scroll height400">
								<table class="table shadow-hover orderbookTable">
									<thead>
										<tr>
											<th>Price(USDT)</th>
											<th>Size(USDT)</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<span class="text-success">19972.43</span>
											</td>
											<td>0.0488</td>
											<td>6.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-danger">20972.43</span>
											</td>
											<td>0.0588</td>
											<td>5.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-success">19972.43</span>
											</td>
											<td>0.0488</td>
											<td>6.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-success">19850.20</span>
											</td>
											<td>0.0388</td>
											<td>7.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-danger">20972.43</span>
											</td>
											<td>0.0588</td>
											<td>5.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-danger">20972.43</span>
											</td>
											<td>0.0588</td>
											<td>5.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-success">19972.43</span>
											</td>
											<td>0.0488</td>
											<td>6.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-success">19850.20</span>
											</td>
											<td>0.0388</td>
											<td>7.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-danger">20972.43</span>
											</td>
											<td>0.0588</td>
											<td>5.8312</td>
										</tr>
										<tr>
											<td>
												<span class="text-danger">20972.43</span>
											</td>
											<td>0.0588</td>
											<td>5.8312</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="card">
							<div class="card-header border-0 pb-3 flex-wrap">
								<h4 class="card-title">Trade Status</h4>
								<nav>
									<div class="nav nav-pills light" id="nav-tab" role="tablist">
										<button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab"
											data-bs-target="#nav-order" type="button" role="tab"
											aria-selected="true">Order</button>
										<button class="nav-link" id="nav-histroy-tab" data-bs-toggle="tab"
											data-bs-target="#nav-history" type="button" role="tab"
											aria-selected="false">Order History</button>
										<button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab"
											data-bs-target="#nav-trade" type="button" role="tab"
											aria-selected="false">Trade Histroy</button>
									</div>
								</nav>
							</div>
							<div class="card-body pt-0">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-order" role="tabpanel"
										aria-labelledby="nav-order-tab">
										<div class="table-responsive dataTabletrade">
											<table id="example-2" class="table display orderbookTable"
												style="min-width:845px">
												<thead>
													<tr>
														<th>Name</th>
														<th>Trade</th>
														<th>Location</th>
														<th>Price</th>
														<th>Date</th>
														<th class="text-end">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td class="text-end">$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td class="text-end">$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td class="text-end">$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td class="text-end">$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td class="text-end">$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td class="text-end">$372,000</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-history" role="tabpanel">
										<div class="table-responsive dataTabletrade">
											<table id="example-history-1" class="table display" style="min-width:845px">
												<thead>
													<tr>
														<th>Name</th>
														<th>Trade</th>
														<th>Location</th>
														<th>Price</th>
														<th>Date</th>
														<th class="text-end">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td class="text-end">$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td class="text-end">$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td class="text-end">$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td class="text-end">$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td class="text-end">$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td class="text-end">$372,000</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-trade" role="tabpanel"
										aria-labelledby="nav-trade-tab">
										<div class="table-responsive dataTabletrade">
											<table id="example-history-2" class="table display" style="min-width:845px">
												<thead>
													<tr>
														<th>Name</th>
														<th>Trade</th>
														<th>Location</th>
														<th>Price</th>
														<th>Date</th>
														<th class="text-end">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td class="text-end">$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td class="text-end">$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td class="text-end">$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td class="text-end">$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td class="text-end">$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td class="text-end">$372,000</td>
													</tr>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td class="text-end">$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td class="text-end">$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td class="text-end">$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td class="text-end">$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td class="text-end">$162,700</td>
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
		</div>



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


	<script>
		// Initialize chart
        const chartContainer = document.getElementById("chart");
        const chart = LightweightCharts.createChart(chartContainer, {
            layout: {
                backgroundColor: "#ffffff"
                , textColor: "#333"
            }
            , grid: {
                vertLines: {
                    color: "#e1e1e1"
                }
                , horzLines: {
                    color: "#e1e1e1"
                }
            }
            , priceScale: {
                borderColor: "#cccccc"
            }
            , timeScale: {
                borderColor: "#cccccc"
            }
        , });

        // Add candlestick series
        const candleSeries = chart.addCandlestickSeries({
            upColor: "#4caf50"
            , downColor: "#f44336"
            , borderUpColor: "#4caf50"
            , borderDownColor: "#f44336"
            , wickUpColor: "#4caf50"
            , wickDownColor: "#f44336"
        , });



        // Format data function
        function formatData(data) {
            return data.map(([timestamp, open, high, low, close]) => ({
                time: Math.floor(timestamp / 1000)
                , open
                , high
                , low
                , close
            , }));
        }

        // Fetch data
        async function fetchData() {
            try {
                const response = await fetch("/fetch-stock-data/<?=$id?>");
                if (!response.ok) throw new Error("Network response was not ok");

                const rawData = await response.json();
                const formattedData = formatData(rawData);

                if (formattedData.length === 0) throw new Error("No valid data available");

                candleSeries.setData(formattedData);
            } catch (error) {
                console.error("Error fetching or setting data:", error);
                // Fallback data
                candleSeries.setData(formatData([
                    [1696155600000, 25788.45, 25907.6, 25788.05, 25861.3]
                    , [1696155660000, 25861.3, 25873, 25822.35, 25824.05]
                    , [1696155720000, 25824.6, 25831.8, 25743.45, 25759.35]
                , ]));
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