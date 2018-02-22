<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Controllers Namespace
	|--------------------------------------------------------------------------
	| By default the controller namespace is \App\Controllers
	|
	*/
	'views' => 'App/Views',

	/*
	|--------------------------------------------------------------------------
	| Prevent Echo
	|--------------------------------------------------------------------------
	| Prevent echo/prints from displaying outside of views.
	| This can help you control what is being displayed and prevent leaked Data
	|
	| Setting to TRUE will prevent the use of echo/print from working in controllers,
	| You will need to "return" all views/strings you wish to print to screen
	|
	*/
	'prevent_echo' => false,

];
