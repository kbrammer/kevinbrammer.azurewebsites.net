<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-12 09:54:42 --- CRITICAL: ErrorException [ 2 ]: DOMDocument::loadHTML(): htmlParseEntityRef: expecting ';' in Entity, line: 1 ~ APPPATH\views\home\music.php [ 50 ] in file:line
2014-01-12 09:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', 'C:\wamp\www\kev...', 50, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(50): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 09:57:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Home.php [ 35 ] in file:line
2014-01-12 09:57:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 09:58:10 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Home.php [ 36 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php:36
2014-01-12 09:58:10 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php(36): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\kev...', 36, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(84): Controller_Home->action_music()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php:36
2014-01-12 09:58:49 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Home.php [ 36 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php:36
2014-01-12 09:58:49 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php(36): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\kev...', 36, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(84): Controller_Home->action_music()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php:36
2014-01-12 10:00:11 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\test.html): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Home.php [ 38 ] in file:line
2014-01-12 10:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\kev...', 38, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php(38): file_get_contents('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(84): Controller_Home->action_music()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-12 10:01:24 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller../../views/home/test.html): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Home.php [ 38 ] in file:line
2014-01-12 10:01:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\kev...', 38, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Home.php(38): file_get_contents('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(84): Controller_Home->action_music()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-12 10:09:03 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home\music.php [ 57 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:57
2014-01-12 10:09:03 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(57): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\kev...', 57, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:57
2014-01-12 10:16:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DOMNodeList::query() ~ APPPATH\views\home\music.php [ 59 ] in file:line
2014-01-12 10:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 10:18:57 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to DOMXPath::__construct() must be an instance of DOMDocument, instance of DOMElement given, called in C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php on line 61 and defined ~ APPPATH\views\home\music.php [ 58 ] in file:line
2014-01-12 10:18:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\kev...', 58, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(58): DOMXPath->__construct(Object(DOMElement))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 10:21:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DOMElement::childNodes() ~ APPPATH\views\home\music.php [ 59 ] in file:line
2014-01-12 10:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 10:22:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DOMNodeList::query() ~ APPPATH\views\home\music.php [ 59 ] in file:line
2014-01-12 10:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 10:23:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to DOMXPath::__construct() must be an instance of DOMDocument, instance of DOMNodeList given, called in C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php on line 61 and defined ~ APPPATH\views\home\music.php [ 62 ] in file:line
2014-01-12 10:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\kev...', 62, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(62): DOMXPath->__construct(Object(DOMNodeList))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 10:28:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to DOMXPath::__construct() must be an instance of DOMDocument, instance of DOMNodeList given, called in C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php on line 61 and defined ~ APPPATH\views\home\music.php [ 67 ] in file:line
2014-01-12 10:28:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\kev...', 67, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(67): DOMXPath->__construct(Object(DOMNodeList))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 10:36:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DOMNodeList::query() ~ APPPATH\views\home\music.php [ 73 ] in file:line
2014-01-12 10:36:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 10:41:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type DOMNodeList as array ~ SYSPATH\classes\Kohana\Arr.php [ 282 ] in file:line
2014-01-12 10:41:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 10:42:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DOMNodeList::$firstChild ~ APPPATH\views\home\music.php [ 71 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:71
2014-01-12 10:42:35 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(71): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 71, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:71
2014-01-12 10:53:08 --- CRITICAL: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH\views\home\music.php [ 62 ] in file:line
2014-01-12 10:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', 'C:\wamp\www\kev...', 62, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(62): DOMXPath->query(Object(DOMXPath))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(80): getHTMLXpath('<!DOCTYPE html ...', '//td[@class = "...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2014-01-12 10:55:21 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home\music.php [ 74 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:74
2014-01-12 10:55:21 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\kev...', 74, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:74
2014-01-12 11:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DOMText::$tagName ~ APPPATH\views\home\music.php [ 94 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:94
2014-01-12 11:26:29 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\kev...', 94, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:94
2014-01-12 11:30:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\home\music.php [ 97 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:97
2014-01-12 11:30:37 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 97, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:97
2014-01-12 11:33:04 --- CRITICAL: ErrorException [ 2 ]: print_r(): Not yet implemented ~ APPPATH\views\home\music.php [ 89 ] in file:line
2014-01-12 11:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r(): Not ...', 'C:\wamp\www\kev...', 89, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(89): print_r(Object(DOMAttr))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 11:33:34 --- CRITICAL: ErrorException [ 2 ]: print_r(): Not yet implemented ~ APPPATH\views\home\music.php [ 89 ] in file:line
2014-01-12 11:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r(): Not ...', 'C:\wamp\www\kev...', 89, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(89): print_r(Object(DOMAttr))
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-01-12 11:35:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: event_html ~ APPPATH\views\home\music.php [ 84 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:84
2014-01-12 11:35:51 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 84, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\template.php(27): Kohana_View->__toString()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#6 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\home\music.php:84
2014-01-12 11:50:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:50:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:53:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:53:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:55:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:55:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:56:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:56:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:56:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:56:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:56:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:56:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:56:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:57:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:57:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-12 11:57:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2014-01-12 11:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line