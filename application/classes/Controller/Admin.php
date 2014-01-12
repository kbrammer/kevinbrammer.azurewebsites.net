<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Site Administration
 */
class Controller_Admin extends Controller_Base {
	
	/**
	 * Define name of template here
	 */
	public $template = 'admin/template';

	/**
	 * Automatically executed before the controller action. 
	 * Can be used to set class properties, do authorization checks, and execute other custom code.
	 * @return [type] [description]
	 */
	public function before()
	{
		parent::before();

		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)	{
			$this->redirect('user/login');
		}

		$this->template->sidebar = View::factory('includes/admin-sidebar');
	}

 	/**
	 * Default action
	 */
    public function action_index()
	{
		$content = View::factory('admin/index')
			->bind('posts', $posts);
		
		$posts = ORM::factory('Post')->find_all();
		$this->template->content = $content;
	}

	/*
	Parameters
	Parameters are accessed by calling $this->request->param('name') where name is the name defined in the route.

	?
	// Assuming Route::set('example','<controller>(/<action>(/<id>(/<new>)))');
	 
	public function action_foobar()
	{
	    $id = $this->request->param('id');
	    $new = $this->request->param('new');
	 */
	
	/**
	 * Edit post
	 */
    public function action_edit()
	{

		$id = Request::current()->param('id');

		$content = View::factory('admin/edit')
			->bind('post', $post)
			->bind('msg', $msg);
		
		$post = ORM::factory('Post')
			->where('url_title', '=', $id)
			->find();

		$this->template->content = $content;

		if($this->request->method() === Kohana_Request::POST) {
			try
			{
				$post->date = date('Y-m-d');
				$post->author = 1;//TODO: get user id
				// $post->title = HTML::chars(Arr::get($_POST, 'title'));
				$post->title = Arr::get($_POST, 'title');
				$post->url_title = URL::title(Arr::get($_POST, 'title'));
				$post->status = Arr::get($_POST, 'status');
				$post->excerpt = Arr::get($_POST, 'excerpt');
				// $post->content = HTML::chars(Arr::get($_POST, 'content'));
				$post->content = Arr::get($_POST, 'content');
				$post->save();
				// redirect just in case this is a new post with no id (url_title)
				$this->redirect('admin/edit/'.$post->url_title);
			} 
			catch (Kohana_ORM_Exception $e)
			{
				$msg = 'An error occurred.';
			}
		}
	}

	/**
	 * Create post
	 */
   /* public function action_create()
	{
		$content = View::factory('admin/create');
		$this->template->content = $content;
	}*/

	/**
	 * Create post
	 */
    public function action_delete()
	{
		$id = Request::current()->param('id');
		$post = ORM::factory('Post')
			->where('url_title', '=', $id)
			->find();
		if($post->loaded()){
			$post->delete();	
		}
		
		$this->redirect('admin/index');
	}

	public function action_test(){

		
		$content = View::factory('admin/test')
			->bind('test', $test);
		
		$this->template->content = $content;

		if($this->request->method() === Kohana_Request::POST) {
			$test = ORM::factory('Post');
			$test->content = Arr::get($_POST, 'content');
		}
	}

	public function auction_phpinfo(){
		$content = View::factory('admin/phpinfo');
		$this->template->content = $content;
	}
	
} 
