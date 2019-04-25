@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="color: #0e0c28;">Create new channel</div>

        <div class="card-body">
            <form action="{{ route('channels.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>New channel</label>
                    <input type="text" name="channel" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-xs btn-success" type="submit">Save Channel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
