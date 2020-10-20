<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_reportes', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_rep');
            $table->string('nombre_tipo_rep')->unique();
            $table->string('descrip_tipo_rep')->nullable();
            $table->boolean('puede_sol')->default(0);

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
        Schema::dropIfExists('tipo_reportes');
    }
}
