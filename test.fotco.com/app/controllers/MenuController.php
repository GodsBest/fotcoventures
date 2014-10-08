<?php

class MenuController extends BaseController 
{

	public function home()
	{
		return View::make('pages.menu.home-slider');
	}
	
	public function products()
	{
		return View::make('pages.menu.products');
	}
	
	public function about()
	{
		return View::make('pages.menu.about-us');
	}
	
	public function contact()
	{
		return View::make('pages.menu.contact');
	}
	
	public function team()
	{
		return View::make('pages.menu.team');
	}
	
	public function news()
	{
		return View::make('pages.menu.news');
	}
	
	public function careers()
	{
		return View::make('pages.menu.careers');
	}
	

}