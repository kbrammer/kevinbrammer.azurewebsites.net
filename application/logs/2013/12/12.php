<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-12 10:09:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\template.php [ 24 ] in file:line
2013-12-12 10:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 10:09:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagename ~ APPPATH\views\template.php [ 54 ] in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:09:36 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\views\template.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ter...', 54, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(61): include('C:\wamp\www\ter...')
#2 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\ter...', Array)
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:09:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagename ~ APPPATH\views\template.php [ 54 ] in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:09:59 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\views\template.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ter...', 54, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(61): include('C:\wamp\www\ter...')
#2 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\ter...', Array)
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:10:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagename ~ APPPATH\views\template.php [ 54 ] in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:10:12 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\views\template.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ter...', 54, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(61): include('C:\wamp\www\ter...')
#2 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\ter...', Array)
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:11:24 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\home.php [ 27 ] in file:line
2013-12-12 10:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 10:11:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagename ~ APPPATH\views\template.php [ 54 ] in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:11:55 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\views\template.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ter...', 54, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(61): include('C:\wamp\www\ter...')
#2 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\ter...', Array)
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\application\views\template.php:54
2013-12-12 10:13:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function bloginfo() ~ APPPATH\views\template.php [ 74 ] in file:line
2013-12-12 10:13:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 11:51:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\terra-ats\portal\system\classes\Kohana\Cookie.php:67
2013-12-12 11:51:30 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('SESS29af1facda0...', NULL)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('SESS29af1facda0...')
#2 C:\wamp\www\terra-ats\portal\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\terra-ats\portal\system\classes\Kohana\Cookie.php:67
2013-12-12 12:15:59 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 39 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:39
2013-12-12 12:15:59 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(39): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 39, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:39
2013-12-12 12:16:07 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 39 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:39
2013-12-12 12:16:07 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(39): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 39, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:39
2013-12-12 12:16:43 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 40 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:16:43 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(40): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 40, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:16:47 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 40 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:16:47 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(40): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 40, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:16:51 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 40 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:16:51 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(40): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 40, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:17:10 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 40 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:17:10 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(40): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 40, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:40
2013-12-12 12:18:21 --- CRITICAL: View_Exception [ 0 ]: The requested view home/company could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 12:18:21 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home/company')
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(30): Kohana_View->__construct('home/company', NULL)
#2 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(50): Kohana_View::factory('home/company')
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 12:49:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\Controller\home.php [ 52 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:52
2013-12-12 12:49:01 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\ter...', 52, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_recent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:52
2013-12-12 12:50:11 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 55 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:55
2013-12-12 12:50:11 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(55): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 55, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_recent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:55
2013-12-12 12:52:00 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 56 ] in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:56
2013-12-12 12:52:00 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(56): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\ter...', 56, Array)
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_recent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php:56
2013-12-12 13:06:40 --- CRITICAL: View_Exception [ 0 ]: The requested view home/networking could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 13:06:40 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home/networking')
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(30): Kohana_View->__construct('home/networking', NULL)
#2 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(75): Kohana_View::factory('home/networking')
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_virus_removal()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\terra-ats\portal\application\classes\Request\Client\internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 13:06:49 --- CRITICAL: View_Exception [ 0 ]: The requested view home/networking could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 13:06:49 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home/networking')
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(30): Kohana_View->__construct('home/networking', NULL)
#2 C:\wamp\www\terra-ats\portal\application\classes\Controller\home.php(75): Kohana_View::factory('home/networking')
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Home->action_virus_removal()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\terra-ats\portal\application\classes\Request\Client\internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 14:47:53 --- CRITICAL: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137
2013-12-12 14:47:53 --- DEBUG: #0 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(137): Kohana_View->set_filename('error/404')
#1 C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php(30): Kohana_View->__construct('error/404', NULL)
#2 C:\wamp\www\terra-ats\portal\application\classes\Controller\error.php(40): Kohana_View::factory('error/404')
#3 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Controller.php(84): Controller_Error->action_404()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Error))
#6 C:\wamp\www\terra-ats\portal\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\terra-ats\portal\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\terra-ats\portal\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\terra-ats\portal\system\classes\Kohana\View.php:137