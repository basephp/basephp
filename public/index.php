<?php

/*
|--------------------------------------------------------------------------
| Start Time
|--------------------------------------------------------------------------
| The the start time usage at the beginning of this application.
| We will use this to determine the speed of the application.
|
*/
define('APP_START', microtime(true));


/*
|--------------------------------------------------------------------------
| Register composer (autoloader)
|--------------------------------------------------------------------------
| Location to find the composer vendor autoload file
|
| Learn more about composer here:
| @see https://getcomposer.org/
|
*/

if (file_exists(__DIR__.'/../vendor/autoload.php'))
{
    require __DIR__.'/../vendor/autoload.php';


    /*
    |--------------------------------------------------------------------------
    | Load up the application
    |--------------------------------------------------------------------------
    |
    | Send the root path of our application.
    |
    */
    $app = new \Base\Application(realpath(__DIR__.'/../'));
    $app->initialize();
}
else
{
    if (file_exists('./basephp.php'))
    {
        require './basephp.php';
    }
    else
    {
        die('Missing /vendor/autoload.php, please run composer install for framework dependencies. For more information please visit, basephp.org');
    }
}
