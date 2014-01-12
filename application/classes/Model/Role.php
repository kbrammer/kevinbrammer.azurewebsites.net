<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Role extends Model_Auth_Role {

	/**
	 * list_columns is used for ORM to get all the columns in a table when they are not specified. 
	 * To get around this, you can specify the table columns in the _table_columns protected property:
	 * @var array
	 */
	protected $_table_columns = array(
	    'id' => NULL,
		'name' => NULL,
		'description' => NULL,
	  ); 

} // End Role Model