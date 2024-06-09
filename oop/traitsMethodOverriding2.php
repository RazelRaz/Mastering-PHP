<?php



// traits Method Overriding


// traits Method Overriding - prob 2

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
    use myHello, myhi{
        myHello::sayHello insteadOf myhi;
        //rename the existibg function
        myhi::sayHello as newSayHello;
    }
}



$testObj = new myClass();
$testObj->sayHello();
$testObj->newSayHello();