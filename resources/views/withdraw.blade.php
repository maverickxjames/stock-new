@php
    $user = Auth::user();
    use App\Models\withdraw_mode;
    use App\Models\setting;
@endphp


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/finding-driver by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:12 GMT -->


<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

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
    {{-- <style>
        .wallet-balance {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-deposit,
        .btn-withdraw {
            width: 80%;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .auth-form {
            padding: 0 !important;
            margin: 0 auto;
            max-width: 500px;
        }

        .auth-form .form-group {
            margin-bottom: 20px;
        }

        .auth-form .form-label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .auth-form .form-control {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .auth-form .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
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
    </style> --}}

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">

    {{-- swel fire cdn --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- csrf token --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        :root {
            --color-background: #fae3ea;
            --color-primary: #3736AF;
            --font-family-base: Poppin, sans-serif;
            --font-size-h1: 1.25rem;
            --font-size-h2: 1rem;
        }


        address {
            font-style: normal;
        }

        button {
            border: 0;
            color: inherit;
            cursor: pointer;
            font: inherit;
        }

        fieldset {
            border: 0;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: var(--font-size-h1);
            line-height: 1.2;
            margin-block: 0 1.5em;
        }

        h2 {
            font-size: var(--font-size-h2);
            line-height: 1.2;
            margin-block: 0 0.5em;
        }

        legend {
            font-weight: 600;
            margin-block-end: 0.5em;
            padding: 0;
        }

        input {
            border: 0;
            color: inherit;
            font: inherit;
        }

        input[type="radio"] {
            accent-color: var(--color-primary);
        }

        table {
            border-collapse: collapse;
            inline-size: 100%;
        }

        tbody {
            color: #b4b4b4;
        }

        td {
            padding-block: 0.125em;
        }

        tfoot {
            border-top: 1px solid #b4b4b4;
            font-weight: 600;
        }

        .align {
            display: grid;
            place-items: center;
        }

        .button {
            align-items: center;
            background-color: var(--color-primary);
            border-radius: 1em;
            color: #fff;
            display: flex;
            gap: 0.5em;
            justify-content: center;
            padding-block: 0.75em;
            padding-inline: 1em;
            transition: 0.3s;
        }

        .button:focus,
        .button:hover {
            background-color: #3736AF;
        }

        .button--full {
            inline-size: 100%;
        }

        .cardx {
            border-radius: 0.5em;
            background-color: var(--color-primary);
            color: #fff;
            padding: 1em;
        }

        .form {
            display: grid;
            gap: 2em;
        }

        .form__radios {
            display: grid;
            gap: 1em;
        }

        .form__radio {
            align-items: center;
            background-color: #fefdfe;
            border-radius: 1em;
            box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
            display: flex;
            padding: 1em;
        }

        .form__radio label {
            align-items: center;
            display: flex;
            flex: 1;
            gap: 1em;
            color: #000;
        }

        .head {
            display: flex;
            justify-content: center;
            padding-block: 0.5em;
            padding-inline: 1em;
        }

        .icon {
            block-size: 1em;
            display: inline-block;
            fill: currentColor;
            inline-size: 1em;
            vertical-align: middle;
        }

        .iphone {
            background-color: #fbf6f7;
            background-image: linear-gradient(to bottom, #fbf6f7, #fff);
            /* border-radius: 2em; */
            /* block-size: 812px; */
            box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
            /* inline-size: 375px; */
            /* overflow: auto; */
            padding: 2em;
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

        <x-footer-menu />



        <div class="content-body">
            <div class="iphone">
                <header class="head">
                    <h1>Withdraw</h1>
                </header>

                <form action="" class="">
                    @csrf
                    @php
                        $settings = Setting::where('id', 1)->first();
                    @endphp
                    <div>
                        <h2>Wallet</h2>

                        <div class="cardx">
                            <p>Withdraw Wallet : {{ $user->withdraw_wallet }} INR</p>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="form-group mt-0">
                            <label class="fw-bold text-dark mb-2" for="amount">Amount</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                        </div>
                    </div>

                    <fieldset>
                        <h2 class="mb-2">Choose Method</h2>
                        {{-- <legend>Payment Method</legend> --}}
                        @php
                             $paymentModes = withdraw_mode::where('status', 1)->get();
                        @endphp


                        <div class="form__radios">

                            @foreach ($paymentModes as $modes)
                                <div class="form__radio">
                                    <label for="paymentMethod"><img src={{ $modes['icon'] }}
                                            alt={{ $modes['pay_name'] }} class="img-fluid me-2"
                                            style="width: 30px;">{{ $modes['pay_name'] }}</label>
                                    <input {{ $loop->first ? 'checked' : '' }} id={{ $modes['slug'] }} name="paymentMethod" type="radio" />
                                </div>
                            @endforeach



                        </div>
                    </fieldset>

                  
                    @if($paymentModes->isEmpty())
                    <div class="mt-2">
                        <button style="cursor:not-allowed;opacity:0.5" class="btn btn-secondary button button--full" disabled>No
                            Payment Method Available</button>
                    </div>
                    @else
                    <div class="mt-4">
                        <button class="button button--full" type="button" onclick="initiateWithdraw()">Withdraw</button>
                    </div>
                    @endif
                   
                </form>


                <div class="notice-section mt-4">
                    <h4 class="fw-semibold title-color">Notice:</h4>
                    <ul class="list-unstyled">
                        <li>
                            <h5>Minimum Withdraw</h5>
                            <p>Minimum Withdraw is
                                <?= $settings['minWithdraw'] ?> INR
                            </p>
                        </li>
                        <li>
                            <h5>Withdraw Frequency</h5>
                            <p>You can place only 10 free withdrawals in a day. After that, 1% TDS will be applied.
                            </p>
                        </li>
                    </ul>
                   
                </div>
            </div>
            {{-- <div class="container-fluid">
                <div class="container mt-5">
                    @php
                        $settings = Setting::where('id', 1)->first();
                    @endphp
                    <div class="alert alert-info" role="alert"
                        style="
                    
                    cursor: not-allowed;">
                        <h4 class="alert-heading">Notice</h4>
                        <p>Withdraw Wallet : {{ $user->withdraw_wallet }} INR</p>
                    </div>
                </div>

                <div class="custom-container">


                    <form action="" class="">
                        @csrf
                        <div class="form-group mt-0">
                            <label class="form-label mb-2" for="amount">Amount:</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                        </div>
                    </form>

                    <br>
                    <h3 class="fw-semibold title-color text-center">Choose Method</h3>
                    <ul class="payment-method-list pt-0">
                        <?php
                            $paymentModes = withdraw_mode::where('status', 1)->get();
                            foreach ($paymentModes as $row) {
                        ?>
                        <li class="payment-method-item border p-3 rounded mb-3">
                            <label class="form-check-label d-flex align-items-center" for="<?= $row['slug'] ?>">
                                <img src="<?= $row['icon'] ?>" alt="<?= $row['pay_name'] ?>" class="img-fluid me-2"
                                    style="width: 30px;">
                                <?= $row['pay_name'] ?>
                            </label>
                            <input class="form-check-input me-3" id="<?= $row['slug'] ?>" type="radio"
                                name="paymentMethod">
                        </li>
                        <?php } ?>
                    </ul>

                    <?php if (count($paymentModes) == 0) { ?>
                    <div class="grid-btn mt-2">
                        <button style="cursor:not-allowed;opacity:0.5" class="btn btn-secondary w-100 m-0" disabled>No
                            Payment Method Available</button>
                    </div>
                    <?php } else { ?>
                    <div class="grid-btn mt-4">
                        <button onclick="initiateWithdraw()" class="btn btn-primary w-100 m-0">Withdraw</button>
                    </div>
                    <?php } ?>

                    <div class="condition-part mt-4" style="cursor: crosshair">
                        <h4 class="fw-semibold title-color">Notice:</h4>
                        <ul class="condition-list">
                            <li>
                                <h5>Minimum Withdraw</h5>
                                <p>Minimum Withdraw is
                                    <?= $settings['minWithdraw'] ?> INR
                                </p>
                            </li>
                            <li>
                                <h5>Withdraw Frequency</h5>
                                <p>You can place only 10 free withdrawals in a day. After that, 1% TDS will be applied.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a>
                    <span class="current-year">2024</span>
                </p>
            </div>
        </div>




    </div>
    <!--**********************************
        Content body end
    ***********************************-->

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


    <!-- Dashboard 1 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


















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
                        if (response.icon == 'info') {
                            Swal.fire({
                                icon: response.icon,
                                title: response.title,
                                text: response.message,
                            }).then(() => {
                                window.location.href = '/bank-details';
                            });
                        } else {
                            Swal.fire({
                                icon: response.icon,
                                title: response.title,
                                text: response.message,
                            });
                        }

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
