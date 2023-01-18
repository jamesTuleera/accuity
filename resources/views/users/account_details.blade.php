@extends('layouts.auth_app')

@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="text-light">Add your withdrawal info </h1>
        </div>

        <div class="row mb-4">

            @if(session()->has('success'))
                        <div class="col-12">
                            <div class="alert alert-success">
                                <h3 class="text-success">{{ session()->get('success') }}</h3>
                            </div>
                        </div>
                    @endif

            <div class="col card p-3 shadow-lg bg-dark">
                <div class="accordion accordion-light ">
                    <form method="post" action="{{route('users.btc_wallet')}}">
                        @csrf

                        <!--............................... collapse two -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingTwo" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    BItcoin
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">BTC ADDRESS</h5>
                                        <input type="text" name="btc_address"
                                            value="{{Auth::user()->wallet->btc_address}}"
                                            class="form-control text-light bg-dark"
                                            placeholder="Enter Bitcoin Address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--......................... end of collaps four -->
                        <input type="submit" class="btn btn-primary" value="Submit"> &nbsp; &nbsp;
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
