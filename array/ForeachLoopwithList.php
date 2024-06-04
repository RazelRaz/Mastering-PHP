<?php

// index array / without key
$employe = [
  [1, "John Doe", "CEO", 50000],
  [2, "Lisa Rob", "Manager", 30000],
  [3, "Steve Jobs", "Team Leader", 20000],
  [4, "Randy Bill", "Driver", 5000],
];

echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
foreach($employe as list($id, $name, $desi, $salry)){
  echo "<tr><td>$id</td> <td>$name</td> <td>$desi</td> <td>$salry </td></tr>";
}
echo "</table>";


// associative array / with key

$students = [
  [
    "id" => 123,
    "name" => "Razel Ahmed",
    "designation" => "Web Dev"
  ],
  [
    "id" => 564,
    "name" => "Sphie Plunket",
    "designation" => "UI/UX"
  ],
  [
    "id" => 898,
    "name" => "Jim Ribson",
    "designation" => "CEO"
  ],
];

foreach($students as list("id" => $id, "name" => $name, "designation" => $designation )){
  echo "$id $name $designation";
}