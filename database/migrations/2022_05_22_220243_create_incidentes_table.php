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
        Schema::create('incidentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuenta_id');
            $table->unsignedBigInteger('colaborador_id');
            $table->unsignedBigInteger('tecnico_id');
            $table->string('resumen');
            $table->text('descripcion');
            $table->string('estado');
            $table->char('estaSolucionado', 1);
            $table->timestamp('fechaSolucion');
            $table->text('solucion');
            $table->text('observacion');
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->foreign('colaborador_id')->references('id')->on('colaboradores');
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');
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
        Schema::dropIfExists('incidentes');
    }
};
