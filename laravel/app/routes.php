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

Route::get('/', function()
{
	//return View::make('hello');
        return '<h1 align="center">Coming Soon</h1><br/><br><p style="text-align:center;font-size:xx-large;color:blue;">Thanks for stopping by. We are still setting up. Come again.</p>' ;
});

Route::get('/products', function() { return 'This page will contain all products sold.'; });
Route::get('/sales', function() { return 'You will see a sales report here.'; });