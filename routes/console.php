// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Foundation\Inspiring;
// Executa esta linha
use Illuminate\Support\Facades\Artisan;

// Define uma função
Artisan::command('inspire', function () {
    // Executa esta linha
    $this->comment(Inspiring::quote());
// Executa esta linha
})->purpose('Display an inspiring quote');