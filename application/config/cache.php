<?php defined('SYSPATH') or die('No direct script access.');

// Use wincache in production and file cache if running locally
if(Kohana::$environment === Kohana::PRODUCTION)
{
	return array
	(
		'wincache' => array(
			'driver'             => 'wincache',
			'default_expire'     => 3600,
		),
	);
}
else
{
	return array
	(
		'file'    => array(
			'driver'             => 'file',
			'cache_dir'          => APPPATH.'cache',
			'default_expire'     => 3600,
			'ignore_on_delete'   => array(
				'.gitignore',
				'.git',
				'.svn'
			)
		)
	);
}
