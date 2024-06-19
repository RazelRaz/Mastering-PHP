<?php

interface myInterfaces {

}

if(interface_exists("myInterfaces")){
    echo "interface exists";
    class MyClass implements myInterfaces {

    }
} else {
    echo "interface not found";
}