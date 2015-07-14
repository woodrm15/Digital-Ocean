@extends('app')
@section('content')

<h1>Create New Agent</h1>
<hr>
{!!Form::open()!!}
	<h3>
		{!!Form::label('first_name')!!}
		{!!Form::text('first_name')!!}
	</h3>

	<h3>
		{!!Form::label('last_name')!!}
		{!!Form::text('last_name')!!}
	</h3>

	{!!Form::submit('Create Agent')!!}
	<a href="{{URL::to('agents')}}"><input type="button" value="Back"></a>
	





{!!Form::close()!!}