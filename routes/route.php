<?php

include_once 'app/autoload.php';

class route
{

    public function __construct()
    {

    }

    public function get($mainRoute) {

        $url = common::url();

        for($i = 0; $i <= sizeof($mainRoute) - 1; $i += 2) {

            $paramExist = preg_match("/\?/", $url, $matches);
            if(!empty($paramExist)) {
                $params = substr($url, strpos($url, "?") + 1);
                $url = substr($url, 0 , strpos($url, "?"));
            }

        }
    }

}