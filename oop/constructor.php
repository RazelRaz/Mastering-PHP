<?php
// Constructor

class person{
    // properties
    public $name = "No Name";
    public $age = "0";

    // constructor function
    function __construct($name = "No name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    //methods
    function show(){
       echo $this->name . " - " . $this->age;
    }

}

// object of person
$p1 = new person("John Doe", 30);
$p2 = new person("Razel Ahmed", 33);
$p3 = new person();

//set value of properties
// $p1->name = "Razel Ahmed";
// $p1->age = 33;

// call the function
$p1->show();
echo "<br>";
$p2->show();
echo "<br>";
$p3->show();