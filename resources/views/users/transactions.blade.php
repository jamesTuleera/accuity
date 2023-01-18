@extends('layouts.auth_app')
@section('user-content')
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Transactions on your account</h1>
            </div>

            <div class="row mb-5">
                <div class="col text-center card p-4 bg-dark">

                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                            <h4 class="nav-item nav-link active pt-3 " id="nav-home-tab" data-toggle="tab" href="#1"
                                role="tab" aria-controls="nav-home" aria-selected="true"> Deposits
                            </h4>

                            <h4 class="nav-item nav-link pt-3" id="nav-profile-tab" data-toggle="tab" href="#2"
                                role="tab" aria-controls="nav-profile" aria-selected="false">
                                Withdrawals</h4>

                            <h4 class="nav-item nav-link  pt-3" id="nav-contact-tab" data-toggle="tab" href="#3"
                                role="tab" aria-controls="nav-contact" aria-selected="false">
                                All Transactions</h4>
                        </div>
                    </nav>

                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">


                        <div class="tab-pane fade show active bg-dark card p-3" id="1" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <table id="UserTable" class="UserTable table table-hover text-light">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Payment mode</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $dpsn = 1;
                                        @endphp

                                        @foreach ($depositTrans as $dtrans)
                                        <tr>
                                            <th scope="row">{{$dpsn++}}</th>
                                            <td>${{number_format($dtrans->amount)}}</td>
                                            <td>{{$dtrans->amount}}</td>
                                            <td>{{$dtrans->status}}</td>
                                            <td>{{$dtrans->created_at}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="tab-pane fade p-3 bg-dark" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <table id="UserTable" class="UserTable table table-hover text-light">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount requested</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $wdsn = 1;
                                        @endphp

                                        @foreach ($withdrawTrans as $wdTrans)
                                        <tr>
                                            <th scope="row">{{$wdsn++}}</th>
                                            <td>${{number_format($wdTrans->amount)}}</td>
                                            <td>{{$wdTrans->status}}</td>
                                            <td>{{$wdTrans->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="tab-pane fade p-3 bg-dark" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <table id="UserTable" class="UserTable table table-hover text-light">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $atsn = 1;
                                        @endphp

                                        @foreach ($Alltrans as $allTran)
                                        <tr>
                                            <th scope="row">{{$atsn++}}</th>
                                            <td>${{number_format($allTran->amount)}}</td>
                                            <td>{{$allTran->type}}</td>
                                            <td>{{$allTran->status}}</td>
                                            <td>{{$allTran->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

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
                    <form style="padding:3px;" role="form" method="post"
                        action="https://cryptomaxinvestments.com/dashboard/deposit">
                        <input style="padding:5px;" class="form-control text-light bg-dark"
                            placeholder="Enter amount here" type="text" name="amount" required><br />

                        <input type="hidden" name="_token" value="BDDMwxM8mMtxH6eYbfpOJ7jqz49dd4WcEqIXqfCk">
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
                        support@cryptomaxinvestments.com to have your MT4 Details Deleted.</h5>
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
                        action="https://cryptomaxinvestments.com/dashboard/withdrawal">
                        <input style="padding:5px;" class="form-control bg-dark text-light"
                            placeholder="Enter amount here" type="text" name="amount" required><br />

                        <input type="hidden" name="_token" value="BDDMwxM8mMtxH6eYbfpOJ7jqz49dd4WcEqIXqfCk">
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

                <form role="form" method="post" action="https://cryptomaxinvestments.com/dashboard/deposit"
                    id="priceform">
                    <div class="modal-body bg-dark">

                        <h5 class="text-light">Duration</h5>
                        <select class="form-control bg-dark text-light" onchange="calcAmount(this)" name="duration"
                            class="duration" id="duratn">
                            <option value="default">Select duration</option>
                            <option>Monthly</option>
                            <option>Quaterly</option>
                            <option>Yearly</option>
                        </select><br>
                        <h5 class="text-light">Amount to Pay</h5>
                        <input class="form-control subamount bg-dark text-light" type="text" id="amount" disabled><br />
                        <input id="amountpay" type="hidden" name="amount">
                        <input type="hidden" value="Subscription Trading" name="pay_type">
                        <input type="hidden" name="_token" value="BDDMwxM8mMtxH6eYbfpOJ7jqz49dd4WcEqIXqfCk">
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
                    <form role="form" method="post" action="https://cryptomaxinvestments.com/dashboard/savemt4details">

                        <h5 class="text-light ">MT4 ID*:</h5>
                        <input class="form-control bg-dark text-light" type="text" name="userid" required><br />
                        <h5 class="text-light ">MT4 Password*:</h5>
                        <input style="padding:5px;" class="form-control bg-dark text-light" type="text" name="pswrd"
                            required><br />
                        <h5 class="text-light ">Account Type:</h5>
                        <input class="form-control bg-dark text-light" Placeholder="E.g. Standard" type="text"
                            name="acntype" required><br />
                        <h5 class="text-light ">Currency*:</h5>
                        <input class="form-control bg-dark text-light" Placeholder="E.g. USD" type="text"
                            name="currency" required><br />
                        <h5 class="text-light ">Leverage*:</h5>
                        <input class="form-control bg-dark text-light" Placeholder="E.g. 1:500" type="text"
                            name="leverage" required><br />
                        <h5 class="text-light ">Server*:</h5>
                        <input class="form-control bg-dark text-light" Placeholder="E.g. HantecGlobal-live" type="text"
                            name="server" required><br />
                        <h5 class="text-light ">Subscription Duration:</h5>
                        <select class="form-control bg-dark text-light" name="duration" class="duration">
                            <option value="default">Select duration</option>
                            <option>Monthly</option>
                            <option>Quaterly</option>
                            <option>Yearly</option>
                        </select><br>

                        <input type="hidden" name="_token" value="BDDMwxM8mMtxH6eYbfpOJ7jqz49dd4WcEqIXqfCk">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /plans Modal -->

    <footer class="footer bg-dark text-light">
        <div class="container-fluid">
            <div class="row copyright text-center text-align-center">
                <p>All Rights Reserved &copy; Cryptomaxinvestments 2021</p>
            </div>
        </div>
    </footer>
</div>


@endsection
