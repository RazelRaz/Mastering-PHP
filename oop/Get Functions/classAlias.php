<?php
// class_alias();
// its not returning anyting

class myClassAlias {
    public $name;
}

class_alias("myClassAlias", "mca");

$objMain = new myClassAlias();
$obj = new mca();

$obj->name = "Razel";

echo $obj->name;