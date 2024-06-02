<?php
// Inheritance

class employee{
    // properties
    public $name;
    public $age;
    public $salry;

    // constructor function
    function __construct($n="Null",$a="Null",$s="Null"){
        $this->name = $n;
        $this->age = $a;
        $this->salry = $s;
    }

    //method
    function showDetails(){
        echo "<h2>Employee Table</h2>";
        echo "Name: $this->name " . "<br>";
        echo "Age: $this->age " . "<br>";
        echo "Salry $this->salry " . "<br>";
    }

}


// Inhertance class manager which extends employee class
class manager extends employee{

        public $ta = 1000;
        public $phone = 300;
        public $mainSalry;

        //method
        function showDetails(){
            $this->mainSalry = $this->salry + $this->ta + $this->phone;

            echo "<h2>Manager Table</h2>";
            echo "Name: $this->name " . "<br>";
            echo "Age: $this->age " . "<br>";
            echo "Salry $this->mainSalry " . "<br>";
        }

}


// object
$e1 = new employee("Jeson Statham", "45", "33000");
$man1 = new manager("Alex Ferguson", "67", "50000");


$e1->showDetails();
$man1->showDetails();