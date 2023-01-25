@extends('layouts.auth_app')
@section('user-content')
    <div class="content bg-dark">
        <div class="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <h3 class="text-success">{{ session()->get('success') }}</h3>
                        </div>
                    @endif
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <h3 class="text-danger">{{ $error }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="row py-3 mb-4">
                <div class="col">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#depositModal"><i
                            class="fa fa-plus"></i> New deposit</a>
                </div>
            </div> --}}



            <div class="row">
                <div class="col-12">
                    <div class="mt-2 mb-5">
                        <h3 class="title1 text-light">Click on preferred deposit wallet below:</h3>
                        @foreach ($wallets as $wallet)
                            <button
                            class="btn btn-md btn-primary m-2"
                            style="text-transform: uppercase"
                            data-toggle="modal"
                            data-target="#depositModal{{ $wallet->id }}"
                            > <i class="fas fa-angle-double-right"></i></i> {{ $wallet->name }}</button>
                        @endforeach
                    </div>

                    <h3 class="text-center text-light mt-5">Deposit History</h3>
                    <hr class="bg-light">
                </div>

            </div>
            <div class="row mb-5">
                <div class="col text-center card p-4 bg-dark">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                        <table class="UserTable table table-hover text-light">
                            <thead>
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    <th>Amount</th>
                                    <th>Payment mode</th>
                                    <th>Status</th>
                                    <th>Date created</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($transactions as $transaction)
                                    <tr>
                                        {{-- <th scope="row">{{uniq==}}110</th> --}}
                                        <td>${{ number_format($transaction->amount) }}</td>
                                        <td>{{ $transaction->payment_method }}</td>
                                        <td>{{ $transaction->status }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deposit Modal -->



    @foreach ($wallets as $wlt)
    <div id="depositModal{{ $wlt->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h2 class="modal-title text-light" style="text-transform: uppercase">{{ $wlt->name }}</h2>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">

                    <div class="row">
                        <div class="col-12">
                            <h3 style="color: white; font-style: underline">Payment procedure</h3>
                            <ul style="color: white;">
                                <li><i class="fa fa-dot-circle-o"></i> All deposit should be made to the provided Crypto address
                                </li> <br>
                                <li><i class="fa fa-dot-circle-o"></i> After deposit is done, kindly hold on for confirmation and
                                    approval so as to enable us confirm your deposit and get your account funded for trading.</li>
                            </ul>
                            <p class="text-warning"> <i class="fas fa-angle-double-right"></i> {{ $wlt->wallet_address }}</p>
                        </div>
                    </div>


                    <form style="padding:3px;" role="form" method="post" action="{{ route('users.depositing') }}">
                        @csrf
                        <input style="padding:5px;" class="form-control text-light bg-dark" placeholder="Enter amount here"
                            type="text" name="amount"><br />
                        {{-- <input style="padding:5px;" class="form-control text-light bg-dark" placeholder="Enter blockchain transaction id here" type="text" name="trans_id" ><br /> --}}
                        <select class="d-none" name="payMethod" class="form-control text-light bg-dark" id="">
                                <option value="{{ $wlt->name }}">{{ $wlt->name }}</option>
                        </select> <br>
                        <input type="submit" class="btn btn-light" value="Continue">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- /deposit Modal -->



{{--

    <!-- Delete Subscription Modal -->
    <div id="delsubmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Delete MT4 Details</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark p-3">
                    <h5 class="text-light">Your subscription has already started, send an Email to
                        support@cryptomaxinvestments.com to have your MT4 Details Deleted.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit Modal -->

   --}}


@endsection
