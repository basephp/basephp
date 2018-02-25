<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Controllers Namespace
    |--------------------------------------------------------------------------
    | By default the controller namespace is \App\Controllers
    |
    */

    'controllers' => '\\App\\Controllers',

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Register your REGEX patterns
    |--------------------------------------------------------------------------
    |
    | Built-in patterns:
    | any = .*
    | num = [0-9]+
    | alpha = [a-zA-Z]+
    | alphanum = [a-zA-Z0-9]+
    |
    */

    'patterns' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Attach middleware classes to routes
    |--------------------------------------------------------------------------
    |
    | The middlewares here do not run unless you tell them too on routes
    |
    |
    */

    'middleware' => [
        'html.compress' => App\Middleware\OutputCompress::class,
        'auth' => App\Middleware\Auth::class
    ],

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Autoloaded Middlewares (every request...)
    |--------------------------------------------------------------------------
    |
    | These middlewares will run on all requests
    |
    |
    */

    'autoload' => [

    ]

];
