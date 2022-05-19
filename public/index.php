<?php

use App\core\Constantes;
use LDAP\Connection;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('../vendor/autoload.php');

use App\routes\WebRoute;

$webRoute = new WebRoute();
$webRoute->webRouter();