<!-- Script Add Data Account -->
<?php 
    include '../conn.php';

    if(isset($_POST['submit'])) {

        $id_acc = $_POST['id_acc'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $divisi = $_POST['divisi'];
        
        // Query Anti Duplicate Insert
        $sql_id = "SELECT * FROM tb_account WHERE id_acc = '$_POST[id_acc]'";
        $query_id = mysqli_query($conn, $sql_id);
        $check_id = mysqli_num_rows($query_id);

        $sql_name = "SELECT * FROM tb_account WHERE nama = '$_POST[nama]'";
        $query_name = mysqli_query($conn, $sql_name);
        $check_name = mysqli_num_rows($query_name);
        
        $sql_username = "SELECT * FROM tb_account WHERE username = '$_POST[username]'";
        $query_username = mysqli_query($conn, $sql_username);
        $check_username = mysqli_num_rows($query_username);

        if (($check_id || $check_name || $check_username) > 0){
            
            echo "<script>alert('Silahkan Menggunakan ID atau Nama atau Username Yang Berbeda. Terima Kasih.')</script>";
            echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
        
        } elseif ($query_id || $query_name || $query_username) {

        // Query Insert Data
        $sql = "INSERT INTO tb_account (id_acc, nama, username, password, level, divisi)
                VALUES ('$id_acc', '$nama', '$username', '$password', '$level', '$divisi')";

        $query = mysqli_query($conn, $sql);
        
        // Pindah Ke Page Table Setelah Di Submit
            echo "<script>alert('Data Berhasil Ditambah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
            
        } else {
            echo "<script>alert('Data Gagal Ditambah.')</script>";
            echo "<script>window.location.href = \"../../role-admin/account-table.php\"</script>";
        }
    }
?>
<!-- End Script Add Data Account -->