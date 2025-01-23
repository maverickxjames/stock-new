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
        .wallet-balance {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-deposit,
        .btn-withdraw {
            width: 80%;
            margin-bottom: 10px;
        }
    </style>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
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
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
            style="width: 1200px">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                <button type="button" class=" text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                    style="border: none">
                    <img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png" width="24" alt="">
                </button>

            </div>
            <div class="offcanvas-body">

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
                            <div class="row align-items-center mb-3">

                                <div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3">
                                    <input type="text" class="form-control" placeholder="Search Script"
                                        onkeyup="searchScript(this)">

                                </div>


                                <div class="col-xl-6 col-xxl-4 col-lg-4 align-self-end">
                                    <button class="btn btn-primary me-2 active-filter filter" type="button"
                                        onclick="setActiveFilter(this, 'ALL')">ALL</button>
                                    <button class="btn btn-primary light filter" type="button"
                                        onclick="setActiveFilter(this, 'Future')">Future</button>
                                    <button class="btn btn-primary light me-2 filter" type="button"
                                        onclick="setActiveFilter(this, 'Option')">Option</button>
                                    <button class="btn btn-primary light filter" type="button"
                                        onclick="setActiveFilter(this, 'Indicies')">Indicies</button>
                                </div>

                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3 " id="expiry-date" hidden>
                                    <label class="me-sm-2 form-label">Expiry Date</label>
                                    <select class="me-sm-2  form-control wide" id="inlineFormCustomSelect">
                                        <option selected>All...</option>
                                        <option value="1">30 Jan 2025</option>
                                        <option value="2">27 Feb 2025</option>
                                        <option value="3">27 Mar 2025</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-xxl-4 col-lg-4 align-self-end" id="Order-type" hidden>
                                    <label class="me-sm-2 form-label">Order Type</label>
                                    <div>
                                        <button class="btn btn-warning me-2 filterCP filterCP" type="button"
                                            onclick="setActiveFilterCP(this, 'ALL')">ALL</button>
                                        <button class="btn btn-warning light filterCP" type="button"
                                            onclick="setActiveFilterCP(this, 'CE')">CE</button>
                                        <button class="btn btn-warning light me-2 filterCP" type="button"
                                            onclick="setActiveFilterCP(this, 'PE')">PE</button>
                                    </div>

                                </div>
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
                                    <a href="javascript:void(0);" class="expand handle"><i
                                            class="fal fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div class=" cm-content-body card-body pt-4 pb-0 height370 dlab-scroll">
                                <div class="contacts-list" id="RecentActivityContent">

                                    {{-- @foreach ($scripts as $script) --}}
                                    {{-- <div
                                                        class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://cdn-icons-png.flaticon.com/128/14906/14906254.png"
                                                                alt="" class="avatar" id="avatar">
                                                            <div class="ms-3">
                                                                <h5 class="mb-1"><a href="" id="script_symbol">Loading...</a>
                                                                </h5>
                                                                <span class="fs-14 text-muted"
                                                                    id="script_description">Loading...</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-box icon-box-sm bgl-primary">
                                                            <a href="javascript:void(0)" id="add_script">
                                                                <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png"
                                                                    width="24" alt="">
                                                            </a>
                                                        </div>
                                                    </div> --}}
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--**********************************
        Scripts
    ***********************************-->




        <script>
            let activeFilter = 'ALL';
            let activeFilterCP = 'ALL';

            function setActiveFilter(selectedButton, filterName) {
                const buttons = document.querySelectorAll('.filter');

                buttons.forEach(button => {
                    button.classList.remove('active-filter');
                    button.classList.add('light');
                });

                selectedButton.classList.remove('light');
                selectedButton.classList.add('active-filter');

                if (filterName === 'Option') {
                    document.getElementById('expiry-date').hidden = false;
                    document.getElementById('Order-type').hidden = false;
                } else if (filterName === 'Future') {
                    document.getElementById('expiry-date').hidden = false;
                    document.getElementById('Order-type').hidden = true;
                } else {
                    document.getElementById('expiry-date').hidden = true;
                    document.getElementById('Order-type').hidden = true;
                }

                activeFilter = filterName;

                console.log('Active Filter:', activeFilter);
            }

            function setActiveFilterCP(selectedButton, filterName) {
                const buttons = document.querySelectorAll('.filterCP');

                buttons.forEach(button => {
                    button.classList.remove('filterCP');
                    button.classList.add('light');
                });

                selectedButton.classList.remove('light');
                selectedButton.classList.add('filterCP');

                activeFilterCP = filterName;

                console.log('Active FilterCP:', activeFilterCP);
            }



            function getActiveFilter() {
                return activeFilter;
            }

            function getActiveFilterCP() {
                return activeFilterCP;
            }

            console.log('Active Filter:', activeFilter);
            console.log('Active FilterCP:', activeFilterCP);
        </script>
        <script>
            //fetch all scripts from the server


            //implement search script using of $scripts variable thgen filter the scripts their we serach tradingSymbol
            function searchScript(input) {

                const searchValue = input.value.toLowerCase();
                if (getActiveFilter() == 'Future') {
                    // get api call for future
                    let url = 'searchScript?search=' + searchValue + '&type=future';
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            // api response 
                            updateContactsList(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                } else if (getActiveFilter() == 'Option') {

                    let url = 'searchScript?search=' + searchValue + '&type=option';
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            updateContactsList(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });

                } else if (getActiveFilter() == 'Indicies') {
                    let url = 'searchScript?search=' + searchValue + '&type=indices';
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            updateContactsList(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                } else {
                    let url = 'searchScript?search=' + searchValue + '&type=all';
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            updateContactsList(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }


            }

            function updateContactsList(responseData) {
                const container = document.getElementById("RecentActivityContent");

                // Clear existing content
                container.innerHTML = "";

                // Loop through API response and create new elements
                responseData.forEach((item) => {
                    const contentHTML = `
        <div class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
            <div class="d-flex align-items-center">
                <img src="https://s3tv-symbol.dhan.co/symbols/${item.assetSymbol}.svg" alt="" class="avatar" id="avatar">
                <div class="ms-3">
                    <h5 class="mb-1"><a href="#" id="script_symbol">${item.tradingSymbol}</a></h5>
                    <span class="fs-14 text-muted" id="script_description">Expiry: ${item.expiry}, Segment: ${item.segment}</span>
                </div>
            </div>
            <div class="icon-box icon-box-sm bgl-primary">
                <a href="javascript:void(0)" id="add_script">
                    <img src="https://cdn-icons-png.flaticon.com/128/3925/3925158.png" width="24" alt="">
                </a>
            </div>
        </div>
    `;
                    container.insertAdjacentHTML("beforeend", contentHTML);
                });
            }

            function updateScript(script) {
                const scriptSymbol = document.getElementById('script_symbol');
                const scriptDescription = document.getElementById('script_description');
                const avatar = document.getElementById('avatar');
                const addScript = document.getElementById('add_script');
                let logo = `https://s3tv-symbol.dhan.co/symbols/${script.assetSymbol}.svg`;

                scriptSymbol.innerText = script.tradingSymbol;
                scriptDescription.innerText = script.expiry;
                avatar.src = logo;

            }
        </script>
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
        <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>
