<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-20 11:43:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function run_q() ~ APPPATH/views/template/header.php [ 52 ] in file:line
2015-09-20 11:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 11:44:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function run_q() ~ APPPATH/views/template/header.php [ 52 ] in file:line
2015-09-20 11:44:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 12:35:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-20 12:35:17 --- DEBUG: #0 /home/www/musyme/system/classes/Kohana/View.php(145): Kohana_View->set_filename('home')
#1 /home/www/musyme/system/classes/Kohana/View.php(30): Kohana_View->__construct('home', NULL)
#2 /home/www/musyme/application/classes/Controller/Welcome.php(13): Kohana_View::factory('home')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/system/classes/Kohana/View.php:145
2015-09-20 13:39:43 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /home/www/musyme/application/classes/Controller/Welcome.php:7
2015-09-20 13:39:43 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/www/musym...', 7, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Welcome.php:7
2015-09-20 13:40:54 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /home/www/musyme/application/classes/Controller/Welcome.php:7
2015-09-20 13:40:54 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/www/musym...', 7, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Welcome.php:7
2015-09-20 14:07:50 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/www/musyme/modules/database/classes/Kohana/Database/MySQL.php:171
2015-09-20 14:07:50 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/www/musyme/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('catalog')
#3 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/www/musyme/application/classes/Model/Catalog.php(22): Kohana_ORM::factory('Catalog')
#8 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Catalog::listAll(1)
#9 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/MySQL.php:171
2015-09-20 14:08:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-09-20 14:08:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 14:10:30 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'vanquis_musyme.catalog' doesn't exist [ SHOW FULL COLUMNS FROM `catalog` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/MySQLi.php:321
2015-09-20 14:10:30 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/MySQLi.php(321): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('catalog')
#2 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/www/musyme/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/www/musyme/application/classes/Model/Catalog.php(22): Kohana_ORM::factory('Catalog')
#7 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Catalog::listAll(1)
#8 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/www/musyme/index.php(118): Kohana_Request->execute()
#14 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/MySQLi.php:321
2015-09-20 14:11:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Catalogs' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-20 14:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 14:21:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/views/home.php [ 3 ] in /home/www/musyme/application/views/home.php:3
2015-09-20 14:21:02 --- DEBUG: #0 /home/www/musyme/application/views/home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 3, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/www/musyme/application/classes/Controller/Welcome.php(15): Kohana_Response->body(Object(View))
#6 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/musyme/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/musyme/application/views/home.php:3
2015-09-20 14:21:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/views/home.php [ 3 ] in /home/www/musyme/application/views/home.php:3
2015-09-20 14:21:02 --- DEBUG: #0 /home/www/musyme/application/views/home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 3, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/www/musyme/application/views/template/layout.php(26): Kohana_View->__toString()
#5 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#6 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#7 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/www/musyme/application/classes/Controller/Mainapp.php(108): Kohana_Controller_Template->after()
#9 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Mainapp->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/www/musyme/index.php(118): Kohana_Request->execute()
#15 {main} in /home/www/musyme/application/views/home.php:3
2015-09-20 16:17:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_UserFunctions' not found ~ APPPATH/classes/Controller/Language.php [ 42 ] in file:line
2015-09-20 16:17:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 16:30:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/classes/Controller/Language.php [ 42 ] in /home/www/musyme/application/classes/Controller/Language.php:42
2015-09-20 16:30:33 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Language.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 42, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Language->action_changelangto()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Language))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Language.php:42
2015-09-20 16:40:28 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/header.php [ 18 ] in file:line
2015-09-20 16:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 19:51:08 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `links` WHERE `category_id` = '90' AND `language_id` = '9' ORDER BY `date_added` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-09-20 19:51:08 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(28): Kohana_Database_Query->execute()
#2 /home/www/musyme/application/classes/Controller/Catalog.php(20): Model_Links::getLinks('90', '9')
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251