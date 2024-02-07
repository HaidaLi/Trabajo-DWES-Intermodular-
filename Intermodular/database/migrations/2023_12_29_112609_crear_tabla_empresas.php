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
            $table->text('descripcion')->nullable();
            $table->text('notas')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('direccion')->nullable();
            $table->string('coordenadas')->nullable();
            $table->string('cif')->nullable();
            $table->string('provincia')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('horario')->nullable();
            $table->string('dias_trabajo')->nullable();
            $table->integer('puestos_disponibles')->nullable();
            $table->string('categorias')->nullable();
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
