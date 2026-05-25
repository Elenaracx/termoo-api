<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogoController;

Route::options('/{any}', function () {
    return response()->json([], 200);
})->where('any', '.*');

Route::post('/iniciar-jogo', [JogoController::class, 'iniciarJogo']);

Route::post('/validar-tentativa', [JogoController::class, 'validarTentativa']);