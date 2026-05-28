// Executa esta linha
<?php

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Mailer
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option controls the default mailer that is used to send all email
    // Executa esta linha
    | messages unless another mailer is explicitly specified when sending
    // Executa esta linha
    | the message. All additional mailers can be configured within the
    // Executa esta linha
    | "mailers" array. Examples of each type of mailer are provided.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('MAIL_MAILER', 'log'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Mailer Configurations
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may configure all of the mailers used by your application plus
    // Executa esta linha
    | their respective settings. Several examples have been configured for
    // Executa esta linha
    | you and you are free to add your own as your application requires.
    // Executa esta linha
    |
    // Executa esta linha
    | Laravel supports a variety of mail "transport" drivers that can be used
    // Executa esta linha
    | when delivering an email. You may specify which one you're using for
    // Verifica uma condição
    | your mailers below. You may also add additional mailers if needed.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    // Executa esta linha
    |            "postmark", "resend", "log", "array",
    // Executa esta linha
    |            "failover", "roundrobin"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'mailers' => [

        // Define uma função
        'smtp' => [
            // Define uma função
            'transport' => 'smtp',
            // Define uma função
            'scheme' => env('MAIL_SCHEME'),
            // Define uma função
            'url' => env('MAIL_URL'),
            // Define uma função
            'host' => env('MAIL_HOST', '127.0.0.1'),
            // Define uma função
            'port' => env('MAIL_PORT', 2525),
            // Define uma função
            'username' => env('MAIL_USERNAME'),
            // Define uma função
            'password' => env('MAIL_PASSWORD'),
            // Define uma função
            'timeout' => null,
            // Define uma função
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        // Executa esta linha
        ],

        // Define uma função
        'ses' => [
            // Define uma função
            'transport' => 'ses',
        // Executa esta linha
        ],

        // Define uma função
        'postmark' => [
            // Define uma função
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        // Executa esta linha
        ],

        // Define uma função
        'resend' => [
            // Define uma função
            'transport' => 'resend',
        // Executa esta linha
        ],

        // Define uma função
        'sendmail' => [
            // Define uma função
            'transport' => 'sendmail',
            // Define uma função
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        // Executa esta linha
        ],

        // Define uma função
        'log' => [
            // Define uma função
            'transport' => 'log',
            // Define uma função
            'channel' => env('MAIL_LOG_CHANNEL'),
        // Executa esta linha
        ],

        // Define uma função
        'array' => [
            // Define uma função
            'transport' => 'array',
        // Executa esta linha
        ],

        // Define uma função
        'failover' => [
            // Define uma função
            'transport' => 'failover',
            // Define uma função
            'mailers' => [
                // Executa esta linha
                'smtp',
                // Executa esta linha
                'log',
            // Executa esta linha
            ],
            // Define uma função
            'retry_after' => 60,
        // Executa esta linha
        ],

        // Define uma função
        'roundrobin' => [
            // Define uma função
            'transport' => 'roundrobin',
            // Define uma função
            'mailers' => [
                // Executa esta linha
                'ses',
                // Executa esta linha
                'postmark',
            // Executa esta linha
            ],
            // Define uma função
            'retry_after' => 60,
        // Executa esta linha
        ],

    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Global "From" Address
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | You may wish for all emails sent by your application to be sent from
    // Executa esta linha
    | the same address. Here you may specify a name and address that is
    // Executa um loop
    | used globally for all emails that are sent by your application.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'from' => [
        // Define uma função
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        // Define uma função
        'name' => env('MAIL_FROM_NAME', env('APP_NAME', 'Laravel')),
    // Executa esta linha
    ],

// Executa esta linha
];