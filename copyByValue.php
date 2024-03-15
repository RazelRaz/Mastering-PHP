<?php

$person = [
  "fname" => "John",
  "lname" => "Doe"
];


// copy by value or deep copy
// $newPerson = $person;
// $newPerson["lname"] = "Pablo";

//copy by reference or shallow copy
$newPerson = &$person;
$newPerson["lname"] = "Pablo";

// print_r($person);
// print_r($newPerson);

function printData($person){
  $person["fname"] .= " RAZZ";
  print_r($person);
}
printData($person);
print_r($person);

// function printData(&$person){
//   $person["fname"] .= " RAZZ";
//   print_r($person);
// }
// printData($person);
// print_r($person);