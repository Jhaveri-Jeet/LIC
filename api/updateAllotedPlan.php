<?php
include "../assets/includes/init.php";

$clientId = $_POST["clientId"];
$planId = $_POST["planId"];
$term = $_POST["term"];
$ppt = $_POST["ppt"];
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$id = $_POST["id"];

$update = "UPDATE `allotedplan` SET `PlanId`='$planId',`ClientId`='$clientId',`Term`='$term',`PPT`='$ppt',`StartDate`='$startDate',`EndDate`='$endDate' WHERE `Id` = '$id'";
$connection->query($update);
$connection = null;
