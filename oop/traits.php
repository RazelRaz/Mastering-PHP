<?php

// Traits 

trait myTraitClass {
    public function textOutput(){
        echo "Heloo WordPress";
    }
}

trait anotherTraitClass {
    public function sayB(){
        echo "Bye Bye, EveryOne";
    }
}

class base {
    use myTraitClass, anotherTraitClass;
}

class anotherBase {
    use myTraitClass;
}

// object
$myObj = new base();
$myNewobj = new anotherBase();
$myObj->textOutput();
$myObj->sayB();
$myNewobj->textOutput();