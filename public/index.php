<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('../vendor/autoload.php');

use App\routes\WebRoute;

$webRoute = new WebRoute();
$webRoute->webRouter();