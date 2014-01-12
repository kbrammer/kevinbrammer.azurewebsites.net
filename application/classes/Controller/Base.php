<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Make sure to extend Controller Template if using templates
 */
class Controller_Base extends Controller_Template {

	/**
	 * Define name of template here
	 */
	public $template = 'template';

	/**
	 * Automatically executed before the controller action. 
	 * Can be used to set class properties, do authorization checks, and execute other custom code.
	 * @return void
	 */
	public function before()
	{
		parent::before();

	    // set global view variables that we can use in the template as $site_name
	    View::set_global('page_uri', URL::site($this->request->uri(), 'http'));
		View::set_global('page_title','Kevin Brammer &gt; ' . ucfirst(Request::current()->controller()) . ' &gt; ' . ucfirst(Request::current()->action()));
		View::set_global('page_name', $this->request->action());

		$this->template->navbar = View::factory('includes/navbar');
		$this->template->footer = View::factory('includes/footer');
	}

	/**
	 * Automatically executed after the controller action. 
	 * @return void
	 */
	public function after()
	{
		// placeholder
		
		parent::after();
	}
	
} 