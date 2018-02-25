<?php

return [

    /*
    |--------------------------------------------------------------------------
    | App Name
    |--------------------------------------------------------------------------
    |
    | The name of your Application
    |
    */

    'name' => env('APP_NAME', ''),

    /*
    |--------------------------------------------------------------------------
    | App Domain Name
    |--------------------------------------------------------------------------
    |
    | Your application domain name.
    |
    */

    'domain' => env('APP_DOMAIN', ''),

    /*
    |--------------------------------------------------------------------------
    | Enviormental Variables
    |--------------------------------------------------------------------------
    |
    | Available Timezones: http://php.net/manual/en/timezones.php
    |
    */

    'timezone' => env('APP_TIMEZONE', 'America/New_York'),

    'encoding' => env('APP_ENCODING', 'UTF-8'),

    /*
    |--------------------------------------------------------------------------
    | Sessions
    |--------------------------------------------------------------------------
    |
    | [Driver]
    |
    |   Class location name space of which session driver to use.
        Must implement \Wine\Session\ProviderInterface
    |
    | [cookie]
    |
    |   The name of the session cookie.
    |
    | [expiration]
    |
    |   How long will the session last (in seconds).
    |   Setting to 0 will expire once the user closes their browser.
    |
    | [save_path]
    |
    |   For Files Driver:
    |   Location on the server tp store the session files.
    |   WARNING: Only absolute paths are supported!
    |
    |   If set to null or blank, the default PHP save path will be used.
    |
    |
    */

    'session' => [
        'driver' => \Wine\Session\Driver\Files::class,
        'cookie' => 'WINEPHP',
        'expiration' => 3600,
        'save_path' => null
    ]

];
