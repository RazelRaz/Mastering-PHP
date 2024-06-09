<?php



// traits Method Overriding
// frist priority is trait
// if we create class object and object owns a function thn this function will be the main priority second is trait.

// traits Method Overriding - prob 1

trait myHello {
    // method
    public function sayHello(){
        echo "Hello Everyone From Hello Trait..\n";
    }
}

trait myhi {
    // 
    public function sayHello(){
        echo "Hello Everyone From Hi Trait..\n";
    }
}

class myClass {
    public function sayHello(){
        echo "Hello From myClass.\n";
    }
}

class child extends myClass {
    use myHello;
    public function sayHello(){
        echo "Hello from Child Class";
    }
}

$testObj = new child();
$testObj->sayHello();