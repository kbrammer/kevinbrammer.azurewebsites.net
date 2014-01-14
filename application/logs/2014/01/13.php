<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-13 19:00:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$xml' (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 113 ] in file:line
2014-01-13 19:00:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-13 19:00:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\blog\template.php [ 45 ] in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\blog\template.php:45
2014-01-13 19:00:44 --- DEBUG: #0 C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\blog\template.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\kev...', 45, Array)
#1 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(61): include('C:\wamp\www\kev...')
#2 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\kev...', Array)
#3 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Controller\Base.php(39): Kohana_Controller_Template->after()
#5 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\kevinbrammer.azurewebsites.net\application\classes\Request\Client\Internal.php(30): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kevinbrammer.azurewebsites.net\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kevinbrammer.azurewebsites.net\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kevinbrammer.azurewebsites.net\application\views\blog\template.php:45