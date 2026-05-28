// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Foundation\Application;
// Executa esta linha
use Illuminate\Http\Request;

// Executa esta linha
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
// Verifica uma condição
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    // Executa esta linha
    require $maintenance;
// Executa esta linha
}

// Register the Composer autoloader...
// Executa esta linha
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
// Executa esta linha
/** @var Application $app */
// Define ou atualiza uma variável
$app = require_once __DIR__.'/../bootstrap/app.php';

// Executa esta linha
$app->handleRequest(Request::capture());