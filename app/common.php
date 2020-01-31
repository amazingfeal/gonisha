<?php

class Common {

    public static function url()
    {

        $adress = "$_SERVER['REQUEST_URI']";

        $url = str_replace("/gonisha/", "/", $adress);
        return $url;
    }

}
