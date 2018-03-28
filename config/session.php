<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Session Provider
    |--------------------------------------------------------------------------
    |
    | [provider]
    |
    |   Class location namespace of which sessions will use
    |   Must implement \Base\Session\ProviderInterface
    |
    | [Built-in]
    |
    |   \Base\Session\Provider\Files::class
    |
    */

    'provider' => \Base\Session\Provider\Files::class,

    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | [cookie]
    |
    |   The name of the session cookie.
    |
    */

    'cookie' => env('SESSION_COOKIE', 'BasePHP'),

    /*
    |--------------------------------------------------------------------------
    | Session Expiration Time
    |--------------------------------------------------------------------------
    |
    | [expiration]
    |
    |   How long will the session last (in seconds).
    |   Setting to 0 will expire once the user closes their browser.
    |
    */

    'expiration' => env('SESSION_EXPIRE', 3600),

    /*
    |--------------------------------------------------------------------------
    | Session Save Path
    |--------------------------------------------------------------------------
    |
    | [save_path]
    |
    |   For Files Driver:
    |   Location on the server tp store the session files.
    |   WARNING: Only absolute paths are supported!
    |
    |   If set to null or blank, the default PHP save path will be used.
    |
    */

    'save_path' => storage_path('framework/sessions'),

];
