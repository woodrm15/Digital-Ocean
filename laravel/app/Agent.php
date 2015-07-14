<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $tables = 'agents';
    protected $primaryKey = 'agent_id';

    protected $fillable = ['agent_id','first_name','last_name'];

    public function policies(){
    	return $this->hasMany('App\Policy','agent_id','agent_id'); 
    	}
}
