<?php

//constructor

class team{
    // properties
    public $name;
    public $jersey;

    // constructor
    function __construct($name = "No Name",$jersey = "No color is avialable"){
        $this->name = $name;
        $this->jersey = $jersey;
    }
    
    //methods
    function show(){
        echo $this->name . " - " . $this->jersey;
    }
    
}

// object
$t1 = new team("Chelsea", "Blue");
$t2 = new team("MAN UTD", "RED");
$t3 = new team();


// $t1->name = "Spurs";
// $t1->jersey = "White";


// call the function
$t1->show();
$t2->show();
$t3->show();