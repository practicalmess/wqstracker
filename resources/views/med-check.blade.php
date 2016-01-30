@extends('layouts.master')

@section('content')
	<h2>What can I take?</h2>

	@foreach($meds as $med)
		<p>
		{{$med->med_name}}<br>
		@if($med->can_take === 1)
			You can take this!
			<form action="/med-taken" method="POST">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="id" value="{{$med->id}}">
				<input type="submit" value="Take!">
			</form>
		@else
			You can take this at {{$med->next}}.
		@endif
		</p>
	@endforeach

@stop