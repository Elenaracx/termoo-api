<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function iniciarJogo()
    {
        return response()->json([
            'palavra' => 'CASAS',
            'tentativas' => 6,
            'tamanho' => 5
        ]);
    }

    public function validarTentativa(Request $request)
    {
        return response()->json([
            'resultado' => [
                'correta',
                'errada',
                'posicao',
                'errada',
                'correta'
            ]
        ]);
    }
}