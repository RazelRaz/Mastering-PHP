<?php
// Define the multidimensional associative array
$marks = [
  "Alice" => [
    "Math" => 85,
    "Science" => 92,
    "English" => 78
  ],
  "Bob" => [
    "Math" => 74,
    "Science" => 81,
    "English" => 69
  ],
  "Charlie" => [
    "Math" => 89,
    "Science" => 94,
    "English" => 85
  ]
];

// echo "<pre>";
// print_r($marks);
// echo "</pre>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
        <th>Name</th>
        <th>Math</th>
        <th>Science</th>
        <th>English</th>
    </tr>";
foreach ($marks as $key => $v1) {
  echo "<tr>
        <td>$key</td>";
  foreach ($v1 as $v2) {
    echo "<td>$v2</td>";
  }
  echo "</tr>";
}
echo "</table>";



