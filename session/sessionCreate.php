<?php
session_start();

$_SESSION["user_name"] = "Razel Raz";
$_SESSION["user_mail"] = "razel@mail.com";

echo "Session Variable is set";

