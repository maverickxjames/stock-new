@php
    $user = Auth::user();
    use App\Models\payment_mode;
    use App\Models\setting;
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

    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <!-- Style css -->
		<link class="main-css" href="css/style.css" rel="stylesheet">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        .recharge-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

		

        .quick-amount-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-around;
            margin-top: 20px;
        }

        .quick-amount-buttons button {
            flex: 1 0 calc(25% - 10px);
            max-width: 120px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-weight: 600;
            cursor: pointer;
        }

        .quick-amount-buttons button:hover {
            background-color: #0056b3;
        }

        .payment-method-list {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .payment-method-item {
            flex: 1 0 calc(50% - 15px);
            justify-content: space-between;
            cursor: pointer;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background 0.3s ease;
        }

        .payment-method-item:hover {
            background: #f0f0f0;
        }

        .payment-method-item img {
            width: 40px;
            height: 40px;
        }

		.notice-section {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #D3D3D3;
            cursor: crosshair;
        }

        .notice-section ul {
            margin-top: 20px;
            padding-left: 20px;
        }

        .notice-section ul li h5 {
            font-size: 16px;
            margin-bottom: 5px;
			color: #007bff;
        }

		.notice-section ul li p {
			font-size: 14px;
			margin-bottom: 5px;
			color: #555;
		}

        .buttons .single-button button {
            width: 100%;
            margin: 10px 0;
        }

        .Wfloat {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 110px;
            right: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 10000;
        }

        .myW-float {
            margin-top: 11px;
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

        <x-footer-menu />

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

				<div class="container mt-5">
					@php
						$settings = setting::where('id', 1)->first();
					@endphp
					<!-- Withdraw Notice Alert Box -->
					<div class="alert alert-info" role="alert">
						<p class="">Real Wallet : {{ $user->real_wallet }} INR</p>
						<p>Withdraw Wallet : {{ $user->withdraw_wallet }} INR</p>
						{{-- <p>You can place only 10 free Withdraw in a day. After that 1% TDS will be applied</p> --}}
					</div>
		
		
				</div>
		
		
                
                <div class="custom-container" style="
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            ">
                    <!-- Amount Input Section -->

                    <form action="" class="">
                        @csrf
                        <div class="form-group mt-0">
                            <label class="form-label mb-2" for="amount">Amount:</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                        </div>
                    </form>

                    <!-- Quick Amount Buttons -->
                    <div class="quick-amount-buttons ">
                        <button type="button" class="btn btn-outline-primary" onclick="setAmount(500)">500</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(1000)">1000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(2500)">2500</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(5000)">5000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(10000)">10000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(20000)">20000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(25000)">25000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(30000)">30000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(50000)">50000</button>
                        <button type="button" class="btn btn-outline-primary"
                            onclick="setAmount(100000)">100000</button>
                    </div>

                    <!-- Payment Methods Section -->
                    <br>
                    <h3 class="fw-semibold title-color text-center">Choose Payment Method</h3>
                    {{-- <br> --}}
                    <ul class="payment-method-list list-unstyled">
                        <?php
								// Fetch payment modes and settings
								$paymentModes = payment_mode::where('status', 1)->get();
								$settings = setting::where('id', 1)->first();
							
								foreach ($paymentModes as $row) {
								?>
                        <li class="payment-method-item border p-3 rounded mb-3">
                            <label class="form-check-label d-flex align-items-center" for="paymentMethod">
                                <img src="<?= $row['icon'] ?>" alt="<?= $row['pay_name'] ?>" class="img-fluid me-2"
                                    style="width: 30px;">
                                <?= $row['pay_name'] ?>
                            </label>
                            <input class="form-check-input me-3" id="<?= $row['slug'] ?>" type="radio"
                                name="paymentMethod">
                        </li>
                        <?php
								}
								?>
                    </ul>
                    <!-- Proceed Button -->
                    <div class="text-center mt-4">
                        <button onclick="initiatePayment()" class="btn btn-primary w-100">Proceed to Pay</button>
                        {{-- <button onclick="" class="btn btn-primary w-100">Proceed to Pay</button> --}}
                    </div>

                    <!-- Notice Section -->
                    <div class="notice-section mt-4">
                        <h4 class="fw-semibold title-color">Notice:</h4>
                        <ul class="list-unstyled">
                            <li>
                                <h5>Minimum Recharge</h5>
                                <p>Minimum Recharge is <?= $settings['minRecharge'] ?> INR</p>
                            </li>
                            <li>
                                <h5>Fill UTR</h5>
                                <p>Enter your UTR number after payment</p>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- </section> --}}


                {{-- </div> --}}
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
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<script src="vendor/chart-js/chart.bundle.min.js"></script>
	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="js/dashboard/trading-market.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        const minWithdraw = {{ $settings->minWithdraw }};

        function setAmount(value) {
            console.log("Amount set to:");

            document.getElementById("amount").value = value;
        }



        function initiatePayment() {
            var amount = document.getElementById("amount").value;

            var payment_mode = document.querySelector('input[name="paymentMethod"]:checked');


            if (amount == null || amount == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please enter amount',
                });
                return;
            }
            if (payment_mode) {
                payment_mode = payment_mode.id;

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select payment mode',
                });
                return;
            }


            if (amount < minWithdraw) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: `Minimum Recharge is  INR ${minWithdraw}`,
                });
                return;
            }





            // Ajax Payment Link Generation and Redirect to Payment Gateway Page 


            $.ajax({
                url: 'payment-link', // Ensure this URL is correct and accessible
                type: 'POST', // Use uppercase for HTTP methods (optional but recommended)
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                data: {
                    amount: amount,
                    payment_mode: payment_mode
                },
                dataType: 'json', // Expecting JSON response from the server
                beforeSend: function() {
                    // Show SweetAlert2 loading modal
                    Swal.fire({
                        title: 'Processing Payment...',
                        text: 'Please wait while we process your payment.',
                        allowOutsideClick: false, // Prevent closing by clicking outside
                        didOpen: () => {
                            Swal.showLoading(); // Show the loading spinner
                        }
                    });
                },
                success: function(response) {
                    // Close the loading modal
                    Swal.close();

                    // Check the response status
                    if (response.status === 'success') {
                        // Optionally, you can show a success message before redirecting
                        Swal.fire({
                            icon: 'success',
                            title: 'Payment Initiated',
                            text: 'Redirecting to payment page...',
                            timer: 1000, // Close after 2 seconds
                            showConfirmButton: false
                        }).then(() => {
                            // Redirect to the payment link
                            window.location.href = response.url;
                        });
                    } else {
                        // Show error message returned from the server
                        Swal.fire({
                            icon: 'error',
                            title: 'Payment Failed',
                            text: response.message || 'An unknown error occurred.',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Close the loading modal
                    Swal.close();

                    // Log the error for debugging (optional)
                    console.error('AJAX Error:', status, error);

                    // Show a generic error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Request Failed',
                        text: 'There was a problem processing your payment. Please try again later.',
                    });
                }
            });

        }
    </script>



</body>



</html>
