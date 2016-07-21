@extends('layout')

@section('content')
	@include('partial.letters')

	<div class="row Programmes">
		@foreach($programmes AS $programme)
			<div class="Programme col-sm-3">
					<img class="img-responsive"
						src="{{ str_replace('{recipe}', \App\iPlayerApi::getImageSize(), $programme->images->standard) }}">
				
				<div class="Programme__title">{{ $programme->title }}</div>
			</div>
		@endforeach
	</div>

	{{ $programmes->render() }}
@stop
