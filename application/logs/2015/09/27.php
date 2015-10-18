<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-27 00:14:55 --- EMERGENCY: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Catalogs.php [ 73 ] in file:line
2015-09-27 00:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/home/www/musym...', 73, Array)
#1 /home/www/musyme/application/classes/Model/Catalogs.php(73): date('d.m.Y', '')
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(74): Model_Catalogs::getAll()
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-27 00:14:55 --- EMERGENCY: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Catalogs.php [ 73 ] in file:line
2015-09-27 00:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/home/www/musym...', 73, Array)
#1 /home/www/musyme/application/classes/Model/Catalogs.php(73): date('d.m.Y', '')
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(74): Model_Catalogs::getAll()
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-27 13:57:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view dashboard/catalog could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:57:04 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('dashboard/catal...')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('dashboard/catal...', NULL)
#2 /home/www/musyme/application/classes/Controller/Catalog.php(21): Kohana_View::factory('dashboard/catal...')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view catalog/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:03 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('catalog/index')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('catalog/index', NULL)
#2 /home/www/musyme/application/classes/Controller/Catalog.php(21): Kohana_View::factory('catalog/index')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view catalog/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:05 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('catalog/index')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('catalog/index', NULL)
#2 /home/www/musyme/application/classes/Controller/Catalog.php(21): Kohana_View::factory('catalog/index')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view catalog/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 13:59:11 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('catalog/index')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('catalog/index', NULL)
#2 /home/www/musyme/application/classes/Controller/Catalog.php(21): Kohana_View::factory('catalog/index')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-27 19:39:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/Catalog.php [ 112 ] in file:line
2015-09-27 19:39:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 19:40:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/Catalog.php [ 112 ] in file:line
2015-09-27 19:40:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 19:41:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/assets ~ MODPATH/image/classes/Kohana/Image.php [ 633 ] in /home/www/musyme/application/classes/Controller/Catalog.php:114
2015-09-27 19:41:20 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Catalog.php(114): Kohana_Image->save('/home/www/musym...')
#1 /home/www/musyme/application/classes/Controller/Catalog.php(67): Controller_Catalog->_save_image(Array)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Controller/Catalog.php:114
2015-09-27 19:42:06 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `catalogs` (`category_id`, `name`, `image_name`, `language_id`, `user_id`, `agegroup_id`, `date_added`, `is_public`) VALUES ('1', 'Test', ('1-april.jpg', 'image/jpeg', '/tmp/phpM87MFs', 0, 49242), '1', '9', '1', 1443372126, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 19:42:06 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ca...', false, Array)
#1 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/www/musyme/application/classes/Model/Catalogs.php(24): Kohana_ORM->save()
#4 /home/www/musyme/application/classes/Controller/Catalog.php(81): Model_Catalogs::addCatalog(Array)
#5 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/musyme/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 19:42:26 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `catalogs` (`category_id`, `name`, `image_name`, `language_id`, `user_id`, `agegroup_id`, `date_added`, `is_public`) VALUES ('1', 'Test', ('1-april.jpg', 'image/jpeg', '/tmp/phpQJ8q8M', 0, 49242), '1', '9', '1', 1443372146, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 19:42:26 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ca...', false, Array)
#1 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/www/musyme/application/classes/Model/Catalogs.php(24): Kohana_ORM->save()
#4 /home/www/musyme/application/classes/Controller/Catalog.php(81): Model_Catalogs::addCatalog(Array)
#5 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/musyme/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 19:46:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/images/catalog must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/www/musyme/application/classes/Controller/Catalog.php:108
2015-09-27 19:46:37 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Catalog.php(108): Kohana_Upload::save(Array, NULL, '/home/www/musym...')
#1 /home/www/musyme/application/classes/Controller/Catalog.php(67): Controller_Catalog->_save_image(Array)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Controller/Catalog.php:108
2015-09-27 19:50:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_public ~ APPPATH/classes/Controller/Catalog.php [ 78 ] in /home/www/musyme/application/classes/Controller/Catalog.php:78
2015-09-27 19:50:22 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Catalog.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 78, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Catalog.php:78
2015-09-27 20:22:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Catalog.php [ 43 ] in file:line
2015-09-27 20:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 20:23:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Catalog.php [ 43 ] in file:line
2015-09-27 20:23:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 20:23:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Catalog.php [ 43 ] in file:line
2015-09-27 20:23:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 20:24:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Model/Catalogs.php [ 43 ] in file:line
2015-09-27 20:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 20:24:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function prtint_r() ~ APPPATH/views/catalog/edit.php [ 4 ] in file:line
2015-09-27 20:24:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 20:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cayalog ~ APPPATH/views/catalog/edit.php [ 32 ] in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:24 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 32, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/www/musyme/application/classes/Controller/Catalog.php(48): Kohana_Response->body(Object(View))
#6 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cayalog ~ APPPATH/views/catalog/edit.php [ 32 ] in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:24 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 32, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/www/musyme/application/classes/Controller/Template/Admin.php(75): Kohana_Controller_Template->after()
#9 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/catalog/edit.php [ 32 ] in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:53 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 32, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/www/musyme/application/classes/Controller/Catalog.php(48): Kohana_Response->body(Object(View))
#6 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/catalog/edit.php [ 32 ] in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 20:35:53 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 32, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/www/musyme/application/classes/Controller/Template/Admin.php(75): Kohana_Controller_Template->after()
#9 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/application/views/catalog/edit.php:32
2015-09-27 21:03:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'alt' (T_STRING) ~ APPPATH/views/catalog/edit.php [ 48 ] in file:line
2015-09-27 21:03:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-27 21:03:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/catalog/edit.php [ 47 ] in /home/www/musyme/application/views/catalog/edit.php:47
2015-09-27 21:03:56 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 47, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/www/musyme/application/classes/Controller/Catalog.php(48): Kohana_Response->body(Object(View))
#6 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/catalog/edit.php:47
2015-09-27 21:03:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/catalog/edit.php [ 47 ] in /home/www/musyme/application/views/catalog/edit.php:47
2015-09-27 21:03:56 --- DEBUG: #0 /home/www/musyme/application/views/catalog/edit.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 47, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/www/musyme/application/classes/Controller/Template/Admin.php(75): Kohana_Controller_Template->after()
#9 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/application/views/catalog/edit.php:47
2015-09-27 22:17:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: count_movies ~ APPPATH/views/dashboard/dashboard.php [ 21 ] in /home/www/musyme/application/views/dashboard/dashboard.php:21
2015-09-27 22:17:59 --- DEBUG: #0 /home/www/musyme/application/views/dashboard/dashboard.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 21, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/www/musyme/application/classes/Controller/Template/Admin.php(75): Kohana_Controller_Template->after()
#9 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/application/views/dashboard/dashboard.php:21
2015-09-27 22:30:49 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'is_public' in where clause is ambiguous [ SELECT * FROM `links` LEFT JOIN `catalogs` ON (`links`.`catalog_id` = `catalogs`.`catalog_id`) LEFT JOIN `categories` ON (`categories`.`category_id` = `catalogs`.`category_id`) WHERE `categories`.`category_id` = 1 AND `is_public` = 1 ORDER BY `date_added` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 22:30:49 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(52): Kohana_Database_Query->execute()
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(23): Model_Links::countLinks(1)
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 23:14:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pk ~ APPPATH/classes/Controller/Catalog.php [ 87 ] in /home/www/musyme/application/classes/Controller/Catalog.php:87
2015-09-27 23:14:57 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Catalog.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 87, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Catalog.php:87
2015-09-27 23:32:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pk ~ APPPATH/classes/Controller/Catalog.php [ 87 ] in /home/www/musyme/application/classes/Controller/Catalog.php:87
2015-09-27 23:32:22 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Catalog.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 87, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Catalog.php:87