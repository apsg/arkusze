@extends('layouts.normal')

@section('title')
	{{ $test->type->name . ' '  .'('.$test->identifier.')' }}
@endsection

@section('body')

<div class="row">
    <div class="col-md-12">
    	<table class="table">
    	<tr>
    		<th>Utworzono dnia: </th><td>{{ $test->created_at }}</td>
    	</tr>
    	<tr>
    		<th>Ostatnia modyfikacja: </th>
    		<td>{{ $test->updated_at }}</td>
    	</tr>
    	@if($test->finished_at)
    		<tr>
    			<th>Ukończono: </th>
    			<td>{{ $test->finished_at }}</td>
    		</tr>
    	@endif
    	</table>
		
		<test 
            :answers="{{ json_encode($test->answers) }}" 
            :is_finished ="{{ json_encode( $test->isFinished()) }}"
            ></test>
    </div>
</div>
@endsection