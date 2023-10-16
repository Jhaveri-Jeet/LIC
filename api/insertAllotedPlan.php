<?php
include "../assets/includes/init.php";

$clientId = $_POST["clientId"];
$planId = $_POST["planId"];
$term = $_POST["term"];
$ppt = $_POST["ppt"];
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];

$insert = "INSERT INTO `allotedplan`(`PlanId`,`ClientId`, `Term`, `PPT`, `StartDate`,`EndDate`) VALUES ('$planId','$clientId','$term','$ppt','$startDate','$endDate')";
$connection->query($insert);
$connection = null;
