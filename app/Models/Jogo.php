// Executa esta linha
<?php

// Executa esta linha
namespace App\Models;

// Executa esta linha
use Illuminate\Database\Eloquent\Model;

// Define uma classe
class Jogo extends Model
// Executa esta linha
{
    // Define ou atualiza uma variável
    protected $table = 'jogos';

    // Define ou atualiza uma variável
    protected $fillable = [
        // Executa esta linha
        'id_jogo',
        // Executa esta linha
        'palavra_secreta',
        // Executa esta linha
        'tentativas_restantes',
        // Executa esta linha
        'venceu'
    // Executa esta linha
    ];
// Executa esta linha
}