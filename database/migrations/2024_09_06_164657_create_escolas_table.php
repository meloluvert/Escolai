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
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->foreignId('endereco')->references('id')->on('enderecos')->nullable();
            $table->string('telefone', length:15);
            $table->float('media_mensalidade');
            $table->string('whatsapp', length:20);
            $table->string('instagram', length:45);
            $table->string('descricao1', length:1000);
            $table->string('descricao2', length:1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escolas');
    }
};
