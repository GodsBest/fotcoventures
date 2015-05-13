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
				$customer = $customer->first(); //$customer->count() > 1 ? $customer[0] : $customer;
			}
			else
			{
				$customer = new Customer;
				$customer->firstname = Input::get('firstname');
				$customer->lastname  = Input::get('lastname');
				$customer->email     = Input::get('email');
				$customer->phone     = Input::get('phone');
				$customer->address   = Input::get('address');
				$customer->city      = Input::get('city');
				$customer->country   = Input::get('country');
				$customer->save();
			}
			/*return Response::json( $customer );*/
			$order = new Order;
			$order->customer_id = $customer->id;
			$order->colour    = Input::get('colour');
			$order->quantity = Input::get('quantity');
			$order->product  = Input::get('product');
			$order->save();
			return Response::json( $order );
		}
	}
	

}