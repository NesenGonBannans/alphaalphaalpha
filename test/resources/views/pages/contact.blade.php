@extends('app')

@section('title')
<div class="title">Contact Us:</div>
@stop

@section('content')
@if(count($people))
	<ul>
	@foreach ($people as $person)
		<li><h1>{{ $person }}</h1></li>
	@endforeach
	</ul>
@endif



@stop