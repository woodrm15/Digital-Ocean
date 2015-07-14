@extends('app')
@section('content')
<h1>Agents Table</h1>	
<table>
	<thead>
		<tr>
			<th>Agent ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Created At</th>
			<th>Updated At</th>
		</tr>		
	</thead>

	<tbody>
		@foreach(App\Agent::all() as $agent)
		

			<tr>
				<td>{{$agent->agent_id}}</td>
				<td>{{$agent->first_name}}</td>
				<td>{{$agent->last_name}}</td>
				<td>{{$agent->created_at}}</td>
				<td>{{$agent->updated_at}}</td>
				<td><a href="{{URL::to('agents' , $agent->agent_id )}}"><input onclick="" type="button" value="View"></a></td>
			</tr>
		@endforeach	 

	</tbody>
</table>
	<br>			
	
				<a href="{{URL::to('agents/create')}}">
					<input type="button" value="Create New Agent">

				</a>
				<a href="{{URL::to('/')}}"><input type="button" value="Back"></a>