<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/logo-jmrb.png">
  <title>Jasa Marga Related Business</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
  
  <!-- Icon Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- Bootstrap Javascript -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Variable Time End Untuk Respone Speed -->
  <?php $time_start = microtime(true); ?>

  <style>
    .logo {
      transition: all .2s ease-in-out;
    }
    .logo:hover {
      translate: 15px;
    }
    .navtext {
      border-radius: 5px;
    }
    .navtext:hover {
      background-color: #ffffff;
      border-radius: 5px;
    }
  </style>

</head>
<body>

    <!-- Script Pemeriksaan Apakah Sudah Login/Belum Login -->
    <?php 
        session_start();
      
        if($_SESSION['level']==""){
        
        echo "<script>alert('Anda Belum Melakukan Login, Silahkan Login Terlebih Dahulu.!')</script>";
        echo "<script>window.location.href = \"../index.php\"</script>";
      }
      include "../models/conn.php";
    ?>
    <!-- End Script Pemeriksaan Apakah Sudah Login/Belum Login -->

    <!-- Id Navigation Bar -->
    <div id="navbar">

      <!-- Navigation Bar -->
      <nav class="navbar bg-body-secondary">
          <div class="container-md">
            <a class="navbar-brand" href="dashboard.php">
              <img src="../assets/img/logo-perusahaan.png" alt="logo" width="50%" class="logo d-inline-block align-text-top">
            </a>

            <div class="d-flex justify-content-center gap-3">
              <button type="button" class="btn btn-outline-secondary d-inline-block align-text" name=""> <i class="fa fa-user"></i> <?php echo $_SESSION['level']; ?></button>

              <a onclick="return confirm('Apakah Anda Yakin Untuk Logout ?')" href="../models/logout.php">
              <button type="button" class="btn btn-danger d-inline-block align-text" name=""> <i class="fa fa-sign-out"></i> Logout</button></a>
            </div>
          </nav>
        <!-- End Navigation Bar -->

        <!-- Header Bar -->
        <nav class="navbar navbar-expand-lg fw-semibold bg-warning shadow-sm">
            <div class="container">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link navtext" aria-current="page" href="dashboard.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navtext" href="restarea-table.php">Rest Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navtext" href="report-table.php">Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navtext" href="account-table.php">Account Added</a>
                  </li>
                </ul>
            </div>
          </nav>
          <!-- End Header Bar -->

      </div>
      <!-- End Id Navigation Bar -->