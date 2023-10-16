<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Client WHERE Id = $id";
    $result = $connection->query($sql);
    $clientData = $result->fetchAll(PDO::FETCH_ASSOC);

    $nomineeSql = "SELECT * FROM `nominee` WHERE ClientId = $id";
    $nomineeResult = $connection->query($nomineeSql);
    $nomineeData = $nomineeResult->fetchAll(PDO::FETCH_ASSOC);

    $planSql = "SELECT allotedplan.Id,allotedplan.Term, allotedplan.PPT, allotedplan.StartDate, allotedplan.EndDate, allotedplan.Status, plan.PlanNo, plan.PlanName, plan.PremiumPeriod, plan.PremiumAmount FROM `allotedplan` INNER JOIN plan ON plan.Id = allotedplan.PlanId WHERE allotedplan.ClientId = $id";
    $planResult = $connection->query($planSql);
    $planData = $planResult->fetchAll(PDO::FETCH_ASSOC);
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
                        <h4 class="card-title">Client Information</h4>
                        <form class="form-sample" enctype="multipart/form-data">
                            <p class="card-description">
                                Personal info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['Name'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['Address'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" disabled value="<?= $clientData[0]['Mobile'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['City'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['State'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['Nationality'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">BirthPlace</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['BirthPlace'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">BirthDate</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" disabled value="<?= $clientData[0]['BirthDate'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['MotherName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['FatherName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Marital Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['MaritalStatus'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['Gender'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Husband Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['HusbandName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Wife Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['WifeName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" disabled value="<?= $clientData[0]['Age'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Other-Document Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $clientData[0]['OtherDocumentTitle'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Vaccine Dose 1st</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" disabled value="<?= $clientData[0]['VaccineDose1Date'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Vaccine Dose 2nd</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" disabled value="<?= $clientData[0]['VaccineDose2Date'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Photo</label>
                                        <div class="col-sm-9">
                                            <img src="<?= urlOf('assets/uploads/photo/') . $clientData[0]['Photo'] ?>" alt="<?= $clientData[0]['Photo'] ?>" height="80%" width="50%" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Adhar Card</label>
                                        <div class="col-sm-9">
                                            <img src="<?= urlOf('assets/uploads/adhar-card/') . $clientData[0]['AadharPhoto'] ?>" alt="<?= $clientData[0]['AadharPhoto'] ?>" height="80%" width="50%" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Other Document</label>
                                        <div class="col-sm-9">
                                            <img src="<?= urlOf('assets/uploads/other-doc/') . $clientData[0]['OtherDocumentPhoto'] ?>" alt="There is no Other Document" height="80%" width="50%" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pan Card</label>
                                        <div class="col-sm-9">
                                            <img src="<?= urlOf('assets/uploads/pan-card/') . $clientData[0]['PanPhoto'] ?>" alt="<?= $clientData[0]['PanPhoto'] ?>" height="80%" width="50%" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title card-title-dash">
                                            Nominee Detail
                                        </h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm text-white mb-0 me-0" type="button">
                                            <a href="<?= urlOf('pages/addNominee.php') ?>" style="color:white; text-decoration:none;">Add New Nominee
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive mt-1">
                                    <table class="table select-table" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Relation</th>
                                                <th>Rate Of Interest</th>
                                                <th>Age</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($nomineeData as $nominee) { ?>
                                                <tr>
                                                    <td>
                                                        <h6><?= $nominee['Name'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $nominee['Relation'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $nominee['RateOfInterest'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $nominee['Age'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><a href="<?= urlOf("pages/updateNominee.php?id=") . $nominee['Id'] ?>"><i class="mdi mdi-debug-step-out"></i></a></h6>
                                                    </td>
                                                    <td>
                                                        <h6><a href="<?= urlOf("api/deleteNominee.php?id=") . $nominee['Id'] ?>"><i class="mdi mdi-delete"></i></a></h6>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title card-title-dash">
                                            Alloted Plan
                                        </h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm text-white mb-0 me-0" type="button">
                                            <a href="<?= urlOf('pages/addAllotedPlan.php') ?>" style="color:white; text-decoration:none;">Allot New Plan
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive mt-1">
                                    <table class="table select-table" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>Plan No</th>
                                                <th>Plan Name</th>
                                                <th>Term</th>
                                                <th>PPT</th>
                                                <th>Premium Period</th>
                                                <th>Premium Amount</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Update</th>
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
                                                        <h6><?= $plan['Term'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $plan['PPT'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $plan['PremiumPeriod'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $plan['PremiumAmount'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $plan['StartDate'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?= $plan['EndDate'] ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><a href="<?= urlOf("pages/updateAllotedPlan.php?id=") . $plan['Id'] ?>"><i class="mdi mdi-debug-step-out"></i></a></h6>
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
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>