<?php
include "../assets/includes/init.php";

$id = $_GET["id"];

$delete = "DELETE FROM nominee WHERE id = '$id'";
$connection->query($delete);
$connection = null;

header("location: ../pages/client.php");
