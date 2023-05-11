@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Page expired</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-center">
                        <h2>Page expired <br>  </h2>
                        <a href="{{ route('login') }}" class="btn btn-primary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
