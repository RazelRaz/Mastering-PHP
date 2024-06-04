<?php
$a = 10;
$b = 5;
function test()
{
  global $a, $b;
  $a = $a + $b;
}

test();

echo $a;
