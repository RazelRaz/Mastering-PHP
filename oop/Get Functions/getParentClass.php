<?php
// get_parent_class
/*
get_parent_class
Retrieves the parent class name for object or class
*/

class myyparentClass {

}

class mchildClass extends myyparentClass {
    public function getPclass(){
        echo "Parent class name: " . get_parent_class($this) . "<br>";
    }
}

$gtObj = new mchildClass();
$gtObj->getPclass();

// we can call it from outside also
echo "Parent class name is " . get_parent_class($gtObj);