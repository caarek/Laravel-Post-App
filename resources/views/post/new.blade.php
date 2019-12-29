@extends('layouts.app')

@section('content')
<div class="container mx-5">
    <div class="card float-right w-75 mr-5 mt-5">
        <form method="post" action="/post/add" class="text-center border border-light p-5">

            @csrf

            <p class="h4 mb-4">Add new post</p>

            <input name="title" type="text" id="postTitle" class="form-control mb-4" placeholder="Title">
            <input name="description" type="text" id="postDescription" class="form-control mb-4" placeholder="Description">

            <div class="form-group">
                <textarea name="content" class="form-control rounded-0" id="postContent" rows="3" placeholder="Content"></textarea>
            </div>

            <button class="btn btn-info px-auto" type="submit">Post</button>

        </form>
    </div>
</div>
@endsection
