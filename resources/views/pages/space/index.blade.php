@extends('layouts.app')

@section('content')
<div class="container">
    <x-space></x-space>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @foreach ($spaces as $space)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $space->title }}
                        @if ($space->user_id == Auth::user()->id)
                        <form action="{{ route('space.destroy', ['id' => $space->id]) }}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger float-right" onclick="return confirm('are you sure?')">Delete</button>
                            <a href="{{ route('space.edit', ['id' => $space->id]) }}" class="btn btn-sm btn-info float-right">Edit</a>
                        </form>
                        @endif
                    </h5>
                    <h6 class="card-subtitle">{{ $space->address }}</h6>
                    <p class="card-text">{{ $space->description }}</p>
                    <a href="#" class="card-link" onclick="openDirection({{ $space->latitude }}, {{ $space->longitude }}, {{ $space->id }})">
                        Direction
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        {{ $spaces->links() }}
    </div>
</div>
@endsection
