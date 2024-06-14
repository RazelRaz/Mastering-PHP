<?php

class Base {

    public static $name = "John Tavis";

}

class derived extends Base {

    public static function show(){
        echo parent::$name;
    }

}

$nwObj = new derived();
$nwObj->show();

