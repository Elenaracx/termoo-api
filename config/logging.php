// Executa esta linha
<?php

// Executa esta linha
use Monolog\Handler\NullHandler;
// Executa esta linha
use Monolog\Handler\StreamHandler;
// Executa esta linha
use Monolog\Handler\SyslogUdpHandler;
// Executa esta linha
use Monolog\Processor\PsrLogMessageProcessor;

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Log Channel
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option defines the default log channel that is utilized to write
    // Executa esta linha
    | messages to your logs. The value provided here should match one of
    // Executa esta linha
    | the channels present in the list of "channels" configured below.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('LOG_CHANNEL', 'stack'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Deprecations Log Channel
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option controls the log channel that should be used to log warnings
    // Executa esta linha
    | regarding deprecated PHP and library features. This allows you to get
    // Executa um loop
    | your application ready for upcoming major versions of dependencies.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'deprecations' => [
        // Define uma função
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        // Define uma função
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Log Channels
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Here you may configure the log channels for your application. Laravel
    // Executa esta linha
    | utilizes the Monolog PHP logging library, which includes a variety
    // Executa esta linha
    | of powerful log handlers and formatters that you're free to use.
    // Executa esta linha
    |
    // Executa esta linha
    | Available drivers: "single", "daily", "slack", "syslog",
    // Executa esta linha
    |                    "errorlog", "monolog", "custom", "stack"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'channels' => [

        // Define uma função
        'stack' => [
            // Define uma função
            'driver' => 'stack',
            // Define uma função
            'channels' => explode(',', (string) env('LOG_STACK', 'single')),
            // Define uma função
            'ignore_exceptions' => false,
        // Executa esta linha
        ],

        // Define uma função
        'single' => [
            // Define uma função
            'driver' => 'single',
            // Define uma função
            'path' => storage_path('logs/laravel.log'),
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'replace_placeholders' => true,
        // Executa esta linha
        ],

        // Define uma função
        'daily' => [
            // Define uma função
            'driver' => 'daily',
            // Define uma função
            'path' => storage_path('logs/laravel.log'),
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'days' => env('LOG_DAILY_DAYS', 14),
            // Define uma função
            'replace_placeholders' => true,
        // Executa esta linha
        ],

        // Define uma função
        'slack' => [
            // Define uma função
            'driver' => 'slack',
            // Define uma função
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            // Define uma função
            'username' => env('LOG_SLACK_USERNAME', env('APP_NAME', 'Laravel')),
            // Define uma função
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            // Define uma função
            'level' => env('LOG_LEVEL', 'critical'),
            // Define uma função
            'replace_placeholders' => true,
        // Executa esta linha
        ],

        // Define uma função
        'papertrail' => [
            // Define uma função
            'driver' => 'monolog',
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            // Define uma função
            'handler_with' => [
                // Define uma função
                'host' => env('PAPERTRAIL_URL'),
                // Define uma função
                'port' => env('PAPERTRAIL_PORT'),
                // Define uma função
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            // Executa esta linha
            ],
            // Define uma função
            'processors' => [PsrLogMessageProcessor::class],
        // Executa esta linha
        ],

        // Define uma função
        'stderr' => [
            // Define uma função
            'driver' => 'monolog',
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'handler' => StreamHandler::class,
            // Define uma função
            'handler_with' => [
                // Define uma função
                'stream' => 'php://stderr',
            // Executa esta linha
            ],
            // Define uma função
            'formatter' => env('LOG_STDERR_FORMATTER'),
            // Define uma função
            'processors' => [PsrLogMessageProcessor::class],
        // Executa esta linha
        ],

        // Define uma função
        'syslog' => [
            // Define uma função
            'driver' => 'syslog',
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            // Define uma função
            'replace_placeholders' => true,
        // Executa esta linha
        ],

        // Define uma função
        'errorlog' => [
            // Define uma função
            'driver' => 'errorlog',
            // Define uma função
            'level' => env('LOG_LEVEL', 'debug'),
            // Define uma função
            'replace_placeholders' => true,
        // Executa esta linha
        ],

        // Define uma função
        'null' => [
            // Define uma função
            'driver' => 'monolog',
            // Define uma função
            'handler' => NullHandler::class,
        // Executa esta linha
        ],

        // Define uma função
        'emergency' => [
            // Define uma função
            'path' => storage_path('logs/laravel.log'),
        // Executa esta linha
        ],

    // Executa esta linha
    ],

// Executa esta linha
];