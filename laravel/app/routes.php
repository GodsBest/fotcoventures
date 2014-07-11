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
        return '<h1 align="center">Coming Soon</h1><br/><br><p style="text-align:center;font-size:xx-large;color:red;border:1px solid black;padding:50px;">Thanks for stopping by. We are still setting up. Come again.</p>' ;
});

Route::get('/products', function() { return 'This page will contain all products sold.'; });
Route::get('/sales', function() { return 'You will see a sales report here.'; });
Route::get('/bs3e', function() { return View::make('bs3e'); });
Route::get('/bse', function() { return View::make('bse'); });
Route::get('/bs', function() { return View::make('bs'); });

//Tutorial recommendation
Route::get('staging', function()
{
	return View::make('pages.home');
});
Route::get('staging/about', function()
{
	return View::make('pages.about');
});
Route::get('staging/products', function()
{
	return View::make('pages.products');
});
Route::get('staging/contact', function()
{
	return View::make('pages.contact');
});
Route::get('staging/news', function()
{
	return View::make('pages.news');
});
Route::get('staging/careers', function()
{
	return View::make('pages.careers');
});