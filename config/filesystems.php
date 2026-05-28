// Executa esta linha
<?php

// Retorna um valor
return [

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Default Filesystem Disk
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may specify the default filesystem disk that should be used
    // Executa esta linha
    | by the framework. The "local" disk, as well as a variety of cloud
    // Executa um loop
    | based disks are available to your application for file storage.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'default' => env('FILESYSTEM_DISK', 'local'),

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Filesystem Disks
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Below you may configure as many filesystem disks as necessary, and you
    // Executa um loop
    | may even configure multiple disks for the same driver. Examples for
    // Executa um loop
    | most supported storage drivers are configured here for reference.
    // Executa esta linha
    |
    // Executa esta linha
    | Supported drivers: "local", "ftp", "sftp", "s3"
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'disks' => [

        // Define uma função
        'local' => [
            // Define uma função
            'driver' => 'local',
            // Define uma função
            'root' => storage_path('app/private'),
            // Define uma função
            'serve' => true,
            // Define uma função
            'throw' => false,
            // Define uma função
            'report' => false,
        // Executa esta linha
        ],

        // Define uma função
        'public' => [
            // Define uma função
            'driver' => 'local',
            // Define uma função
            'root' => storage_path('app/public'),
            // Define uma função
            'url' => rtrim(env('APP_URL', 'http://localhost'), '/').'/storage',
            // Define uma função
            'visibility' => 'public',
            // Define uma função
            'throw' => false,
            // Define uma função
            'report' => false,
        // Executa esta linha
        ],

        // Define uma função
        's3' => [
            // Define uma função
            'driver' => 's3',
            // Define uma função
            'key' => env('AWS_ACCESS_KEY_ID'),
            // Define uma função
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            // Define uma função
            'region' => env('AWS_DEFAULT_REGION'),
            // Define uma função
            'bucket' => env('AWS_BUCKET'),
            // Define uma função
            'url' => env('AWS_URL'),
            // Define uma função
            'endpoint' => env('AWS_ENDPOINT'),
            // Define uma função
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            // Define uma função
            'throw' => false,
            // Define uma função
            'report' => false,
        // Executa esta linha
        ],

    // Executa esta linha
    ],

    // Executa esta linha
    /*
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    | Symbolic Links
    // Executa esta linha
    |--------------------------------------------------------------------------
    // Executa esta linha
    |
    // Executa esta linha
    | Here you may configure the symbolic links that will be created when the
    // Executa esta linha
    | `storage:link` Artisan command is executed. The array keys should be
    // Executa esta linha
    | the locations of the links and the values should be their targets.
    // Executa esta linha
    |
    // Executa esta linha
    */

    // Define uma função
    'links' => [
        // Define uma função
        public_path('storage') => storage_path('app/public'),
    // Executa esta linha
    ],

// Executa esta linha
];