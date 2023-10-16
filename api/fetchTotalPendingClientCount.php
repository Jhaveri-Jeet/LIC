<?php
include "../assets/includes/init.php";

$select = "SELECT COUNT(Id) as pendingCount FROM allotedplan WHERE Status = 'Pending'";
$result = $connection->query($select);
$data = $result->fetchAll(PDO::FETCH_ASSOC);
$connection = null;


header('Content-type: application/json');

echo json_encode($data);
