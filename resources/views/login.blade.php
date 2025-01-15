

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jiade.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:13 GMT -->
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
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
   <link class="main-css" href="css/style.css" rel="stylesheet">

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="body">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome back!</h3>
				<p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
								<form action="{{ route('login') }}" method="post" id="loginForm">
                                    @csrf
									<div class="text-center mb-4">
										<h3 class="text-center mb-2 text-dark">Sign In</h3>
										<!-- <span>Your Social Campaigns</span> -->
									</div>
									
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label required">User ID</label>
									  <input type="text" class="form-control" name="username" id="exampleFormControlInput1" value="{{old('email')}}">
                                      {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                    </div>
									<div class="mb-3 position-relative">
										<label class="form-label required">Password</label>
										<input type="password" id="dlab-password" name="password" class="form-control" value="">
										<span class="show-pass eye">
											<i class="fa fa-eye-slash"></i>
											<i class="fa fa-eye"></i>
										
										</span>
                                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
									</div>
                                    
									<div class="form-row d-flex justify-content-between mt-4 mb-2">
										<div class="mb-3">
											<div class="form-check custom-checkbox mb-0">
												<input type="checkbox" class="form-check-input" id="customCheckBox1" >
												<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
											</div>
										</div>
										<div class="mb-4">
											<a href="page-forgot-password.html" class="btn-link text-primary">Forgot Password?</a>
										</div>
									</div>
									<button type="submit" class="btn btn-block btn-primary"  name="submit">Sign In</button>
									
								</form>
								<!-- <div class="new-account mt-3 text-center">
									<p class="font-w500">Already have an account? <a class="text-primary" href="page-login.html" data-toggle="tab">Sign in</a></p>
								</div> -->
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


<?php include_once('includes/footer.php') ?>

</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:14 GMT -->
</html>