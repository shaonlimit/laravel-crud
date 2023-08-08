@extends('backend.master')
@section('content')
<div class="container mt-4">

    @if (Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>

    @endif
    @if (Session::has('delete_message'))
    <p class="alert alert-danger">{{ Session::get('delete_message') }}</p>

    @endif

    <h2>Post List</h2>
    <a href="{{ route('create_post') }}" class="btn btn-primary">Create Post</a>
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $sl=1;?>
        @foreach ($posts as $post )

        <tr>
            <td>{{ $sl++ }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <a href="{{ route('post_info',$post->id) }}" class="btn btn-primary btn-sm">Show</a>
              <a href="{{ route('edit_post',$post->id) }}" class="btn btn-info btn-sm">Edit</a>
              <a href="{{ route('delete_post',$post->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
        @endforeach



        <!-- Add more items as needed -->
      </tbody>
    </table>
  </div>
@endsection
