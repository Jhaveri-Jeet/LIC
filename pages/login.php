<?php
require('../assets/includes/init.php');
require pathOf('assets/includes/styles.php');
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= urlOf("assets/images/lic-logo.png"); ?>" alt="logo" style="display: block;margin-left: auto; margin-right: auto; height: 100px; width: 150px;">
              </div>
              <h4>Hello! Khushal Rajani</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" value="Khushal Rajani" disabled>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" autofocus>
                </div>
                <div class="mt-3">
                  <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="checkUser()">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= require pathOf('assets/includes/scripts.php'); ?>
  <script>
    function checkUser() {
      let data = {
        username: $("#username").val(),
        password: $("#password").val()
      }

      $.post("../api/checkUser.php", data, function(response) {
        console.log(response);
        if (response == "success")
          window.location.href = '../index.php';
        else
          window.location.reload();
      })
    }
  </script>