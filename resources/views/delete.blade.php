@extends('layouts.master')

@section('content')
	@foreach($meds as $med)
		<p>
			{{$med->med_name}}<br>
			<form method="POST" action="/deleted">
				<input type='hidden' value='{{ csrf_token() }}' name='_token'>
				<input type="hidden" name="id" value="{{$med->id}}">

				<button type="submit" class="btn btn-danger">Delete med</button>
			</form>
		</p>
	@endforeach
@stop