<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Add Data Account</h3>
</div>
 <!-- End Header Data Table -->

<!-- Form Add Data Account -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">
            
                <form method="post" action="../models/data-account/add.php">
                    <div class="mb-3">
                        <label for="id_acc" class="form-label">ID Account</label>
                        <input type="text" class="form-control border-1 border-secondary" name="id_acc" placeholder="Silahkan Input ID Akun Baru">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control border-1 border-secondary" name="nama" placeholder="Silahkan Input Nama Akun Baru">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control border-1 border-secondary" name="username" placeholder="Silahkan Input Username Akun Baru">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control border-1 border-secondary" name="password" placeholder="Silahkan Input Password Akun Baru">
                    </div>

                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select name="level" class="form-control border-1 border-secondary">
                            <option value="">-- Silahkan Pilih Level Akun Baru --</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" class="form-control border-1 border-secondary">
                            <option value="">-- Silahkan Pilih Divisi Akun Baru --</option>
                            <option value="Bisnis Komersial">Bisnis Komersial</option>
                            <option value="Keuangan">Keuangan</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="SDM & Umum">SDM & Umum</option>
                            <option value="Teknik & Pengendalian Proyek">Teknik & Pengendalian Proyek</option>
                        </select>
                    </div>

                    <div class="float-end">
                        <a href="account-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- End Form Add Data Account -->

<?php include '../partials/footer.php'; ?>