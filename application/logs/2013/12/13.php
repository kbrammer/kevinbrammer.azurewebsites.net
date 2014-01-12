<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-13 13:39:30 --- CRITICAL: Database_Exception [ 1146 ]: Table 'terrawp.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\terra-ats\portal\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-13 13:39:30 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\terra-ats\portal\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#7 C:\wamp\www\terra-ats\portal\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('kbrammer@gmail....', '9t8t6s', true)
#8 C:\wamp\www\terra-ats\portal\application\classes\Controller\User.php(96): Kohana_Auth->login('kbrammer@gmail....', '9t8t6s', true)
#9 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 C:\wamp\www\terra-ats\portal\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\terra-ats\portal\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-13 13:48:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 117 ] in file:line
2013-12-13 13:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-13 13:49:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 116 ] in file:line
2013-12-13 13:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-13 13:49:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 116 ] in file:line
2013-12-13 13:49:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line