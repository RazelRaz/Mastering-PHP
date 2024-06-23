<?php
$cookie_name = "user";
$cookie_value = "Razel Ahmed";


// set cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30),  "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php 

        // retrieve cookie
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set yet";
        } else {
            echo $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>