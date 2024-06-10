<?php

// exampe 1
// type Hinting

// type Hinting with normal function
// function myFruits(array $fruits){
//     foreach ($fruits as $fruit) {
//         echo $fruit . "<br>";
//     }
// }

// $box = ["apple", "Mango"];
// $result = myFruits($box);
// echo $result;

class hello {
    // method
    public function sayHello(){
        echo "Hello from hello class";
    }
}

class bye {
    // method
    public function sayBye(){
        echo "Bye from bye Class";
    }
}

// normal function
function myFunc(hello $class){
    $class->sayHello();
}

$newObj = new hello();

myFunc($newObj);