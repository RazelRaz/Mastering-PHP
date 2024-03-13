<?php

$cart = [
  "vegetables" => "tomatoes, lentil",
  "fruits" => "banana, orange, berry",
  "bevarage" => "soda, milk",
];

// $chkk = count($cart);
// echo $chkk;

// echo $cart["vegetables"];

// loop in associative-Array

foreach($cart as $key=>$value){
  echo $key." : ".$value."<br>";
}


echo "==========================";
echo "<br>";

//find key andvalues
$arraykeys = array_keys($cart);
print_r($arraykeys);

echo "<br>";

$arrayValues = array_values($cart);
print_r($arrayValues);


echo "<br>";
for($i = 0; $i < count($arraykeys); $i++){
  $key = $arraykeys[$i];
  echo $cart[$key];
}

echo "<br>";
echo "<br>";

for($i = 0; $i < count($arrayValues); $i++){
  $value = $arrayValues[$i];
  echo $value;
}


echo "==========================";
echo "<br>";

// adding a new value
$cart["bevarage"] = $cart["bevarage"].", juice";
$cart["vegetables"] = $cart["vegetables"].", Carot ";
foreach($cart as $key=>$value){
  echo $key." : ".$value."<br>";
}