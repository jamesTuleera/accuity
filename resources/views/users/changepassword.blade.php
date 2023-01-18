@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-5">
            <h1 class="title1 text-light">Change Your password</h1> <br> <br>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-dark">
                <div class="row">
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mt-3">
                            <p class="text-danger">{{$error}}</p>
                        </div>
                        @endforeach

                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            <h3 class="text-success">{{ session()->get('success') }}</h3>
                        </div>
                        @endif

                        @if(session()->has('failed'))
                        <div class="alert alert-danger">
                            <h3 class="text-danger">{{ session()->get('failed') }}</h3>
                        </div>
                        @endif

                    </div>
                </div>
                <form method="post" action="{{route('users.updatepass')}}">
                    @csrf
                    <div class="form-control bg-dark mb-2">
                        <h5 class="text-light">Old Password</h5>
                        <input type="password" name="old_password"
                            class="form-control text-light bg-dark" required>
                    </div>
                    <div class="form-control bg-dark mb-2">
                        <h5 class="text-light">New Password</h5>
                        <input type="password" name="password" class="form-control text-light bg-dark"
                            required>
                    </div>
                    <div class="form-control bg-dark mb-2">
                        <h5 class="text-light">Confirm Password</h5>
                        <input type="password" name="password_confirmation"
                            class="form-control text-light bg-dark" required>
                    </div> <br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
