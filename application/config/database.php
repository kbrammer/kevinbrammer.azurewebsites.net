<?php defined('SYSPATH') OR die('No direct access allowed.');

	return array
	(
		'default' => array(
			'type'       => 'PDO',
			'connection' => array(
				/**
				 * The following options are available for PDO:
				 *
				 * string   dsn         Data Source Name
				 * string   username    database username
				 * string   password    database password
				 * boolean  persistent  use persistent connections?
				 */
				'dsn'        => 'mysql:host=us-cdbr-azure-west-b.cleardb.com;dbname=kevinbrAtnANkevU',
				'username'   => 'b10fddaa4b278c',
				'password'   => '8cfbe4a9',
				'persistent' => FALSE,
			),
			/**
			 * The following extra options are available for PDO:
			 *
			 * string   identifier  set the escaping identifier
			 */
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
		),
	);