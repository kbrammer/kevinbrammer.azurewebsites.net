<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-11 11:17:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\blog\index.php [ 5 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\index.php:5
2014-01-11 11:17:00 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\index.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\kev...', 5, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php(30): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(36): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\index.php:5
2014-01-11 11:23:04 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\blog\index.php [ 5 ] in file:line
2014-01-11 11:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 11:25:31 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH\classes\Controller\Base.php [ 23 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:25:31 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 23, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:25:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH\classes\Controller\Base.php [ 23 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:25:46 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 23, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:25:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\blog-template.php [ 9 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:9
2014-01-11 11:25:57 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 9, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(36): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:9
2014-01-11 11:27:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::host() ~ APPPATH\views\blog-template.php [ 13 ] in file:line
2014-01-11 11:27:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 11:28:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH\classes\Controller\Base.php [ 23 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:28:27 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 23, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:30:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: protocol ~ APPPATH\classes\Controller\Base.php [ 23 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:30:57 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 23, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php:23
2014-01-11 11:39:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\blog\index.php [ 5 ] in file:line
2014-01-11 11:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:46:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\blog-template.php [ 51 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:51
2014-01-11 12:46:35 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 51, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:51
2014-01-11 13:01:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: recent_posts ~ APPPATH\views\blog-template.php [ 51 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:51
2014-01-11 13:01:29 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 51, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog-template.php:51
2014-01-11 13:04:14 --- CRITICAL: ErrorException [ 2 ]: include(../includes/navbar.inc.php): failed to open stream: No such file or directory ~ APPPATH\views\blog\template.php [ 26 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:26
2014-01-11 13:04:14 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(26): Kohana_Core::error_handler(2, 'include(../incl...', 'C:\wamp\www\kev...', 26, Array)
#1 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(26): include()
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:26
2014-01-11 13:13:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH\views\blog\template.php [ 37 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:37
2014-01-11 13:13:46 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 37, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:37
2014-01-11 13:14:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH\views\blog\template.php [ 37 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:37
2014-01-11 13:14:27 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 37, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php:37
2014-01-11 13:15:19 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php:137
2014-01-11 13:15:19 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/template')
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/template', NULL)
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('admin/template')
#3 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(20): Kohana_Controller_Template->before()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php:137
2014-01-11 13:16:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: navbar ~ APPPATH\views\template.php [ 21 ] in C:\wamp\www\kevinbrammerkohana\application\views\template.php:21
2014-01-11 13:16:55 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 21, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(37): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\application\views\template.php:21
2014-01-11 13:20:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\views\template.php [ 9 ] in C:\wamp\www\kevinbrammerkohana\application\views\template.php:9
2014-01-11 13:20:34 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 9, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kevinbrammerkohana\application\views\template.php:9
2014-01-11 13:21:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-11 13:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 13:22:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-11 13:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 13:32:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\admin\edit.php [ 1 ] in file:line
2014-01-11 13:32:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 13:55:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin::method() ~ APPPATH\classes\Controller\Admin.php [ 74 ] in file:line
2014-01-11 13:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 13:57:45 --- CRITICAL: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\Controller\Admin.php [ 75 ] in file:line
2014-01-11 13:57:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\wamp\www\kev...', 75, Array)
#1 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(75): date()
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-11 14:04:10 --- CRITICAL: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\Controller\Admin.php [ 75 ] in file:line
2014-01-11 14:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\wamp\www\kev...', 75, Array)
#1 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(75): date()
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-11 14:28:41 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:1362
2014-01-11 14:28:41 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(81): Kohana_ORM->save()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:1362
2014-01-11 14:34:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admin.php [ 66 ] in file:line
2014-01-11 14:34:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 14:37:25 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php:137
2014-01-11 14:37:25 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/create')
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/create', NULL)
#2 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(100): Kohana_View::factory('admin/create')
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php:137
2014-01-11 14:38:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Admin.php [ 114 ] in file:line
2014-01-11 14:38:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 14:39:21 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php:113
2014-01-11 14:39:21 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(113): Kohana_ORM->delete()
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php:113
2014-01-11 14:45:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Admin.php [ 89 ] in file:line
2014-01-11 14:45:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 16:12:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\admin\edit.php [ 5 ] in C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php:5
2014-01-11 16:12:53 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 5, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\admin\template.php(28): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php:5
2014-01-11 16:13:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\admin\edit.php [ 5 ] in C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php:5
2014-01-11 16:13:01 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 5, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\admin\template.php(28): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\application\views\admin\edit.php:5
2014-01-11 16:39:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:633
2014-01-11 16:39:33 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\kev...', 633, Array)
#1 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#2 C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php(4): Kohana_ORM->__get('user')
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(34): Kohana_View->__toString()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#14 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php:633
2014-01-11 16:43:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\blog\detail.php [ 4 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php:4
2014-01-11 16:43:22 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\kev...', 4, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(34): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php:4
2014-01-11 16:43:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\blog\detail.php [ 4 ] in C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php:4
2014-01-11 16:43:42 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\kev...', 4, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\application\views\blog\template.php(34): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#12 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammerkohana\application\views\blog\detail.php:4
2014-01-11 16:47:46 --- CRITICAL: Database_Exception [ 1406 ]: Data too long for column 'url_title' at row 1 [ INSERT INTO `posts` (`date`, `author`, `title`, `url_title`, `status`, `excerpt`, `content`) VALUES ('2014-01-11 00:00:00', 1, 'Visual Studio style “Format Document” command with Sublime Text', 'visual-studio-style-format-document-command-with-sublime-text', 'published', 'I struggled a while trying to find a decent way to quickly indent and/or reindent code in Sublime Text similar to using the Format Document command in Visual Studio...', '	\n\n	I struggled a while trying to find a decent way to quickly indent and/or&nbsp;reindent code in Sublime Text similar to using the Format Document command in Visual Studio,&nbsp;so I thought I\'d share the solution I finally settled on for anyone else trying to accomplish the same thing. This doesn\'t function exactly like the Visual Studio command, but works very well in my opinion.\n\nAdd this under Preferences&gt;Key Bindings – User:\n[\n    { \"keys\": [\"ctrl+k\", \"ctrl+d\"], \"command\": \"reindent\", \"args\": {\"single_line\": false} }\n]\n') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kevinbrammerkohana\modules\database\classes\Kohana\Database\Query.php:251
2014-01-11 16:47:46 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kevinbrammerkohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Admin.php(88): Kohana_ORM->save()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kevinbrammerkohana\modules\database\classes\Kohana\Database\Query.php:251
2014-01-11 16:55:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in file:line
2014-01-11 16:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 16:55:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in file:line
2014-01-11 16:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line