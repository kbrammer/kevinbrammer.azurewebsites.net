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
		
		//TODO: find a better way to do this - maybe as HTML::fragment
		$recent_posts = DB::query(Database::SELECT, 'SELECT title, url_title FROM posts 
			WHERE status = "published"
			ORDER BY date ASC
			LIMIT 10')
			->as_object()
			->execute();

		$this->template->sidebar = View::factory('includes/sidebar')->bind('recent_posts', $recent_posts);
	}

 	/**
	 * Default blog roll
	 */
    public function action_index()
	{

		View::set_global('page_title','Kevin Brammer &gt; Blog');

		$content = View::factory('blog/index')
			->bind('posts', $posts);
		
		//TODO: limit by date range, add paging
		$posts = ORM::factory('Post')
			->where('status', '=', 'published')
			->find_all();

		$this->template->content = $content;
	}

	/**
	 * Post detail view
	 */
    public function action_detail()
	{
		$id = Request::current()->param('id');

		if($id != '') {

			

			$content = View::factory('blog/detail')
			->bind('post', $post);
			
			$post = ORM::factory('Post')
				->where('status', '=', 'published')
				->where('url_title', '=', $id)
				->find();

			if($post->loaded()){
				View::set_global('page_title','Kevin Brammer &gt; Blog &gt;' . $post->title);
				$this->template->content = $content;		
			} else {
				$this->redirect('home/index', 302);	
			}
		} else {
			$this->redirect('home/index', 302);
		}
		
	}
}
