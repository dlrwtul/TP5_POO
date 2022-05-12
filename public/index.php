<?php

require_once('../vendor/autoload.php');

use App\routes\WebRoute;

$webRoute = new WebRoute();
$webRoute->webRouter();