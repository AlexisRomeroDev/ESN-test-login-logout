<?php

require __DIR__ . "/vendor/autoload.php";

use App\Services\Security;

$security = new Security();
$security->init();
$security->login(Security::EMAIL, Security::PWD);

var_dump($_SESSION);

$security->logout();

var_dump($_SESSION);
