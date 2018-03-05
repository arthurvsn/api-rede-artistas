<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valor_eventos', function (Blueprint $table) {
            $table->increments('idvalor_evento');
            $table->string('valor', 20);
            
            $table->integer('idevento')->unsigned();
            $table->foreign('idevento')->references('idevento')->on('eventos');
            
            $table->integer('idusuarios')->unsigned();
            $table->foreign('idusuarios')->references('idusuarios')->on('usuarios');
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
        Schema::dropIfExists('valor_eventos');
    }
}
