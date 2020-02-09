<?php



function url()
{

    $adress = $_SERVER['REQUEST_URI'];

    $url = str_replace("/gonisha/", "/", $adress);
    return $url;
}

function baseUrl(){
  global $config;
  return $config['base'];
}


