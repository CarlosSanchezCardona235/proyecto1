@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-md-offset-2">
			<div class="card">
				<div class="card-header">
					Ver Etiqueta
				</div>
			</div>
			<div class="card-body">
				<p><strong>Nombre</strong>{{ $tag->name }}</p>
				<p><strong>Slug</strong>{{ $tag->slug }}</p>

			</div>
		</div>
	</div>
</div>
@endsection