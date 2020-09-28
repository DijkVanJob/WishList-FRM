@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container d-flex flex-column align-items-center">
                        <h1>Welcome to WishList!</h1>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item"><a href="/wishes">View Wishes</a></li>
                            <li class="list-group-item"><a href="#">Manage Wishes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
