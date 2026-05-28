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
        Schema::create('jobs', function (Blueprint $table) {
            // Executa esta linha
            $table->id();
            // Executa esta linha
            $table->string('queue')->index();
            // Executa esta linha
            $table->longText('payload');
            // Executa esta linha
            $table->unsignedTinyInteger('attempts');
            // Executa esta linha
            $table->unsignedInteger('reserved_at')->nullable();
            // Executa esta linha
            $table->unsignedInteger('available_at');
            // Executa esta linha
            $table->unsignedInteger('created_at');
        // Executa esta linha
        });

        // Define uma função
        Schema::create('job_batches', function (Blueprint $table) {
            // Executa esta linha
            $table->string('id')->primary();
            // Executa esta linha
            $table->string('name');
            // Executa esta linha
            $table->integer('total_jobs');
            // Executa esta linha
            $table->integer('pending_jobs');
            // Executa esta linha
            $table->integer('failed_jobs');
            // Executa esta linha
            $table->longText('failed_job_ids');
            // Executa esta linha
            $table->mediumText('options')->nullable();
            // Executa esta linha
            $table->integer('cancelled_at')->nullable();
            // Executa esta linha
            $table->integer('created_at');
            // Executa esta linha
            $table->integer('finished_at')->nullable();
        // Executa esta linha
        });

        // Define uma função
        Schema::create('failed_jobs', function (Blueprint $table) {
            // Executa esta linha
            $table->id();
            // Executa esta linha
            $table->string('uuid')->unique();
            // Executa esta linha
            $table->text('connection');
            // Executa esta linha
            $table->text('queue');
            // Executa esta linha
            $table->longText('payload');
            // Executa esta linha
            $table->longText('exception');
            // Executa esta linha
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('jobs');
        // Executa esta linha
        Schema::dropIfExists('job_batches');
        // Executa esta linha
        Schema::dropIfExists('failed_jobs');
    // Executa esta linha
    }
// Executa esta linha
};