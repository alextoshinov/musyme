<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-25 00:09:43 --- EMERGENCY: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 72 ] in file:line
2015-09-25 00:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/home/www/musym...', 72, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(72): json_decode(Array)
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getMovies()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in file:line