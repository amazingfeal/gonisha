<?php

include_once 'app/autoload.php';

var_dump($_SERVER);

$route = new route();
$route->get($mainRoute);