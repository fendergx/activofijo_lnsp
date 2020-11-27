<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosFijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos_fijos', function (Blueprint $table) {
            $table->bigIncrements('id_af');
            $table->string('codigo_af')->nullable()->unique();
            $table->string('nombre_af');
            $table->string('marca_af');
            $table->string('modelo_af');
            $table->string('serie_af')->nullable()->unique();
            $table->date('fecha_adq_af');
            $table->decimal('valor_adq_af', 9, 2);
            $table->decimal('valor_actual_af', 9, 2);
            $table->string('descripcion_af')->nullable();
            $table->boolean('desecha_af')->default(0);
            $table->boolean('export_af')->default(0);

            //llaves foráneas

            $table->unsignedBigInteger('id_coord');
            $table->foreign('id_coord')->references('id_coord')->on('coordinaciones');

            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id_area')->on('areas');

            $table->unsignedBigInteger('id_ubicacion');
            $table->foreign('id_ubicacion')->references('id_ubicacion')->on('ubicaciones_af');

            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados_af');

            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')->references('id_color')->on('colores_af');

            $table->unsignedBigInteger('id_fuente');
            $table->foreign('id_fuente')->references('id_fuente')->on('fuentes_af');

            $table->unsignedBigInteger('persona_responsable');
            $table->foreign('persona_responsable')->references('id_usuario')->on('usuarios');

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
        Schema::dropIfExists('activos_fijos');
    }
}
