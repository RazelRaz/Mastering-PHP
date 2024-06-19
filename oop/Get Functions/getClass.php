<?php
// get_class
/*
get_class
Returns the name of the class of an object
*/

class myClass {
    public function gtClass(){
        echo "Class name is " . get_class($this) . "<br>";
    }
}

$obj = new myClass();
$obj->gtClass();

// we can call it outside class also
echo "Class name " . get_class($obj) . "<br>";