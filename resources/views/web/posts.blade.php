@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<h1>Lista de articulos</h1>

		@foreach($posts as $post)
		<div class="card">
			<div class="card-title">
				<h5>{{ $post->name }}</h5>				
			</div>
			<div class="card-body">
				@if($post->file)
					<img src="{{ $post->file }}" class="card-img-top">
				@endif
				{{ $post->excerpt }}
				<a href="{{ route('post', $post->slug)}}" class="pull-right">Leer Mas</a>
			</div>
		</div>
		<hr>
		@endforeach
		{{ $posts->render() }}
	</div>
</div>
@endsection