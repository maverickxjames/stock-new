@php
    $user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">


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
        .card {
            border: none;
            color: white;
        }

        input.form-control:read-only {
            border: none;
        }

        input.form-control.bg-secondary {
            background-color: #2e2f45 !important;
        }

        .btn-primary {
            background: linear-gradient(90deg, #6255ff, #f54aff);
            border: none;
        }
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    {{-- <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Datatable -->
    {{-- <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">

    <style>
        
.button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 15px;
  padding-right: 15px;
}


.share-dialog {
  display: none;
  position: relative; /* or absolute if needed */
  z-index: 1000; /* ✅ Make sure it's on top */
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}

.share-dialog.is-open {
  display: block;
}


header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.targets {
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-bottom: 20px;
}

.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}



.link {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 4px;
  background-color: #eee;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
    </style>

    <!-- Include Animate.css for animation (optional but nice) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">


        <x-nav-header />

        <x-header />

        <x-sidebar />


        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                 
                    <div class="col-xl-12">
                       <div class="row">
                        <div class="card rounded-4 p-4 shadow-lg border-0">
                            <h1 class="text-center fw-bold fs-2 mb-4 text-dark">Referral System</h1>
                    
                            <!-- Stats Section -->
                            <div class="row justify-content-center gy-4">
                                <div class="col-md-5">
                                    <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                        <img src="https://cdn-icons-png.flaticon.com/128/4121/4121044.png" alt="logo" width="50" />
                                        <div>
                                            <p class="mb-1 text-muted fw-semibold">TOTAL REFERRALS</p>
                                            <h3 class="mb-0 text-primary fw-bold">{{ $user->refer_count }}</h3>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-5">
                                    <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                        <img src="https://cdn-icons-png.flaticon.com/128/11257/11257660.png" alt="logo" width="50" />
                                        <div>
                                            <p class="mb-1 text-muted fw-semibold">TOTAL EARNED</p>
                                            <h3 class="mb-0 text-success fw-bold">₹ {{ $user->refer_wallet }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-5">
                                    <div class="d-flex align-items-center justify-content-between gap-3 p-3 rounded-3 bg-light shadow-sm h-100">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://cdn-icons-png.flaticon.com/128/11257/11257660.png" alt="logo" width="50" />
                                            <div>
                                                <p class="mb-1 text-muted fw-semibold">AVAILABLE TO WITHDRAW</p>
                                                <h3 class="mb-0 text-primary fw-bold">₹ {{ $user->total_refer_wallet }}</h3>
                                            </div>
                                        </div>
                                        <div>
                                            <button onclick="window.location.href='{{ route('withdraw') }}'" class="btn btn-outline-primary">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Referral Link -->
                            <div class="mt-5">
                                <label class="mb-2 fw-semibold fs-5">Your Referral Link</label>
                                <div class="input-group mb-3 gap-2">
                                    <input type="text" class="form-control" id="referralInput" value="{{ url('/register/' . Auth::user()->refer_code) }}" readonly>
                                    <button onclick="copyReferral()" class="btn btn-dark copy-link">Copy Link</button>
                                    <button onclick="toggleShare()" class="btn btn-info text-white share-button" type="button">
                                        <img src="https://cdn-icons-png.flaticon.com/128/16323/16323181.png" alt="logo" width="18" class="me-1">
                                        Share
                                    </button>
                                </div>
                                <p class="text-muted">Get <span class="text-info fw-bold">₹{{ $referral_bonus }}</span> for each invited user</p>
                            </div>
                    
                            <!-- Share Dialog -->
                            <div id="shareDialog" class="share-dialog mt-3 border rounded-3 p-3 shadow-sm animate__animated">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="mb-0 fw-bold">Share</h5>
                                    <button class="btn-close" onclick="toggleShare()">&times;</button>
                                </div>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="#" class="btn btn-outline-primary">Facebook</a>
                                    <a href="#" class="btn btn-outline-info">Twitter</a>
                                    <a href="#" class="btn btn-outline-secondary">LinkedIn</a>
                                    <a href="#" class="btn btn-outline-danger">Email</a>
                                </div>
                            </div>
                    
                            <!-- Toast -->
                            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1055">
                                <div id="copyToast" class="toast align-items-center text-white bg-success border-0" role="alert">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Referral link copied!
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                    
                    
                    <div class="col-xl-12">
                        <!-- row -->
                        <div class="row">
                            <div class="card">
                                <div class="card-header justify-content-between border-0">
                                    <h2 class="card-title mb-0">My Referral</h2>
                                </div>
                                <div class="card-body px-3 py-0">
                                    <div class="table-responsive">
                                        <table
                                            class="table-responsive table shadow-hover tickettable display mb-4 dataTablesCard dataTable no-footer"
                                            id="example6">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom">Date</th>
                                                    <th class="border-bottom">User</th>
                                                    <th class="border-bottom">Referral User</th>
                                                    <th class="text-end">Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($referral_users as $user)
                                                      <tr>
                                                    <td class="fs-14 font-w400">{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y, h:i A') }}</td>
                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <strong>{{ $user->name }}</strong>
                                                            <small class="text-muted">{{ $user->user_id }}</small>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->refer_count }}
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-sm badge-success">₹{{ $user->refer_wallet }}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              
                                               
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





        <script src="{{ asset('js/app.js') }}"></script>








        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- Datatable -->
        {{-- <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script> --}}


        <!-- Dashboard 1 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

     

        <script>
            function copyReferral() {
                const input = document.getElementById("referralInput");
                input.select();
                document.execCommand("copy");
        
                // const toast = new bootstrap.Toast(document.getElementById("copyToast"));
                // toast.show();

                Toastify({
                    text: "Referral link copied!",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50",
                }).showToast();
            }
        
            function toggleShare() {
                const dialog = document.getElementById("shareDialog");
                dialog.classList.toggle("is-open");
            }
        </script>
        

</body>


</html>
