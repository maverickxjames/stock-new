@php
    $user = Auth::user();
    use App\Models\withdraw_mode;
    use App\Models\setting;
@endphp


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/finding-driver by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:12 GMT -->


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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    
	    <!-- Style css -->
		<link class="main-css" href="css/style.css" rel="stylesheet">

    <base href="/">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

	<!-- Bootstrap CSS -->
	{{-- <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

	{{-- jquery cdn --}}
	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}


    <style>
        /* General Styling */
        body {
            font-family: "Lexend", sans-serif;
            max-width: 600px;
            position: relative;
            width: 100%;
            margin: 0 auto;
            height: 100vh;
            background-color: rgba(var(--white), 1);
        }

        #top {
            display: block;
            height: 80px;
        }

        .main-header {
            position: sticky;
            top: 0;
            padding-top: 25px;
            background-color: rgba(var(--box-bg), 1);
            z-index: 2;
        }

        .inner-page-header {
            background-color: #ffffff;
            padding: 20px 0;
            border-radius: 0px 0px 20px 20px;
        }

        .custom-container {

            padding: 0 20px;

        }

        .header-panel {
            position: relative;
            padding-bottom: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 1;
            z-index: 1;
        }

        .header-panel a {
            text-decoration: none;
            line-height: 1;
        }

        .iconsax.icon-btn {
            font-size: 24px;
            color: #292D32;
            transition: transform 0.3s ease;
        }

        .iconsax.icon-btn:hover {
            transform: scale(1.1);
        }

        .main-header .header-panel h3 {
            position: absolute;
            font-weight: 600;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            /* padding-bottom: 20px; */
            color: rgba(var(--title-color), 1);
            white-space: nowrap;
        }

        h3.title-color {
            font-size: 24px;
            font-weight: 600;
            color: #292D32;
            margin: 0;
        }

        @media (max-width: 768px) {
            /* .header-panel {
        flex-direction: column;
        align-items: flex-start;
    } */

            .header-panel a {
                margin-right: 0;
                margin-bottom: 10px;
            }

            h3.title-color {
                font-size: 20px;
            }
        }

        /* For SVG Icon */
        .iconsax {
            width: 24px;
            height: 24px;
            fill: #292D32;
        }

        .iconsax:hover {
            fill: #000000;
        }

        /* Header Style for Mobile */
        @media (max-width: 600px) {
            .header-panel {
                padding: 10px;
            }

            .header-panel a {
                margin-right: 10px;
            }
        }

        @media (max-width: 600px) {
            .custom-container {
                padding: 0 calc(15px + 5*(100vw - 320px) / 280);
            }
        }

        .custom-container {
            padding: 0 20px;
        }

        /* Custom Stylesheet */

        /* General styling for the section */
        /***** General Section Styling *****/
        .withdraw-request {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-container {
            
            margin: auto;
        }

        /***** Form and Input Styling *****/
        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /***** Payment Method List *****/


        .auth-form {
            padding: 0 !important;
            /* Remove extra padding */
            margin: 0 auto;
            /* Center the form */
            max-width: 400px;
            /* Limit the width for better readability */
        }

        .auth-form .form-group {
            margin-bottom: 15px;
            /* Add spacing between form groups */
        }

        .auth-form .form-label {
            font-size: 1rem;
            /* Ensure consistent label size */
            color: #333;
            /* Use a neutral text color */
        }

        .auth-form .form-control {
            border: 1px solid #ccc;
            /* Add a subtle border */
            border-radius: 5px;
            /* Rounded corners */
            padding: 10px;
            /* Adjust input padding */
            font-size: 1rem;
            /* Make text readable */
        }

        .auth-form .form-control:focus {
            border-color: #007bff;
            /* Highlight border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Subtle focus glow */
        }

        @media (max-width: 768px) {
            .auth-form {
                /* padding: 10px !important;  */
                max-width: 100%;
                /* Make form responsive */
            }
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

        .form-check-label {
            flex-grow: 1;
            font-size: 14px;
            color: #333;
        }

        .form-check-input {
            margin-left: 10px;
        }

        /***** Buttons *****/
        .grid-btn button {
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .grid-btn .btn-primary {
            background-color: #007bff;
        }

        .grid-btn .btn-secondary {
            background-color: #6c757d;
        }

        /***** Notice Section *****/
        .condition-part {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #D3D3D3;
            cursor: crosshair;
        }

        .condition-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .condition-list li {
            margin-bottom: 10px;
        }

        .condition-list h5 {
            font-size: 14px;
            color: #007bff;
            margin-bottom: 5px;
        }

        .condition-list p {
            font-size: 13px;
            color: #555;
            margin: 0;
        }
    </style>

    {{-- bootstrap cdn --}}






</head>


<body>
    {{-- <div id="top"></div> --}}

     <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
 

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

        <!--**********************************
            Content body start
        ***********************************-->

   

      
      


        <div class="content-body">
            <div class="container-fluid">
                <div class="container mt-5">
                    @php
                        $settings = setting::where('id', 1)->first();
                    @endphp
                    <!-- Withdraw Notice Alert Box -->
                    <div class="alert alert-info" role="alert" style="
                    
                    cursor: not-allowed;">
                        <h4 class="alert-heading">Notice</h4>
                        <p>Withdraw Wallet : {{ $user->withdraw_wallet }} INR</p>
                        {{-- Additional information can be added here if needed --}}
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
        
                    <!-- Payment Methods Section -->
                    <br>
                    <h3 class="fw-semibold title-color text-center">Choose Method</h3>
                    <ul class="payment-method-list pt-0">
                        <?php
                            $paymentModes = withdraw_mode::where('status', 1)->get();
                            foreach ($paymentModes as $row) {
                        ?>
                        <li class="payment-method-item border p-3 rounded mb-3">
                            <label class="form-check-label d-flex align-items-center" for="<?= $row['slug'] ?>">
                                <img src="<?= $row['icon'] ?>" alt="<?= $row['pay_name'] ?>" class="img-fluid me-2" style="width: 30px;">
                                <?= $row['pay_name'] ?>
                            </label>
                            <input class="form-check-input me-3" id="<?= $row['slug'] ?>" type="radio" name="paymentMethod">
                        </li>
                        <?php } ?>
                    </ul>
        
                    <!-- Button Section -->
                    <?php if (count($paymentModes) == 0) { ?>
                    <div class="grid-btn mt-2">
                        <button style="cursor:not-allowed;opacity:0.5" class="btn btn-secondary w-100 m-0" disabled>No Payment Method Available</button>
                    </div>
                    <?php } else { ?>
                    <div class="grid-btn mt-4">
                        <button onclick="initiateWithdraw()" class="btn btn-primary w-100 m-0">Withdraw</button>
                    </div>
                    <?php } ?>
        
                    <!-- Notice Section -->
                    <div class="condition-part mt-4" style="cursor: crosshair">
                        <h4 class="fw-semibold title-color">Notice:</h4>
                        <ul class="condition-list">
                            <li>
                                <h5>Minimum Withdraw</h5>
                                <p>Minimum Withdraw is <?= $settings['minWithdraw'] ?> INR</p>
                            </li>
                            <li>
                                <h5>Withdraw Frequency</h5>
                                <p>You can place only 10 free withdrawals in a day. After that, 1% TDS will be applied.</p>
                            </li>
                        </ul>
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

       


    </div>
    <!-- header starts -->
    {{-- <header id="header" class="main-header inner-page-header">
        <div class="custom-container">
            <div class="header-panel">
                <div>
                    <a href="dashboard">
                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985162.png" alt=""
                            width="20" height="auto">
                    </a>
                </div>


                <h3 class="fw-semibold title-color">Withdraw Funds</h3>
            </div>
        </div>
    </header> --}}
    <!-- header end -->






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






    <script>
        const minWithdraw = {{ $settings->minWithdraw }};

        function setAmount(value) {
            document.getElementById("amount").value = value;
        }

        function initiateWithdraw() {
            const amount = document.getElementById("amount").value;
            const paymentMode = document.querySelector('input[name="paymentMethod"]:checked');

            if (!amount) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please enter the amount.',
                });
                return;
            }

            if (!paymentMode) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select a payment mode.',
                });
                return;
            }

           
            if (amount < minWithdraw) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: `Minimum Withdraw is ${minWithdraw} INR`,
                });
                return;
            }


            const paymentModeId = paymentMode.id;

            // Send AJAX request
            $.ajax({
                url: '/withdrawRef', // Ensure this matches the route in your Laravel app
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    amount: amount,
                    payment_mode: paymentModeId,
                },
                dataType: 'json',
                beforeSend: function() {
                    Swal.fire({
                        title: 'Processing Withdrawal...',
                        text: 'Please wait.',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading(),
                    });
                },
                success: function(response) {
                    Swal.close();
                    if (response.icon === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: response.title,
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false,
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: response.icon,
                            title: response.title,
                            text: response.message,
                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON?.message || 'An unknown error occurred.',
                    });
                },
            });
        }
    </script>
</body>



</html>
