<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database Credentials
    |--------------------------------------------------------------------------
    |
    |
    */

    'driver' => env('DB_DRIVER', 'MySQLi'),
    'user'   => env('DB_USER', ''),
    'pass'   => env('DB_PASS', ''),
    'host'   => env('DB_HOST', ''),
    'name'   => env('DB_NAME', ''),

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Register Service Providers
    |--------------------------------------------------------------------------
    |
    | By default, we will need to register our database provider.
    | These will be available when the application boots up.
    |
    |
    */

    'providers' => [
        'database' => \Base\Database\ServiceProvider\Database::class,
    ]

];
