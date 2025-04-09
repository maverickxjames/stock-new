<?php
// $user = Auth::user();

//import models of deposit and withdraw
use App\Models\deposit;
use App\Models\withdraw;
use App\Models\User;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .list-group-item.active {
            background: #06C167 !important;
        }

        .bg-warning {
            background: #06C167 !important;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 4% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            /*transform: translateY(-100%);*/
        }

        .close {
            float: right;
            text-align: right;
            font-size: 30px;
        }

        .modal-content h2 {
            text-align: center;
            margin-top: -35px;
        }

        .button_div {
            justify-content: center;
            text-align: center;
        }

        .button_div button {
            margin-right: 10px;
            background: #06C167;
            border: 1px solid #06C167;
            padding: 5px 15px;
            color: #FFFFFF;
            border-radius: 2px;
        }

        #addAddressForm input {
            padding: 5px;
        }

        .nice-select {
            padding: 0px !important;
            height: 38px !important;
            line-height: 38px !important;
        }

        .add_address_button {
            background: #06C167;
            border: 1px solid #06C167;
            padding: 5px 15px;
            color: #FFFFFF;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .main_flex_div {
                display: flex;
                flex-direction: column;
            }

            .inner_flex_div {
                min-width: 100% !important;
            }

            .modal-content {
                padding: 10px 0px !important;
                min-width: 95% !important;
                height: 700px;
                overflow: scroll;
            }

            .close {
                margin-right: 10px;
            }
        }

        .list-group-item.active {
            background: #ffc107;
        }

        /* end common class */
        .top-status ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
        }

        .top-status ul li {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            border: 8px solid #ddd;
            box-shadow: 1px 1px 10px 1px #ddd inset;
            margin: 10px 5px;
        }

        .top-status ul li.active {
            border-color: #06C167;
            box-shadow: 1px 1px 20px 1px #ffc107 inset;
        }

        /* end top status */

        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 30px;
        }

        ul.timeline>li:before {
            content: '\2713';
            background: #fff;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #d4d9df;
            font-size: 24px;
            border: 2px solid var(--ogenix-primary);
        }

        ul.timeline>li.active:before {
            content: '\2713';
            background: #28a745;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 30px;
            border: 2px solid var(--ogenix-primary);
        }

        /* end timeline */
    </style>

    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">



                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <x-adminsidebar />

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User</h1>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </div>


         
            <div class="col-md">
                <div class="card">
                    {{-- <section class="my-5"> --}}
                            <div class="main-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">

                                                    <div class="mt-3">
                                                        <h2>Baisc Info</h2>
                                                             <p><strong>Name:</strong> {{ $user->name }}</p>
                                                             <p><strong>Email Address:</strong> {{ $user->email }}</p>
                                                             <p><strong>Account:</strong> {{ $user->is_dummy
                                                            ?"DEMO" : "REAl" }}</p>
                                                             <p><strong>User ID:</strong> {{ $user->user_id }}</p>
                                                             <p><strong>Username:</strong> {{ $user->username }}</p>
                                                             <hr/>
                                                             <h2>Wallet Info</h2>
                                                             <p><strong>Real Wallet:</strong> {{ $user->real_wallet }}</p>
                                                             <p><strong>Demo Wallet:</strong> {{ $user->demo_wallet }}</p>
                                                             <p><strong>Withdraw Wallet:</strong> {{ $user->demo_wallet }}</p>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="col-md">
                                            <div class="card">
                                                <div class="card-header p-2">
                                                    <h4>Payment History</h4>
                                                    <!-- Navigation Tabs -->
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#deposit" data-toggle="tab">Deposit</a></li>
                                                        <li class="nav-item"><a class="nav-link " href="#withdraw" data-toggle="tab">Withdraw</a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <!-- User's Complete Transaction History -->
                                                        <div class="active tab-pane" id="deposit">
                                                            <div class="card">
                                                                <table id="example1" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Order ID</th>
                                                                            <th>Amount</th>
                                                                            <th>Prrof</th>
                                                                            <th>UPI</th>
                                                                            <th>UTR</th>
                                                                            <th>Time</th>
                                                                            <th>Status</th>
                                                                            {{-- <th>Action</th> --}}
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                       @php
                                                                           $deposits=DB::table('deposits')->where('userid',$user->id)->get();
                                                                       @endphp
                                                                        @foreach ($deposits as $row)
                                                                          
                                                                        
                                                                            <tr>
                                                                                <td>{{ $loop->iteration }}</td>
                                                                                <td>{{ $row->order_id }}</td>
                                                                                <td>{{ $row->amount }}</td>
                                                                                <td>
                                                                                    <img 
                                                                                        src="{{ asset('storage/payment_ss/'.$row->payment_ss) }}" 
                                                                                        alt="proof" 
                                                                                        style="width: 100px; height: 100px; cursor: pointer;" 
                                                                                        onclick="showFullImage('{{ asset('../storage/payment_ss/'.$row->payment_ss) }}')">
                                                                                </td>
                                                                                <td>{{ $row->upi }}</td>
                                                                                <td>{{ $row->utr }}</td>
                                                                                <td>{{ $row->created_at }}</td>
                                                                                <td>
                                                                                    @if ($row->status == 0)
                                                                                        <span class="badge badge-warning">Pending</span>
                                                                                    @elseif ($row->status == 1)
                                                                                        <span class="badge badge-success">Approved</span>
                                                                                    @else
                                                                                        <span class="badge badge-danger">Declined</span>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                            
                                                                    
                                                                    </tbody>
                                                                </table>
                                    
                                                            </div>
                                                        </div>
                                    
                                                        <!-- Deposit-Specific Transactions -->
                                                        <div class="tab-pane" id="withdraw">
                                                            <div class="card">
                                                                <table id="example2" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Txn ID</th>
                                                                            <th>Amount</th>
                                                                            <th>Type</th>
                                                                            <th>UPI</th>
                                                                            <th>Time</th>
                                                                            <th>Status</th>
                                                                            {{-- <th>Action</th> --}}
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                       @php
                                                                           $withdraws=DB::table('withdraws')->where('userid',$user->id)->get();
                                                                       @endphp
                                                                        @foreach ($withdraws as $row)
                                                                          
                                                                        
                                                                        <tr>
                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>{{ $row->txnid }}</td>
                                                                            <td>{{ $row->amount }}</td>
                                                                            <td>{{ $row->type }}</td>
                                                                            <td>
                                                                                @php
                                                                                    $paymentInfo = json_decode($row->payment_info, true); // Decode the JSON string into an array
                                                                                @endphp
                                                                            
                                                                                @if ($paymentInfo['is_upi'] && isset($paymentInfo['upi']))
                                                                                    {{ $paymentInfo['upi'] }}
                                                                                @elseif ($paymentInfo['is_bank'] && isset($paymentInfo['bank']))
                                                                                    {{ $paymentInfo['bank'] }}
                                                                                @else
                                                                                    Not Available
                                                                                @endif
                                                                            </td>
                                                                            <td>{{ $row->created_at }}</td>
                                                                            <td>
                                                                                @if ($row->status == 0)
                                                                                    <span class="badge badge-warning">Pending</span>
                                                                                @elseif ($row->status == 1)
                                                                                    <span class="badge badge-success">Approved</span>
                                                                                @else
                                                                                    <span class="badge badge-danger">Declined</span>
                                                                                @endif
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

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-md">
                                            <div class="card">
                                                <div class="card-header p-2">
                                                    <h4>Order History</h4>
                                                    <!-- Navigation Tabs -->
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#processing" data-toggle="tab">Processing</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#executed" data-toggle="tab">Executed</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#failed" data-toggle="tab">Failed</a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="active tab-pane" id="processing">
                                                            <div class="card">
                                                                <table id="example3" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Script</th>
                                                                            <th>Expiry</th>
                                                                            <th>Instrument Key</th>
                                                                            <th>Order Type</th>
                                                                            <th>Type</th>
                                                                            <th>Order Action</th>
                                                                            <th>Duration</th>
                                                                            <th>Lot</th>
                                                                            <th>Quantity</th>
                                                                            <th>Limit Price</th>
                                                                            <th>Stop Loss Price</th>
                                                                            <th>Order Cost</th>
                                                                            <th>Total Order Cost</th>
                                                                            <th>Margin Used</th>
                                                                            <th>Order Date</th>
                                                                         
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                       @php
                                                                           $trades=DB::table('trades')->where('user_id',$user->id)->where('status', "processing")->get();
                                                                       @endphp
                                                                        @foreach ($trades as $row)
                                                                            <tr>
                                                                                <td>{{ $loop->iteration }}</td>
                                                                                <td>{{ $row->stock_symbol }}</td>
                                                                                <td>{{ $row->expiry }}</td>
                                                                                <td>{{ $row->instrumentKey }}</td>
                                                                                <td>{{ $row->order_type }}</td>
                                                                                <td>{{ $row->tradeType }}</td>
                                                                                <td>{{ $row->action }}</td>
                                                                                <td>{{ $row->duration }}</td>
                                                                                <td>{{ $row->lotSize }}</td>
                                                                                <td>{{ $row->quantity }}</td>
                                                                                <td>{{ $row->price }}</td>
                                                                                <td>{{ $row->stop_loss!=NULL?$row->stop_loss:'none' }}</td>
                                                                                <td>₹{{ $row->cost }}</td>
                                                                                <td>₹{{ $row->total_cost }}</td>
                                                                                <td>₹{{ $row->cost-$row->total_cost }}({{ $row->margin }})x</td>
                                                                                <td>{{ $row->created_at }}</td>
                                                                               
                                                                               
                                                                            </tr>
                                                                        @endforeach
                            
                                                                    
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="executed">
                                                            <div class="card">
                                                                <table id="example4" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Script</th>
                                                                            <th>Expiry</th>
                                                                            <th>Instrument Key</th>
                                                                            <th>Order Type</th>
                                                                            <th>Type</th>
                                                                            <th>Order Action</th>
                                                                            <th>Duration</th>
                                                                            <th>Lot</th>
                                                                            <th>Quantity</th>
                                                                            <th>Stop Loss Price</th>
                                                                            <th>Profit & Loss</th>
                                                                            <th>Profit & Loss %</th>
                                                                            <th>Order Cost</th>
                                                                            <th>Total Order Cost</th>
                                                                            <th>Margin Used</th>
                                                                            <th>Order Date</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                       @php
                                                                           $trades=DB::table('trades')->where('user_id',$user->id)->where('status', "executed")->get();
                                                                       @endphp
                                                                        @foreach ($trades as $row)
                                                                            <tr>
                                                                                <td>{{ $loop->iteration }}</td>
                                                                                <td>{{ $row->stock_symbol }}</td>
                                                                                <td>{{ $row->expiry }}</td>
                                                                                <td>{{ $row->instrumentKey }}</td>
                                                                                <td>{{ $row->order_type }}</td>
                                                                                <td>{{ $row->tradeType }}</td>
                                                                                <td>{{ $row->action }}</td>
                                                                                <td>{{ $row->duration }}</td>
                                                                                <td>{{ $row->lotSize }}</td>
                                                                                <td>{{ $row->quantity }}</td>
                                                                                <td>{{ $row->stop_loss!=NULL?$row->stop_loss:'none' }}</td>
                                                                                <td>₹{{ $row->profit_loss }}</td>
                                                                                <td>{{ $row->profit_loss_percentage }}%</td>
                                                                                <td>₹{{ $row->cost }}</td>
                                                                                <td>₹{{ $row->total_cost }}</td>
                                                                                <td>₹{{ $row->cost-$row->total_cost }}({{ $row->margin }})x</td>
                                                                                <td>{{ $row->created_at }}</td>
                                                                               
                                                                               
                                                                              
                                                                            </tr>
                                                                        @endforeach
                            
                                                                    
                                                                    </tbody>
                                                                </table>
                                    
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="failed">
                                                            <div class="card">
                                                                <table id="example5" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>USER ID</th>
                                                                            <th>Date</th>
                                                                            <th>Script</th>
                                                                            <th>Order Type</th>
                                                                            <th>Order Action</th>
                                                                            <th>Duration</th>
                                                                            <th>Lot</th>
                                                                            <th>Quantity</th>
                                                                            <th>Cost</th>
                                                                            <th>Order Cost</th>
                                                                            <th>Margin Used</th>
                                                                            <th>Expiry</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                       @php
                                                                           $trades=DB::table('trades')->where('user_id',$user->id)->where('status', "failed")->get();
                                                                       @endphp
                                                                        @foreach ($trades as $row)
                                                                            @php
                                                                                $user = User::where('id', $row->user_id)->first();
                                                                            @endphp
                                                                        
                                                                            <tr>
                                                                                <td>{{ $loop->iteration }}</td>
                                                                                <td>{{ $user->user_id }}</td>
                                                                                <td>{{ $row->created_at }}</td>
                                                                                <td>{{ $row->stock_symbol }}</td>
                                                                                <td>{{ $row->order_type }}</td>
                                                                                <td>{{ $row->action }}</td>
                                                                                <td>{{ $row->duration }}</td>
                                                                                <td>{{ $row->lotSize }}</td>
                                                                                <td>{{ $row->quantity }}</td>
                                                                                <td>₹{{ $row->cost }}</td>
                                                                                <td>₹{{ $row->total_cost }}</td>
                                                                                <td>{{ $row->margin }}</td>
                                                                                <td>{{ $row->expiry }}</td>
                                                                               
                                                                            
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
                            </div>
                    {{-- </section> --}}
                </div>

            </div>

        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    
       

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "pageLength": 5,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "pageLength": 5,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
            $("#example4").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
            $("#example5").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

           

        });
        function showFullImage(imageUrl) {
        Swal.fire({
            title: 'Proof Image',
            imageUrl: imageUrl,
            imageAlt: 'Proof Image',
            width: 'auto',
            confirmButtonText: 'Close',
        });
    }
    </script>


    <script>



    </script>



</body>

</html>