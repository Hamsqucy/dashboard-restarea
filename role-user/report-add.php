<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Add Data Report</h3>
</div>
<!-- End Header Data Table -->

<?php

$sql = "SELECT * FROM tb_account ";
$result = mysqli_query($conn, $sql);
$length = mysqli_num_rows($result);
$acc = mysqli_fetch_all($result);

?>

<!-- Form Add Data Report -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">

                <form method="post" enctype="multipart/form-data" action="img/add.php">
                    
                    <div class="mb-3">
                    <label for="id_acc" class="form-label">ID Account</label>
                      <select class="form-label form-control border-1 border-secondary" name="id_acc">
                        <option selected>-- Silahkan Pilih ID Account Anda --</option>
                        <?php
                        for ($i = 0; $i <= $length - 1; $i++) {
                          echo "<option value=" . $acc[$i][0] . ">" . $acc[$i][0] . "</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control border-1 border-secondary" name="nama" placeholder="Silahkan Input Nama Anda">
                    </div>

                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select name="level" class="form-control border-1 border-secondary">
                            <option value="User" selected>User</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="aktivitas" class="form-label">Aktivitas</label>
                        <input type="text" class="form-control border-1 border-secondary" name="aktivitas" placeholder="Silahkan Input Aktivitas Anda Hari Ini">
                    </div>

                    <div class="mb-3">
                        <label for="evidence" class="form-label">Screenshot Evidence</label>
                        <input class="form-control border-1 border-secondary" type="file" name="evidence">
                    </div>

                    <div class="float-end">
                        <a href="report-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- End Form Add Data Report -->

<?php include '../partials/footer.php'; ?>