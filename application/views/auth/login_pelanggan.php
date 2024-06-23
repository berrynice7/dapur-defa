<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>

  <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url("assets/pictures/logo.png"); ?> />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/fontawesome-free/css/all.min.css"); ?>>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/sweetalert2/sweetalert2.min.css") ?>>
  <!-- Toastr -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/toastr/toastr.min.css") ?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/dist/css/adminlte.min.css") ?>>

  <!-- <link rel="stylesheet" href=<?php echo base_url('assets/css/login.css'); ?>> -->

  <style>
    body {
        background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(33, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1581600140682-d4e68c8cde32?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center/cover;
        background-size: cover;
        background-position: center;
        height: 100vh;

    }
    #bg {
      box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-webkit-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-moz-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
    }
</style>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a class="text-dark" href="<?php echo base_url('home') ?>"><b>Dapur</b>Defa</a>
    </div>
    <!-- /.login-logo -->
    <div class="card" id="bg">
      <div class="card-body login-card-body">
        <?= $this->session->flashdata("alert"); ?>
        <p class="login-box-msg">Sign in</p>

        <form action="<?php echo base_url('auth_pelanggan') ?>" method="post">
          <div class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Email Address.." name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error("email", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error("password", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="row justify-content-center">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-0 text-center mt-2">
          <a href="<?= base_url("auth_pelanggan/register") ?>" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap 4 -->
  <script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>
</body>

</html>