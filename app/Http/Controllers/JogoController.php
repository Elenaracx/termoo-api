<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JogoController extends Controller
{
    private $palavraSecreta = "CARRO";

    public function iniciarJogo()
    {
        return response()->json([
            "idJogo" => Str::uuid()->toString(),
            "tamanhoPalavra" => 5,
            "tentativasMaximas" => 6
        ]);
    }

    public function validarTentativa(Request $request)
    {
        $palavra = strtoupper($request->input('palavra'));

        if (!$palavra || strlen($palavra) != 5) {
            return response()->json([
                "erro" => "Palavra inválida"
            ], 400);
        }

        $resultado = [];

        for ($i = 0; $i < 5; $i++) {

            $letra = $palavra[$i];

            if ($letra == $this->palavraSecreta[$i]) {
                $status = "correta";
            } elseif (str_contains($this->palavraSecreta, $letra)) {
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
            "venceu" => $palavra === $this->palavraSecreta,
            "tentativasRestantes" => 5,
            "palavraValida" => true
        ]);
    }
}