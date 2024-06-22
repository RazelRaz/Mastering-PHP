<?php

// FILTER_SANITIZE_STRING is depricated

$var = "<h1>HELLO PHP</h1>";

$sani = strip_tags( $var );
echo $sani;


echo "<br>";
echo "<br>";

// FILTER_SANITIZE_ENCODED

$var2 = "<h1>HELLO PHP</h1>";

$enk = filter_var( $var2, FILTER_SANITIZE_ENCODED );
echo $enk;

