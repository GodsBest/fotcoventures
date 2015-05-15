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



Route::post('products/placeorder', array('as' => 'place_order', 'uses' => 'ProductController@doPlaceOrder'));
Route::post('message/send', array('as' => 'send_message', 'uses' => 'MessageController@doSendMessage'));
Route::post('newsletter/subscribe', array('as' => 'subscribe', 'uses' => 'NewsletterController@doSubscribe'));

Route::controller('password', 'RemindersController');

Route::get('/testemail',function()
{
	Mailgun::send([], [], function ($message) {
        $message->subject('Mailgun Email Testing');
        $message->to('peter.aganyo@gmail.com');
        $message->html('<h1>Hahahahaaaaaa</h1><p>Email body</p>');
    });
});

Route::get('/testing',function()
{
	Mail::send('emails.welcome', array('key' => 'value'), function($message)
	{
        $message->subject('Mail Email Testing ......');
        $message->to('peter.aganyo@gmail.com','Peter Aganyo');
        $message->html('<h1>Hahahahaaaaaa</h1><p>Message goes riiiiiiight hereeeeee</p>');
    });
}); 