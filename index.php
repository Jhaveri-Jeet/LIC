<?php
include "./assets/includes/init.php";

if (!isset($_SESSION['status']))
  header("Location: ./pages/login.php");

$query = "SELECT *,client.Id as clientId FROM allotedplan INNER JOIN client ON client.Id = allotedplan.ClientId WHERE allotedplan.Status = 'Pending' ORDER BY allotedplan.Id Desc";
$result = $connection->query($query);
$clientData = $result->fetchAll();
require pathOf('assets/includes/styles.php');
require pathOf('assets/includes/header.php');
require pathOf('assets/includes/navbar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
              </li>
            </ul>
            <div>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-printer"></i>Print</a>
              </div>
            </div>
          </div>
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
              <div class="row">
                <div class="col-sm-12">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div>
                      <p class="statistics-title">Total Client</p>
                      <h3 class="rate-percentage" style="text-align: center;" id="totalClient"></h3>
                    </div>
                    <div>
                      <p class="statistics-title">Total Plan</p>
                      <h3 class="rate-percentage" style="text-align: center;" id="totalPlan"></h3>
                    </div>
                    <div>
                      <p class="statistics-title">Pending Client</p>
                      <h3 class="rate-percentage" style="text-align: center;" id="pendingClient"></h3>
                    </div>
                    <div class="d-none d-md-block">
                      <p class="statistics-title">Completed Client</p>
                      <h3 class="rate-percentage" style="text-align: center;" id="completedClient"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                              <h4 class="card-title card-title-dash">
                                Client Data
                              </h4>
                            </div>
                            <div>
                              <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                <i class="mdi mdi-account-plus"></i>
                                <a href="<?= urlOf('pages/addClient.php') ?>" style="color:white; text-decoration:none;">Add New Client
                                </a>
                              </button>
                            </div>
                          </div>
                          <div class="table-responsive mt-1">
                            <table class="table select-table" style="text-align: center;">
                              <thead>
                                <tr>
                                  <th>Client</th>
                                  <th>Name</th>
                                  <th>Address</th>
                                  <th>Mobile Number</th>
                                  <th>State</th>
                                  <th>City</th>
                                  <th>Gender</th>
                                  <th>Age</th>
                                  <th colspan="3">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($clientData as $client) { ?>
                                  <tr>
                                    <td>
                                      <img src="<?= urlOf('assets/uploads/photo/') . $client['Photo'] ?>" alt="" style="object-fit: cover;" />
                                    </td>
                                    <td>
                                      <h6><?= $client['Name'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['Address'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['Mobile'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['State'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['City'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['Gender'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><?= $client['Age'] ?></h6>
                                    </td>
                                    <td>
                                      <h6><a href="<?= urlOf("pages/viewClient.php?id=") . $client['Id'] ?>"><i class="mdi mdi-eye"></i></a></h6>
                                    </td>
                                    <td>
                                      <h6><a href="<?= urlOf("pages/updateClient.php?id=") . $client['Id'] ?>"><i class="mdi mdi-debug-step-out"></i></a></h6>
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
  <?php require pathOf('assets/includes/footer.php'); ?>
  <?php require pathOf('assets/includes/scripts.php'); ?>
  <script>
    $(init);

    function init() {
      fetchTotalClientCount();
      fetchTotalPlanCount();
      fetchTotalPendingClientCount();
      fetchTotalCompletedClientCount();
    }

    function fetchTotalClientCount() {
      $.post("./api/fetchTotalClientCount.php", function(data) {
        $("#totalClient").text(data[0]['totalClient']);
      });
    }

    function fetchTotalPlanCount() {
      $.post("./api/fetchTotalPlanCount.php", function(data) {
        $("#totalPlan").text(data[0]['totalPlan']);
      });
    }

    function fetchTotalPendingClientCount() {
      $.post("./api/fetchTotalPendingClientCount.php", function(data) {
        $("#pendingClient").text(data[0]['pendingCount']);
      });
    }

    function fetchTotalCompletedClientCount() {
      $.post("./api/fetchTotalCompletedClientCount.php", function(data) {
        $("#completedClient").text(data[0]['completedCount']);
      });
    }
  </script>