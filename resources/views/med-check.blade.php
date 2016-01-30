@extends('layouts.master')

@section('content')
	<h2>What can I take?</h2>

	@foreach($meds as $med)
		<p>
		{{$med->med_name}}<br>
		@if($med->id === 3)
			<img class="med" src="/images/ondansetron.jpg" alt="ondansetron pill"><br>
		@elseif($med->id === 4)
			<img class="med" src="/images/omeprazole.jpg" alt="omeprazole capsul"><br>
		@elseif($med->id === 5)
			<img class="med" src="/images/naproxen.jpg" alt="naproxen pill"><br>
		@endif

		@if($med->can_take === 1)
			You can take this!
			<form action="/med-taken" method="POST">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="id" value="{{$med->id}}">
				<input type="submit" class="btn" value="Take!">
			</form>
		@else
			You can take this at <strong>{{$med->next}}</strong>.
		@endif
		</p>
	@endforeach
	
	<img class="footer" src="/images/puppy1.jpg" alt="A corgi puppy">

@stop