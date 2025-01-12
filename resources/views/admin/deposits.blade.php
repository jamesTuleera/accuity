@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Your deposits {{Auth::user()->first_name}}</h1>
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
            </div>
        </div>

        <div class="row py-3 mb-4">
            <div class="col">
                <a class="btn btn-primary" href="{{route('admin.users')}}"><i
                        class="fa fa-users"></i> Users</a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center card p-4 bg-dark">
                <div class="bs-example widget-shadow table-responsive"
                    data-example-id="hoverable-table">
                    <table class="UserTable table table-hover text-light">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Payment mode</th>
                                <th>Trans ID</th>
                                <th>Status/Action</th>
                                <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            @foreach ($transactions as $transaction)

                            <tr>
                                <th scope="row">VETS{{$sn++}}</th>
                                <td>{{$transaction->user->first_name .' '. $transaction->user->last_name}}</td>
                                <td>${{number_format($transaction->amount)}}</td>
                                <td>{{$transaction->payment_method}}</td>
                                <td>{{$transaction->transaction_id}}</td>
                                <td>
                                    <div>
                                        <form method="POST" action="{{route('admin.update_deposits')}}">
                                            @csrf
                                            <input type="hidden" name="t_id" value="{{$transaction->id}}">
                                            <input type="hidden" name="amount" value="{{$transaction->amount}}">
                                            <select onchange="this.form.submit()" name="update_status" id="" class="form-control">
                                                <option value="{{$transaction->status}}">{{$transaction->status}}</option>
                                                <option value="Success">Success</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Decline">Decline</option>
                                                <option value="Failed">Failed</option>
                                            </select>
                                        </form>
                                    </div>
                                </td>
                                <td>{{$transaction->created_at}}</td>
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
<div id="depositModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Make new deposit</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post" action="{{route('users.depositing')}}">
                    @csrf
                    <input style="padding:5px;" class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required><br />
                    <select name="payMethod" class="form-control text-light bg-dark" id="">
                        <option value="bitcoin">Payment method</option>
                        <option value="bitcoin">Bitcoin</option>
                        <option value="Etherium">Etherium</option>
                        <option value="litcoin">Litcoin</option>
                    </select> <br>
                    <input type="submit" class="btn btn-light" value="Continue">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->

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
                    support@pythagontrade.com to have your MT4 Details Deleted.</h5>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->

<!-- Withdrawal Modal -->
<div id="withdrawalModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Payment will be sent to your recieving address.</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post"
                    action="">
                    <input style="padding:5px;" class="form-control bg-dark text-light"
                        placeholder="Enter amount here" type="text" name="amount" required><br />

                    <input type="hidden" name="_token" value="6rmI83ImlRkUlLrqSb0KvczdzxFUiVIsVqWVqiAy">
                    <input type="submit" class="btn btn-light" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Withdrawals Modal -->

<!-- Subscription Payment modal -->
<div class="modal fade" id="SubpayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">

                <h4 class="modal-title text-light">Subscription Payment</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>

            <form role="form" method="post" action="">
                <div class="modal-body bg-dark">

                    <h5 class="text-light">Duration</h5>
                    <select class="form-control bg-dark text-light" onchange="calcAmount(this)"
                        name="duration" class="duration" id="duratn">
                        <option value="default">Select duration</option>
                        <option>Monthly</option>
                        <option>Quaterly</option>
                        <option>Yearly</option>
                    </select><br>
                    <h5 class="text-light">Amount to Pay</h5>
                    <input class="form-control subamount bg-dark text-light" type="text" id="amount"
                        disabled><br />
                    <input id="amountpay" type="hidden" name="amount">
                    <input type="hidden" value="Subscription Trading" name="pay_type">
                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Pay Now</button>
                </div>
        </div>
        </form>

        <script type="text/javascript">
            function calcAmount(sub) {
                if (sub.value == "Quaterly") {
                    var amount = document.getElementById('amount');
                    var amountpay = document.getElementById('amountpay');
                    amount.value = '$20';
                    amountpay.value = '20';
                } if (sub.value == "Yearly") {
                    var amount = document.getElementById('amount');
                    var amountpay = document.getElementById('amountpay');
                    amount.value = '$30';
                    amountpay.value = '30';
                } if (sub.value == "Monthly") {
                    var amount = document.getElementById('amount');
                    var amountpay = document.getElementById('amountpay');
                    amount.value = '$10';
                    amountpay.value = '10';
                }
            }
        </script>
    </div>
</div>
<!-- Subscription Payment modal -->

<!-- Submit MT4 MODAL modal -->
<div id="submitmt4modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Submit your MT4 Login Details</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form role="form" method="post" action="">

                    <h5 class="text-light ">MT4 ID*:</h5>
                    <input class="form-control bg-dark text-light" type="text" name="userid"
                        required><br />
                    <h5 class="text-light ">MT4 Password*:</h5>
                    <input style="padding:5px;" class="form-control bg-dark text-light" type="text"
                        name="pswrd" required><br />
                    <h5 class="text-light ">Account Type:</h5>
                    <input class="form-control bg-dark text-light" Placeholder="E.g. Standard"
                        type="text" name="acntype" required><br />
                    <h5 class="text-light ">Currency*:</h5>
                    <input class="form-control bg-dark text-light" Placeholder="E.g. USD" type="text"
                        name="currency" required><br />
                    <h5 class="text-light ">Leverage*:</h5>
                    <input class="form-control bg-dark text-light" Placeholder="E.g. 1:500" type="text"
                        name="leverage" required><br />
                    <h5 class="text-light ">Server*:</h5>
                    <input class="form-control bg-dark text-light" Placeholder="E.g. HantecGlobal-live"
                        type="text" name="server" required><br />
                    <h5 class="text-light ">Subscription Duration:</h5>
                    <select class="form-control bg-dark text-light" name="duration" class="duration">
                        <option value="default">Select duration</option>
                        <option>Monthly</option>
                        <option>Quaterly</option>
                        <option>Yearly</option>
                    </select><br>

                    <input type="hidden" name="_token" value="6rmI83ImlRkUlLrqSb0KvczdzxFUiVIsVqWVqiAy">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /plans Modal -->

@endsection
