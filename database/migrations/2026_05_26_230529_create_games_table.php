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
        Schema::create('games', function (Blueprint $table) {
            // Executa esta linha
            $table->id();

            // Executa esta linha
            $table->string('game_id')->unique();

            // Executa esta linha
            $table->string('secret_word');

            // Executa esta linha
            $table->integer('attempts')->default(0);

            // Executa esta linha
            $table->boolean('won')->default(false);

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
        Schema::dropIfExists('games');
    // Executa esta linha
    }
// Executa esta linha
};