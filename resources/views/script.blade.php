@php
	$user=Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->
<head>
    	<!--Title-->
	<title>Jiade : Crypto Trading UI Admin  Bootstrap 5 Template | Dexignlabs</title>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .wallet-balance {
            font-size: 2rem;
            font-weight: bold;
        }
        .btn-deposit, .btn-withdraw {
            width: 80%;
            margin-bottom: 10px;
        }
    </style>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

	
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



        <div class="content-body">
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									<i class="fa fa-list-alt me-2"></i>Add Script
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-xl-3 col-xxl-3 col-lg-4 mb-lg-0 mb-3">
											<h6 class="mb-0">Serach any script to add :</h6>
										</div>
										<div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3">
											<select class="form-control default-select wide">
												<option value="AL">Select Menu</option>
												<option value="WY">India</option>
												<option value="WY">Information</option>
												<option value="WY">New Menu</option>
												<option value="WY">Page Menu</option>
											</select>
										</div>
										{{-- <div class="col-xl-3 col-xxl-4 col-lg-4">
											<a href="javascript:void(0);" class="btn btn-primary">Select</a>
											<span class="mx-2 d-inline-block">or</span>
											<a href="javascript:void(0);" class="text-primary">Create new menu</a>
										</div> --}}
									</div>
								</div>
							</div>
						</div>

                       
						<div class="row">
							<div class="col-xl-12">
								<div class="filter cm-content-box box-primary">
									<div class="content-title SlideToolHeader">
										<div class="cpa">
											Menus
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
										</div>
									</div>
									<div class=" cm-content-body card-body pt-4 pb-0 height370 dlab-scroll">
										<div class="contacts-list"  id="RecentActivityContent">

                                           @foreach ($scripts as $script)
                                           <div class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
                                            <div class="d-flex align-items-center">
                                                <img src="https://cdn-icons-png.flaticon.com/128/14906/14906254.png" alt="" class="avatar">
                                                <div class="ms-3">
                                                    <h5 class="mb-1"><a href="app-profile.html">{{ $script->script_symbol }}</a></h5>
                                                    <span class="fs-14 text-muted">{{ $script->description }}</span>
                                                </div>
                                            </div>	
                                            <div class="icon-box icon-box-sm bgl-primary">
                                                <a href="javascript:void(0)">
                                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="var(--primary)"></path>
                                                    </svg>
                                                </a>		
                                            </div>
                                        </div>
                                           @endforeach
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

    
<script src="js/dashboard/cms.js"></script>
	
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<!--nestable file-->
<script src="vendor/nestable2/js/jquery.nestable.min.js"></script>
<!-- nestable plugins -->
<script src="js/plugins-init/nestable-init.js"></script>
	

	<!-- Dashboard 1 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const walletBalanceElement = document.getElementById("wallet-balance");
        let walletBalance = parseFloat(walletBalanceElement.textContent);

        // Handle Deposit Form Submission
        document.getElementById("deposit-form").addEventListener("submit", function (event) {
            event.preventDefault();
            const amount = parseFloat(document.getElementById("deposit-amount").value);
            if (amount > 0) {
                walletBalance += amount;
                walletBalanceElement.textContent = walletBalance.toFixed(2);
                addTransaction("Deposited", amount);
                document.getElementById("deposit-form").reset();
                bootstrap.Modal.getInstance(document.getElementById("depositModal")).hide();
            }
        });

        // Handle Withdraw Form Submission
        document.getElementById("withdraw-form").addEventListener("submit", function (event) {
            event.preventDefault();
            const amount = parseFloat(document.getElementById("withdraw-amount").value);
            if (amount > 0 && amount <= walletBalance) {
                walletBalance -= amount;
                walletBalanceElement.textContent = walletBalance.toFixed(2);
                addTransaction("Withdrawn", amount);
                document.getElementById("withdraw-form").reset();
                bootstrap.Modal.getInstance(document.getElementById("withdrawModal")).hide();
            } else if (amount > walletBalance) {
                alert("Insufficient balance.");
            }
        });

        // Function to add a transaction to the history
        function addTransaction(type, amount) {
            const transactionList = document.getElementById("transaction-list");
            const listItem = document.createElement("li");
            listItem.className = "list-group-item";
            listItem.textContent = `${type} ₹${amount.toFixed(2)} on ${new Date().toISOString().split("T")[0]}`;
            transactionList.prepend(listItem);
        }
    });
</script>

</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->
</html>