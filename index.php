<?php

/*errors*/
ini_set('display_errors',1);
ini_set("log_errors",1);
ini_set("error_log", "c:/wamp64/www/api-rest-php/php_error_log");

/* requires*/

require_once "controllers/ProductsController.php";

require_once "routes/routes.php";

Routers::routs();

