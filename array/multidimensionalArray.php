<?php

// Multidimensional Array

$employeeTable = [
    [
        "employee_id" => 1,
        "name" => "John Doe",
        "position" => "Software Engineer",
        "salary" => 70000,
        "department" => "IT"
    ],
    [
        "employee_id" => 2,
        "name" => "Jane Smith",
        "position" => "Project Manager",
        "salary" => 85000,
        "department" => "Management"
    ],
    [
        "employee_id" => 3,
        "name" => "Sam Brown",
        "position" => "Data Analyst",
        "salary" => 65000,
        "department" => "Data Science"
    ],
    [
        "employee_id" => 4,
        "name" => "Emily Davis",
        "position" => "UX Designer",
        "salary" => 72000,
        "department" => "Design"
    ],
    [
        "employee_id" => 5,
        "name" => "Michael Wilson",
        "position" => "DevOps Engineer",
        "salary" => 78000,
        "department" => "IT"
    ]
];

echo "<pre>";
print_r($employeeTable);
echo "<pre>";

echo "<br>";
echo "<br>";

echo $employeeTable[3]["name"];

echo "<br>";
echo "<br>";

for($row = 0; $row < count($employeeTable); $row++){
    foreach($employeeTable[$row] as $key => $value){
        echo $key . " : " . $value . " ";
    }
    echo "<br>";
}

