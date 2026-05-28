// Executa esta linha
<?php

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application Name
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This value is the name of your application, which will be used when the
    // Executa esta linha
    | framework needs to place the application's name in a notification or
    // Executa esta linha
    | other UI elements where an application name needs to be displayed.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'name' => env('APP_NAME', 'Laravel'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application Environment
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This value determines the "environment" your application is currently
    // Executa esta linha
    | running in. This may determine how you prefer to configure various
    // Executa esta linha
    | services the application utilizes. Set this in your ".env" file.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'env' => env('APP_ENV', 'production'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application Debug Mode
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When your application is in debug mode, detailed error messages with
    // Executa esta linha
    | stack traces will be shown on every error that occurs within your
    // Executa esta linha
    | application. If disabled, a simple generic error page is shown.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'debug' => (bool) env('APP_DEBUG', false),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application URL
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This URL is used by the console to properly generate URLs when using
    // Executa esta linha
    | the Artisan command line tool. You should set this to the root of
    // Executa esta linha
    | the application so that it's available within Artisan commands.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'url' => env('APP_URL', 'http://localhost'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application Timezone
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Here you may specify the default timezone for your application, which
    // Executa esta linha
    | will be used by the PHP date and date-time functions. The timezone
    // Executa um loop
    | is set to "UTC" by default as it is suitable for most use cases.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'timezone' => 'UTC',

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Application Locale Configuration
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | The application locale determines the default locale that will be used
    // Executa esta linha
    | by Laravel's translation / localization methods. This option can be
    // Executa um loop
    | set to any locale for which you plan to have translation strings.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'locale' => env('APP_LOCALE', 'en'),

    // Define uma função
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    // Define uma função
    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Encryption Key
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This key is utilized by Laravel's encryption services and should be set
    // Executa esta linha
    | to a random, 32 character string to ensure that all encrypted values
    // Executa esta linha
    | are secure. You should do this prior to deploying the application.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'cipher' => 'AES-256-CBC',

    // Define uma função
    'key' => env('APP_KEY'),

    // Define uma função
    'previous_keys' => [
        // Executa esta linha
        ...array_filter(
            // Executa esta linha
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        // Executa esta linha
        ),
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Maintenance Mode Driver
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | These configuration options determine the driver used to determine and
    // Executa esta linha
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    // Executa esta linha
    | allow maintenance mode to be controlled across multiple machines.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported drivers: "file", "cache"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'maintenance' => [
        // Define uma função
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        // Define uma função
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    // Executa esta linha
    ],

// Executa esta linha
];