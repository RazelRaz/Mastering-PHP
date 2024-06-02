<?php
// inheritance

class emplyee{
    //properties
    public $name;
    public $age;
    public $salry;

    // constructor function
    function __construct($n="Null",$a="Null",$s="Null"){
        $this->name = $n;
        $this->age = $a;
        $this->salry = $s;
    }


    // method
    function emplyeeTable(){
        echo "<h2>Emplyee Table</h2>";
        echo "Name: $this->name" . "<br>";
        echo "Age: $this->age " . "<br>";
        echo "Salry: $this->salry " . "<br>";
    }

}


class manger extends emplyee {
    // properties
    public $ta = 1000;
    public $phone = 300;
    public $mainSalry;


    // method
    function emplyeeTable(){
        $this->mainSalry = $this->salry + $this->ta + $this->phone;
        echo "<h2>Manger Table</h2>";
        echo "Name: $this->name" . "<br>";
        echo "Age: $this->age " . "<br>";
        echo "Salry: $this->mainSalry " . "<br>";
    }    
}

$e1 = new manger("Robert Gracia",39,33000);
$em2 = new emplyee("John Doe", "56", "12000");
$e1->emplyeeTable();
$em2->emplyeeTable();

