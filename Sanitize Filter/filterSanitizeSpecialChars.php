<?php

// FILTER_SANITIZE_SPECIAL_CHARS

$var = "<h1>HELLO PHP</h1>";

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);