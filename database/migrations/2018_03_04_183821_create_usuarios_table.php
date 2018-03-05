<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idusuarios');
            $table->string('nome', 100);
            $table->string('email')->unique();
            $table->string('senha');
            $table->integer('id_tipo_usuarios')->unsigned();
            $table->foreign('idtipo_usuarios')->references('idtipo_usuarios')->on('tipo_usuarios');
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
        Schema::dropIfExists('usuarios');
    }
}
