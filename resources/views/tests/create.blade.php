@extends('layouts.normal')

@section('title', 'Dodaj test')

@section('body')

<div class="row">
    <div class="col-md-12">
        
		<form action="{{ url('/tests') }}" method="post">
			
			{{ csrf_field() }}
			
			<select name="test_type_id" class="form-control">
				@foreach($types as $type)
				<option value="{{ $type->id }}">{{ $type->name }}</option>
				@endforeach
			</select>

			<div class="form-group">
				<label class="form-label">Identyfikator</label>
				<input class="form-control" type="text" name="identifier" required="required">

				<p class="bg-warning text-dark p-2 mt-2">
					<i class="fa fa-warning"></i>
					<strong>UWAGA!</strong>
					W polu identyfikatora nie podawaj żadnych danych wrażliwych (danych osobowych pozwalających na identyfikację badanej osoby)!
				</p>
			</div>

			<button class="btn btn-primary">
				Dodaj <i class="fas fa-arrow-right"></i>
			</button>

		</form>

    </div>
</div>


@endsection
