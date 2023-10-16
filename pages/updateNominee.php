<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

if (!isset($_GET['id']))
    header("Location: ./client.php");

$id = $_GET['id'];
$sql = "SELECT * FROM nominee WHERE id = '$id'";
$result = $connection->query($sql);
$nomineeData = $result->fetch(PDO::FETCH_ASSOC);

$clientsql = "SELECT Id,Name FROM client ORDER BY Id Desc";
$clientresult = $connection->query($clientsql);
$clientData = $clientresult->fetchAll(PDO::FETCH_ASSOC);
require pathOf('assets/includes/styles.php');
require pathOf('assets/includes/header.php');
require pathOf('assets/includes/navbar.php');
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nominee Information</h4>
                        <form class="form-sample" enctype="multipart/form-data">
                            <p class="card-description">
                                Nominee Info
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" value="<?= $nomineeData['Name'] ?>" autofocus />
                                            <input type="hidden" id="id" value="<?= $nomineeData['Id'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Relation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="relation" value="<?= $nomineeData['Relation'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Interest</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="rateOfInterest" value="<?= $nomineeData['RateOfInterest'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="age" value="<?= $nomineeData['Age'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Select Client</label>
                                        <div class="col-sm-9">
                                            <select id="clientId">
                                                <?php foreach ($clientData as $client) { ?>
                                                    <option value="<?= $client['Id'] ?>" <?= $nomineeData['ClientId'] == $client['Id'] ? 'selected' : '' ?>><?= $client['Name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button type="button" class="btn btn-primary mb-2" onclick="updateData()">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <a href="<?= urlOf('pages/client.php') ?>" class="btn btn-primary mb-2">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateData() {
            let data = {
                id: $('#id').val(),
                name: $('#name').val(),
                relation: $('#relation').val(),
                rateOfInterest: $('#rateOfInterest').val(),
                age: $('#age').val(),
                clientId: $('#clientId option:selected').val(),
            }

            $.ajax({
                url: "../api/updateNominee.php",
                method: "POST",
                data: data,
                success: function(response) {
                    console.log(response);
                    window.location.href = './client.php';
                }
            })
        }
    </script>
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>