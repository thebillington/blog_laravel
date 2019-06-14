@extends('layout/base-layout')

@section('page-title', 'Posts Page')

@section('page-content')

	<h1>Posts</h1>

	@foreach ($posts as $post)
		<div class="postContainer">
			<h2 class="title">{{ $post->title }}</h2>
			<p class="content">{{ $post->content }}</p>
		</div>
	@endforeach
    
@endsection