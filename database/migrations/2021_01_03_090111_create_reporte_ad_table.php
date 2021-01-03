<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_ad', function (Blueprint $table) {
            $table->bigIncrements('id_reporte_ad');
            $table->unsignedBigInteger('id_tipo_rep');
            $table->foreign('id_tipo_rep')->references('id_tipo_rep')->on('tipo_reportes');
            $table->unsignedBigInteger('id_coord_entrega');
            $table->foreign('id_coord_entrega')->references('id_coord')->on('coordinaciones');
            $table->unsignedBigInteger('id_area_entrega');
            $table->foreign('id_area_entrega')->references('id_area')->on('areas');
            $table->integer('id_coord_recibe');
            $table->integer('id_area_recibe');
            $table->date('fecha');
            $table->unsignedBigInteger('id_clase_mov');
            $table->foreign('id_clase_mov')->references('id_clase_mov')->on('clase_movimientos');
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
        Schema::dropIfExists('reporte_ad');
    }
}
