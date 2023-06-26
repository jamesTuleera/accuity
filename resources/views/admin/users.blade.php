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
                    @if (session()->has('success'))
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
                <div class="col">
                    {{-- <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#depositModal"><i
                    class="fa fa-plus"></i> New deposit</a>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#depositModala"><i
                        class="fa fa-plus"></i> New deposit</a> --}}
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center card p-4 bg-dark">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                        <table class="UserTable table table-hover text-light">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>country</th>
                                    <th>Reg created</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">
                                            <button data-toggle="modal" data-target="#depositModal{{ $user->id }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-money-bill" aria-hidden="true"></i>
                                            </button>
                                            <button data-toggle="modal" data-target="#manager{{ $user->id }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-briefcase"></i></button>
                                                <a href="{{ route('admin.delete_user', ['permanent', $user->id]) }}" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                 </a>
                                            <button data-toggle="modal" data-target="#copy-trade{{ $user->id }}"
                                                    class="btn btn-success btn-sm"><i class="fa fa-user"></i></button>

                                                {{-- <a href="{{ route('admin.delete_user', ['temporary', $user->id]) }}" class="btn btn-warning btn-sm">Temporary Delete</a> --}}
                                                {{-- <button class="btn btn-primary btn-sm">Pay ROI</button> --}}
                                        </td>
                                        <td>
                                            {{ $user->first_name . ' ' . $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($users as $cuser)
        <div id="depositModal{{ $cuser->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <div class="nothing-here">
                            <h4 class="modal-title text-warning">{{ $cuser->first_name . ' ' . $cuser->last_name }}</h4>
                            <br>
                            {{-- <h4 class="modal-title text-warning">Current Investment: ${{$cuser->wallet->investment}}</h4> --}}
                        </div>
                        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body bg-dark">
                        <div class="col-12 bg-light text-dark p-4 mb-5">
                            {{-- <h1 class="text-dark">{{ $cuser->wallet->profit }}</h1> --}}

                            <h4> Investment: <strong> ${{ number_format($cuser->wallet->investment, 2) }} </strong> </h4>
                            <h4> profit: <strong> ${{ number_format($cuser->wallet->profit, 2) }} </strong> </h4>
                            <h4> bonus: <strong> ${{ number_format($cuser->wallet->bonus, 2) }} </strong> </h4>
                            <h4> ref_bonus: <strong> ${{ number_format($cuser->wallet->ref_bonus, 2) }}
                                </strong> </h4>
                            {{-- <h4> Reg date: {{$cuser->created_at}} --}}

                        </div>


                        <form style="padding:3px;" role="form" method="post" action="{{ route('admin.payment') }}">
                            @csrf
                            <input style="padding:5px;" class="form-control text-light bg-dark" type="text"
                                name="amount"><br />
                            <input class="form-control text-light bg-dark" value="{{ $cuser->id }}" type="hidden"
                                name="user_id">
                            <select name="trans_type" class="form-control text-light bg-dark" id="">
                                <option disabled>Payment type</option>
                                <option value="Investment">Investment</option>
                                <option value="Profit">Profit</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Referal Bonus">Referal Bonus</option>
                            </select> <br>
                            <input type="submit" class="btn btn-light" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($users as $mUser)
        <div id="manager{{ $mUser->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <div class="nothing-here">
                            <h2>Assign Account Manager</h2>
                            <h4 class="modal-title text-warning">{{ $mUser->first_name . ' ' . $mUser->last_name }}</h4>
                            <br>
                        </div>
                        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-dark">
                        <form style="padding:3px;" role="form" method="post" action="{{ route('admin.manager') }}">
                            @csrf
                            <input
                                style="padding:5px;"
                                class="form-control text-light bg-dark"
                                type="text"
                                name="manager"
                                value="{{ $mUser->mine }}"
                                >

                                <br />
                            <input class="form-control text-light bg-dark" value="{{ $mUser->id }}" type="hidden"
                                name="user_id">

                            <input type="submit" class="btn btn-light" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    @foreach ($users as $trade)
        <div id="copy-trade{{ $trade->id }}" class="modal fade" role="dialog">

            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <div class="nothing-here">
                            <h2>Assign Copy trader</h2>
                            <h4 class="modal-title text-warning">{{ $trade->first_name . ' ' . $trade->last_name }}</h4>
                            <br>
                        </div>
                        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-dark">

                        <h2>
                            @isset($trade->trade->name)
                                @if ($trade->trade->status == 1)
                                <span class="text-success">Account is on <span class="btn btn-sm btn-outline-success rounded-pill">active</span> copy trading</span>
                                @else
                                    <span class="text-danger">Account is not on  copy trading</span>

                                @endif
                            @endisset
                        </h2>
                        <form style="padding:3px;" role="form" method="post" action="{{ route('admin.trade') }}">
                            @csrf
                            <input
                                style="padding:5px;"
                                class="form-control text-light bg-dark"
                                type="text"
                                name="name"
                                value="{{ isset($trade->trade->name) ? $trade->trade->name : ''   }}"
                                >

                                <br />
                            <input class="form-control text-light bg-dark" value="{{ $trade->id }}" type="hidden"
                                name="user_id">

                            <input type="submit" class="btn btn-light" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
