<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-10 18:38:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/errors/404.php [ 6 ] in /home/www/musyme/application/views/errors/404.php:6
2015-10-10 18:38:16 --- DEBUG: #0 /home/www/musyme/application/views/errors/404.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 6, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/application/classes/HTTP/Exception/404.php(21): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/views/errors/404.php:6
2015-10-10 18:38:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: current_lang ~ APPPATH/views/template/header.php [ 23 ] in /home/www/musyme/application/views/template/header.php:23
2015-10-10 18:38:40 --- DEBUG: #0 /home/www/musyme/application/views/template/header.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 23, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/errors/404.php(23): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/application/classes/HTTP/Exception/404.php(21): Kohana_View->render()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/template/header.php:23
2015-10-10 18:41:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: current_lang ~ APPPATH/views/template/header.php [ 23 ] in /home/www/musyme/application/views/template/header.php:23
2015-10-10 18:41:15 --- DEBUG: #0 /home/www/musyme/application/views/template/header.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 23, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/errors/404.php(23): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/application/classes/HTTP/Exception/404.php(21): Kohana_View->render()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/template/header.php:23
2015-10-10 19:47:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `links` WHERE `category_id` = 1 ORDER BY `date_added` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-10-10 19:47:15 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(76): Kohana_Database_Query->execute()
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks(1)
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-10-10 19:50:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category_id ~ APPPATH/classes/Model/Links.php [ 91 ] in /home/www/musyme/application/classes/Model/Links.php:91
2015-10-10 19:50:42 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(91): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 91, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks()
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Links.php:91
2015-10-10 19:59:48 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'date_added' in order clause is ambiguous [ SELECT * FROM `links` LEFT JOIN `catalogs` ON (`links`.`catalog_id` = `catalogs`.`catalog_id`) LEFT JOIN `categories` ON (`categories`.`category_id` = `catalogs`.`category_id`) WHERE `categories`.`category_id` = 1 ORDER BY `date_added` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-10-10 19:59:48 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(90): Kohana_Database_Query->execute()
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks(1)
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-10-10 21:55:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Catalog' not found ~ APPPATH/classes/Model/Links.php [ 100 ] in file:line
2015-10-10 21:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-10 21:58:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Links.php [ 101 ] in /home/www/musyme/application/classes/Model/Links.php:101
2015-10-10 21:58:09 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(101): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 101, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks(1)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Links.php:101
2015-10-10 21:59:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Links.php [ 101 ] in /home/www/musyme/application/classes/Model/Links.php:101
2015-10-10 21:59:13 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(101): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 101, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks(1)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Links.php:101
2015-10-10 21:59:36 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Links.php [ 101 ] in /home/www/musyme/application/classes/Model/Links.php:101
2015-10-10 21:59:36 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(101): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/www/musym...', 101, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(51): Model_Links::getAllLinks(1)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Links.php:101