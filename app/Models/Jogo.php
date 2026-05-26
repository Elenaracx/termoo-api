<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'jogos';

    protected $fillable = [
        'id_jogo',
        'palavra_secreta',
        'tentativas_restantes',
        'venceu'
    ];
}