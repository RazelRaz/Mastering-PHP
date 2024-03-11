<?php

$num = 13;

if(10 == $num) {
  echo 'Ten';
} elseif(12 == $num){
  echo 'Twelve';
} else {
  echo "A Number";
}

echo "\n";
echo "\n";
echo "<br>";
echo "<br>";

// $numberInWord = (12 == $num) ? "Twelve" : "A number";
$numberInWord = (12 == $num) ? "Twelve" : ((10 == $num) ? "Ten" : "A Number");
echo $numberInWord;

echo "\n";
echo "\n";

echo "<br>";
echo "<br>";

if($num % 2 == 0){
  echo "{$num} is Even Number";
} else {
  echo "{$num} is Odd Number";
}

echo "<br>";
echo "<br>";

$getNumb = ($num % 2 == 0) ? "{$num} EVEN NUMBER" : "{$num} ODD NUMBER";
echo $getNumb;
