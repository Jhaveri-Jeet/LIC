<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

if (!isset($_GET['id']))
    header("Location: ./client.php");

$id = $_GET['id'];
$allotedPlanSql = "SELECT * FROM allotedplan WHERE id = '$id' ";
$allotedPlanResult = $connection->query($allotedPlanSql);
$allotedPlanData = $allotedPlanResult->fetch(PDO::FETCH_ASSOC);

$clientSql = "SELECT Id,Name FROM client ORDER BY Id Desc";
$clientResult = $connection->query($clientSql);
$clientData = $clientResult->fetchAll(PDO::FETCH_ASSOC);

$planSql = "SELECT * FROM plan";
$planResult = $connection->query($planSql);
$planData = $planResult->fetchAll(PDO::FETCH_ASSOC);

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
                        <h4 class="card-title">Allot a Plan</h4>
                        <form class="form-sample" enctype="multipart/form-data">
                            <p class="card-description">
                                Plan Info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <select id="clientId" autofocus>
                                                <?php foreach ($clientData as $client) { ?>
                                                    <option value="<?= $client['Id'] ?>" <?= $allotedPlanData['ClientId'] == $client['Id'] ? 'Selected' : '' ?>><?= $client['Name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan</label>
                                        <div class="col-sm-9">
                                            <select id="planId">
                                                <?php foreach ($planData as $plan) { ?>
                                                    <option value="<?= $plan['Id'] ?>" <?= $allotedPlanData['PlanId'] == $plan['Id'] ? 'selected' : '' ?>><?= $plan['PlanNo'] ?> : <?= $plan['PlanName'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Term</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="term" value="<?= $allotedPlanData['Term'] ?>" />
                                            <input type="hidden" id="id" value="<?= $allotedPlanData['Id'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">PPT</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="ppt" value="<?= $allotedPlanData['PPT'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="startDate" value="<?= $allotedPlanData['StartDate'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="endDate" value="<?= $allotedPlanData['EndDate'] ?>">
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
                clientId: $('#clientId option:selected').val(),
                planId: $('#planId option:selected').val(),
                id: $('#id').val(),
                term: $('#term').val(),
                ppt: $('#ppt').val(),
                startDate: $('#startDate').val(),
                endDate: $('#endDate').val(),
            }

            $.ajax({
                url: "../api/updateAllotedPlan.php",
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