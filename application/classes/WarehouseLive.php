<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * WarehouseLive music listing helper
 *
 * @category   Helpers
 * @author     Kevin Brammer
 * @copyright  (c) 2013-2014 Kevin Brammer
 */
class WarehouseLive {

	protected $_uri = 'http://www.frontgatetickets.com/search/feed/warehouse';

	public $events = array();

	public function __construct()
	{
		$this->events = Feed::parse($this->_uri);		
	}
}
