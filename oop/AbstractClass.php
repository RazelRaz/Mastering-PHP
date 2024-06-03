<?php

//Abstract Class

abstract class parentClass{
    // properties
    public $name;

    // method
    protected abstract function calc($a,$b);

}

class childClass extends parentClass{

    // method
    public function calc($c,$d){
        echo $c + $d;
    }
}

// $test = new parentClass();
$test = new childClass();

$test->calc(4,5);