<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-30 19:17:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date_added ~ APPPATH/classes/Model/User.php [ 39 ] in /home/www/musyme/application/classes/Model/User.php:39
2015-10-30 19:17:56 --- DEBUG: #0 /home/www/musyme/application/classes/Model/User.php(39): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 39, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(79): Model_User::getUsers('', '')
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getUsers()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/User.php:39
2015-10-30 19:18:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date_added ~ APPPATH/classes/Model/User.php [ 39 ] in /home/www/musyme/application/classes/Model/User.php:39
2015-10-30 19:18:11 --- DEBUG: #0 /home/www/musyme/application/classes/Model/User.php(39): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 39, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(79): Model_User::getUsers('', '')
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getUsers()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/User.php:39
2015-10-30 19:24:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Model/User.php [ 40 ] in file:line
2015-10-30 19:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:29:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::has() ~ APPPATH/classes/Model/User.php [ 41 ] in file:line
2015-10-30 19:29:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:36:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getRoles() ~ APPPATH/classes/Model/User.php [ 40 ] in file:line
2015-10-30 19:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:36:39 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Model/User.php [ 40 ] in file:line
2015-10-30 19:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:37:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_RolesUsers' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-10-30 19:37:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:37:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_RolesUsers' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-10-30 19:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-30 19:40:15 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/User.php [ 40 ] in file:line
2015-10-30 19:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/www/musym...', 40, Array)
#1 /home/www/musyme/application/classes/Model/User.php(40): implode(',', Array)
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(79): Model_User::getUsers('', '')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getUsers()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-10-30 20:20:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Profile::$user ~ APPPATH/classes/Controller/Profile.php [ 67 ] in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:20:19 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Profile.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/musym...', 67, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Profile->action_changepass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:23:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Profile::$user ~ APPPATH/classes/Controller/Profile.php [ 67 ] in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:23:41 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Profile.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/musym...', 67, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Profile->action_changepass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:23:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Profile::$user ~ APPPATH/classes/Controller/Profile.php [ 67 ] in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:23:47 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Profile.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/musym...', 67, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Profile->action_changepass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:28:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Profile::$user ~ APPPATH/classes/Controller/Profile.php [ 67 ] in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 20:28:35 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Profile.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/musym...', 67, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Profile->action_changepass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Profile.php:67
2015-10-30 22:09:08 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/dashboard/nav.php [ 15 ] in /home/www/musyme/application/views/dashboard/nav.php:15
2015-10-30 22:09:08 --- DEBUG: #0 /home/www/musyme/application/views/dashboard/nav.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/www/musym...', 15, Array)
#1 /home/www/musyme/application/views/dashboard/changepassword.php(9): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#3 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#4 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#6 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#7 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#8 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/www/musyme/application/classes/Controller/Template/Admin.php(75): Kohana_Controller_Template->after()
#10 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /home/www/musyme/index.php(118): Kohana_Request->execute()
#16 {main} in /home/www/musyme/application/views/dashboard/nav.php:15