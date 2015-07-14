@extends('app')
@section('content')

<h1>View Agent</h1>
<h3>{{$agents->first_name}} {{$agents->last_name}}</h3>
<h4>Agent: {{$agents->agent_id}}  </h4>
<hr>
<br>
{!!Form::open()!!}
	<div>
		{!!Form::label('update_agent_id', 'Agent ID')!!}
		{!!Form::text('update_agent_id', $agents->agent_id)!!}
	</div>
	<div>
		{!!Form::label('update_agent_first_name', 'First Name')!!}
		{!!Form::text('update_agent_first_name' , $agents->first_name)!!}
	</div>
	<div>
		{!!Form::label('update_agent_last_name', 'Last Name')!!}
		{!!Form::text('update_agent_last_name', $agents->last_name)!!}
	</div>
	<br>
	<br>
	<br>
	{!!Form::submit('Update Values')!!}


	<a href="{{URL::to('agents')}}"><input type="button" value="Back"></a>
	<a href="{{URL::to('agents/delete', $agents->agent_id)}}"><input type="button" value="Delete"></a>


{!!Form::close()!!}