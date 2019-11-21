@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Muuda ülesannet</h1>

<form method="POST" action="/task/{{ $task->id }}" class="w-75">

	<div class="form-group">
		<textarea name="description" class="form-control">{{$task->description }}</textarea>	
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-outline-primary">Muuda</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop