<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('policy_id');
            $table->integer('agent_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('policy_number');
            $table->timestamps();
            
            $table->foreign('agent_id')->references('agent_id')->on('agents')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('policies');
    }
}
