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
        Schema::table('reseñas', function (Blueprint $table) {

        $table->unsignedBigInteger('formulario_preguntas_id');
        $table->foreign('formulario_preguntas_id')->references('id')->on('formulario_preguntas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
