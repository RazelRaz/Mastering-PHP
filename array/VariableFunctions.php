<?php

function team($name)
{
  echo "I Love $name";
}

$epl = "team";
$epl("Manchester United ");

// Another example - its also called anonymous function

$myfruits = function ($fruit) {
  echo "My favourite fruit name is $fruit";
};

$myfruits("Berry");
