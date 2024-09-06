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
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->integer('motorista_id')->references('id')->on('motoristas')->nullable();
            $table->integer('escola_id')->references('id')->on('escolas')->nullable();
            $table->string('titulo');
            $table->string('descricao', length: 500)->nullable();
            $table->integer('alcance');
            $table->dateTime('data_fim');
            $table->dateTime('data_inicio')->nullable();
            $table->integer('visualizacoes')->nullable();
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
