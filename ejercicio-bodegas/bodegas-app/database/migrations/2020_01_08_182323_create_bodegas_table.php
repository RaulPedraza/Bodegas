<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono');
            $table->string('contacto');
            $table->string('añoFundacion');
            $table->string('informacion');
            $table->string('restaurante');
            $table->string('hotel');
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
        Schema::dropIfExists('bodega');
    }
}
