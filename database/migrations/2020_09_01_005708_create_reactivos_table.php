<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactivos', function (Blueprint $table) {
            $table->bigIncrements('id_reactivo');
            $table->string('nombre_reactivo')->unique();
            //limitado a $999,999.99
            $table->double('precio_reactivo', 6, 2);
            $table->string('presentacion');
            $table->bigInteger('unidad_base');
            $table->string('unidad_medida');
            //$table->bigInteger('cantidad_existente');
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
        Schema::dropIfExists('reactivos');
    }
}
