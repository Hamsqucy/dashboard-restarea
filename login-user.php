<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/logo-jmrb.png">
  <title>Login | User</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

  <!-- Bootstrap Javascript -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <style>
    body {
      background-color: #f0f3f7;
    }
  </style>
</head>
<body>

  <!-- Login Forms User -->
  <div class="container text-center">
    <div class="card col-md-5 mb-4 mt-4 mx-auto shadow">
      <div class="card-body">

          <form class="mx-auto p-2" style="width: 400px;" method="post" action="models/login/check-login.php">
            <h3 class="text-center mb-4">Log In User</h3>
            <div class="text-center mb-4">
            <img src="assets/img/icon-login-user.svg" alt="Login Page" width="60%">
          </div>
          <p class="fw-medium text-center">Website Pencarian Data Rest Area Milik <br> PT Jasamarga Related Business</p>
            
            <div class="mb-3">
              <input type="text" class="form-control border-1 border-secondary" name="username" placeholder="Username" required>
            </div>

            <div class="mb-3">
              <input type="password" class="form-control border-1 border-secondary" name="password" placeholder="Password" required>
              <div id="passwordHelp" class="form-text mt-3 fs-6 fw-semibold">Masuk Dengan Akun Yang Telah Terdaftar</div>
            </div>

            <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Login</button>
          </form>

          <p class="fw-small text-center">or</p>
          <a href="login-admin.php"><button type="submit" class="btn btn-success d-grid gap-2 col-11 mx-auto mb-4">Login Sebagai Admin</button></a>
        </div>

      </div>
    </div>
  </div>
  <!-- End Login Forms User -->

</body>
</html>