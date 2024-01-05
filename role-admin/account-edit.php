<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Edit Data Account</h3>
</div>
 <!-- End Header Data Table -->

<?php 
	include "../models/conn.php";

	$id_acc = $_GET['id_acc'];

	$sql = "SELECT * FROM tb_account WHERE id_acc='$id_acc'";

    $query = mysqli_query($conn, $sql);

	while ($data = mysqli_fetch_array($query))
    {
?>

<!-- Form Edit Data Account -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">
            
                <form method="post" action="../models/data-account/edit.php">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="hidden" class="form-control" name="id_acc" value="<?php echo $data['id_acc'] ?>">
                        <input type="text" class="form-control border-1 border-secondary" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control border-1 border-secondary" name="username" value="<?php echo $data['username'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control border-1 border-secondary" name="password" value="<?php echo $data['password'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select name="level" class="form-control border-1 border-secondary">
                        <?php
                            if ($data['level'] == "Admin") echo "<option value='Admin' selected>Admin</option>";
                            else echo "<option value='Admin'>Admin</option>";
                            
                            if ($data['level'] == "User") echo "<option value='User' selected>User</option>";
                            else echo "<option value='User'>User</option>";        
                        ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" class="form-control border-1 border-secondary">
                        <?php
                            if ($data['divisi'] == "Bisnis Komersial") echo "<option value='Bisnis Komersial' selected>Bisnis Komersial</option>";
                            else echo "<option value='Bisnis Komersial'>Bisnis Komersial</option>";
                            
                            if ($data['divisi'] == "Keuangan") echo "<option value='Keuangan' selected>Keuangan</option>";
                            else echo "<option value='Keuangan'>Keuangan</option>";
                            
                            if ($data['divisi'] == "Pemasaran") echo "<option value='Pemasaran' selected>Pemasaran</option>";
                            else echo "<option value='Pemasaran'>Pemasaran</option>";
                            
                            if ($data['divisi'] == "SDM & Umum") echo "<option value='SDM & Umum' selected>SDM & Umum</option>";
                            else echo "<option value='SDM & Umum'>SDM & Umum</option>";

                            if ($data['divisi'] == "Teknik & Pengendalian Proyek") echo "<option value='Teknik & Pengendalian Proyek' selected>Teknik & Pengendalian Proyek</option>";
                            else echo "<option value='Teknik & Pengendalian Proyek'>Teknik & Pengendalian Proyek</option>";
                        ?>
                        </select>
                    </div>

                    <div class="float-end">
                        <a href="account-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End Form Edit Data Account -->

<?php include '../partials/footer.php'; ?>