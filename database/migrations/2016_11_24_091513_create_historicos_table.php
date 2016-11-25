<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
           $table->increments('id');
           $table->datetime('dataAcesso');
           $table->string('resumo');
           $table->integer('pontosAtuais');
           $table->integer('pontosSomados');
           $table->integer('user_id')->unsigned()->default(0);
           $table->foreign('user_id')->
              references('id')->on('users')->
              onDelete('cascade');
           $table->integer('recurso_id')->unsigned()->default(0);
           $table->foreign('recurso_id')->
              references('id')->on('recursos')->
              onDelete('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historicos', function (Blueprint $table) {
            //
        });
    }
}
