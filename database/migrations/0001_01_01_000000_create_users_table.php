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
        Schema::create('users', function (Blueprint $table) {
            // Executa esta linha
            $table->id();
            // Executa esta linha
            $table->string('name');
            // Executa esta linha
            $table->string('email')->unique();
            // Executa esta linha
            $table->timestamp('email_verified_at')->nullable();
            // Executa esta linha
            $table->string('password');
            // Executa esta linha
            $table->rememberToken();
            // Executa esta linha
            $table->timestamps();
        // Executa esta linha
        });

        // Define uma função
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            // Executa esta linha
            $table->string('email')->primary();
            // Executa esta linha
            $table->string('token');
            // Executa esta linha
            $table->timestamp('created_at')->nullable();
        // Executa esta linha
        });

        // Define uma função
        Schema::create('sessions', function (Blueprint $table) {
            // Executa esta linha
            $table->string('id')->primary();
            // Executa esta linha
            $table->foreignId('user_id')->nullable()->index();
            // Executa esta linha
            $table->string('ip_address', 45)->nullable();
            // Executa esta linha
            $table->text('user_agent')->nullable();
            // Executa esta linha
            $table->longText('payload');
            // Executa esta linha
            $table->integer('last_activity')->index();
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
        Schema::dropIfExists('users');
        // Executa esta linha
        Schema::dropIfExists('password_reset_tokens');
        // Executa esta linha
        Schema::dropIfExists('sessions');
    // Executa esta linha
    }
// Executa esta linha
};