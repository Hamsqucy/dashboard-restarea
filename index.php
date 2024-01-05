<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/logo-jmrb.png">
  <title>Jasa Marga Related Business</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
  
  <!-- Icon Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- Bootstrap Javascript -->
  <script src=".bootstrap/js/bootstrap.min.js"></script>

  <style>
    .logo {
      transition: all .2s ease-in-out;
    }
    .logo:hover {
      translate: 15px;
    }
    .navtext {
      border-radius: 5px;
    }
    .navtext:hover {
      background-color: #ffffff;
      border-radius: 5px;
    }
  </style>

  </head>
<body>

<!-- Navigation Bar -->
<nav class="navbar bg-body-secondary shadow-sm">
    <div class="container-md">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logo-perusahaan.png" alt="logo" width="50%" class="logo d-inline-block align-text-top">
      </a>

      <div class="d-flex justify-content-center gap-3">
            <a href="login-admin.php">
            <button type="button" class="btn btn-primary" name="">Login Admin</button></a>
            <a href="login-user.php">
            <button type="button" class="btn btn-warning" name="">Login User</button></a>
      </div>
</nav>
<!-- End Navigation Bar -->

<div class="container">
    <div class="py-5 mb-5">
        <img src="assets/img/thumbnail1.jpg" class="float-end rounded shadow mb-2" style="max-width: 100%;height: 30%;">
            <h1 class="col-md-6 mt-5" style="color:#293f8c;">
                <strong>Rest Area</strong>
            </h1>
            <h5 class="col-md-6 mt-2" style="color:#293f8c;text-align:justify;">
                <strong>
                Merupakan salah satu fasilitas yang dapat digunakan
                untuk masyarakat khususnya pengguna jalan tol yang
                telah membayar biaya untuk mendapatkan layanan jalan
                tol tersebut yang memiliki fungsi sebagai tempat persinggahan
                sementara saat melakukan perjalanan.
                </strong>
            </h5>

            <a href="#CardSession">
            <button type="button" class="btn btn-warning btn-lg mt-2 text-white shadow mb-5" name="">
            <strong>Our Business</strong></button></a>
    </div>
</div>

<!-- Card Session -->
<div class="p-5 mb-5 mt-5" id="CardSession" style="background-color:#293f8c;">
  <div class="container">

    <p class="fs-1 text-center" style="color:#f2c810;"><strong>Our business</strong></p>
    <p class="fs-5 text-center text-white pb-2"><strong>Berikut adalah beberapa project rest area dari kami</strong></p>

    <div class="row d-flex justify-content-center gap-3">

      <div class="col">
        <div class="card h-100">
          <img src="assets/img/thumbnail1.jpg" class="card-img-top" alt="thumbnail1" style="height:12rem;">
          <div class="card-body">
            <h5 class="card-title fs-4" style="color:#f2c810;"><b>Rest Area Travoy KM 519 A</b></h5>
            <p class="cardcl-text" style="text-align: justify;color:#293f8c;"><b>Tempat Istirahat Sejenak Yang Tersedia Pada Ruas Jalan Tol Solo-Ngawi (Arah Ngawi)</b></p>
            <a href=""><button class="btn btn-primary"><span>Details</span></button></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="assets/img/thumbnail2.jpg" class="card-img-top" alt="thumbnail2" style="height:12rem;">
          <div class="card-body">
            <h5 class="card-title fs-4" style="color:#f2c810;"><b>Rest Area Travoy KM 538 A</b></h5>
            <p class="cardcl-text" style="text-align: justify;color:#293f8c;"><b>Tempat Istirahat Sejenak Yang Tersedia Pada Ruas Jalan Tol Solo-Ngawi (Arah Ngawi)</b></p>
            <a href=""><button class="btn btn-primary"><span>Details</span></button></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="assets/img/thumbnail3.jpg" class="card-img-top" alt="thumbnail3" style="height:12rem;">
          <div class="card-body">
            <h5 class="card-title fs-4" style="color:#f2c810;"><b>Rest Area Travoy KM 597 A</b></h5>
            <p class="cardcl-text" style="text-align: justify;color:#293f8c;"><b>Tempat Istirahat Sejenak Yang Tersedia Pada Ruas Jalan Tol Ngawi-Kertosono (Arah Kertosono)</b></p>
            <a href=""><button class="btn btn-primary"><span>Details</span></button></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="assets/img/thumbnail4.jpg" class="card-img-top" alt="thumbnail4" style="height:12rem;">
          <div class="card-body">
            <h5 class="card-title fs-4" style="color:#f2c810;"><b>Rest Area Travoy KM 65 A</b></h5>
            <p class="cardcl-text" style="text-align: justify;color:#293f8c;"><b>Tempat Istirahat Sejenak Yang Tersedia Pada Ruas Jalan Tol Kualanamu-Tebing Tinggi (Arah Tebing Tinggi)</b></p>
            <a href=""><button class="btn btn-primary"><span>Details</span></button></a>
          </div>
        </div>
      </div>

    </div>
  </div>

    <!-- Header Google Maps Coordinate  -->
    <div class="container mb-5">
      <p class="fs-1 text-center mt-5 pt-5" style="color:#f2c810;"><strong>Our office location</strong></p>
            <div class="card col-md-9 mt-2 mx-auto shadow">
                <div class="justify-center my-3 mx-3">
                    <div id="googleMap" style="max-width:100%;height:500px;"></div>
                </div>
            </div>
    </div>
    <!-- End Header Google Maps Coordinate  -->

</div>
<!-- End Card Session -->

<!-- Comment Session -->
<div class="bg-white" id="CommentSession">
  <div class="container mb-5">
  <p class="fs-1 text-center mb-5" style="color:#293f8c;"><strong>Leave your comments</strong></p>
  
  <form action="models/comment/add.php" method="post">

    <div class="form-floating mb-3 shadow-sm">
      <input type="text" class="form-control border-1 border-secondary" name="nama" id="nama" autocomplete="off">
      <label for="floatingInputValue"><b>Name</b></label>
    </div>

    <div class="form-floating mb-3 shadow-sm">
      <textarea class="form-control border-1 border-secondary" name="comment" style="height:10rem;" id="comment" autocomplete="off"></textarea>
      <label for="floatingTextarea"><b>Comments</b></label>
    </div>
    
    <a href="index.php">
    <button type="reset" class="btn btn-danger" name="">Reset</button></a> 

    <input type="submit" name="submit" class="btn btn-primary" value="Submit">

    </form>
  </div>
</div>
<!-- End Comment Session -->

<div class="p-5"></div>

<?php include 'partials/footer.php'; ?>
 
<script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- Script Google Maps Marker -->
    <script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-6.2925869023829275,106.87934312202371),
            zoom:18,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        
        // Mendeklarasikan Google Maps Marker
        var marker=new google.maps.Marker({
            position: new google.maps.LatLng(-6.2925869023829275,106.87934312202371),
            map: peta,
            animation: google.maps.Animation.BOUNCE
        });

        }

        // Load Window Google Maps
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- End Script Google Maps Marker -->
</body>
</html>