@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">My Plans </h1>
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
                    <form action="{{route("admin.add_plans")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" class="text-light">Investment amount</label>
                            <input type="text" name="invest_amount" id="" placeholder="Investment amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-light">Returns</label>
                            <input type="text" name="returns" id="" placeholder="Returns" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary w-100 btn-md">Add Plan</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-12  card p-4 bg-dark">
                <div class="bs-example widget-shadow table-responsive"
                    data-example-id="hoverable-table">
                    <div class="row">
                        @foreach ($plans as $plan)
                        <div class="col-lg-3 p-4 card bg-dark shadow-lg">
                            <div class="pricing-table purple border bg-dark shadow-lg">
                                <h3 class='text-light d-flex justify-content-between'><span>Invest:</span> <span>${{ $plan->invest }}</span></h3><hr class='bg-light'>
                                <h3 class='text-light d-flex justify-content-between'><span>Returns:</span> <span>${{ $plan->returns }}</span></h3><hr class='bg-light mt-3'>
                                <div class="">
                                    <span class="btn btn-sm btn-warning border rounded-pill"  data-toggle="modal" data-target="#depositModal{{$plan->id}}">Edit</span>
                                    <a class="btn btn-sm btn-danger border rounded-pill" href="{{route('admin.delete_plans', [$plan->id])}}">Delete</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($plans as $edit_plan)
<div id="depositModal{{$edit_plan->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
               <div class="nothing-here">
                    <h4 class="modal-title text-warning">Edit plans</h4><br>
               </div>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">

                <div class="form">
                    <form action="{{route("admin.edit_plans")}}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" id="" value="{{$edit_plan->id}}">
                        <div class="form-group">
                            <label for="" class="text-light">Investment amount</label>
                            <input type="text" value="{{$edit_plan->invest}}" name="invest_amount" id="" placeholder="Investment amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-light">Returns</label>
                            <input type="text" value="{{$edit_plan->returns}}" name="returns" id="" placeholder="Returns" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary w-100 btn-md">Edit Plan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- /deposit Modal -->

@endsection
