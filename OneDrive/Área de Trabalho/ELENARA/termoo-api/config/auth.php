// Executa esta linha
<?php

// Executa esta linha
use App\Models\User;

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Authentication Defaults
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option defines the default authentication "guard" and password
    // Executa um loop
    | reset "broker" for your application. You may change these values
    // Executa um loop
    | as required, but they're a perfect start for most applications.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'defaults' => [
        // Define uma função
        'guard' => env('AUTH_GUARD', 'web'),
        // Define uma função
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Authentication Guards
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Next, you may define every authentication guard for your application.
    // Executa um loop
    | Of course, a great default configuration has been defined for you
    // Executa esta linha
    | which utilizes session storage plus the Eloquent user provider.
    // Executa esta linha
    |
    // Executa esta linha
    | All authentication guards have a user provider, which defines how the
    // Executa esta linha
    | users are actually retrieved out of your database or other storage
    // Executa esta linha
    | system used by the application. Typically, Eloquent is utilized.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "session"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'guards' => [
        // Define uma função
        'web' => [
            // Define uma função
            'driver' => 'session',
            // Define uma função
            'provider' => 'users',
        // Executa esta linha
        ],
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | User Providers
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | All authentication guards have a user provider, which defines how the
    // Executa esta linha
    | users are actually retrieved out of your database or other storage
    // Executa esta linha
    | system used by the application. Typically, Eloquent is utilized.
    // Executa esta linha
    |
    // Executa esta linha
    | If you have multiple user tables or models you may configure multiple
    // Executa esta linha
    | providers to represent the model / table. These providers may then
    // Executa esta linha
    | be assigned to any extra authentication guards you have defined.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "database", "eloquent"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'providers' => [
        // Define uma função
        'users' => [
            // Define uma função
            'driver' => 'eloquent',
            // Define uma função
            'model' => env('AUTH_MODEL', User::class),
        // Executa esta linha
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Resetting Passwords
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | These configuration options specify the behavior of Laravel's password
    // Executa um loop
    | reset functionality, including the table utilized for token storage
    // Executa esta linha
    | and the user provider that is invoked to actually retrieve users.
    // Executa esta linha
    |
    // Executa esta linha
    | The expiry time is the number of minutes that each reset token will be
    // Executa esta linha
    | considered valid. This security feature keeps tokens short-lived so
    // Executa esta linha
    | they have less time to be guessed. You may change this as needed.
    // Executa esta linha
    |
    // Executa esta linha
    | The throttle setting is the number of seconds a user must wait before
    // Executa esta linha
    | generating more password reset tokens. This prevents the user from
    // Executa esta linha
    | quickly generating a very large amount of password reset tokens.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'passwords' => [
        // Define uma função
        'users' => [
            // Define uma função
            'provider' => 'users',
            // Define uma função
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            // Define uma função
            'expire' => 60,
            // Define uma função
            'throttle' => 60,
        // Executa esta linha
        ],
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Password Confirmation Timeout
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may define the number of seconds before a password confirmation
    // Executa esta linha
    | window expires and users are asked to re-enter their password via the
    // Executa um loop
    | confirmation screen. By default, the timeout lasts for three hours.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

// Executa esta linha
];