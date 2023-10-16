<?php
include "../assets/includes/init.php";

$username = $_POST['username'];
$password = $_POST['password'];
$select = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
$result = $connection->query($select);
$data = $result->fetch();
if ($data > 0) {
    echo "success";
    $_SESSION['status'] = 'loggedIn';
} else
    echo "error";
$connection = null;
