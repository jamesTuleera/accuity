@extends('layouts.auth_app')

@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h2 class="text-light pb-2">Welcome, {{Auth::user()->first_name}}!</h2>

        </div>

        <!-- Beginning of  Dashboard Stats  -->
        <div class="row row-card-no-pd bg-dark shadow-lg">
            <div class="col-sm-6 col-md-6 col-lg-6 d-none">
                <div class="card card-stats card-round bg-dark">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa fa-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Balance</p>
                                    <h4 class="card-title text-light">${{ number_format(Auth::user()->wallet->balance - Auth::user()->wallet->debit_bal) }}.00</h4> <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card card-stats card-round bg-dark">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa fa-download text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Investment</p>
                                    <h4 class="card-title text-light">$ {{ number_format(Auth::user()->wallet->investment) }}.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card card-stats card-round bg-dark">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa fa-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Profit</p>
                                    <h4 class="card-title text-light">${{ number_format(Auth::user()->wallet->profit) }}.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card card-stats card-round bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa fa-gift text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Bonus</p>
                                    <h4 class="card-title text-light">${{ number_format(Auth::user()->wallet->bonus) }}.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card card-stats card-round bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa fa-retweet text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Ref. Bonus</p>
                                    <h4 class="card-title text-light">${{ number_format(Auth::user()->wallet->ref_bonus) }}.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Available packages</h1>
        </div>

        <div class="row mb-5">


            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$500</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$2,500</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$1,000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$5,300</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$1000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$6,500</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$2000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$9,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$3000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$11,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$4000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$13,700</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$5000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$16,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$10,000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$34,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$20,000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$53,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>$30,000</span></h3><hr class='bg-light'>
                    <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>$72,000</span></h3><hr class='bg-light mt-3'>
                    <div class="">
                        <a class="btn btn-block btn-primary rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>
                    </div>
                </div>
            </div>

            <!--<div class="col-lg-3 p-4 card bg-dark shadow-lg">-->
            <!--    <div class="pricing-table purple border bg-dark shadow-lg">-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>1BTC</span></h3><hr class='bg-light'>-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>5BTC</span></h3><hr class='bg-light mt-3'>-->
            <!--        <div class="">-->
            <!--            <a class="btn btn-block btn-warning rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 p-4 card bg-dark shadow-lg">-->
            <!--    <div class="pricing-table purple border bg-dark shadow-lg">-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>2BTC</span></h3><hr class='bg-light'>-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>10BTC</span></h3><hr class='bg-light mt-3'>-->
            <!--        <div class="">-->
            <!--            <a class="btn btn-block btn-warning rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 p-4 card bg-dark shadow-lg">-->
            <!--    <div class="pricing-table purple border bg-dark shadow-lg">-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>3BTC</span></h3><hr class='bg-light'>-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>15BTC</span></h3><hr class='bg-light mt-3'>-->
            <!--        <div class="">-->
            <!--            <a class="btn btn-block btn-warning rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 p-4 card bg-dark shadow-lg">-->
            <!--    <div class="pricing-table purple border bg-dark shadow-lg">-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>4BTC</span></h3><hr class='bg-light'>-->
            <!--        <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>20BTC</span></h3><hr class='bg-light mt-3'>-->
            <!--        <div class="">-->
            <!--            <a class="btn btn-block btn-warning rounded rounded-pill" style=" border-radius: 40px;" href="{{route('users.deposit')}}">Deposit</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->


        </div>

        <!-- Beginning of chart -->
        <div class="row">
            <div class="col-12">
                <div id="chart-page">
                    <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
                        <div id="tradingview_f933e"></div>
                        <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span
                                    class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a>
                        </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
                                    {
                                    "width": "100%",
                                    "height": "550",
                                    "symbol": "COINBASE:BTCUSD",
                                    "interval": "1",
                                    "timezone": "Etc/UTC",
                                    "theme": 'dark',
                                    "style": "9",
                                    "locale": "en",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "hide_side_toolbar": false,
                                    "allow_symbol_change": true,
                                    "calendar": false,
                                    "studies": [
                                        "BB@tv-basicstudies"
                                    ],
                                    "container_id": "tradingview_f933e"
                                    }
                                    );
                        </script>
                    </div>

                </div>



                <div class="white-box" style="height: 450px;">
                    <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
                    <!-- TradingView Widget BEGIN -->

                    <span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank"
                            href="http://www.tradingview.com"
                            style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></span>
                    <script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">
                        {
                            "currencies" : [
                                "EUR",
                                "USD",
                                "JPY",
                                "BTC",
                                "ETH",
                                "LTC",
                                "GBP",
                                "CHF",
                                "AUD",
                                "CAD",
                                "NZD",
                                "CNY"
                            ],
                            "isTransparent": false,
                            "colorTheme": "dark",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en"
                            }
                    </script>

                </div>
            </div>
        </div>
    </div>
    <!-- end of chart -->
</div>
@endsection
