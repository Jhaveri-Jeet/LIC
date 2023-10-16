<?php
include "../assets/includes/init.php";

$id = $_POST['id'];
$clientName = $_POST["clientName"];
$clientAddress = $_POST["clientAddress"];
$clientMobile = $_POST["clientMobile"];
$clientState = $_POST["clientState"];
$clientCity = $_POST["clientCity"];
$clientNationality = $_POST["clientNationality"];
$clientBirthplace = $_POST["clientBirthplace"];
$clientBirthDate = $_POST["clientBirthDate"];
$clientFathersName = $_POST["clientFathersName"];
$clientMothersName = $_POST["clientMothersName"];
$clientHusbandsName = $_POST["clientHusbandsName"];
$clientWifesName = $_POST["clientWifesName"];
$clientGender = $_POST["clientGender"];
$maritalStatus = $_POST["maritalStatus"];
$clientAge = $_POST["clientAge"];
$clientOtherDocumentTitle = $_POST["clientOtherDocumentTitle"];
$dose1 = $_POST["dose1"];
$dose2 = $_POST["dose2"];

$update = "UPDATE `client` SET `Name`= '$clientName', `Address` = '$clientAddress', `Mobile` = '$clientMobile', `State` = '$clientState', `City` = '$clientCity' ,`Gender` = '$clientGender', `Nationality` = '$clientNationality', `BirthPlace` = '$clientBirthplace',`BirthDate` = '$clientBirthDate', `FatherName` = '$clientFathersName', `MotherName` = '$clientMothersName', `HusbandName` = '$clientHusbandsName', `WifeName` = '$clientWifesName', `MaritalStatus` = '$maritalStatus', `Age` = '$clientAge', `OtherDocumentTitle` = '$clientOtherDocumentTitle',`VaccineDose1Date` = '$dose1',`VaccineDose2Date` = '$dose2' WHERE `Id` = '$id'";
$connection->query($update);
$connection = null;
