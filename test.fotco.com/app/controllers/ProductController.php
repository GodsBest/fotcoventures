<?php

class ProductController extends BaseController 
{

	public function doPlaceOrder()
	{
		$rules = array(
			'firstname' => 	'required',
			'lastname'	=>	'required',
			'email'		=> 	'required|email',
			'phone'		=>	'required',
			'address'	=>	'',
			'city'		=>	'',
			'country'	=>	'',
			'comments'	=>	'',
			'colour'	=>	'',
			'quantity'	=>	''
		);
		
		$validation = Validator::make( Input::all(), $rules );
		
		if( $validation->fails() )
		{
			return Response::json( array('errors' => $validation->messages()) );
		}
		else
		{
			$customer = Customer::where('email', '=', Input::get('email'));
			if( $customer->count() )
			{
				$customer = $customer->count() > 1 ? $customer[0] : $customer;
			}
			else
			{
				$customer = new Customer;
			}
			return Response::json( Input::all() );
		}
	}
	

}