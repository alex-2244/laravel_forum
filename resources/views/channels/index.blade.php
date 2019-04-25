@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="color: #0e0c28;">Channels</div>

        <div class="card-body">
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
            @endif

            <table class="table table-hover">
                <thead style="text-align: center;">
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody style="text-align: center;">
                    @foreach ($channels as $channel)
                        <tr>
                            <td>{{ $channel->title }}</td>
                            <td>
                                <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-xs btn-outline-primary">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-outline-danger">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
