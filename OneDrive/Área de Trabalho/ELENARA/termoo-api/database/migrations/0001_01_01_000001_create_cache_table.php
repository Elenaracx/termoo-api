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
        Schema::create('cache', function (Blueprint $table) {
            // Executa esta linha
            $table->string('key')->primary();
            // Executa esta linha
            $table->mediumText('value');
            // Executa esta linha
            $table->bigInteger('expiration')->index();
        // Executa esta linha
        });

        // Define uma função
        Schema::create('cache_locks', function (Blueprint $table) {
            // Executa esta linha
            $table->string('key')->primary();
            // Executa esta linha
            $table->string('owner');
            // Executa esta linha
            $table->bigInteger('expiration')->index();
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
        Schema::dropIfExists('cache');
        // Executa esta linha
        Schema::dropIfExists('cache_locks');
    // Executa esta linha
    }
// Executa esta linha
};