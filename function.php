<?php

include_once "function.php";

function isEven($n){ //parameter
  if($n % 2 == 0){
    return true;
  }
  return false;
}

$x = 10;

if(isEven($x)){ //argument
  echo "{$x} is a even Number";
} else {
  echo "{$x} is AN odd Number";
}