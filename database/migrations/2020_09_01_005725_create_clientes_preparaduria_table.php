<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesPreparaduriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_preparaduria', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('nombre_cliente')->unique();
            $table->unsignedBigInteger('id_dep');
            $table->foreign('id_dep')->references('id_dep')->on('departamentos');
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
        Schema::dropIfExists('clientes_preparaduria');
    }
}
