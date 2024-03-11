<?php

$def_lat = 34.06;
$def_lon =23.56;

$user_lat = 89.09;

$lat = isset($user_lat) ? $user_lat : $def_lat;

echo $lat;

