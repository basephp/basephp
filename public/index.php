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
require __DIR__.'/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Load up the application
|--------------------------------------------------------------------------
|
| Send the root path of our application.
|
*/
$app = new \Wine\Application(realpath(__DIR__.'/../'));
$app->initialize();
