<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            {{ env('APP_NAME') }}
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class=" fa fa-list icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-user "></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <a class="see-all"
                                href="https://Bitfinex Options.com/dashboard/notification">See all
                                notifications<i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item"
                                    href="https://Bitfinex Options.com/dashboard/changepassword">Change
                                    Password</a>
                                <a class="dropdown-item"
                                    href="https://Bitfinex Options.com/dashboard/profile">Update
                                    Account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{'logout'}}"
                                    method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>



<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item {{Route::currentRouteName() == 'admin.users' ? 'active text-dark' : ''}}">
                    <a href="{{route('admin.users')}}">
                        <i class="fa fa-users " aria-hidden="true"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item {{Route::currentRouteName() == 'admin.create_wallet' ? 'active text-dark' : ''}}">
                    <a href="{{route('admin.create_wallet')}}">
                        <i class="fa fa-th " aria-hidden="true"></i>
                        <p>Set wallets</p>
                    </a>
                </li>
                <li class="nav-item {{Route::currentRouteName() == 'admin.deposits' ? 'active text-dark' : ''}}">
                    <a href="{{route('admin.deposits')}}">
                        <i class="fa fa-th " aria-hidden="true"></i>
                        <p>Add Plans</p>
                    </a>
                </li>
                <!--<li class="nav-item {{Route::currentRouteName() == 'admin.deposits' ? 'active text-dark' : ''}}">-->
                <!--    <a href="{{route('admin.deposits')}}">-->
                <!--        <i class="fa fa-th " aria-hidden="true"></i>-->
                <!--        <p>Confirm payment</p>-->
                <!--    </a>-->
                <!--</li>-->
                <li class="nav-item {{Route::currentRouteName() == 'admin.withdrawal_request' ? 'active text-dark' : ''}}">
                    <a href="{{route('admin.withdrawal_request')}}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Withdrawal Request</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.users')}}">
                        <i class="fa fa-th " aria-hidden="true"></i>
                        <p>Pay ROI</p>
                    </a>
                </li>
                <li class="nav-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <a href="#">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
