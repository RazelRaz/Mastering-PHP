<?php

interface myParent1{

   // method
   function plus($first, $second);
}
interface myParent2{

  //method
  function minus($a, $b);
}

class childClass implements myParent1, myParent2 {
  public function plus($first, $second){
    echo $first + $second;
  }
  public function minus($a, $b){
    echo $a - $b;
  }
}

// object
$myTest = new childClass();

$myTest->plus(7,3);
$myTest->minus(99,3);

