<?php

include_once 'app/autoload.php';

$mainRoute = [

    '/'                          , 'Controller@index',
    
];

$route = new route();
$route->get($mainRoute);


