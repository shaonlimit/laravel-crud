@extends('backend.master')
@section('content')
<div class="container mt-5">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
        </div>
    </div>
</div>
@endsection
