<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="UWpmQWTFJvzCehfXh1DfbdOHB1izM4CN4AtffwHg">

    <title>{{ env('APP_NAME') }} | User panel</title>
    <link rel="icon" href="/cloud/app/images/minfavico.png" type="image/png" />

    <!-- Fonts and icons -->
    <script src="/user/js/plugin/webfont/webfont.min.js"></script>
    <!-- Sweet Alert -->
    <script src="/user/js/plugin/sweetalert/sweetalert.min.js "></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/fonts.min.css">
    <link rel="stylesheet" href="/user/css/atlantis.min.css">
    <link rel="stylesheet" href="/user/css/customs.css">
    <link rel="stylesheet" href="/user/css/style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body data-background-color="dark">
    <div id="app">
        <!--PayPal-->
        <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = '';
            var PAYPAL_SECRET = '';

            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        </script>

        <script src="https://www.paypal.com/sdk/js?client-id="></script>

        <!--/PayPal-->


        <div class="wrapper">

            <!-- Stored in resources/views/child.blade.php -->

            <!-- Sidebar -->

            @if (Auth::user()->role == 1)
                @include('layouts.sidebars.user_sidebar')
            @elseif(Auth::user()->role == 222)
                @include('layouts.sidebars.admin_sidebar')
            @endif
            <!-- End Sidebar -->
            <!-- Verify Modal -->

            <!-- /Verify Modal -->
            <div class="main-panel bg-dark">
                <div class="content bg-dark">
                    @yield('user-content')
                    <!-- end of chart -->
                </div>
                <footer class="footer bg-dark text-light">
                    <div class="container-fluid">
                        <div class="row copyright text-center text-align-center">
                            <p>All Rights Reserved &copy; {{ env('APP_NAME') }} 2014 - 2021</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script>
        function logout() {
            document.getElementById('logout-form').submit()
        }
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        // (function(){
        // var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        // s1.async=true;
        // s1.src='https://embed.tawk.to/61eb0330b9e4e21181bb3a4b/1fpv08uim';
        // s1.charset='UTF-8';
        // s1.setAttribute('crossorigin','*');
        // s0.parentNode.insertBefore(s1,s0);
        // })();
        //
    </script>

    <!--   Core JS Files   -->
    <script src="/user/js/core/jquery.3.2.1.min.js "></script>
    <script src="/user/js/core/popper.min.js"></script>
    <script src="/user/js/core/bootstrap.min.js "></script>
    <script src="/user/js/customs.js"></script>

    <!-- jQuery UI -->
    <script src="/user/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/user/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/user/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js "></script>

    <!-- jQuery Sparkline -->
    <script src="/user/js/plugin/jquery.sparkline/jquery.sparkline.min.js "></script>

    <!-- Sweet Alert -->
    <script src="/user/js/plugin/sweetalert/sweetalert.min.js "></script>
    <!-- Bootstrap Notify -->
    <script src="/user/js/plugin/bootstrap-notify/bootstrap-notify.min.js "></script>

    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
    </script>

    <!-- Atlantis JS -->
    <script src="/user/js/atlantis.min.js"></script>
    <script src="/user/js/atlantis.js"></script>

    @if (Auth::user()->role == 1)
        @include('layouts.component/chat')
    @endif

    <script>
        $(document).ready(function() {
            $('#ShipTable').DataTable({
                order: [
                    [0, 'desc']
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'print', 'excel', 'pdf'
                ]
            });


            $(".dataTables_length select").addClass("bg-dark text-light");
            $(".dataTables_filter input").addClass("bg-dark text-light");
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.UserTable').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
            $(".dataTables_length select").addClass("bg-dark text-light");
            $(".dataTables_filter input").addClass("bg-dark text-light");
        });
    </script>


</body>

</html>
