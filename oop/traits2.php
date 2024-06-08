<?php

trait aTraitClass {
    public function sayHello(){
        echo "Hello Everyone!!.";
    }

    public function sayGoodNight(){
        echo "Good Night";
    }
}

trait secondTraitClass {
    public function saybye(){
        echo "Byeeeeeeeeeeeeeeeeeeeeee Bye.....";
    }
    public function goodMorning(){
        echo "Morning Sunshine...";
    }
}

class myclass {
    use aTraitClass;
}

class myAnotherClass {
    use secondTraitClass;
}

// object
$objOne = new myclass();
// object
$objTwo = new myAnotherClass();

$objOne->sayHello();
$objOne->sayGoodNight();
$objTwo->saybye();
$objTwo->goodMorning();