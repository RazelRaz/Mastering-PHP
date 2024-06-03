<?php

// Access Modifier

class base{
    //properties
    private $name;

    //constructor function
    public function __construct($n){
        $this->name = $n;
    }

    //method
    private function show(){
       echo "Name: $this->name " . "<br>";
    }


}

class derived extends base {
    public function get(){
        echo "Name: $this->name " . "<br>";
    }
}

//object
$test = new base("Razel Ahmed");
// $test = new derived("Raz");
//overwrite value
// $test->name = "Ahmed";

$test->show();
