<?php

namespace GregBueno\App\Http\Controllers;


use Illuminate\Support\Facades\View;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	private $layout_variables = array();
	
	public function __construct()
	{
		global $config_url_base;
		
		$this->layout_variables = array(
			'vigilantmedia_cdn_uri' => env('VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com'),
			'copyright_year' => date('Y'),
			'config_url_base' => $config_url_base,
		);
	}

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function index()
	{
		$page_variables = array(
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('index', $data);
	}
	
	public function crux()
	{
		$page_variables = array(
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('crux.index', $data);
	}
	
	public function museum()
	{
		$page_variables = array(
			'section_head' => 'Blog Museum',
			'page_title' => 'Blog Museum',
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('museum', $data);
	}
	
	public function distractions()
	{
		$page_variables = array(
			'section_head' => 'Distractions',
			'page_title' => 'Distractions',
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('distractions', $data);
	}
	
	public function contact()
	{
		$page_variables = array(
			'section_head' => 'Contact',
			'page_title' => 'Contact',
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('contact', $data);
	}
	
	public function contact_sent()
	{
		$page_variables = array(
			'section_head' => 'Contact',
			'page_title' => 'Contact',
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('contact_sent', $data);
	}
	
}
