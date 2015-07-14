<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $tables = 'policies';
    protected $primaryKey = 'policy_id';
    protected $fillable = ['policy_id','agent_id','client_id','policy_number'];
}
