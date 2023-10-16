<?php
include "../assets/includes/init.php";

if (!isset($_SESSION['status']))
    header("Location: ./login.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Client WHERE Id = $id";
    $result = $connection->query($sql);
    $clientData = $result->fetchAll(PDO::FETCH_ASSOC);
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
                                            <input type="text" class="form-control" id="clientName" value="<?= $clientData[0]['Name'] ?>" />
                                            <input type="hidden" id="id" value="<?= $clientData[0]['Id'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientAddress" value="<?= $clientData[0]['Address'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="clientMobile" value="<?= $clientData[0]['Mobile'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientCity" value="<?= $clientData[0]['City'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientState" value="<?= $clientData[0]['State'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientNationality" value="<?= $clientData[0]['Nationality'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">BirthPlace</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientBirthplace" value="<?= $clientData[0]['BirthPlace'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">BirthDate</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="clientBirthDate" value="<?= $clientData[0]['BirthDate'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientMothersName" value="<?= $clientData[0]['MotherName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientFathersName" value="<?= $clientData[0]['FatherName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Marital Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="maritalStatus">
                                                <option <?= $clientData[0]['MaritalStatus'] == 'Married' ? 'selected' : '' ?>>Married</option>
                                                <option <?= $clientData[0]['MaritalStatus'] == 'Un-Married' ? 'selected' : '' ?>>Un-Married</option>
                                                <option <?= $clientData[0]['MaritalStatus'] == 'Widow' ? 'selected' : '' ?>>Widow</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="clientGender">
                                                <option <?= $clientData[0]['Gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                                <option <?= $clientData[0]['Gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Husband Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientHusbandName" value="<?= $clientData[0]['HusbandName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Wife Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientWifeName" value="<?= $clientData[0]['WifeName'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="clientAge" value="<?= $clientData[0]['Age'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Other-Document Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="clientOtherDocumentTitle" value="<?= $clientData[0]['OtherDocumentTitle'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Vaccine Dose 1st</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dose1" value="<?= $clientData[0]['VaccineDose1Date'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Vaccine Dose 2nd</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dose2" value="<?= $clientData[0]['VaccineDose2Date'] ?>" />
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
            var id = $("#id").val();
            var clientName = $("#clientName").val();
            var clientAddress = $("#clientAddress").val();
            var clientMobile = $("#clientMobile").val();
            var clientState = $("#clientState").val();
            var clientCity = $("#clientCity").val();
            var clientNationality = $("#clientNationality").val();
            var clientBirthplace = $("#clientBirthplace").val();
            var clientBirthDate = $("#clientBirthDate").val();
            var clientFathersName = $("#clientFathersName").val();
            var clientMothersName = $("#clientMothersName").val();
            var clientHusbandsName = $("#clientHusbandName").val();
            var clientWifesName = $("#clientWifeName").val();
            var clientAge = $("#clientAge").val();
            var clientOtherDocumentTitle = $("#clientOtherDocumentTitle").val();
            var clientGender = $("#clientGender option:selected").val();
            var maritalStatus = $("#maritalStatus option:selected").val();
            // var clientPhotos = document.getElementById("clientPhoto");
            // var photo = clientPhotos.files[0];
            // var clientAdharcards = document.getElementById("clientAdharCard");
            // var AdharCard = clientAdharcards.files[0];
            // var clientPanCards = document.getElementById("clientPanCard");
            // var PanCard = clientPanCards.files[0];
            // var clientOtherDocumentPhotos = document.getElementById("clientOtherDocumentPhoto");
            // var OtherdocPhoto = clientOtherDocumentPhotos.files[0];
            var dose1 = $("#dose1").val();
            var dose2 = $("#dose2").val();

            let formData = new FormData();
            formData.append("id", id);
            formData.append("clientName", clientName);
            formData.append("clientAddress", clientAddress);
            formData.append("clientMobile", clientMobile);
            formData.append("clientState", clientState);
            formData.append("clientCity", clientCity);
            formData.append("clientNationality", clientNationality);
            formData.append("clientBirthplace", clientBirthplace);
            formData.append("clientBirthDate", clientBirthDate);
            formData.append("clientFathersName", clientFathersName);
            formData.append("clientMothersName", clientMothersName);
            formData.append("clientHusbandsName", clientHusbandsName);
            formData.append("clientWifesName", clientWifesName);
            formData.append("clientGender", clientGender);
            formData.append("maritalStatus", maritalStatus);
            formData.append("clientAge", clientAge);
            formData.append("clientOtherDocumentTitle", clientOtherDocumentTitle);
            formData.append("dose1", dose1);
            formData.append("dose2", dose2);

            $.ajax({
                url: "../api/updateClientData.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    window.location.href = './client.php';
                }
            })
        }
    </script>
    <?php require pathOf('assets/includes/scripts.php'); ?>
    <?php require pathOf('assets/includes/footer.php'); ?>