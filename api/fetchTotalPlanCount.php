<?php
include "../assets/includes/init.php";

$select = "SELECT COUNT(Id) as totalPlan FROM plan";
$result = $connection->query($select);
$data = $result->fetchAll(PDO::FETCH_ASSOC);
$connection = null;


header('Content-type: application/json');

echo json_encode($data);
