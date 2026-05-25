<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogoController;

Route::post('/start', [JogoController::class, 'iniciarJogo']);

Route::post('/guess', [JogoController::class, 'validarTentativa']);