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
        "count" => 1000,
        "params" => [
            [
                "field" => "idxlist.Indexid",
                "op" => "",
                "val" => "51"
            ],
            [
                "field" => "Exch",
                "op" => "",
                "val" => "BSE"
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
            "YoYLastQtrlyProfitGrowth",
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
        "pgno" => 1
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

    <meta name="keywords" content="Admin Dashboard, Bootstrap Template, FrontEnd, Web Application, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Bootstrap 5, HTML5, CSS3, JavaScript, Admin Template, UI Kit, SASS, SCSS, Analytics, Responsive Dashboard, responsive admin dashboard, ui kit, web app, Admin Dashboard, Template, Admin, Authentication, FrontEnd Integration, Web Application UI, Bootstrap Framework, User Interface Kit, SASS Integration, Customizable Template, HTML5/CSS3, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Modern Web Technologies, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Trend Analysis, User-Friendly Interface, Crypto Trading UI, Cryptocurrency Dashboard, Trading Platform Interface, Responsive Crypto Admin, Financial Dashboard, UI Components for Crypto, Cryptocurrency Exchange, Blockchain , Crypto Portfolio Template, Crypto Market Analytics">

    <meta name="description" content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:title" content="Jiade : Crypto Trading UI Admin  Bootstrap 5 Template | Dexignlabs">
    <meta property="og:description" content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:image" content="social-image.png">

    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Jiade : Crypto Trading UI Admin  Bootstrap 5 Template | Dexignlabs">
    <meta name="twitter:description" content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
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
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    font-family: Arial, sans-serif;
    color: #333;
}

.stock-header {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
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
	<x-nav-header />		
	<!--**********************************
			Nav header end
		********************************-->
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
                <!-- Row -->
                <div class="row">

					<div class="col-xl-8 col-12">
						<div class="card">
								<div class="stock-card">
									<div class="stock-header">
										<div class="d-flex align-items-center gap-3">
											<div>
											  <img src="https://assets.upstox.com/content/assets/images/logos/BSE_INDEX%7CSENSEX.png" width="40" height="40" class="rounded-circle" alt="BSE Sensex">
											</div>
											<h4 class="stock-name mb-0">BSE Sensex</h4>
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

                    <div class="col-xl-12">
						<h1>Sensex Companies List</h1>
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <?php 
                            $marketData = json_decode($marketData, true);
                            ?>
                            
                            @foreach ($marketData['data'] as $index => $item)
                                <?php 
                            $Seo = $item['Seosym'];
                            $id = $item['Isin'];
                            $data = json_encode($item);
                            ?>
                           
                           
                                <div onclick="window.location.href='{{ route('nifty-inner',['slug'=>$Seo,'id'=>$id]) }}'" class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card pull-up">
                                        <div class="card-body align-items-center flex-wrap">
                                            <div class="d-flex align-items-center mb-4">
                                                <a href="javascript:void(0)" class="ico-icon">
                                                    <img src="https://s3tv-symbol.dhan.co/symbols/<?=$item['Sym']?>.svg" alt="">
                                                </a>
                                                <div class="ms-3">
                                                    <a href="javascript:void(0)">
                                                        <h4 class="card-title mb-0"><?=$item['Sym'] ?></h4>
                                                    </a>
                                                    <span><?=$item['DispSym'] ?></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="mb-0 fs-14 text-dark font-w600"><?php echo "₹ ".number_format($item['Mcap'],2)  ?></P>
                                                    <span class="fs-12">Market Cap (Cr.)</span>
                                                </div>
                                                <div>
                                                    <?php
                                                    if($item['PPerchange'] > 0){
                                                       ?>
                                                       <p class="mb-0 fs-14 text-success font-w600">
                                                    <?php echo number_format($item['PPerchange'],2)." %" ?>
                                                    </P>
                                                       <?php  
                                                    }else{
                                                        ?>
                                                        <p class="mb-0 fs-14 text-danger font-w600">
                                                    <?php echo number_format($item['PPerchange'],2)." %" ?>
                                                    </P>
                                                        <?php 
                                                    }
                                                    ?>
                                                    
                                                    <span class="fs-12">Change %</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach;




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
    url: '/api/fetchstockinfo/bse',
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

	// Fetch data
	async function fetchData() {
		try {
			const response = await fetch("/fetch-sensex-stock-data");
			if (!response.ok) throw new Error("Network response was not ok");

			const rawData = await response.json();
			
			const formattedData = formatData(rawData);
			console.log(formattedData)

			if (formattedData.length === 0) throw new Error("No valid data available");

			candleSeries.setData(formattedData);
		} catch (error) {
			console.error("Error fetching or setting data:", error);
			// Fallback data
			candleSeries.setData(formatData([
				[1696155600000, 25788.45, 25907.6, 25788.05, 25861.3],
				[1696155660000, 25861.3, 25873, 25822.35, 25824.05],
				[1696155720000, 25824.6, 25831.8, 25743.45, 25759.35],
			]));
		}
	}

	// Fetch initial data and set timeframe
	fetchData();
	function setTimeFrame(timeFrame) {
		fetchData(); // This function should ideally use `timeFrame` to adjust the API call
	}
</script>

</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/ico-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:21 GMT -->

</html>