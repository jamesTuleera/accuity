@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">My Clients </h1>
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

        </div>
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="form">
                    <form action="{{route("admin.create_admin_wallet")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" class="text-light">Wallet name</label>
                            <input type="text" name="name" id="" placeholder="Wallet name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-light">Wallet Address</label>
                            <input type="text" name="wallet_address" id="" placeholder="Wallet name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary w-100 btn-md">Add wallet</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-8  card p-4 bg-dark">
                <div class="bs-example widget-shadow table-responsive"
                    data-example-id="hoverable-table">
                    <table class="UserTable table table-hover text-light">
                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>Wallet Name</th>
                                <th>Wallet Address</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($adWal as $infos)
                            <tr>
                                <td scope="row">
                                    <button data-toggle="modal" data-target="#depositModal{{$infos->id}}" class="btn btn-warning btn-sm">edit</button>
                                    <a href="{{route('admin.delete_admin_wallet', [$infos->id])}}" class="btn btn-danger btn-sm">delete</button>
                                </td>
                                <td>{{$infos->name}}</td>
                                <td>{{$infos->wallet_address}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($adWal as $infos)
<div id="depositModal{{$infos->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
               <div class="nothing-here">
                <h4 class="modal-title text-warning">{{$infos->name}}</h4><br>
               </div>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">

                <form action="{{route("admin.edit_admin_wallet")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="text-light">Wallet name</label>
                        <input type="text" name="name" value="{{$infos->name}}" class="form-control">
                        <input type="hidden" name="w_id" value="{{$infos->id}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Wallet Address</label>
                        <input type="text" name="wallet_address" id="" value="{{$infos->wallet_address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 btn-md">Edit wallet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- /deposit Modal -->

@endsection
