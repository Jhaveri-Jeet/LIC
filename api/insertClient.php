<?php
include "../assets/includes/init.php";

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

if (isset($_FILES['clientPhoto'])) {

    $time = time();
    $tmpFileName = $_FILES['clientPhoto']['tmp_name'];
    $fileName = "$time-" . $_FILES['clientPhoto']['name'];

    $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/photo/$fileName"));

    if (!$fileUploaded) {
        echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
        exit();
    }
}

if (isset($_FILES['clientAdharCard'])) {

    $time = time();
    $adharTmpFileName = $_FILES['clientAdharCard']['tmp_name'];
    $adharFileName = "$time-" . $_FILES['clientAdharCard']['name'];

    $adharFileUploaded = move_uploaded_file($adharTmpFileName, pathOf("assets/uploads/adhar-card/$adharFileName"));

    if (!$adharFileUploaded) {
        echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
        exit();
    }
}

if (isset($_FILES['clientPanCard'])) {

    $time = time();
    $panTmpFileName = $_FILES['clientPanCard']['tmp_name'];
    $panFileName = "$time-" . $_FILES['clientPanCard']['name'];

    $panFileUploaded = move_uploaded_file($panTmpFileName, pathOf("assets/uploads/pan-card/$panFileName"));

    if (!$panFileUploaded) {
        echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
        exit();
    }
}

if (isset($_FILES['clientOtherDocumentPhoto'])) {

    $time = time();
    $otherTmpFileName = $_FILES['clientOtherDocumentPhoto']['tmp_name'];
    $otherFileName = "$time-" . $_FILES['clientOtherDocumentPhoto']['name'];

    $otherFileUploaded = move_uploaded_file($otherTmpFileName, pathOf("assets/uploads/other-doc/$otherFileName"));

    if (!$otherFileUploaded) {
        echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
        exit();
    }
}

$insert = "INSERT INTO `client`(`Name`, `Address`, `Mobile`, `State`, `City`,`Gender`, `Nationality`, `BirthPlace`,`BirthDate`, `FatherName`, `MotherName`, `HusbandName`, `WifeName`, `MaritalStatus`, `Age`, `OtherDocumentTitle`,`Photo`,`AadharPhoto`,`PanPhoto`,`VaccineDose1Date`,`VaccineDose2Date`,`OtherDocumentPhoto`) VALUES ('$clientName','$clientAddress','$clientMobile','$clientState','$clientCity','$clientGender','$clientNationality','$clientBirthplace','$clientBirthDate','$clientFathersName','$clientMothersName','$clientHusbandsName','$clientWifesName', '$maritalStatus', '$clientAge', '$clientOtherDocumentTitle', '$fileName', '$adharFileName', '$panFileName', '$dose1', '$dose2','$otherFileName')";
$connection->query($insert);
$connection = null;
