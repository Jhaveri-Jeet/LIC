<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

$query = "SELECT * FROM plan";
$result = $connection->query($query);
$planData = $result->fetchAll();
require pathOf('assets/includes/styles.php');
require pathOf('assets/includes/header.php');
require pathOf('assets/includes/navbar.php');

?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">
                                                                Plan Data
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                                                <i class="mdi mdi-account-plus"></i>
                                                                <a href="<?= urlOf('pages/addPlan.php') ?>" style="color:white; text-decoration:none;">Add New Plan
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive mt-1">
                                                        <table class="table select-table" style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Plan No.</th>
                                                                    <th>Name</th>
                                                                    <th>Period</th>
                                                                    <th>Premium Period</th>
                                                                    <th>Amount</th>
                                                                    <th>Sum Assured</th>
                                                                    <th colspan="2">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($planData as $plan) { ?>
                                                                    <tr>
                                                                        <td>
                                                                            <h6><?= $plan['PlanNo'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $plan['PlanName'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $plan['PlanPeriod'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $plan['PremiumPeriod'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $plan['PremiumAmount'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $plan['SumAssured'] ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><a href="<?= urlOf('pages/viewPlan.php?id=') . $plan['Id'] ?>"><i class="mdi mdi-eye"></i></a></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><a href="<?= urlOf('pages/updatePlan.php?id=') . $plan['Id'] ?>"><i class="mdi mdi-debug-step-out"></i></a></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><a href=""><i class="mdi mdi-delete"></i></a></h6>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>