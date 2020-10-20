<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClientesPreparaduriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('clientes_preparaduria', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dep')->nullable();
            $table->foreign('id_dep')->references('id_dep')->on('departamentos');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('clientes_preparaduria', function (Blueprint $table) {
            $table->dropColumn('id_dep');
        });*/
    }
}
