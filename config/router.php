<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Controllers Namespace
    |--------------------------------------------------------------------------
    |
    | By default the controller namespace is "\App\Controllers"
    |
    */

    'controllers' => '\\App\\Controllers',

    /*
    |--------------------------------------------------------------------------
    | Not Found Error - Controller (404)
    |--------------------------------------------------------------------------
    |
    | Which controller to send the user when the page is not found (404)
    |
    | DO NOT INCLUDE THE CONTROLLER NAMESPACE HERE
    |
    */

    'errors' => 'Error',

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
    | (OPTIONAL) Register middlewares for this application
    |--------------------------------------------------------------------------
    |
    | The middlewares here do not run unless you tell them too on routes,
    | or autoload. This is a place where you register all the middlewares
    | you want the application to have access too.
    |
    |
    | "Session" : Enables session tracking on allowed requests/routes.
    |
    | "HttpFrameGuard" : Proects against iframes – making sure requests are same SAMEORIGIN
    |                    Adds the http header "X-Frame-Options"
    |
    */

    'middleware' => [
        'Session' => \Base\Session\Middleware\StartSession::class,
        'HttpFrameGuard' => \Base\Http\Middleware\HttpFrameGuard::class
    ],

    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Autoloaded Middlewares (every request...)
    |--------------------------------------------------------------------------
    |
    | These middlewares will run on all requests.
    |
    | You only need to inser the name of the middleware from above into this array,
    | like ['session', 'another', 'etc']
    |
    */

    'autoload' => [

    ]

];
