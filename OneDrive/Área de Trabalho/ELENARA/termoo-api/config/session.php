// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Support\Str;

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Session Driver
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option determines the default session driver that is utilized for
    // Executa esta linha
    | incoming requests. Laravel supports a variety of storage options to
    // Executa esta linha
    | persist session data. Database storage is a great default choice.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "file", "cookie", "database", "memcached",
    // Executa esta linha
    |            "redis", "dynamodb", "array"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'driver' => env('SESSION_DRIVER', 'database'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Lifetime
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may specify the number of minutes that you wish the session
    // Executa esta linha
    | to be allowed to remain idle before it expires. If you want them
    // Executa esta linha
    | to expire immediately when the browser is closed then you may
    // Executa esta linha
    | indicate that via the expire_on_close configuration option.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    // Define uma função
    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Encryption
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option allows you to easily specify that all of your session data
    // Executa esta linha
    | should be encrypted before it's stored. All encryption is performed
    // Executa esta linha
    | automatically by Laravel and you may use the session like normal.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'encrypt' => env('SESSION_ENCRYPT', false),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session File Location
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When utilizing the "file" session driver, the session files are placed
    // Executa esta linha
    | on disk. The default storage location is defined here; however, you
    // Executa esta linha
    | are free to provide another location where they should be stored.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'files' => storage_path('framework/sessions'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Database Connection
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When using the "database" or "redis" session drivers, you may specify a
    // Executa esta linha
    | connection that should be used to manage these sessions. This should
    // Executa esta linha
    | correspond to a connection in your database configuration options.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'connection' => env('SESSION_CONNECTION'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Database Table
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When using the "database" session driver, you may specify the table to
    // Executa esta linha
    | be used to store sessions. Of course, a sensible default is defined
    // Executa um loop
    | for you; however, you're welcome to change this to another table.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'table' => env('SESSION_TABLE', 'sessions'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Cache Store
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When using one of the framework's cache driven session backends, you may
    // Executa esta linha
    | define the cache store which should be used to store the session data
    // Executa esta linha
    | between requests. This must match one of your defined cache stores.
    // Executa esta linha
    |
    // Executa esta linha
    | Affects: "dynamodb", "memcached", "redis"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'store' => env('SESSION_STORE'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Sweeping Lottery
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Some session drivers must manually sweep their storage location to get
    // Importa dependências
    | rid of old sessions from storage. Here are the chances that it will
    // Executa esta linha
    | happen on a given request. By default, the odds are 2 out of 100.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'lottery' => [2, 100],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Cookie Name
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may change the name of the session cookie that is created by
    // Executa esta linha
    | the framework. Typically, you should not need to change this value
    // Executa esta linha
    | since doing so does not grant a meaningful security improvement.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'cookie' => env(
        // Executa esta linha
        'SESSION_COOKIE',
        // Executa esta linha
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    // Executa esta linha
    ),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Cookie Path
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | The session cookie path determines the path for which the cookie will
    // Executa esta linha
    | be regarded as available. Typically, this will be the root path of
    // Executa esta linha
    | your application, but you're free to change this when necessary.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'path' => env('SESSION_PATH', '/'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Cookie Domain
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This value determines the domain and subdomains the session cookie is
    // Executa esta linha
    | available to. By default, the cookie will be available to the root
    // Executa esta linha
    | domain without subdomains. Typically, this shouldn't be changed.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'domain' => env('SESSION_DOMAIN'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | HTTPS Only Cookies
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | By setting this option to true, session cookies will only be sent back
    // Verifica uma condição
    | to the server if the browser has a HTTPS connection. This will keep
    // Importa dependências
    | the cookie from being sent to you when it can't be done securely.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'secure' => env('SESSION_SECURE_COOKIE'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | HTTP Access Only
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Importa dependências
    | Setting this value to true will prevent JavaScript from accessing the
    // Executa esta linha
    | value of the cookie and the cookie will only be accessible through
    // Executa esta linha
    | the HTTP protocol. It's unlikely you should disable this option.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'http_only' => env('SESSION_HTTP_ONLY', true),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Same-Site Cookies
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option determines how your cookies behave when cross-site requests
    // Executa esta linha
    | take place, and can be used to mitigate CSRF attacks. By default, we
    // Executa esta linha
    | will set this value to "lax" to permit secure cross-site requests.
    // Executa esta linha
    |
    // Executa esta linha
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "lax", "strict", "none", null
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Partitioned Cookies
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Setting this value to true will tie the cookie to the top-level site for
    // Executa esta linha
    | a cross-site context. Partitioned cookies are accepted by the browser
    // Executa esta linha
    | when flagged "secure" and the Same-Site attribute is set to "none".
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Session Serialization
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | This value controls the serialization strategy for session data, which
    // Executa esta linha
    | is JSON by default. Setting this to "php" allows the storage of PHP
    // Executa esta linha
    | objects in the session but can make an application vulnerable to
    // Verifica uma condição
    | "gadget chain" serialization attacks if the APP_KEY is leaked.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported: "json", "php"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'serialization' => 'json',

// Executa esta linha
];