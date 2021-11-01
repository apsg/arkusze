@extends('layouts.normal')

@section('title', 'Twoje testy')

@section('body')

<div class="row">
    <div class="col-md-3 panel">
        <a href="{{ url('/tests/create') }}" class="btn btn-success text-center">
            <i class="fas fa-4x fa-plus"></i>
            <br />Dodaj nowy arkusz
        </a>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<tests-list></tests-list>
	</div>
</div>


@endsection
