<?php
include "../assets/includes/init.php";

$id = $_POST['id'];
$name = $_POST["name"];
$relation = $_POST["relation"];
$rateOfInterest = $_POST["rateOfInterest"];
$age = $_POST["age"];
$clientId = $_POST["clientId"];

$update = "UPDATE `nominee` SET `Name` = '$name', `Relation` = '$relation', `RateOfInterest` = '$rateOfInterest', `Age` = '$age', `ClientId` = '$clientId'  WHERE `Id` = 1";
$connection->query($update);
$connection = null;
