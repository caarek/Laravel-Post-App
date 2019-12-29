@extends('layouts.app')

@section('content')
<div class="container mx-5">
    <div class="float-right w-75 mr-5 my-5">
        {{ $user->name }}
    </div>
</div>
@endsection
