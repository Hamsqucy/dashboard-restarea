<!-- Script Edit Data Report -->
<?php 
    include '../conn.php';
 
    if(isset($_POST['submit'])) {
   
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $level = $_POST['level'];
        $aktivitas = $_POST['aktivitas'];
       
        // Query Update/Edit Data
        $sql = "UPDATE tb_report SET nama='$nama', level='$level', aktivitas='$aktivitas' WHERE id='$id'";
        
        $query = mysqli_query($conn, $sql);

        }

        // Pindah Ke Page Table Setelah Di Submit
        if( $query ) {
            echo "<script>alert('Data Berhasil Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/report-table.php\"</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/report-table.php\"</script>";
    }
?>
<!-- End Script Edit Data Report -->