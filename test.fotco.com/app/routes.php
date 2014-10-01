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

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.menu.home-slider');
}));
Route::get('/products', array('as' => 'products', function()
{
	return View::make('pages.menu.products');
}));

Route::get('/about', array('as' => 'about', function()
{
	return View::make('pages.menu.about-us');
}));
Route::get('/contact', array('as' => 'contact', function()
{
	return View::make('pages.menu.contact');
}));
Route::get('/team', array('as' => 'team', function()
{
	return View::make('pages.menu.team');
}));
Route::get('/news', array('as' => 'news', function()
{
	return View::make('home');
}));
Route::get('/careers', array('as' => 'careers', function()
{
	return View::make('pages.menu.careers');
}));
Route::get('/productsx', function()
{
	return View::make('home');
});

Route::post('products/placeorder', 'ProductController@doPlaceOrder');