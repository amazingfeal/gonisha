<?php

class Common {
    public static function URL()
        $adress=$_SERVER['REQUEST_URI'];
        echo $adress;


}

echo Common::URL()