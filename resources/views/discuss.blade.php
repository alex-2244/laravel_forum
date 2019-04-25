@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="color: #0e0c28;">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
            @foreach ($channels as $channel)
                <p>{{ $channel->title }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection
