<?php

class NewsletterController extends BaseController 
{

	public function doSubscribe()
	{
		$email = Input::get('email');
		$data = array();
		Mail::send('newsletter.subscribe', $data, function($message) use ($email)
		{
		    $message
		    ->to($email, $email)
		    ->from('fotcoadm@fotcoventures.com', 'Site Admin')
		    ->subject('Fotco Ventures Newletter Subscription');
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