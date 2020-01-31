<?php

include_once 'app/autoload.php';
<<<<<<< HEAD
echo '<pre>' , var_dump($_SERVER) , '</pre>';
=======

$mainRoute = [

    '/'                          , 'Controller@index',
    
];

>>>>>>> a18aadc8110ffab68e67aee7f5e2730ded52bf58
$route = new route();
$route->get($mainRoute);


