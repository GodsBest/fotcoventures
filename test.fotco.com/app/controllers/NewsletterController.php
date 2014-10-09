<?php

class MessageController extends BaseController 
{

	public function doSendMessage()
	{
		$mess = Input::get('message');
		$data = array('key' => 'value','mess' => $mess);
		Mail::send('emails.welcome', $data, function($message)
		{
		    $message
		    ->to('peter.aganyo@rutgers.edu', 'Pete')
		    ->from('fotcoadm@fotcoventures.com', 'Site Admin')
		    ->subject('Welcome to testing!');
		});
		
		$resp = 'Message was successfully sent!';
		$errors = Mail::failures();
		if(count($errors) > 0)
		{
		    $resp = 'Message was not sent!';
		}
		
		return Response::json(['message' => $resp, 'errors' => $errors]);
		
	}
	

}