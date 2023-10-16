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
    header('Location: ./plan.php');
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
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PlanNo'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PlanName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PlanDescription'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Plan Period</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PlanPeriod'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Premium Period</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PremiumPeriod'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Premium Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['PremiumAmount'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sum Assured</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $planData[0]['SumAssured'] ?>" />
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
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>