@extends('layouts.auth_app')
@section('user-content')
<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Notification</h1>
        </div>

        <div class="row mb-5">
            <div class="col card bg-dark shadow-lg">
                <div class="bs-example widget-shadow table-responsive"
                    data-example-id="hoverable-table">
                    <table class="table table-hover  text-light">
                        <thead>
                            <tr>
                                <th>Message</th>
                                <th>Recieve Date</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
