<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-04 20:32:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: URL ~ APPPATH/classes/Model/Links.php [ 185 ] in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:32:24 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 185, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(202): Model_Links::checkIfExpired(Array, '94b515d9')
#2 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Links::updatePublish()
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:34:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: URL ~ APPPATH/classes/Model/Links.php [ 185 ] in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:34:14 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 185, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(202): Model_Links::checkIfExpired(Array, '94b515d9')
#2 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Links::updatePublish()
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:35:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: URL ~ APPPATH/classes/Model/Links.php [ 185 ] in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:35:42 --- DEBUG: #0 /home/www/musyme/application/classes/Model/Links.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/musym...', 185, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(202): Model_Links::checkIfExpired(Array, '94b515d9')
#2 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Links::updatePublish()
#3 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/musyme/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/musyme/application/classes/Model/Links.php:185
2015-11-04 20:36:06 --- EMERGENCY: ErrorException [ 2 ]: get_headers(): Filename cannot be empty ~ APPPATH/classes/Model/Links.php [ 186 ] in file:line
2015-11-04 20:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'get_headers(): ...', '/home/www/musym...', 186, Array)
#1 /home/www/musyme/application/classes/Model/Links.php(186): get_headers('')
#2 /home/www/musyme/application/classes/Model/Links.php(203): Model_Links::checkIfExpired(Array, '94b515d9')
#3 /home/www/musyme/application/classes/Controller/Welcome.php(13): Model_Links::updatePublish()
#4 /home/www/musyme/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/musyme/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/www/musyme/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/musyme/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/musyme/index.php(118): Kohana_Request->execute()
#10 {main} in file:line