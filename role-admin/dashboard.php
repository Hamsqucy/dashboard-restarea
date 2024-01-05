<?php include '../partials/header.php'; ?>

<?php
include "../models/conn.php";
                  
$sql_acc     = "SELECT * FROM tb_account";
$query_acc   = mysqli_query($conn, $sql_acc);
$row_acc     = mysqli_num_rows($query_acc);

$sql_report  = "SELECT * FROM tb_report";
$query_report    = mysqli_query($conn, $sql_report);
$row_report      = mysqli_num_rows($query_report);

$sql_restarea     = "SELECT * FROM tb_restarea";
$query_restarea   = mysqli_query($conn, $sql_restarea);
$row_restarea     = mysqli_num_rows($query_restarea);
?>

<!-- Header Data  -->
<div class="container">
    <h3 class="mt-5 text-center text-body-secondary">Halo <b><i><?php echo $_SESSION['username']; ?></i></b>, Anda Berhasil Login Sebagai Admin.</h3>
</div>
<!-- End Header Data -->

<!-- Dashboard Cards -->
<div class="container">
  <div class="row d-flex justify-content-center mt-5 grid gap-5 mb-5">

    <div class="card shadow-lg text-bg-success mb-3 p-2 g-col-6" style="max-width: 20rem;">
      <div class="card-header">Account Addedd</div>

        <div class="inner mt-2 text-center">
            <h3 class="fs-1"><?php echo $row_acc ?></h3>
        </div>

        <div class="card-body">
          <h5 class="card-title">Admin and User</h5>
          <p class="card-text">Total atau Jumlah Account Yang Telah Didaftarkan Oleh Developer dan Memiliki Hak Akses.</p>
          <a href="account-table.php" class="btn btn-outline-light">More Action</a>
        </div>
    </div>
    
    <div class="card shadow-lg text-bg-danger mb-3 p-2 g-col-6" style="max-width: 20rem;">
      <div class="card-header">Report</div>

        <div class="inner mt-2 text-center">
            <h3 class="fs-1"><?php echo $row_report ?></h3>
        </div>

        <div class="card-body">
          <h5 class="card-title">Report Data Rest Area</h5>
          <p class="card-text">Report Data Rest Area Yang Telah Dikelola Oleh Admin dan Diperiksa Oleh User.</p>
          <a href="report-table.php" class="btn btn-outline-light">More Action</a>
        </div>
    </div>
    
    <div class="card shadow-lg text-bg-warning mb-3 p-2 g-col-6" style="max-width: 20rem;">
      <div class="card-header">Rest Area</div>

        <div class="inner mt-2 text-center">
            <h3 class="fs-1"><?php echo $row_restarea ?></h3>
        </div>

        <div class="card-body">
          <h5 class="card-title">Table Data Rest Area</h5>
          <p class="card-text">Table Data Rest Area Travoy Yang Akan Digunakan Oleh Admin dan Pemeriksaan Oleh User.</p>
          <a href="restarea-table.php" class="btn btn-outline-dark">More Action</a>
        </div>
    </div>

  </div>
</div>
<!-- End Dashboard Cards -->

<div class="p-5"></div>

<?php include '../partials/footer.php'; ?>