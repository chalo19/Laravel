<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->string('Rut')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Apellido_Paterno')->nullable();
            $table->string('Apellido_Materno')->nullable();
            $table->string('Empresa')->nullable();
            $table->integer('Dias')->nullable();
            $table->integer('Monto_Diario')->nullable();
            $table->integer('Monto_Final')->nullable();
            $table->string('Fecha_Inicial_Vacaciones')->nullable();
            $table->string('Fecha_Final_Vacaciones')->nullable();
            $table->integer('Cantidad_Dias_Vacaciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
