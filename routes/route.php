<?php

include_once 'app/autoload.php';

class route
{

    public function __construct()
    {
        
    }

    public function get($mainRoute) {

        $url = common::url();

        for($i = 0 ; $i <= sizeof($mainRoute) - 1; $i += 2) {

            $paramExist = preg_match( "/\?/", $url, $matches);
            if(!empty($paramExist)) {
                $params = substr($url, strpos($url, "?") + 1);
                $url = substr($url, 0 , strpos($url, "?"));
            }

            if($url == $mainRoute[$i]) {
                $controllers = $mainRoute[$i + 1];
                $controller = explode( "@" ,$controllers);
                $className = $controller[0];
                $conName = $controller[1];
                $class = new $className;
                $class->$conName();
            }
        }
    }

}