<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Make sure to extend Controller Template if using templates
 */
class Controller_Feed extends Controller {

	public function action_index()
	{
		
		$this->redirect('feed/rss');
	}
	
	public function action_rss()
	{
		$posts = ORM::factory('Post')
			->where('status','=','published')
			->order_by('date','DESC')
			->limit(10)
			->find_all();


		$info = array(
           'title' => 'Kevin Brammer\'s Blog',
           // 'pubDate' => date("D, d M Y H:i:s T"),
           'pubDate' => $posts->as_array()[0]->date,
           'description' => 'Kevin Brammer on Web Development',
           'link' => 'http://kevinbrammer.com/blog',
           'copyright' => 'Copyright '.date('Y').', Kevin Brammer',
           'language' => 'en-us',
           'image' => array(
           		'url' => URL::base().'assets/images/gravatar.jpg',
           		'title' => 'Kevin Brammer\'s Blog',
           		'link' => URL::base().'assets/images/gravatar.jpg',
           	),
        );

		$items = array();
		foreach($posts as $post){
			$items[] = array(
               'title' => HTML::chars($post->title),
               'pubDate' => $post->date,
               'link' => URL::site('blog/'.$post->url_title),
               'description' => HTML::chars($post->content),
           );
		}

		$rss = Feed::create($info, $items);
		$this->response
			->headers('Content-Type', 'text/xml')
			->body($rss);
	}
} 
