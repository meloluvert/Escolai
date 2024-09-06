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
        Schema::create('escola_etapa_ensinos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->references('id')->on('escolas')->nullable();
            $table->foreignId('etapa_ensino_id')->references('id')->on('etapa_ensinos')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escola_etapa_ensinos');
    }
};
