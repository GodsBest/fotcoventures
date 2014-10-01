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


Route::group(array('domain' => 'test.fotcoventures.com'), function()
{

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

});


Route::group(array('domain' => 'dev.fotcoventures.com'), function()
{
	
	Route::get('/', function()
	{
		//return View::make('hello');
	        return '<div style="background-image: url(/assets/img/fotco.png);background-repeat:no-repeat;background-size: 150px 150px;width:100%;height:100%;background-color:#fff;margin:0;"><h1 align="center">Welcome to Fotco Ventures</h1><br/><br><p style="text-align:center;font-size:xx-large;color:#cf0808;padding:50px;">Thanks for stopping by. We are still setting up. Come again.</p></div>' ;
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

});