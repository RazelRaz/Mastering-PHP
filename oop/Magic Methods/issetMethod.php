<?php
// isset Method: __isset

class Base {
    public $course;
    private $firstName;
    private $lastName;
    private $detail = ["name" => "Scot Haris", "age" => "34"];

    public function setName($fname,$lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    public function __isset($name)
    {
        return isset($this->detail[$name]);
    }

}

$obj = new Base();

$obj->setName("Mikel", "Oliver");

echo isset($obj->age);





