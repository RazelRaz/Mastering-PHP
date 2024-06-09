<?php



// traits Method Overriding


// traits Method Overriding - prob 3

trait myHello {
    // method
    private function sayHello(){
        echo "Hello Everyone From Hello Trait..\n";
    }
}



class myClass {
    use myHello {
        //making private class publich with new name
        myHello::sayHello as public sayHello2;
    }
}



$testObj = new myClass();
$testObj->sayHello2();
