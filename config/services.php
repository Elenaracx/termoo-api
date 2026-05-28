// Executa esta linha
<?php

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Third Party Services
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | This file is for storing the credentials for third party services such
    // Executa esta linha
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    // Executa um loop
    | location for this type of information, allowing packages to have
    // Executa esta linha
    | a conventional file to locate the various service credentials.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'postmark' => [
        // Define uma função
        'key' => env('POSTMARK_API_KEY'),
    // Executa esta linha
    ],

    // Define uma função
    'resend' => [
        // Define uma função
        'key' => env('RESEND_API_KEY'),
    // Executa esta linha
    ],

    // Define uma função
    'ses' => [
        // Define uma função
        'key' => env('AWS_ACCESS_KEY_ID'),
        // Define uma função
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        // Define uma função
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    // Executa esta linha
    ],

    // Define uma função
    'slack' => [
        // Define uma função
        'notifications' => [
            // Define uma função
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            // Define uma função
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        // Executa esta linha
        ],
    // Executa esta linha
    ],

// Executa esta linha
];