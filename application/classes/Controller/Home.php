<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Default home page. 
 */
class Controller_Home extends Controller_Base {
	
	/**
	 * Define name of template here
	 */
	public $template = 'home/template';
	
	public function before()
	{
		parent::before();
		$this->template->carousel = View::factory('includes/carousel');
	}

 	/**
	 * Default action
	 */
    public function action_index()
	{
		$content = View::factory('home/index')
			->bind('posts', $posts);

		$this->template->content = $content;
	}
	
} 
