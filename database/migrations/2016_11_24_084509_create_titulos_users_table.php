<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulosUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_user', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsigned()->default(0);
           $table->foreign('user_id')->
              references('id')->on('users')->
              onDelete('cascade');
           $table->integer('titulo_id')->unsigned()->default(0);
           $table->foreign('titulo_id')->
              references('id')->on('titulos')->
              onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tituto_user', function (Blueprint $table) {
            //
        });
    }
}
