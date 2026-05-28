// Executa esta linha
<?php

// Executa esta linha
use Illuminate\Support\Str;
// Executa esta linha
use Pdo\Mysql;

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Database Connection Name
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may specify which of the database connections below you wish
    // Executa um loop
    | to use as your default connection for database operations. This is
    // Executa esta linha
    | the connection which will be utilized unless another connection
    // Executa esta linha
    | is explicitly specified when you execute a query / statement.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('DB_CONNECTION', 'sqlite'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Database Connections
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Below are all of the database connections defined for your application.
    // Executa um loop
    | An example configuration is provided for each database system which
    // Executa esta linha
    | is supported by Laravel. You're free to add / remove connections.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'connections' => [

        // Define uma função
        'sqlite' => [
            // Define uma função
            'driver' => 'sqlite',
            // Define uma função
            'url' => env('DB_URL'),
            // Define uma função
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            // Define uma função
            'prefix' => '',
            // Define uma função
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            // Define uma função
            'busy_timeout' => null,
            // Define uma função
            'journal_mode' => null,
            // Define uma função
            'synchronous' => null,
            // Define uma função
            'transaction_mode' => 'DEFERRED',
        // Executa esta linha
        ],

        // Define uma função
        'mysql' => [
            // Define uma função
            'driver' => 'mysql',
            // Define uma função
            'url' => env('DB_URL'),
            // Define uma função
            'host' => env('DB_HOST', '127.0.0.1'),
            // Define uma função
            'port' => env('DB_PORT', '3306'),
            // Define uma função
            'database' => env('DB_DATABASE', 'laravel'),
            // Define uma função
            'username' => env('DB_USERNAME', 'root'),
            // Define uma função
            'password' => env('DB_PASSWORD', ''),
            // Define uma função
            'unix_socket' => env('DB_SOCKET', ''),
            // Define uma função
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            // Define uma função
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            // Define uma função
            'prefix' => '',
            // Define uma função
            'prefix_indexes' => true,
            // Define uma função
            'strict' => true,
            // Define uma função
            'engine' => null,
            // Define uma função
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                // Define uma função
                (PHP_VERSION_ID >= 80500 ? Mysql::ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            // Executa esta linha
            ]) : [],
        // Executa esta linha
        ],

        // Define uma função
        'mariadb' => [
            // Define uma função
            'driver' => 'mariadb',
            // Define uma função
            'url' => env('DB_URL'),
            // Define uma função
            'host' => env('DB_HOST', '127.0.0.1'),
            // Define uma função
            'port' => env('DB_PORT', '3306'),
            // Define uma função
            'database' => env('DB_DATABASE', 'laravel'),
            // Define uma função
            'username' => env('DB_USERNAME', 'root'),
            // Define uma função
            'password' => env('DB_PASSWORD', ''),
            // Define uma função
            'unix_socket' => env('DB_SOCKET', ''),
            // Define uma função
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            // Define uma função
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            // Define uma função
            'prefix' => '',
            // Define uma função
            'prefix_indexes' => true,
            // Define uma função
            'strict' => true,
            // Define uma função
            'engine' => null,
            // Define uma função
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                // Define uma função
                (PHP_VERSION_ID >= 80500 ? Mysql::ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            // Executa esta linha
            ]) : [],
        // Executa esta linha
        ],

        // Define uma função
        'pgsql' => [
            // Define uma função
            'driver' => 'pgsql',
            // Define uma função
            'url' => env('DB_URL'),
            // Define uma função
            'host' => env('DB_HOST', '127.0.0.1'),
            // Define uma função
            'port' => env('DB_PORT', '5432'),
            // Define uma função
            'database' => env('DB_DATABASE', 'laravel'),
            // Define uma função
            'username' => env('DB_USERNAME', 'root'),
            // Define uma função
            'password' => env('DB_PASSWORD', ''),
            // Define uma função
            'charset' => env('DB_CHARSET', 'utf8'),
            // Define uma função
            'prefix' => '',
            // Define uma função
            'prefix_indexes' => true,
            // Define uma função
            'search_path' => 'public',
            // Define uma função
            'sslmode' => env('DB_SSLMODE', 'prefer'),
        // Executa esta linha
        ],

        // Define uma função
        'sqlsrv' => [
            // Define uma função
            'driver' => 'sqlsrv',
            // Define uma função
            'url' => env('DB_URL'),
            // Define uma função
            'host' => env('DB_HOST', 'localhost'),
            // Define uma função
            'port' => env('DB_PORT', '1433'),
            // Define uma função
            'database' => env('DB_DATABASE', 'laravel'),
            // Define uma função
            'username' => env('DB_USERNAME', 'root'),
            // Define uma função
            'password' => env('DB_PASSWORD', ''),
            // Define uma função
            'charset' => env('DB_CHARSET', 'utf8'),
            // Define uma função
            'prefix' => '',
            // Define uma função
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        // Executa esta linha
        ],

    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Migration Repository Table
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | This table keeps track of all the migrations that have already run for
    // Executa esta linha
    | your application. Using this information, we can determine which of
    // Executa esta linha
    | the migrations on disk haven't actually been run on the database.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'migrations' => [
        // Define uma função
        'table' => 'migrations',
        // Define uma função
        'update_date_on_publish' => true,
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Redis Databases
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Redis is an open source, fast, and advanced key-value store that also
    // Executa esta linha
    | provides a richer body of commands than a typical key-value system
    // Executa esta linha
    | such as Memcached. You may define your connection settings here.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'redis' => [

        // Define uma função
        'client' => env('REDIS_CLIENT', 'phpredis'),

        // Define uma função
        'options' => [
            // Define uma função
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            // Define uma função
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            // Define uma função
            'persistent' => env('REDIS_PERSISTENT', false),
        // Executa esta linha
        ],

        // Define uma função
        'default' => [
            // Define uma função
            'url' => env('REDIS_URL'),
            // Define uma função
            'host' => env('REDIS_HOST', '127.0.0.1'),
            // Define uma função
            'username' => env('REDIS_USERNAME'),
            // Define uma função
            'password' => env('REDIS_PASSWORD'),
            // Define uma função
            'port' => env('REDIS_PORT', '6379'),
            // Define uma função
            'database' => env('REDIS_DB', '0'),
            // Define uma função
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            // Define uma função
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            // Define uma função
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            // Define uma função
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        // Executa esta linha
        ],

        // Define uma função
        'cache' => [
            // Define uma função
            'url' => env('REDIS_URL'),
            // Define uma função
            'host' => env('REDIS_HOST', '127.0.0.1'),
            // Define uma função
            'username' => env('REDIS_USERNAME'),
            // Define uma função
            'password' => env('REDIS_PASSWORD'),
            // Define uma função
            'port' => env('REDIS_PORT', '6379'),
            // Define uma função
            'database' => env('REDIS_CACHE_DB', '1'),
            // Define uma função
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            // Define uma função
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            // Define uma função
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            // Define uma função
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        // Executa esta linha
        ],

    // Executa esta linha
    ],

// Executa esta linha
];