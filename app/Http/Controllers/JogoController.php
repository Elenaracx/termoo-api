<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JogoController extends Controller
{
    private static $jogos = [];

    private $palavraSecreta = "CARRO";

    public function iniciarJogo()
    {
        $idJogo = Str::uuid()->toString();

        self::$jogos[$idJogo] = [
            'palavra' => $this->palavraSecreta,
            'tentativas' => 6
        ];

        return response()->json([
            "idJogo" => $idJogo,
            "tamanhoPalavra" => 5,
            "tentativasMaximas" => 6
        ], 200);
    }

    public function validarTentativa(Request $request)
    {
        $idJogo = $request->input('idJogo');
        $palavra = strtoupper($request->input('palavra'));

        if (!$idJogo || !isset(self::$jogos[$idJogo])) {
            return response()->json([
                "erro" => "Jogo não encontrado"
            ], 404);
        }

        if (!$palavra || strlen($palavra) != 5) {
            return response()->json([
                "erro" => "Palavra inválida"
            ], 400);
        }

        $palavraSecreta = self::$jogos[$idJogo]['palavra'];

        $resultado = [];

        for ($i = 0; $i < 5; $i++) {

            $letra = $palavra[$i];

            if ($letra === $palavraSecreta[$i]) {
                $status = "correta";
            } elseif (str_contains($palavraSecreta, $letra)) {
                $status = "presente";
            } else {
                $status = "ausente";
            }

            $resultado[] = [
                "letra" => strtolower($letra),
                "status" => $status
            ];
        }

        return response()->json([
            "resultado" => $resultado,
            "venceu" => $palavra === $palavraSecreta,
            "tentativasRestantes" => 5,
            "palavraValida" => true
        ], 200);
    }
}