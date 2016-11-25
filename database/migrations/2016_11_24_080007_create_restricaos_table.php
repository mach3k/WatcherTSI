<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restricaos', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('recurso_id')->unsigned()->default(0);
           $table->foreign('recurso_id')->
              references('id')->on('recursos')->
              onDelete('cascade');
           $table->string('atributo');
           $table->integer('tipo'); //1=textual; 2=numerico; 3=data; 4=hora; 5=titulo
           $table->integer('operador'); //1=menor; 2=igual; 3=maior;
           $table->string('valorTextual')->nulable();
           $table->integer('valorNumerico')->nulable();
           $table->boolean('impeditivo');
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
        Schema::dropIfExists('restricaos');
    }
}
