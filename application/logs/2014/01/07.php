<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-07 22:51:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endfor' (T_ENDFOR) ~ APPPATH\views\home\index.php [ 5 ] in file:line
2014-01-07 22:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 22:51:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$post_content ~ APPPATH\views\home\index.php [ 4 ] in C:\wamp\www\kevinbrammerkohana\application\views\home\index.php:4
2014-01-07 22:51:44 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\home\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 4, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\template.php(36): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kevinbrammerkohana\application\views\home\index.php:4
2014-01-07 23:06:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Blog.php [ 22 ] in file:line
2014-01-07 23:06:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 23:08:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Blog.php [ 22 ] in file:line
2014-01-07 23:08:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 23:08:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH\classes\Controller\Blog.php [ 22 ] in file:line
2014-01-07 23:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 23:27:20 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 23:27:20 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('title')
#1 C:\wamp\www\kevinbrammerkohana\application\views\admin\index.php(22): Kohana_ORM->__get('title')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammerkohana\application\views\template.php(36): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:603