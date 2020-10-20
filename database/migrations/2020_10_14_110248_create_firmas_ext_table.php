<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmasExtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmas_ext', function (Blueprint $table) {
            $table->bigIncrements('id_firm');
            $table->string('cargo_firm')->unique();
            $table->string('titulo_firm')->unique();
            $table->string('nombre_firm_p');
            $table->string('apellido_firm_p');

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
        Schema::dropIfExists('firmas_ext');
    }
}
