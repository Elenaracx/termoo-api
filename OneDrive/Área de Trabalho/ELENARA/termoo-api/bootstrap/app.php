// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Foundation\Application;
// Executa esta linha
use Illuminate\Foundation\Configuration\Exceptions;
// Executa esta linha
use Illuminate\Foundation\Configuration\Middleware;

// Retorna um valor
return Application::configure(basePath: dirname(__DIR__))
    // Executa esta linha
    ->withRouting(
        // Executa esta linha
        web: __DIR__.'/../routes/web.php',
        // Executa esta linha
        commands: __DIR__.'/../routes/console.php',
        // Executa esta linha
        health: '/up',
    // Executa esta linha
    )
    // Define uma função
    ->withMiddleware(function (Middleware $middleware): void {
        //
    // Executa esta linha
    })
    // Define uma função
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    // Executa esta linha
    })->create();