@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="color: #0e0c28;">Edit channel: {{ $channel->title }}</div>

        <div class="card-body">
            <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Channel</label>
                    <input type="text" name="channel" value="{{ $channel->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-xs btn-success" type="submit">Update Channel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
