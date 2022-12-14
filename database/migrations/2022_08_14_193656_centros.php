<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('descripcion');
            $table->String('ubicacion');
            $table->String('comollegar');
            $table->String('recomendacion');
            $table->String('horario');
            $table->String('restriccion');
            $table->String('costo');
            $table->String('video');
            $table->String('imagen');
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
        Schema::dropIfExists('centros');
    }
};
