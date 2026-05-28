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
    | Default Cache Store
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This option controls the default cache store that will be used by the
    // Verifica uma condição
    | framework. This connection is utilized if another isn't explicitly
    // Executa esta linha
    | specified when running a cache operation inside the application.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('CACHE_STORE', 'file'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Cache Stores
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Here you may define all of the cache "stores" for your application as
    // Executa um loop
    | well as their drivers. You may even define multiple stores for the
    // Executa esta linha
    | same cache driver to group types of items stored in your caches.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported drivers: "array", "database", "file", "memcached",
    // Executa esta linha
    |                    "redis", "dynamodb", "octane",
    // Executa esta linha
    |                    "failover", "null"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'stores' => [

        // Define uma função
        'array' => [
            // Define uma função
            'driver' => 'array',
            // Define uma função
            'serialize' => false,
        // Executa esta linha
        ],

        // Define uma função
        'database' => [
            // Define uma função
            'driver' => 'database',
            // Define uma função
            'connection' => env('DB_CACHE_CONNECTION'),
            // Define uma função
            'table' => env('DB_CACHE_TABLE', 'cache'),
            // Define uma função
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            // Define uma função
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        // Executa esta linha
        ],

        // Define uma função
        'file' => [
            // Define uma função
            'driver' => 'file',
            // Define uma função
            'path' => storage_path('framework/cache/data'),
            // Define uma função
            'lock_path' => storage_path('framework/cache/data'),
        // Executa esta linha
        ],

        // Define uma função
        'memcached' => [
            // Define uma função
            'driver' => 'memcached',
            // Define uma função
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            // Define uma função
            'sasl' => [
                // Executa esta linha
                env('MEMCACHED_USERNAME'),
                // Executa esta linha
                env('MEMCACHED_PASSWORD'),
            // Executa esta linha
            ],
            // Define uma função
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            // Executa esta linha
            ],
            // Define uma função
            'servers' => [
                // Executa esta linha
                [
                    // Define uma função
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    // Define uma função
                    'port' => env('MEMCACHED_PORT', 11211),
                    // Define uma função
                    'weight' => 100,
                // Executa esta linha
                ],
            // Executa esta linha
            ],
        // Executa esta linha
        ],

        // Define uma função
        'redis' => [
            // Define uma função
            'driver' => 'redis',
            // Define uma função
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            // Define uma função
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        // Executa esta linha
        ],

        // Define uma função
        'dynamodb' => [
            // Define uma função
            'driver' => 'dynamodb',
            // Define uma função
            'key' => env('AWS_ACCESS_KEY_ID'),
            // Define uma função
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            // Define uma função
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            // Define uma função
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            // Define uma função
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        // Executa esta linha
        ],

        // Define uma função
        'octane' => [
            // Define uma função
            'driver' => 'octane',
        // Executa esta linha
        ],

        // Define uma função
        'failover' => [
            // Define uma função
            'driver' => 'failover',
            // Define uma função
            'stores' => [
                // Executa esta linha
                'database',
                // Executa esta linha
                'array',
            // Executa esta linha
            ],
        // Executa esta linha
        ],

    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Cache Key Prefix
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    // Executa esta linha
    | stores, there might be other applications using the same cache. For
    // Executa esta linha
    | that reason, you may prefix every cache key to avoid collisions.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-cache-'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Serializable Classes
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Importa dependências
    | This value determines the classes that can be unserialized from cache
    // Importa dependências
    | storage. By default, no PHP classes will be unserialized from your
    // Verifica uma condição
    | cache to prevent gadget chain attacks if your APP_KEY is leaked.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'serializable_classes' => false,

// Executa esta linha
];