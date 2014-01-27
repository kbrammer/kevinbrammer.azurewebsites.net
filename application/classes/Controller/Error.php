<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Error handling
 */
class Controller_Error extends Controller_Base {
	
	/**
	 * Define name of template here
	 */
	public $template = 'template';

	/**
	 * Default
	 */
    public function action_index()
	{
		View::set_global('page_title','Kevin Brammer | Error');
		$content = View::factory('error/index');
		$this->template->content = $content;
	}

 	/**
	 * 404
	 */
    public function action_404()
	{
		View::set_global('page_title','Kevin Brammer | 404');
		$content = View::factory('error/not_found');
		$this->template->content = $content;
	}
	
} 
