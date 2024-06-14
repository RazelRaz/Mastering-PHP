<?php
// isset Method: __isset

class Base {
    public $course;
    private $firstName;
    private $lastName;
    private $detail = ["name" => "Scot Haris", "age" => "34"];

    public function show($fname,$lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    // public function __isset($property){
    //     return isset($this->$property);
    // }

    public function __isset($name){
        return isset($this->detail[$name]);
    }
}

$obj = new Base();

// setting value of private properties
// $obj->show("Tom", "Moody");

echo isset($obj->age);



