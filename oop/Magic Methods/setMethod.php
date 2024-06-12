<?php
// set Method

class Student {
    private $name;

    // method
    public function show(){
       echo $this->name;
    }

    public function __set($property, $value){
        // echo "You are tring to access Non existing or Private property($property, $value)";
        if(property_exists($this, $property)){
            $this->$property = $value;
        } else {
            echo "property not found : $property";
        }
    }
}

$obj = new Student();
$obj->name = "Joshua Kmich";
$obj->show();