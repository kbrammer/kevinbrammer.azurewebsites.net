<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Post model
 */
class Model_Post extends ORM {

	// protected $_table_name = 'wp_posts';
	// protected $_primary_key = 'ID';
	
	/**
	 * list_columns is used for ORM to get all the columns in a table when they are not specified. 
	 * To get around this, you can specify the table columns in the _table_columns protected property:
	 * http://stackoverflow.com/questions/7314739/kohana-3-2-orm-and-pdo
	 * @var array
	 */
	protected $_table_columns = array(
	    'id' => NULL,
		'author' => NULL,
		'date' => NULL,
		'title' => NULL,
		'url_title' => NULL,
		'excerpt' => NULL,
		'content' => NULL,
		'status' => NULL,
	  ); 
	
	/**
	 * "Belongs to" relationships
	 *
	 * A belongs_to relation should be used when you have one model that belongs to another. 
	 * For example, a Child model belongs_to a Parent or a Flag model belongs_to a Country.
	 * 
	 * @var array
	 */
	protected $_belongs_to = array(
	    'user' => array( 'model' => 'User', 'foreign_key' => 'author' ),
	);

	/**
	 * Rules for posts
	 *
	 * @return array Rules
	 */
	public function rules()
	{
		return array(
			'date' => array(
				array('not_empty'),
				array('max_length', array(':value', 19)),
			),
			'title' => array(
				array('not_empty'),
			),
			'url_title' => array( // these must be unique if we only use this for the links
				array('not_empty'),
				array('max_length', array(':value', 45)),
			),
			'excerpt' => array(
				array('not_empty'),
			),
			'content' => array(
				array('not_empty'),
			),
			'status' => array(
				array('not_empty'),
				array('max_length', array(':value', 20)),
			),
		);
	}

	/**
	 * Filters to run when data is set in this model. 
	 *
	 * @return array Filters
	 */
	public function filters()
	{
		return array(
			'date' => array(
				array(array($this, 'filter_date')),
			),
			'content' => array(
				array(array($this, 'filter_content')),
			),
			//TODO:: maybe just set url_title automatically from title filter, max length check too
			'url_title' => array(
				array(array($this, 'filter_url_title')),
			),
		);
	}

	/**
	 * Labels for fields in this model
	 *
	 * @return array Labels
	 */
	/*public function labels()
	{
		return array(
			'username'         => 'username',
			'email'            => 'email address',
			'password'         => 'password',
		);
	}*/

	/**
	 * Filter the date
	 * @param  string  $date
	 * @return date
	 */
	public function filter_date($date) {
		return strftime('%Y-%m-%d %H:%M:%S', strtotime($date));
	}

	/**
	 * Filter content
	 * @param  string  $content
	 * @return string
	 */
	public function filter_content($content) {
		return $content;
	}

	/**
	 * Filter url title
	 * @param  string  $content
	 * @return string
	 */
	public function filter_url_title($url_title) {
		return substr($url_title, 0, 45);
	}

	/**
	 * Get content with shortcode substitutions
	 * @return string
	 */
	public function get_content() {
		//TODO: maybe create a model or a list of commonly needed shortcodes somewhere?
		$content = $this->content;
		$content = str_replace('{{URL_BASE}}', URL::base() , $content);
		$content = str_replace('{{UPLOADS_URL}}', URL::base().'uploads/' , $content);
		return $content;
	}
}