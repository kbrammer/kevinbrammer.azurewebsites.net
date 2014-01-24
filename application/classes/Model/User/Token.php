<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User_Token extends Model_Auth_User_Token {

	/**
	 * list_columns is used for ORM to get all the columns in a table when they are not specified. 
	 * To get around this, you can specify the table columns in the _table_columns protected property:
	 * @var array
	 */
	protected $_table_columns = array(
	    'id' => NULL,
		'user_id' => NULL,
		'user_agent' => NULL,
		'token' => NULL,
		'created' => NULL,
		'expires' => NULL,
	  ); 

} // End User Token Model