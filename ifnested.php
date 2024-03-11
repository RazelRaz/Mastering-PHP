<?php

$condition1 = false;
$condition2 = true;
$condition3 = true;

if($condition1 && $condition2 && $condition3) {
  echo "True";
} elseif ($condition1 && $condition2){
  echo "Numbner 1";
} elseif ($condition1) {
  echo "Numbner 2";
} else {
  echo "No 3";
}