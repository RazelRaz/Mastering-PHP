<?php
// Static Members - Example No. 1

class baseStatic {
    // properties
    public static $name = "John Doe";

    // methods
    public static function show(){
        echo self::$name;
    }

    // contructor function
    public function __construct($nam){
        self::$name = $nam;
    }
}

// echo baseStatic::$name;
// baseStatic::show();

// object
$test = new baseStatic("Razel Ahmed");
$test->show();


