// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Support\Facades\Route;
// Executa esta linha
use App\Http\Controllers\JogoController;

// Define uma função
Route::options('/{any}', function () {
    // Retorna um valor
    return response()->json([], 200);
// Executa esta linha
})->where('any', '.*');

// Executa esta linha
Route::post('/iniciar-jogo', [JogoController::class, 'iniciarJogo']);

// Executa esta linha
Route::post('/validar-tentativa', [JogoController::class, 'validarTentativa']);