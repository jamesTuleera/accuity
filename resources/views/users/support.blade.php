@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="row mb-5">
            <div class="col text-center card bg-dark p-3">
                <h1 class="title1 text-light">{{env('APP_NAME')}} Support</h1>
                <div class="sign-up-row widget-shadow text-light">
                    <h4 class="text-light">For inquiries, suggestions or complains. Mail us at</h4>
                    <h5 class="text-light mt-3">support@pythagontrade.com
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
