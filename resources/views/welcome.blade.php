<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="{{ env('APP_NAME') }} fervently supports financial independence and the freedom that Bitcoin grants users worldwide to choose participate in a permissionless, decentralized network that allows people the capacity to avoid being marginalized by authorities and financial institutions. ">
    <meta name="author" content="{{ env('APP_URL') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <!--Google Fonts-->
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,700" rel="stylesheet">
    <!--Font icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/theme-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/theme-assets/fonts/themify/style.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('homeAsset/theme-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/theme-assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/theme-assets/vendors/flipclock/flipclock.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('homeAsset/theme-assets/vendors/swiper/css/swiper.min.css') }}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/theme-assets/css/demo.min.css') }}">
    <!-- END CRYPTO CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('homeAsset/theme-assets/css/template-3d-graphics.min.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homeAsset/assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- END Custom CSS-->


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('owl_assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl_assets/owlcarousel/assets/owl.theme.default.min.css') }}">

    <!-- javascript -->
    <script src="{{ asset('owl_assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('owl_assets/owlcarousel/owl.carousel.js') }}"></script>



</head>

<body class=" 1-column page-animated template-3g-graphics" data-menu-open="hover" data-menu="">

    <!-- Preloader | Comment below code if you don't want preloader-->
    <div id="loader-wrapper">
        <svg viewbox=" 0 0 512 512" id="loader">
            <linearGradient id="loaderLinearColors" x1="0" y1="0" x2="1" y2="1">
                <stop offset="5%" stop-color="#28bcfd"></stop>
                <stop offset="100%" stop-color="#1d78ff"></stop>
            </linearGradient>
            <g>
                <circle cx="256" cy="256" r="150" fill="none" stroke="url(#loaderLinearColors)" />
            </g>
            <g>
                <circle cx="256" cy="256" r="125" fill="none" stroke="url(#loaderLinearColors)" />
            </g>
            <g>
                <circle cx="256" cy="256" r="100" fill="none" stroke="url(#loaderLinearColors)" />
            </g>
            <g>
                <circle cx="256" cy="256" r="75" fill="none" stroke="url(#loaderLinearColors)" />
            </g>
            <circle cx="256" cy="256" r="60" fill="url(#loaderImage)" stroke="none" stroke-width="0" />

            <!-- Change the preloader logo here -->
            <defs>
                <pattern id="loaderImage" height="50%" width="50%" patternContentUnits="objectBoundingBox">

                </pattern>
            </defs>
        </svg>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--/ Preloader -->
    <!-- /////////////////////////////////// HEADER /////////////////////////////////////-->

    <!-- Header Start-->
    <header class="page-header">
        <!-- Horizontal Menu Start-->
        <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1">
            <div class="container">
                <a class="navbar-brand animated" data-animation="fadeInDown" data-animation-delay="1s"
                    href="#head-area"><img src="{{ asset('homeAsset/logo.png') }}" alt="Crypto Logo"
                        style="width: 170px;" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div id="navigation" class="navbar-nav ml-auto">
                        <ul class="navbar-nav mt-1">
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                                <a class="nav-link" href="#about">Home</a>
                            </li>
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.2s">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.3s">
                                <a class="nav-link" href="#choose">Why Choose Us</a>
                            </li>
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.4s">
                                <a class="nav-link" href="#price">Pricing</a>
                            </li>
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.6s">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>

                            {{-- <li class="nav-item" >
                    <a class="nav-link" href="https://reviews.{{ env('APP_URL') }}/">Our Reviews</a>
                </li> --}}

                        </ul>
                        <span id="slide-line"></span>
                        <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0"
                            href="{{ route('login') }}">Sign in</a>
                        &nbsp; &nbsp;
                        <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0"
                            href="{{ route('register') }}">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /Horizontal Menu End-->
    </header>
    <!-- /Header End-->

    <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
    <div class="content-wrapper">
        <div class="content-body">
            <main>
                <!-- Header: 3D Graphics -->
                <section class="head-area" id="head-area" data-midnight="white">
                    <div id="particles-js"></div>
                    <div class="head-content container-fluid bg-gradient d-flex align-items-center">
                        <div class="container">
                            <div class="banner-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="banner-content pt-5">
                                            <h1 class="best-template animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="1.5s">
                                                <b>A DECENTRALIZED BLOCKCHAIN INFRASTRUCTURE TRADING AND INVESTMENT
                                                    PLATFORM</b>
                                            </h1>
                                            <p class="mb-4 d-block white animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="1.6s" style="text-align:justify">
                                                Trading and investment platform for cryptocurrencies, foreign exchange,
                                                binary options, and CFDs that is decentralized and based on blockchain
                                                technology. With the use of blockchain technology, we provide simple,
                                                efficient, and secure trading and investment choices.
                                            </p>
                                            <div class="mt-5">
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-lg btn-gradient-purple btn-glow mr-2 animated"
                                                    data-animation="fadeInUpShorter"
                                                    data-animation-delay="1.7s">Login</a>
                                                <a href="{{ route('register') }}"
                                                    class="btn btn-lg btn-gradient-purple btn-glow animated"
                                                    data-animation="fadeInUpShorter"
                                                    data-animation-delay="1.8s">Register</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 move-first">
                                        <div class="crypto-3d-graphic animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="1.7s">
                                            <img src="{{ asset('homeAsset/theme-assets/images-3d-graphics/banner-graphic.png') }}"
                                                class="graphic-3d-img mx-auto d-block" alt="CICO">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Header: 3D Graphics -->

                <!-- Exchange Listing Area -->
                <section class="exchange-listing" id="exchange-listing">
                    <script async src="https://static.coinstats.app/widgets/coin-price-marquee-widget.js"></script>
                    <coin-stats-marquee-widget locale="en" currency="USD" background="#FFFFFF"
                        status-up-color="#4F8A5B" status-down-color="#FE4747" text-color="#1C1B1B"
                        buttons-color="#1C1B1B" border-color="rgba(28,27,27,0.15)" position="static"
                        font="Roboto, Arial, Helvetica" width="100%" coins-count="20"></coin-stats-marquee-widget>
                </section>
                <!--/ Exchange Listing Area -->

                <!-- About -->
                <section class="about section-padding" id="about">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">About</h6>
                                    <h2 class="title">{{ env('APP_NAME') }}</h2>
                                </div>

                                <p class="content-desc animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.4s"> {{ env('APP_NAME') }} is a fully registered online
                                    investing platform with all required authorities. To minimize losses and increase
                                    returns for clients, our team of experts delivers secure, intelligent trading.</p>
                            </div>
                            <div class="content-area">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 animated" data-animation="fadeInLeftShorter"
                                        data-animation-delay="0.5s">
                                        <h4 class="title">We built a platform for <br /> The crypto trading Industry
                                        </h4>
                                        <h6 class="pt-4 pb-2">{{ env('APP_NAME') }} is one of the most innovative
                                            technologies since the advent of the Internet.</h6>
                                        <p style="text-align:justify"> {{ env('APP_NAME') }} fervently supports
                                            financial independence and the freedom that Bitcoin grants users worldwide
                                            to choose participate in a permissionless, decentralized network that allows
                                            people the capacity to avoid being marginalized by authorities and financial
                                            institutions.

                                            We cordially invite you to the {{ env('APP_NAME') }}, an online platform
                                            for investing in cryptocurrencies, where our customers can deposit their
                                            Bitcoin, Ethereum, and Litecoin holdings in order to benefit from stable,
                                            risk-free long-term gains.
                                            With an emphasis on mining and trading cryptocurrencies,
                                            {{ env('APP_NAME') }} has a lot of experience and in-depth knowledge of the
                                            stock and digital asset markets.
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-lg-6 animated" data-animation="fadeInRightShorter"
                                        data-animation-delay="0.5s">
                                        <div class="position-relative what-is-crypto-img float-xl-right">
                                            <script async src="https://static.coinstats.app/widgets/coin-chart-widget.js"></script>
                                            <coin-stats-chart-widget type="large" coin-id="bitcoin" width="650"
                                                chart-height="300" currency="USD" locale="en" bg-color="#FFFFFF"
                                                text-color="#1C1B1B" status-up-color="#4F8A5B"
                                                status-down-color="#FE4747" buttons-color="#FFFFFF"
                                                chart-color="#E47103" chart-gradient-from="#FFFFFF"
                                                chart-gradient-to="#EFEFEF" chart-label-background="#FFFFFF"
                                                candle-grids-color="rgba(0,0,0,0.1)"
                                                border-color="rgba(28,27,27,0.15)" font="Roboto, Arial, Helvetica"
                                                btc-color="#6DD400" eth-color="#2D73AD"></coin-stats-chart-widget>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ About -->

                <!-- Problems & Solutions -->
                <section id="problem-solution choose" class="problem-solution section-pro section-padding bg-gradient"
                    data-midnight="white">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="dark-bg-heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">Services We Provide</h6>
                                    <h2 class="title"> <strong>{{ env('APP_NAME') }} </strong></h2>
                                </div>


                            </div>
                            <div class="problems">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="dark-bg-heading mb-4">
                                            <h4 class="title animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="0.2s">DEPOSIT METHODS</h4>
                                        </div>
                                        <p class="animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.4s">{{ env('APP_NAME') }} Inc supports Bitcoin,
                                            Etheruem, Litecoin and XRP. For any other preferred payment method kindly
                                            contact support@ {{ env('APP_URL') }}</p>

                                    </div>
                                    <div class="col-md-12 col-lg-6 text-center">
                                        <img src="{{ asset('homeAsset/theme-assets/images-3d-graphics/problems-graphic.png') }}"
                                            class="problems-img animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.5s" alt="problems-graphic">
                                    </div>
                                </div>
                            </div>
                            <div class="solutions mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 text-center">
                                        <img src="{{ asset('homeAsset/theme-assets/images-3d-graphics/solutions-graphic.png') }}"
                                            class="solutions-img animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.5s" alt="problems-graphic">
                                    </div>
                                    <div class="col-md-12 col-lg-6 move-first">
                                        <div class="dark-bg-heading mb-4">
                                            <h4 class="title animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="0.2s">SECURED COMPANY</h4>
                                        </div>
                                        <p class="animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.5s">To guarantee the highest level of security and
                                            safety for your investments, {{ env('APP_NAME') }} comes with a standard
                                            2FA security.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Problems & Solutions -->

                <!--/ Token Sale Mobile App -->
                <section id="token-sale-mobile-app" class="token-sale-mobile-app section-padding bg-gradient"
                    data-midnight="white">
                    <div class="token-sale">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="dark-bg-heading text-center">
                                    <h2 class="title">Crypto Currency Converter</h2>

                                </div>

                                <script async src="https://static.coinstats.app/widgets/coin-converter-widget.js"></script>
                                <coin-stats-converter-widget sell-coin-id="bitcoin" buy-coin-id="ethereum"
                                    locale="en" background="#1C1B1B" text-color="#FFFFFF"
                                    border-color="rgba(255,255,255,0.15)" rotate-button-color="rgba(255,255,255,0.35)"
                                    type="large" font="Roboto, Arial, Helvetica" width="1000">
                                </coin-stats-converter-widget>

                            </div>
                        </div>
                    </div>

                </section>
                <!--/ Token Sale Mobile App -->



                <!--/ Token Sale Mobile App -->
                {{-- <section id="token-sale-mobile-app price" class="token-sale-mobile-app section-padding bg-gradient"
                    data-midnight="white">
                    <div class="token-sale">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="dark-bg-heading text-center">
                                    <h6 class="sub-title">Pricing</h6>
                                    <h2 class="title">Pricing</h2>
                                </div>
                                <div class="row align-items-center">



                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                        style='margin-bottom:25px'>
                                        <div class="token-sale-counter">

                                            <div class="token-details text-center">

                                                <div class="loading-bar mb-2 position-relative">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9998607 elementor-widget elementor-widget-heading"
                                                            data-id="9998607" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 style="text-align:center;color:black;font-weight:bolder"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    BRONZE</h2>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <center>
                                                                        <img src='{{ asset('homeAsset/b.png') }}'
                                                                            style='width:20px;border:2px solid floralwhite;border-radius: 100%;'>
                                                                    </center>
                                                                    <br>
                                                                    <b>Minimum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    $3,000
                                                                </h4>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <b>Maximum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    $10,000
                                                                </h4>
                                                            </div>
                                                        </div>




                                                        <div class="elementor-element elementor-element-83d9e81 elementor-widget elementor-widget-heading"
                                                            data-id="83d9e81" data-element_type="widget"
                                                            data-widget_type="heading.default">

                                                        </div>


                                                        <div class="elementor-element elementor-element-31e5bc0 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="31e5bc0" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Risk management</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Standard Options</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Account manager</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Contract Duration: 2-3
                                                                            Weeks</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-lg btn-gradient-blue btn-glow">Get Started</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                        style='margin-bottom:25px'>
                                        <div class="token-sale-counter">

                                            <div class="token-details text-center">

                                                <div class="loading-bar mb-2 position-relative">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9998607 elementor-widget elementor-widget-heading"
                                                            data-id="9998607" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 style="text-align:center;color:black;font-weight:bolder"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    SILVER</h2>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <center>
                                                                        <img src='{{ asset('homeAsset/b.png') }}'
                                                                            style='width:20px;border:2px solid floralwhite;border-radius: 100%;'>
                                                                    </center>
                                                                    <br>
                                                                    <b>Minimum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    $10,000
                                                                </h4>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <b>Maximum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    $50,000
                                                                </h4>
                                                            </div>
                                                        </div>




                                                        <div class="elementor-element elementor-element-83d9e81 elementor-widget elementor-widget-heading"
                                                            data-id="83d9e81" data-element_type="widget"
                                                            data-widget_type="heading.default">

                                                        </div>


                                                        <div class="elementor-element elementor-element-31e5bc0 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="31e5bc0" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Risk management</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Standard Options</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Account manager</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Contract Duration: 3-4
                                                                            Weeks</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-lg btn-gradient-blue btn-glow">Get Started</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>






                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                        style='margin-bottom:25px'>
                                        <div class="token-sale-counter">

                                            <div class="token-details text-center">

                                                <div class="loading-bar mb-2 position-relative">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9998607 elementor-widget elementor-widget-heading"
                                                            data-id="9998607" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 style="text-align:center;color:black;font-weight:bolder"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    GOLD</h2>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <center>
                                                                        <img src='{{ asset('homeAsset/b.png') }}'
                                                                            style='width:20px;border:2px solid floralwhite;border-radius: 100%;'>
                                                                    </center>
                                                                    <br>
                                                                    <b>Minimum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    $50,000
                                                                </h4>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-6e4ce1e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                            data-id="6e4ce1e" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4 style="text-align:center;font-size:15px;;color:black"
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <b>Maximum Deposit</b> <i
                                                                        style='color:black;font-weight:bolder'> - </i>
                                                                    UNLIMITED
                                                                </h4>
                                                            </div>
                                                        </div>




                                                        <div class="elementor-element elementor-element-83d9e81 elementor-widget elementor-widget-heading"
                                                            data-id="83d9e81" data-element_type="widget"
                                                            data-widget_type="heading.default">

                                                        </div>


                                                        <div class="elementor-element elementor-element-31e5bc0 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="31e5bc0" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Risk management</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Standard Options</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Account manager</span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item"> <span
                                                                            class="elementor-icon-list-icon"> <i
                                                                                aria-hidden="true" class="fa fa-check"
                                                                                style="color:black"></i>
                                                                        </span> <span class="elementor-icon-list-text"
                                                                            style="color:black">Contract Duration: 6
                                                                            Weeks</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-lg btn-gradient-blue btn-glow">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <section id="token-sale-mobile-app price" class="token-sale-mobile-app section-padding bg-gradient"
                    data-midnight="white">
                    <div class="token-sale">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="dark-bg-heading text-center">
                                    <h6 class="sub-title">Testimony/Reviews</h6>
                                    <h2 class="title">Testimony/Reviews</h2>
                                </div>

                                <div class="home-demo">
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <div class="owl-carousel">
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify1.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify2.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify3.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify4.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify5.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify6.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify7.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify8.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 animated"
                                                        data-animation="fadeInLeftShorter" data-animation-delay="0.6s"
                                                        style='margin-bottom:25px'>
                                                        <video width="320" height="440" controls>
                                                            <source src="{{ asset('homeAsset/videos/testify9.mp4') }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                        margin: 10,
                                        loop: true,
                                        responsive: {
                                            0: {
                                                items: 1
                                            },
                                            600: {
                                                items: 2
                                            },
                                            1000: {
                                                items: 3
                                            }
                                        }
                                    })
                                </script>
                                
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Token Sale Mobile App -->

                <!--/ Advisors -
<section id="advisor" class="advisor team section-padding">
    <div class="container-fluid">
        <div class="container">
            <div class="heading text-center">
                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                    <h6 class="sub-title">OUR TEAMS</h6>
                    <h2 class="title">OUR Teams</h2>
                </div>

            </div>
            <div class="team-profile mt-5">
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.5s">
                        <div class="d-flex">
                            <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser1">
                                <img src="theme-assets/images-3d-graphics/user-1.png" alt="team-profile-1" class="rounded-circle" width="128">
                            </div>
                            <div class="team-icon">
                                <i class="ti-linkedin"></i>
                            </div>
                            <div class="profile align-self-center">
                                <div class="name">Nadia Sidko</div>
                                <div class="role">Blockchain Entrepreneur</div>
                                <div class="crypto-profile">
                                    <img src="theme-assets/images-3d-graphics/company-logo-1.png" alt="Team User">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.6s">
                        <div class="d-flex">
                            <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser8">
                                <img src="theme-assets/images-3d-graphics/user-8.png" alt="team-profile-1" class="rounded-circle" width="128">
                            </div>
                            <div class="team-icon">
                                <i class="ti-linkedin"></i>
                            </div>
                            <div class="profile align-self-center">
                                <div class="name">Pavel Volek</div>
                                <div class="role">Entrepreneur and Investor</div>
                                <div class="crypto-profile">
                                    <img src="theme-assets/images-3d-graphics/company-logo-2.png" alt="Team User">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.7s" data-toggle="modal" data-target="#teamUser3">
                        <div class="d-flex">
                            <div class="team-img float-left mr-3">
                                <img src="theme-assets/images-3d-graphics/user-3.png" alt="team-profile-1" class="rounded-circle" width="128">
                            </div>
                            <div class="team-icon">
                                <i class="ti-linkedin"></i>
                            </div>
                            <div class="profile align-self-center">
                                <div class="name">Alyona Blakytna</div>
                                <div class="role">Fin-Tech Entrepreneur</div>
                                <div class="crypto-profile">
                                    <img src="theme-assets/images-3d-graphics/company-logo-3.png" alt="Team User">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
 / Advisors -->

                <!--/ FAQ -->
                <section id="faq" class="faq section-padding bg-gradient" data-midnight="white">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="dark-bg-heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">question</h6>
                                    <h2 class="title">FAQ</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav>
                                        <div class="nav nav-pills nav-underline mb-5 animated"
                                            data-animation="fadeInUpShorter" data-animation-delay="0.5s"
                                            id="myTab" role="tablist">
                                            <a href="#general" class="nav-item nav-link active" id="general-tab"
                                                data-toggle="tab" aria-controls="general" aria-selected="true"
                                                role="tab">General</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="general" role="tabpanel"
                                            aria-labelledby="general-tab">
                                            <div id="general-accordion" class="collapse-icon accordion-icon-rotate">
                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="0.1s">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                <span class="icon gradient-crypto"></span>
                                                                What is {{ env('APP_NAME') }} ?
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            {{ env('APP_NAME') }} is a professional trading &
                                                            investment company with emphasis on cryptocurrency, forex,
                                                            binary option, CFDs. We are a group of qualified and trained
                                                            financiers with technical knowledge. We actively monitor and
                                                            trade the forex market, binary option, CFDs. The vast
                                                            majority of customer deposits are stored offline in
                                                            air-gapped cold storage. We only keep enough online to
                                                            facilitate active trading, which greatly minimizes risk and
                                                            exposure. Our auditing programs monitor every activity
                                                            24/7/365. Their job is to report and block any suspicious
                                                            activity before it becomes a problem. We have strong roots
                                                            and believe in customer service and transparency. We are
                                                            committed to optimum delivery and uprightness. We let our
                                                            service do the talking. Any funds you put
                                                            into {{ env('APP_NAME') }} are only used to facilitate
                                                            trading through your account. Unlike banks, we do not
                                                            operate on fractional reserves.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="0.2s">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                <span class="icon gradient-crypto"></span>

                                                                How do i make money here?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse"
                                                        aria-labelledby="headingTwo" data-parent="#general-accordion">
                                                        <div class="card-body">

                                                            We provide individuals and businesses a world class
                                                            experience to earn weekly/monthly passive income or
                                                            otherwise decide to compound profits for improved returns.
                                                            The more money you deposit, the more money you make. The
                                                            profit is generated from trading cryptocurrencies as well as
                                                            forex, CFDs, binary options in registered exchanges.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="0.3s">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <span class="icon gradient-crypto"></span>

                                                                Is {{ env('APP_NAME') }} a legitimate company?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree"
                                                        data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            {{ env('APP_NAME') }} is a legal investment company
                                                            incorporated in the United Kingdom.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="0.3s">
                                                    <div class="card-header" id="headingFour">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                <span class="icon gradient-crypto"></span>
                                                                What's the limit to the number of accounts i own?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour" class="collapse"
                                                        aria-labelledby="headingFour"
                                                        data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            Any client can have any number of accounts they wish to as
                                                            long as they keep them funded.
                                                        </div>
                                                    </div>
                                                </div>








                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
    </section>
    <!--/ FAQ -->

    <!--/ Contact -->
    <section id="contact" class="contact section-padding">
        <div class="container-fluid">
            <div class="container">
                <div class="heading text-center">
                    <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                        <h6 class="sub-title">JOIN US</h6>
                        <h2 class="title">Contact</h2>
                    </div>
                    <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">
                        Have questions? We’re happy to help.</p>

                    <p class="font-medium mt-5 animated" data-animation="fadeInUpShorter"
                        data-animation-delay="0.5s">Contact us with any questions regarding {{ env('APP_URL') }}.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12 mx-auto">
                        <ul class="list-unstyled list-group contact-info mb-3">

                            <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                                <i class="fa fa-envelope"></i>
                                <span>support@ {{ env('APP_URL') }}</span>
                            </li>


                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-12 mx-auto">
                        <form action="#" method="post" accept-charset="utf-8" class="text-center">
                            <input type="text" class="form-control animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.8s" name="name" placeholder="Your Name">
                            <input type="text" class="form-control animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.9s" name="mail" placeholder="Your Mail">
                            <textarea rows="4" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s"
                                name="message" placeholder="Your Massage"></textarea>
                            <button type="submit"
                                class="btn btn-lg btn-gradient-purple btn-glow float-right animated"
                                data-animation="fadeInUpShorter" data-animation-delay="1.1s">Send Message</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Contact -->




    </main>
    </div>
    </div>
    <!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->


    <footer class="footer static-bottom  footer-custom-class" data-midnight="white">
        <div class="container">
            <div class="footer-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about">
                            <div class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                                <img src="{{ asset('homeAsset/logo.png') }}" alt="Logo" style="width:160px">
                            </div>
                            <div class="about-text animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.3s">
                                <p class="grey-accent2">{{ env('APP_URL') }} is a blockchain platform that allows
                                    users to make payments, create and request loans and crowdfund projects.</p>
                            </div>
                            <ul class="social-buttons list-unstyled mb-5">
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s"><a
                                        href="#" title="Facebook" class="btn font-medium"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s"><a
                                        href="#" title="Twitter" class="btn font-medium"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s"><a
                                        href="#" title="LinkedIn" class="btn font-medium"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s"><a
                                        href="#" title="GitHub" class="btn font-medium"><i
                                            class="fa fa-github"></i></a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s"><a
                                        href="#" title="Pintrest" class="btn font-medium"><i
                                            class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="links">
                            <h5 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                                Useful Links</h5>
                            <ul class="useful-links float-left mr-5">
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s"><a
                                        href="">Home</a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s"><a
                                        href="#about">About Us</a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s"><a
                                        href="#choose">Why Choose Us </a></li>
                            </ul>
                            <ul class="useful-links">
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s"><a
                                        href="#price">Pricing</a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s"><a
                                        href="#faq">Faq</a></li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.1s"><a
                                        href="#contact">Contact Us</a></li>
                            </ul>








                        </div>
                    </div>

                </div>
                <div class="copy-right mx-auto text-center">
                    <span class="copyright">Copyright &copy; 2022, {{ env('APP_URL') }}.</span>
                </div>
            </div>
        </div>
    </footer>

    @include('layouts.component/chat')

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('homeAsset/theme-assets/vendors/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('homeAsset/theme-assets/vendors/flipclock/flipclock.min.js') }}"></script>
    <script src="{{ asset('homeAsset/theme-assets/vendors/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('homeAsset/theme-assets/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('homeAsset/theme-assets/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME JS-->
    <script src="{{ asset('homeAsset/theme-assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('homeAsset/theme-assets/js/scripts/demo.min.js') }}"></script>
    <!-- END CRYPTO JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('homeAsset/theme-assets/js/scripts/particles-type1.min.js') }}"></script>
    <!-- END PAGE LEVEL JS-->


</body>

</html>
