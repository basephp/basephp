<?php

use \Wine\Support\Facades\Route;


Route::add('/','Welcome');
Route::add('/edit/{id}/{name}',['session'],'Page');

/*
Route::group('test',function(){
    Route::add('page',function(){
        return 'This is my test page.';
    });
});
*/

/*
Route::group(['session'],function(){
    Route::add('/','pageController@home');
});

Route::add('/product/{id}/{name}',function(){
	return 'hello world';
});

Route::group('/category/{name}',['auth'],function(){
	Route::add('{id}','pageController');
});
*/
