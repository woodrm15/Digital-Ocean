@extends('app')
@section('content')

<h1>View Policy</h1>



<h3>Policy ID:  {{$policy->policy_id}}<h3>
	
<br>
<hr>
<br>

{!!Form::open()!!}
	<div>
		{!!Form::label('update_policy_id','Policy ID:')!!}
		{!!Form::text('update_policy_id', $policy->policy_id)!!}
	</div>
	<div>
		{!!Form::label('update_policy_agent_id','Agent ID:')!!}
		{!!Form::text('update_policy_agent_id' , $policy->agent_id)!!}
	</div>
	<div>	
		{!!Form::label('update_policy_client_id','Client ID:')!!}
		{!!Form::text('update_policy_client_id' , $policy->client_id)!!}
	</div>
	<div>	
		{!!Form::label('update_policy_number','Policy Number:')!!}
		{!!Form::text('update_policy_number' ,  $policy->policy_number)!!}
	</div>	

	{!!Form::submit('Update Values')!!}

	<a href="{{URL::to('policies/delete' , $policy->policy_id)}}"><input type="button" value="Delete"></a>
	
{!!Form::close()!!}

<br>


<a href="{{URL::to('policies')}}"><input type="button" value="Back"></a>
