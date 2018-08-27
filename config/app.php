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

    'name' => env('APP_NAME', 'BasePHP Application'),

    /*
    |--------------------------------------------------------------------------
    | App Domain Name
    |--------------------------------------------------------------------------
    |
    | Your application domain name.
    |
    */

    'domain' => env('APP_DOMAIN', 'basephp.org'),

    /*
    |--------------------------------------------------------------------------
    | Enviormental "timezones"
    |--------------------------------------------------------------------------
    |
    | Available Timezones: http://php.net/manual/en/timezones.php
    |
    */

    'timezone' => env('APP_TIMEZONE', 'America/New_York');

    /*
    |--------------------------------------------------------------------------
    | Enviormental "encoding"
    |--------------------------------------------------------------------------
    |
    | This is only here if you would like to change the encoding,
    | but in most setups, you don't need to use it.
    |
    |
    */

    'encoding' => env('APP_ENCODING', 'UTF-8'),

    /*
    |--------------------------------------------------------------------------
    | Enviormental "mode"
    |--------------------------------------------------------------------------
    |
    | Your app environment mode. (you should modify this using .env)
    |
    | Accepts – "development", "testing", "production"
    |
    */

    'environment' => env('APP_ENV', 'development'),

    /*
    |--------------------------------------------------------------------------
    | Enviormental "Allow Gloabls"
    |--------------------------------------------------------------------------
    |
    | Setting this to "true" will allow $_ENV and $_SERVER global Variables
    | By default this is disabled to prevent security leaks of sensitive information
    |
    | Accepts only bool – "true" or "false"
    |
    */

    'globals' => env('APP_GLOBALS', false),


    /*
    |--------------------------------------------------------------------------
    | (OPTIONAL) Register service providers for this application
    |--------------------------------------------------------------------------
    |
    | These service providers will load automatically on boot
    | They will load up the register() & boot() methods if exist.
    | They will be available through the app() instance for reference.
    |
    */

    'providers' => [

    ]

];
