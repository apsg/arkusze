<a href="{{ url('/tests/'.$test->id) . ($test->isFinished() ? "/result" : "" ) }}" class="btn btn-sm btn-primary">
	<i class="fas fa-eye"></i>
</a>
<form action="{{ url('/tests/'.$test->id) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('delete') }}
	<button class="btn btn-sm btn-danger" onclick="return confirm('Czy na pewno usunąć? Tej czynności nie będzie można cofnąć.');">
		<i class="fas fa-trash"></i>
	</button>
</form>
