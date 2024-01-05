<!-- Script Edit Data Rest Area -->
<?php 
    include '../conn.php';
 
    if(isset($_POST['submit'])) {
   
        $id = $_POST['id'];
        $nama_restarea = $_POST['nama_restarea'];
        $km = $_POST['km'];
        $ruas = $_POST['ruas'];
        $tipe = $_POST['tipe'];
        $luas_lahan = $_POST['luas_lahan'];
        $status = $_POST['status'];
        $entitas = $_POST['entitas'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        
        // Query Update/Edit Data
        $sql = "UPDATE tb_restarea SET nama_restarea='$nama_restarea', km='$km', ruas='$ruas', tipe='$tipe',
                                                    luas_lahan='$luas_lahan', status='$status', entitas='$entitas',
                                                    latitude='$latitude', longitude='$longitude' WHERE id='$id'";
        
        $query = mysqli_query($conn, $sql);

        }

        // Pindah Ke Page Table Setelah Di Submit
        if( $query ) {
            echo "<script>alert('Data Berhasil Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
    }
?>
<!-- End Script Edit Data Rest Area -->