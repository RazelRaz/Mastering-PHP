<?php
// traitExists

trait myTrait {
    public function mtrt(){

    }
}

if(trait_exists("myTrait")){
    // echo "Trait Exists";
    class myTClass {
        use myTrait;
    }
} else {
    echo "No Trait Avilable with this name";
}