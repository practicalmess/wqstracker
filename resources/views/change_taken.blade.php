@extends('layouts.master')

@section('content')
	@foreach($meds as $med)
		<p>
			{{$med->med_name}}<br>
			<form method="POST" action="/changed_taken">
				<input type='hidden' value='{{ csrf_token() }}' name='_token'>
				<input type="hidden" name="id" value="{{$med->id}}">
				<input type="text" name="last_taken">

				<button type="submit" class="btn btn-danger">Change last taken</button>
			</form>
		</p>
	@endforeach
@stop
