<?php

// Static Members - Example No. 2

class staticMem {
    public static $name = "Jos Butler";

}

// inheritance class
// if we use a property into inheritance class than we will use: parent::
class deriveStatic extends staticMem {
    
    public static function show(){
        echo parent::$name;
    }
}

$myTest = new deriveStatic();

$myTest->show();