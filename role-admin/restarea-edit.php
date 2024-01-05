<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Edit Data Rest Area</h3>
</div>
 <!-- End Header Data Table -->

<?php 
	include "../models/conn.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM tb_restarea WHERE id='$id'";

    $query = mysqli_query($conn, $sql);

    $id = 1;

	while ($data = mysqli_fetch_array($query))
    {
?>

<!-- Form Add Data Rest Area -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">
            
                <form method="post" action="../models/data-restarea/edit.php">
                    <div class="mb-3">
                        <label for="nama_restarea" class="form-label">Nama Rest Area</label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" class="form-control border-1 border-secondary" name="nama_restarea" value="<?php echo $data['nama_restarea'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="km" class="form-label">KM</label>
                        <input type="number" class="form-control border-1 border-secondary" name="km" value="<?php echo $data['km'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="ruas" class="form-label">Ruas</label>
                        <input type="text" class="form-control border-1 border-secondary" name="ruas" value="<?php echo $data['ruas'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select name="tipe" class="form-control border-1 border-secondary">
                        <?php
                            if ($data['tipe'] == "Tipe A") echo "<option value='Tipe A' selected>Tipe A</option>";
                            else echo "<option value='Tipe A'>Tipe A</option>";
                            
                            if ($data['tipe'] == "Tipe B") echo "<option value='Tipe B' selected>Tipe B</option>";
                            else echo "<option value='Tipe B'>Tipe B</option>";   
                            
                            if ($data['tipe'] == "Tipe C") echo "<option value='Tipe C' selected>Tipe C</option>";
                            else echo "<option value='Tipe C'>Tipe C</option>";
                        ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="luas_lahan" class="form-label">Luas Lahan</label>
                        <input type="number" step="00.1" class="form-control border-1 border-secondary" name="luas_lahan" value="<?php echo $data['luas_lahan'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control border-1 border-secondary">
                        <?php
                            if ($data['status'] == "Beroperasi") echo "<option value='Beroperasi' selected>Beroperasi</option>";
                            else echo "<option value='Beroperasi'>Beroperasi</option>";
                            
                            if ($data['status'] == "Fungsional") echo "<option value='Fungsional' selected>Fungsional</option>";
                            else echo "<option value='Fungsional'>Fungsional</option>";   
                        ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="entitas" class="form-label">Entitas</label>
                        <select name="entitas" class="form-control border-1 border-secondary">
                        <?php
                            if ($data['entitas'] == "-") echo "<option value='-' selected>-</option>";
                            else echo "<option value='-'>-</option>";
                            
                            if ($data['entitas'] == "Joint Venture") echo "<option value='Joint Venture' selected>Joint Venture</option>";
                            else echo "<option value='Joint Venture'>Joint Venture</option>";   
                        ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control border-1 border-secondary" name="latitude" value="<?php echo $data['latitude'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control border-1 border-secondary" name="longitude" value="<?php echo $data['longitude'] ?>">
                    </div>

                    <div class="float-end">
                        <a href="restarea-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End Form Add Data Rest Area -->

<?php include '../partials/footer.php'; ?>