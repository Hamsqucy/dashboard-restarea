<?php include '../partials/header.php'; ?>

<!-- Header Data  -->
<div class="container">
    <h3 class="mt-3 text-center text-body-secondary">Details Data Rest Area</h3>
</div>
<!-- End Header Data -->

<?php 
	include "../models/conn.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM tb_restarea WHERE id='$id'";

    $query = mysqli_query($conn, $sql);

    $id = 1;

	while ($data = mysqli_fetch_array($query))
    {
?>

<!-- Details Data Rest Area -->
<div class="container">
    <img src="../assets/img/icon-build.svg" class="float-end mt-5" style="max-width: 100%;height: 300px;">
        <div class="card-text text-body-dark fs-5 fw-medium mt-5" style="max-width: 38rem;">
            
            <div class="card-group mb-2">
                <div class="card text-bg-secondary ">
                    <div class="card-header">
                        Nama Rest Area :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['nama_restarea'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        KM :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['km'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        Ruas Jalan :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['ruas'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        Tipe Rest Area :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['tipe'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        Luas Lahan :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['luas_lahan'] ?> HA</li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        Status Rest Area :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['status']?></li>
                    </ul>
                </div>
            </div>
            <div class="card-group mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-header">
                        Entitas Rest Area :
                    </div>
                </div>
                <div class="card border-secondary">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $data['entitas'] ?></li>
                    </ul>
                </div>
            </div>
    </div>
</div>
<!-- End Details Data Rest Area -->

<!-- Header Google Maps Coordinate  -->
<div class="container">
    <h3 class="mt-5 text-center text-body-secondary">Google Maps</h3>
    <h5 class="text-center text-body-secondary"><?php echo $data['nama_restarea'] ?></h5>
        <div class="card col-md-9 mt-2 mx-auto shadow">
            <div class="justify-center my-3 mx-3">
                
                <div class="card-text text-body-dark fs-5 fw-medium mb-3" style="max-width: 50rem;">
                    <div class="card-group">
                        <div class="card text-bg-secondary">
                            <div class="card-header">
                                Latitude & Longitude :
                            </div>
                        </div>
                        <div class="card border-secondary">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" id="myInput"> <?php echo $data['latitude'] ?>, <?php echo $data['longitude'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="googleMap" style="max-width: 100%;height: 500px;"></div>
            </div>
        </div>
</div>
<!-- End Header Google Maps Coordinate  -->

<!-- Text Information  -->
<div class="container">    
    <h5 class="mt-5 mb-5 pb-5 text-center text-body-secondary">Untuk Informasi Lebih Lanjut, Hubungi Admin<br>
    Website Pencarian Data Rest Area PT Jasamarga Related Business<br> </h5>
</div>
<!-- End Text Information -->

<!-- Script API Google Maps Platform -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- Script Google Maps Marker -->
    <script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(<?php echo $data['latitude'] ?>,<?php echo $data['longitude'] ?>),
            zoom:18,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        
        // Mendeklarasikan Google Maps Marker
        var marker=new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $data['latitude'] ?>,<?php echo $data['longitude'] ?>),
            map: peta,
            animation: google.maps.Animation.BOUNCE
        });

        }

        // Load Window Google Maps
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- End Script Google Maps Marker -->

<?php } ?>

<div class="p-5"></div>

<?php include '../partials/footer.php'; ?>