<?php

// অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন

$student = [
  "fname" => "John",
  "lname" => "Doe",
  "roll" => "34",
  "age" => "17",
  "section" => "B",
];

echo $student["fname"] . " " . $student["lname"];
printf("%s %s", $student["fname"], $student["lname"]);

$serialized =  serialize($student);

$newStudent = unserialize($serialized);
print_r($newStudent);

$jsonData = json_encode($student);
echo $jsonData;

$newJsonData = json_decode($jsonData, true);
print_r($newJsonData);