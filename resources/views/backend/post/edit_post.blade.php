@extends('backend.master')
@section('content')
<div class="container mt-4">
    <h2>Create Post</h2>

    <form id="itemForm" action="{{ route('update_post',$post->id) }}" method="POST" >
        @csrf
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="title" placeholder="Enter title">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" value="{{ $post->description }}" name="description" class="form-control" id="description" placeholder="Enter description">
      </div>
      <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
