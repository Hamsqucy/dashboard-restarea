<!-- Script Delete Data Rest Area -->
<?php 
    include '../conn.php';

    // Query Delete Data
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_restarea WHERE id='$id'";
    
    $query = mysqli_query($conn, $sql);

    // Pindah Ke Page Table Setelah Di Submit
    if( $query ) {
        echo "<script>alert('Data Berhasil Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/restarea-table.php\"</script>";
    }
?>
<!-- Script Delete Data Rest Area -->