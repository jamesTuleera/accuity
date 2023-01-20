<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auth </title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="logo.png" />

    <!-- Main structure css file -->
    <link rel="stylesheet" href="{{ asset('auth/css/login7-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>


<body style="background-image: linear-gradient(#305082, #EF5067);">
    <div id="app">


        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>

        <div class="container-fluid" style="max-height: 900px">
            <div class="row">
                <div
                    class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                    <div class="col-sm-5 authfy--left" style="background-color:none">
                        <div class="brand-col">
                            <div class="headline">
                                <!-- brand-logo start -->
                                <div class="brand-logo">
                                    <center>
                                        <h2 style='font-size:24px;padding:10px;'> <img
                                                src='{{ asset('homeAsset/logo.png') }}' style='width:200px' /></h2>
                                    </center>
                                </div><!-- ./brand-logo -->
                                <!-- social login buttons start -->
                                <div class="row social-buttons">
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <a href="../" class="btn btn-block btn-facebook"
                                            style="background-color:#fff;color:#FF4444">
                                            <center>
                                                {{-- <p>{{ route('register') }}</p> --}}
                                                <i class="fa fa-home"></i> <span class="">Back To Homepage</span>
                                            </center>
                                        </a>

                                    </div>

                                    <div style="margin-bottom: 100px" class="col-xs-12 col-sm-12 col-md-12">

                                        @if (Route::currentRouteName() == 'register')
                                        <a href="{{ route('login') }}" data-panel=".panel-signup" href="#"
                                        class="btn btn-block btn-facebook mb-5 lnk-toggler"
                                        style="background-color:navy;color:white;font-weight:bolder">
                                        <center>
                                            <i class="fa fa-reg"></i> <span class="">Login Now</span>
                                        </center>
                                    </a>

                                    @else

                                    <a href="{{ route('register') }}" data-panel=".panel-signup" href="#"
                                            class="btn btn-block btn-facebook mb-5 lnk-toggler"
                                            style="background-color:navy;color:white;font-weight:bolder">
                                            <center>
                                                <i class="fa fa-reg"></i> <span class="">Register Now</span>
                                            </center>
                                        </a>
                                        @endif

                                    </div>

                                </div><!-- ./social-buttons -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 authfy-panel-right" >
                        <div class="-login" style="overflow:auto" >
                            <!-- panel-signup start -->
                            <div class=" panel-signup text-center ">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">





                                        @yield('content')





                                        <a class="lnk-toggler" data-panel=".panel-login" href="{{ route('login') }}"
                                            style="color:#FF4444;font-weight:bolder">Already have an Account ?</a>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./authfy-login -->
                    </div>
                </div>
            </div> <!-- ./row -->
        </div> <!-- ./container -->
    </div>
    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('auth/js/jquery-2.2.4.min.js') }}"></script>


    <!-- for Bootstrap js -->
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/sweet.js') }}"></script>

    {{-- <script>
        swal({
        title: 'Failed',
        text: 'res.message',
        icon: 'error'
    })
    </script> --}}


</body>


</html>
