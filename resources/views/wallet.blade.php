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


        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card market-overview">
                        <div class="card-header border-0 flex-wrap pb-0">
                            <div class="d-flex align-items-center flex-wrap mb-3 mb-sm-0">
                                <h4 class="card-title mb-0">Market Overview</h4>
                                {{-- <h4 class="fs-16 font-w500 m-0">Depth Chart</h4>
                                <h4 class="fs-16 font-w500 m-0">Market Details</h4> --}}
                                {{-- <span>
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.52549 0V7.71177H0V11.2882H7.52549V19H11.4745V11.2882H19V7.71177H11.4745V0H7.52549Z" fill="var(--primary)"/>
                                    </svg>

                                </span> --}}

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-flex align-items-center">
                                    <h4 class="me-5 font-w600 mb-0"><span class="text-success me-2">BUY</span> $5,673
                                    </h4>
                                    <h4 class="font-w600 mb-0"><span class="text-danger me-2">SELL</span> $5,982</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center  mt-md-0 mt-2">
                                    <ul class="nav nav-pills" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="Week-tab" data-bs-toggle="tab"
                                                data-bs-target="#Week" href="#Week" role="tab"
                                                aria-selected="true">Week</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="Month-tab" data-bs-toggle="tab"
                                                data-bs-target="#Month" href="#Month" role="tab"
                                                aria-selected="false">Month</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="Year-tab" data-bs-toggle="tab"
                                                data-bs-target="#Year" href="#Year" role="tab"
                                                aria-selected="false">Year</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>


                            <div id="marketOverview"></div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--**********************************
        Scripts
    ***********************************-->


        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- Datatable -->
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script>

        <!-- Apex Chart -->
        <script src="vendor/apexchart/apexchart.js"></script>
        {{-- <script src="vendor/apexchart/apexchart-init.js"></script> --}}

        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>


        <!-- Dashboard 1 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



        {{-- <script>
            (function($) {
                /* "use strict" */

                var dlabChartlist = function() {
                    var screenWidth = $(window).width();

                    var peityLine = function() {
                        $(".peity-line").peity("line", {
                            fill: ["rgba(253, 83, 83, 0)"],
                            strokeWidth: "2",
                            width: "50",
                            radius: 6,
                            height: "30",
                        });
                    };

                    var peityLine2 = function() {
                        $(".peity-line2").peity("line", {
                            fill: ["rgba(58, 182, 152, 0)"],
                            stroke: "#3AB67A",
                            strokeWidth: "2",
                            width: "50",
                            radius: 6,
                            height: "30",
                        });
                    };

                    var marketOverview = function() {
                        var options = {
                            series: [{
                                data: []
                            }], // Initially empty, data will be updated dynamically
                            chart: {
                                type: "candlestick",
                                height: 350,
                                toolbar: {
                                    show: false,
                                },
                            },
                            grid: {
                                show: false
                            },
                            plotOptions: {
                                candlestick: {
                                    colors: {
                                        upward: "#fd5353",
                                        downward: "#3ab67a",
                                    },
                                },
                            },
                            title: {
                                text: "",
                                align: "left",
                            },
                            xaxis: {
                                type: "datetime"
                            },
                            yaxis: {
                                opposite: true,
                                tooltip: {
                                    enabled: true
                                },
                            },
                        };

                        if ($("#marketOverview").length > 0) {
                            var marketOverview1 = new ApexCharts(
                                document.querySelector("#marketOverview"),
                                options
                            );
                            marketOverview1.render();

                            // Fetch and update chart data
                            fetchData(marketOverview1);

                            $(".market-overview .nav-link").on("click", function() {
                                if ($(this).attr("href") == "#Week") {
                                    fetchData(marketOverview1, "week");
                                } else if ($(this).attr("href") == "#Month") {
                                    fetchData(marketOverview1, "month");
                                } else if ($(this).attr("href") == "#Year") {
                                    fetchData(marketOverview1, "year");
                                }
                            });
                        }
                    };

                    async function fetchData(chartInstance, period = "default") {
                        try {
                            let url = "/fetch-stock-data/NSE_FO|41289";
                            if (period !== "default") {
                                url += `?period=${period}`; // Adjust API URL if different time periods are needed
                            }
                            console.log(url);


                            const response = await fetch(url);
                            if (!response.ok) throw new Error("Network response was not ok");

                            const rawData = await response.json();
                            if (!rawData || rawData.length === 0) throw new Error("No valid data available");

                            const formattedData = rawData.map((item) => ({
                                x: new Date(item[0]), // Convert timestamp to Date object
                                y: [item[1], item[2], item[3], item[4]], // Open, High, Low, Close
                            }));

                            if (!formattedData || formattedData.length === 0) throw new Error(
                                "Formatted data is empty");

                            console.log("Formatted Data:", formattedData);

                            // Update the chart with new data
                            if (chartInstance) {
                                chartInstance.updateSeries([{
                                    data: formattedData
                                }]);
                            } else {
                                console.warn("Chart instance is not initialized.");
                            }
                        } catch (error) {
                            console.error("Error fetching or setting data:", error);
                        }
                    }

                    /* Function ============ */
                    return {
                        init: function() {},
                        load: function() {
                            peityLine();
                            peityLine2();
                            marketOverview();
                        },
                        resize: function() {},
                    };
                }();

                jQuery(window).on("load", function() {
                    setTimeout(function() {
                        dlabChartlist.load();
                    }, 1000);
                });
            })(jQuery);
        </script> --}}

        <script>
            (function($) {
                /* "use strict" */

                var dlabChartlist = function() {
                    var screenWidth = $(window).width();

                    var peityLine = function() {
                        $(".peity-line").peity("line", {
                            fill: ["rgba(253, 83, 83, 0)"],
                            strokeWidth: "2",
                            width: "50",
                            radius: 6,
                            height: "30",
                        });
                    };

                    var peityLine2 = function() {
                        $(".peity-line2").peity("line", {
                            fill: ["rgba(58, 182, 152, 0)"],
                            stroke: "#3AB67A",
                            strokeWidth: "2",
                            width: "50",
                            radius: 6,
                            height: "30",
                        });
                    };

                    var marketOverview = function() {
                        var options = {
                            series: [{
                                data: []
                            }],
                            chart: {
                                type: "candlestick",
                                height: 350,
                                toolbar: {
                                    show: true,
                                    tools: {
                                        zoom: true,
                                        zoomin: true,
                                        zoomout: true,
                                        pan: true,
                                        reset: true
                                    },
                                },
                                zoom: {
                                    enabled: true,
                                    type: 'x', // Enables horizontal zoom
                                    autoScaleYaxis: true
                                },
                                animations: {
                                    enabled: true,
                                    easing: 'easeinout',
                                    speed: 500
                                }
                            },
                            grid: {
                                show: false
                            },
                            plotOptions: {
                                candlestick: {
                                    colors: {
                                        upward: "#fd5353",
                                        downward: "#3ab67a",
                                    },
                                },
                            },
                            // title: {
                            //     text: "Market Overview",
                            //     align: "left",
                            // },
                            xaxis: {
                                type: "datetime"
                            },
                            yaxis: {
                                opposite: true,
                                tooltip: {
                                    enabled: true
                                },
                            },
                        };

                        if ($("#marketOverview").length > 0) {
                            var marketOverview1 = new ApexCharts(
                                document.querySelector("#marketOverview"),
                                options
                            );
                            marketOverview1.render();

                            // Fetch and update chart data (default to "day")
                            fetchData(marketOverview1, "day");

                            $(".market-overview .nav-link").on("click", function() {
                                let period = "day"; // Default
                                if ($(this).attr("href") === "#Week") {
                                    period = "week";
                                } else if ($(this).attr("href") === "#Month") {
                                    period = "month";
                                } else if ($(this).attr("href") === "#Year") {
                                    period = "year";
                                }
                                fetchData(marketOverview1, period);
                            });
                        }
                    };

                    async function fetchData(chartInstance, period = "day") {
                        try {
                            let url = `/fetch-stock-data/NSE_FO|41289/${period}`;
                            console.log(url);

                            const response = await fetch(url);
                            if (!response.ok) throw new Error("Network response was not ok");

                            const rawData = await response.json();
                            if (!rawData || rawData.length === 0) throw new Error("No valid data available");

                            const formattedData = rawData.map((item) => ({
                                x: new Date(item[0]), // Convert timestamp to Date object
                                y: [item[1], item[2], item[3], item[4]], // Open, High, Low, Close
                            }));

                            console.log("Formatted Data:", formattedData);

                            if (chartInstance) {
                                chartInstance.updateSeries([{
                                    data: formattedData
                                }]);
                            } else {
                                console.warn("Chart instance is not initialized.");
                            }
                        } catch (error) {
                            console.error("Error fetching or setting data:", error);
                        }
                    }

                    return {
                        init: function() {},
                        load: function() {
                            peityLine();
                            peityLine2();
                            marketOverview();
                        },
                        resize: function() {},
                    };
                }();

                jQuery(window).on("load", function() {
                    setTimeout(function() {
                        dlabChartlist.load();
                    }, 1000);
                });

            })(jQuery);

            
        </script>




        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>


</body>

<!-- Mirrored from jiade.dexignlab.com/xhtml/history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 08:05:24 GMT -->

</html>
