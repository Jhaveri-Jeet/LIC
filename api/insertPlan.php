<?php
include "../assets/includes/init.php";

$planNo = $_POST["planNo"];
$name = $_POST["name"];
$description = $_POST["description"];
$planPeriod = $_POST["planPeriod"];
$premiumPeriod = $_POST["premiumPeriod"];
$amount = $_POST["amount"];
$sumAssured = $_POST["sumAssured"];


$insert = "INSERT INTO `plan`(`PlanNo`, `PlanName`, `PlanDescription`, `PlanPeriod`, `PremiumPeriod`,`PremiumAmount`, `SumAssured`) VALUES ('$planNo','$name','$description','$planPeriod','$premiumPeriod','$amount','$sumAssured')";
$connection->query($insert);
$connection = null;
