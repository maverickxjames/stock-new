<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jiade.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:13 GMT -->

<head>
    <!--Title-->
    <title>Stock-mantra : A Trading Plateform</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Dexignlabs">
    <meta name="robots" content="index, follow">

    <meta name="keywords"
        content="Admin Dashboard, Bootstrap Template, FrontEnd, Web Application, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Bootstrap 5, HTML5, CSS3, JavaScript, Admin Template, UI Kit, SASS, SCSS, Analytics, Responsive Dashboard, responsive admin dashboard, ui kit, web app, Admin Dashboard, Template, Admin, Authentication, FrontEnd Integration, Web Application UI, Bootstrap Framework, User Interface Kit, SASS Integration, Customizable Template, HTML5/CSS3, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Modern Web Technologies, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Trend Analysis, User-Friendly Interface, Crypto Trading UI, Cryptocurrency Dashboard, Trading Platform Interface, Responsive Crypto Admin, Financial Dashboard, UI Components for Crypto, Cryptocurrency Exchange, Blockchain , Crypto Portfolio Template, Crypto Market Analytics">

    <meta name="description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:title" content="Stock-mantra : A Trading Plateform">
    <meta property="og:description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta property="og:image" content="social-image.png">

    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Stock-mantra : A Trading Plateform">
    <meta name="twitter:description"
        content="Empower your cryptocurrency trading platform with Jiade, the ultimate Crypto Trading UI Admin Bootstrap 5 Template. Seamlessly combining sleek design with the power of Bootstrap 5, Jiade offers a sophisticated and user-friendly interface for managing your crypto assets. Packed with customizable components, responsive charts, and a modern dashboard, Jiade accelerates your development process. Crafted for efficiency and aesthetics, this template is your key to creating a cutting-edge crypto trading experience. Explore Jiade today and elevate your crypto trading platform to new heights with a UI that blends functionality and style effortlessly.">

    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link class="main-css" href="css/style.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="body">
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center justify-items-center items-center  d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15 ">
                <div class="text-center  mb-2 pt-5 logo">
                    <img src="images/logo-white.png" alt="" width="400">
                </div>
                <h3 class="mb-2 text-white">Welcome to StockMantra!</h3>
                <p class="mb-4">Real-Time Market Insights & Trading Tools <br>Secure. Fast. Reliable.</p>
            </div>
            {{-- <div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
                <img class="img1 move-1" src="images/background/pic3.png" alt="">
                <img class="img2 move-2" src="images/background/pic4.png" alt="">
                <img class="img3 move-3" src="images/background/pic5.png" alt="">

            </div> --}}
        </div>
        <div class="container flex-row-fluid d-flex flex-column position-relative overflow-hidden px-7 py-5 mx-auto">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="authincation-content style-2">
                    <div class="row no-gutters">
                        <div class="col-xl-12 tab-content">
                            <div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
                                {{-- <form action="{{ route('login') }}" method="post" id="loginForm"> --}}
                                    <form >
                                        @csrf
                                        <div class="text-center mb-4">
                                            <h3 class="text-center mb-2 text-dark">Sign In</h3>
                                            <!-- <span>Your Social Campaigns</span> -->
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label required">User ID / Email / Username</label>
                                            <input type="text" class="form-control" name="login_input" id="exampleFormControlInput1" placeholder="Enter User ID, Email or Username" value="{{ old('login_input') }}">
                                            
                                            {{--
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label class="form-label required">Password</label>
                                            <input type="password" id="dlab-password" name="password"
                                                class="form-control" value="" placeholder="Enter Password">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>

                                            </span>
                                            {{--
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                        </div>

                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                {{-- <div class="form-check custom-checkbox mb-0">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheckBox1">
                                                    <label class="form-check-label" for="customCheckBox1">Remember my
                                                        preference</label>
                                                </div> --}}
                                            </div>
                                            <div class="mb-4">
                                                <a href="" class="btn-link text-primary">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                        <button type="button" onclick="onLogin()" id="submitBtn"
                                            class="btn btn-block btn-primary" name="submit">Sign
                                            In</button>

                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p class="font-w500">Don't have an account? <a class="text-primary" href="#"
                                                onclick="window.location.href='{{ route('register') }}'"
                                                data-toggle="tab">Register</a></p>
                                    </div>
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-center">
         <a href="javascript:void(0);" class="text-primary">Terms</a>
         <a href="javascript:void(0);" class="text-primary mx-5">Plans</a>
         <a href="javascript:void(0);" class="text-primary">Contact Us</a>
        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'includes/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        function onLogin() {
            let loginInfo = document.getElementById('exampleFormControlInput1').value.trim();
            let passwordInfo = document.getElementById('dlab-password').value.trim();
    
            if (loginInfo === '' && passwordInfo === '') {
                Toastify({
                    text: "User Info and Password are required!",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#ff5e57",
                }).showToast();
                return;
            } else if (loginInfo === '') {
                Toastify({
                    text: "User Info is required!",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#ff5e57",
                }).showToast();
                return;
            } else if (passwordInfo === '') {
                Toastify({
                    text: "Password is required!",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#ff5e57",
                }).showToast();
                return;
            }
    
            // Make AJAX call to your backend
            $.ajax({
                url: "{{ route('login') }}", // Make sure this is correctly routed in Laravel
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    loginInfo: loginInfo,
                    password: passwordInfo
                },
                success: function(response) {
                    // console.log(response);
                    
                    if (response.success) {
                        Toastify({
                            text: "Login successful! Redirecting...",
                            duration: 2000,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#28a745",
                        }).showToast();
                        setTimeout(() => {
                            window.location.href = response.redirect_url || "/";
                        }, 2000);
                    } else {
                        Toastify({
                            text: response.message || "Login failed!",
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#ff5e57",
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    Toastify({
                        text: "Something went wrong!",
                        duration: 3000,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#ff5e57",
                    }).showToast();
                }
            });
        }
    </script>
    
</body>


</html>