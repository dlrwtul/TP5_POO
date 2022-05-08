<?php

require_once('../vendor/autoload.php');
use App\Models\User;

$user = new User();
$user->setId(1);
echo $user->getId();