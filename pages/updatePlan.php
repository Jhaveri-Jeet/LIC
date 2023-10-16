<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM plan WHERE Id = $id";
    $result = $connection->query($sql);
    $planData = $result->fetchAll(PDO::FETCH_ASSOC);
} else
    header('Location: ./client.php');
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
                        <h4 class="card-title">Plan Information</h4>
                        <form class="form-sample" enctype="multipart/form-data">
                            <p class="card-description">
                                Plan Information
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="planNo" value="<?= $planData[0]['PlanNo'] ?>" />
                                            <input type="hidden" id="id" value="<?= $planData[0]['Id'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" value="<?= $planData[0]['PlanName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="description" value="<?= $planData[0]['PlanDescription'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Period</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="planPeriod" value="<?= $planData[0]['PlanPeriod'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Premium Period</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="premiumPeriod" value="<?= $planData[0]['PremiumPeriod'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Premium Amount</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="amount" value="<?= $planData[0]['PremiumAmount'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sum Assured</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sumAssured" value="<?= $planData[0]['SumAssured'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-primary mb-2" onclick="updateData()">Submit</button>
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
                planNo: $('#planNo').val(),
                name: $("#name").val(),
                description: $("#description").val(),
                planPeriod: $("#planPeriod").val(),
                premiumPeriod: $("#premiumPeriod").val(),
                amount: $("#amount").val(),
                sumAssured: $("#sumAssured").val(),
                id: $("#id").val(),
            }

            $.ajax({
                url: "../api/updatePlanData.php",
                method: "POST",
                data: data,
                success: function(response) {
                    console.log(response);
                    window.location.href = './plan.php';
                }
            })
        }
    </script>
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>