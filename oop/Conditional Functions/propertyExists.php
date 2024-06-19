<?php
// property Exists

class myEx {
    public $name;
}

$exObj = new myEx();

if (property_exists($exObj, 'name')) {
    echo "property Exists";
} else {
    echo "No property Exists";
}