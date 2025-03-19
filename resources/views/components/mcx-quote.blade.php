@php
$user = Auth::user();
@endphp

<div>

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <?php
                    $i = 1;
                    $fetch = DB::table('watchlist')->where('userId', $user->id)->where('instrumentType', 'FUT')->Where('segment','MCX_FO')->get();
                    foreach ($fetch as $key) {
                        $foisin = $key->instrumentKey;
                        $isin = $key->isIn;
                        $id = $key->id;
                        $instrumentType = $key->instrumentType;
                        $stock = DB::table('future_temp')->where('instrumentKey', $foisin)->first();
                        $quantity = $stock->lotSize;
                    ?>          
                

                    <div class="modal fade" id="exampleModalCenter3{{ $i }}">
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
                                            onclick="showOrderForm(3,{{ $i }})" data-bs-dismiss="modal">
                                            <img src="https://cdn-icons-png.flaticon.com/128/15342/15342293.png"
                                                width="30" class="me-2" alt="Trade Logo">
                                            <h6 class="mb-0 flex-grow-1 fs-2">Trade</h6>
                                        </div>

                                        <div class="trade-item d-flex align-items-center p-2 rounded border shadow-sm"
                                            onclick="handleChartClick('{{ $foisin }}', 3,'{{ $i }}')"
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
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom3{{ $i }}"
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


                                    <div id="marketOverview3{{ $i }}" style="height: 300px"></div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--chart offcanvas end -->


                    <!-- Trade offcanvas model -->

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="orderoffcanvasBottom3{{ $i }}"
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
                                                        data-bs-target="#nav-order{{ $i }}" type="button" role="tab"
                                                        aria-selected="true">Buy</button>
                                                    <button class="nav-link" style="width: 50%" id="nav-histroy-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-history{{ $i }}"
                                                        type="button" role="tab" aria-selected="false">Sell
                                                    </button>

                                                </div>
                                            </nav>

                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-order{{ $i }}"
                                                    role="tabpanel" aria-labelledby="nav-order-tab">
                                                    <div class="table-responsive dataTabletrade">
                                                        <form id="buyform{{ $i }}" name="buyform{{ $i }}" method="POST"
                                                            action="{{ route('placeBuyOrder') }}">
                                                            @csrf
                                                            <input type="text" name="id" value="{{ $i }}" id="id"
                                                                hidden>
                                                            <input type="text" name="instrumentKey1{{ $i }}"
                                                                value="{{ $foisin }}" id="instrumentKey1{{ $i }}"
                                                                hidden>
                                                            <input type="text" name="instrumentType{{ $i }}"
                                                                value="{{ $instrumentType }}"
                                                                id="instrumentType{{ $i }}" hidden>
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
                                                                            name="orderType1{{ $i }}"
                                                                            id="orderType1{{ $i }}" hidden>
                                                                        <div class="mb-3 d-flex flex-column">
                                                                            <label class="form-label">Order Type</label>
                                                                            <div class="btn-group" role="group">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    id="marketBtn1{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'market', 'buy')">Market</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="limitBtn1{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'limit', 'buy')">Limit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossMarketBtn1{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'stoplossMarket', 'buy')">SL
                                                                                    Mkt</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossLimitBtn1{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'stoplossLimit', 'buy')">SL
                                                                                    Limit</button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Price Input -->
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text">Market
                                                                                Price</span>
                                                                            <input id="realprice1{{ $i }}"
                                                                                name="realprice1{{ $i }}" readonly
                                                                                type="text" class="form-control"
                                                                                placeholder="Enter price"
                                                                                value="{{ $stock->ltp }}">


                                                                            <span class="input-group-text">₹</span>
                                                                        </div>
                                                                        <!-- Limit Input -->
                                                                        <div id="limitblock1{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Limit
                                                                                Price</span>
                                                                            <input id="limitprice1{{ $i }}"
                                                                                name="limitprice1{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price" value="0.00">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        {{-- marketstoploss input --}}
                                                                        <div id="targetpriceblock1{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Target Price
                                                                            </span>
                                                                            <input id="targetprice1{{ $i }}"
                                                                                name="targetprice1{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>



                                                                        <div class=""
                                                                            style="display: flex; justify-content:space-between; gap:20px;">
                                                                            <div class="d-flex flex-column gap-2 w-50">
                                                                                <span class="fs-5">Lot</span>
                                                                                <div class=" input-group mb-3">
                                                                                    <button
                                                                                        onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }}, 'buy')"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="decrement">-</button>
                                                                                    <input type="text"
                                                                                        class="form-control text-center"
                                                                                        placeholder="Enter size"
                                                                                        id="lotSize1{{ $i }}"
                                                                                        name="lotSize1{{ $i }}"
                                                                                        value="0" readonly>
                                                                                    <button
                                                                                        onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'buy')"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="increment">+</button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="d-flex flex-column gap-2 w-50">
                                                                                <span class="fs-5">Quantity</span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter size"
                                                                                    id="quantity1{{ $i }}"
                                                                                    name="quantity1{{ $i }}" value={{
                                                                                    $quantity }} readonly>
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
                                                                                        name="tradeMode1{{ $i }}"
                                                                                        id="intradayMode1{{ $i }}"
                                                                                        value="intraday"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'intraday','buy')"
                                                                                        checked>
                                                                                    <label class="form-check-label"
                                                                                        for="intradayMode1{{ $i }}">
                                                                                        Intraday
                                                                                    </label>
                                                                                </div>
                                                                                <!-- Delivery Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode1{{ $i }}"
                                                                                        id="deliveryMode1{{ $i }}"
                                                                                        value="delivery"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'delivery','buy')">
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
                                                                                        Cost: <s id="costPrice1{{ $i }}"
                                                                                            name="costPrice1{{ $i }}"
                                                                                            class="px-1">₹0.00</s><span
                                                                                            id="marginUsed1{{ $i }}"></span>
                                                                                    </span>
                                                                                    <span>
                                                                                        After Margin: <span
                                                                                            id="marginCost1{{ $i }}"
                                                                                            class="text-success">₹0.00</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <div>Max:</div>
                                                                                <div id="maxPrice1{{ $i }}"
                                                                                    name="maxPrice1{{ $i }}"
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




                                                <div class="tab-pane fade" id="nav-history{{ $i }}" role="tabpanel">
                                                    <div class="table-responsive dataTabletrade">
                                                        <form id="sellform" name="sellform{{ $i }}" method="POST"
                                                            action="{{ route('placeSellOrder') }}">
                                                            @csrf
                                                            <input type="text" name="id2" value="{{ $i }}" id="id"
                                                                hidden>
                                                            <input type="text" name="instrumentKey2{{ $i }}"
                                                                value="{{ $foisin }}" id="instrumentKey2{{ $i }}"
                                                                hidden>
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
                                                                            name="orderType2{{ $i }}"
                                                                            id="orderType2{{ $i }}" hidden>
                                                                        <div class="mb-3 d-flex flex-column">
                                                                            <label class="form-label">Order Type</label>
                                                                            <div class="btn-group" role="group">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    id="marketBtn2{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'market', 'sell')">Market</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="limitBtn2{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'limit', 'sell')">Limit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossMarketBtn2{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'stoplossMarket', 'sell')">SL
                                                                                    Mkt</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary"
                                                                                    id="stoplossLimitBtn2{{ $i }}"
                                                                                    onclick="handleOrderTypeChange({{ $i }}, 'stoplossLimit', 'sell')">SL
                                                                                    Limit</button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Price Input -->
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text">Market
                                                                                Price</span>
                                                                            <input id="realprice2{{ $i }}"
                                                                                name="realprice2{{ $i }}" readonly
                                                                                type="text" class="form-control"
                                                                                placeholder="Enter price"
                                                                                value="{{ $stock->ltp }}">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <!-- Limit Input -->
                                                                        <div id="limitblock2{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Limit
                                                                                Price</span>
                                                                            <input id="limitprice2{{ $i }}"
                                                                                name="limitprice2{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price" value="0.00">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        {{-- marketstoploss input --}}
                                                                        <div id="targetpriceblock2{{ $i }}"
                                                                            style="display: none"
                                                                            class="input-group mb-3">
                                                                            <span class="input-group-text">Target Price
                                                                            </span>
                                                                            <input id="targetprice2{{ $i }}"
                                                                                name="targetprice2{{ $i }}" disabled
                                                                                type="hidden" class="form-control"
                                                                                placeholder="Enter price">

                                                                            <span class="input-group-text">₹</span>
                                                                        </div>

                                                                        <div class=""
                                                                            style="display: flex; justify-content:space-between; gap:20px;">
                                                                            <div class="d-flex gap-2 w-50 flex-column">
                                                                                <span class="fs-5 ">Lot</span>
                                                                                <div class="input-group mb-3">
                                                                                    <button
                                                                                        onclick="decrementLot({{ $quantity }}, {{ $i }},{{ $user->real_wallet }},'sell')"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="decrement">-</button>
                                                                                    <input type="text"
                                                                                        class="form-control text-center"
                                                                                        placeholder="Enter size"
                                                                                        id="lotSize2{{ $i }}"
                                                                                        name="lotSize2{{ $i }}"
                                                                                        value="0" readonly>
                                                                                    <button
                                                                                        onclick="incrementLot( {{ $quantity }}, {{ $i }}, {{ $user->real_wallet }},'sell')"
                                                                                        class="btn btn-outline-secondary"
                                                                                        type="button"
                                                                                        id="increment">+</button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="d-flex gap-2 flex-column w-50">
                                                                                <span class="fs-5">Quantity</span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter size"
                                                                                    id="quantity2{{ $i }}"
                                                                                    name="quantity2{{ $i }}" value={{
                                                                                    $quantity }} readonly>
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
                                                                                        name="tradeMode2{{ $i }}"
                                                                                        id="intradayMode2{{ $i }}"
                                                                                        value="intraday"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'intraday','sell')"
                                                                                        checked>
                                                                                    <label class="form-check-label"
                                                                                        for="intradayMode2{{ $i }}">
                                                                                        Intraday
                                                                                    </label>
                                                                                </div>
                                                                                <!-- Delivery Mode Radio Button -->
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="tradeMode2{{ $i }}"
                                                                                        id="deliveryMode2{{ $i }}"
                                                                                        value="delivery"
                                                                                        onchange="handleTradeModeChange({{ $i }}, 'delivery','sell')">
                                                                                    <label class="form-check-label"
                                                                                        for="deliveryMode2{{ $i }}">
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
                                                                                        Cost: <s id="costPrice2{{ $i }}"
                                                                                            name="costPrice2{{ $i }}"
                                                                                            class="px-1">₹0.00</s><span
                                                                                            id="marginUsed2{{ $i }}"></span>
                                                                                    </span>
                                                                                    <span>
                                                                                        After Margin: <span
                                                                                            id="marginCost2{{ $i }}"
                                                                                            class="text-success">₹0.00</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <div>Max:</div>
                                                                                <div id="maxPrice2{{ $i }}"
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
                        data-bs-target="#exampleModalCenter3{{ $i }}">
                        <p style="display: none" id="isin3{{ $i }}">{{ $foisin }}</p>
                        <div class="card trad-card overflow-hidden shadow-lg border-0 rounded-lg">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0 fs-5 font-w500 d-flex align-items-center" id="change3{{ $i }}">
                                        <?php 
                                                                    $change = $stock->ltp - $stock->cp;
                                                                    if($stock->cp == 0){
                                                                        $stock->cp = 1;
                                                                    }
                                if ($change > 0) {
                                                                        ?>
                                        <span class="badge badge-success me-1">▲</span>
                                        <span class="text-success" id="perc3{{ $i }}">
                                            <?php echo number_format(($change / $stock->cp) * 100, 2); ?>% &nbsp;
                                        </span>
                                        <span class="text-success" id="perc3{{ $i }}">(
                                            <?php echo number_format($change, 2); ?> pts)
                                        </span>


                                        <?php 
                                } elseif ($change < 0) {
                                                                        ?>
                                        <span class="badge badge-danger me-1">▼</span>
                                        <span class="text-danger" id="perc3{{ $i }}">{{ number_format(($change / $stock->cp)
                                            * 100, 2) }}%
                                            &nbsp;</span>
                                        <span class="text-danger" id="perc3{{ $i }}">(
                                            <?php        echo number_format($change, 2); ?> pts)
                                        </span>

                                        <?php
                                } else {
                                                                        ?>
                                        <span class="badge badge-warning me-1">-</span>
                                        <span class="text-warning" id="perc3{{ $i }}">0.00% &nbsp;</span>
                                        <span class="text-warning" id="perc3{{ $i }}">(0.00 pts) </span>
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
                                            <span id="ltp3{{ $i }}" class="font-w600 text-primary fs-4">
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
                                        <p class="mb-0">Bid : <span class="text-dark mb-0 font-w600" id="bid3{{ $i }}">{{
                                                $stock->bid }}</span></p>
                                    </div>
                                    <div class="me-3">
                                        <p class="mb-0">Ask : <span class="text-dark mb-0 font-w600" id="ask3{{ $i }}">{{
                                                $stock->ask }}</span></p>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between" style="font-size: xx-small">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <p class="mb-0">Open/Close</p>
                                            <p class="text-dark mb-0 font-w600" id="openclose3{{ $i }}">
                                                {{ $stock->open }}/{{ $stock->close }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="me-3">
                                        <p class="mb-0">High/Low</p>
                                        <p class="text-dark mb-0 font-w600" id="highlow3{{ $i }}">
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
            </div>
        </div>
        <!-- Trade offcanvas model end -->

       
      

</div>

  