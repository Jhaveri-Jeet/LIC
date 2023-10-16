<?php
include "../assets/includes/init.php";

$id = $_GET["id"];

$nomineeDelete = "DELETE FROM nominee WHERE clientId = '$id'";
$connection->query($nomineeDelete);

$allotedPlanDelete = "DELETE FROM allotedplan WHERE clientId = '$id'";
$connection->query($allotedPlanDelete);

$clientDelete = "DELETE FROM client WHERE Id = '$id'";
$connection->query($clientDelete);

$connection = null;

header("location: ../pages/client.php");
