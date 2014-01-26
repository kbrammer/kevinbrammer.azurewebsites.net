<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	/**
	 * list_columns is used for ORM to get all the columns in a table when they are not specified. 
	 * To get around this, you can specify the table columns in the _table_columns protected property:
	 * @var array
	 */
	protected $_table_columns = array(
	    'id' => NULL,
		'email' => NULL,
		'username' => NULL,
		'full_name' => NULL,
		'password' => NULL,
		'logins' => NULL,
		'last_login' => NULL
	  ); 

	/**
	 * "Has many" relationships
	 *
	 * The standard has_many relationship will likely fall on the other side of a belongs_to relationship.
	 * 
	 * @var array
	 */
	protected $_has_many = array(
		'posts' => array('model' => 'Post'),
	);

} // End User Model