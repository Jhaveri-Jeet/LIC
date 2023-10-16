<?php
include "../assets/includes/init.php";
if (!isset($_SESSION['status']))
  header("Location: ./login.php");

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
                      <input type="text" class="form-control" id="clientName" autofocus />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientAddress" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mobile Number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="clientMobile" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientCity" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientState" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nationality</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientNationality" value="Indian" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">BirthPlace</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientBirthplace" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">BirthDate</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="clientBirthDate" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mother's Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientMothersName" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Father's Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientFathersName" />
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
                        <option>Married</option>
                        <option>Un-Married</option>
                        <option>Widow</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="clientGender">
                        <option>Male</option>
                        <option>Female</option>
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
                      <input type="text" class="form-control" id="clientHusbandName" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Wife Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientWifeName" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Age</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="clientAge" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Other-Document Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="clientOtherDocumentTitle" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Vaccine Dose 1st</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dose1" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Vaccine Dose 2nd</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dose2" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="clientPhoto" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Adhar Card</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="clientAdharCard" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Other Document</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="clientOtherDocumentPhoto" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pan Card</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="clientPanCard" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-12 mt-3" style="display: flex; justify-content: center;">
                      <button type="button" class="btn btn-primary mb-2" onclick="sendData()">Submit</button>
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
      var clientPhotos = document.getElementById("clientPhoto");
      var photo = clientPhotos.files[0];
      var clientAdharcards = document.getElementById("clientAdharCard");
      var AdharCard = clientAdharcards.files[0];
      var clientPanCards = document.getElementById("clientPanCard");
      var PanCard = clientPanCards.files[0];
      var clientOtherDocumentPhotos = document.getElementById("clientOtherDocumentPhoto");
      var OtherdocPhoto = clientOtherDocumentPhotos.files[0];
      var dose1 = $("#dose1").val();
      var dose2 = $("#dose2").val();

      let formData = new FormData();
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
      formData.append("clientPhoto", photo);
      formData.append("clientAdharCard", AdharCard);
      formData.append("clientPanCard", PanCard);
      formData.append("clientOtherDocumentPhoto", OtherdocPhoto);
      formData.append("dose1", dose1);
      formData.append("dose2", dose2);



      $.ajax({
        url: "../api/insertClient.php",
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          console.log(response);
          window.location.href = './addNominee.php';
        }
      })
    }
  </script>
  <?php require pathOf('assets/includes/scripts.php'); ?>
  <?php require pathOf('assets/includes/footer.php'); ?>