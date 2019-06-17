<!--   this will bring the styles to this page from app.blade.php -->
@extends('layouts.app')



@section('content')
<form action="{{ route('store_blog_path') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" value="">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" rows="10" cols="80"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-outline-primary" type="submit" name="button">Add Blog post</button>
    </div>
</form>
@endsection
