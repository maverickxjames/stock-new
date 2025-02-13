@php
$user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">

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
    <style>
        .profile-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .profile-card div {
            text-align: left
        }

        .profile-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #4A4A4A;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .badge {
            font-size: 1rem;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .badge.bg-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .badge.bg-success {
            background-color: #28a745;
            color: #fff;
        }

        .profile-info p {
            font-size: 1rem;
            margin-bottom: 8px;
        }

        /* .btn-primary {
            width: 100%;
            font-size: 1rem;
            padding: 10px;
        } */
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Style css -->
    <link class="main-css" href="css/style.css" rel="stylesheet">
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        {{-- fetch login user detail --}}
        @php
        $user = Auth::user();
        @endphp




        <div class="content-body">
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="profile-personal-info">
                                    <h4 class="text-primary mb-4 fs-2">Personal Information</h4>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $user->name }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Username <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $user->username }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Account ID <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $user->user_id }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 gap-4 d-flex flex align-items-center justify-content-between">
                                        <button class="btn btn-primary w-50 fs-5" onclick="changePassword()">Change
                                            Password</button>
                                        <button class="btn btn-success w-50 fs-5" onclick="updateProfile()">Update
                                            Profile</button>
                                    </div>
                                   
                                </div>
                                <hr>

                                <div class="account-status-info mt-4">
                                    <h4 class="text-primary mb-4 fs-2">Account Status</h4>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Account Type <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $user->is_dummy ? "DEMO" : "REAL" }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Account Created <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Last Updated <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ \Carbon\Carbon::parse($user->updated_at)->format('Y-m-d') }}</span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <hr>

                                <div class="wallet-info mt-4">
                                    <h4 class="text-primary mb-4 fs-2">Wallet Info</h4>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Demo Wallet <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>₹ {{ $user->demo_wallet }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Real Wallet <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>₹ {{ $user->real_wallet }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Withraw Wallet <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>₹ {{ $user->withdraw_wallet }}</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 gap-4 d-flex flex align-items-center justify-content-between">
                                        <button class="btn btn-secondary w-50 fs-4" onclick="window.location.href='{{ route('deposit') }}'">
                                            Deposit Fund</button>
                                        <button class="btn btn-info w-50 fs-4" onclick="window.location.href='{{ route('withdraw') }}'">
                                            Withdraw</button>
                                    </div>   

                                 
                                   
                                </div>
                              
                                <hr>

                                @php
                                $user = Auth::user();
                                $bank=DB::table('bankDetails')->where('userid',$user->id)->first();
                                @endphp

                                {{-- if bank data found --}}
                                @if($bank)
                                <div class="bank-info mt-4">
                                    <h4 class="text-primary mb-4 fs-2">Bank Info</h4>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Bank Name <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->bank_name }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Bank Account <span class="pull-end">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->bank_acc }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Bank IFSC Code <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->bank_ifsc }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Bank Holder <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->bank_holder }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Bank Branch <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->bank_branch }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">UPI <span class="pull-end">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span>{{ $bank->upi }}</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 gap-4 d-flex flex align-items-center justify-content-between">
                                        <button class="btn btn-dark w-100 fs-4" onclick="window.location.href='{{ route('bank-details') }}'">
                                            Update Bank Details</button>
                                        
                                    </div>   

                                 
                                   
                                </div>
                                @else
                                <div class="bank-info mt-4">
                                    <h4 class="text-primary mb-4 fs-2">Bank Info</h4>
                                    <div class="col-md-12 gap-4 d-flex flex align-items-center justify-content-between">
                                        <button class="btn btn-dark w-100 fs-4" onclick="window.location.href='{{ route('bank-details') }}'">
                                            Add Bank Details</button>
                                        
                                    </div>   

                                 
                                   
                                </div>
                                @endif

                               


                              
                            </div>

                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        {{-- laravel flash message --}}

        @if (session('success'))
        <script>
            Swal.fire('Success', '{{ session('success') }}', 'success');
        </script>
        @endif


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



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Dashboard 1 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function for Change Password
        function changePassword() {
            Swal.fire({
                title: 'Change Password',
                html: `
                    <input type="password" name="current_password" id="current_password" class="swal2-input" placeholder="Current Password">
                    <input type="password" name="new_password" id="new_password" class="swal2-input" placeholder="New Password">
                    <input type="password" name="confirm_password" id="confirm_password" class="swal2-input" placeholder="Confirm Password">
                `,
                confirmButtonText: 'Change Password',
                focusConfirm: false,
                preConfirm: () => {
                    const currentPassword = document.getElementById('current_password').value;
                    const newPassword = document.getElementById('new_password').value;
                    const confirmPassword = document.getElementById('confirm_password').value;


                    if (!currentPassword || !newPassword || !confirmPassword) {
                        Swal.showValidationMessage(`Please fill in all fields`);
                    } else if (newPassword !== confirmPassword) {
                        Swal.showValidationMessage(`Passwords do not match`);
                    }

                    return {
                        currentPassword,
                        newPassword
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to change password
                    $.ajax({
                        url: '/change-password', // Replace with your actual route
                        method: 'POST',
                        data: {
                            current_password: result.value.currentPassword,
                            new_password: result.value.newPassword,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire('Success', 'Password changed successfully!', 'success');
                        },
                        error: function(error) {
                            Swal.fire('Error', error, 'error');
                        }
                    });
                }
            });
        }

        function updateProfile() {
            //swel fire to take input email and name
            Swal.fire({
                title: 'Update Profile',
                html: `
                    <input type="text" id="name" class="swal2-input" placeholder="Name" value="{{ $user['name'] }}">
                    <input type="email" id="email" class="swal2-input" placeholder="Email" value="{{ $user['email'] }}">
                `,
                confirmButtonText: 'Update Profile',
                focusConfirm: false,
                preConfirm: () => {
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;

                    if (!name || !email) {
                        Swal.showValidationMessage(`Please fill in all fields`);
                    }

                    return {
                        name,
                        email
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to update profile
                    $.ajax({
                        url: '/update-profile', // Replace with your actual route
                        method: 'POST',
                        data: {
                            name: result.value.name,
                            email: result.value.email,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire('Success', 'Profile updated successfully!', 'success').then(
                                () => {
                                    location.reload();
                                });
                        },
                        error: function(error) {
                            Swal.fire('Error', 'There was an error updating your profile.', 'error');
                        }
                    });
                }
            });
        }
    </script>

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
    {{-- <script src="js/styleSwitcher.js"></script> --}}


    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script src="vendor/chart-js/chart.bundle.min.js"></script>
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
    <script src="js/dashboard/trading-market.js"></script>

</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>