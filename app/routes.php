<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    
   return View::make('index');
       
});

Route::group(array('prefix' => 'api'), function() {

    Route::resource('articles', 'ArticleController' ,
            array('only' => array('index', 'store', 'destroy')));
    Route::resource('menus', 'MenuController');
    
});


App::missing(function($exception)
{
    return View::make('index');
});