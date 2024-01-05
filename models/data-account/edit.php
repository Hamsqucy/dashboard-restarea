<!-- Script Edit Data Account -->
<?php 
    include '../conn.php';
 
    if(isset($_POST['submit'])) {
   
        $id_acc = $_POST['id_acc'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $divisi = $_POST['divisi'];
        
        // Query Update/Edit Data
        $sql = "UPDATE tb_account SET nama='$nama', username='$username', password='$password', level='$level', divisi='$divisi' WHERE id_acc='$id_acc'";
        
        $query = mysqli_query($conn, $sql);

        }

        // Pindah Ke Page Table Setelah Di Submit
        if( $query ) {
            echo "<script>alert('Data Berhasil Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
    }
?>
<!-- End Script Edit Data Account -->