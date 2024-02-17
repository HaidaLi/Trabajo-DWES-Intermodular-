<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->string('telefono')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('nota_alumno')->nullable();
            $table->integer('nota_profesor')->nullable();
            $table->string('correo')->nullable();
            $table->string('password')->nullable();
            $table->string('calle')->nullable();
            $table->string('coordenadas')->nullable();
            $table->string('cif')->nullable();
            $table->string('provincia')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('horario')->nullable();
            $table->string('turno')->nullable();
            $table->integer('vacantes')->nullable();
            $table->string('categorias')->nullable();
            $table->string('entrada')->nullable();
            $table->string('salida')->nullable();
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
