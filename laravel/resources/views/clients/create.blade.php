@extends('app')
@section('content')

	<h1>
		Create New Client
	</h1>
	<hr>
	<br>

	{!!Form::open()!!}
		{!!Form::label('client_first_name', 'First Name: ')!!}
		{!!Form::text('client_first_name', null)!!}

		{!!Form::label('client_last_name', 'Last Name: ')!!}
		{!!Form::text('client_last_name', null)!!}

		{!!Form::submit('Create New Client')!!}

	{!!Form::close()!!}
	