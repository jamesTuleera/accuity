<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="/" class="logo" style="font-size: 24px; color:#fff;">
            {{env('APP_NAME')}}
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
                                href="">See all
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
                                    href="{{route('users.changepassword')}}">Change
                                    Password</a>
                                <a class="dropdown-item"
                                    href="{{route('users.profile')}}">Update
                                    Account</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item"
                                    onclick="logout();">
                                    Logout
                                </span>

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
            {{-- <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::user()->first_name ." ". Auth::user()->last_name}}

                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="https://cryptomaxinvestments.com/dashboard/profile">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{route('users.user_dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.deposit')}}">
                        <i class="fa fa-th " aria-hidden="true"></i>
                        <span class="sub-item">Deposit</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.withdrawal')}}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <span class="sub-item">Withdrawal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.transactions')}}">
                        <i class="fa fa-th " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#bases">
                        <i class="fas fa-user"></i>
                        <p>Account </p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('users.account_details')}}">
                                    <span class="sub-item">Withdrawal Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('users.notifications')}}">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.referrals')}}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users.profile')}}">
                        <i class="fa fa-cog " aria-hidden="true"></i>
                        <p>Profle setting</p>
                    </a>
                </li>
{{--
                <li class="nav-item">
                    <a href="{{route('users.support')}}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Support</p>
                    </a>
                </li> --}}

                <li class="nav-item" onclick="logout()">
                    <a href="#" >
                        <i class="fa fa-sign-out" ></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
