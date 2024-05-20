<?php

$teams = ["man utd","Spurs","chelsea"];

foreach($teams as $value){
    echo $value . "<br>";
}

echo "<br>";
echo "<br>";

$students = [
    "jhon" => "45",
    "Rob" => "34",
    "jen" => "13",
];

echo "<ul>";
foreach($students as $key => $student){
    echo "<li>$key  =  $student </li>";
}
echo "</ul>";