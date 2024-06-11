<?php
// Magic Methods
// 2. destruct Method

class Base {
    public function __construct(){
        echo "Im CONSTRUCTOR function\n";
    }
    public function hello(){
        echo "Helllo Im Simple Function / Method\n";
    }
    public function __destruct(){
        echo "IM DESTRUCT FUNCTION\n";
    }
}

// object
$myObj = new Base();
$myObj->hello();