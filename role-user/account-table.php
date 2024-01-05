<?php include '../partials/header.php'; ?>

  <!-- Header Data Table -->
  <div class="container">
    <h3 class="mt-3 text-body-secondary">Data Account Added</h3>
  </div>
  <!-- End Header Data Table -->

  <!-- Account Data Table -->
  <div class="container pb-5">
    <div class="card mt-3 mb-5 shadow">
      <div class="card-body" >
        <img src="../assets/img/icon-error.svg" class="mx-auto d-block mt-5 mb-5" width="30%">
          <h4 class="mt-3 text-body-secondary text-center">Mohon Maaf <b><i><?php echo $_SESSION['username']; ?></i></b>, Anda Tidak Memiliki Akses Untuk Melihat Halaman Ini.</h4>
      </div>
    </div>
  </div>
  <!-- End Account Data Table -->

  <div class="p-5"></div>

<?php include '../partials/footer.php'; ?>