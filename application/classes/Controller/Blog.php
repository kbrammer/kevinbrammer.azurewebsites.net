<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Weblog
 */
class Controller_Blog extends Controller_Base {
	
	/**
	 * Define name of template here
	 */
	public $template = 'blog/template';

	
	public function before()
	{
		parent::before();
		
		// If the cache key is available (with default value set to FALSE)
		if ($cached_recent_posts = $this->cache->get('recent_posts', FALSE))
		{
			// Load the results from the cache
			$recent_posts = $cached_recent_posts;
		}
		else
		{
		    $recent_posts = DB::query(Database::SELECT, 'SELECT title, url_title FROM posts 
				WHERE status = "published"
				ORDER BY date ASC
				LIMIT 10')
					->as_object()
					->execute();

			// Cache the results
			$this->cache->set('recent_posts', $recent_posts, Date::MINUTE * 720);
		}

		$this->template->sidebar = View::factory('includes/sidebar')->bind('recent_posts', $recent_posts);
	}

 	/**
	 * Default blog roll
	 */
    public function action_index()
	{

		View::set_global('page_title','Kevin Brammer &gt; Blog');
		
		// This can be a blank string since we are querying w LIKE
		$search = HTML::chars($this->request->post('search'));

		// Concat key w search term to preserve unique results
		if ($cached_posts = $this->cache->get('posts'.$search, FALSE))
		{
			// Load the results from the cache
			$posts = $cached_posts;
		}
		else
		{
			// Query posts including search term if available
		    $posts = ORM::factory('Post')
				->where('title','LIKE','%'.$search.'%')
				->where('status', '=', 'published')
				->find_all();

			if($posts->loaded()){
				// Cache the results
				$this->cache->set('posts'.$search, $posts, Date::MINUTE * 720);
			}
		}	

		$this->template->content = View::factory('blog/index')
			->bind('posts', $posts);
	}

	/**
	 * Post detail view
	 */
    public function action_detail()
	{
		$url_title = $this->request->param('url_title');

		// Don't think we have to check if this exists now since routing does this for us
		// if($url_title == '') {
		// 	$this->redirect('home/index', 302);
		// }

		// Concat key w post title to preserve unique results
		if ($cached_post_detail = $this->cache->get('post_detail'.$url_title, FALSE))
		{
			// Load the results from the cache
			$post_detail = $cached_post_detail;
		}
		else
		{
			// Query post using url title
		   $post_detail = ORM::factory('Post')
				->where('status', '=', 'published')
				->where('url_title', '=', $url_title)
				->find();

			if($post_detail->loaded())
			{
				// Cache the results
				$this->cache->set('post_detail'.$url_title, $post_detail, Date::MINUTE * 720);
			}
			else
			{
				// Redirect to main page if no posts are found with this title
				$this->redirect('blog', 302);
			}
		}
		// Set title using blog post name
		View::set_global('page_title','Kevin Brammer &gt; Blog &gt; ' . $post_detail->title);
		
		$this->template->content = View::factory('blog/detail')
			->bind('post', $post_detail);		
		
		
	}

}
