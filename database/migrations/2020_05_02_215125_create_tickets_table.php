<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->DateTime('fecha_ingreso');
            $table->integer('valor');
            $table->UnsignedInteger('ingreso_id');
            $table->foreign('ingreso_id')->references('id')->on('ingreso_vehiculos')->onDelete('cascade');
             $table->UnsignedInteger('tipo_vehiculo');
            $table->foreign('tipo_vehiculo')->references('tipo_vehiculo_id')->on('tipo_vehiculos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
