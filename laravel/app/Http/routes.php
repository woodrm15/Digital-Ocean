<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){

	return view('home');


});


//												----------------------------------------------
//--------------------------------------------------------------Agents Pages----------------------------------------------------------------------------------------------------------------------
//												----------------------------------------------





Route::get('agents', function () {

    return view('agents.index');
});




Route::get('agents/create', function(){
	return view('agents.create');
});




Route::post('agents/create', function(){


	$first_name 		= 	Input::get('first_name');
	$last_name 			= 	Input::get('last_name');
	
	App\Agent::create(array(
		
		'first_name' 	=> $first_name,
		'last_name' 	=> $last_name,

		));
	
	return redirect('agents');
});



Route::get('agents/{id}', function($id){

	$agents = App\Agent::find($id);
	return view('agents.show',compact('agents'));
});




Route::post('agents/{id}', function($id){

	$agent = App\Agent::find($id);

	$new_agent_id 			= 	Input::get('update_agent_id');
	$new_first_name 		= 	Input::get('update_agent_first_name');
	$new_last_name 			= 	Input::get('update_agent_last_name');


	$agent->agent_id 		= $new_agent_id;
	$agent->first_name 		= $new_first_name;
	$agent->last_name 		= $new_last_name;
	$agent->save();

	return redirect('agents');
});




Route::get('agents/delete/{id}', function($id){

	$agent = App\Agent::find($id);
	$agent->delete();
	return redirect('agents');
});





//												----------------------------------------------
//--------------------------------------------------------------Clients Pages----------------------------------------------------------------------------------------------------------------------
//												----------------------------------------------





Route::get('clients' , function(){
	return view('clients.index');
});




Route::get('clients/create' , function(){
	return view('clients.create');
});




Route::get('clients/{id}' , function($id){
	$clients 	= 	App\Client::find($id);


	return view('clients.show', compact('clients'));
});





Route::post('clients/create', function(){
	$new_first_name 	= 		Input::get('client_first_name');
	$new_last_name 		= 		Input::get('client_last_name');

	App\Client::create(array(
		'first_name' 	=> 		$new_first_name,
		'last_name' 	=> 		$new_last_name,
		));

	return redirect('clients');
});




Route::post('clients/{id}' , function($id){
	$client = App\Client::find($id);

	$new_client_id 			= 	Input::get('update_client_id');
	$new_client_first_name 	= 	Input::get('update_client_first_name');
	$new_client_last_name 	= 	Input::get('update_client_last_name');

	$client->client_id 		= 	$new_client_id;
	$client->first_name 	= 	$new_client_first_name;
	$client->last_name 		= 	$new_client_last_name;
	$client->save();

	return redirect('clients');
});



	
Route::get('clients/delete/{id}' , function($id){
	$client = App\Client::find($id);

	$client->delete();
	return redirect('clients');
});





//												----------------------------------------------
//--------------------------------------------------------------Policies Pages----------------------------------------------------------------------------------------------------------------------
//												----------------------------------------------






Route::get('policies', function(){
	return view('policies.index');
});

Route::get('policies/create', function(){
	return view('policies.create');
});

Route::post('policies/create', function(){
	//$create_policy_id 		= 	Input::get('create_policy_id');
	$create_agent_id 			= 	Input::get('create_policy_agent_id');
	$create_client_id 			= 	Input::get('create_policy_client_id');
	$create_policy_number 		= 	Input::get('create_policy_policy_number');

	App\Policy::create(array(
		//'policy_id' 	=> 	$create_policy_id,
		'agent_id'  	=> 	$create_agent_id,
		'client_id' 	=> 	$create_client_id,
		'policy_number' => 	$create_policy_number,


		));
	return redirect('policies');
});

Route::get('policies/{id}', function($id){
	$policy = App\Policy::find($id);
	return view('policies.show' , compact('policy'));

});



Route::post('policies/{id}' , function($id){
	$policy = App\Policy::find($id);

	$update_policy_id 			= 	Input::get('update_policy_id');
	$update_policy_agent_id 	= 	Input::get('update_policy_agent_id');
	$update_policy_client_id 	= 	Input::get('update_policy_client_id');
	$update_policy_number  		= 	Input::get('update_policy_number');

	$policy->policy_id 			= 	$update_policy_id;
	$policy->agent_id 			= 	$update_policy_agent_id;
	$policy->client_id 			= 	$update_policy_client_id;
	$policy->policy_number 		= 	$update_policy_number;

	$policy->save();

	return redirect('policies');


});

Route::get('policies/delete/{id}' , function($id){
	$policy = App\Policy::find($id);
	$policy->delete();
	return redirect('policies');

});




Route::get('testing', function(){

	$mason =  strToLower('iCHlNImJGJHh');
	return $mason;

});











