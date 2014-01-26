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
			// Let's do this so we don't accidentally cache the kevinbrammer.azurewebsites.net url
			$this->base_url = 'http://kevinbrammer.com/';
		}
		else
		{
			$this->cache = Arr::get(Cache::$instances, 'file', Cache::instance('file'));
			$this->base_url = 'http://localhost/kevinbrammer.azurewebsites.net/';
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
				array('loc' => $this->base_url.'home', 'lastmod' => '2014-01-11' ), //manually setting homepage modified date for now, rarely changes, guess I could base on file date
				array('loc' => $this->base_url.'home/music', 'changefreq' => 'daily', 'priority' => '0.5'),
				array('loc' => $this->base_url.'blog'),
			);

			// Query published posts
			$posts = ORM::factory('Post')
				->where('status','=','published')
				->order_by('date','DESC')
				// ->limit(10)
				->find_all();

			foreach($posts as $post){
				$items[] = array(
	               'loc' => $this->base_url.'blog/'.$post->url_title,
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