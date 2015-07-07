@extends('app')
@section('content')

{!!Form::open()!!}
	<h1>Clients Table</h1>
	<table>
		<thead>
			
			<tr>
				<th>Client ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Created At</th>
				<th>Updated At</th>
			</tr>
		</thead>
		@foreach(App\Client::all() as $client)
			<tr>
				<td>{{$client->client_id}}</td>
				<td>{{$client->first_name}}</td>
				<td>{{$client->last_name}}</td>
				<td>{{$client->created_at}}</td>
				<td>{{$client->updated_at}}</td>
				<td><a href="{{URL::to('clients' , $client->client_id)}}"><input type="button" value="View"></a></td>
			</tr>
		@endforeach
	</table>
	<a href="{{URL::to('clients/create')}}"><input type="button" value="Create New Client"></a>
	<a href="{{URL::to('/')}}"><input type="button" value="Back"></a>

{!!Form::close()!!}