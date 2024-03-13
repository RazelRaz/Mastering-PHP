<?php 

//preg_split('/(, |,)/', '')
// Builtin function - string to array

$drinks = explode(",", "Milk,Juice,Coke,Gatorade");

var_dump($drinks);
echo $drinks[2];

// Builtin function - array to string

$drinksString =join(", " ,$drinks);
echo $drinksString;