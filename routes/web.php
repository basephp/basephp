<?php

use \Wine\Support\Facades\Route;


Route::add('/','Welcome');
Route::add('/edit/{num}/{alphanum}',['session','html.compress'],'Page::index/$1/$2');

Route::add('test/{id}',function($id){
    return ['id'=>$id];
});



Route::group('/admin',['html.compress', 'auth:admin'],function(){

	Route::add('/edit/{id}','Page');

});


Route::add('/json/{num}/{alphanum}','Json::index/$1/$2');

Route::add('/{category}/{any}-game','Page::index/$2');
Route::add('/{any}-games','Page::index/$1');
Route::add('/{any}','Page::index/$1');


// echo '<pre>'.print_r(Route::getRoutes(),1).'</pre>';




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
