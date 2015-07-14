@extends('app')
@section('content')


<h1>View Client</h1>	

<h3>{{$clients->first_name}} {{$clients->last_name}}</h3>	

<h4>Client: {{$clients->client_id}}</h4>
<hr>
<br>

{!!Form::open()!!}
	{!!Form::label('update_client_id','Client ID:')!!}
	{!!Form::text('update_client_id', $clients->client_id)!!}

	{!!Form::label('update_client_first_name','First Name:')!!}
	{!!Form::text('update_client_first_name', $clients->first_name)!!}

	{!!Form::label('update_client_last_name','Last Name:')!!}
	{!!Form::text('update_client_last_name', $clients->last_name)!!}

	{!!Form::submit('Update Client')!!}

	<a href="{{URL::to('clients')}}">Back</a>
	<a href="{{URL::to('clients/delete' , $clients->client_id)}}"><input type="button" value="Delete"</a>

{!!Form::close()!!}

	