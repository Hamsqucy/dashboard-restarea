<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Edit Data Report</h3>
</div>
 <!-- End Header Data Table -->

<?php 
	include "../models/conn.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM tb_report WHERE id='$id'";

    $query = mysqli_query($conn, $sql);

    $id = 1;

	while ($data = mysqli_fetch_array($query))
    {
?>

<!-- Form Edit Data Report -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">
            
                <form method="post" action="../models/data-report/edit.php">
                    <div class="mb-3">
                        <label for="id_acc" class="form-label">ID Account</label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" class="form-control border-1 border-secondary" name="id_acc" value="<?php echo $data['id_acc'] ?>"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control border-1 border-secondary" name="nama" value="<?php echo $data['nama'] ?>">
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
                        <label for="aktivitas" class="form-label">Aktivitas</label>
                        <input type="text" class="form-control border-1 border-secondary" name="aktivitas" value="<?php echo $data['aktivitas'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="evidence" class="form-label">Screenshot Evidence</label>
                        <input class="form-control border-1 border-secondary" type="file" name="evidence" value="<?php echo $data['evidence'] ?>" disabled>
                    </div>

                    <div class="float-end">
                        <a href="report-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End Form Edit Data Report -->

<?php include '../partials/footer.php'; ?>