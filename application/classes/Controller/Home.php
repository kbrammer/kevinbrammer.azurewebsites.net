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

		View::set_global('page_title','Kevin Brammer | Home');
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

	public function action_music()
	{
		View::set_global('page_title','Kevin Brammer | Home | Local Music'); // set page title
		$this->template->carousel = ''; // hide the carousel

		// If the cache key is available (with default value set to FALSE)
		if ($cached_fitz = $this->cache->get('fitz', FALSE))
		{
			// Load the results from the cache
			$fitz = $cached_fitz;
		}
		else
		{
		    
			$fitz = new Fitz();
			
			// Cache the results
			$this->cache->set('fitz', $fitz, Date::MINUTE * 720);
		}

		$this->template->content = View::factory('home/music')
			->bind('fitz', $fitz);
	}
	
} 
