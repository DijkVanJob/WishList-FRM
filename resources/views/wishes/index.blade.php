@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @forelse($wishes as $wish)
                        <p>{{ $wish->name }}</p>
                    @empty
                        <p>There are no wishes yet. Create some!</p>
                    @endforelse
                </div>
                <div class="card-footer">
                    <a href="/wishes/create">Create Wishes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
