<?php
include "../assets/includes/init.php";

$name = $_POST["name"];
$relation = $_POST["relation"];
$rateOfInterest = $_POST["rateOfInterest"];
$age = $_POST["age"];
$clientId = $_POST["clientId"];

$insert = "INSERT INTO `nominee`(`Name`,`Relation`, `RateOfInterest`, `Age`, `ClientId`) VALUES ('$name','$relation','$rateOfInterest','$age','$clientId')";
$connection->query($insert);
$connection = null;
