<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesAfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_af', function (Blueprint $table) {
            $table->bigIncrements('id_solicitud');
            $table->date('fecha_solicitud');

            //llaves foráneas
            $table->unsignedBigInteger('id_estado_sol');
            $table->foreign('id_estado_sol')->references('id_estado_sol')->on('estado_solicitudes_af');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');

            //creado y actualizado a
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
        Schema::dropIfExists('solicitudes_af');
    }
}
