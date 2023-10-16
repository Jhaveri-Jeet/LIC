<?php
include "../assets/includes/init.php";

$id = $_POST['id'];
$planNo = $_POST["planNo"];
$name = $_POST["name"];
$description = $_POST["description"];
$planPeriod = $_POST["planPeriod"];
$premiumPeriod = $_POST["premiumPeriod"];
$amount = $_POST["amount"];
$sumAssured = $_POST["sumAssured"];


$update = "UPDATE `plan` SET `PlanNo` = '$planNo', `PlanName` = '$name', `PlanDescription` = '$description', `PlanPeriod` = '$planPeriod', `PremiumPeriod` = '$premiumPeriod',`PremiumAmount` = '$amount', `SumAssured` = '$sumAssured' WHERE `Id` = $id";
$connection->query($update);
$connection = null;
