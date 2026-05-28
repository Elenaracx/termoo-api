// Executa esta linha
<?php

// Executa esta linha
namespace App\Models;

// Executa esta linha
use Illuminate\Database\Eloquent\Model;

// Define uma classe
class Game extends Model
// Executa esta linha
{
    // Define ou atualiza uma variável
    protected $fillable = [
        // Executa esta linha
        'game_id',
        // Executa esta linha
        'secret_word',
        // Executa esta linha
        'attempts',
        // Executa esta linha
        'won'
    // Executa esta linha
    ];

    // Define ou atualiza uma variável
    protected $hidden = [
        // Executa esta linha
        'secret_word'
    // Executa esta linha
    ];
// Executa esta linha
}