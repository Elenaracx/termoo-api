<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class JogoController extends Controller
{
    private $palavras = [
        "carro",
        "casas",
        "livro",
        "praia",
        "amigo",
        "verde",
        "porta",
        "pedra",
        "nuvem",
        "carta"
    ];

    public function iniciarJogo()
    {
        $idJogo = Str::uuid()->toString();

        $palavra = $this->palavras[array_rand($this->palavras)];

        Cache::put($idJogo, [
            "palavra" => $palavra,
            "tentativas" => 0
        ], now()->addHours(1));

        return response()->json([
            "idJogo" => $idJogo,
            "tamanhoPalavra" => 5,
            "tentativasMaximas" => 6
        ]);
    }

    public function validarTentativa(Request $request)
    {
        $idJogo = $request->idJogo;
        $palavra = strtolower($request->palavra);

        $jogo = Cache::get($idJogo);

        if (!$jogo) {
            return response()->json([
                "erro" => "Jogo não encontrado"
            ], 404);
        }

        $palavraCorreta = $jogo["palavra"];

        $resultado = [];

        for ($i = 0; $i < 5; $i++) {

            $letra = $palavra[$i];

            if ($letra == $palavraCorreta[$i]) {
                $status = "correta";
            } elseif (str_contains($palavraCorreta, $letra)) {
                $status = "presente";
            } else {
                $status = "ausente";
            }

            $resultado[] = [
                "letra" => $letra,
                "status" => $status
            ];
        }

        $jogo["tentativas"]++;

        Cache::put($idJogo, $jogo, now()->addHours(1));

        return response()->json([
            "resultado" => $resultado,
            "venceu" => $palavra === $palavraCorreta,
            "tentativasRestantes" => 6 - $jogo["tentativas"],
            "palavraValida" => true
        ]);
    }
}