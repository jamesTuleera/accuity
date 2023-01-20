@extends('layouts.app')
@section('content')
<!-- panel-login start -->
<div class="authfy- panel- text-center active">
    <div class="authfy-heading">
        <h3 class="auth-title" style="color: #FF4444">Login to your account</h3>
        <p style="color:black">Don’t have an account? <a class="lnk-toggler"
                data-panel=".panel-signup" href="{{ route('register') }}" style="color:#FF4444">Sign Up
                Free!</a></p>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-sm alert-danger">{{ $error }}</div>
                @endforeach
            </div>
            <form name="loginForm" class="loginForm" action="{{ route('login') }}" method="POST">@csrf


                <div class="form-group wrap-input">
                    <input type="email" class="form-control email" name="email"
                        placeholder="Email address">
                    <span class="focus-input"></span>
                </div>
                <div class="form-group wrap-input">
                    <div class="pwdMask">
                        <input type="password" class="form-control password" name="password"
                            placeholder="Password">
                        <span class="focus-input"></span>
                        {{-- <span class="fa fa-eye-slash pwd-toggle"></span> --}}
                    </div>
                </div>
                <!-- start remember-row -->
                <div class="row remember-row">
                    <div class="col-xs-6 col-sm-6">

                            <input type="checkbox" value="remember-me">
                            <span class="label-text">Remember me</span>
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
@endsection
