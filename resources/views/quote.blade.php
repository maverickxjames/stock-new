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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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

    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<style>
    #preload {
        position: fixed;
        width: 100%;
        height: 100%;
        background: black;
        /* Pure black background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }



    .blink {
        animation: blink-animation 1.5s infinite;
    }

    @keyframes blink-animation {
        50% {
            opacity: 0;
        }
    }

    /* .badge-success {
    background-color: #28a745;
    color: #fff;
}

.badge-danger {
    background-color: #dc3545;
    color: #fff;
} */

    .trade-container {
        display: flex;
        flex-direction: column;
        padding: 0;
        /* Remove padding from container */
        margin: 0;
    }

    .trade-item {
        padding: 5px 10px;
        /* Padding inside each trade item */
        border-bottom: 1px solid #ddd;
        /* Add a bottom border for separation */
        font-size: 16px;
        /* Adjust font size */
        color: #333;
        /* Set a nice text color */
        background-color: #f9f9f9;
        /* Optional: Add background color */
        transition: background-color 0.3s;
        /* Add a smooth transition effect */
        display: flex;
        justify-content: space-between;
    }

    .trade-item h2 {
        margin: 0;
        /* Remove margin for the heading */
        /* color: #565656; */
        font-family: serif;
        font-weight: 600;
    }

    .trade-item:last-child {
        border-bottom: none;
        /* Remove the border for the last item */
    }

    .trade-item:hover {
        background-color: #e9ecef;
        /* Add hover effect for better interactivity */
        cursor: pointer;
        /* Pointer cursor for better UX */
    }
</style>

<style>
    .offcanvas-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* padding: 1rem 1.5rem; */
        border-bottom: 1px solid #e9ecef;
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
</style>

<body>

    <!--Preloader start-->
    <div id="preload">
        <p style="color: white; font-size: 1.5rem;"></p>
    </div>

    <!--Preloader end-->




    <!--Main wrapper start-->
    <div id="main-wrapper" class="show">

        <!--Nav header start-->
        <x-nav-header />
        <!--Nav header end-->

        <!--Header start-->
        <x-header />
        <!--Header end-->


        <!--Sidebar start-->
        <x-sidebar />

        <x-footer-menu />
        <!--Sidebar end-->

        {{-- @php
        $fetch = $fetch->toArray();
        print_r($fetch);
        @endphp --}}

        <!--content body start-->
        <div id="quotesRefresh">
            @include('components.quotes', ['fetch' => $fetch])
        </div>







    </div>
    </div>
    </div>


    {{-- main body --}}






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
                                <input type="text" class="form-control" id="searchinp" placeholder="Search Script"
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
                        <div id="scrollR" class=" cm-content-body card-body pt-4 pb-0 height800 dlab-scroll">
                            <div class="contacts-list" id="RecentActivityContent">
                                <p id="msg" class="text-center">Enter at least 2 characters in the Search
                                    box above to see results here.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <script>
        // Trade Start

        // buy form
        $(document).on('submit', '[id^="buyform"]', function(e) {
            e.preventDefault();
            var form = $(this);

            var url = form.attr('action');
            var type = form.attr('method');

            var formData = Object.fromEntries(new URLSearchParams(form.serialize()));
            console.log(formData);
            


            const id = formData.id;


            let data = {
                instrumentKey: formData[`instrumentKey1${id}`],
                orderType: formData[`orderType1${id}`],
                // quantity:formData[`quantity1${id}`],
                price: formData[`realprice1${id}`],
                limitPrice: formData[`limitprice1${id}`],
                targetPrice:formData[`targetprice1${id}`],
                lotSize: formData[`lotSize1${id}`],
                // costPrice:document.getElementById(`costPrice1${id}`).textContent,
                tradeType: formData[`tradeMode1${id}`],
                _token: formData._token,
                // id:formData.id,
            }

            if (formData[`lotSize1${id}`] < 1) {
                Toastify({
                    text: "Lot size must be greater than 0.",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                    offset: {
                        y: "90px" // Moves it 60px down from the top
                    },
                    backgroundColor: "#FF5733",
                }).showToast();
                return;
            }

            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1, // Keep it visible until manually closed
                gravity: "top",
                offset: {
                    y: "90px" // Moves it 60px down from the top
                },
                position: "center",
                backgroundColor: "#3498db", // Blue for loading
            }).showToast();

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    loadingToast.hideToast(); // Hide loading toast

                    response = JSON.parse(response);


                    if (response.status === 'success') {
                        Toastify({
                            text: "✅ Order Placed ",
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            position: "center",
                            backgroundColor: "#3ab67a",
                            callback: function() {
                                let offcanvas = document.getElementById(
                                    `orderoffcanvasBottom${id}`
                                ); // Use ID to select offcanvas
                                let bsOffcanvas = bootstrap.Offcanvas.getInstance(
                                    offcanvas);
                                bsOffcanvas.hide(); // Close the offcanvas

                                // Remove the backdrop after hiding the offcanvas
                                setTimeout(() => {
                                    document.querySelectorAll('.offcanvas-backdrop')
                                        .forEach(backdrop => {
                                            backdrop.remove();
                                        });
                                }, 300);
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            backgroundColor: "#FF5733",
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast(); // Hide loading toast in case of error

                    Toastify({
                        text: xhr.responseJSON?.message ||
                            'An error occurred while placing the order.',
                        duration: 3000,
                        gravity: "top",
                        position: "center",
                        offset: {
                            y: "90px" // Moves it 60px down from the top
                        },
                        backgroundColor: "#FF5733",
                    }).showToast();


                }
            });




        });


        // sell form
        $(document).on('submit', '[id^="sellform"]', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var type = form.attr('method');

            var formData = Object.fromEntries(new URLSearchParams(form.serialize()));


            const id = formData.id2;


            let data = {
                instrumentKey: formData[`instrumentKey2${id}`],
                orderType: formData[`orderType2${id}`],
                // quantity:formData[`quantity1${id}`],
                price: formData[`realprice2${id}`],
                limitPrice: formData[`limitprice2${id}`],
                lotSize: formData[`lotSize2${id}`],
                targetPrice:formData[`targetprice2${id}`],
                // costPrice:document.getElementById(`costPrice1${id}`).textContent,
                tradeType: formData[`tradeMode2${id}`],
                _token: formData._token,
                // id:formData.id,
            }

            if (formData[`lotSize2${id}`] < 1) {
                Toastify({
                    text: "Lot size must be greater than 0.",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                    offset: {
                        y: "90px" // Moves it 60px down from the top
                    },
                    backgroundColor: "#FF5733",
                }).showToast();
                return;
            }

            const loadingToast = Toastify({
                text: "Processing your order...",
                duration: -1, // Keep it visible until manually closed
                gravity: "top",
                offset: {
                    y: "90px" // Moves it 60px down from the top
                },
                position: "center",
                backgroundColor: "#3498db", // Blue for loading
            }).showToast();


            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    loadingToast.hideToast();
                    response = JSON.parse(response);

                    if (response.status === 'success') {
                        Toastify({
                            text: "✅ Order Placed ",
                            duration: 1500,
                            gravity: "top",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            position: "center",
                            backgroundColor: "#3ab67a",
                            callback: function() {
                                let offcanvas = document.getElementById(
                                    `orderoffcanvasBottom${id}`
                                ); // Use ID to select offcanvas
                                let bsOffcanvas = bootstrap.Offcanvas.getInstance(
                                    offcanvas);
                                bsOffcanvas.hide(); // Close the offcanvas

                                // Remove the backdrop after hiding the offcanvas
                                setTimeout(() => {
                                    document.querySelectorAll('.offcanvas-backdrop')
                                        .forEach(backdrop => {
                                            backdrop.remove();
                                        });
                                }, 300);
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message ||
                                "An error occurred while placing the order.",
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            offset: {
                                y: "90px" // Moves it 60px down from the top
                            },
                            backgroundColor: "#FF5733",
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    loadingToast.hideToast(); // Hide loading toast in case of error

                    Toastify({
                        text: xhr.responseJSON?.message ||
                            'An error occurred while placing the order.',
                        duration: 3000,
                        gravity: "top",
                        position: "center",
                        offset: {
                            y: "90px" // Moves it 60px down from the top
                        },
                        backgroundColor: "#FF5733",
                    }).showToast();
                }
            });

        });
        // Trade End 
    </script>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="vendor/apexchart/apexchart.js"></script>
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        Echo.channel('watchlists')
            .listen('Watchlist', (event) => {
                console.log(event);
                const feeds = event.watchlist.feeds;
                
                // Iterate through the received WebSocket data
                for (const key in feeds) {
                    if (feeds.hasOwnProperty(key)) {
                        const feedData = feeds[key].ff.marketFF; // Data from WebSocket
                        const receivedIsin = key; // Full ISIN, e.g., "NSE_EQ|IN02837383"

                        const isinElement = Array.from(document.querySelectorAll("p[id^='isin']")).find(el => el
                            .textContent === receivedIsin);

                        // const isinElement = Array.from(document.querySelectorAll("p[id^='isin']")).find(el => el.textContent === receivedIsin);
                        if (isinElement) {
                            const rowId = isinElement.id.replace('isin', '');
                            // console.log(rowId);

                            const ltp = feedData?.ltpc?.ltp || 1;
                            const cp = feedData?.ltpc?.cp || 0;



                            document.getElementById(`ltp${rowId}`).textContent = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`realprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            // document.getElementById(`limitprice1${rowId}`).value = feedData.ltpc.ltp || '0';
                            // document.getElementById(`limitprice2${rowId}`).value = feedData.ltpc.ltp || '0';
                            document.getElementById(`highlow${rowId}`).textContent = feedData.marketOHLC.ohlc[0].high ||
                                '0' +
                                '/' + feedData.marketOHLC.ohlc[0].low || '0';
                            document.getElementById(`openclose${rowId}`).textContent = feedData.marketOHLC.ohlc[0]
                                .open || '0' + '/' + feedData.marketOHLC.ohlc[0].close || '0';

                            // const percentageChange = ((ltp - cp) / ltp * 100).toFixed(2) || '0';
                            const percentageChange = ltp && cp ? (((ltp - cp) / cp) * 100).toFixed(2) : '0';


                            const badgeValue = (ltp - cp).toFixed(2) || '0';


                            document.getElementById(`change${rowId}`).innerHTML = `
                                        ${percentageChange > 0 ? '<span class="badge badge-success me-1">▲</span>' : '<span class="badge badge-danger me-1">▼</span>'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp' : '<span class="text-danger" id="perc'+rowId+'">'+percentageChange+'%</span>&nbsp'}
                                         ${percentageChange>0 ? '<span class="text-success" id="perc'+rowId+'"> ('+badgeValue+' pts)</span>' : '<span class="text-danger" id="perc'+rowId+'">  ('+badgeValue+' pts)</span>'}


                                `;




                            // bid and ask
                            document.getElementById(`bid${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .bidQ || '0';
                            document.getElementById(`ask${rowId}`).textContent = feedData.marketLevel.bidAskQuote[0]
                                .askQ || '0';
                        } else {
                            // console.log('ISIN not found:', receivedIsin);
                        }

                    }
                }
            });
    
            const userId = '{{ $user->id }}';
            // Echo Private Channel for User
            Echo.channel('quote-channel')
                .listen('QuoteChannel', (data) => {
                    console.log("New quote received:", data);
                    if (data.userId == userId) {



                        $.ajax({
                        url: '{{ route("quoteRefresh") }}', // Define this route
                        type: 'GET',
                        success: function(response) {
                            // delete quotesRefresh old data and replace with new data

                            $('#quotesRefresh').html(response);

                            
                        }
                    });

                    }
                    // Refresh the component
                    
                });
    
    
    
    
    </script>




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

        }



        function getActiveFilter() {
            return activeFilter;
        }

        function getActiveFilterCP() {
            return activeFilterCP;
        }

        




        function showOrderForm(index) {
            const offcanvasId = `orderoffcanvasBottom${index}`;
            const offcanvasElement = document.getElementById(offcanvasId);
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();

        }

        //fetch all scripts from the server


        //implement search script using of $scripts variable thgen filter the scripts their we serach tradingSymbol
        let searchTimeout;
        let page = 1;
        let isFetching = false;
        let hasMoreData = true;
        let searchValue = '';

        function searchScript(input) {
            clearTimeout(searchTimeout);

            searchTimeout = setTimeout(() => {
                searchValue = input.value.toLowerCase().trim();
                if (!searchValue) return;

                page = 1;
                hasMoreData = true;
                fetchResults(true);
            }, 500);
        }

        function fetchResults(isNewSearch = false) {
            if (isFetching || !hasMoreData) return;
            isFetching = true;

            let type;
            switch (getActiveFilter()) {
                case 'Future':
                    type = 'future';
                    break;
                case 'Option':
                    type = 'option';
                    break;
                case 'Indicies':
                    type = 'indices';
                    break;
                default:
                    type = 'all';
            }

            showLoading();

            let url = `searchScript?search=${encodeURIComponent(searchValue)}&type=${type}&page=${page}&limit=10`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (isNewSearch) {
                        updateContactsList(data);
                    } else {
                        appendContactsList(data);
                    }

                    if (data.length < 10) {
                        hasMoreData = false;
                    } else {
                        page++;
                    }
                })
                .catch(error => console.error('Error:', error))
                .finally(() => {
                    isFetching = false;
                });
        }

        // Detect scroll to bottom
        document.getElementById("scrollR").addEventListener("scroll", function() {
            let offcanvas = this;
            if (offcanvas.scrollTop + offcanvas.clientHeight >= offcanvas.scrollHeight - 20) {
                fetchResults();
            }
        });

        function updateContactsList(responseData) {
            const container = document.getElementById("RecentActivityContent");

            // Clear existing content
            container.innerHTML = "";

            // Loop through API response and create new elements
            responseData.forEach((item) => {

                const contentHTML = `
                                    <div onclick='addWatchlist(${JSON.stringify(item)})' class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
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



        function appendContactsList(responseData) {
            const container = document.getElementById("RecentActivityContent");
            const loadingIndicator = document.getElementById("loadingIndicator");

            // Hide loading indicator before adding new data
            loadingIndicator.style.display = "none";

            // Loop through API response and create new elements
            responseData.forEach((item) => {
                const contentHTML = `
                            <div onclick='addWatchlist(${JSON.stringify(item)})' class="d-flex justify-content-between my-3 border-bottom-dashed pb-3">
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



        // Function to show loading indicator
        function showLoading() {
            const container = document.getElementById("RecentActivityContent");
            let loadingIndicator = document.getElementById("loadingIndicator");

            if (!loadingIndicator) {
                loadingIndicator = document.createElement("div");
                loadingIndicator.id = "loadingIndicator";
                loadingIndicator.innerHTML =
                    `<div class="text-center my-3"><span class="spinner-border text-primary"></span> Loading...</div>`;
                container.appendChild(loadingIndicator);
            }

            loadingIndicator.style.display = "block";
        }

        // Buy Sell Feature Start 

        // function handleOrderTypeChange(id, orderType, tradeType) {

        //     if (tradeType === 'sell') {
        //         const priceInput = document.getElementById("realprice2" + id);
        //         const limitprice = document.getElementById("limitprice2" + id);
        //         const limitblock = document.getElementById("limitblock2" + id);
        //         if (orderType === 'limit') {
        //             // Change `priceInput` type to 'hidden' and `limitprice` type to 'text'
        //             limitblock.style.display = 'flex';
        //             limitprice.setAttribute("type", "text");
        //             limitprice.value = priceInput.value; // Copy the value
        //             priceInput.disabled = false; // Enable input
        //             limitprice.disabled = false; // Enable input
        //         } else if (orderType === 'market') {
        //             // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
        //             priceInput.setAttribute("type", "text");
        //             limitprice.setAttribute("type", "hidden");
        //             limitblock.style.display = 'none';
        //             priceInput.disabled = true; // Disable input
        //             limitprice.disabled = true; // Disable input
        //         } else if (orderType === 'stoploss') {
        //             // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
        //             priceInput.setAttribute("type", "text");
        //             limitprice.setAttribute("type", "hidden");
        //             priceInput.disabled = false; // Enable input
        //             limitprice.disabled = true; // Disable input
        //         }
        //     } else {
        //         const priceInput = document.getElementById("realprice1" + id);
        //         const limitprice = document.getElementById("limitprice1" + id);
        //         const limitblock = document.getElementById("limitblock1" + id);

        //         if (orderType === 'limit') {
        //             // Change `priceInput` type to 'hidden' and `limitprice` type to 'text'
        //             // priceInput.setAttribute("type", "hidden");
        //             limitprice.setAttribute("type", "text");
        //             limitblock.style.display = 'flex';
        //             limitprice.value = priceInput.value; // Copy the value
        //             priceInput.disabled = false; // Enable input
        //             limitprice.disabled = false; // Enable input
        //         } else if (orderType === 'market') {
        //             // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
        //             // priceInput.setAttribute("type", "text");
        //             limitprice.setAttribute("type", "hidden");
        //             limitblock.style.display = 'none';
        //             priceInput.disabled = true; // Disable input
        //             limitprice.disabled = true; // Disable input
        //         } else if (orderType === 'stoploss') {
        //             // Change `priceInput` type to 'text' and `limitprice` type to 'hidden'
        //             // priceInput.setAttribute("type", "text");
        //             limitprice.setAttribute("type", "hidden");
        //             priceInput.disabled = false; // Enable input
        //             limitprice.disabled = true; // Disable input
        //         }
        //     }
        // }


    function handleOrderTypeChange(id, orderType, tradeType) {
    // Define all button IDs dynamically
    let orderT, buttons, selectedBtn;

    if (tradeType === "buy") {
        orderT = document.getElementById(`orderType1${id}`);
        buttons = [
            `marketBtn1${id}`,
            `limitBtn1${id}`,
            `stoplossMarketBtn1${id}`,
            `stoplossLimitBtn1${id}`
        ];
    } else {
        orderT = document.getElementById(`orderType2${id}`);
        buttons = [
            `marketBtn2${id}`,
            `limitBtn2${id}`,
            `stoplossMarketBtn2${id}`,
            `stoplossLimitBtn2${id}`
        ];
    }


    

     // Reset all buttons
    buttons.forEach(btnId => {
        const btn = document.getElementById(btnId);
        if (btn) {
            btn.classList.remove("btn-primary", "active");
            btn.classList.add("btn-outline-primary");
        }
    });

    // Highlight selected button
    selectedBtn = document.getElementById(`${orderType}Btn${tradeType === "buy" ? "1" : "2"}${id}`);
    if (selectedBtn) {
        selectedBtn.classList.remove("btn-outline-primary");
        selectedBtn.classList.add("btn-primary", "active");
    }
    // Update the hidden input value correctly
    if (orderT) {
        orderT.value = orderType;
    }

     // Get relevant input fields
    let priceInput = document.getElementById(`realprice${tradeType === "buy" ? "1" : "2"}${id}`);
    let limitprice = document.getElementById(`limitprice${tradeType === "buy" ? "1" : "2"}${id}`);
    let limitblock = document.getElementById(`limitblock${tradeType === "buy" ? "1" : "2"}${id}`);
    let targetpriceInput = document.getElementById(`targetprice${tradeType === "buy" ? "1" : "2"}${id}`);
    let targetpriceblock = document.getElementById(`targetpriceblock${tradeType === "buy" ? "1" : "2"}${id}`);

    // Ensure elements exist before modifying them
    if (limitblock) limitblock.style.display = 'none';
    if (targetpriceblock) targetpriceblock.style.display = 'none';

    // Handle different order types
    if (orderType === 'limit') {
        if (limitblock) limitblock.style.display = 'flex';
        if (limitprice) {
            limitprice.setAttribute("type", "text");
            limitprice.value = priceInput ? priceInput.value : ""; // Copy value
            limitprice.disabled = false;
        }
        if (priceInput) priceInput.disabled = false;
        if (targetpriceInput) targetpriceInput.disabled = true;
    } else if (orderType === 'market') {
        if (priceInput) {
            priceInput.setAttribute("type", "text");
            priceInput.disabled = true;
        }
        if (limitprice) {
            limitprice.setAttribute("type", "hidden");
            limitprice.disabled = true;
        }
        if (targetpriceInput) targetpriceInput.disabled = true;
    } else if (orderType === 'stoplossMarket') {
        if (targetpriceblock) targetpriceblock.style.display = 'flex';
        if (targetpriceInput) {
            targetpriceInput.setAttribute("type", "text");
            targetpriceInput.disabled = false;
        }
        if (priceInput) priceInput.disabled = false;
        if (limitprice) limitprice.disabled = true;
    } else if (orderType === 'stoplossLimit') {
        if (targetpriceblock) targetpriceblock.style.display = 'flex';
        if (targetpriceInput) {
            targetpriceInput.setAttribute("type", "text");
            targetpriceInput.disabled = false;
        }
        if (limitblock) limitblock.style.display = 'flex';
        if (limitprice) {
            limitprice.setAttribute("type", "text");
            limitprice.value = priceInput ? priceInput.value : ""; // Copy value
            limitprice.disabled = false;
        }
        if (priceInput) priceInput.disabled = false;
    }
}
        function getMarginValue(instrumentType, selectedMode) {
            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                return 500;
            } else if (instrumentType == 'FUT' && selectedMode == 'delivery') {
                return 50;
            } else if (instrumentType == 'CE' || instrumentType == 'PE') {
                return 7;
            } else {
                return 0;
            }
        }

        function updateColors(wallet, mcp, uniqueId, tradeType) {
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const errorFund = document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId);

            if (wallet >= mcp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                marginCost.style.color = 'green';
                errorFund.style.display = 'none';
            } else {
                maxPrice.style.color = 'red';
                marginCost.style.color = 'rgba(113, 117, 121, 0.75)';
                errorFund.style.display = 'block';
            }
        }

        function handleTradeModeChange(uniqueId, selectedMode, tradeType) {
            const lotInput = document.getElementById('lotSize' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginUsed=document.getElementById('marginUsed'+(tradeType === 'sell' ? '2' : '1') + uniqueId);
            const instrumentType = document.getElementById('instrumentType' + uniqueId).value;

            let margin = getMarginValue(instrumentType, selectedMode);
            let realPriceValue = parseFloat(realPrice.value) || 0;
            let lotValue = parseInt(lotInput.value) || 1; // Default to 1 if empty
            let quantityValue = parseInt(quantity.value) || 1;

            if (lotInput && realPriceValue) {
                let cp = (realPriceValue * lotValue * quantityValue).toFixed(2);
                let mcp = ((realPriceValue * lotValue * quantityValue) / margin).toFixed(2);

                marginCost.innerHTML = `₹ ${mcp}`;
                costPrice.innerHTML = `₹ ${cp}`;
                marginUsed.innerHTML=`(${margin}x)`;
            }
        }

        
        function incrementLot(quantityPerLot, uniqueId, wallet, tradeType) {

            const lotInput = document.getElementById('lotSize' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const selectedMode = document.querySelector(`input[name="tradeMode1${uniqueId}"]:checked`).value;
            const marginUsed=document.getElementById('marginUsed'+(tradeType === 'sell' ? '2' : '1') + uniqueId);
           

            const instrumentType = document.getElementById('instrumentType' + uniqueId).value;

            let margin = 0;

            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                margin = 500;
            } else if(instrumentType == 'FUT' && selectedMode == 'delivery'){ 
                margin = 50;
            }else if (instrumentType == 'CE' || instrumentType == 'PE') {
                margin = 7;
            } else {
                margin = 0;
            }



            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Increment the lot size
            lotInput.value = currentValue + 1;

            // Update quantity and cost price
            quantity.value = lotInput.value * quantityPerLot;
            let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
            let mcp = ((realPriceValue * lotInput.value * quantityPerLot) / margin).toFixed(2);


            marginCost.innerHTML = `₹ ${mcp}`;
                costPrice.innerHTML = `₹ ${cp}`;
                marginUsed.innerHTML=`(${margin}x)`;

            // Update color logic
            if (wallet >= mcp) {
                maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                // costPrice.style.color = 'green';
                marginCost.style.color = 'green';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'none';
            } else {
                maxPrice.style.color = 'red';
                // costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                marginCost.style.color = 'rgba(113, 117, 121, 0.75)';
                document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                    'block';
            }


        }

        function decrementLot(quantityPerLot, uniqueId, wallet, tradeType) {

            const lotInput = document.getElementById('lotSize' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const quantity = document.getElementById('quantity' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const costPrice = document.getElementById('costPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const maxPrice = document.getElementById('maxPrice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const realPrice = document.getElementById('realprice' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginCost = document.getElementById('marginCost' + (tradeType === 'sell' ? '2' : '1') + uniqueId);
            const marginUsed=document.getElementById('marginUsed'+(tradeType === 'sell' ? '2' : '1') + uniqueId);
            const selectedMode = document.querySelector(`input[name="tradeMode1${uniqueId}"]:checked`).value;

            const instrumentType = document.getElementById('instrumentType' + uniqueId).value;

            let margin = 0;

            if (instrumentType == 'FUT' && selectedMode == 'intraday') {
                margin = 500;
            } else if(instrumentType == 'FUT' && selectedMode == 'delivery'){ 
                margin = 50;
            }else if (instrumentType == 'CE' || instrumentType == 'PE') {
                margin = 7;
            } else {
                margin = 0;
            }

            let currentValue = parseInt(lotInput.value) || 0;
            let realPriceValue = parseFloat(realPrice.value) || 0;

            // Decrement the lot size only if it's greater than 1
            if (currentValue > 1) {
                lotInput.value = currentValue - 1;

                // Update quantity and cost price
                quantity.value = lotInput.value * quantityPerLot;
                let cp = (realPriceValue * lotInput.value * quantityPerLot).toFixed(2);
                let mcp = ((realPriceValue * lotInput.value * quantityPerLot) / margin).toFixed(2);

                marginCost.innerHTML = `₹ ${mcp}`;
                costPrice.innerHTML = `₹ ${cp}`;
                marginUsed.innerHTML=`(${margin}x)`;

                // Update color logic
                if (wallet >= mcp) {
                    maxPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                    costPrice.style.color = 'green';
                    document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                        'none';
                } else {
                    maxPrice.style.color = 'red';
                    costPrice.style.color = 'rgba(113, 117, 121, 0.75)';
                    document.getElementById('error-fund' + (tradeType === 'sell' ? '2' : '1') + uniqueId).style.display =
                        'block';
                }
            } else {
                console.log("Lot size cannot be less than 1.");
            }


        }


        // Buy Sell Feature End 


        // Add Watch List  Start


        function addWatchlist(item) {
       //use ajax and swel fire to add watchlist  using of post method

       const loadingToast = Toastify({
           text: "Processing your order...",
           duration: -1, // Keep it visible until manually closed
           gravity: "top",
           offset: {
               y: "90px" // Moves it 60px down from the top
           },
           position: "center",
           backgroundColor: "#3498db", // Blue for loading
       }).showToast();


       $.ajax({
           url: "{{ route('add-watchlist') }}",
           type: "POST",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
           },
           data: item,

           success: function(response) {
               loadingToast.hideToast();
               // response = JSON.parse(response);
               if (response.success) {
                   Toastify({
                       text: "✅ Script Added to Watchlist",
                       duration: 1500,
                       gravity: "top",
                       offset: {
                           y: "90px" // Moves it 60px down from the top
                       },
                       position: "center",
                       backgroundColor: "#3ab67a",
                   }).showToast();
               } else {
                
                   Toastify({
                       text: response.message || "An error occurred.",
                       duration: 1500,
                       close: true,
                       gravity: "top",
                       offset: {
                           y: "90px" // Moves it 60px down from the top
                       },
                       position: "center",
                       backgroundColor: "#dc3545"
                   }).showToast();
               }
           },
           error: function(xhr) {
            loadingToast.hideToast();
               Toastify({
                   text: xhr.responseJSON?.message || "An error occurred while adding the script.",
                   duration: 3000,
                   close: true,
                   gravity: "top",
                   offset: {
                       y: "90px" // Moves it 60px down from the top
                   },
                   position: "center",
                   backgroundColor: "#dc3545"
               }).showToast();
               console.error(xhr.responseJSON);
           }
       });


   }



   function removeWatchlist(id) {

       const loadingToast = Toastify({
           text: "Processing your order...",
           duration: -1, // Keep it visible until manually closed
           gravity: "top",
           offset: {
               y: "90px" // Moves it 60px down from the top
           },
           position: "center",
           backgroundColor: "#3498db", // Blue for loading
       }).showToast();

       $.ajax({
           url: "{{ route('remove-watchlist') }}",
           type: "POST",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
           },
           data: {
               id: id
           },
           success: function(response) {
               loadingToast.hideToast();
               if (response.success) {
                   Toastify({
                       text: "✅ Script Removed from Watchlist",
                       duration: 1500,
                       gravity: "top",
                       offset: {
                           y: "90px" // Moves it 60px down from the top
                       },
                       position: "center",
                       backgroundColor: "#3ab67a"
                   }).showToast();
               } else {
                   Toastify({
                       text: response.message || "An error occurred.",
                       duration: 3000,
                       gravity: "top",
                       offset: {
                           y: "90px" // Moves it 60px down from the top
                       },
                       position: "center",
                       backgroundColor: "#dc3545"
                   }).showToast();
               }
           },
           error: function(xhr) {
            loadingToast.hideToast();
               Toastify({
                   text: xhr.responseJSON?.message || "An error occurred while removing the script.",
                   duration: 3000,
                   gravity: "top",
                   offset: {
                       y: "90px" // Moves it 60px down from the top
                   },
                   position: "center",
                   backgroundColor: "#dc3545"
               }).showToast();
               console.error(xhr.responseJSON);
           }
       });

   }



        // Remove Watchlist End

        function handleChartClick(foisin, modalId) {
            console.log("Clicked on chart for:", foisin, modalId);

            var offcanvas = new bootstrap.Offcanvas(document.getElementById(`offcanvasBottom${modalId}`));
            offcanvas.show();
            let chartContainer = document.getElementById(`marketOverview${modalId}`);
            if (!chartContainer) {
                console.error("Chart container not found:", `marketOverview${modalId}`);
                return;
            }
            if (window.marketOverviewChart) {
                window.marketOverviewChart.destroy();
            }

            async function fetchData(period = "day") {
                try {
                    let url = `/fetch-stock-data/${foisin}/${period}`;
                    console.log("Fetching data from:", url);

                    const response = await fetch(url);
                    if (!response.ok) throw new Error("Network response was not ok");

                    const rawData = await response.json();
                    if (!rawData || rawData.length === 0) throw new Error("No valid data available");

                    const formattedData = rawData.map((item) => ({
                        x: new Date(item[0]),
                        y: [item[1], item[2], item[3], item[4]] // Open, High, Low, Close
                    }));

                    console.log("Formatted Data:", formattedData);

                    let options = {
                        series: [{
                            data: formattedData
                        }],
                        chart: {
                            type: "candlestick",
                            height: 350,
                            toolbar: {
                                show: true
                            }
                        },
                        xaxis: {
                            type: "datetime"
                        },
                        yaxis: {
                            opposite: true,
                            tooltip: {
                                enabled: true
                            }
                        }
                    };

                    // if (window.marketOverviewChart) {
                    //     window.marketOverviewChart.updateSeries([{
                    //         data: formattedData
                    //     }]);
                    // } else {
                    //     window.marketOverviewChart = new ApexCharts(chartContainer, options);
                    //     window.marketOverviewChart.render();
                    // }

                    if (window.marketOverviewChart) {
                        try {
                            window.marketOverviewChart.updateSeries([{
                                data: formattedData
                            }]);
                        } catch (error) {
                            console.warn("Chart update failed, reinitializing...", error);
                            window.marketOverviewChart = new ApexCharts(chartContainer, options);
                            window.marketOverviewChart.render();
                        }
                    } else {
                        window.marketOverviewChart = new ApexCharts(chartContainer, options);
                        window.marketOverviewChart.render();
                    }

                } catch (error) {
                    console.error("Error fetching or setting data:", error);
                }
            }

            fetchData("day");

            document.querySelectorAll(".market-overview .nav-link").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();

                    let period = "day"; // Default period
                    if (this.id === `Week-tab${modalId}`) {
                        period = "week";
                    } else if (this.id === `Month-tab${modalId}`) {
                        period = "month";
                    } else if (this.id === `Year-tab${modalId}`) {
                        period = "year";
                    }



                    fetchData(period);
                });
            });
        }

        window.Echo.channel('stocks')
            .listen('Stock', (e) => {
                console.log("Stock event received:", e);
    
                // Extracting stock data from the event
                let sensexData = e.stocks?.feeds?.["BSE_INDEX|SENSEX"]?.ff?.indexFF;
                let niftyData = e.stocks?.feeds?.["NSE_INDEX|NIFTY 50"]?.ff?.marketFF;

               
    
                if (sensexData) {
                    let sensexLtp = sensexData.ltpc.ltp;
                    let sensexCP = sensexData.ltpc.cp;
                    let sensexChange = sensexLtp - sensexCP;
                    
                    let sensexChangePercent = ((sensexChange / sensexCP) * 100).toFixed(2);
    
                    document.getElementById('sensexLtp').textContent = sensexLtp.toFixed(2);
                    document.getElementById('sensexChange').innerHTML = `
                        <p class="${sensexChange >= 0 ? 'text-success' : 'text-danger'} fw-bold mb-1">
                            ${sensexChangePercent}%
                        </p>
                        <p class="${sensexChange >= 0 ? 'text-success' : 'text-danger'} fs-5 fw-semibold">
                            ${sensexChange.toFixed(2)}
                        </p>
                    `;
                }
    
                if (niftyData && niftyData.ltpc.length > 0) {
                    let niftyLtp = niftyData.ltpc[0].ltp;
                    let niftyPrevClose = niftyData.ltpc[0].cp;
                    let niftyChange = niftyLtp - niftyPrevClose;
                    let niftyChangePercent = ((niftyChange / niftyPrevClose) * 100).toFixed(2);
    
                    document.getElementById('niftyLtp').textContent = niftyLtp.toFixed(2);
                    document.getElementById('niftyChange').innerHTML = `
                        <p class="${niftyChange >= 0 ? 'text-success' : 'text-danger'} fw-bold mb-1">
                            ${niftyChangePercent}%
                        </p>
                        <p class="${niftyChange >= 0 ? 'text-success' : 'text-danger'} fs-5 fw-semibold">
                            ${niftyChange.toFixed(2)}
                        </p>
                    `;
                }
            });
    </script>






    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Apex Chart -->



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    {{-- <script src="js/demo.js"></script> --}}

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>


</html>