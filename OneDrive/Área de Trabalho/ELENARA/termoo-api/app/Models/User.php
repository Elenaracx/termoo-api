// Executa esta linha
<?php

// Executa esta linha
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// Executa esta linha
use Database\Factories\UserFactory;
// Executa esta linha
use Illuminate\Database\Eloquent\Attributes\Fillable;
// Executa esta linha
use Illuminate\Database\Eloquent\Attributes\Hidden;
// Executa esta linha
use Illuminate\Database\Eloquent\Factories\HasFactory;
// Executa esta linha
use Illuminate\Foundation\Auth\User as Authenticatable;
// Executa esta linha
use Illuminate\Notifications\Notifiable;

// Executa esta linha
#[Fillable(['name', 'email', 'password'])]
// Executa esta linha
#[Hidden(['password', 'remember_token'])]
// Define uma classe
class User extends Authenticatable
// Executa esta linha
{
    // Executa esta linha
    /** @use HasFactory<UserFactory> */
    // Executa esta linha
    use HasFactory, Notifiable;

    // Executa esta linha
    /**
     // Executa esta linha
     * Get the attributes that should be cast.
     // Executa esta linha
     *
     // Retorna um valor
     * @return array<string, string>
     // Executa esta linha
     */
    // Define uma função
    protected function casts(): array
    // Executa esta linha
    {
        // Retorna um valor
        return [
            // Define uma função
            'email_verified_at' => 'datetime',
            // Define uma função
            'password' => 'hashed',
        // Executa esta linha
        ];
    // Executa esta linha
    }
// Executa esta linha
}