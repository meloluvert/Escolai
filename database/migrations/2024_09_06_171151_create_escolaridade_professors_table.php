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
        Schema::create('escolaridade_professors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->references('id')->on('escolas')->nullable();
            $table->foreignId('escolaridade_id')->references('id')->on('escolaridades')->nullable();
            $table->float('porcentagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escolaridade_professors');
    }
};
