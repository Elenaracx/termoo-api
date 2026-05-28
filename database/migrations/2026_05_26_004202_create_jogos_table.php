// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Database\Migrations\Migration;
// Executa esta linha
use Illuminate\Database\Schema\Blueprint;
// Executa esta linha
use Illuminate\Support\Facades\Schema;

// Define uma classe
return new class extends Migration
// Executa esta linha
{
    // Executa esta linha
    /**
     // Executa esta linha
     * Run the migrations.
     // Executa esta linha
     */
    // Define uma função
    public function up(): void
    // Executa esta linha
    {
        // Define uma função
        Schema::create('jogos', function (Blueprint $table) {
            // Executa esta linha
            $table->id();

            // Executa esta linha
            $table->uuid('id_jogo')->unique();

            // Executa esta linha
            $table->string('palavra_secreta', 5);

            // Executa esta linha
            $table->integer('tentativas_restantes')->default(6);

            // Executa esta linha
            $table->boolean('venceu')->default(false);

            // Executa esta linha
            $table->timestamps();
        // Executa esta linha
        });
    // Executa esta linha
    }

    // Executa esta linha
    /**
     // Executa esta linha
     * Reverse the migrations.
     // Executa esta linha
     */
    // Define uma função
    public function down(): void
    // Executa esta linha
    {
        // Executa esta linha
        Schema::dropIfExists('jogos');
    // Executa esta linha
    }
// Executa esta linha
};