<!-- Script Delete Data Account -->
<?php 
    include '../conn.php';

    // Query Delete Data
    $id_acc = $_GET['id_acc'];
    $sql = "DELETE FROM tb_account WHERE id_acc='$id_acc'";
    
    $query = mysqli_query($conn, $sql);

    // Pindah Ke Page Table Setelah Di Submit
    if( $query ) {
        echo "<script>alert('Data Berhasil Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus.')</script>";
        echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
    }
?>
<!-- End Script Delete Data Account -->