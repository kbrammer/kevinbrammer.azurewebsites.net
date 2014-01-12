<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-05 18:59:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::url() ~ APPPATH\views\template.php [ 44 ] in file:line
2014-01-05 18:59:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 18:59:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::url() ~ APPPATH\views\template.php [ 44 ] in file:line
2014-01-05 18:59:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 19:00:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_URL::title(), called in C:\wamp\www\kevinbrammerkohana\application\views\template.php on line 48 and defined ~ SYSPATH\classes\Kohana\URL.php [ 190 ] in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\URL.php:190
2014-01-05 19:00:41 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\URL.php(190): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\kev...', 190, Array)
#1 C:\wamp\www\kevinbrammerkohana\application\views\template.php(48): Kohana_URL::title()
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\URL.php:190
2014-01-05 19:01:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: script_name ~ APPPATH\views\template.php [ 46 ] in C:\wamp\www\kevinbrammerkohana\application\views\template.php:46
2014-01-05 19:01:13 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\views\template.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\kev...', 46, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kevinbrammerkohana\application\views\template.php:46
2014-01-05 21:41:28 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_blog(), called in C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Home.php [ 60 ] in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Home.php:60
2014-01-05 21:41:28 --- DEBUG: #0 C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Home.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\kev...', 60, Array)
#1 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kevinbrammerkohana\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kevinbrammerkohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kevinbrammerkohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kevinbrammerkohana\application\classes\Controller\Home.php:60