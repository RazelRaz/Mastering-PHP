<?php
session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Session</title>
</head>
<body>
    <?php 
    if (isset($_SESSION["user_name"]) && isset($_SESSION["user_mail"])) {
        echo "User Name: " . $_SESSION["user_name"];
        echo "<br>";
        echo "Email: " . $_SESSION["user_mail"]; 
    } else {
        echo "Session not found";
    }
    ?>
</body>
</html>