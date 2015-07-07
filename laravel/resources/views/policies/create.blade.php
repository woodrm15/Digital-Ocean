@extends('app')
@section('content')

<h1>Create New Policy</h1>
<hr>
<br>

{!!Form::open()!!}
	

	

	{!!Form::label('create_policy_agent_id' , 'Agent ID')!!}
	{!!Form::text('create_policy_agent_id')!!}

	{!!Form::label('create_policy_client_id', 'Client ID')!!}
	{!!Form::text('create_policy_client_id')!!}

	{!!Form::label('create_policy_policy_number' , 'Policy #')!!}
	{!!Form::text('create_policy_policy_number')!!}

	{!!Form::submit('Create New Policy')!!}
	


{!!Form::close()!!}


<a href="{{URL::to('policies')}}">Back</a>