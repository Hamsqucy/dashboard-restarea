<?php include '../partials/header.php'; ?>

<!-- Header Data Table -->
<div class="container">
    <h3 class="mt-3 text-body-secondary">Add Data Rest Area</h3>
</div>
 <!-- End Header Data Table -->

<!-- Form Add Data Rest Area -->
<div class="container mt-3 mb-3 pb-5">
    <div class="card shadow">
        <div class="card-body">
            
                <form method="post" action="../models/data-restarea/add.php">
                    <div class="mb-3">
                        <label for="nama_restarea" class="form-label">Nama Rest Area</label>
                        <input type="text" class="form-control border-1 border-secondary" name="nama_restarea" placeholder="Silahkan Input Nama Rest Area">
                    </div>

                    <div class="mb-3">
                        <label for="km" class="form-label">KM</label>
                        <input type="number" class="form-control border-1 border-secondary" name="km" placeholder="Silahkan Input Titik Koordinat Kilometer">
                    </div>

                    <div class="mb-3">
                        <label for="ruas" class="form-label">Ruas</label>
                        <input type="text" class="form-control border-1 border-secondary" name="ruas" placeholder="Silahkan Input Titik Ruas Jalan Tol">
                    </div>

                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select name="tipe" class="form-control border-1 border-secondary">
                            <option value="">-- Silahkan Input Tipe Rest Area --</option>
                            <option value="Tipe A">Tipe A</option>
                            <option value="Tipe B">Tipe B</option>
                            <option value="Tipe C">Tipe C</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="luas_lahan" class="form-label">Luas Lahan</label>
                        <input type="number" step="00.1" class="form-control border-1 border-secondary" name="luas_lahan" placeholder="Silahkan Input Luas Lahan Dengan Satuan Hektare">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control border-1 border-secondary">
                            <option value="">-- Silahkan Pilih Status Rest Area --</option>
                            <option value="Beroperasi">Beroperasi</option>
                            <option value="Fungsional">Fungsional</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="entitas" class="form-label">Entitas</label>
                        <select name="entitas" class="form-control border-1 border-secondary">
                            <option value="">-- Silahkan Pilih Entitas Rest Area --</option>
                            <option value="-">-</option>
                            <option value="Joint Venture">Joint Venture</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control border-1 border-secondary" name="latitude" placeholder="Silahkan Input Koordinat Maps Dari Rest Area">
                    </div>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control border-1 border-secondary" name="longitude" placeholder="Silahkan Input Koordinat Maps Dari Rest Area">
                    </div>

                    <div class="float-end">
                        <a href="restarea-table.php">
                        <button type="button" class="btn btn-danger" name="">Cancel</button></a> 

                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- End Form Add Data Rest Area -->

<?php include '../partials/footer.php'; ?>