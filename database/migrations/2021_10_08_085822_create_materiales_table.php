<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partida');
            $table->string('numero_orden');
            $table->string('lugar_entrega');
            $table->string('N_partida');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->string('grupos');
            $table->string('partes');
            $table->string('descripcion');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->integer('precio');
            $table->integer('importe');
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
        Schema::dropIfExists('materiales');
    }
}
