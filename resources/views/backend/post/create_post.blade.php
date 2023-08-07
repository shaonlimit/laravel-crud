@extends('backend.master')
@section('content')
<div class="container mt-4">
    <h2>Create Post</h2>
    <form id="itemForm" action="{{ route('post_store') }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
