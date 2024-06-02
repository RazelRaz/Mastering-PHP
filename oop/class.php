<?php

class calculation {
    // properties
    public $a, $b, $c;

    //methods
    function sum(){
        $this->c = $this->a + $this ->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// object
$c1 = new calculation();


$c1->a = 10;
$c1->b = 40;
echo $c1->sum();



