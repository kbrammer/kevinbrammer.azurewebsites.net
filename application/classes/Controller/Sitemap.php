<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Sitemap controller
 */
class Controller_Sitemap extends Controller {

	public function before()
	{
		parent::before();

		// Check for the existance of the cache driver in APPPATH/config/cache.php
		if(Kohana::$environment === Kohana::PRODUCTION)
		{
			$this->cache = Arr::get(Cache::$instances, 'wincache', Cache::instance('wincache'));	
		}
		else
		{
			$this->cache = Arr::get(Cache::$instances, 'file', Cache::instance('file'));
		}
	}

	/**
	* Return sitemap of all posts
	* @return xml
	*/
	public function action_index()
	{

		// If the cache key is available (with default value set to FALSE)
		if ($cached_sitemap = $this->cache->get('sitemap', FALSE))
		{
		    // Return xml response from cache
			$sitemap = $cached_sitemap;
		}
		else
		{
		    // Array of items to add to sitemap
			$items = array(
				array('loc' => URL::site('home', 'http'), 'lastmod' => '2014-01-11' ), //manually setting homepage modified date for now, rarely changes, guess I could base on file date
				array('loc' => URL::site('home/music', 'http'), 'changefreq' => 'daily', 'priority' => '0.5'),
				array('loc' => URL::site('blog', 'http')),
			);

			// Query published posts
			$posts = ORM::factory('Post')
				->where('status','=','published')
				->order_by('date','DESC')
				// ->limit(10)
				->find_all();

			foreach($posts as $post){
				$items[] = array(
	               'loc' => URL::site('blog/'.$post->url_title, 'http'),
	               'lastmod' => strftime('%Y-%m-%d', strtotime($post->date)),
	           );
			}

			// Generate sitemap from list of posts
			$sitemap = Sitemap::create($items);
			 
			// Cache the sitemap
			$this->cache->set('sitemap', $sitemap, Date::MINUTE * 720);
		}

		// Return xml response
		$this->response
			->headers('Content-Type', 'text/xml')
			->body($sitemap);
	}
}