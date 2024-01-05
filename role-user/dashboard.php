<?php include '../partials/header.php'; ?>

<!-- Header Data  -->
<div class="container">
    <h3 class="mt-5 text-center text-body-secondary">Halo <b><i><?php echo $_SESSION['username']; ?></i></b>, Anda Berhasil Login Sebagai User.</h3>
</div>
<!-- End Header Data -->

<!-- Dashboard Content -->
<div class="container">
    <div class="py-5 mb-5">
        <img src="../assets/img/icon-find.svg" class="float-end mb-2" style="max-width:100%;height: 20rem;">
        <h1 class="col-md-6 mt-5 text-body-secondary">
            <b>Selamat Datang di Dashboard Website Pencarian Data Rest Area</b></h1>
        <h5 class="col-md-6 mt-2 text-body-secondary" style="text-align:justify;">
            Travoy Yang Dikelola Oleh
            Admin PT Jasamarga Related Business (JMRB)
            Untuk Menunjang Aktivitas Bisnis Perusahaan
            Dalam Melakukan Pendataan Rest Area Travoy.</h5>
    </div>
</div>
<!-- End Dashboard Content -->

<div class="p-5"></div>

<?php include '../partials/footer.php'; ?>