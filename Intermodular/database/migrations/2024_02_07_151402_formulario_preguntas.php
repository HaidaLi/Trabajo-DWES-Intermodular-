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
        Schema::create('formulario_preguntas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('formulario_id')->references('id')->on('formulario')->onDelete('cascade');
            $table->foreign('preguntas_id')->references('id')->on('preguntas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario_preguntas');
    }
};
