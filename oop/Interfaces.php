<?php
// Interfaces 

interface parent1{
  
  // method - we can declare methods but cant implement
  // also we cant use access modifier
  function calc($a, $b);

}

interface parent2{

  // methods
  function sub($c, $d);

}


class childClass implements parent1, parent2{
  public function calc($a, $b){
    echo $a + $b;
  }

  public function sub($a, $b){
    echo $a - $b;
  }
}

//object
$myTest = new childClass();

$myTest->calc(20,30);

$myTest->sub(40,15);