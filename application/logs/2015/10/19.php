<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-19 00:15:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: movie ~ APPPATH/classes/Controller/Dashboard.php [ 310 ] in /home/www/musyme/application/classes/Controller/Dashboard.php:310
2015-10-19 00:15:47 --- DEBUG: #0 /home/www/musyme/application/classes/Controller/Dashboard.php(310): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 310, Array)
#1 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_editsongs()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/musyme/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/musyme/application/classes/Controller/Dashboard.php:310
2015-10-19 00:30:48 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_User::getUsers(), called in /home/www/musyme/application/classes/Controller/Dashboard.php on line 79 and defined ~ APPPATH/classes/Model/User.php [ 25 ] in /home/www/musyme/application/classes/Model/User.php:25
2015-10-19 00:30:48 --- DEBUG: #0 /home/www/musyme/application/classes/Model/User.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/musym...', 25, Array)
#1 /home/www/musyme/application/classes/Controller/Dashboard.php(79): Model_User::getUsers()
#2 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_getUsers()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/musyme/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/musyme/application/classes/Model/User.php:25