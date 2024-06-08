<?php

// late Static Binding

class lateStaticBinding {
    // properties
    protected static $name = "Razel";

    //methods
    public function show(){
        echo static::$name;
        echo self::$name;
    }
}

// inheritance class: 
class dereived extends lateStaticBinding{
    protected static $name = "CR7";
}

$lateTest = new dereived();
$lateTest->show();






