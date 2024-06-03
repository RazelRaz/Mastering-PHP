<?php

abstract class parentClass{
    // properties
    public $name;

    //methods
    abstract protected function calc($a,$b);
}

// new class
class childClass extends parentClass {
    public function calc($c,$d){
        echo $c + $d;
    }
}

//object
$test = new childClass();

$test->calc(4,7);