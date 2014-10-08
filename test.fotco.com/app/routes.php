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

Route::get('/', array('as' => 'home', 'uses' => 'MenuController@home'));
Route::get('/products', array('as' => 'products', 'uses' => 'MenuController@products'));
Route::get('/about', array('as' => 'about', 'uses' => 'MenuController@about'));
Route::get('/contact', array('as' => 'contact', 'uses' => 'MenuController@contact'));
Route::get('/team', array('as' => 'team', 'uses' => 'MenuController@team'));
Route::get('/news', array('as' => 'news', 'uses' => 'MenuController@news'));
Route::get('/careers', array('as' => 'careers', 'uses' => 'MenuController@careers'));



Route::post('products/placeorder', 'ProductController@doPlaceOrder');
Route::post('message/send', 'MessageController@doSendMessage');