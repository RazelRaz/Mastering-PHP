<?php
// Unset Method

class Student {
    public $subject = "PHP";
    private $firstName;
    private $lastName;

    public function show($fname, $lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    public function __unset($property){
        unset($this->$property);
    }

}

$obj = new Student();

$obj->show("Jon","Doe");


// unset($obj->subject);
unset($obj->firstName);

print_r($obj);

// echo $obj->subject;