<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//para HASH
use Illuminate\Support\Facades\Hash;

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
            $table->bigIncrements('id_usuario');
            $table->string('nombre_usuario')->unique();
            $table->string('password',1024);
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cargo')->nullable();
            //llaves foráneas
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->unsignedBigInteger('id_coord')->nullable();
            $table->foreign('id_coord')->references('id_coord')->on('coordinaciones');
            $table->unsignedBigInteger('id_area')->nullable();
            $table->foreign('id_area')->references('id_area')->on('areas');
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
        Schema::dropIfExists('usuarios');
    }
}
