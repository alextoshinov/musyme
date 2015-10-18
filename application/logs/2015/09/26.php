<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-26 13:33:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: base_url ~ APPPATH/views/template/admin.php [ 22 ] in /home/www/musyme/application/views/template/admin.php:22
2015-09-26 13:33:58 --- DEBUG: #0 /home/www/musyme/application/views/template/admin.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 22, Array)
#1 /home/www/musyme/system/classes/Kohana/View.php(62): include('/home/www/musym...')
#2 /home/www/musyme/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/www/musym...', Array)
#3 /home/www/musyme/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/www/musyme/application/classes/Controller/Template/Admin.php(72): Kohana_Controller_Template->after()
#5 /home/www/musyme/system/classes/Kohana/Controller.php(87): Controller_Template_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/musyme/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/musyme/application/views/template/admin.php:22
2015-09-26 23:43:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: EN ~ APPPATH/classes/Model/Catalogs.php [ 72 ] in /home/www/musyme/application/classes/Model/Catalogs.php:72
2015-09-26 23:43:57 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Catalogs.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 72, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(74): Model_Catalogs::getAll()
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Catalogs.php:72
2015-09-26 23:43:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: EN ~ APPPATH/classes/Model/Catalogs.php [ 72 ] in /home/www/musyme/application/classes/Model/Catalogs.php:72
2015-09-26 23:43:57 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Catalogs.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/musym...', 72, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(74): Model_Catalogs::getAll()
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/Catalogs.php:72