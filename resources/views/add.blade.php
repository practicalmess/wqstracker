@extends('layouts.master')

@section('content')
	<form action="/change" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">

		<input type="text" name="med_name" placeholder="Name">
		<input type="text" name="interval" placeholder="Interval">
		<input type="submit" value="Add">
	</form>

	
@stop