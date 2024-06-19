<?php

class MyClass {

}

if(class_exists("MyClass")){
    // echo "Class EXISTS";
    $ceobj = new MyClass();
} else {
    echo "Class No exists";
}