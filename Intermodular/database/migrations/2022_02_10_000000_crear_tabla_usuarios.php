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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('dni')->primary();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('nombre');
            // $table->unsignedBigInteger('empresa_id');
            // $table->unsignedInteger('centro_id');
            // $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            // $table->foreign('centro_id')->references('id')->on('centros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
