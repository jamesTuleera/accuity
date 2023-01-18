<html>

<head>
</head>

<body>
</body>

</html>






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

    <div class="container-fluid">
        <div class="row">
            <div
                class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                <div class="col-sm-5 authfy-panel-left" style="background-color:#272F3D">
                    <div class="brand-col">
                        <div class="headline">
                            <!-- brand-logo start -->
                            <div class="brand-logo">
                                <center>
                                    <h2 style='font-size:24px;padding:10px;'> <img
                                            src='https://betterwayfinances.net/logo.png' style='width:200px' /></h2>
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

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <a href="#" data-panel=".panel-signup" href="#"
                                        class="btn btn-block btn-facebook lnk-toggler"
                                        style="background-color:#FF4444;color:white;font-weight:bolder">
                                        <center>
                                            <i class="fa fa-reg"></i> <span class="">Register Now</span>
                                        </center>
                                    </a>

                                </div>

                            </div><!-- ./social-buttons -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 authfy-panel-right">

                    <!-- authfy-login start -->
                    <div class="authfy-login">

                        <!-- panel-login start -->
                        <div class="authfy-panel panel-login text-center active">
                            <div class="authfy-heading">
                                <h3 class="auth-title" style="color: #FF4444">Login to your account</h3>
                                <p style="color:black">Don’t have an account? <a class="lnk-toggler"
                                        data-panel=".panel-signup" href="#" style="color:#FF4444">Sign Up
                                        Free!</a></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <form name="loginForm" class="loginForm" method="POST">
                                        <div class="form-group wrap-input">
                                            <input type="email" class="form-control email" name="em"
                                                placeholder="Email address">
                                            <span class="focus-input"></span>
                                        </div>
                                        <div class="form-group wrap-input">
                                            <div class="pwdMask">
                                                <input type="password" class="form-control password" name="pw"
                                                    placeholder="Password">
                                                <span class="focus-input"></span>
                                                <span class="fa fa-eye-slash pwd-toggle"></span>
                                            </div>
                                        </div>
                                        <!-- start remember-row -->
                                        <div class="row remember-row">
                                            <div class="col-xs-6 col-sm-6">
                                                <label class="checkbox text-left">
                                                    <input type="checkbox" value="remember-me">
                                                    <span class="label-text">Remember me</span>
                                                </label>
                                            </div>

                                        </div> <!-- ./remember-row -->
                                        <div class="form-group">
                                            <button name="log"
                                                style="background-color: #FF4444;border:none;color:#fff;font-weight:bolder"
                                                class="btn btn-lg btn-primary btn-block" type="submit">Login
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- ./panel-login -->
                        <!-- panel-signup start -->
                        <div class="authfy-panel panel-signup text-center" style="overflow-x:auto">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">

                                    <signup-form></signup-form>
                                    <a class="lnk-toggler" data-panel=".panel-login" href="#"
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
    <script
     src="{{mix('js/app.js')}}"></script>
    <script src="{{ asset('auth/js/jquery-2.2.4.min.js') }}"></script>


    <!-- for Bootstrap js -->
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>




    <script>
        ! function(a) {
            "use strict";
            a("html, body");
            var e = a(".pwdMask > .form-control"),
                t = a(".pwd-toggle");
            a(".lnk-toggler").on("click", function(t) {
                t.preventDefault();
                var e = a(this).data("panel");
                a(".authfy-panel.active").removeClass("active"), a(e).addClass("active")
            }), a(t).on("click", function(t) {
                t.preventDefault(), a(this).toggleClass("fa-eye-slash fa-eye"), a(this).hasClass("fa-eye") ? a(e)
                    .attr("type", "text") : a(e).attr("type", "password")
            }), a("#forget-lnk").on("click", function() {
                a(".authfy-login .nav-tabs").find("li").removeClass("active")
            }), a(window).on("load", function() {
                a(".square-block").fadeOut(), a("#preload-block").fadeOut("slow", function() {
                    a(this).remove()
                })
            })
        }(jQuery);
    </script>



</body>


</html>
