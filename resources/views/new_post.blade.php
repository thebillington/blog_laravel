@extends('layout/base-layout')

@section('page-title', 'New Post')

@section('page-content')

	<h1>New Post</h1>

	<form method="POST" action="/posts">

		{{ csrf_field() }}

		<div class="form-group">

			<label for="postTitle">Title</label>
			<input type="text" class="form-control" placeholder="Title..." name="title" id="postTitle">

		</div>

		<div class="form-group">

			<label for="postContent">Content</label>
			<textarea type="text" rows="10" class="form-control" placeholder="Content" name="content" id="postContent"></textarea>

		</div>

		<button type="submit" class="btn btn-primary">Submit</button>

	</form>
    
@endsection