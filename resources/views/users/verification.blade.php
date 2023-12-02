@extends('layouts.auth_app')
@section('user-content')
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Account Verification</h1>
            </div>
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
                <div class="col-lg-12">
                    <div class="alert alert-warning alert-dismissable  text-warning">
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                        <i class="fa fa-info-circle"></i><strong> Kindly complete the verification process to gain full access to your account </strong>
                    </div>
                </div>
            </div>
            {{-- <h1 class="text-danger">{{ $verification }}</h1> --}}

            @if(isset($verification))
            @if ($verification->status == 'pending')
            <div class="col-lg-6 col-sm-12 bg-dark p-3">
                <h1 class="text-warning">You currently have a pending <br>
                Kindly wait as verification may take upto 24hrs </h1>
            </div>
            @else
                @include('users.components.verification')
            @endif
            @else
            @include('users.components.verification')
            @endif
        </div>
    </div>
@endsection
