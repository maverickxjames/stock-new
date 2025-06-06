@php
$user = Auth::user();
@endphp

<div>

        <div class="row">
            <div class="col-xl-12">
                @php
                    $fetch = DB::table('watchlist')->where('userId', $user->id)->where('instrumentType', 'INDEX')->get();
                    $data=DB::table('future_temp')->where('instrumentType','INDEX')->where('segment', 'NSE_INDEX')->where('is_watchlist',1)->get();

              @endphp


                @if($fetch->isEmpty())
                <div class="error-page" style="height: 50vh;">
                    <div class="error-inner text-center">
                        <div class="dz-error">
                            <img src="https://cdn-icons-png.flaticon.com/128/7486/7486754.png" alt="error"
                                class="img-fluid mb-3">
                        </div>

                        <h2 class="error-head mb-0">No Data Found.</h2>
                        <p>Please First Add to Watchlist</p>
                        <a onclick="showWatchlist('future',{{ $data }})"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight" class="btn btn-secondary">ADD WATCHLIST</a>
                    </div>
                </div>
                @else
                <div class="row">
                    <?php
                    $i = 1;
                    foreach ($fetch as $key) {
                        $foisin = $key->instrumentKey;
                        $isin = $key->isIn;
                        $id = $key->id;
                        $instrumentType = $key->instrumentType;
                        $stock = DB::table('future_temp')->where('instrumentKey', $foisin)->first();
                        $quantity = $stock->lotSize;
                    ?>          
                

                    <div class="modal fade" id="exampleModalCenter4{{ $i }}">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-lg shadow-lg"
                                style="--bs-bg-opacity: 1;background: rgb(21,76,160);
                                    background: linear-gradient(90deg, rgba(21,76,160,1) 52%, rgba(0,212,255,1) 100%);">
                                <!-- Modal Header -->
                                <div
                                    class="modal-header px-3 py-2 d-flex align-items-center justify-content-between border-0 bg-transparent">
                                    <div class="d-flex align-items-center gap-2">
                                        <span><img
                                                src="https://s3tv-symbol.dhan.co/symbols/<?php    echo $stock->assetSymbol; ?>.svg"
                                                alt="" style="border-radius: 100%;width:2rem;height:2rem"></span>
                                        <h5 class="modal-title fw-bold fs-2" style="color: #fff">{{
                                            $key->tradingSymbol }}</h5>
                                    </div>
                                    {{-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                    <button type="button" data-bs-dismiss="modal"
                                        style="border: none;border-radius:100%">
                                        <img src="https://cdn-icons-png.flaticon.com/128/9974/9974058.png" width="30"
                                            alt="">
                                    </button>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body p-3">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="trade-item d-flex align-items-center p-2 rounded border shadow-sm"
                                            onclick="showOrderForm(4,{{ $i }})" data-bs-dismiss="modal">
                                            <img src="https://cdn-icons-png.flaticon.com/128/15342/15342293.png"
                                                width="30" class="me-2" alt="Trade Logo">
                                            <h6 class="mb-0 flex-grow-1 fs-2">Trade</h6>
                                        </div>

                                        <div class="trade-item d-flex align-items-center p-2 rounded border shadow-sm"
                                            onclick="handleChartClick('{{ $foisin }}', 4,'{{ $i }}')"
                                            data-bs-dismiss="modal">
                                            <img src="https://cdn-icons-png.flaticon.com/128/2285/2285559.png"
                                                width="30" class="me-2" alt="Chart Logo">
                                            <h6 class="mb-0 flex-grow-1 fs-2">Chart</h6>
                                        </div>

                                        <div class="trade-item d-flex align-items-center p-2 rounded border shadow-sm"
                                            onclick="window.location.href='{{ route('stockDetail', ['id' => $foisin]) }}'"
                                            data-bs-dismiss="modal">
                                            <img src="https://cdn-icons-png.flaticon.com/128/4519/4519615.png"
                                                width="30" class="me-2" alt="Details Logo">
                                            <h6 class="mb-0 flex-grow-1 fs-2">Details</h6>
                                        </div>

                                        <div class="trade-item d-flex align-items-center p-2 rounded border shadow-sm text-danger"
                                            onclick="removeWatchlist({{ $id }})" data-bs-dismiss="modal">
                                            <img src="https://cdn-icons-png.flaticon.com/128/1450/1450571.png"
                                                width="30" class="me-2" alt="Remove Logo">
                                            <h6 class="mb-0 flex-grow-1 fs-2">Remove</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top-up Modal End -->

                    <!--chart offcanvas start -->
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom4{{ $i }}"
                        aria-labelledby="offcanvasBottomLabel" style="height: fit-content;">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chart</h5>
                            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                                style="border: none"><img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                    width="20" alt=""></button>

                        </div>
                        <div class="offcanvas-body small p-0">
                            <div class="card market-overview">
                                <div class="card-header border-0 flex-wrap pb-0">
                                    <div class="d-flex align-items-center flex-wrap mb-3 mb-sm-0">
                                        <h4 class="card-title mb-0 " style="font-size: 2rem;font-weight:900">
                                            {{ $stock->tradingSymbol }}
                                        </h4>


                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        {{-- <div class="d-flex align-items-center">
                                            <h4 class="me-5 font-w600 mb-0"><span class="text-success me-2">BUY</span>
                                                $5,673
                                            </h4>
                                            <h4 class="font-w600 mb-0"><span class="text-danger me-2">SELL</span> $5,982
                                            </h4>
                                        </div> --}}
                                        <div class="d-flex justify-content-between align-items-center  mt-md-0 mt-2">
                                            <ul class="nav nav-pills" id="myTab1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="Day-tab{{ $i }}" data-bs-toggle="tab"
                                                        data-bs-target="#Day" href="#Day" role="tab"
                                                        aria-selected="true">Day</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="Week-tab{{ $i }}" data-bs-toggle="tab"
                                                        data-bs-target="#Week" href="#Week" role="tab"
                                                        aria-selected="true">Week</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="Month-tab{{ $i }}" data-bs-toggle="tab"
                                                        data-bs-target="#Month" href="#Month" role="tab"
                                                        aria-selected="false">Month</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="Year-tab{{ $i }}" data-bs-toggle="tab"
                                                        data-bs-target="#Year" href="#Year" role="tab"
                                                        aria-selected="false">Year</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>


                                    <div id="marketOverview4{{ $i }}" style="height: 300px"></div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--chart offcanvas end -->


                    <!-- Trade offcanvas model -->

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="orderoffcanvasBottom4{{ $i }}"
                        aria-labelledby="offcanvasBottomLabel" style="height: fit-content">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title fs-2" id="offcanvasBottomLabel{{ $i }}">
                                Trade
                            </h5>

                            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                                style="border: none"><img src="https://cdn-icons-png.flaticon.com/128/2976/2976286.png"
                                    width="20" alt=""></button>
                        </div>

                        <div class="offcanvas-body small">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header flex-wrap">


                                            <nav class="" style="width: 100%;">
                                                <div class="nav nav-pills light " id="nav-tab" role="tablist">
                                                    <button class="nav-link active " style="width: 50%;"
                                                        id="nav-order-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-order4{{ $i }}" type="button" role="tab"
                                                        aria-selected="true">Buy</button>
                                                    <button class="nav-link" style="width: 50%" id="nav-histroy-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-history4{{ $i }}"
                                                        type="button" role="tab" aria-selected="false">Sell
                                                    </button>

                                                </div>
                                            </nav>

                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-order4{{ $i }}"
                                                    role="tabpanel" aria-labelledby="nav-order-tab">
                                                    <div class="table-responsive dataTabletrade">
                                                        <form id="buyform4{{ $i }}" name="buyform4{{ $i }}" method="POST"
                                                            action="{{ route('placeBuyOrder') }}">
                                                            @csrf
                                                            <input type="text" name="id" value="{{ $i }}" id="id"
                                                                hidden>
                                                                <input type="text" name="row" value="4" id="row"
                                                                hidden>
                                                            <input type="text" name="instrumentKey41{{ $i }}"
                                                                value="{{ $foisin }}" id="instrumentKey41{{ $i }}"
                                                                hidden>
                                                            <input type="text" name="instrumentType41{{ $i }}"
                                                                value="{{ $instrumentType }}"
                                                                id="instrumentType41{{ $i }}" hidden>
                                                            <div class="col-xl-4" style="width: 100%;">
                                                                <div class="card">
                                                                    <div class="card-body pt-2">
                                                                        <!-- Available Balance -->
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                            <span class="small text-muted">Available
                                                                                Balance</span>
                                                                            <span class="text-dark">{{
                                                                                $user->real_wallet }}</span>
                                                                        </div>
                                                                        <!-- Order Type Selector -->
                                                                        <input type="text" value="market"
                                                                            name="orderType41{{ $i }}"
                                                                            id="orderType41{{ $i }}" hidden>
                                                                        <div class="mb-3 d-flex flex-column">
                                                                            <label class="form-label">Order Type</label>
                                                                            <div class="btn-group" role="group">
                                                                                   {{-- <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    id="marketBtn11{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(1,{{ $i }}, 'market', 'buy')">Market</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="limitBtn11{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(1,{{ $i }}, 'limit', 'buy')">Limit</button> --}}
                                                                                    <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    id="stoplossMarketBtn41{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(4,{{ $i }}, 'stoplossMarket', 'buy')">Market</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossLimitBtn41{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(4,{{ $i }}, 'stoplossLimit', 'buy')">Limit</button>
                                                                               
                                                                            </div>
                                                                        </div>

                                                                        <!-- Price Input -->
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text">Market
                                                                                Price</span>
                                                                            <input id="realprice41{{ $i }}"
                                                                                name="realprice41{{ $i }}" readonly
                                                                                type="text" class="form-control"
                                                                                placeholder="Enter price"
                                                                                value="{{ $stock->ltp }}">


                                                                            <span class="input-group-text">₹</span>
                                                                        </div>
                                                                        <!-- Limit Input -->
                                                                        <div id="limitblock41{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Limit
                                                                                Price</span>
                                                                            <input id="limitprice41{{ $i }}"
                                                                                name="limitprice41{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price" value="0.00">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <div id="stoplossblock41{{ $i }}"
                                                                        class="input-group mb-3">
                                                                        <span class="input-group-text">Stop Loss
                                                                        </span>
                                                                        <input id="stoploss41{{ $i }}"
                                                                            name="stoploss41{{ $i }}"
                                                                            type="text" class="form-control"
                                                                            placeholder="Enter price">

                                                                        <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        {{-- marketstoploss input --}}
                                                                        <div id="targetpriceblock41{{ $i }}"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Target Price
                                                                            </span>
                                                                            <input id="targetprice41{{ $i }}"
                                                                                name="targetprice41{{ $i }}" 
                                                                                 class="form-control"
                                                                                placeholder="Enter price">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>



                                                                        <div class=""
                                                                            style="display: flex; justify-content:space-between; gap:20px;">
                                                                            <div class="d-flex flex-column gap-2 w-50">
                                                                                <span class="fs-5">Lot</span>
                                                                                <div class=" input-group mb-3">
                                                                                    <button
                                                                                        onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }}, 'buy',4)"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="decrement">-</button>
                                                                                    <input type="text"
                                                                                        class="form-control text-center"
                                                                                        placeholder="Enter size"
                                                                                        id="lotSize41{{ $i }}"
                                                                                        name="lotSize41{{ $i }}"
                                                                                        value="1" readonly>
                                                                                    <button
                                                                                        onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'buy',4)"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="increment">+</button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="d-flex flex-column gap-2 w-50">
                                                                                <span class="fs-5">Quantity</span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter size"
                                                                                    id="quantity41{{ $i }}"
                                                                                    name="quantity41{{ $i }}" value={{
                                                                                    $quantity }} onkeyup="handleQuantityChange({{ $quantity }},{{ $i }},{{ $user->real_wallet }},'buy',4)">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Take Profit & Stop Loss -->
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Mode</label>
                                                                            <div
                                                                                class="d-flex align-items-center gap-3">
                                                                                <!-- Intraday Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode41{{ $i }}"
                                                                                        id="intradayMode41{{ $i }}"
                                                                                        value="intraday"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'intraday','buy',4)"
                                                                                        checked>
                                                                                    <label class="form-check-label"
                                                                                        for="intradayMode41{{ $i }}">
                                                                                        Intraday
                                                                                    </label>
                                                                                </div>
                                                                                <!-- Delivery Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode41{{ $i }}"
                                                                                        id="deliveryMode41{{ $i }}"
                                                                                        value="delivery"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'delivery','buy',4)">
                                                                                    <label class="form-check-label"
                                                                                        for="deliveryMode1{{ $i }}">
                                                                                        Delivery
                                                                                    </label>
                                                                                </div>


                                                                            </div>
                                                                        </div>



                                                                        <!-- Cost and Max Info -->
                                                                        <div
                                                                            class="d-flex justify-content-between flex-wrap">
                                                                            {{-- <div class="d-flex">
                                                                                <div>Cost:</div>
                                                                                <div id="costPrice1{{ $i }}">
                                                                                    ₹0.00</div>
                                                                            </div> --}}
                                                                            <div
                                                                                class="d-flex justify-content-between flex-wrap align-items-center">
                                                                                <!-- Displaying Cost and Margin Price -->
                                                                                <div class="d-flex flex-column">
                                                                                    <span>
                                                                                        Cost: <s id="costPrice41{{ $i }}"
                                                                                            name="costPrice41{{ $i }}"
                                                                                            class="px-1">₹ {{ number_format($stock->ltp*1*$quantity,2) }}(500x)</s><span
                                                                                            id="marginUsed1{{ $i }}"></span>
                                                                                    </span>
                                                                                    <span>
                                                                                        After Margin: <span
                                                                                            id="marginCost41{{ $i }}"
                                                                                            class="text-success">₹ {{ number_format($stock->ltp*1*$quantity/500,2) }}</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <div>Max:</div>
                                                                                <div id="maxPrice41{{ $i }}"
                                                                                    name="maxPrice41{{ $i }}"
                                                                                    class=" px-1">
                                                                                    ₹{{ $user->real_wallet }}
                                                                                </div>


                                                                            </div>

                                                                        </div>
                                                                        <div>
                                                                            <p id="error-fund1{{ $i }}"
                                                                                style="display: none;color:red">
                                                                                Insuffient Fund</p>
                                                                        </div>

                                                                        <!-- Buy/Sell Buttons -->
                                                                        <div
                                                                            class="mt-3 d-flex justify-content-between">
                                                                            <button type="subit"
                                                                                class="btn btn-success btn-sm  text-uppercase me-3 btn-block">BUY</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>




                                                <div class="tab-pane fade" id="nav-history4{{ $i }}" role="tabpanel">
                                                    <div class="table-responsive dataTabletrade">
                                                        <form id="sellform4{{ $i }}" name="sellform4{{ $i }}" method="POST"
                                                            action="{{ route('placeSellOrder') }}">
                                                            @csrf
                                                            <input type="text" name="id2" value="{{ $i }}" id="id"
                                                                hidden>
                                                            
                                                            <input type="text" name="row2" value="4" id="row2"
                                                                hidden>
                                                            <input type="text" name="instrumentKey42{{ $i }}"
                                                                value="{{ $foisin }}" id="instrumentKey42{{ $i }}"
                                                                hidden>
                                                                <input type="text" name="instrumentType42{{ $i }}"
                                                                value="{{ $instrumentType }}"
                                                                id="instrumentType42{{ $i }}" hidden>
                                                            <div class="col-xl-4" style="width: 100%;">
                                                                <div class="card">
                                                                    <div class="card-body pt-2">
                                                                        <!-- Available Balance -->
                                                                        <!-- Available Balance -->
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                                            <span class="small text-muted">Available
                                                                                Balance</span>
                                                                            <span class="text-dark">{{
                                                                                $user->real_wallet }}</span>
                                                                        </div>

                                                                        <!-- Order Type Selector -->


                                                                        <input type="text" value="market"
                                                                            name="orderType42{{ $i }}"
                                                                            id="orderType42{{ $i }}" hidden>
                                                                        <div class="mb-3 d-flex flex-column">
                                                                            <label class="form-label">Order Type</label>
                                                                            <div class="btn-group" role="group">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    id="stoplossMarketBtn42{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(4,{{ $i }}, 'stoplossMarket', 'sell')">Market</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossLimitBtn42{{ $i }}"
                                                                                    onclick="handleOrderTypeChange(4,{{ $i }}, 'stoplossLimit', 'sell')">Limit</button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Price Input -->
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text">Market
                                                                                Price</span>
                                                                            <input id="realprice42{{ $i }}"
                                                                                name="realprice42{{ $i }}" readonly
                                                                                type="text" class="form-control"
                                                                                placeholder="Enter price"
                                                                                value="{{ $stock->ltp }}">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <!-- Limit Input -->
                                                                        <div id="limitblock42{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Limit
                                                                                Price</span>
                                                                            <input id="limitprice42{{ $i }}"
                                                                                name="limitprice42{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price" value="0.00">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <div id="stoplossblock42{{ $i }}"
                                                                        class="input-group mb-3">
                                                                        <span class="input-group-text">Stop Loss
                                                                        </span>
                                                                        <input id="stoploss42{{ $i }}"
                                                                            name="stoploss42{{ $i }}"
                                                                            type="text" class="form-control"
                                                                            placeholder="Enter price">

                                                                        <span class="input-group-text">₹</span>
                                                                    </div>

                                                                        {{-- marketstoploss input --}}
                                                                        <div id="targetpriceblock42{{ $i }}"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Target Price
                                                                            </span>
                                                                            <input id="targetprice42{{ $i }}"
                                                                                name="targetprice42{{ $i }}"
                                                                                class="form-control"
                                                                                placeholder="Enter price">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <div class=""
                                                                            style="display: flex; justify-content:space-between; gap:20px;">
                                                                            <div class="d-flex gap-2 w-50 flex-column">
                                                                                <span class="fs-5 ">Lot</span>
                                                                                <div class="input-group mb-3">
                                                                                    <button
                                                                                        onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }},'sell',4)"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="decrement">-</button>
                                                                                    <input type="text"
                                                                                        class="form-control text-center"
                                                                                        placeholder="Enter size"
                                                                                        id="lotSize42{{ $i }}"
                                                                                        name="lotSize42{{ $i }}"
                                                                                        value="1" readonly>
                                                                                    <button
                                                                                        onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'sell',4)"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="increment">+</button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="d-flex gap-2 flex-column w-50">
                                                                                <span class="fs-5">Quantity</span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter size"
                                                                                    id="quantity42{{ $i }}"
                                                                                    name="quantity42{{ $i }}" value={{
                                                                                    $quantity }} onkeyup="handleQuantityChange({{ $quantity }},{{ $i }},{{ $user->real_wallet }},'sell',4)">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Take Profit & Stop Loss -->
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Mode</label>
                                                                            <div
                                                                                class="d-flex align-items-center gap-3">
                                                                                <!-- Intraday Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode42{{ $i }}"
                                                                                        id="intradayMode42{{ $i }}"
                                                                                        value="intraday"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'intraday','sell',4)"
                                                                                        checked>
                                                                                    <label class="form-check-label"
                                                                                        for="intradayMode42{{ $i }}">
                                                                                        Intraday
                                                                                    </label>
                                                                                </div>
                                                                                <!-- Delivery Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode42{{ $i }}"
                                                                                        id="deliveryMode42{{ $i }}"
                                                                                        value="delivery"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'delivery','sell',4)">
                                                                                    <label class="form-check-label"
                                                                                        for="deliveryMode42{{ $i }}">
                                                                                        Delivery
                                                                                    </label>
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                        <!-- Cost and Max Info -->
                                                                        <div
                                                                            class="d-flex justify-content-between flex-wrap">

                                                                            <div
                                                                                class="d-flex justify-content-between flex-wrap align-items-center">
                                                                                <!-- Displaying Cost and Margin Price -->
                                                                                <div class="d-flex flex-column">
                                                                                    <span>
                                                                                        Cost: <s id="costPrice42{{ $i }}"
                                                                                            name="costPrice42{{ $i }}"
                                                                                            class="px-1">₹ {{ number_format($stock->ltp*1*$quantity,2) }}(50x)</s><span
                                                                                            id="marginUsed42{{ $i }}"></span>
                                                                                    </span>
                                                                                    <span>
                                                                                        After Margin: <span
                                                                                            id="marginCost42{{ $i }}"
                                                                                            class="text-success">₹{{ number_format($stock->ltp*1*$quantity/500,2) }}</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <div>Max:</div>
                                                                                <div id="maxPrice42{{ $i }}"
                                                                                    class=" px-1">
                                                                                    ₹{{ $user->real_wallet }}
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div>
                                                                            <p id="error-fund2{{ $i }}"
                                                                                style="display: none;color:red">
                                                                                Insuffient Fund</p>
                                                                        </div>

                                                                        <!-- Buy/Sell Buttons -->
                                                                        <div
                                                                            class="mt-3 d-flex justify-content-between">

                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm text-uppercase btn-block">SELL</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>



                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6 col-12" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter4{{ $i }}">
                        <p style="display: none" id="isin4{{ $i }}">{{ $foisin }}</p>
                        <div class="card trad-card overflow-hidden shadow-lg border-0 rounded-lg">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0 fs-5 font-w500 d-flex align-items-center" id="change4{{ $i }}">
                                        <?php 
                                                                    $change = $stock->ltp - $stock->cp;
                                                                    if($stock->cp == 0){
                                                                        $stock->cp = 1;
                                                                    }
                                if ($change > 0) {
                                                                        ?>
                                        <span class="badge badge-success me-1">▲</span>
                                        <span class="text-success" id="perc4{{ $i }}">
                                            <?php echo number_format(($change / $stock->cp) * 100, 2); ?>% &nbsp;
                                        </span>
                                        <span class="text-success" id="perc4{{ $i }}">(
                                            <?php echo number_format($change, 2); ?> pts)
                                        </span>


                                        <?php 
                                } elseif ($change < 0) {
                                                                        ?>
                                        <span class="badge badge-danger me-1">▼</span>
                                        <span class="text-danger" id="perc4{{ $i }}">{{ number_format(($change / $stock->cp)
                                            * 100, 2) }}%
                                            &nbsp;</span>
                                        <span class="text-danger" id="perc4{{ $i }}">(
                                            <?php        echo number_format($change, 2); ?> pts)
                                        </span>

                                        <?php
                                } else {
                                                                        ?>
                                        <span class="badge badge-warning me-1">-</span>
                                        <span class="text-warning" id="perc4{{ $i }}">0.00% &nbsp;</span>
                                        <span class="text-warning" id="perc4{{ $i }}">(0.00 pts) </span>
                                        <?php 
                                                                    }    
                                                                    ?>
                                    </p>

                                    <div class="d-flex align-items-center gap-2">
                                        <span><img
                                                src="https://s3tv-symbol.dhan.co/symbols/<?php    echo $stock->assetSymbol; ?>.svg"
                                                alt="" style="border-radius: 100%;width:2rem;height:2rem"></span>
                                        <h4 class="text-dark mb-0 font-w600">{{ $key->tradingSymbol }} </h4>
                                    </div>
                                    <div class="d-flex justify-content-between ">
                                        <p class="mb-0" style="position: absolute;top: 54px;right: 14px;">
                                            LTP:
                                            <span id="ltp4{{ $i }}" class="font-w600 text-primary fs-4">
                                                {{ $stock->ltp }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="text-end" style="position: absolute;top: 10px;right: 14px;">
                                    <p class="text-muted mb-1 fs-13">{{ $key->instrumentType }}</p>
                                </div>
                            </div>





                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="me-3">
                                        <p class="mb-0">Bid : <span class="text-dark mb-0 font-w600" id="bid4{{ $i }}">{{
                                                $stock->bid }}</span></p>
                                    </div>
                                    <div class="me-3">
                                        <p class="mb-0">Ask : <span class="text-dark mb-0 font-w600" id="ask4{{ $i }}">{{
                                                $stock->ask }}</span></p>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between" style="font-size: xx-small">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <p class="mb-0">Open/Close</p>
                                            <p class="text-dark mb-0 font-w600" id="openclose4{{ $i }}">
                                                {{ $stock->open }}/{{ $stock->close }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="me-3">
                                        <p class="mb-0">High/Low</p>
                                        <p class="text-dark mb-0 font-w600" id="highlow4{{ $i }}">
                                            {{ $stock->high }}/{{ $stock->low }}
                                        </p>
                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>


              
                    <?php
                    $i++;
                        }
                        ?>
                </div>
                @endif
            </div>
        </div>
        <!-- Trade offcanvas model end -->

       
      

</div>

  