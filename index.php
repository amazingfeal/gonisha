<?php

include_once 'app/autoload.php';

$route = new route();
$route->get($mainRoute);

var_dump($_SERVER);
