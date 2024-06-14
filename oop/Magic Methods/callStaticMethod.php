<?php
// callStatic Method

/*
important: 
__class__
__class__ it is a constant method, it picks class (exaple: Base)

call_user_func_array - its a callback function. (if A user call any function from outside class then it will search the function inside the class and return it


*/ 


class Student {
    //static method
    private static function show($name){
        // echo "Im a Private Static Method";
        echo "Name:$name ";
    }

    // magic method
    public static function __callStatic($method, $arguments){
        // echo "You are calling a private method: $method";
        if(method_exists(__class__, $method)){
            call_user_func_array([__class__, $method], $arguments);
        } else {
            echo "Method Not Found";
        }
    }

}

Student::show("Razel Ahmed");

