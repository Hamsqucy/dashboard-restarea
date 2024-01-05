<!-- Script Add Data Rest Area -->
<?php 
    include '../conn.php';

    if(isset($_POST['submit'])) {

        $nama_restarea = $_POST['nama_restarea'];
        $km = $_POST['km'];
        $ruas = $_POST['ruas'];
        $tipe = $_POST['tipe'];
        $luas_lahan = $_POST['luas_lahan'];
        $status = $_POST['status'];
        $entitas = $_POST['entitas'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        
        // Query Anti Duplicate Insert
        $sql_name = "SELECT * FROM tb_restarea WHERE nama_restarea = '$_POST[nama_restarea]'";
        $query_name = mysqli_query($conn, $sql_name);
        $check_name = mysqli_num_rows($query_name);
        
        $sql_latitude = "SELECT * FROM tb_restarea WHERE latitude = '$_POST[latitude]'";
        $query_latitude = mysqli_query($conn, $sql_latitude);
        $check_latitude = mysqli_num_rows($query_latitude);

        $sql_longitude = "SELECT * FROM tb_restarea WHERE longitude = '$_POST[longitude]'";
        $query_longitude = mysqli_query($conn, $sql_longitude);
        $check_longitude = mysqli_num_rows($query_longitude);
        
        if (($check_name || $check_latitude || $check_longitude) > 0){
            
            echo "<script>alert('Data Rest Area Sudah Ada di Database. Terima Kasih.')</script>";
            echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
        
        } elseif ($query_name || $query_latitude || $query_longitude) {

        // Query Insert Data
        $sql = "INSERT INTO tb_restarea (nama_restarea, km, ruas, tipe, luas_lahan, status, entitas, latitude, longitude)
                VALUES ('$nama_restarea', '$km', '$ruas', '$tipe', '$luas_lahan', '$status', '$entitas', '$latitude', '$longitude')";

        $query = mysqli_query($conn, $sql);

        // Pindah Ke Page Table Setelah Di Submit
            echo "<script>alert('Data Berhasil Ditambah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
        
        } else {
            echo "<script>alert('Data Gagal Ditambah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
        }
    }
?>
<!-- End Script Data Rest Area -->