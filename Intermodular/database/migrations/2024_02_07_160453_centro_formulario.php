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
        Schema::create('centro_formulario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('centro_id')->references('id')->on('centros')->onDelete('cascade');
            $table->foreign('formulario_id')->references('id')->on('formulario')->onDelete('cascade');
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
