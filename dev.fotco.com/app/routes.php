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

/*Route::get('/', function()
{
	//return View::make('hello');
        return '<div style="background-image: url(/assets/img/fotco.png);background-repeat:no-repeat;background-size: 150px 150px;width:100%;height:100%;background-color:#fff;margin:0;"><h1 align="center">Welcome to Fotco Ventures</h1><br/><br><p style="text-align:center;font-size:xx-large;color:#cf0808;padding:50px;">Thanks for stopping by. We are still setting up. Come again.</p></div>' ;
});

Route::get('/products', function() { return 'This page will contain all products sold.'; });
Route::get('/sales', function() { return 'You will see a sales report here.'; });
Route::get('/bs3e', function() { return View::make('bs3e'); });
Route::get('/bse', function() { return View::make('bse'); });
Route::get('/bs', function() { return View::make('bs'); });*/

//Tutorial recommendation
Route::get('/', array('as' => 'home', 'uses' => function()
{
	return View::make('pages.home');
}));

Route::get('/about', array('as' => 'about', 'uses' => function()
{
	return View::make('pages.about');
}));

Route::get('/products', array('as' => 'products', 'uses' => function()
{
	return View::make('pages.products');
}));

Route::get('/contact', array('as' => 'contact', 'uses' => function()
{
	return View::make('pages.contact');
}));

Route::get('/news', array('as' => 'news', 'uses' => function()
{
	return View::make('pages.news');
}));

Route::get('/careers', array('as' => 'careers', 'uses' => function()
{
	return View::make('pages.careers');
}));