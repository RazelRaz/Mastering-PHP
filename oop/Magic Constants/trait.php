<?php
trait myTrait {
    public function getTraitName(){
        return __TRAIT__;
    }
}

class myNewClass {
    use myTrait;
}

$tobj = new mynewClass();

echo $tobj->getTraitName();