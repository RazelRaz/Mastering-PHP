<!-- /
Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise: -->

<?php

$time = date('H');

if($time < 20) {
  echo "Have a Great Day";
} else {
  echo 'Error';
}