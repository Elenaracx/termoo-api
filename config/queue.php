// Executa esta linha
<?php

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Queue Connection Name
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Laravel's queue supports a variety of backends via a single, unified
    // Executa esta linha
    | API, giving you convenient access to each backend using identical
    // Executa um loop
    | syntax for each. The default queue connection is defined below.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('QUEUE_CONNECTION', 'database'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Queue Connections
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa um loop
    | Here you may configure the connection options for every queue backend
    // Executa esta linha
    | used by your application. An example configuration is provided for
    // Executa esta linha
    | each backend supported by Laravel. You're also free to add more.
    // Executa esta linha
    |
    // Executa esta linha
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis",
    // Executa esta linha
    |          "deferred", "background", "failover", "null"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'connections' => [

        // Define uma função
        'sync' => [
            // Define uma função
            'driver' => 'sync',
        // Executa esta linha
        ],

        // Define uma função
        'database' => [
            // Define uma função
            'driver' => 'database',
            // Define uma função
            'connection' => env('DB_QUEUE_CONNECTION'),
            // Define uma função
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            // Define uma função
            'queue' => env('DB_QUEUE', 'default'),
            // Define uma função
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            // Define uma função
            'after_commit' => false,
        // Executa esta linha
        ],

        // Define uma função
        'beanstalkd' => [
            // Define uma função
            'driver' => 'beanstalkd',
            // Define uma função
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            // Define uma função
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            // Define uma função
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            // Define uma função
            'block_for' => 0,
            // Define uma função
            'after_commit' => false,
        // Executa esta linha
        ],

        // Define uma função
        'sqs' => [
            // Define uma função
            'driver' => 'sqs',
            // Define uma função
            'key' => env('AWS_ACCESS_KEY_ID'),
            // Define uma função
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            // Define uma função
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            // Define uma função
            'queue' => env('SQS_QUEUE', 'default'),
            // Define uma função
            'suffix' => env('SQS_SUFFIX'),
            // Define uma função
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            // Define uma função
            'after_commit' => false,
        // Executa esta linha
        ],

        // Define uma função
        'redis' => [
            // Define uma função
            'driver' => 'redis',
            // Define uma função
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            // Define uma função
            'queue' => env('REDIS_QUEUE', 'default'),
            // Define uma função
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            // Define uma função
            'block_for' => null,
            // Define uma função
            'after_commit' => false,
        // Executa esta linha
        ],

        // Define uma função
        'deferred' => [
            // Define uma função
            'driver' => 'deferred',
        // Executa esta linha
        ],

        // Define uma função
        'background' => [
            // Define uma função
            'driver' => 'background',
        // Executa esta linha
        ],

        // Define uma função
        'failover' => [
            // Define uma função
            'driver' => 'failover',
            // Define uma função
            'connections' => [
                // Executa esta linha
                'database',
                // Executa esta linha
                'deferred',
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
    | Job Batching
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | The following options configure the database and table that store job
    // Executa esta linha
    | batching information. These options can be updated to any database
    // Executa esta linha
    | connection and table which has been defined by your application.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'batching' => [
        // Define uma função
        'database' => env('DB_CONNECTION', 'sqlite'),
        // Define uma função
        'table' => 'job_batches',
    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Failed Queue Jobs
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | These options configure the behavior of failed queue job logging so you
    // Executa esta linha
    | can control how and where failed jobs are stored. Laravel ships with
    // Executa um loop
    | support for storing failed jobs in a simple file or in a database.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'failed' => [
        // Define uma função
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        // Define uma função
        'database' => env('DB_CONNECTION', 'sqlite'),
        // Define uma função
        'table' => 'failed_jobs',
    // Executa esta linha
    ],

// Executa esta linha
];