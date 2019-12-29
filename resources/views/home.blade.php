@extends('layouts.app')

@section('content')
<div class="container mx-5">
    <div class="float-right w-75 mr-5">
        @if ( empty($posts[0]) )
            <div class="mt-5 text-center">
                <h1 class="text-muted">Nothing to show :(</h1>
                <h2 class="text-muted">Create something amazing!</h2>
                <a href="/post/new" class="btn btn-outline-indigo mt-5">Add post <i class="fas fa-plus"></i></a>
            </div>
        @else
            <a href="/post/new" class="btn btn-info" style="position: fixed; top: 10px; right: 10px; z-index: 1;">Add post <i class="fas fa-plus"></i></a>
            @foreach ($posts as $post)
                <div class="card ml-4 mt-4">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <div class="card-text">{{ $post->description }}</div>
                        <p><a href="/post/{{ $post->id }}" class="card-link">Read more</a></p>
                    </div>
                    <div class="card-footer text-muted">
                        <small>2 comments 1 like</small>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
