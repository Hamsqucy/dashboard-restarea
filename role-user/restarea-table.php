<?php include '../partials/header.php'; ?>

        <!-- Header Data Table -->
        <div class="container">
          <h3 class="mt-3 text-body-secondary">Data Rest Area Travoy</h3>
        </div>
        <!-- End Header Data Table -->

        <!-- Rest Area Data Table -->
        <div class="container pb-5">
          <div class="card mt-3 mb-5 shadow">
            <div class="card-body" style="overflow-x: auto;">

              <form class="d-flex mb-3" role="search" action="restarea-table.php" method="get">

                    <button type="button" class="btn btn-outline-secondary" name=""> 
                    <?php
                        // Variable Time End Untuk Respone Speed
                        $time_end = microtime(true);

                        // Proses Perhitungan Respon Speed dan Tampil Pada Halaman
                        echo '<b>Search Speed : </b>'. round(($time_end - $time_start) * 1000, 2) .' ms'; ?>
                    </button>

                    <!-- Menjalankan Post Pencarioan Data -->
                    <?php
                      if (isset($_POST['search'])) {
                          $keyword=$_POST['search'];
                      }
                    ?>

                    <input class="form-control border-1 border-secondary ms-3" type="text" name="search" placeholder="Search Here" style="width: 30%"> 
                    <input type="submit" class="btn btn-success mx-3" value="Search">
              </form> 

              <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Rest Area</th>
                        <th>KM</th>
                        <th>Ruas</th>
                        <th>Tipe</th>
                        <th>Luas</th>
                        <th>Status</th>
                        <th>Entitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                  include "../models/conn.php";

                  // Pagination
                  $page_end = 5;
                  $page = isset($_GET['page'])?(int)$_GET['page'] : 1;  
                  $page_start = ($page > 1) ? ($page * $page_end) - $page_end : 0;

                  $before = $page - 1;
                  $after = $page + 1;
                  
                  // Fetch Data Rest Area
                  $sql = "SELECT * FROM tb_restarea";
                  $query = mysqli_query($conn, $sql);
      
                  // Menghitung Total Data
                  $total_data = mysqli_num_rows($query);
                  $total_page = ceil($total_data /  $page_end);
  
                  // Fetch Data Rest Area Limit 5
                  $sql = "SELECT * FROM tb_restarea LIMIT $page_start, $page_end";
                  $query = mysqli_query($conn, $sql);
                  $id = $page_start + 1;
                  // End Pagination

                  // Search
                  // Proses Pertama Pencarian $i = 0
                  if (isset($_GET['search'])) {
                      $i = ($_GET['search']);

                      // Proses Pencarian Apabila Data Kosong / Bernilai False
                      if($_GET['search']==""){
                        $i = false;

                        echo "<script>alert('Data Rest Area Travoy Yang Ingin Dicari Belum Diinput, Silahkan Masukkan Data Pada Kolom Pencarian.')</script>";
                        echo "<script>window.location.href = \"restarea-table.php\"</script>";
                      }

                      // $i Diperiksa dengan pencocokan setiap baris data ($i+1)
                      $sql = "SELECT * FROM tb_restarea WHERE nama_restarea LIKE '%".$i."%'
                              or km LIKE '%".$i."%'
                              or tipe LIKE '%".$i."%'
                              or status LIKE '%".$i."%'
                              or entitas LIKE '%".$i."%'";

                              echo "Pencarian Data : <b>".$i."</b><br>";
                              echo "<br>";

                        // Jika $i Ditemukan, Maka Bernilai True
                        $i = true;

                      } else {
                        $sql = "SELECT * FROM tb_restarea LIMIT $page_start, $page_end";
                      } 

                        $query = mysqli_query($conn, $sql);

                        // Jika $i Tidak Ditemukan, Maka Bernilai False
                        if (!mysqli_num_rows($query)) {
                          $i = false;

                          // Pesan Jika Data Tidak Ditemukan
                          echo "<script>alert('Maaf, Data Rest Area Travoy Yang Dicari Tidak Ditemukan.')</script>";
                          echo "Maaf, Data Rest Area Travoy Tidak Ditemukan.";
                          echo "<br>";
                        } 
                        // End Search
                ?>

                <?php
                  while ($data = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['nama_restarea']; ?></td>
                      <td><?php echo $data['km']; ?></td>
                      <td><?php echo $data['ruas']; ?></td>
                      <td><?php echo $data['tipe']; ?></td>
                      <td><?php echo $data['luas_lahan']; ?></td>
                      <td><?php echo $data['status']; ?></td>
                      <td><?php echo $data['entitas']; ?></td>
                      
                      <td>
                          <div class="justify-center d-flex text-center gap-2">
                            <a href="restarea-details.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-success" name=""> <i class="fa fa-eye"></i></button></a>
                          </div>
                      </td>
                    </tr>
                </tbody>
                <?php } ?>
                
              </table>

              <!-- Pagination Id -->
              <div class="wrapper d-flex" style="justify-content: space-between;">

                  <!-- Pagination -->
                  <nav aria-label="Page navigation example" class="d-flex align-items-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link bg-body-secondary" <?php if($page > 1){ echo "href='?page=$before'"; } ?>>Previous</a>
                        </li>
                        <?php 
                            for($x = 1; $x <= $total_page; $x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"> <?php echo $x; ?></a></li>
                        <?php
                            }
                        ?> 
                        <li class="page-item">
                            <a class="page-link" <?php if($page < $total_page) { echo "href='?page=$after'"; } ?>>Next</a>
                        </li>
                    </ul>
                  </nav>
                  <!-- End Pagination -->

                  <a target="_blank" class="ml-auto" href="../models/data-restarea/print.php">
                    <button type="button" class="btn btn-secondary ms-5" name="">
                      <i class="fa fa-print"></i> Print</button>
                  </a>
              </div>
              <!-- End Pagination Id -->

            </div>
        </div>
    </div>
    <!-- End Rest Area Data Table -->

    <div class="p-5"></div>

<?php include '../partials/footer.php'; ?>