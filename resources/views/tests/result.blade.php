@extends('layouts.normal')

@section('title')
	{{ $test->type->name . ' '  .'('.$test->identifier.')' }} - Wyniki
@endsection

@section('body')

	@include('tests.partials.results')

<div class="row">
	<div class="col-md-12">
		<a href="{{ url('/tests/'.$test->id) }}" class="btn btn-primary">Wróć do przeglądu odpowiedzi</a>
		<a href="{{ url('/tests/'.$test->id .'/print') }}" class="btn btn-secondary">
			<i class="fa fa-print"></i> Wersja do druku
		</a>
	</div>
</div>

@endsection