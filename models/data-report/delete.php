<!-- Script Delete Data Report -->
<?php 
    include '../conn.php';

    // Query Delete Data
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_report WHERE id='$id'";
    
    $query = mysqli_query($conn, $sql);

    // Pindah Ke Page Table Setelah Di Submit
    if( $query ) {
        echo "<script>alert('Data Berhasil Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/report-table.php\"</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/report-table.php\"</script>";
    }
?>
<!-- End Script Delete Data Report -->