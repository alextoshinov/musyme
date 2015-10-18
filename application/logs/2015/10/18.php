<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-18 00:19:29 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Dashboard.php [ 145 ] in /home/www/musyme/application/classes/Controller/Dashboard.php:145
2015-10-18 00:19:29 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Dashboard.php(145): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/www/musym...', 145, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_newMovie()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Dashboard.php:145
2015-10-18 00:20:32 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Dashboard.php [ 145 ] in /home/www/musyme/application/classes/Controller/Dashboard.php:145
2015-10-18 00:20:32 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Dashboard.php(145): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/www/musym...', 145, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_newMovie()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Dashboard.php:145