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

  <link rel="stylesheet" href=<?php echo base_url('assets/css/login.css'); ?>>

  <style>
    body {
        background-image: url('<?php echo base_url('assets/pictures/background_auth.jpg'); ?>'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
        background-size: cover;
        background-position: center;
        height: 100vh; /* This ensures the background image covers the entire viewport height */
    }
    #bg {
      box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-webkit-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-moz-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
    }
</style>

</head>

<body class="hold-transition login-page">




<div class="card"><button type="button" href="<?= base_url('home/pesanan')?>"></button></div>

  <!-- jQuery -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap 4 -->
  <script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>
</body>

</html>