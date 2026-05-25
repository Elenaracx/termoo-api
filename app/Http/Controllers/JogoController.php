<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoController extends Controller
{
    private $palavras;

    public function __construct()
    {
        $this->palavras = config('palavras.palavras');
    }

    public function iniciarJogo()
    {
        $palavra = $this->palavras[array_rand($this->palavras)];

        cache([
            'palavra_secreta' => mb_strtolower($palavra)
        ], now()->addMinutes(30));

        return response()->json([
            'mensagem' => 'Jogo iniciado com sucesso'
        ]);
    }

    public function validarTentativa(Request $request)
    {
        $request->validate([
            'tentativa' => 'required|string|size:5'
        ]);

        $palavraSecreta = cache('palavra_secreta');

        if (!$palavraSecreta) {
            return response()->json([
                'erro' => 'Jogo não iniciado'
            ], 400);
        }

        $tentativa = mb_strtolower($request->tentativa);

        $resultado = [];

        for ($i = 0; $i < 5; $i++) {

            if ($tentativa[$i] === $palavraSecreta[$i]) {

                $resultado[] = [
                    'letra' => $tentativa[$i],
                    'status' => 'correta'
                ];

            } elseif (str_contains($palavraSecreta, $tentativa[$i])) {

                $resultado[] = [
                    'letra' => $tentativa[$i],
                    'status' => 'existe'
                ];

            } else {

                $resultado[] = [
                    'letra' => $tentativa[$i],
                    'status' => 'errada'
                ];
            }
        }

        return response()->json([
            'tentativa' => $tentativa,
            'resultado' => $resultado,
            'venceu' => $tentativa === $palavraSecreta
        ]);
    }
}