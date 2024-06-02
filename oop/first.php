<?php

class calculation{
    // properties
    public $a, $b, $c;

    //methods
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }


}

// object
$c1 = new calculation();
// object
$c2 = new calculation();

$c1->a = 20;
$c1->b = 15;

echo $c1->sum();

$c2->a = 44;
$c2->b = 20;

echo "<br>";
echo "Sub value of c2 " . $c2->sub();
echo "<br>";

echo "C1 is now with sub " . $c1->sub();
