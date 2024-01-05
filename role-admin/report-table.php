<?php include '../partials/header.php'; ?>

        <!-- Header Data Table -->
        <div class="container">
          <h3 class="mt-3 text-body-secondary">Data Report
          <a href="report-add.php">
            <button type="button" class="btn btn-primary float-end" name=""> <i class="fa fa-plus"></i> Add Data</button></a> 
          </h3>
        </div>
        <!-- End Header Data Table -->

        <!-- Report Data Table -->
        <div class="container pb-5">
          <div class="card mt-3 mb-5 shadow">
            <div class="card-body" style="overflow-x: auto;">

              <form class="d-flex mb-3" role="search" action="report-table.php" method="get">

                <!-- Menjalankan Post Pencarioan Data -->
                <?php
                  if (isset($_POST['search'])) {
                      $keyword=$_POST['search'];
                  }
                ?>

                <input class="form-control border-1 border-secondary" type="text" name="search" placeholder="Search Here" style="width: 30%">
                <input type="submit" class="btn btn-success mx-3" value="Search">
              </form> 

              <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Account</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Aktivitas</th>
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
                  
                  // Fetch Data Report
                  $sql = "SELECT * FROM tb_report";
                  $query = mysqli_query($conn, $sql);
      
                  // Menghitung Total Data
                  $total_data = mysqli_num_rows($query);
                  $total_page = ceil($total_data /  $page_end);
  
                  // Fetch Data Report Limit 5
                  $sql = "SELECT * FROM tb_report LIMIT $page_start, $page_end";
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

                        echo "<script>alert('Data Report Yang Ingin Dicari Belum Diinput, Silahkan Masukkan Data Pada Kolom Pencarian.')</script>";
                        echo "<script>window.location.href = \"report-table.php\"</script>";
                      }

                      // $i Diperiksa dengan pencocokan setiap baris data ($i+1)
                      $sql = "SELECT * FROM tb_report WHERE id_acc LIKE '%".$i."%'
                              or nama LIKE '%".$i."%'
                              or level LIKE '%".$i."%'
                              or aktivitas LIKE '%".$i."%'";

                              echo "Pencarian Data : <b>".$i."</b><br>";
                              echo "<br>";

                        // Jika $i Ditemukan, Maka Bernilai True
                        $i = true;

                      } else {
                        $sql = "SELECT * FROM tb_report LIMIT $page_start, $page_end";
                      } 

                        $query = mysqli_query($conn, $sql);

                        // Jika $i Tidak Ditemukan, Maka Bernilai False
                        if (!mysqli_num_rows($query)) {
                          $i = false;

                          // Pesan Jika Data Tidak Ditemukan
                          echo "<script>alert('Maaf, Data Report Yang Dicari Tidak Ditemukan.')</script>";
                          echo "Maaf, Data Report Tidak Ditemukan.";
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
                      <td><?php echo $data['id_acc']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td><?php echo $data['aktivitas']; ?></td>
                      
                      <td>
                          <div class="justify-center text-center gap-2">
                            <a href="report-edit.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i></button></a>
                          
                            <a onclick="return confirm('Ingin Menghapus Data ?')" href="../models/data-report/delete.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i></button></a>
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

                  <a target="_blank" class="ml-auto" href="../models/data-report/print.php">
                    <button type="button" class="btn btn-secondary ms-5" name="">
                      <i class="fa fa-print"></i> Print</button>
                  </a>
              </div>
              <!-- End Pagination Id -->

            </div>
        </div>
    </div>
    <!-- End Report Data Table -->

    <div class="p-5"></div>

<?php include '../partials/footer.php'; ?>