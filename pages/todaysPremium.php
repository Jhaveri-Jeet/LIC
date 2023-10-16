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
                                                                Client Data
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive mt-1">
                                                        <table class="table select-table" style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Client</th>
                                                                    <th>Client Name</th>
                                                                    <th>Mobile Number</th>
                                                                    <th>Plan Name</th>
                                                                    <th>Premium Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="todaysPremiumData">

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
        $(init)

        function init() {
            todaysPremiumData();
        }

        function todaysPremiumData() {
            $.post("<?= urlOf('api/fetchNotification.php') ?>", function(data) {

                var date = new Date();
                var currentDate = date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate()
                let todaysPremiumData = '';
                for (let i = 0; i < data.length; i++) {
                    let newDate = new Date(data[i]['StartDate']);

                    for (let j = 0; j < data[i]['PlanPeriod']; j++) {
                        var premiumPeriod = data[i]['PremiumPeriod'];
                        newDate.setFullYear(newDate.getFullYear() + premiumPeriod);
                        var checkDate = newDate.getFullYear() + "/" + (newDate.getMonth() + 1) + "/" + newDate.getDate()
                        if (currentDate == checkDate) {
                            todaysPremiumData += `
                                <tr>
                                    <td>
                                        <img src="<?= urlOf('assets/uploads/photo/') ?>${data[i]['Photo']}" alt="" style="object-fit: cover;" />
                                    </td>
                                    <td>
                                        <h6>${data[i]['Name']}</h6>
                                    </td>
                                    <td>
                                        <h6>${data[i]['Mobile']}</h6>
                                    </td>
                                    <td>
                                        <h6>${data[i]['PlanName']}</h6>
                                    </td>
                                    <td>
                                        <h6>${data[i]['PremiumAmount']}</h6>
                                    </td>
                                </tr>
                                   `;
                            $('#todaysPremiumData').html(todaysPremiumData);
                        }
                    }
                    newDate = new Date;
                }
            })
        }
    </script>