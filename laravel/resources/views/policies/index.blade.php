@extends('app')
@section('content')

<h1>Policies Table</h1>

<table>
	<thead>
		<tr>
			<th>Policy ID</th>
			<th>Agent ID</th>
			<th>Client ID</th>
			<th>Policy #</th>
			<th>Created At</th>
			<th>Updated At</th>
		</tr>
	</thead>
	<tbody>
		@foreach(App\Policy::all() as $policy)
			<tr>
				<td>{{$policy->policy_id}}</td>
				<td>{{$policy->agent_id}}</td>
				<td>{{$policy->client_id}}</td>
				<td>{{$policy->policy_number}}</td>
				<td>{{$policy->created_at}}</td>
				<td>{{$policy->updated_at}}</td>
				<td><a href="{{URL::to('policies' , $policy->policy_id)}}"><input type="button" value="View"></a></td>
			</tr>
		@endforeach
	</tbody>
	
</table>
<a href="{{URL::to('policies/create')}}"><input type="button" value="Create New Policy"></a>
<a href="{{URL::to('/')}}"><input type="button" value="Back"></a>