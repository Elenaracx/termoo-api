// Executa esta linha
<?php

// Executa esta linha
namespace Database\Factories;

// Executa esta linha
use App\Models\User;
// Executa esta linha
use Illuminate\Database\Eloquent\Factories\Factory;
// Executa esta linha
use Illuminate\Support\Facades\Hash;
// Executa esta linha
use Illuminate\Support\Str;

// Executa esta linha
/**
 // Executa esta linha
 * @extends Factory<User>
 // Executa esta linha
 */
// Define uma classe
class UserFactory extends Factory
// Executa esta linha
{
    // Executa esta linha
    /**
     // Executa esta linha
     * The current password being used by the factory.
     // Executa esta linha
     */
    // Executa esta linha
    protected static ?string $password;

    // Executa esta linha
    /**
     // Executa esta linha
     * Define the model's default state.
     // Executa esta linha
     *
     // Retorna um valor
     * @return array<string, mixed>
     // Executa esta linha
     */
    // Define uma função
    public function definition(): array
    // Executa esta linha
    {
        // Retorna um valor
        return [
            // Define uma função
            'name' => fake()->name(),
            // Define uma função
            'email' => fake()->unique()->safeEmail(),
            // Define uma função
            'email_verified_at' => now(),
            // Define uma função
            'password' => static::$password ??= Hash::make('password'),
            // Define uma função
            'remember_token' => Str::random(10),
        // Executa esta linha
        ];
    // Executa esta linha
    }

    // Executa esta linha
    /**
     // Executa esta linha
     * Indicate that the model's email address should be unverified.
     // Executa esta linha
     */
    // Define uma função
    public function unverified(): static
    // Executa esta linha
    {
        // Define uma função
        return $this->state(fn (array $attributes) => [
            // Define uma função
            'email_verified_at' => null,
        // Executa esta linha
        ]);
    // Executa esta linha
    }
// Executa esta linha
}