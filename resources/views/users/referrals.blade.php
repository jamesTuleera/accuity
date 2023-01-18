@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">My Referrals </h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="alert alert-success alert-dismissable"> --}}
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <h3 class="text-success">{{ session()->get('success') }}</h3>
                        </div>
                    @endif
                {{-- </div> --}}

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <h3 class="text-danger">{{ $error }}</h3>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row py-3 mb-4">
            <div class="col-12">
                <h4 class="text-light">
                    You have <span class="badge badge-warning badge-sm">{{$count_ref}}</span> referrals
                </h4>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center card p-4 bg-dark">
                <div class="bs-example widget-shadow table-responsive"
                    data-example-id="hoverable-table">
                    <table class="UserTable table table-hover text-light">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Reg created</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($referrals as $referral)
                            <tr>
                                <td>{{$referral->first_name .' '. $referral->last_name}}</td>
                                <td>{{$referral->email}}</td>
                                <td>{{$referral->phone}}</td>
                                <td>{{$referral->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
