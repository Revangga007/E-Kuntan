<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include 'config/connection.php';
include 'config/cookie_login.php';
include 'config/session_login.php';
include 'config/baseUrl.php';
include 'pages/login.php';
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-kuntan - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= BASE_URL; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= BASE_URL; ?>/assets/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
  <script src="<?= BASE_URL; ?>assets/vendor/jquery/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= BASE_URL; ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
              </div>
              <?php if (isset($error)) : ?>
                <div id="error">
                  <div class="alert alert-danger alert-sm" role="alert">
                    Username / Password salah !!
                  </div>
                </div>
              <?php endif; ?>
              <form class="user" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username Anda" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password Anda" required>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                    <label class="custom-control-label" for="remember">Remember Me</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  </div>

  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="<?= BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASE_URL; ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= BASE_URL; ?>assets/vendor/sweetalert2/sweetalert2.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= BASE_URL; ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>