<?php

 $student = [
  "fname" => "Razel",
  "lname" => "Ahmed",
];

print_r($student);

unset($student["lname"]);

print_r($student);
