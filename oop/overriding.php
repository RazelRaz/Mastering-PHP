<?php

//Overriding Properties & Methods:

class base {
    // properties
    public $name = "Parent Class";

    //methods
    public function calculation($a,$b){
        return $a * $b;
    }
}

class derived extends base {
    // properties
    public $name = "Child class";

    // methods
    public function calculation($a,$b){
        return $a + $b;
    }
}

// object
// $test = new base();
$test = new derived();

// echo $test->name;
echo $test->calculation(4,6);