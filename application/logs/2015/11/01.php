<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-01 11:41:35 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Agegroup as array ~ APPPATH/classes/Model/Agegroup.php [ 27 ] in file:line
2015-11-01 11:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-01 11:58:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/Dashboard.php [ 429 ] in /home/www/musyme/application/classes/Controller/Dashboard.php:429
2015-11-01 11:58:22 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Dashboard.php(429): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 429, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_newAgegroup()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Dashboard.php:429
2015-11-01 12:18:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Agegroup::getAgegroupById() ~ APPPATH/classes/Controller/Dashboard.php [ 487 ] in file:line
2015-11-01 12:18:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-01 13:13:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: final ~ APPPATH/classes/Model/Catalogs.php [ 99 ] in /home/www/musyme/application/classes/Model/Catalogs.php:99
2015-11-01 13:13:30 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Catalogs.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 99, Array)
#1 /home/www/musyme/application/classes/Helper/Catalogs.php(8): Model_Catalogs::getAllSelect(1, NULL)
#2 /home/www/musyme/application/views/dashboard/movies/edit.php(68): Helper_Catalogs::selectCatalogs(1, '37')
#3 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#4 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#5 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /home/www/musyme/application/classes/Controller/Dashboard.php(391): Kohana_Response->body(Object(View))
#8 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_editmovies()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#11 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/www/musyme/index.php(118): Kohana_Request->execute()
#14 {main} in /home/www/musyme/application/classes/Model/Catalogs.php:99
2015-11-01 13:13:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: final ~ APPPATH/classes/Model/Catalogs.php [ 99 ] in /home/www/musyme/application/classes/Model/Catalogs.php:99
2015-11-01 13:13:30 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Catalogs.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 99, Array)
#1 /home/www/musyme/application/classes/Helper/Catalogs.php(8): Model_Catalogs::getAllSelect(1, NULL)
#2 /home/www/musyme/application/views/dashboard/movies/edit.php(68): Helper_Catalogs::selectCatalogs(1, '37')
#3 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#4 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#5 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#7 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#8 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#9 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/www/musyme/application/classes/Controller/Template/Admin.php(77): Kohana_Controller_Template->after()
#11 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#14 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/www/musyme/index.php(118): Kohana_Request->execute()
#17 {main} in /home/www/musyme/application/classes/Model/Catalogs.php:99
2015-11-01 13:34:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'link.url' in 'field list' [ SELECT `links`.`link_id`, `link`.`url`, `link`.`source_id`, `link`.`title`, `link`.`catalog_id`, `link`.`image_name`, `link`.`language_id`, `link`.`agegroup_id`, `link`.`date_added`, `link`.`is_public` FROM `links` LEFT JOIN `catalogs` ON (`links`.`catalog_id` = `catalogs`.`catalog_id`) LEFT JOIN `categories` ON (`categories`.`category_id` = `catalogs`.`category_id`) WHERE `categories`.`category_id` = 1 ORDER BY `links`.`date_added` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-11-01 13:34:34 --- DEBUG: #0 /home/www/musyme/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `links`....', false, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(102): Kohana_Database_Query->execute()
#2 /home/www/musyme/application/classes/Controller/Dashboard.php(52): Model_Links::getAllLinks(1)
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/modules/database/classes/Kohana/Database/Query.php:251
2015-11-01 16:11:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Helper_Agegropu' not found ~ APPPATH/views/dashboard/songs/new.php [ 71 ] in file:line
2015-11-01 16:11:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-01 17:22:54 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Helper_Catalogs::selectCatalogs(), called in /home/www/musyme/application/views/dashboard/songs/new.php on line 64 and defined ~ APPPATH/classes/Helper/Catalogs.php [ 5 ] in /home/www/musyme/application/classes/Helper/Catalogs.php:5
2015-11-01 17:22:54 --- DEBUG: #0 /home/www/musyme/application/classes/Helper/Catalogs.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/musym...', 5, Array)
#1 /home/www/musyme/application/views/dashboard/songs/new.php(64): Helper_Catalogs::selectCatalogs(2)
#2 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#3 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#4 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/www/musyme/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/www/musyme/application/classes/Controller/Dashboard.php(478): Kohana_Response->body(Object(View))
#7 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_newSong()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#10 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/www/musyme/index.php(118): Kohana_Request->execute()
#13 {main} in /home/www/musyme/application/classes/Helper/Catalogs.php:5
2015-11-01 17:22:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Helper_Catalogs::selectCatalogs(), called in /home/www/musyme/application/views/dashboard/songs/new.php on line 64 and defined ~ APPPATH/classes/Helper/Catalogs.php [ 5 ] in /home/www/musyme/application/classes/Helper/Catalogs.php:5
2015-11-01 17:22:55 --- DEBUG: #0 /home/www/musyme/application/classes/Helper/Catalogs.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/musym...', 5, Array)
#1 /home/www/musyme/application/views/dashboard/songs/new.php(64): Helper_Catalogs::selectCatalogs(2)
#2 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#3 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#4 /home/www/musyme/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/www/musyme/application/views/template/admin.php(32): Kohana_View->__toString()
#6 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#7 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#8 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/www/musyme/application/classes/Controller/Template/Admin.php(77): Kohana_Controller_Template->after()
#10 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#13 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /home/www/musyme/index.php(118): Kohana_Request->execute()
#16 {main} in /home/www/musyme/application/classes/Helper/Catalogs.php:5