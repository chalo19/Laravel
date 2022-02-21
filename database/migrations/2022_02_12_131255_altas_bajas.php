<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltasBajas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altas_bajas', function (Blueprint $table) {
            $table->string('Nombre')->nullable();
            $table->string('Rut')->nullable();
            $table->string('Empresa')->nullable();
            $table->string('Cargo')->nullable();
            $table->string('Fecha_Ingreso')->nullable();
            $table->string('Alta/Baja')->nullable();
            $table->integer('Cant_Dias_Carga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altas_bajas');
    }
}
