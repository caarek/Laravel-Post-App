@extends('layouts.app')

@section('content')
<div class="container mx-5">
    <div class="float-right w-75 mr-5 my-5">
        <div class="row mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $postData->title }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $postData->content }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Description
                    </div>
                    <div class="card-body">
                        <p>{{ $postData->description }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('post.remove', [$postData->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mt-4 w-100"><i class="fas fa-trash-alt"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
