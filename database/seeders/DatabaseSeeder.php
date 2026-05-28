// Executa esta linha
<?php

// Executa esta linha
namespace Database\Seeders;

// Executa esta linha
use App\Models\User;
// Executa esta linha
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// Executa esta linha
use Illuminate\Database\Seeder;

// Define uma classe
class DatabaseSeeder extends Seeder
// Executa esta linha
{
    // Executa esta linha
    use WithoutModelEvents;

    // Executa esta linha
    /**
     // Executa esta linha
     * Seed the application's database.
     // Executa esta linha
     */
    // Define uma função
    public function run(): void
    // Executa esta linha
    {
        // User::factory(10)->create();

        // Executa esta linha
        User::factory()->create([
            // Define uma função
            'name' => 'Test User',
            // Define uma função
            'email' => 'test@example.com',
        // Executa esta linha
        ]);
    // Executa esta linha
    }
// Executa esta linha
}