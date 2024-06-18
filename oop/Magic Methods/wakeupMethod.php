<?php

// Wakeup method
class Base {
    public $myCourse = "PHP";
    private $firstName;
    private $lastName;

    public function setNewName($fname,$lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    public function __sleep()
    {
        return array("firstName","lastName");
    }

    public function __wakeup()
    {
        return "Im a Wakeup Method";
    }

}

// object
$myObj = new Base();

$myObj->setNewName("John","Devis");

$mySrl = serialize($myObj);

// echo $mySrl;

$unSrl = unserialize($mySrl);

print_r($unSrl);