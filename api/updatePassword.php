<?php
include "../assets/includes/init.php";

$password = $_POST['password'];

$update = "UPDATE `users` SET `Password` = '$password' WHERE `Id` = 1";
$connection->query($update);
$connection = null;
