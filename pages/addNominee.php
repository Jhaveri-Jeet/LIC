<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

$sql = "SELECT Id,Name FROM client ORDER BY Id Desc";
$result = $connection->query($sql);
$clientData = $result->fetchAll(PDO::FETCH_ASSOC);
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
                                            <input type="text" class="form-control" id="name" autofocus />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Relation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="relation" autofocus />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Interest</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="rateOfInterest" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="age" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Select Client</label>
                                        <div class="col-sm-9">
                                            <select id="clientId">
                                                <?php foreach ($clientData as $client) { ?>
                                                    <option value="<?= $client['Id'] ?>"><?= $client['Name'] ?></option>
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
                                            <button type="button" class="btn btn-primary mb-2" onclick="sendData()">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <a href="<?= urlOf('pages/addAllotedPlan.php') ?>" class="btn btn-primary mb-2">Next</a>
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
        function sendData() {
            let data = {
                name: $('#name').val(),
                relation: $('#relation').val(),
                rateOfInterest: $('#rateOfInterest').val(),
                age: $('#age').val(),
                clientId: $('#clientId option:selected').val(),
            }

            $.ajax({
                url: "../api/insertNominee.php",
                method: "POST",
                data: data,
                success: function(response) {
                    console.log(response);
                    window.location.href = './addNominee.php';
                }
            })
        }
    </script>
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>