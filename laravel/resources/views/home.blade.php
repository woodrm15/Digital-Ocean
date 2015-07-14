@extends('app')
@section('content')

<h1>Table Manager</h1>

	<div id='navBar'>
		<div class='buttons'>
			<a href="{{URL::to('agents')}}"><input type="button" value="Agents"></a>
		</div class='buttons'>			
			<a href="{{URL::to('clients')}}"><input type="button" value="Clients"></a>
		</div class='buttons'>		
			<a href="{{URL::to('policies')}}"><input type="button" value="Policies"></a>
		</div>			
	</div>		
