<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-21 19:38:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-21 19:38:34 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/www/musyme/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-21 19:51:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 19:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 19:53:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 19:53:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:04:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:04:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:09:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:14:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:14:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:14:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 20:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:16:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:16:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:22:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:22:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:22:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:23:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:24:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 20:24:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:27:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 71 ] in file:line
2015-09-21 20:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:29:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 73 ] in file:line
2015-09-21 20:29:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 20:29:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 88 ] in file:line
2015-09-21 20:29:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 88 ] in file:line
2015-09-21 22:19:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 88 ] in file:line
2015-09-21 22:19:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 88 ] in file:line
2015-09-21 22:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:19:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:20:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:20:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:20:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2015-09-21 22:20:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:21:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 22:21:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:21:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 22:21:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:21:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 22:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:21:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 22:21:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:21:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2015-09-21 22:21:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:44:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:44:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Dashboard.php [ 3 ] in file:line
2015-09-21 22:44:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:45:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Dashboard.php [ 11 ] in file:line
2015-09-21 22:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:46:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:50:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 24 ] in /home/www/musyme/application/views/template.php:24
2015-09-21 22:50:02 --- DEBUG: #0 /home/www/musyme/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 24, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/musyme/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/musyme/application/views/template.php:24
2015-09-21 22:54:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:55:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:55:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:56:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:56:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:56:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:56:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:56:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/Controller/Account.php [ 3 ] in file:line
2015-09-21 22:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:57:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 22:57:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 22:57:23 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/views/template/generic.php [ 25 ] in /home/www/musyme/application/views/template/generic.php:25
2015-09-21 22:57:23 --- DEBUG: #0 /home/www/musyme/application/views/template/generic.php(25): Kohana_Core::error_handler(2, 'include(): File...', '/home/www/musym...', 25, Array)
#1 /home/www/musyme/application/views/template/generic.php(25): include()
#2 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#3 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#4 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /home/www/musyme/application/classes/Controller/Template/Generic.php(65): Kohana_Controller_Template->after()
#6 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Generic->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/template/generic.php:25
2015-09-21 22:59:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'DATE' not found ~ APPPATH/config/musyme.php [ 6 ] in file:line
2015-09-21 22:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:00:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/adminheader.php [ 18 ] in /home/www/musyme/application/views/adminheader.php:18
2015-09-21 23:00:09 --- DEBUG: #0 /home/www/musyme/application/views/adminheader.php(18): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/musym...', 18, Array)
#1 /home/www/musyme/application/views/template/generic.php(25): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#3 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#4 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /home/www/musyme/application/classes/Controller/Template/Generic.php(65): Kohana_Controller_Template->after()
#6 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Generic->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/adminheader.php:18
2015-09-21 23:06:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:06:37 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(50): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:16:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_count` FROM `users` WHERE `username` = 'alex' AND `id` IS NOT NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:16:20 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `COUNT("...', false, Array)
#1 /home/www/musyme/application/classes/Model/Auth/User.php(117): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(287): Model_Auth_User->unique_key_exists('alex')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_checkusername()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:16:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-21 23:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:19:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:19:20 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(50): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:24:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 23:24:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:24:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_count` FROM `users` WHERE `username` = 'alex' AND `id` IS NOT NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:24:58 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `COUNT("...', false, Array)
#1 /home/www/musyme/application/classes/Model/Auth/User.php(117): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(287): Model_Auth_User->unique_key_exists('alex')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_checkusername()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:26:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_count` FROM `users` WHERE `username` = 'alext' AND `id` IS NOT NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:26:22 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `COUNT("...', false, Array)
#1 /home/www/musyme/application/classes/Model/Auth/User.php(117): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(287): Model_Auth_User->unique_key_exists('alext')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_checkusername()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:26:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_count` FROM `users` WHERE `username` = 'alex' AND `id` IS NOT NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:26:29 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `COUNT("...', false, Array)
#1 /home/www/musyme/application/classes/Model/Auth/User.php(117): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/application/classes/Controller/Account.php(287): Model_Auth_User->unique_key_exists('alex')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Account->action_checkusername()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-21 23:26:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 56 ] in file:line
2015-09-21 23:26:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:26:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 14 ] in file:line
2015-09-21 23:26:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:27:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 85 ] in file:line
2015-09-21 23:27:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:27:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 85 ] in file:line
2015-09-21 23:27:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:28:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 85 ] in file:line
2015-09-21 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:29:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Dashboard.php [ 34 ] in file:line
2015-09-21 23:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:30:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Dashboard.php [ 11 ] in file:line
2015-09-21 23:30:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:30:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Dashboard.php [ 11 ] in file:line
2015-09-21 23:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 23:31:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Account.php [ 105 ] in file:line
2015-09-21 23:31:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line