<?php

include_once 'app/autoload.php';
echo '<pre>' , var_dump($_SERVER) , '</pre>';
$route = new route();
$route->get($mainRoute);


