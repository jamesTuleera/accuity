@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Request for Withdrawal</h1>
        </div>

        <div class="row mb-5">

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

            <div class="col-lg-4 p-3 rounded card bg-dark">
                <div class="card-body shadow border-danger">
                    <h2 class="card-title mb-3 text-light"> Bitcoin</h2>
                    <h4 class="text-light">Minimum amount: <strong style="float:right;"> $100</strong>
                    </h4><br>

                    <h4 class="text-light">Maximum amount:<strong style="float:right;"> $200000</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $20</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (%): <strong style="float:right;"> 20%</strong></h4>
                    <br>

                    <h4 class="text-light">Duration:<strong style="float:right;"> Instant</strong></h4>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#withdrawalModal1"><i class="fa fa-plus"></i> Request
                            withdrawal</a>
                    </div>

                </div>
            </div>

            {{-- <div class="col-lg-4 p-3 rounded card bg-dark">
                <div class="card-body shadow border-danger">
                    <h2 class="card-title mb-3 text-light"> Bitcoin</h2>
                    <h4 class="text-light">Minimum amount: <strong style="float:right;"> $100</strong>
                    </h4><br>

                    <h4 class="text-light">Maximum amount:<strong style="float:right;"> $200000</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $20</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (%): <strong style="float:right;"> 20%</strong></h4>
                    <br>

                    <h4 class="text-light">Duration:<strong style="float:right;"> Instant</strong></h4>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#withdrawalModal1"><i class="fa fa-plus"></i> Request
                            withdrawal</a>
                    </div>

                </div>
            </div> --}}

            <!-- Withdrawal Modal -->
            <div id="withdrawalModal1" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h4 class="modal-title text-light">Payment will be sent through your
                                selected method.</h4>
                            <button type="button" class="close text-light"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-dark">
                            <div class="row">

                            </div>
                            <form style="padding:3px;" role="form" method="POST"
                                action="{{route('users.withdraw_action')}}">
                                @csrf
                                <input required class="form-control p-3 text-light bg-dark"
                                    placeholder="Enter amount here" type="text" name="amount"
                                    ><br />
                                <select name="withdrawal_option" id="" class="form-control">
                                    <!--<option value="investment">Investment</option>-->
                                    <option value="balance">Balance</option>
                                    <!--<option value="bonus">Bonus</option>-->
                                    <option value="referal_bonus">Referal bonus</option>
                                    <!--<option value="Profit">Profit</option>-->
                                    <!--<option value="Profit">Profit</option>-->
                                </select><br><br>



                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Withdrawals Modal -->
            {{-- <div class="col-lg-4 p-3 rounded card bg-dark">
                <div class="card-body shadow border-danger">
                    <h2 class="card-title mb-3 text-light"> Ethereum</h2>
                    <h4 class="text-light">Minimum amount: <strong style="float:right;"> $50</strong>
                    </h4><br>

                    <h4 class="text-light">Maximum amount:<strong style="float:right;"> $100000</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $20</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (%): <strong style="float:right;"> 20%</strong></h4>
                    <br>

                    <h4 class="text-light">Duration:<strong style="float:right;"> instant</strong></h4>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#withdrawalModal2"><i class="fa fa-plus"></i> Request
                            withdrawal</a>
                    </div>

                </div>
            </div> --}}

            <!-- Withdrawal Modal -->
            {{-- <div id="withdrawalModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h4 class="modal-title text-light">Payment will be sent through your
                                selected method.</h4>
                            <button type="button" class="close text-light"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-dark">
                            <form style="padding:3px;" role="form" method="post"
                                action="https://cryptomaxinvestments.com/dashboard/withdrawal">
                                <input class="form-control p-3 text-light bg-dark"
                                    placeholder="Enter amount here" type="text" name="amount"
                                    required><br />
                                <input class="form-control text-light bg-dark " value="Ethereum"
                                    type="text" disabled><br />
                                <input value="Ethereum" type="hidden" name="payment_mode">
                                <input value="2" type="hidden" name="method_id"><br />

                                <input type="hidden" name="_token"
                                    value="6rmI83ImlRkUlLrqSb0KvczdzxFUiVIsVqWVqiAy">
                                <input type="submit" class="btn btn-primary" value="Submit"
                                    onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /Withdrawals Modal -->
            {{-- <div class="col-lg-4 p-3 rounded card bg-dark">
                <div class="card-body shadow border-danger">
                    <h2 class="card-title mb-3 text-light"> Litecoin</h2>
                    <h4 class="text-light">Minimum amount: <strong style="float:right;"> $1000</strong>
                    </h4><br>

                    <h4 class="text-light">Maximum amount:<strong style="float:right;"> $1000</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $0</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (%): <strong style="float:right;"> 2%</strong></h4>
                    <br>

                    <h4 class="text-light">Duration:<strong style="float:right;"> Instant</strong></h4>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#withdrawalModal7"><i class="fa fa-plus"></i> Request
                            withdrawal</a>
                    </div>

                </div>
            </div> --}}

            <!-- Withdrawal Modal -->
            {{-- <div id="withdrawalModal7" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h4 class="modal-title text-light">Payment will be sent through your
                                selected method.</h4>
                            <button type="button" class="close text-light"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-dark">
                            <form style="padding:3px;" role="form" method="post"
                                action="https://cryptomaxinvestments.com/dashboard/withdrawal">
                                <input class="form-control p-3 text-light bg-dark"
                                    placeholder="Enter amount here" type="text" name="amount"
                                    required><br />
                                <input class="form-control text-light bg-dark " value="Litecoin"
                                    type="text" disabled><br />
                                <input value="Litecoin" type="hidden" name="payment_mode">
                                <input value="7" type="hidden" name="method_id"><br />

                                <input type="hidden" name="_token"
                                    value="6rmI83ImlRkUlLrqSb0KvczdzxFUiVIsVqWVqiAy">
                                <input type="submit" class="btn btn-primary" value="Submit"
                                    onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /Withdrawals Modal -->
            {{-- <div class="col-lg-4 p-3 rounded card bg-dark">
                <div class="card-body shadow border-danger">
                    <h2 class="card-title mb-3 text-light"> Credit Card</h2>
                    <h4 class="text-light">Minimum amount: <strong style="float:right;"> $10</strong>
                    </h4><br>

                    <h4 class="text-light">Maximum amount:<strong style="float:right;"> $100000</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $2</strong>
                    </h4><br>

                    <h4 class="text-light">Charges (%): <strong style="float:right;"> 2%</strong></h4>
                    <br>

                    <h4 class="text-light">Duration:<strong style="float:right;"> 2 working
                            days</strong></h4><br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#withdrawalModal6"><i class="fa fa-plus"></i> Request
                            withdrawal</a>
                    </div>

                </div>
            </div> --}}

            <!-- Withdrawal Modal -->
            {{-- <div id="withdrawalModal6" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h4 class="modal-title text-light">Payment will be sent through your
                                selected method.</h4>
                            <button type="button" class="close text-light"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-dark">
                            <form style="padding:3px;" role="form" method="post"
                                action="https://cryptomaxinvestments.com/dashboard/withdrawal">
                                <input class="form-control p-3 text-light bg-dark"
                                    placeholder="Enter amount here" type="text" name="amount"
                                    required><br />
                                <input class="form-control text-light bg-dark " value="Credit Card"
                                    type="text" disabled><br />
                                <input value="Credit Card" type="hidden" name="payment_mode">
                                <input value="6" type="hidden" name="method_id"><br />

                                <input type="hidden" name="_token"
                                    value="6rmI83ImlRkUlLrqSb0KvczdzxFUiVIsVqWVqiAy">
                                <input type="submit" class="btn btn-primary" value="Submit"
                                    onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /Withdrawals Modal -->
        </div>

    </div>
</div>


@endsection
