<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $tables = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['client_id','first_name','last_name'];

    public function policies(){
    	return $this->hasMany('App\Policy','client_id','client_id') ;
    	}
}
